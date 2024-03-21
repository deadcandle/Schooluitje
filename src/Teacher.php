<?php

namespace Schooltrip;

class Teacher extends Person {
    private float $salary;
    public static array $teachers = [];

    public function __construct($name, $salary) {
        parent::__construct($name);
        $this->salary = $salary;
        $this->role();
        self::$teachers[] = $this;
    }

    public function role() {
        // todo
    }

    public static function findAvailableTeacher() {
        foreach () {
            
        }
    }
    
    # getters
    public static function getTeachers() {
        return self::$teachers;
    }
}
?>