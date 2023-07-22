<?php
$errors=array();
if(!isset($_POST['name']) or empty($_POST['name'])){
   $errors['name']='Name is required';
}else{
   var_dump($errors);
    $name=$_POST['name'];
    echo "Username: ".$name."<br>"; 
}
$formErrors=json_encode($errors);
header("location:index.php?errors=$formErrors");

?>