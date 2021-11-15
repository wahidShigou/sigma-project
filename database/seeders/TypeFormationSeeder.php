<?php

namespace Database\Seeders;

use App\Models\TypeFormation;
use Illuminate\Database\Seeder;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeFormation::factory()
            ->count(5)
            ->create();
    }
}
