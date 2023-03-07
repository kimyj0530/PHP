여기는 html로 해석됨<br>

<?php
	$num = [1, 2, 3, 4];
	
	echo count($num), "<br>";
	$cnt = count($num);

	for($i=0; $i<4; $i++){
		echo $num[$i];
		echo "<br>";
	}
?>