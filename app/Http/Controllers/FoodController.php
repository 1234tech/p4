<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function add(Request $request)
    {
/*
        $request->validate([
        'brand_name' => 'required',
        'item_name' => 'required',
    ]);

        $validBrand = $request->input('brand_name');
        $validItem = $request->input('item_name');

        return view('foods.add')->with([
            'brand_name' => $validBrand,
            'item_name' => $validItem
        ]);
*/
        return view('foods.add');
    }//end add

    public function remove()
    {
        return view('foods.remove');
    }//end delete

    public function expire()
    {
        return view('foods.expire');
    }//end expire

    public function welcome()
    {
        return view('foods.welcome');
    }//end welcome

}//end class
