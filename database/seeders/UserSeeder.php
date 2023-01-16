<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        $createuser = New Admin();
        $createuser->name = "Admin";
        $createuser->email_verified_at = now();
        $createuser->email = "genesismyanmar@gmail.com";
        $createuser->password = Hash::make('12345678');
        $createuser->remember_token = Str::random(10);
        $createuser->save();
    }
}
