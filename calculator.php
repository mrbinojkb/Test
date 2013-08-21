<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CI Calulator</title>
<link href="css/default.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="layout">
<form method="post" action="" name="frm">
<input type="text" name="p" placeholder="Principle Amount" value="<?php echo $_REQUEST['p']; ?>" /><br />
<input type="text" name="i" placeholder="Interest"  value="<?php echo $_REQUEST['i']; ?>" /><br />
<input type="text" name="d" placeholder="Duration"  value="<?php echo $_REQUEST['d']; ?>" /><br />
<input type="submit" name="doCalculate" value="Calculate" />

<div class="result">
<?php
if(isset($_REQUEST['doCalculate']))
{
	$p = $_REQUEST['p'];
	$i = $_REQUEST['i'];
	$d = $_REQUEST['d'];
	
	$tempP = $p;
	for($c=1;$c<=$d;$c++)
	{
		//echo 10000*5% = 10500;
		$int = $tempP*$i/100;
		echo "$tempP * $i % = ".($tempP+$int)."<br />";		
		$tempP	= $tempP+$int;
	}
}
?>
</div>
</form>
</div>
</body>
</html>
