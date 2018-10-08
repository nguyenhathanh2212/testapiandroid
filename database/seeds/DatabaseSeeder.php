<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Shipper;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::truncate();
        User::create([
            'email' => 'admin@example.com',
            'name' => 'admin',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        ]);

        factory(Shipper::class, 10)->create();
    }
}
