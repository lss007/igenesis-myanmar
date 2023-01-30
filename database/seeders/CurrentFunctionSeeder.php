<?php

namespace Database\Seeders;

use App\Models\CurrentFunction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrentFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
            /* `igenesis_myanmar`.`current_functions` */
                $current_functions = array(
                    array('name' => 'Accounts / Finance','order_no' => NULL,'status' => '1','created_at' => now(),'updated_at' =>now()),
                    array('name' => 'Administration','order_no' => NULL,'status' => '1','created_at' => now(),'updated_at' => now()),
                    array('name' => 'Commercial','order_no' => NULL,'status' => '1','created_at' => now(),'updated_at' => now()),
                    array('name' => 'Consulting','order_no' => NULL,'status' => '1','created_at' => now(),'updated_at' => now()),
                    array('name' => 'Content Development / Writing','order_no' => NULL,'status' => '1','created_at' => now(),'updated_at' => now())
                );
            foreach ( $current_functions as $name) {
                CurrentFunction::create($name);
                }

  
    }
}
