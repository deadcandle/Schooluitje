<?php

namespace Schooltrip;

class Student extends Person {
    private Group $className;
    private bool $paid;

    public function __construct($name, $className, $paid) {
        parent::__construct($name);
        $this->className = $className;
        $this->paid = $paid;
    }

    public function role() {
        // todo
    }
}
?>