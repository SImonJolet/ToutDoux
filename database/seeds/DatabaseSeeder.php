<!--Dans le seeder, je "peuple" ma base de donnée en générant des "types" d'utilisateur (???) .
Ici, je crée deux types de personnes, les admins et les users -->

<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
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
        /*Création de l'admin et du user, en définissant le mot de passe, email, password et role
        On voit bien que les rôles sont différents, c'est ce qui différencie
        */
       User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('secret'),
            'role' => 1
        ]); // $this->call(UsersTableSeeder::class);
    }
}
