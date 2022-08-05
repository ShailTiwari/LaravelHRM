<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run() {
        $faker = Faker::create();
        foreach (range(1,1000) as $index) {
            DB::table('employees')->insert([                       
                'name' => $faker->firstName,                    
                'lastname' => $faker->lastname,                         
                'phone_no' => $faker->phoneNumber,                   
                'company' => $faker->company,                   
                'profile_picture' => $faker->imageUrl($width = 640, $height = 480),                  
                'address' => $faker->streetAddress, 
                'dob' => $faker->date($format = 'Y-m-d', $max = '2000',$min = '1990'),
                'department' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
                'salary' => $faker->biasedNumberBetween($min = 20000, $max = 90000, $function = 'sqrt'),
                'post' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$10$WQpf4lYexhcp2sPDSJbEhe8RFMHpwiXLM3gjREyGbFi00HWONSAy.', // password
                'remember_token' => Str::random(10),
                'isactive' => 1,
                'isdelete' => 0,
                'inuse' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}