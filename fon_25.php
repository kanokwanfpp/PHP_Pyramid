<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++) {
	for($col=1;$col<=5-$fon;$col++) {
		echo ("*");	
	}
	
	for($col=1;$col<=$fon;$col++){
		echo (6-$fon);
	}
	for($col=2;$col<=$fon;$col++){
		echo (6-$fon);
	}
	for($col=0;$col<=5-$fon;$col++) {
		echo ("*");	
	}
	echo "<br>";
}
?>