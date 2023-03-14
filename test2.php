<script>
	var num1=10;
	var num2='20';

	var num3 = [1,2,3,4,5];

	num3.push(6);

	var num4 = {
		a:10,
		b:20,
		c:30
	};

	console.log(num4);
	console.log(num4['a']);
	console.log(JSON.stringify(num4));
</script>
<?php
	$num1 = 10;
	$num2 = '20';

	echo $num1+$num2;

	$num3 = [1,2,3,4,5];
	$num4 = ['name'=>'kim', 'age'=>20];
	
	echo $num4['name'];
	echo "<br>";
	
	echo myfunction(20,20);

	function myfunction($num1, $num2){
		return $num1+$num2;
	}
?>