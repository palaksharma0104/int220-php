<?php

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


echo '<table>';
echo '<thead>';
echo '<tr><th>Name</th><th>Age</th><th>Grade</th></tr>';
echo '</thead>';
echo '<tbody>';

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