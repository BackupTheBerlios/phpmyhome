<?
include_once("include/default_lib.inc.php");
include_once("base/dbauth.php");
session_start();

if(strlen($user) && strlen($passwd))
{
	$id=user_exists($user,$passwd)
	if(!$id)		//test de l'authentif
	{
		print(libACCOUNTNOTEXIST);
	}
	else
	{
		session_register("id");
	}
}

if (!session_is_registered("id"))	//si on est pas authentifié
{
	?>
	<div class=authentif>
		<form action="index.php" method="post">
			<label for="user"><? print libLOGIN ?></label>
			<input type="text" id="user" name="user">
			<label for="passwd"><? print libPASSWD ?></label>
			<input type="password" id="passwd" name="passwd">
			<input type="submit" value="Login">
		</form>
		<a href="createaccount.php"><? print libCREERCOMPTE ?></a>
	</div>
	<?
	break;			//ne pas afficher le reste de la page
}
?>
