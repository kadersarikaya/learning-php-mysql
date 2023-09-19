<?php

class User {
    // properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // A constructor is a method that is called when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // methods are functions that belong to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// Instantiate a new User object
$user1 = new User("Brad", "brad@gmail.com", "1234");
$user2 = new User("Sara", "sars@gmail.com", "1234");

class Employee extends User {
    public $title;

    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee("Sara", "sara@gmail.com", "43434", "Manager");

echo $employee1->get_title();
