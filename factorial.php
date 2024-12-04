<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" min="0" required><br><br>
        <input type="submit" name="submit" value="Calculate Factorial">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $number = $_POST['number'];

        function factorial($n) {
            if ($n < 0) {
                return "Factorial is not defined for negative numbers.";
            }
            $result = 1;
            for ($i = 2; $i <= $n; $i++) {
                $result *= $i;
            }
            return $result;
        }
        $factorialValue = factorial($number);

        echo "<h2>Factorial of $number is: $factorialValue</h2>";
    }
    ?>
</body>
</html>
