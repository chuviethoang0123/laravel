<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\demo1;

class demo1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       demo1::truncate();

       demo1::demo()
       ->times(50)
       ->hasPosts(1)
       ->create();
    }
}
