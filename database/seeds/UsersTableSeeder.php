<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'role' => 'admin',
            'name' => 'Admin Framework',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(60)
        ]);

        // \App\User::create([
        //     'role' => 'admin',
        //     'name' => 'Admin Mylian',
        //     'email' => '182410102048@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'remember_token' => Str::random(60)
        // ]);

        // \App\User::create([
        //     'role' => 'admin',
        //     'name' => 'Admin Sarah',
        //     'email' => '182410102050@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'remember_token' => Str::random(60)
        // ]);

        // \App\User::create([
        //     'role' => 'admin',
        //     'name' => 'Admin Linda',
        //     'email' => '182410102040@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'remember_token' => Str::random(60)
        // ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Mylian',
            'email' => 'mozarone1@gmail.com',
            'password' => Hash::make('182410102048'),
            'remember_token' => Str::random(60)
        ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Sarah',
            'email' => 'mozarone2@gmail.com',
            'password' => Hash::make('182410102050'),
            'remember_token' => Str::random(60)
        ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Linda',
            'email' => 'liangedhe@gmail.com',
            'password' => Hash::make('182410102040'),
            'remember_token' => Str::random(60)
        ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Linda',
            'email' => 'blendermyl@gmail.com',
            'password' => Hash::make('182410102040'),
            'remember_token' => Str::random(60)
        ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Linda',
            'email' => 'myukayn@gmail.com',
            'password' => Hash::make('182410102040'),
            'remember_token' => Str::random(60)
        ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Linda',
            'email' => 'mihoyogamex1@gmail.com',
            'password' => Hash::make('182410102040'),
            'remember_token' => Str::random(60)
        ]);

        


    }
}
