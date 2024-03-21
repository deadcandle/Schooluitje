<?php

namespace Schooltrip;

class Group {
    private string $name;

    public function __construct($name) {
        $this->name = $name;
    }
    
    # getters
    public function getName() {
        return $this->name;
    }
}
?>