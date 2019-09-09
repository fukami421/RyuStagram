<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 'test_name',
            'file' => '',
            'description' => 'test用につくったデータです。'
        ]);
    }
}
