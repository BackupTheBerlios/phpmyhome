<?
require_once("require/connectDB.php");
require_once 'DB.php';

function printBlog($num,$user="")
{
	global $db;
	
	$query="SELECT users.user_id,users.login,blog.text,blog.title,blog.blog_id FROM blog LEFT JOIN users ON users.user_id=blog.user_id ORDER BY blog.blog_id DESC LIMIT ".$num;

	$res =& $db->query($query);
	
	while($obj=$res->fetchRow(DB_FETCHMODE_OBJECT))
	{
		print "<div class=\"blogTitle\">".
			$obj->title.
			"</div>".
			"<div class=\"blogAuthor\">".
			$obj->login.
			"</div>".
			"<div class=\"blogText\">".
			$obj->text.
			"</div>";
	}
}

function writeBlog($user,$text)
{
	global $db;
	
	$query="INSERT INTO blog (user_id,text) VALUES ('".$user."','".$text."')";
	
	$db->query($query);
}
?>
