<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory(1)->create();
        // $user->assignRole('super_admin');
        
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class
        ]);
    }
}
