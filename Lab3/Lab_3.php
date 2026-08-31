// Name : Mohammad Zaki Ahmadi
// F/name: Mehrab Ali



<?php
    class Car{
        const PALIT_NUMBER = 12456;

    }
echo "The Mohammad Zaki  car's palitnumber : " . Car::PALIT_NUMBER; 
// because of this in every city or country the identifire number of every car is unique and constant.

echo"<br>";
echo"<br>";

    class Student_Counter{
        public static $studentcounter = 0;

        public static function addstudents(){
            self::$studentcounter++;
        }
    }
    Student_Counter::addstudents();
    Student_Counter::addstudents();
    Student_Counter::addstudents();
    echo "The number of Students in Class : ". Student_Counter::$studentcounter; 

    echo"<br>";
    echo"<br>";
    

    abstract class Vehicale{
        public abstract function start();
    }
    class Car1 extends Vehicale {
        public function start(){
            echo "The Ali Mohammad car's engine started";
        }
    }
    class Bike extends Vehicale {
        public function start(){
            echo "The Bike started";
        }
    }
    $car1 =  new Car1();
    $bike1 = new Bike();

    $car1->start();
    echo"<br>";
    echo"<br>";
    $bike1->start();
    
?>
