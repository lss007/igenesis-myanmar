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
            array('name' => NULL,'image' => '1755265906887193.png','order_no' => '1','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:13','updated_at' => '2023-01-17 10:40:13'),
            array('name' => NULL,'image' => '1755265906912926.png','order_no' => '2','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:13','updated_at' => '2023-01-17 11:13:10'),
            array('name' => NULL,'image' => '1755265906946070.jpg','order_no' => '3','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:13','updated_at' => '2023-01-17 11:13:31'),
            array('name' => NULL,'image' => '1755265907054029.png','order_no' => '4','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:14:44'),
            array('name' => NULL,'image' => '1755265907074940.png','order_no' => '5','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:12:30'),
            array('name' => NULL,'image' => '1755265907082020.png','order_no' => '7','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:08:41'),
            array('name' => NULL,'image' => '1755265907098907.png','order_no' => '6','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:15:18'),
            array('name' => NULL,'image' => '1755265907105689.png','order_no' => '11','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:18:16'),
            array('name' => NULL,'image' => '1755265907122150.jpg','order_no' => '10','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:18:07'),
            array('name' => NULL,'image' => '1755265907128101.png','order_no' => '8','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 10:40:14','updated_at' => '2023-01-17 11:15:55'),
            array('name' => NULL,'image' => '1755268244977638.png','order_no' => '9','status' => '1','deleted_at' => NULL,'created_at' => '2023-01-17 11:17:23','updated_at' => '2023-01-17 11:17:32')
        );

        foreach ( $our_customers as $key => $name) {
            OurCustomers::create($name);
        }
  
    }
}
