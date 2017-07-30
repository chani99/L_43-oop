<?php
class course {
    private $courseName;
    private $Capacity;
    private $isEvening;
    

    public function __construct($courseName, $Capacity, $evening) {
        $this->courseName = $courseName;
        $this->Capacity = $Capacity;
        $this->isEvening = $evening;
        

    }

    public function getCourse() {
        return $this->courseName;
    }
        public function getCapacity() {
        return $this->Capacity;
    }

    public function getEvening() {
        return $this->isEvening;
    }



}


