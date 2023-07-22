<?php
foreach($data as $value){
    $user=explode(':',$value);
    echo"<tr>";
    foreach($user as $value){
        echo"<td> $value</td>";

    }
    echo "<td> <a class='btn btn-warning'>Edit </a></td>";
    echo "<td> <a href='deleteuser.php?username={$user[0]}' class='btn btn-warning'>Delete </a></td>";
    echo "</tr>";
}
?>