<?php

namespace Schooltrip;

class SchooltripList {
    private array $studentList = [];
    private Teacher $teacher;

    public function __construct($teacher) {
        $this->teacher = $teacher;
    }

    public function addStudentToList($student) {
        $this->studentList[] = $student;
    }
    public function setTeacher($teacher) {
        $this->teacher = $teacher;
    }

    # getters
    public function getStudentList() {
        return $this->studentList;
    }
    public function getTeacher() {
        return $this->teacher;
    }
}
?>