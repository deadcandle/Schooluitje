<?php

namespace Schooltrip;

class Student extends Person {
    private Group $group;
    private bool $paid;

    public function __construct($name, $className, $paid) {
        parent::__construct($name);
        $this->group = $className;
        $this->paid = $paid;
    }

    public function role() {
        // todo
    }

    public function getGroup() {
        return $this->group;
    }
    public function getPaid() {
        return $this->paid;
    }
}
?>