<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Admin::factory(1)->create();
     
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(OurTeamSeeder::class);
        $this->call(OurServiceSeeder::class);
        $this->call(OurCustomersSeeder::class);
        $this->call(ContactAddressSeeder::class);
        $this->call(SociallinkSeeder::class);
        
        $this->call(CurrentIndustrySeeder::class);

        
    }
}
