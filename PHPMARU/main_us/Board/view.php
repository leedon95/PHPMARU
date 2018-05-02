<?
  if(!isset($_SESSION)) /* 세션 시작*/
  {
      session_start();
  }

  include 'header_board.php';
  include '../dbconn.php';

  $page = $_GET['num'];
  $num = (int)$page; //오류방지를 위한 초기화
  $content = ""; //오류방지를 위한 초기화
  $item_id = ""; //오류방지를 위한 초기화
  $user_id = ""; //오류방지를 위한 초기화

  $sql = "select * from greet where num = $num";
  $result = mysqli_query($connect,$sql);

  //echo $sql; // sql문 출력

  //하나의 레코드 가져오기
  $row = mysqli_fetch_array($result);

  $item_num = $row['num'];
  $item_nick = $row['nick'];
  $item_hit = $row['hit'];
  $item_date = $row['regist_day'];
  $item_date = substr($item_date,0,10);
  $item_subject = str_replace("","&nbsp;",$row['subject']);
  $item_content = $row['content'];

  if($content!='y')
  {
    $item_content = str_replace("","&npsp;",$item_content);
    $item_content = str_replace("\n","<br>",$item_content);
  }

  //글 조회수 증가
  $new_hit=$item_hit + 1;
  $sql="update greet set hit = $new_hit where num = $num";
  mysqli_query($connect,$sql);

  $_SESSION['nickcheck'] = $item_nick; // 게시글 삭제시 이용됩니다.
?>
<!doctype html>
<html>
  <head>
    <title>게시글 확인하기</title>
    <meta charset="utf-8">
    <style>
      article {
        margin:20px 0 20px 0;
        height: auto;
        padding:10px 10px 10px 10px;
        background-color:#fff;
        border:1px solid #e5e5e5;
        box-shadow: rgba(200,200,200,.7) 0 5px 10px 2px;}

      .title{
        margin: 10px 0 10px 0;
        text-align: center;

        }
      .contentbox{
        padding: 20px 10px 20px 10px;
        margin-bottom: 20px;
        width:100%;
        border:1px solid #cccccc;
        background-color: #ffffff;
        height: 600px;
        }

      @media screen and (max-width: 1920px) {
        .topfont{font-size:23px;}}

      @media screen and (max-width: 1200px) {
        .topfont{font-size:19px;}}

      @media screen and (max-width: 800px) {
        .topfont{font-size:16px;}}

      @media screen and (max-width: 1920px) {
        .topfont2{font-size:18px;}}

      @media screen and (max-width: 1200px) {
        .topfont2{font-size:16px;}}

      @media screen and (max-width: 800px) {
        .topfont2{font-size:13px;}}

      .tablebox{width:100%;
        border:1px solid #cccccc;
        background-color: #efefef;
        height:40px;}
    </style>

  <script>
    function del(href){
      if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?"))
      {
        document.location.href=href;
      }
    }
    </script> <!-- 스크립트 종료 -->
  </head> <!-- 헤드 종료 -->

  <body>
    <div class="container"> <!-- container -->
        <article>
        <div class="title"><p style="font-size:40px; font-weight:bold;">게시판</p></div> <!-- 상단 게시판 -->

          <table class="tablebox"> <!-- 게시판 정보 -->
            <tr>
              <td class="topfont" style="width:45%; padding-left:10px;"><?=$item_subject?></td>
              <td class="topfont" style="width:30%; padding-left:10px;">글쓴이 : <?=$item_nick?></td>
              <td class="topfont2" style="width:15%; text-align:center;">조회 : <?=$item_hit?></td>
              <td class="topfont2" style="width:10%; text-align:center;"><?=$item_date?></td>
            </tr>
          </table>

        <div class="contentbox"> <!-- 글 내용이 포함되는 공간입니다!-->
          <?=$item_content?>
        </div>

          <div class="row">
            <div class="col-md-4 col-sm-4">
              <a href="Community.php?page=<?=$page?>"><input type="button" value="목록" class="btn btn-default btn-block"></a><br>
            </div>
          <?
            if($user_id==$item_id or $userid=="admin")
            {
          ?>
            <?
              if(isset($_SESSION['usernick'])) // usernick이 있다면 (로그인 된 상태면)
              {
            ?>
            <div class="col-md-4 col-sm-4">
              <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>"><input type="button" value="수정" class="btn btn-default btn-block"></a><br> <!-- 글수정 출력 -->
            </div>
            <div class="col-md-4 col-sm-4">
              <a href="javascript:del('delete.php?num=<?=$num?>')"><input type="button" value="삭제" class="btn btn-default btn-block"></a> <!-- 글삭제 출력 -->
            </div>
            <?
              }
              else{
                echo "&nbsp;&nbsp;<font size='4'>글 수정/삭제는 로그인 후 이용이 가능합니다.</font>"; /* 로그인하세요 */
              }
            }
          ?>
        </div>  <!--row 끝 -->
      </article>
    </div> <!-- container row -->
  <?
    include '../footer.php';
  ?>
  </body>
</html>
