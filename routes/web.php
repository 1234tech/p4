<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Built-in default view
Route::get('/', 'FoodController@welcome');

# Add an item
Route::get('/foods/add', 'FoodController@add');
Route::post('/foods', 'FoodController@store');

# Remove an item
Route::get('/foods/remove', 'FoodController@remove');

#View items that will expire
Route::get('/foods/expire', 'FoodController@expire');

# Update an item
Route::get('/foods/update/', 'FoodController@edit');
Route::put('/foods/update/results', 'FoodController@update');

#Built-in debugger
Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
