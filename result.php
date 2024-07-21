<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

use LDAP\Result;

 include "link.php"   ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="<?php echo $_SERVER ['PHP_SELF'] ?>" method="POST">
                    <fieldset class="border p-2">
                        <legend class="w-auto">Midterm PHP</legend>
                        <div class="form-group">
                            <label class="text-info">PHP</label>
                            <input type="point" name="txtphp" class=" bg-danger text-white">
                        </div>
                        <div class="form-group">
                            <label class="text-info">VB</label>
                            <input type="point" name="txtvb" class=" bg-danger text-white">
                        </div>
                        <div class="form-group">
                            <label class="text-info">ASP</label>
                            <input type="point" name="txtasp" class=" bg-danger text-white">
                        </div>
                        <div class="form-group">
                            <button type="show" name="btnshow" class="btn btn-success">Show</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="card p-2">
            <?php
            if(isset($_POST['btnshow'])){
            $php = $_POST['txtphp'];
            $vb = $_POST['txtvb'];
            $asp = $_POST['txtasp'];
            $total = $php + $vb + $asp;
            $averge = $total/3 ; 
            $result = $averge;
            if ($result >="50%")($result <="50%");
                echo ("Pass");        
            }

            echo "<table class='table table-striped'>";
            echo "<tr>";
                echo "<td> Total : ".$total." </td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> Average : ".$averge." </td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td> Result : ".$result." </td>";
            echo "</tr>";
            ?>
                
        </div>
    </div>


</body>
</html>