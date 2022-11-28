<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
            ],
        ];
        DB::table('teachet')->insert($data);
    }
}
