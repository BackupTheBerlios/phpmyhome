<?
	include_once("include/rssReader_lib".$language.".inc.php");
?>
<script type="text/javascript">
function rssslashdot(query)
{
	document.getElementById('Iframe').src="http://www.google.fr/search?q="+query;
}
function searchgooglelinux(query)
{
	document.getElementById('Iframe').src="http://www.google.fr/linux?q="+query;
}
function searchfreshmeat(query)
{
	document.getElementById('Iframe').src="http://www.freshmeat.net/search/?q="+query;
}
</script>
<div class="mainPlugin" id="divEngines">
	<div class="titlePlugin" id="titleEngine">
		<?
			print libRSSREADER;
		?>
	</div>
		<ul>
			<li jsFrmOnClick("rssReaderFrm.php?feed=http://slashdot.org/index.rss")>Slashdot's feed</li>
			<li OnClick="javascript:searchgooglelinux(document.getElementById('query').value)">Google/Linux</li>
			<li OnClick="javascript:searchfreshmeat(document.getElementById('query').value)">Freshmeat</li>
		</ul>
</div>			