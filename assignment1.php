<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "link.php"; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row ">
            <div Class="col m=0 p=0">
               <?php include "picture.php"; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 m-0 p-2">
                <br>
                    <?php include "technical.php"; ?>
                </br>
                    <?php include "trading.php"; ?>
                    <?php include "address.php"; ?>
            </div>  
            <div class="col-sm-9 m-0 p-2">
                <br>
                    <?php include "ppi1.php"; ?>
                </br>
                    <?php include "ppi2.php"; ?>
                <div class="row">
                    <?php include "row1.php"; ?>
                </div>
                <div class="row">
                    <?php include "row2.php"; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
           <?php include "copyright.php" ; ?>
        </div>
    </div>
</body>
</html>