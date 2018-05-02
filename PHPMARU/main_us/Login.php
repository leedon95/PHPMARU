<?
  if(!isset($_SESSION))
  {
      session_start();
  }
?>
<html>
  <head><title>로그인</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../IMG/favicon2.ico">
    <link href="importcss.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
  </head>

  <script>
    function RP() { location.href="main.php"; }
  </script>

<body>
<form method="post" action="login_ok.php">
  <div class="login_form">
    <center><img src="../IMG/MARUWARE_LoginForm.png" style="width:50%"></center> <!-- 이미지 버전 -->
    <!-- <p><h1 align='center'>MARUWARE Login</h1></p> 텍스트 버전 (주석 해제시 사용 가능) -->
    <div class="row" style="margin-top:50px">
        <div class="form-group col-md-4 col-sm-6">
          <input type="text" name="id" class="form-control" placeholder="아이디" required>
        </div>
        <div class="form-group col-md-4 col-sm-6">
          <input type="password" name="password" class="form-control" placeholder="비밀번호" required>
        </div>
        <div class="form-group col-md-2 col-sm-12">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="로그인">
        </div>
        <div class="form-group col-md-2 col-sm-12">
          <input type="button" name="returnPage" class="btn btn-primary btn-block" value="돌아가기" onclick="RP()">
        </div>
    </div>
  </div>
</div>
</body>

</html>
