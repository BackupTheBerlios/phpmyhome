<?
require("require/connectDB.php");

function new_user($a_user,$a_passwd)
{
	global $connect;
	
	$query="INSERT INTO users (login,passwd) VALUES ('".$a_user."','".crypt($a_passwd)."')";
	
	return mysql_query($query,$connect);
}

function user_exists($a_user,$a_passwd)
{
	global $connect;
	
	$query="SELECT passwd,user_id FROM users WHERE login='".$a_user."'";
	
	$res=mysql_query($query,$connect);
	$obj=mysql_fetch_object($res);
	
	if (crypt($a_passwd,$obj->passwd)==$obj->passwd)
	{
		return $obj->user_id;
	}
	else
	{
		return false;
	}
}
?>
