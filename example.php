<script>
	function myfunction1(){
		document.getElementById('result').value ="버튼1 눌러짐";
	}
	function myfunction2(){
		document.getElementById('result').value ="버튼2 눌러짐";
	}
</script>
<input id=result type=text value=값>
<input type=button value="버튼1 눌러주세요!" onclick=myfunction1()>
<input type=button value="버튼2 눌러주세요!" onclick=myfunction2()>