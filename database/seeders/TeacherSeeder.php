<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::factory()->count(50)->create();
        // $data =[
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'address' => Str::random(10),
        //     ],
        // ];

            

        //DB::table('teachet')->insert($data);
    }
}
