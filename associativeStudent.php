<?php

$results = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 95,
    "Eve" => 88,
];

$totalScore = 0;
$numStudents = count($results);

foreach ($results as $score) {
    $totalScore += $score;
}

$averageScore = $totalScore / $numStudents;

echo "Student Names and Scores:\n";
foreach ($results as $student => $score) {
    echo "$student: $score\n";
}

echo "\nAverage Score: $averageScore\n";

echo "\nStudents who scored more than average:\n";
foreach ($results as $student => $score) {
    if ($score > $averageScore) {
        echo "$student\n";
    }
}
?>

