<?php

namespace Database\Seeders;

use App\Models\Sociallink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SociallinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* `igenesis-myanmar`.`sociallinks` */
            $sociallinks = array(
                array('name' => 'facebook','link' => 'https://www.facebook.com/GenesisTechnologyMyanmar','logo' => '1755356121759823.svg','icon' => NULL,'order_no' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2023-01-18 09:58:44','updated_at' => '2023-01-18 10:43:47'),
                array('name' => 'linkedin','link' => 'https://mm.linkedin.com/company/igenesis-technologies-ltd-myanmar','logo' => '1755356433854382.svg','icon' => NULL,'order_no' => NULL,'status' => '1','deleted_at' => NULL,'created_at' => '2023-01-18 10:24:45','updated_at' => '2023-01-18 10:43:34')
            );
            foreach ( $sociallinks as $key => $name) {
                Sociallink::create($name);
            }
    }
}
