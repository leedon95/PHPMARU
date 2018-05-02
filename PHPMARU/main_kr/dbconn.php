<?
  $connect=mysqli_connect("localhost","root","autoset","test");
  if (mysqli_connect_errno($connect)){
    echo "데이터베이스 연결에 실패했습니다. 관리자에게 문의 하시기 바랍니다.<br><br>" . mysqli_connect_error();
  }
  mysqli_set_charset($connect,"utf8");
?>
