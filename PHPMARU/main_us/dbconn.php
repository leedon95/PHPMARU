<?
  $connect=mysqli_connect("localhost","root","autoset","test");
  if (mysqli_connect_errno($connect)){
    echo "DB connect Fail.<br><br>" . mysqli_connect_error();
  }
  mysqli_set_charset($connect,"utf8");
?>
