<?
  if(!isset($_SESSION))
  {
      session_start();
  }
?>
<html>
  <head><title>아이디 비밀번호 찾기</title>
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
<form method="post" action="findDB.php">
  <div class="login_form">
    <center><img src="../IMG/FINDIDORPASS.png" style="width:80%"></center> <!-- 이미지 버전 -->
    <hr>
    <font size="5">ID 찾기</font>
    <div class="row" style="margin-top:10px">
        <div class="form-group col-md-8 col-sm-8">
          <input type="email" name="id" class="form-control" placeholder="이메일을 입력하세요." required>
        </div>
        <div class="form-group col-md-4 col-sm-4">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="아이디찾기">
        </div>
    </div>
    <hr>
      <font size="5">PS 찾기</font>
    <div class="row" style="margin-top:10px">
      <div class="form-group col-md-4 col-sm-6">
        <input type="email" name="id" class="form-control" placeholder="아이디를 입력하세요." required>
      </div>
        <div class="form-group col-md-4 col-sm-6">
          <input type="email" name="id" class="form-control" placeholder="이메일을 입력하세요." required>
        </div>
        <div class="form-group col-md-2 col-sm-6">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="비밀번호찾기">
        </div>
        <div class="form-group col-md-2 col-sm-6">
          <input type="button" name="returnPage" class="btn btn-primary btn-block" value="돌아가기" onclick="RP()">
        </div>
    </div>
  </div>
</div>
</body>

</html>
