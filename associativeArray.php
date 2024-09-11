<?php

// Sample student data (replace with your actual data)
$students = [
    'student1' => [
        'name' => 'Alice',
        'age' => 20,
        'grade' => 'A',
    ],
    'student2' => [
        'name' => 'Bob',
        'age' => 22,
        'grade' => 'B',
    ],
    'student3' => [
        'name' => 'Charlie',
        'age' => 21,
        'grade' => 'C',
    ],
];

// Create the table
echo '<table>';
echo '<thead>';
echo '<tr><th>Name</th><th>Age</th><th>Grade</th></tr>';
echo '</thead>';
echo '<tbody>';

// Iterate over each student using a foreach loop
foreach ($students as $student) {
    echo '<tr>';
    echo '<td>' . $student['name'] . '</td>';
    echo '<td>' . $student['age'] . '</td>';
    echo '<td>' . $student['grade'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>