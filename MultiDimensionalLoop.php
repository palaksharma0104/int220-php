<?php

$studentResults = [
    "Alice" => [
        "Math" => 85,
        "Science" => 92,
        "English" => 78
    ],
    "Bob" => [
        "Math" => 95,
        "Science" => 88,
        "English" => 75
    ],
    "Charlie" => [
        "Math" => 78,
        "Science" => 90,
        "English" => 85
    ]
];

foreach ($studentResults as $studentName => $studentScores) {
    echo "Student: $studentName\n";
    foreach ($studentScores as $subject => $score) {
        echo "$subject: $score\n";
    }
    echo "\n";
}