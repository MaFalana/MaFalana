<?php
    $email = ""; //inputted email address
    $message = "";
    $fName = ""; //first name
    $lName = ""; // last name
    $to = "malikfalana@icloud.com"; //my email address


    if (isset($_POST['Send']))
    {
        $email = $_POST['email'];
        $message = $_POST['message'];
        $fName = $_POST['firstName'];
        $lName = $_POST['lastName'];
        $headers = "From: ".$email.;

        $txt = "You have recieved an e-mail from".$fName .$lName.".\n\n".$message;
        
        mail($to, $txt, $message, $headers);
        header("Location:index.html");
    }
?>