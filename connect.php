<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $telnum = $_POST['telnum'];
    $emailid = $_POST['emailid'];
   // $feedback = $_POST['feedback'];

    $conn = new mysqli('localhost','root','','reg_form');
    if($conn->connect_error)
    {
        die('connection failed : ' .$conn->connect_error);

    }else{
        $stmt = $conn->prepare("insert into student(firstname, lastname, telnum, emailid)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$firstname, $lastname, $telnum, $emailid);
        $stmt->execute();
        echo "Thank you for contacting us";
        $stmt->close();
        $conn->close();    
    }



?>