<?php
    if($_POST['myname']!="" && $_POST['myage']!=""){
        echo $_POST['myname'], '<BR>';
        echo $_POST['myage'], '<BR>';
    }else{
        echo "<script>";
        echo "alert('이름과 나이를 입력해주세요!')";
        echo "</script>";
    }
?>