<?php

use Illuminate\Database\Seeder;
use App\category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Furnitur',
            'slug'=>str_slug('Furniture')
        ]);
       
        Category::create([
            'name'=>'Kostum',
            'slug'=>str_slug('Kostum')
        ]);

        Category::create([
            'name'=>'Musik',
            'slug'=>str_slug('Musik')
        ]);

        Category::create([
            'name'=>'Elektronik',
            'slug'=>str_slug('Elektronik')
        ]);

        Category::create([
            'name'=>'Tenda',
            'slug'=>str_slug('Tenda')
        ]);
    }
}
