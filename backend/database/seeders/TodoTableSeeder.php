<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todo')->insert([
            'title' => 'Title1',
            'content' => 'content1'
        ]);
        DB::table('todo')->insert([
            'title' => 'Title2',
            'content' => 'content2'
        ]);
    }
}
