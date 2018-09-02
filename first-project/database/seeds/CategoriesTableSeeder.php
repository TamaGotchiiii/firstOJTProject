<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Category::create(
            [
                'name' => 'minuman',
            ],
            [
                'name' => 'makanan',
            ]
        );
    }
}
