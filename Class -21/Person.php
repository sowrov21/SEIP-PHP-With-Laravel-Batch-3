<?PHP

class Person {

            public $id;
            public $name;
            public $age;
            public $address;

            public function __construct($id, $name, $age, $address){
                $this->id          =  $id;
                $this->name     =  $name;
                $this->age        =  $age;
                $this->address  =  $address;
               // $this->Print();
            }

            public function Print(){
                echo "<p>--------------------------</p>";
                echo "<p>Personal Information:</p>";
                echo "<p>--------------------------</p>";
                echo "<p>Id : $this->id</p>";
                echo "<p>Name : $this->name</p>";
                echo "<p>Age : $this->age</p>";
                echo "<p>Address : $this->address</p>";
            }
}

    $personObj = new Person(1, "Md. Sowrov", 23, " Mirpur, Dhaka ");
    //$personObj->Print();
