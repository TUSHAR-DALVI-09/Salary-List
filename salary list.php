<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary List</title>
</head>
<body>
    <form method="POST">
        Enter Your Name: <input type="text" name="name" required><br>
        Enter Your Basic Salary : <input type="number" name="basic" required><br>
        Enter DA% : <input type="text" name="daper"><br>
        Enter HRA% <input type="text" name="hraper"><br>
        <input type="submit" name="b1">
    </form>

    <?php
    if(isset($_POST['b1']))
    {
        $name = $_POST['name'];
        $basic = $_POST['basic'];
        $daper = $_POST['daper'];
        $hraper = $_POST['hraper'];
        $daamt = ($basic *$daper)/100;
        $hraper = ($basic *$hraper)/100;
        $total = $basic+$daamt+$hraper;

        echo"Employee Name - $name <br>";
        echo"Basic Salary - $basic <br>";
        echo"DA - $daamt <br>";
        echo"HRA - $hraper <br>";
        echo"Total Salary - $total <br>";
    }
    ?>
</body>
</html>