<?php
    $name=$_POST['fname'];
    $usn=$_POST['fusn'];
    $email=$_POST['femail'];
    $password=$_POST['fpass'];
 
    echo "HELlo!";

    $conn= new mysqli('localhost','root','','Ebuy');//Ebuy - database name
    if($conn->connect_error)
    {
        die('Connection Failed : ' .$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("Insert into registraton(name,usn,email,password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$name,$usn,$email,$password);
        $stmt->execute();
        echo "Registration Successfull!!..";
        $stmt->close();
        $conn->close();
    }
?>
