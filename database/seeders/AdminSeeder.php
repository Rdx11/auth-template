<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Laraxam admin',
            'email' => 'laraxam@admin.com',
            'email_verified_at' => now(),
            'password' => '$2b$10$K9WPhU81ins3sqtLn0MOOu7iQ.D3ijwz7s1TSt.1kNqLN214JYGJe', // qweasd456
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('super_admin');
    }
}
