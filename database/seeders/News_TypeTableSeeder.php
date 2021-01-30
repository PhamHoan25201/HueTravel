<?php

namespace Database\Seeders;

use App\Models\News_Type;
use Illuminate\Database\Seeder;

class News_TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        News_Type::factory()->count(10)->create();
    }
}
