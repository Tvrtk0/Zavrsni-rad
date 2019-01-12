<?php

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
            ['user_id' => 1, 'title' => "Post One", 'content' => "Post one content"],
            ['user_id' => 1, 'title' => "Post two", 'content' => "Post two content"],
            ['user_id' => 1, 'title' => "Post three", 'content' => "Post three content"],

        ]);
    }
}
