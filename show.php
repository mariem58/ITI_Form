<?php
$errors=array();
if(!isset($_POST['username']) or empty($_POST['username'])){
   $errors['username']='Username is required<br>';
}else{
   
    $username=$_POST['username'];
    echo "Username: ".$username."<br>"; 
}


if(!isset($_POST['fname']) or empty($_POST['fname'])){
   $errors['fname']='First Name is required <br>';
}else{
   
    $fname=$_POST['fname'];
    echo "First Name: ".$fname."<br>"; 
}

if(!isset($_POST['lname']) or empty($_POST['lname'])){
   $errors['lname']='Last Name is required<br>';
}else{
   
    $lname=$_POST['lname'];
    echo "Last name: ".$lname."<br>"; 
}

if(!isset($_POST['gender']) or empty($_POST['gender'])){
   $errors['gender']='Gender is required<br>';
}else{
   
    $gender=$_POST['gender'];
    echo "Gender: ".$gender."<br>"; 
}
// var_dump($errors);
$formErrors=json_encode($errors);
// var_dump($formErrors);


$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$address=$_POST['address'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$skills=isset($_POST['lang'])? implode(', ',$_POST['lang']):'';
$username=$_POST['username'];
$department=$_POST['dept'];

$file=fopen('customer.txt','a');
fwrite($file,"First Name: $first_name \n");
fwrite($file,"Last Name: $last_name \n");
fwrite($file,"Address: $address \n");
fwrite($file,"Country: $country \n");
fwrite($file,"Skills: $skills \n");
fwrite($file,"Username: $username \n");
fwrite($file,"Department: $department \n");


header("location:index.php?errors=$formErrors");

?>