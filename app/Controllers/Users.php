<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'fullname' => 'System Administrator',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'John Smith',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Jane Doe',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Michael Brown',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Sarah Wilson',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}