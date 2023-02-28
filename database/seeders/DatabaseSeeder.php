<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('oauth_clients')->insert([
            'name' => 'development',
            'secret' => 'BGALs5B6K2cfLciroALX3okJO11783pNkU6v11me',
            'provider' => 'users',
            'redirect' => '',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
            'created_at' => now(),
            'updated_at' => null
          ]);
        User::create(['name' => 'system', 'email' => 'system@email.com', 'password' => Hash::make('secret')]);
        User::create(['name' => 'Administrator', 'email' => 'admin@email.com', 'password' => Hash::make('secret')]);
    }
}
