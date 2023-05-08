<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>VIT Student Admission Records 2023-24</h2>
    <table class="table">
        <thead>
            <th>RollNo</th>
            <th >Name</th>
            <th>Email</th>
            <th>Operations</th>
        </thead>
            <?php
                $sql = "SELECT rollNo, full_name, email FROM AdmissionDetails";
                $result = $conn->query($sql);
                $num = mysqli_num_rows ( $result );
                for ($x = 0; $x < $num; $x++) { 
                    $row = mysqli_fetch_array($result); ?>
                    <tr >
                        <td><?php echo $row['rollNo']; ?> </td>
                        <td><?php echo $row['full_name']; ?></td>
                        <td><?php echo $row['email']; ?> </td>
                        <td>
                            <a href="Update.php?roll=<?php echo $row['rollNo']; ?>&table=admissiondetails">Edit</a>
                            ||
                            <a href="Delete.php?roll=<?php echo $row['rollNo']; ?>&table=admissiondetails">Delete</a>
                        </td>
                    </tr>
            <?php } ?>
        </table>
        <a href="Insert.php?roll=<?php echo $row['rollNo']; ?>&table=admissiondetails"?>Insert</a>
    <br><br>
    </body>

</html>