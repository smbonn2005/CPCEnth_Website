<?
$username = (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) ? $_REQUEST['username'] : false;
$password = (isset($_REQUEST['password']) && !empty($_REQUEST['password'])) ? $_REQUEST['password'] : false;

if(!$username || !$password){
	die("false1");
}

$auth_username = "admin";
$auth_password = "adminpassword123";

if(strtolower($username) == $auth_username && $password == $auth_password){
	// Good login
	setcookie('username',$username,time()+7*24*60*60);
	die("true");
} else {
	// Incorrect Login
	die("false2");
}
?>