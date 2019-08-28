<?php include("font_k.php");
for($fon=5;$fon>=1;$fon--)
{
	for($col=1;$col<=(5-$fon);$ccol++)
	{
	echo ("&nbsp;&nbsp;");
	}
	for($col=1;$col<=$fon;$col++)
	{
	echo (6-$fon);
	}
	for($col=2;$col<=$fon;$col++)
	{
	echo (6-$fon);
	}
	echo  "<br>";
}
?>