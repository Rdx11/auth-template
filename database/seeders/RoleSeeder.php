<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = collect([
            'super_admin',
            'admin',
            'teacher',
            'student'
        ]);

        $role->each(function($role)
        {
            Role::create([
                'name' => $role,
                'guard_name' => 'web'
            ]);
        });
    }
}
