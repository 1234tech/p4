<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['Hanover'],
            ['Fresh'],
            ['Bush']

        ];

        $count = count($brands);

        foreach ($brands as $key => $brandData) {
            $brand = new Brand();

            $brand->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $brand->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $brand->brand_name = $brandData[0];


            $brand->save();
            $count--;
        }

    }
}
