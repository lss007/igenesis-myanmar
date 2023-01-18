<?php

namespace Database\Seeders;

use App\Models\OurCustomers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* `igenesis-myanmar`.`our_customers` */
        $our_customers = array(
            array('name' => NULL,'image' => '1755265906887193.png','order_no' => '1','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265906912926.png','order_no' => '2','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265906946070.jpg','order_no' => '3','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907054029.png','order_no' => '4','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907074940.png','order_no' => '5','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907098907.png','order_no' => '6','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907082020.png','order_no' => '7','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907128101.png','order_no' => '8','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755268244977638.png','order_no' => '9','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907122150.jpg','order_no' => '10','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
            array('name' => NULL,'image' => '1755265907105689.png','order_no' => '11','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now()),
        );

        foreach ( $our_customers as $key => $name) {
            OurCustomers::create($name);
        }
  
    }
}
