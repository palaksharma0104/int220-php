<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>
<form method="POST">
    <label for="num1">First Number:</label>
    <input type="number" name="num1" id="num1" required>
    <br><br>

    <label for="num2">Second Number:</label>
    <input type="number" name="num2" id="num2" required>
    <br><br>

    <label for="operation">Choose Operation:</label>
    <select name="operation" id="operation" required>
        <option value="add">Addition</option>
        <option value="subtract">Subtraction</option>
        <option value="multiply">Multiplication</option>
        <option value="divide">Division</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            $operation_name = 'Addition';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $operation_name = 'Subtraction';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $operation_name = 'Multiplication';
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $operation_name = 'Division';
            } else {
                $result = 'Error: Division by zero';
                $operation_name = 'Division';
            }
            break;
        default:
            $result = 'Invalid Operation';
            break;
    }

    
    echo "<h3>Result of $operation_name: $result</h3>";
}
?>

</body>
</html>
