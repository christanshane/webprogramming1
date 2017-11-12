<?php
$conn = new mysqli("localhost","root","","webp1");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

 
// create a variable
$email=$_POST['email'];
$pass=$_POST['password'];
 
//Execute the query
    if(empty($query)){
        $exists = false;
    }else{
        $exists = true;
    }
    // if($conn->query($sql) == TRUE){
    //     echo "Record Exists";
    // }else{
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
$conn->close();
?>