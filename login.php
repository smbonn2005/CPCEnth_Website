<?
$username = (isset($_REQUEST['username']) && !empty($_REQUEST['username'])) ? $_REQUEST['username'] : false;
$password = (isset($_REQUEST['password']) && !empty($_REQUEST['password'])) ? $_REQUEST['password'] : false;

if(!$username || !$password){
	die("false1");
}

$auth_username = array("smbonn2005","gabe","devildog","sofis_litzankat");
$auth_password = array("potter13467","rza162009","hell1boy","cpcepass21");
$key = array_search(strtolower($username), $auth_username);
if($key !== false && $password == $auth_password[$key]){
	// Good login
	setcookie('username',$username,time()+7*24*60*60);
	die("true");
} else {
	// Incorrect Login
	die("false2");
}
?>