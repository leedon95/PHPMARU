<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>회원가입</title>
  <script>
    function RP() { location.href="main.php"; }
  </script>
</head>
<body>
  <center>
    <?
      include 'dbconn.php';

      $id = htmlspecialchars($_POST['id']);
      $pass = htmlspecialchars($_POST['password']);
      $passcheck = htmlspecialchars($_POST['passwordcheck']);
      $nick = htmlspecialchars($_POST['nickname']);
      $email = htmlspecialchars($_POST['email']);

      ?>
        <p style="font-size:20px;">
      <?
      echo "아이디 :".$id."<br>";
      echo "비밀번호 :".$pass."<br>";
      echo "닉네임 :".$nick."<br>";
      echo "이메일 :".$email."<br>";
      ?>
          </p>
      <?

      $sql = "INSERT INTO marumember (id, pass, nick, email)
      VALUES ('$id','$pass','$nick','$email')";
      if($pass!=$passcheck){
        echo "<script>
                alert('비밀번호가 다릅니다');
                history.go(-1);
              </script>";
      }
      else {
        if ($connect->query($sql) === TRUE) {
            echo "회원가입이 정상적으로 처리되었습니다.";
        } else {
            echo "Error: 오류가 발생했습니다";
        }
      }

      $connect->close();
    ?>
     <input type="button" value="나가기" onclick="RP()">
 </center>
</body>
</html>
