<html>

<head>
  <title>마루웨어 소개</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../IMG/favicon.ico">
  <link href="importcss.css" rel="stylesheet">
  <script src="../js/bootstrap.min.js"></script>

  <style> /* 코드 간결화를 위해 일부로 한줄 코딩 */
  /*  body{margin:auto; background-image: url("../IMG/bg.jpg"); background-repeat:no-repeat;}*/
  article {margin:auto;
    padding:10px 10px 10px 10px;
    background-color:#fff;
    border:1px solid #e5e5e5;
    font-family: 'Nanum Gothic', sans-serif;
    box-shadow: rgba(200,200,200,.7) 0 5px 10px 2px;} /* article 태그 효과 */

  .article1 {
    margin:auto;
    padding:10px 10px 10px 10px;
    transition-duration:1s;
    background-color:#ebebeb;
    border:2px solid #eee;
    font-family: 'Nanum Gothic', sans-serif;
    box-shadow: rgba(102,255,191,.7) 0 5px 10px 2px;}
  .article1:hover{
    transition-duration:1s;
    background-color:#fff;
    border:2px solid #555;
    font-family: 'Nanum Gothic', sans-serif;
    box-shadow: rgba(102,255,191,.7) 0 5px 15px 2px;}

  .img1 {width: 100%;
        height: 100%;
     border:2px solid #000;
     box-shadow: rgba(15,15,15,.7) 0 5px 10px 2px;} /* 이미지 사이즈 자동 조절 */

  .pre1 {height: 100%;}

  /*반응형 폰트1 (헤더) */

  @media screen and (max-width: 1920px) {
    .preinfont1{ font-size: 40px; text-align: center;}}

  @media screen and (max-width: 1200px) {
    .preinfont1{ font-size: 26px; text-align: center;}}

  @media screen and (max-width: 800px) {
    .preinfont1{ font-size: 20px; text-align: center;}}

  @media screen and (max-width: 600px) {
    .preinfont1{ font-size: 18px; text-align: center;}}

  /*반응형 폰트2 (바디) */

  @media screen and (max-width: 1920px) {
    .preinfont2{font-size:20px;}}

  @media screen and (max-width: 1200px) {
    .preinfont2{font-size:18px;}}

  @media screen and (max-width: 800px) {
    .preinfont2{font-size:16px;}}

  @media screen and (max-width: 600px) {
    .preinfont2{font-size:14px;}}


  </style>

  <script>
  function RP() { location.href="../main.php"; }
  </script>

</head>

<body>

<?
  include 'header.php'; // 헤더 호출.
?>
  <div class="container"><!-- container -->
    <div class="row">

  <div class="col-md-12 col-sm-12" style="margin-top:20px;">
    <table>
      <tr>
        <td>
      <img src="../img/MARUWARE3.png" class="img1">
    </td>
    <td class="pre1">
<pre class="pre1">
<p class="preinfont1">MARUWARE</p>
<p class="preinfont2" style="margin-top:-30px;">
ㆍ2018년 3월 스터디 결정.
ㆍ2018년 4월 9일 프로젝트 창설.
ㆍ2018년 4월 26일 Node.Js를
  응용한 스터디 시작 & 환경 구성.
ㆍ2018년 4월 28일 PHP를 사용한
  마루웨어 홈페이지 완성.
ㆍ현재 이더리움을 이용한
  블록체인 플랫폼 개발 예정
ㆍ2018년 8월 프로젝트 완성.
</p>
</pre>
    </td>
  </tr>
</table>
</div>

<div class="col-md-12 col-sm-12" style="margin-top:20px;">
  <article>
    <font size="6">마루웨어는</font>
      <br>
    <font size="4">
      2018년 4월 9일에 설립한 스타트업으로서, 구성원은 (대표) 이상민, 이돈희로 이루어져있습니다.<br>
      마루웨어의 마루는‘하늘’이라는 순 우리말이고, 웨어는 소프트웨어의 끝부분을 가져옴으로서
      많은 사람들이 널리 이용할 수 있는 소프트웨어라는 뜻을 담고 있습니다.
    </font>
  </article>
</div>

<div class="col-md-4 col-sm-4" style="margin-top:20px; margin-bottom:20px">
  <div class="article1">
    <center>
      <font size="6">Node.js</font>
      </center>
      <br>
    <font size="4">
      현재 블록체인 솔루션 구축을 위한 서버개발을 작업하고있습니다.<br>
      이더리움 솔루션을 이용한 플랫폼 스터디가 예정중에 있으며,<br>
      블록체인 솔루션에 관한 기술 이론공부를 현재 진행중입니다.
   </font>
</div>
</div>

<div class="col-md-4 col-sm-4" style="margin-top:20px; margin-bottom:20px">
  <div class="article1">
    <center>
      <font size="6">PHP</font>
      </center>
      <br>
    <font size="4">
      본 사이트는 LAMP (Linux & Apache & Mysql & PHP)로 구성되었습니다.<br>
      PHP를 기반으로 구축되었으며, 향후 Node.Js로 이식 할 예정입니다.<br>
      (블록체인 솔루션과의 연동을 위해)<br>
      기본적으로 한글페이지와 영문페이지를 제공하고 있습니다.
   </font>
</div>
</div>

<div class="col-md-4 col-sm-4" style="margin-top:20px; margin-bottom:20px">
  <div class="article1">
    <center>
      <font size="6">Laravel</font>
    </center>
    <br>
    <font size="4">
      개인의 발전을 위해 Laravel을 학습하고 있습니다. <br>
      본 사이트 역시 Node.Js 뿐 아니라 Laravel을 기반으로 이식할 예정입니다.<br>
      Laravel은 PHP보다 안정성이 뛰어나기 때문에 보안적인 측면에서 더 유리하고
      사용자 입장에서도 사용하기 좋습니다.
    </font>
  </div>
</div>

</div> </div> <!-- row , container -->
<?
  include 'footer.php';
?>
</body>

</html>
