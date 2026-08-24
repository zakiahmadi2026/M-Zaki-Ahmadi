<?php

class StudentAccount
{
    public $name; //In this section we have a public variable and its accessable in everyn where
    private $studentId; //in this kind of variable just its accessable in the a class 
    protected $department; // its accessable in this class and in every class that inheranced from this class

    function __construct($name, $studentId, $department) // a constructour funtions
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo() // print the information bellow
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }

    function getStudentId()
    {
        return $this->studentId;
    }
}

$student1 = new StudentAccount("Ahmad", 1001, "Computer Science"); // makking a object from the class I made 

$student1->showInfo(); // calling the function we made for shows the information.

echo "Student ID from method: " . $student1->getStudentId();

?>




<?php
echo "<br>";
echo "<br;";
echo "<br>";
echo "<br>";

class Person
{
    protected $name; //description is like the upper variable 

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}


echo "<br>";
echo "<br>";

class Student extends Person
{
    function study()
    {
        echo $this->name . " is studying.";
    }
}

$student2 = new Student("Sara"); // creatting the object

$student2->introduce(); // calling the function
$student2->study(); //calling the function

?>






<?php
echo "<br>";
echo "<br>";
class Employee
{
    public $company; 
    protected $name;
    private $salary;

    function __construct($name, $company, $salary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }

    function showEmployee()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Company: " . $this->company . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }

    function getSalary()
    {
        return $this->salary;
    }
}

echo "<br>";
echo "<br>";

class Manager extends Employee
{
    function manageTeam()
    {
        echo $this->name . " is managing the team.";
    }
}

$manager1 = new Manager("Ali", "Kabul Tech", 30000);

$manager1->showEmployee();

echo "Salary from method: " . $manager1->getSalary() . "<br>";

$manager1->manageTeam();

?>

<br>
<br>
// Asewr os 7 Short Questions 
<br>
<br>
// 1 public means the method and variable that were made by public its accessable in every where of files.
<br>
<br>
// 2 privat mens just accessable in that class that created there
<br>
<br>
// 3 the protected means its accessable in this class and in those classes that inhereted from the parent class
<br>
<br>
// 4 the extend meaning is that the child class can inhertance the property and methods from the parent class
<br>
<br>
// 5 the parent class is that have the main property and method and child class will inherte from parent
<br>
<br>
// 6 the child class inherit property from parent class
<br>
<br>
// 7 bacause of that we can access the private in other class and with the protected we can access a method and property from parent class