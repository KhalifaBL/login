<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <?php
            if((isset($_POST["password"]))AND ($_POST["password"]=="kangourou"))
            {
                ?>


    <div class="wrapper">
        <table class="important">
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Salary</th>
                <th>Approved</th>
            </tr>
            <tr>
                <th>Max</th>
                <th>Mathiew</th>
                <th>15k$</th>
                <th>Yes</th>
            </tr>

            <tr>
                <th>Jhon</th>
                <th>Wyatt</th>
                <th>50k$</th>
                <th>Yes</th>
            </tr>
        </table>
        <button><a href="./index.php">Log Out</a></button>
    </div>

    <?php 
    }else{
        
         $hacker= $_POST["password"];
         
        echo "We have warned you " .$hacker . ", now assume your responsibilities!";
    }
    ?>
</body>

</html>