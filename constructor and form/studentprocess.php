<?php
class Student {
    private $name;
    private $age;
    private $course;

    // Constructor to initialize student's name, age, and course
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        $this->showStudent();
    }

    // Method to display student details
    public function showStudent() {
        echo "<h2>Student Details</h2>";
        echo "Student Name: " . $this->name . "<br>";
        echo "Student Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
    }
}

// Retrieve form data and create a Student instance
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    // Create a new Student object
    $student = new Student($name, $age, $course);
}
?>
