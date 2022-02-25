<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            'Sport',
            'Cinema',
            'Gaming',
            'Cooking',
            'Development'
        ];

        foreach($categories as $category){
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = str::Slug($category);
            $new_category->save();
        }
    }
}
