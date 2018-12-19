<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            $foods = [
                ['Hanover', 'Corn', '2019-01-01', '1', 'Freezer'],
                ['Bush', 'Garbanzo Beans', '2020-01-01', '1', 'Pantry'],
                ['Fresh', 'Kale', '2018-12-01', '1', 'Refrigerator'],
            ];

            $count = count($foods);

            foreach ($foods as $key => $foodData) {
                $foods = new Food();

                $foods->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
                $foods->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
                $foods->food_name = $foodData[0];
                $foods->brand_name = $foodData[1];
                $foods->expiration_date = $foodData[2];
                $foods->quantity = $foodData[3];
                $foods->location = $foodData[4];

                $foods->save();
                $count--;
            }
        }//end run
}
