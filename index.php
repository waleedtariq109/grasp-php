<?php

class User
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo "$this->name is logged in";
    }
}

$user1 = new User('Waleed Tariq', 'waleed@gmail.com');
$user1->login();

$user2 = new User('John Doe', 'john@gmail.com');
$user2->login();

// var_dump($user1);
// var_dump($user2);
