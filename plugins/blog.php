<?
	include_once("include/blog_lib".$language.".inc.php");
?>
<div class="mainPlugin" id="divBlog">
	<div class="titlePlugin" <? jsFrmOnClick("plugins/blogFrm.php") ?> >
		<?
			print libBLOG;
		?>
	</div>
</div>
