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
        $information = [
            1 => ["TITLE #1", "Body #1 | This is a seeded text.", 1],
            2 => ["TITLE #2", "Body #2 | This is a seeded text.", 2], 
            3 => ["TITLE #3", "Body #3 | This is a seeded text.", 1], 
            4 => ["TITLE #4", "Body #4 | This is a seeded text.", 1], 
            5 => ["TITLE #5", "Body #5 | This is a seeded text.", 3],
        ];
        
        for($i=1; $i<6; $i++) {
            DB::table('posts')->insert([
                'id' => $i,
                'title' => $information[$i][0],
                'body' => $information[$i][1],
                'category_id' => $information[$i][2],
                //'created_at' => date("Y-m-d H:i:s"),
                //'updated_at' => date("Y-m-d H:i:s"),
                //'deleted_at' => NULL,
            ]);
        }
    }
}
