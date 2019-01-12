<?php

use Illuminate\Database\Seeder;

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
            ['user_id' => 1, 'post_id' => "1", 'content' => "comment one content"],
            ['user_id' => 1, 'post_id' => "2", 'content' => "comment two content"],
            ['user_id' => 1, 'post_id' => "3", 'content' => "comment three content"],

        ]);
    }
}
