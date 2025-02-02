<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary List</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container{
        display: flex;
        background-color: pink;
        width: auto;
        margin-right: 20px;
        border-radius: 5px;

    }
    label{
        font-size: 15px;
        font-weight: 550;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    input{
        display: flex;
        font-size: 20px;
    }
    input[type]{
        width: 100%;
        height: 30px;
        border-radius: 10px;
        border: 2px solid black;
    }

    .btn{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: palevioletred;
    }
    .submit{
        font-size: medium;
        width: 90px;
        height: 30px;
        border-radius: 10px;
        border: 2px solid black;
        background-color: papayawhip;
        color: red;
    }
    .submit:hover{
        background-color: pink;
    }
    h1{
        display: contents;
        font-size: 15px;
        color: blue;
    }


</style>
<body>
    <div class="container">
    <form method="POST">
        <label>Enter Your Name</label>
        <input type="text" name="name" required><br>

        <label>Enter Your Basic Salary</label>
        <input type="number" name="basic" required><br>

        <label>Enter DA%</label>
        <input type="text" name="daper"><br>

        <label>Enter HRA%</label>
        <input type="text" name="hraper"><br>

        <div class="btn">
        <button class="submit" name="b1">Submit</button></div>
    </form>
    </div>

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

        echo"<h1>Employee Name - $name <h1><br>";
        echo"<h1>Basic Salary - $basic <h1><br>";
        echo"<h1>DA - $daamt <h1><br>";
        echo"<h1>HRA - $hraper <h1><br>";
        echo"<h1>Total Salary - $total <h1><br>";
    }
    ?>
</body>
</html>