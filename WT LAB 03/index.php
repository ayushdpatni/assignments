<!DOCTYPE html>
<html>
<head>
    <title>Calculate Electric Bill</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="https://image.shutterstock.com/image-vector/socket-icon-trendy-outlline-style-260nw-1900883503.jpg">
    <link rel="stylesheet" href="./style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    $amount = '';
    $kwh_usage = '';
    if (isset($_POST['submit'])) {
        $units = $_POST['kwh'];
        if (!empty($units)) {
            $kwh_usage = calculate_electricity_bill($units);
            $amount = '<strong>Total amount of ' . $units . ' units : ₹</strong> ' . $kwh_usage;
        }
    }
    function calculate_electricity_bill($units) {
        $first_unit_cost = 3.50;
        $second_unit_cost = 4.00;
        $third_unit_cost = 5.20;
        $fourth_unit_cost = 6.50;

        if($units <= 50) {
            $bill = $units * $first_unit_cost;
        }
        else if($units > 50 && $units <= 150) {
            $temp = 100 * $first_unit_cost;
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * $second_unit_cost);
        }
        else if($units > 150 && $units <= 250) {
            $temp = (100 * $first_unit_cost) + (100 * $second_unit_cost);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * $third_unit_cost);
        }
        else {
            $temp = (100 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
            $remaining_units = $units - 300;
            $bill = $temp + ($remaining_units * $fourth_unit_cost);
        }
        return number_format((float)$bill, 2, '.', '');
    }
    ?>
    <div class="container">
    <br>
    <h2>Calculate electricity bill in PHP <img class="elect-img" src="https://cdn-icons-png.flaticon.com/512/7506/7506305.png" alt="image"></h2>
    <h6>By Ayush Patni</h6>
    <br>
    <div class="form-group">
        <form action="" method="post">
        <div class="form-group">
            <input type="number" name="kwh" placeholder="Please enter no. of Units" class="form-control" />
        </div>
        <div class="form-group">        
            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
            <input type="reset" name="reset" class="btn btn-secondary" value="Reset" />
        </div>  
        </form>
        </div>
        <div>
            <?php echo '<br />' . $amount; ?>
        </div>
    </div>
</body>
</html>