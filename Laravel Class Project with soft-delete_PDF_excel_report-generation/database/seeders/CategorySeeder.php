<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Manually seeding
        //  \App\Models\Category::create([
        //      'title'=>'MEN',
        //      'description' => 'MEN DESC'
        //  ]);

        //  \App\Models\Category::create([
        //     'title'=>'WOMEN',
        //     'description' => 'WOMEN DESC'
        // ]);

        // \App\Models\Category::create([
        //     'title'=>'WOMEN',
        //     'description' => 'MEN DESC'
        // ]);

        //Seeding with faker by Factory

           Category::factory(20)->create();

    }
}
