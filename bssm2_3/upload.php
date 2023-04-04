<?php
   date_default_timezone_set('Asia/Seoul');
   $did = $_GET['did'];
   $temp = $_GET['temp'];
   $humi = $_GET['humi'];
   $date = date("Y-m-d H:i:s",time());

   //MYSQL연결한다
     $conn = mysqli_connect('localhost', 'root', '','bssm2_3');
    $query = "SELECT * from device;";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
      echo "<option value='".$row['did']."'>".$row['did']."</option>";
    }
   //$did가 device table에 있냐없냐
   $query2 = "select * from device where did='".$did."'";
   $result2 = mysqli_query($conn, $query2);
   $count = mysqli_num_rows($result2);

   if($count == 1){
     //device에 did가 검색이되었음!

   }else{
     //존재하지 않는 did임!
     echo "등록되지 않은 디바이스 아이디입니다!";
     exit;
   }

    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into sensor(did,temp,humi,date) values('".$did."',".$temp.",".$humi.",'".$date."');";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>