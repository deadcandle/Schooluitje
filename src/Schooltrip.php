<?php

namespace Schooltrip;

class Schooltrip extends SchooltripList {
    private string $name;
    private array $schooltripLists = [];
    private int $countStudent;
    private int $countList;
    private int $amount;

    public function __construct($name) {
        $this->name = $name;
    }
    public function addSchooltripList($schooltripList) {
        $this->schooltripLists[] = $schooltripList;
    }
    public function addStudent($student) {
        # If there is a triplist, add the student to it
        foreach ($this->getSchooltripLists() as $schooltripList) {
            if (count($schooltripList->getStudentList()) < 3) {
                # There's a triplist with room for more students
                $schooltripList->addStudentToList($student);
            } else {
                # Max amount of students, find a available teacher
                $schooltripList->setTeacher(Teacher::findAvailableTeacher());
            }
        }
        # There are no triplists yet
        $newSchooltripList = new SchooltripList();
        $newSchooltripList->addStudentToList($student);
        $this->addSchooltripList($newSchooltripList);
    }
    public function getSchooltripLists() {
        return $this->schooltripLists;
    }
}
?>