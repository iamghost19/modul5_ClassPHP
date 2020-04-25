<?php
include("userService.php");
$email=$_POST['email'];
$password=$_POST['password'];
$user = new userService($email,$password);

if($get_user = $user->login()) {
    echo 'Welcome '.$user->getRole();
    echo ', Logged it as user email:'.$get_user;
	echo '<br>';
	$user->histories($email);
	
} else {
    echo 'Invalid Login';
}

?>