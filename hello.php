
<?php
$nationality = strtolower(readline("Enter your nationality: "));
$isIndian = ($nationality === "indian"? "yes" : "no");
echo $isIndian;
?>