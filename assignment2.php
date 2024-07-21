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
        <div class="row">
           <div class="col "> 
              <?php
                 echo "<form action='' method='post'>";
                 echo "<fieldset class='border  p-2'>";
                 echo "<legend class='w-auto text-success'> Student Rigistration Chhanun</legend>";
 
                 echo "<div class='form-group'>";
                echo "<label class='text-danger'>Choose Your Subject   :</label> <select>";
                    echo "<option value='IT' class='form-control bg-warning'> Bachelor of Information Technology </option>";
                    echo "<option value='Acc' class='form-control bg-danger'> Bachelor of Accounting </option>";
                    echo "<option value='Man' class='form-control bg-secendary'> Bachelor of Management</option>";
                echo "</select>";
                echo "</div>";
               
                echo "<div class='form-group'>";
                echo "<label> Student Name   :</label> <input type='text' name='txtname' class='form-control text-primary'></input>";
                echo "</div>";

                echo "<div class='form-group'>";
                echo "<label> Student Sex  :</label> <select>";
                    echo "<option value='M' class='form-control bg-warning text-white'>Male </option>";
                    echo "<option value='F' class='form-control bg-primary text-white'>Female </option>";
                    echo "<option value='G' class='form-control bg-danger text-white'> Gay</option>";
                    echo "<option value='N' class='form-control bg-info text-white'> Nothing </option>";
                echo "</select>";
                echo "</div>";

                echo "<div class='form-group'>";
                echo "<label>Student Age   : </label> <input type='number' name='txtage' class='form-control bg-info text-white'>";
                echo "</div>";

                echo "<div class='form-group'>";
                echo "<label> Date of Birth   : </label> <input type='date' name='txtdate' class='form-control bg-warning text-white'>";
                echo "</div>";

                echo "<div class='form-group'>";
                echo "<label> Phone Number  : </label> <input type='phone' name='txtphone' class='form-control bg-danger text-white'>";
                echo "</div>";

                echo "<div class='form-group'>";
                echo "<label> Current Address  : </label> <input type='address' name='txtaddress' class='form-control bg-secondary text-white'>";
                echo "</div>";

                echo "<div class='btn'>";
                    echo "<button class='blue bg-info text-white'> Rigister </button>";
                    echo "<button class='blue bg-danger text-white'> Cancel </button>";
                echo "</div>";
                echo "</fieldset";
                ?>
            </div> 
       </div>
    </div>
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</body>
</html>