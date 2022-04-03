<?php

    class Course{
        public $name;
        public $totalStudent;
        public $price;

        public function SetData($name, $totalStudent, $price){
            $this->name            = $name;
            $this->totalStudent = $totalStudent;
            $this->price             = $price;
            $this->Print();
        }

        public function Print(){
            echo "<p>Course Name : $this->name</p>";
            echo "<p>Total Student: $this->totalStudent</p>";
            echo "<p> Course Price: $this->price</p>";
            echo "<hr>";
        }

    }

    // $courseObj = new Course;
    // $courseObj->SetData("PHP",20,300);
    // $courseObj->SetData("LARAVEL",50,200);
    // $courseObj->SetData("JAVA",10,600);
