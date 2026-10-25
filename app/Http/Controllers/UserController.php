<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve user records from the database
        $users = User::all();

        // Pass records to the Blade view
        return view('users', compact('users'));
    }
}
