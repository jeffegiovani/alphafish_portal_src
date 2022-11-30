<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create(); // LARAVEL 8 TROUXE ASSIM

        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Desabilitas as FKs

        $this->call([
            //TheMonsterSeeder::class,
        ]);

        // Impede que seed seja executado em ambiente de produção
        if (!app()->environment('production')) {
            $this->call([
                UsersSeeder::class,
            ]);
        }

        if (app()->environment('production')) {
            // seeds especiais para o ambiente de produção
        }

        if (app()->environment('testing')) {
            // seeds especiais para o ambiente de testes
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Habilitas as FKs
    }
}
