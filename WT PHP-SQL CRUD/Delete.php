<?php
    include "config.php";
    $roll = $_GET['roll'];
    $table = $_GET['table'];
?>

<!DOCTYPE html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
       <h2>Delete a student</h2>

       <form method="POST">
        <table class="table">
                <tr>
                    <td>Roll no.</td>
                    <td><input type='number' name='roll'></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="Delete" type="submit">Delete</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if(isset($_POST['Delete']))
{
    $roll = $_POST['roll'];

    $sql = "DELETE FROM ".$table." where rollno=".$roll;
    $result = $conn->query($sql);

    if ($result == TRUE)
    {
        header("Location: Index.php");
    }
    else
    {
        echo "Error in updating record.";
    }
}
?>
