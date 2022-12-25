<?php
if(isset($_POST['submit']));{
    
    $Name = $_POST['username'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    if(empty($Name) || empty($Email) || empty($Subject)|| empty($Message)){

        header('location:index.php?error');
    }

    else{

        $to = "villaruelviscount@gmail.com";
        if(mail($to,$Subject,$Message,$Email)){

            header("location:index.php?success");
        }

    }

}
