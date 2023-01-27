<?php

namespace Database\Seeders;

use App\Models\CurrentIndustry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrentIndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* `igenesis_myanmar`.`current_industries` */
                $current_industries = array(
                    array(  'name' => 'Advertising','order_no' => NULL,'status' => '1','created_at' => Now(),'updated_at' => Now()),
                    array(  'name' => 'Agriculture','order_no' => NULL,'status' => '1','created_at' => Now(),'updated_at' => Now()),
                    array(  'name' => 'Chemicals','order_no' => NULL,'status' => '1','created_at' => Now(),'updated_at' => Now()),
                    array(  'name' => 'Construction','order_no' => NULL,'status' => '1','created_at' => Now(),'updated_at' => Now()),
                    array(  'name' => 'Consumer Durables','order_no' => NULL,'status' => '1','created_at' => Now(),'updated_at' => Now()),

                );
                foreach ( $current_industries as $name) {
                    CurrentIndustry::create($name);
                }
    }
}
