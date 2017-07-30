<?php
class college {
    private $name;
    private $courses = array();
    private $brunches = array();

    public function __construct($name) {
        $this->name = $name;

    }

    public function addCourses($newCourse) {
        array_push($this->courses,$newCourse);
        return $this->courses;
        
    }
    public function addbrunches($newBrunch) {
        array_push($this->brunches,$newBrunch);
        return $this->brunches;
    }
}


