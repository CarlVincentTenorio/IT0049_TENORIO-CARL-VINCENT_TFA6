<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin One',
             'role' => 'Administrator'],
            ['id' => 2, 'name' => 'Staff Two',
             'role' => 'Cashier'],
            ['id' => 3, 'name' => 'Staff Three',
             'role' => 'Cashier'],
            ['id' => 4, 'name' => 'Staff Four',
             'role' => 'Manager'],
            ['id' => 5, 'name' => 'Staff Five',
             'role' => 'Inventory Staff'],
        ];

        return view('users', compact('users'));
    }
}