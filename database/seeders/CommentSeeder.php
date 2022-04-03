<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'body' => 'Comment 1'
            ],
            [
                'post_id' => 1,
                'body' => 'Comment 2'
            ],
            [
                'post_id' => 2,
                'body' => 'Comment 3'
            ],
            [
                'post_id' => 3,
                'body' => 'Comment 4'
            ],
        ]);
    }
}
