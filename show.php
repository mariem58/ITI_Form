<?php
// $errors=array();
if(!isset($_POST['name']) or empty($_POST['name'])){
   $errors['name']='Name is required';
}else{
   
    $name=$_POST['name'];
    echo "Username: ".$name."<br>"; 
}
// var_dump($errors);
$formErrors=json_encode($errors);
// var_dump($formErrors);
header("location:index.php?errors=$formErrors");

?>