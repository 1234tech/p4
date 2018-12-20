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
                ['Hanover', 'Corn', '1', '1', '2019', '1', 'Freezer'],
                ['Bush', 'Garbanzo Beans', '1', '1', '2020', '1', 'Pantry'],
                ['Fresh', 'Kale', '12', '12', '2018', '1', 'Refrigerator'],
            ];

            $count = count($foods);

            foreach ($foods as $key => $foodData) {

                $brandName = $foodData[0];

                $brand_id = Food::where('brand_name', '=', $brandName)->pluck('id')->first();

                $foods = new Food();

                $foods->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
                $foods->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
                $foods->brand_name()->associate($brand_id);
                $foods->item_name = $foodData[1];
                $foods->expiration_month = $foodData[2];
                $foods->expiration_day = $foodData[3];
                $foods->expiration_year = $foodData[4];
                $foods->quantity = $foodData[5];
                $foods->location = $foodData[6];

                $foods->save();
                $count--;
            }
        }//end run
}
