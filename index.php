<?php
include 'config.php';
include 'Calculator.php';

if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator  = $_POST['operator'];
    $calculator = new Calculator();

    switch ($operator) {
        case '+':
            $result = $calculator->add($num1, $num2);
            break;

        case '-':
            $result = $calculator->subtract($num1, $num2);
            break;

        case '*':
            $result = $calculator->multiply($num1, $num2);
            break;

        case '/':
            $result = $calculator->devide($num1, $num2);
            break;

        default:
            $result = "Invalid operator";
            break;
    }

    $stmt = $pdo->prepare("INSERT INTO calculations (num1, num2, operator, result) VALUES (?, ?, ?, ?)");
    $stmt->execute([$num1, $num2, $operator, $result]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator : PHP Unit Testin</title>
</head>

<body>
    <div class="card">
        <h1>Calculator</h1>

        <form action="index.php" method="POST" class="card2">
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
    </div>


    <!-- <style>
        .card {
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            /* background-color: gray; */

        }

        .card>h1 {
            text-align: center;
        }

        .card2 {
            margin-left: auto;
            margin-right: auto;
            width: 300px;
            padding: 5px;
            border-radius: 10px;
            background-color: gray;

        }

        form>input,
        select,
        option {
            display: block;
        }

        input,
        select,
        option {
            padding: 15px;
            border-radius: 10px;
        }
    </style> -->
</body>

</html>