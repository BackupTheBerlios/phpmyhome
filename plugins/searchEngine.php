<?
	include_once("include/searchEngine_lib".$language.".inc.php");
?>
<script type="text/javascript">
function searchgoogle(query)
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
			print libSEARCHENGINE;
		?>
		<input type="text" name="query" id="query" size="20" />
	</div>
		<ul>
			<li OnClick="javascript:searchgoogle(document.getElementById('query').value)">Google</li>
			<li OnClick="javascript:searchgooglelinux(document.getElementById('query').value)">Google/Linux</li>
			<li OnClick="javascript:searchfreshmeat(document.getElementById('query').value)">Freshmeat</li>
		</ul>
</div>	