<!doctype html>
<html>

  <head>
      <title>마루웨어</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../importcss.css" rel="stylesheet">
      <script src="../../js/jquery-3.3.7.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">  <!-- 구글 나눔고딕 -->
<!--  <link href="css/vg.css" rel="stylesheet"> 베가스 백그라운드 사용 X 추후 사용을 위해 링크만 남겨둠
      <link href="css/vegas.min.css" rel="stylesheet">   -->

      <style>
      /*body{background-color: #222222;} 바디 색깔 통일화 */
   body{
        margin:auto;
        background-image: url("../../IMG/cc.jpg"); /* 이미지 불러오기 */
        background-repeat:repeat;  /* 배경 반복 */
        background-size:100%;  /* 크기 화면에 맞게 */
       }
      </style>
  </head>

    <body  oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
    		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    			<div class="navbar-header">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    					<span class="sr-only">상단 네비게이션 태그</span>
    					<span class="icon-bar"></span>  <!-- 햄버거 -->
    					<span class="icon-bar"></span>  <!-- 햄버거 -->
    					<span class="icon-bar"></span>  <!-- 햄버거 -->
    				</button>
    				<a href="../../index.php" class="navbar-brand easysLogo">MARUWARE</a> <!-- 인덱스 페이지 -->
    			</div>

    			<div class="collapse navbar-collapse navbar-ex1-collapse">
    				<ul class="nav navbar-nav">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select Language <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../main_us/main.php">영어</a></li>
                  <li><a href="main.php">한국어</a></li>
                </ul>
    					</li>
    					<? if(empty($_SESSION['usernick'])) {
                echo "<li><a href='../Login.php'>로그인</a></li>"; // 로그인 되어있으면 닉네임 출력 or 로그인 아닐시 로그인 출력
              } else {
                echo "<li><a>환영합니다 ".($_SESSION['usernick'])." 님</a></li>";
              }?>
              <? if(empty($_SESSION['usernick'])) {
                echo "<li><a href='../SignUp.php'>회원가입</a></li>"; // 로그인 되어있으면 로그아웃 출력 or 로그인 아닐시 회원가입 출력
              } else {
                echo "<li><a href='../logout.php'>로그아웃</a></li>";
              }?>
              <? if(empty($_SESSION['usernick'])) {
                echo "<li><a href='../findid.php'>아이디 비밀번호 찾기</a></li>";  // 로그인 아닐시 아이디 비번 찾기
              }?>
              <!--html 태그 <li><a href="Login.php">로그인</a></li>
    					<li><a href="SignUp.php">회원가입</a></li>
              <li><a href="#">아이디 비밀번호 찾기</a></li>-->
    				</ul>

  				  <ul class="nav nav-bar navbar-right" style="margin-top:5px; margin-right:10px;">
              <li><a href="#">후원하기</a></li>
    				</ul>
    			</div>
    		</nav>

    <div class="container" style="margin-top:50px;">  <!-- container 시작-->

    <div class="row">
      <header style="margin-top:30px;">  <!-- header: 메인 타이틀 이미지입니다. -->
        <div class="col-md-2">
          <a href="../main.php"><img src="../../IMG/MAUR-TITLE.png"></a> <!-- 메인 타이틀 이미지 -->
        </div>
      </header>
    </div> <!-- 헤더 끝 -->

    <nav style="margin-top:30px;"> <!-- nav : 상단 메뉴입니다. -->
      <div class="row" align="center">
        <div class="col-md-3 col-sm-6">
            <a href="../Introduce.php" class="ghost-buttonNav">소개</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="../notice.php" class="ghost-buttonNav">공지사항</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="community.php" class="ghost-buttonNav">커뮤니티</a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="../DownLoadsolution.php" class="ghost-buttonNav">다운로드</a>
        </div>
      </div></div> <!-- row container -->
    </nav> <!-- 메뉴 끝 -->
</body>
</html>
