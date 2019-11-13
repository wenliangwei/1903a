<?php  
// for($a=1; $a<=10; $a++) {
//     for($b=0; $b<=10; $b++) {
//         for($c=0; $c<=10; $c++) {
//             if(pow($a,3)+pow($b,3)+pow($c,3)==$a.$b.$c){
//             	echo $a.$b.$c,'<br>';
//             }
//         }
//     }
// }
// for($z=1;$z < 10; $z++) { 
// 		for ($x=0; $x <10 ; $x++) { 
// 			for ($c=0; $c <10 ; $c++) { 
// 				$q=$z*$z*$z;
// 				$w=$x*$x*$x;
// 				$e=$c*$c*$c;
// 				$r=$z*100+$x*10+$c;
// 				if ($q+$w+$e==$r) {
// 					echo $r."<br/>";
// 				}
// 			}
// 		}
// 	}
	for($a=1;$a<10;$a++){
		for($b=0;$b<10;$b++){
			for ($c=0; $c < 10; $c++) { 
				$aa = pow($a,3);
				$bb = pow($b,3);
				$cc = pow($c,3);
				$abc = $a*100+$b*10+$c;
				if($aa+$bb+$cc==$abc){
					echo $abc;
					echo "<br>";
				}
			}
		}
	}
?>
