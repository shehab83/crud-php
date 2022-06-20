<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id =$_GET['id'];
    $sql = "DELETE  FROM crud WHERE id='$id'";
    $result = $conn->query($sql); 
    if ($result == TRUE) {
        header('location:display.php');
    }else {
        echo "Error:". $sql . "<br>". $conn->error;
    }
}

?>