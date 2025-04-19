<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $lenderRole = Role::create([
            'name' => 'lender'
        ]);

        $agentRole = Role::create([
            'name' => 'agent'
        ]);

        $customerRole = Role::create([
            'name' => 'customer'
        ]);

        $user = User::create([
            'name' => 'Daniel Daud Alberthus',
            'phone' => '081212770778',
            'photo' => 'angga.png',
            'email' => 'danilalbert03@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        $user->assignRole($adminRole);
    }
}