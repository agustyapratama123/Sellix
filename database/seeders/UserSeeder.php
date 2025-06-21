<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin Utama',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_name' => 'admin'
            ],
            [
                'name' => 'Supervisor Satu',
                'email' => 'supervisor@example.com',
                'password' => Hash::make('password'),
                'role_name' => 'supervisor'
            ],
            [
                'name' => 'Kasir A',
                'email' => 'kasir@example.com',
                'password' => Hash::make('password'),
                'role_name' => 'kasir'
            ],
        ];

        foreach ($users as $data) {
            $role = Role::where('name', $data['role_name'])->first();

            if ($role) {
                User::updateOrCreate(
                    ['email' => $data['email']],
                    [
                        'name' => $data['name'],
                        'password' => $data['password'],
                        'role_id' => $role->id
                    ]
                );
            }
        }
    }
}
