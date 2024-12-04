<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <form action="" method="post">
        <label for="number1">Enter first number:</label>
        <input type="number" name="number1" required><br><br>
        
        <label for="number2">Enter second number:</label>
        <input type="number" name="number2" required><br><br>
        
        <label for="number3">Enter third number:</label>
        <input type="number" name="number3" required><br><br>
        
        <input type="submit" value="Find Largest" name="btn-submit">
    </form>

    <?php
    if (isset($_POST["btn-submit"])) {
        
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];

        $largest = max($number1, $number2, $number3);

        echo "<h2>The largest number is: $largest</h2>";
    }
    ?>
</body>
</html>
