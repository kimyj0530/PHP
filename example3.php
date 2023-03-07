주소 양식
<br>
http://localhost/example3.php?age=20&name=녹칸다
<br>
<?php
	if(isset($_GET['name'])){
		echo $_GET['name'];
		echo "<br>";
	}
	else{
		echo "name이 존재하지 않습니다! <br>";
	}
	if(isset($_GET['age'])){
		echo $_GET['age'];
	}
	else{
		echo "age가 존재하지 않습니다! <br>";
	}
?>