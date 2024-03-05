<?php
include 'config.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator  = $_POST['operator'];

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;

    case '-':
        $result = $num1 - $num2;
        break;

    case '*':
        $result = $num1 * $num2;
        break;

    case '/':
        $result = $num1 / $num2;
        break;

    default:
        $result = "Invalid operator";
        break;
}

$stmt = $pdo->prepare("INSERT INTO calculations (num1, num2, operator, result) VALUES (?, ?, ?, ?)");
$stmt->execute([$num1, $num2, $operator, $result]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator : PHP Unit Testin</title>
</head>

<body>
    <h1>Calculator</h1>

    <form action="calculator.php" method="POST">
        <input type="number" name="num1" placeholder="Enter a number">
        <select name="operator" id="" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter a number">
        <input type="submit" value="Calculate">
    </form>

    <?php if (isset($result)) : ?>
    <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>

</html>