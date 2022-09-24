<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\admin;
use App\Models\school;
use App\Models\teacher;
use App\Models\student;
use App\Models\manager;
use App\Models\classroom;
use App\Models\contact;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        admin::create([
            'name' => 'admin',
            'email' => 'smsmspy@gmail.com',
            'password' => 'qweytruio123*',
        ]);

        school::create([
            'name' => 'King acadmy',
            'description' => 'Our students will learn to be independent, creative and responsible thinkers within an ethical community that encourages young men and women of diverse backgrounds and beliefs to excel, to cherish one another and to prepare for leadership.',
            'status' => "1" ,
        ]);

        manager::create([
            'name' => "Abood manager" ,
            'email' => "aboodmanager@gmail.com" ,
            'password' => "qweytruio123*" ,
            'school_id' => "1" ,
            'status' => "1" ,
        ]);

        teacher::create([
            'name' => "Abood teacher" ,
            'email' => "aboodteacher@gmail.com" ,
            'password' => "qweytruio123*" ,
            'school_id' => "1" ,
            'status' => "1" ,
        ]);

        for ($i = 0; $i < 10; $i++) {
            teacher::create([
                'name' => "teacher$i" ,
                'email' => "teacher$i@gmail.com" ,
                'password' => "qweytruio123*" ,
                'school_id' => "1" ,
                'status' => "1" ,
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            student::create([
                'name' => "student$i" ,
                'email' => "student$i@gmail.com" ,
                'password' => "qweytruio123*" ,
                'school_id' => "1" ,
            ]);
        }


        for ($i = 0; $i < 3; $i++) {
            classroom::create([
                'name' => "classroom$i" ,
                'limit' => "30",
                'school_id' => "1" ,
                'status' => "1" ,
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            contact::create([
                'name' => "contact$i" ,
                'email' => "test$i@gmail.com" ,
                'status'=> "1" ,
                'description' => "contact$i description" ,
            ]);
        }

    }
}
