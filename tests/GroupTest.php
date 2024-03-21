<?php

use PHPUnit\Framework\TestCase;
use Schooltrip\Group;

final class GroupTest extends TestCase {
    public function testCanBeCreated() {
        $group = new Group("MH1A");
        $this->assertNotNull($group);
    }
}

?>