<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'fullname' => 'Juan Dela Cruz',
                'email' => 'juan@email.com',
                'phone' => '09171234567'
            ],
            [
                'fullname' => 'Maria Santos',
                'email' => 'maria@email.com',
                'phone' => '09181112222'
            ],
            [
                'fullname' => 'Pedro Reyes',
                'email' => 'pedro@email.com',
                'phone' => '09193334444'
            ],
            [
                'fullname' => 'Ana Cruz',
                'email' => 'ana@email.com',
                'phone' => '09201115555'
            ],
            [
                'fullname' => 'Carlo Garcia',
                'email' => 'carlo@email.com',
                'phone' => '09223336666'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}