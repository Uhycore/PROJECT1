<?php
class User
{
    // Properties
    public $userId;
    public $name;
    public $username;
    public $password;
    public $role;  // Assuming role is an object of Role class or string

    // Constructor
    public function __construct($userId, $name, $username, $password, $role)
    {
        $this->userId = $userId;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;  // Set the role (could be a role object or a role name)
    }
}
