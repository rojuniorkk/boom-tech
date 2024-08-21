<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
        ]);

        $this->call([
            CategorySeeder::class,
            CompanySeeder::class,
            ProductSeeder::class,
            AddressSeeder::class,
        ]);
    }
}
