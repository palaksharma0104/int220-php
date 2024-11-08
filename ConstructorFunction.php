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
        echo "Student Name: " . $this->name . "<br>";
        echo "Student Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
    }
}

// Creating an instance of the Student class
$student = new Student("Alice", 20, "Computer Science");
?>
