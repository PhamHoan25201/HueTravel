<?php

namespace Database\Seeders;

use App\Models\NewsType;
use Illuminate\Database\Seeder;

class NewsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        NewsType::factory()->count(10)->create();
    }
}
