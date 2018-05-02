<?
if(!isset($_SESSION)) /* 세션 시작*/
{
    session_start();
}

  include "../dbconn.php";

  $page = $_GET['num'];
  $num = (int)$page;

  if($_SESSION['usernick']==$_SESSION['nickcheck']) // 만약 글쓴이와 지우려는이의 아이디가 같다면
  {
    $sql="delete from greet where num=$num"; //삭제 쿼리문
    mysqli_query($connect,$sql);
    mysqli_close($connect);

    echo("
    <script>
      alert('삭제되었습니다.');
      location.href='community.php'
    </script>"
    );
  }
  else{
    echo("
    <script>
      alert('당신의 글이 아닙니다.');
      location.href='community.php'
    </script>"
    );
  }

?>
