<?php

namespace Schooltrip;

abstract class Person {
    private string $name;
    private string $role;

    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function role();
    
    # getters and setters
    public function getName() {
        return $this->name;
    }
    public function getRole() {
        return $this->role;
    }
}
?>