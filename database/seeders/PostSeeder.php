<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Title 1',
                'body' => 'Body 1'
            ],
            [
                'title' => 'Title 2',
                'body' => 'Body 2'
            ],
            [
                'title' => 'Title 3',
                'body' => 'Body 3'
            ],
            [
                'title' => 'Title 4',
                'body' => 'Body 4'
            ],
            [
                'title' => 'Title 5',
                'body' => 'Body 5'
            ],
        ]);
    }
}
