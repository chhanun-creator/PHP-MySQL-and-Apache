<?php 
 if(isset($_POST['btnlogin'])){
     $uname = $_POST['txtuname'];
     $pwd = $_POST['txtpwd'];
     if($uname=="administrator" && $pwd=="Admin777"){
        header("location: log.php");
     }else{
         echo"<script>
            alert ('username or password Incorrect');
         </script>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "link.php" ; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card p-3">
                    <div class="bg-primary text-center p-2">
                        SMAOE CHHANUN
                    </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label>User Name :</label>
                        <input type="text" name="txtuname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" name="txtpwd" class="form-control">
                    </div>
                    <div class="form-group">
                            <button type="submit" name="btnlogin" class="btn btn-warning">Log In</button>
                            <button type="reset" name="btncancel" class="btn btn-danger">Clear</button>
                    </div>
                </div>
                </form>    
            </div>      
        </div>
    </div>
    
</body>
</html>