<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<?
  if(!isset($_SESSION))
  {
      session_start();
  }
?>
<?
  $usernick=($_SESSION['usernick']); // 초기화
  $subject = htmlspecialchars($_POST['write_subject']); //
  $content = htmlspecialchars($_POST['write_text']);
  /*echo $usernick;
  echo $subject;
  echo $content;*/
  if(empty($usernick))
  {
    echo("
    <script>
      window.alert('로그인후 이용해주세요.')
      history.go(-1)
    </script>");
    exit;
  }

  if(empty($subject))
  {
    echo("
    <script>
      window.alert('제목을 입력하세요.')
      history.go(-1)
    </script>");
    exit;
  }

  if(empty($content)){
    echo("
    <script>
      window.alert('내용을 입력하세요.')
      history.go(-1)
    </script>");
    exit;
  }

$regist_day=date("Y-m-d (H:i)"); // 현재 시간 삽입
include '../dbconn.php';

$mode="";
$html_ok="";
if($mode=="modify"){
  $sql="update greet set subject='$subject',content='$content'
  where num=$num";
}
else{
  if($html_ok=="y")
  {
    $is_html="y";
  }
  else{
    $is_html="";
  }

  $sql="insert into greet (nick,subject,content,regist_day,hit,is_html)"; //DB 연동
  $sql.="values('$usernick','$subject','$content','$regist_day',0,'$is_html')"; //DB 에 값 삽입

  mysqli_query($connect,$sql);
  mysqli_close($connect);

  echo("
  <script>
    location.href='community.php' /* 연동후 커뮤니티 페이지로 */
  </script>");
}
?>
</body>
</html>
