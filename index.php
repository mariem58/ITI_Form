<?php
$errors=array();
// var_dump($_GET['errors']);
if(isset($_GET['errors'])){
    $errors=json_decode($_GET['errors'],true);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1</title>
    <link rel="stylesheet" href="style.css">
    <!-- jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form  action="show.php" method="post">
        <div class="container">
        <div class="header">Enter Your Information</div>
        <br>
        <br>  
        <label>User ID:</label>
        <input type="text" name="user_id" required><br> 

        
        <label >FirstName: </label> 
        <input type="text" id="fname" name="fname" require> <br>
        <span class='danger'> 
            <?php if(isset($errors['fname']))
            { 
                echo $errors['fname'];
            }
            ?>
          </span>  
        <label >LastName:</label>
        <input type="text" id="lname" name="lname" require> <br>
        <span  class='danger'>
        <?php if(isset($errors['lname']))
            { 
                echo $errors['lname'];
            }
            ?>
        </span>
        <label >Address:</label> <br>
        <textarea name="address" id="address" cols="50" rows="4"></textarea><br>
       <label for="country"> Country: </label><br>
        <select name="country" id="country" require>
            <option value="" selected disabled>Select Country</option>
            <option value="Egypt">Egypt</option>
            <option value="USA" >USA</option>
        </select>
        <br>

       <label require> Gender:</label><br>
        <input type="radio" name="gender" value="male">Male <br>
        <input type="radio" name="gender" value="female">Female <br>
        <span class='danger'> 
            <?php if(isset($errors['gender']))
            { 
                echo $errors['gender'];
            }
            ?>
        </span>
        <label require>Language:</label><br>
        <input type="checkbox" name="lang[]" value="PHP">PHP<br>
        <input type="checkbox" name="lang[]" value="C#">C#<br>
        <input type="checkbox" name="lang[]" value="Java">Java<br>
        <label >Username:</label> 
        <input type="text" name="username" id="username" > <br>
        <span class='danger'> 
            <?php if(isset($errors['username']))
            { 
                echo $errors['username'];
            }
            ?>
         </span>
        <label >Password:</label> 
        <input type="password" name="password" require> <br>
        <label >Department:</label> 
        <input type="text" name="dept" require> <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
        </div>
        
    </form>
</body>
</html>