<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            1=>"category_1", 
            2=>"category_2", 
            3=>"category_3", 
            4=>"category_4", 
            5=>"category_5",
        ];
        
        foreach($names as $id => $name) {
            DB::table('categories')->insert([
                'id' => $id,
                'name' => $name, 
            ]);
        }

    }
}
