<script>
window.onload = function(){
    let btn = document.getElementById('btn');
    btn.addEventListener("click", mysubmit());
    function mysubmit(){
        var myform = document.getElementById('myform');
        var txt1 = document.getElementById('txt1');
        var txt2 = document.getElementById('txt2');

        if(txt1.vlaue != "" && txt2.vlaue != ""){
            myform.submit();
        }else{
            alert('입력해주세요!');
        }
    }
}
    
</script>

<form id=myform method=post action=process.php>
    <input id=txt1 type=text name=myname>
    <input id=txt2 type=text name=myage>
    <input type=button value="확인" onclick=mysubmit()>
</form>