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
</body>

</html>