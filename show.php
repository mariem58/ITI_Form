<?php
// $errors=array();
if(!isset($_POST['name']) or empty($_POST['name'])){
   $errors['name']='Name is required<br>';
}else{
   
    $name=$_POST['name'];
    echo "Username: ".$name."<br>"; 
}
if(!isset($_POST['fname']) or empty($_POST['fname'])){
   $errors['fname']='First Name is required <br>';
}else{
   
    $fname=$_POST['fname'];
    echo "Username: ".$fname."<br>"; 
}
if(!isset($_POST['lname']) or empty($_POST['lname'])){
   $errors['lname']='Last Name is required<br>';
}else{
   
    $fname=$_POST['lname'];
    echo "Last name: ".$lname."<br>"; 
}
if(!isset($_POST['gender']) or empty($_POST['gender'])){
   $errors['gender']='Gender is required<br>';
}else{
   
    $fname=$_POST['gender'];
    echo "Gender: ".$lname."<br>"; 
}
// var_dump($errors);
$formErrors=json_encode($errors);
// var_dump($formErrors);
header("location:index.php?errors=$formErrors");

?>