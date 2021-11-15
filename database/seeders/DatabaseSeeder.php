<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $profilAdmin = \App\Models\Profil::factory()
            ->count(1)
            ->create([
                'libelle' => 'ADMIN',
            ]);

        $profilFormateur = \App\Models\Profil::factory()
            ->count(1)
            ->create([
                'libelle' => 'FORMATEUR',
            ]);
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
                'profil_id' => 1,
            ]);

        $this->call(CategorieSeeder::class);
        $this->call(ChapitreSeeder::class);
        $this->call(DemandeSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(TypeFormationSeeder::class);
    }
}
