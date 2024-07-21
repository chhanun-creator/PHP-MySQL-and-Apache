<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel= "stylesheet" type="text/css" href="css/index.css">
    <link rel= "stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <fieldset class="border p-2">
                    <legend class="w-auto">Student Registration</legend>
                    <div class="form-group">
                        <div class="table">
                            <table class="table table-danger bg-white ">
                           
                                <tr>
                                    <td class="text-primary">Name</td>
                                    <td>:</td>
                                    <td> <input type="name" name="txtname" class="form-control border-primary"> </td>
                                </tr>

                                <tr>
                                    <td class="text-primary">Age</td>
                                    <td>:</td>
                                    <td> <input type="number" name="txtage" class="form-control border-primary"> </td>
                                </tr>

                                <tr>
                                    <td class="text-primary">Gender</td> 
                                    <td>:</td>
                                    <td>
                                        <select name="txtgender" class="badge badge-secondary">;
                                        <option value="Male" >Male</option>
                                        <option value="Female" >Female</option>
                                        <option value="Nothing" >Nothing</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-primary">Date of Birth</td>
                                    <td>:</td>
                                    <td> <input type="date" name="txtdate" class="form-control border-primary"> </td>
                                </tr>

                                <tr>
                                    <td class="text-primary">Place of Birth</td>
                                    <td>:</td>
                                    <td> <input type="place" name="txtplace" class="form-control border-primary"> </td>
                                </tr>

                                <tr>
                                    <td class="text-primary">Current Address</td>
                                    <td>:</td>
                                    <td> <input type="place" name="txtadd" class="form-control border-primary"> </td>
                                </tr>

                                <tr>
                                    <td class="text-primary">Phone Number</td>
                                    <td>:</td>
                                    <td> <input type="phone" name="txtphone" class="form-control border-primary"> </td>
                                </tr>

                                <tr>
                                <td>
                                <button type="summit" name="btnsave" class="btn btn-success">Save</button>
                                <button type="reset" name="btnclear" class="btn btn-danger">Cancel</button>
                                </td>
                                </tr>
                            
                            </table>
                        </div> 
                    </div>                        
                </fieldset>
                </form>
            </div>  
            <div class="col-sm-6">
                <fieldset class="border p-2">   
                <legend class="w-auto">Result</legend>
                    <div class="table">
                        <table class="table table-danger bg-white ">
                <?php
                if(isset($_POST['btnsave'])){
                    $txtname = $_POST['txtname'];
                    $txtage = $_POST['txtage'];
                    $gender = $_POST['txtgender'];
                    $txtadd = $_POST['txtadd'];
                    $place = $_POST['txtplace'];
                    $date = $_POST['txtdate'];
                    $phone = $_POST['txtphone'];
                
                echo "<table>";
                echo "<table class='table-danger bg-white'>";
   
                echo"<tr>";
                    echo"<td class='text-primary'>Name</td><td class='text-primary'>:</td><td class='text-danger'>$txtname</td>";
                echo"</tr>";
            
                echo "<tr>";
                    echo "<td class='text-primary'>Age</td><td class='text-primary'>:</td><td class='text-danger'>$txtage</td>";
                echo "<tr>";
            
                echo "<tr>";
                    echo "<td class='text-primary'>Gender</td><td class='text-primary'>:</td><td class='text-danger'>$gender</td>";
                echo "<tr>";
                
                echo "<tr>";
                    echo "<td class='text-primary'>Date of Birth</td><td class='text-primary'>:</td><td class='text-danger'>$date</td>";
                echo "<tr>";

                echo "<tr>";
                    echo "<td class='text-primary'>Place of Birth</td><td class='text-primary'>:</td><td class='text-danger'>$place</td>";
                echo "<tr>";

                echo "<tr>";
                    echo "<td class='text-primary'>Current Address</td><td class='text-primary'>:</td><td class='text-danger'>$txtadd</td>";
                echo "<tr>";

                echo "<tr>";
                    echo "<td class='text-primary'>Phone Number</td><td class='text-primary'>:</td><td class='text-danger'>$phone</td>";
                echo "<tr>";
                
                

                echo "</table>";
                echo "</table>";
                }else{
                    echo "error";
                }
                ?>
<div class="spinner-grow text-muted"></div>
<div class="spinner-grow text-primary"></div>
<div class="spinner-grow text-success"></div>
<div class="spinner-grow text-info"></div>
<div class="spinner-grow text-warning"></div>
<div class="spinner-grow text-danger"></div>
<div class="spinner-grow text-secondary"></div>
<div class="spinner-grow text-dark"></div>
<div class="spinner-grow text-light"></div>

                        </table>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>