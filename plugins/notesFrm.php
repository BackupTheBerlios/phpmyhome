<?
	require("../require/connectDB.php");
	include("../include/default_lib.inc.php");
	
	include("../base/dbnotes.php");
?>
	<div class="InFrmDiv">
		<form action="../include/savNotes.php" method="post" class="mainForm">
			<div class="noteDivTextarea">
				<textarea class="noteTextarea"><? getNotes("1"); ?></textarea>
			</div>
			<div class="noteDivSave">
				<input type="submit" class="noteSave" value="<? print libSAVE ?>">
			</div>
		</form>
	</div>
