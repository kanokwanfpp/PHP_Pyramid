<?php include("font_k.php");
for($fon=1;$fon<=5;$fon++){
    echo ("*");
    for($col=1;$col<$fon;$col++){
        echo ("&nbsp;&nbsp;");
            }
    for($col=$fon;$col<=5*2-$fon;$col++){
        echo ($fon);
            }
    for($col=$fon;$col>1;$col--){
        echo ("&nbsp;&nbsp;");
              
            }
         echo ("*");
        echo "<br>";
        }
?>