<?
  if(!isset($_SESSION)) /* 세션 시작*/
  {
      session_start();
  }

  include '../dbconn.php';

  $num=0; //오류방지를 위한 초기화
  $is_html=""; //오류방지를 위한 초기화
  $item_id=""; //오류방지를 위한 초기화
  $user_id=""; //오류방지를 위한 초기화

  $sql = "select * from greet where num=$num";
  $result = mysqli_query($connect,$sql);

  //하나의 레코드 가져오기
  $row = mysqli_fetch_array($result);

  $item_num = $row['num'];
  $item_nick = $row['nick'];
  $item_hit = $row['hit'];
  $item_date = $row['regist_day'];
  $item_date = substr($item_date,0,10);
  $item_subject = str_replace("","&nbsp;",$row['subject']);
  $item_content = $row['is_html'];

  if($is_html!='y')
  {
    $item_content = str_replace("","&npsp;",$item_content);
    $item_content = str_replace("\n","<br>",$item_content);
  }

  //글 조회수 증가
  $new_hit=$item_hit + 1;
  $sql="update greet set hit = $new_hit where num = $num";
  mysqli_query($connect,$sql);
?>
<!doctype html>
<html>
  <head>
    <title>게시글 확인하기</title>
    <meta charset="utf-8">
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
    <div id="wrap">

    <div id="content">
      <div id="col">
        <div id="title">
          가입인사
        </div> <!-- 가입인사 종료 -->

        <div id="view_comment"> &nbsp; </div> <!-- 왜있는지 모름 삭제 요망 -->
        <div id="view_title">
          <div id="view_title1"><?=$item_subject?></div> <!-- view_title1 종료 -->
          <div id="view_title2"><?=$item_nick?>|조회:<?=$item_hit?>|<?=$item_date?>
          </div> <!-- view_title2 종료 -->
        </div> <!-- view_title 종료 -->

        <div id="view_content">
          <?=$item_content?>
        </div>

        <div id="view_button">
          <a href="Community.php?page=<?=$page?>">목록</a>
          <?
            if($user_id==$item_id or $userid=="admin")
            {
          ?>
            <a href="modify_form.php?num=<?=$num?>&page=<?=$page?>">수정</a>&nbsp;
            <a href="javascript:del('delwrw.php?num=<?=$num?>')">삭제</a>&nbsp;
          <?
            }
          ?>
          <?
            if(empty($userid))
            {
          ?>
            <a href="write_form.php">글쓰기</a>
          <?
            }
          ?>
        </div>  <!-- view_button 끝 -->
      </div> <!-- col 종료  -->
    </div> <!-- content 종료  -->
  </div> <!-- wrap 종료  -->
  </body>
</html>
