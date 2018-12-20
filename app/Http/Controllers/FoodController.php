<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Food;

class FoodController extends Controller
{

    public function welcome()
    {
        return view('foods.welcome');
    }//end welcome


    public function add(Request $request)
    {
        return view('foods.add');
    }//end add

    public function store(Request $request)
    {

        $request->validate([
            'brand_name' => 'required',
            'item_name' => 'required',
            'expiration_month' => 'required',
            'expiration_day' => 'required',
            'expiration_year' => 'required',
            'quantity' => 'required|numeric',
            'location' => 'required'
        ]);

        $food = new Food();
        $food->brand_id = $request->input('brand_name');
        $food->item_name = $request->input('item_name');
        $food->expiration_month = $request->input('expiration_month');
        $food->expiration_day = $request->input('expiration_day');
        $food->expiration_year = $request->input('expiration_year');
        $food->quantity = $request->input('quantity');
        $food->location = $request->input('location');
        $food->save();


        return redirect ('/foods/add')->with([
            'alert' => 'The following food item was added: ' . $food->item_name
        ]);

    }


    public function expire()
    {

        $expiration2018 = Food::orderBy('expiration_year')
            ->where('expiration_year', '=', '2018')
            ->get();

        return view('foods.expire')->with([
                'expiration2018' => $expiration2018,
       ]);


    }//end expire

    public function edit($id = null)
    {
        $food = Food::with('tags')->find($id);

        if(!$food) {
            return redirect('/food')->with('alert', 'Food not found');
        }
        return view('foods.update');

        $brands = Brand::getForDropdown();

        $allTags = Tag::getForCheckboxes();

        $tags = $food->tags->pluck('tags.id')->toArray();

        return view('food.update')->with([
           'food' => $food,
           'brands' => $brands,
           'allTags' => $tagsForCheckboxes,
           'tags' => $tags
        ]);

    }

    public function update(Reqeust $request, $id)
    {
        $food = Food::find($request->id);

        $food->tags()->sync($request->tags);

        $food->brand_name = $request->brand_name;
        $food->item_name = $request->item_name;
        $food->expiration_month = $request->expiration_month;
        $food->expiration_day = $request->expiration_day;
        $food->expiration_year = $request->expiration_year;
        $food->quantity = $request->quantity;
        $food->location = $request->location;

        $food->save();

       return view('foods.update');
    }

    public function create($id)
    {
        $brands = Food::orderBy('brand_id')->get();

        return view('food.add')->with([
           'brands' => $brands
        ]);
    }

    public function remove(Request $request)
    {
 //       $request->validate([
  //          'brand_name' => 'required',
  //          'item_name' => 'required',
 //           'expiration_month' => 'required',
  //          'expiration_day' => 'required',
    //        'expiration_year' => 'required',
      //      'quantity' => 'required|numeric',
        //    'location' => 'required'
   //     ]);
/*
        $food = Food::find($id);
        $food->brand_id = $request->input('brand_name');
        $food->item_name = $request->input('item_name');
        $food->expiration_month = $request->input('expiration_month');
        $food->expiration_day = $request->input('expiration_day');
        $food->expiration_year = $request->input('expiration_year');
        $food->quantity = $request->input('quantity');
        $food->location = $request->input('location');

        DB::table($food)->delete();
*/
 //       return redirect('/food/remove')->with([
   //         'alert' => 'Your food item was deleted.'
     //   ]);
    }//end delete

}//end class
