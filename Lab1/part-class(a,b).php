<!DOCTYPE html>
<html>
<body>
    <?php
        echo "part_A<br>";
        echo "<br>";
        class Students{
            function Sayhello()
            {
                echo "Hello people of Afghanistan." . "<br>";
            }
        }

    $student1 = new Students();
    $student1->Sayhello() ; 

        echo "<br>";
        echo "part_B<br>";
        echo "<br>";        
        class Students_info{
            public $name;
            public $studentId;
            public $department;

            function __construct($name, $studentId, $department){
                $this->name = $name;
                $this->studentId = $studentId;
                $this->department = $department;
            }
            function showinfo(){
              
                echo "Name: " . $this->name . "<br>";
                echo "StudentID: " . $this->studentId . "<br>";
                echo "Department: " . $this->department . "<br>";
                
            }

        }
    $stu1 = new Students_info("Zaki", 1, "Information Technology");
    $stu1->showinfo();
    ?>

</body>

</html>