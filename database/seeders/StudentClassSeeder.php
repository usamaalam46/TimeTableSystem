<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentClass;

class StudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $one = StudentClass::create([
            'title' => 'one',
            'level' => 'I',
        ]);
        $two = StudentClass::create([
            'title' => 'two',
            'level' => 'II',
        ]);
        $three = StudentClass::create([
            'title' => 'three',
            'level' => 'III',
        ]);
        $four = StudentClass::create([
            'title' => 'four',
            'level' => 'IV',
        ]);
        $five = StudentClass::create([
            'title' => 'five',
            'level' => 'V',
        ]);
        $six = StudentClass::create([
            'title' => 'six',
            'level' => 'VI',
        ]);
        $seven = StudentClass::create([
            'title' => 'seven',
            'level' => 'VII',
        ]);
        $eight = StudentClass::create([
            'title' => 'eight',
            'level' => 'VIII',
        ]);
        $nine = StudentClass::create([
            'title' => 'nine',
            'level' => 'IX',
        ]);
        $ten = StudentClass::create([
            'title' => 'ten',
            'level' => 'X',
        ]);
    }
}
