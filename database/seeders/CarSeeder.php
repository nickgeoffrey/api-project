<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_file = File::get('database/data/cars-data.json');
        DB::table('cars')->delete();
        $data = json_decode($json_file);
        foreach ($data as $obj) {
            Car::create(array(
                'car_name' => $obj->car_name,
                'car_year' => $obj->car_name,
                'car_price' => $obj->car_price
            ));
        } 
    }
}
