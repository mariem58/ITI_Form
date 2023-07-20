<?php 

      $capatcha="m5tt79k";
    if($capatcha!= $_POST["capatcha"]){
        header("Location: index.php?status=false");
        exit();
    }
    $username='User';
    if(isset($_GET["name"])){
        $username = $_GET["name"];
    }
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $add=$_GET['address'];
    $gender=$_GET['gender']=='male'?"Mr ":"Miss ";
    $lang=$_GET['lang'];
    $dept=$_GET['dept'];
   
    echo'Thanks '.$gender.' '.$fname.' '.$lname;
    echo"<br>";
    echo"Please Review Your Information";
    echo"<br>";
    echo'Name: '.$fname." ".$lname."<br>".'Address: '.$add."<br>".'Yor Skills: ';
    foreach($lang as $key=>$value){
        echo"$value <br>";

    }
    echo'Department: '.$dept;



?>