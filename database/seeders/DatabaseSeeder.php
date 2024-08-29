<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'fususa',
    //         'email' => 'fuangsujira@gmail.com',
    //         'password' => Hash::make('fususa')
    //     ]);
    // }
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    // }
    $this->call([
        ProductTypesTableSeeder::class,
        ProductsTableSeeder::class,
    ]);
    }
}
