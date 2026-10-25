<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        // Sample customers
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Jose Mendoza',
                'email' => 'jose@example.com',
                'phone' => '09211234567',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        // Sample POS users
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Carlos Mendoza',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Angela Reyes',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Mark Santos',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Patricia Garcia',
            ],
            [
                'username' => 'staff02',
                'full_name' => 'John Dela Cruz',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                $user
            );
        }
    }
}
