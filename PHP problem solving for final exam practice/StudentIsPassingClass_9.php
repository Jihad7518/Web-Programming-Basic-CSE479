<!-- Create a class named Student with properties name, age, and grade. Implement a method called
isPassing() that returns true if the student&#39;s grade is above or equal to 70, otherwise returns false. -->

<?php
class Student {
    public $name;
    public $age;
    public $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function isPassing() {
        if($this->grade >= 70){
            return "True";
        }
        else{
            return "False";
        }
    }
}

// Example usage:
$student1 = new Student("John Doe", 18, 85);
$student2 = new Student("Jane Smith", 17, 62);


echo $student1->isPassing() . "\n";
echo $student2->isPassing();

?>
