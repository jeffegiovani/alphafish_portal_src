<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Domains\User::truncate();

        $this->createAdmins();
        $this->createDemoUsers(20);
    }

    /**
     * Cria os usuários administradores de forma "controlada"
     */
    public function createAdmins()
    {
        \App\Domains\User::factory()->create([
            'country_id' => 1,
            'consultant_id' => 0,
            'first_name' => 'Jeffe',
            'last_name' => 'Giovani',
            'email' => 'jeffe.giovani@gmail.com',
            'password' => bcrypt('jeffe123'),
            'type' => 'admin',
            'remember_token' => str_random(10),
        ]);

        $this->command->info('User Jeffe has been created');

    }

    /**
     * Cria usuários Demo
     *
     * @param int $total
     */
    public function createDemoUsers($total = 4)
    {
        \App\Domains\User::factory($total)->create();

        $this->command->info($total . ' demo users created');
    }
}
