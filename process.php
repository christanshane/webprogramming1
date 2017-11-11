<?php
$conn = new mysqli("localhost","root","","webp1");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

 
// create a variable
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
 
//Execute the query
if($pass1==$pass2){
    $sql = "INSERT INTO accounts (username, usermail, userpassword) VALUES ('$fullname','$email','$pass1')";
    if($conn->query($sql) == TRUE){
        echo "New Record created Successfully";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>