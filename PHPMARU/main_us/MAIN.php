<!doctype html>
<html>

  <head>
      <title>마루웨어</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="../IMG/favicon.ico">
      <script src="../js/bootstrap.min.js"></script>

<!--  <link href="css/vg.css" rel="stylesheet"> 베가스 백그라운드 사용 X 추후 사용을 위해 링크만 남겨둠
      <link href="css/vegas.min.css" rel="stylesheet">   -->

      <style> /* 코드 간결화를 위해 일부로 한줄 코딩 */
      .textbox1{width:100%; height:100%; border:2px solid #fffeee; color:#fff;}
      .textbox2{width:40%; height:100%; border:2px solid #fffeee; color:#fff;}
      </style>

      <script language=JavaScript>

      </script>

  </head>

  <body>

  <?
    include 'header.php'; /* 헤더 불러오기 */
  ?>

  <?
    if(!isset($_SESSION)) /* 세션 시작*/
    {
        session_start();
    }

    /* 세션 확인용 (로그인 확인용)
    echo ($_SESSION['userid'])."&nbsp;&nbsp;";
    echo ($_SESSION['usernick']);
    */
  ?>
  <div class="container">

  <section style="margin-top:20px;">
      <div class="row" align="center">
        <div class="col-md-12">
          <?
            include '../slide/slider.php';
          ?>
        </div>
      </div>
  </section> <!-- section 끝-->

    <div class="textbox1" style="margin-top:20px; margin-bottom:50px;">
      <div class="row">
        <div class="col-md-3" align="center">
          <img src="../img/coding3.png" width="170px" height="190px" style="margin:20px 0 20px 0">
        </div>
        <div class="col-md-6" style="margin:10 0 0 10px;">
          <p>
          <font size="4"><Center>
            人心濟泰山利 (인심제 태산이)<br>
            '사람이 마음을 하나로 모으면 태산도 움직일 수 있고,'<br>
            逢山開道 (봉산개도)<br>
            '가는 길에 산을 만나면 길을 만들고.'<br>
            遇水架橋 (우수가교)<br>
            '물을 만나면 다리를 놓겠습니다.'<br><br>
            마루웨어는 저희 두 사람이 택한 길입니다.<br>
            블록체인계의 <b>"고인물"</b>이 되겠습니다.<br>
          </font></p><center>
        </div>
        <div class="col-md-3" align="center">
          <img src="../img/coding2.png" width="170px" height="190px" style="margin:20px 0 20px 0">
        </div>
      </div>
    </div>

  </div> <!-- container -->

<?
  include 'footer.php';
?>

</body>
</html>
