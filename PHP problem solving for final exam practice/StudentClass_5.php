
<!-- You are working on a school management system. Create a class named Student with properties for
student ID, name, and grades. Implement methods to add grades, calculate the average grade, and
display the student&#39;s information. -->

<?php
class Student {
    private $studentID;
    private $name;
    private $grades = [];

    public function __construct($studentID, $name) {
        $this->studentID = $studentID;
        $this->name = $name;
    }

    public function addGrade($grade) {
        // Add validation logic here if needed
        $this->grades[] = $grade;
    }

    public function calculateAverageGrade() {
        if (count($this->grades) === 0) {
            return 0; // Return 0 if there are no grades to calculate an average from.
        }
        $total = array_sum($this->grades);
        $average = $total / count($this->grades);
        return $average;
    }

    public function displayInfo() {
        echo "Student ID: " . $this->studentID . "\n";
        echo "Name: " . $this->name . "\n";
        echo "Grades: " . implode(", ", $this->grades) . "\n";
        echo "Average Grade: " . $this->calculateAverageGrade() . "\n";
    }
}

// Example usage:
$student = new Student("12345", "John Doe");
$student->addGrade(85);
$student->addGrade(92);
$student->addGrade(78);

$student->displayInfo();
?>
