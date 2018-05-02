<?
include 'dbconn.php';

$id = htmlspecialchars($_POST['id']);
$password = htmlspecialchars($_POST['password']);

$sql = "select * from marumember where id='$id'"; /* sql 삽입문 */
$result = mysqli_query($connect,$sql); /* result에 저장 */
$id_match = mysqli_num_rows($result); /* 행 검사 */

if(empty($id_match)){
  echo("
  <script>
    window.alert('아이디가 없습니다.')
    history.go(-1)
  </script>");
}
else{
  $row = mysqli_fetch_array($result);
  $db_pass=$row['pass'];

  if($password!=$db_pass){

    echo "<center><table border='1' style='width:400px; height:200px; margin-top:100px'><tr><td align='center'>";
    echo "<text size='10'>비밀번호가 다릅니다.</text>";
    echo "</td></tr></table></center>";

    echo("
    <script>
      window.alert('비밀번호가 다릅니다.')
      history.go(-1)
    </script>
    ");
    exit;
  }
  else{

    echo "<center><table border='1' style='width:400px; height:200px; margin-top:100px'><tr><td align='center'>";
    echo "<text size='10'>Your ID :".$id."</text>";
    echo "</td></tr></table></center>";

    $userid = $row['id'];
    $usernick = $row['nick'];

    $_SESSION['userid']=$userid;
    $_SESSION['usernick']=$usernick;

    echo("
      <script>
        location.href='main.php';
      </script>
    ");
  }
}
?>
