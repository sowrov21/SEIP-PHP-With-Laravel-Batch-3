<?php
    namespace Seip\classes;

    //------Interface in PHP-------
    // interface School {

    //     //public $name;
    //     public function getSchoolInfo();
    // }

    // interface Teacher {

    //     //public $name;
    //     public function getTeacherInfo();
    // }
    
    // class Student  implements School,Teacher{

    //     //public $name;
    //     public function getSchoolInfo(){
    //          echo "School info function"."<br>";
    //     }

    //     public function getTeacherInfo(){

    //          echo "Teacher info function"."<br>";

    //     }
    //     public function getStudentInfo(){

    //         echo "Student info function";
            
    //     }
    // }

    // $std = new Student;

    // $std->getSchoolInfo();
    // $std->getTeacherInfo();
    // $std->getStudentInfo();

    //-------------Traits in PHP------------
    
//     trait  Message1 {
        
//         public function msg1() {
//         echo "I am from trait 1 msg1 function ";
//     }
//     }
//     trait  Message2 {
        
//         public function msg2() {
//         echo "I am from trait 2 msg2 function ";
//     }
//     }

//     class Welcome1{

//         use Message1;
        
//     }

//     class Welcome2{

//         use Message1, Message2;


//     }

//     $obj = new Welcome1();
//         $obj->msg1();
//         echo "<br>";
//         echo "<hr>";

//     $obj2 = new Welcome2();
//         $obj2->msg1(); echo "<br>";
//         $obj2->msg2();
//   //  echo __DIR__;

//     echo __CLASS__;
class Student{

    public function index() {
        //all data show in table;
    }

    public function store() {
        //data insert;
    }
    public function update() {
        //data update;
    }
    public function delete() {
        //delete data;
    }

}

