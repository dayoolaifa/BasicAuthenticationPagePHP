<?php session_start();
    

$errorCount = 0;



$username = $_POST['username'] != "" ? $_POST['username'] :  $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] :  $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] :  $errorCount++;

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;


if($errorCount > 0){

     $session_error = "You have". $errorCount . "error detected";
    
    if($errorCount > 1) {        
        $session_error .= "s";
    }

    $session_error .=   "in the form submitted";
    $_SESSION["error detected"] = $session_error ;

    header("Location: register.php");

}else{

     $newUserId = ($countAllUsers-1);

    $userObject = [
        'id'=>$newUserId,
        'username'=>$username,
        'email'=>$email,
        'password'=> password_hash($password, PASSWORD_DEFAULT), 
    ];

    $userExists = find_user($email);

        if($userExists){
            $_SESSION["error"] = "User already exits, please login ";
            header("Location: register.php");
            die();
        }
        
    save_user($userObject);

    $_SESSION["message"] = "Registration Successful!" . $username;

    header("Location: login.php");
}