<?
include_once("include/default_lib.inc.php");
include_once("base/dbauth.php");

if(strlen($user) && strlen($passwd))
{
	if(!new_user($user,$passwd))
	{
		print(libACCOUNTEXIST);
		print("<a href=\"createaccount.php\">".libRETURN."</a>");
	}
	else
	{
		print(libACCOUNTCREATED);
		print("<a href=\"index.php\">".libRETURN."</a>");
	}
}
?>
<div class=authentif>
	<form action="createaccount.php" method="post">
		<label for="user"><? print libLOGIN ?></label>
		<input type="text" id="user" name="user">
		<label for="passwd"><? print libPASSWD ?></label>
		<input type="password" id="passwd" name="passwd">
		<input type="submit" value="<? print libCREERCOMPTE ?>">
	</form>
</div>
