<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
    <form method="POST">
        Enter units consumed:
        <input type="text" name="units" placeholder="Enter your units"/>
        <input type="submit" name="submit" value="Calculate Bill"/>
    </form>
    <?php
    $units = 0;
    if (isset($_POST['units']) && $_POST['units'] !== '') {
        $units = (int) $_POST['units'];
        if ($units <= 100) {
            $bill_amt = $units * 5;
        } elseif ($units <= 200) {
            $bill_amt = (100 * 5) + ($units - 100) * 10;
        } else {
            $bill_amt = (100 * 5) + (100 * 10) + ($units - 200) * 15;
        }

        echo "<h1>Total Bill amount is: " . $bill_amt . "</h1>";
    }
    ?>
</body>
</html>