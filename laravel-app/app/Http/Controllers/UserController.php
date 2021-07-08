<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function list()
    {
        return view('user-list',
            [
                'name' => 'Jane',
                'address' => 'Dharan'
            ]);
    }

    public function details()
    {
        return view('user-details');
    }
}
