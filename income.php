<?php 
$income = intval(readline("The income is: "));
$age = intval(readline("The age is: "));

if ($income <= 10000){
    echo "No tax applied";
} else if ($income >= 10000 && $income <=20000){
    if($age >= 65){
        echo "Tax applied is 5 percent";
    } else {
        echo "Tax applied is 10 percent";
    }
} else if ($income >= 20000){
    if ($age >= 65){
        echo "Tax applied is 15 percent";
    } else {
        echo "Tax applied is 20 percent";
    }
}
 
?>
