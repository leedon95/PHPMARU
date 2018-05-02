<?
  if(!isset($_SESSION))
  {
      session_start();
  }
?>
<html>
  <head><title>글작성</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../IMG/favicon2.ico">
    <link href="../importcss.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>

    <style>
      textarea{width:90%; height:300px; margin-bottom:30px; resize:none;}
    </style>
  </head>

  <script>
    function RP() { location.href="../main.php"; }
  </script>

<body>
<form method="post" action="write_insert.php"> <!-- write_insert.php로 값 전달 -->
  <div class="login_form">
    <p><h1 align='center'>글 작성</h1></p>
    <p>
      <? if(isset($_SESSION['usernick']))
    {
      echo "<h4>로그인 되었습니다 : ".$_SESSION['usernick']."</h4>";
    }
     else {
      echo "로그인하세요.";
    } ?>
  </p>
    <div class="row" style="margin-top:50px" align="center">
      <input type="text" name="write_subject" class="form-control" placeholder=" # 제목을 입력해주세요." style="width:90%; margin-bottom:15px;" required>
      <textarea name="write_text" placeholder=" # 여러분의 소중한 의견을 들려주세요."></textarea>
      <div class="col-md-4 col-sm-4">
    <?
      if(isset($_SESSION['usernick'])) // usernick이 있다면 (로그인 된 상태면)
      {
    ?>
      <input type="submit" name="submit" class="btn btn-primary btn-block" value="글 작성"> <!-- 글쓰기 출력 -->
    <?
      }
     else{
       echo "&nbsp;&nbsp;<font size='4'>로그인후 이용하세요.</font>"; /* 로그인하세요 */
     }
    ?>
    </div>
      <div class="col-md-4 col-sm-4">
        <input type="reset" name="ResetPage" class="btn btn-primary btn-block" value="다시쓰기(초기화)">
      </div>
      <div class="col-md-4 col-sm-4">
        <input type="button" name="returnPage" class="btn btn-primary btn-block" value="돌아가기" onclick="RP()">
      </div>
    </div>
  </div>
</div>
</body>

</html>
