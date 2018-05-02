<!doctype html>
<html>
  <head><title>커뮤니티</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../IMG/favicon.ico">
    <link href="../importcss.css" rel="stylesheet">
    <script src="../../js/jquery-3.3.7.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <style>
      article {
        margin:20px 0 20px 0;
        width: auto;
        height: auto;
        padding:10px 10px 10px 10px;
        background-color:#fff;
        border:1px solid #e5e5e5;
        box-shadow: rgba(200,200,200,.7) 0 5px 10px 2px;}

        .selectbox{
          width:80px; /*넓이*/
          height:34px;
          padding:6px 12px;
          font-size:16px;
          color:#555;
          border:1px solid #ccc;
          border-radius:4px;
          box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
          -webkit-box-shadow ease-in-out .15s;
          -o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
          transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}

        .searchbox{
          width:50%; /*넓이*/
          height:34px;
          padding:6px 12px;
          font-size:14px;
          color:#555;
          border:1px solid #ccc;
          border-radius:4px;
          box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
          -webkit-box-shadow ease-in-out .15s;
          -o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
          transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}

        .searchbox:focus{border-color:#66afe9;outline:0; /* 마우스 올렸을시 나오는 효과 */
          -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
          box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}
    </style>
  </head>
  <body>
    <?
      include 'header_board.php'; // 헤더 불러오기

      if(!isset($_SESSION)) /* 세션 시작*/
      {
          session_start();
      }

      include '../dbconn.php'; //DB 연동

      $scale=10;  // 한 화면에 표시되는 글의 갯수

      $mode=""; //오류 방지를 위한 초기화

      if($mode=="search") //검색모드
      {
        $sql="select * from greet where $find like '%$search%' order by num desc";
      } //if 끝
      else {
        $sql="select * from greet order by num desc";
      } //else 끝

      $result=mysqli_query($connect,$sql); // 쿼리문 실행

      $total_record=mysqli_num_rows($result); //한 화면에 표시가되는 전체 글의 갯수입니다.

      /* 전체 페이지수 계산($total_page) */

      if($total_record % $scale==0)
        $total_page=floor($total_record/$scale);  //전체 글에서 10개씩 나눔. (10개씩 출력)
      else {
        $total_page=floor($total_record/$scale) + 1;
      }

      if(empty($page)) //페이지가 비었을시
      $page=1;

      //페이지 번호에 따른 시작 레코드값 확인
      $start=($page -1) * $scale;
      $number=$total_record-$start;

    ?>

    <form name="board_form" method="post" action="findlist.php">

    <div class="container"> <!-- container -->

        <article>

        <div id="list_search">
          <div class="row" style="margin-bottom:20px;">
            <div class="col-md-6 col-sm-6">
              <font size="4">&nbsp;총 <?= $total_record ?>개의 게시물이 있습니다.</font> <!--게시글 갯수 -->
                  <?
                  if(isset($_SESSION['usernick'])) // usernick이 있다면 (로그인 된 상태면)
                  {
                ?>
                  &nbsp;&nbsp;<a href="write_form.php"><input type="button" value="글쓰기" class="btn btn-default"></a> <!-- 글쓰기 출력 -->
                <?
                  }
                  else{
                    echo "&nbsp;&nbsp;<font size='4'>글쓰기는 로그인후 이용하세요.</font>"; /* 로그인하세요 */
                  }
                ?>
            </div>
            <div class="col-md-6 col-sm-6" align="right"> <!-- 검색 div -->
              <select name="find" class="selectbox">
                <option value='subject'>제목</option>
                <option value='content'>내용</option>
                <option value='nick'>닉네임</option>
              </select>
              <input type="text" class="searchbox" name="searchbox">
              <input type="submit" value="검색" class="btn btn-default">
            </div>   <!-- 검색 div 종료 -->
          </div>  <!-- row 종료 -->
        </form>

    <table border="1" class="table table-bordered" style="margin-bottom:0px;">  <!-- 상단 -->
      <tr>
        <td width="50px" align="center">번호</td>
        <td width="400px">제목</td>
        <td width="150px">글쓴이</td>
        <td width="100px">등록일</td>
        <td width="50px" align="center">조회</td>
      </tr>
    </table> <!-- 리스트 끝 -->

    <div id="list_content">
      <? //글 출력 목록
        for($i=$start; $i<$start+$scale && $i<$total_record; $i++)
        {
          // 가져올 레코드로 위치 이동
          mysqli_data_seek($result,$i);

          //하나의 레코드 가져오기
          $row = mysqli_fetch_array($result);

          $item_num=$row['num'];
          $item_nick=$row['nick'];
          $item_hit=$row['hit'];
          $item_date=$row['regist_day'];
          $item_date=substr($item_date,0,10);
          $item_subject=str_replace("","&nbsp;",$row['subject']);

          /*$_SESSION['num']=$row['num'];*/
          ?>

      <table class="table table-hover">
        <tr>
          <td width="50px" align="center">
            <div id="list_item1"><?= $number ?></div>
          </td>
          <td width="400px">
             <a href="view.php?num=<?=$item_num?>&nbsp;&page=<?=$page?>"><?=$item_subject?></a>
          </td>
          <td width="150px">
            <?= $item_nick ?>
          </td>
          <td width="100px">
            <?= $item_date ?>
          </td>
          <td width="50px" align="center">
            <?= $item_hit ?> <!-- 아이템 리스트 끝 -->
          </td>
        </tr>
      </table>

    <?
      $number--;
    } //for 끝
    ?>

    <center>
      <div id="page_button">
      <div id="page_num"> < 이전 &nbsp;&nbsp;&nbsp;&nbsp;
    <?
    //게시판 목록 하단에 페이지 번호 출력 (페이지링크)
    for($i=1; $i<=$total_page; $i++){
      if($page==$i){ //현재페이지 번호 링크 안함
        echo "<b>$i</b>";
      }
      else{
        echo"<a href='Community.php?page=$i'> $i </a>";
      }
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;다음 >
  </div> <!-- page_num 끝 -->
</center>
</div> <!-- page_button 끝 -->
</div> <!-- list_content 끝 -->
</div> <!-- list_content 끝 -->
        </article>

    </div> <!-- container -->
    <?
      include '../footer.php';
    ?>
  </body>
</html>
