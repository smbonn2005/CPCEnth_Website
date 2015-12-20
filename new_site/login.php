<?
$username = (isset($_POST['username']) && !empty($_POST['username'])) ? $_POST['username'] : false;
$password = (isset($_POST['password']) && !empty($_POST['password'])) ? $_POST['password'] : false;

if(!$username || !$password){
	die("false");
}

$auth_username = "admin";
$auth_password = "adminpassword123";

if(strtolower($username) == $auth_username && $password = $auth_password){
	// Good login
	setcookie('username',$username,time()+7*24*60*60);
	die("true");
} else {
	// Incorrect Login
	die("false");
}
?>