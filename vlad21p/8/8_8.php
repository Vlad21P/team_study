<!DOCTYPE html>
<html>
<head>
	<title>checkbox</title>
</head>
<body>
	<?php if(!isset($_REQUEST['doGo'])) { 
		foreach ($_REQUEST['known'] as $k => $v) {
			if($v) echo "you know $v language";
			else echo "you don't know $v language";
		}
	}
	?>
	<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
		What prog-languages do you know?<br/>
		<input type="hidden" name="known[PHP]" value="0">
		<input type="checkbox" name="known[PHP]" value="1">PHP<br/>
		<input type="hidden" name="known[Perl]" value="0">
		<input type="checkbox" name="known[Perl]" value="1">Perl<br/>
		<input type="submit" name="doGo" value="Go!">
	</form>
</body>
</html>