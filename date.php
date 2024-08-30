<?php 
function validateDate($day, $month, $year){
    if(checkdate($day, $month, $year)){
        echo "The date $year-$month-$day is valid";
    } else {
        echo "The date $year-$month-$day is invalid";
    }
}

$day = intval(readline("Enter day: "));
$month = intval(readline("Enter month: "));
$year = intval(readline("Enter year: ")); 

validateDate($day, $month, $year);
?>