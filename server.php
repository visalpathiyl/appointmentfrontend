<?php
    session_start();
    $username = "";
    $email = "";
    $department = "";
    $semester = "";
    $subject = "";
    $data = "";
    $errors = array();
    // connect to the databse
    $db = mysqli_connect('localhost','root','','appointment');

    // if the register button is clicked
   /* if (isset($_POST['register'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $department = mysqli_real_escape_string($db, $_POST['department']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    //ensure that form fields are filled properly
    if(empty($username)){
        array_push($errors, "username is required"); // add error to errors array
    }
    
    if(empty($department)){
        array_push($errors, "Department is required"); // add error to errors array
    }
    if(empty($email)){
        array_push($errors, "E-mail is required"); // add error to errors array
    }   
    
    if(empty($password_1)){
        array_push($errors, "password is required"); // add error to errors array
    }    
    
    if(empty($username)){
        array_push($errors, "username is required"); // add error to errors array
    }

    if($password_1 != $password_2){
        array_push($errors, "The two passwords do not match");
    }

    //if there are no errors, save user to database
    if(count($errors)==0){
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, department, password)
                VALUES ('$username', '$email', '$department', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="You are now logged in";
        header('location: index.php'); //redirect to home page
    }

}*/

?>