<html>
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
?>
  <head><title>MARUWARE 회원가입</title>
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
<form class="SignUp_form" method="post" action="SignUp_receive.php">
    <center><img src="../IMG/MARUWARE_SignUp.png" style="width:50%"></center> <!-- 이미지 버전 -->
    <!-- <p><h1 align='center'>MARUWARE SignUp</h1></p> 텍스트버전 (주석 해제시 사용 가능)-->
    <div class="row" style="margin-top:50px">
        <div class="form-group col-md-12 col-sm-12">
          <input type="text" name="id" class="form-control" placeholder="* 아이디" maxlength="12" required>
        </div>
        <div class="form-group col-md-12 col-sm-12">
          <input type="password" name="password" class="form-control" placeholder="* 비밀번호" maxlength="15" required>
        </div>
        <div class="form-group col-md-12 col-sm-12">
          <input type="password" name="passwordcheck" class="form-control" placeholder="* 비밀번호 확인" maxlength="15" required>
        </div>
        <div class="form-group col-md-12 col-sm-12">
          <input type="text" name="nickname" class="form-control" placeholder="* 닉네임" maxlength="15" required>
        </div>
        <div class="form-group col-md-12 col-sm-12">
          <input type="Email" name="email" class="form-control"  maxlength="80" placeholder="* 이메일 주소">
        </div>
        <div class="form-group col-md-4 col-sm-4">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="회원가입" onclick="checkps()">
        </div>
        <div class="form-group col-md-4 col-sm-4">
          <input type="reset" name="reset" class="btn btn-primary btn-block" value="다시작성">
        </div>
        <div class="form-group col-md-4 col-sm-4">
          <input type="button" name="returnPage" class="btn btn-primary btn-block" value="돌아가기" onclick="RP()">
        </div>
    </div>
</form>
</body>
</html>
