<?php

namespace Database\Seeders;

use App\Models\Demande;
use Illuminate\Database\Seeder;

class DemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Demande::factory()
            ->count(5)
            ->create();
    }
}
