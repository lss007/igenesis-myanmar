<?php

namespace Database\Seeders;

use App\Models\ContactAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* `igenesis-myanmar`.`contact_addresses` */

        $contact_addresses = array(
            array('address' => 'iGenesis Technologies Ltd (Myanmar) No-18, Ground Floor, Block B, Min Yae Kyaw Swar Condo, Min Yae Kyaw Swar street, 14th quarter, Yankin Township, Yangon','status' => '1','deleted_at' => NULL,'created_at' => now(),'updated_at' => now())
        );

        foreach ( $contact_addresses as $key => $name) {
            ContactAddress::create($name);
        }
    }
}
