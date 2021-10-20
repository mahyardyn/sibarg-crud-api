<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tip::factory(5)->create();
    }
}
