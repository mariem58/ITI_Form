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

$f = fopen($file, 'r');
$records = [];


   while (($line = fgets($file)) !==false) {
        // Parse each line into array of fields
        $record = explode('br', $line); // Change the delimiter if necessary
        $records[] = $record;
    }
    fclose($file);

// Display the records in a table
echo '<table>';
echo '<tr>
<th>First Name/th>
<th>Last Name</th>
<th>Address</th>
<th>Gender</th>
<th>Skills</th>
<th>Username</th> 
<th>Department</th>
<th>Delete</th>
</tr>'; // Replace Field 1 and Field 2 with your actual field names

foreach ($records as $record) {
    echo '<tr>';
    foreach ($record as $field) {
        echo '<td>' . $field . '</td>';
    }
    echo '<td><button onclick="deleteRecord(this)">Delete</button></td>';
    echo '</tr>';
}

echo '</table>';
?>

<script>
function deleteRecord(button) {
    var row = button.parentNode.parentNode;
    var rowIndex = row.rowIndex;

    // Remove the row from the table
 document.querySelector('table').deleteRow(rowIndex);

    // Send AJAX request to delete the record from the file
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'delete_record.php'); // Create a separate PHP file to handle the deletion
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Record deleted successfully');
        } else {
            console.log('Error deleting record');
        }
    };
    xhr.send('rowIndex=' + rowIndex);
}
</script>

