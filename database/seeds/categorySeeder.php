<?php

use Illuminate\Database\Seeder;
use App\Category;
class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 10)->create();
    }
}