<?
	function getNotes($a_user_id="")
	{
		if(strlen($a_user_id)>0)
		{
			$query="SELECT `note` FROM notes where `user_id`=".$a_user_id;
			
			$res=mysql_query($query);
			$obj=mysql_fetch_object($res);
			print $obj->note;
		}
	}
?>
