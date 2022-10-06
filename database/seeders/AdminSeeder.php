<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public $faker ;

    public function __construct(){
        $this->faker = Factory::create();
    }

    
    public function run()
    {
        Admin::create([
           'name' => $this->faker->firstName(). " " . $this->faker->lastName(),
           'email' => "admin@organi.com",
            'password' => Hash::make("secret")
        ]);
    }
}
