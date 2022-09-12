<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $english = Subject::create([
            'title' => 'English',
        ]);
        $Mathematics = Subject::create([
            'title' => 'Mathematics',
        ]);
        $Physics = Subject::create([
            'title' => 'Physics',
        ]);
        $chemistry = Subject::create([
            'title' => 'chemistry',
        ]);
    }
}
