<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>

<h1>About Page</h1>

<nav>
    <a href="<?= site_url('/') ?>">Home</a> |
    <a href="<?= site_url('about') ?>">About</a> |
    <a href="<?= site_url('customers') ?>">Customer Accounts</a> |
    <a href="<?= site_url('users') ?>">User Accounts</a>
</nav>

<hr>

<p>
    This is Version 1 of the POS System built using CodeIgniter 4.
    Customer and User records are currently stored in static PHP arrays.
</p>

</body>
</html>