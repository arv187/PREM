<? if(!defined("CONFIG")) exit(); ?>
<? if(!isset($login)) { show_error("You do not have administrator rights\n"); return; } ?>
<?
$id = addslashes($_GET['id']);

$query = "SELECT * FROM team_driver WHERE id='$id'";
$result = mysql_query($query);

$item = mysql_fetch_array($result);

$tquery = "SELECT t.name FROM team_driver td JOIN team t ON (td.team = t.id) WHERE driver='$id'";
$tresult = mysql_query($tquery);
?>

<form action="team_driver_rem_do.php" method="post">
<table border="0">
<tr>
	<td>&nbsp;</td>
	<td>Are you sure that you want to delete this team for this driver?</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="submit" class="button submit" value="Yes">
		<input type="button" class="button cancel" value="No" onclick="history.go(-1);">
	</td>
</tr>
</table>
</form>