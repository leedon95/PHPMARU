<?

  if(!isset($_SESSION))
  {
    session_start();
  }

  $getsub = $_GET['num'];
  $num = (int)$getsub; //오류방지를 위한 초기화
  $result=""; //오류방지를 위한 초기화

  if($_SESSION['usernick']==$_SESSION['nickcheck']) // 만약 글쓴이와 수정하려는의 아이디가 같다면
  {
    include '../dbconn.php';

    $sql="select * from greet where num=$num"; //불러오기
    $result=mysqli_query($connect,$sql);

    $row=mysqli_fetch_array($result);
    $item_subject=$row['subject'];
    $item_content=$row['content'];
  }
  else{
    echo("
    <script>
      alert('당신의 글이 아닙니다.');
      location.href='community.php'
    </script>"
    );
  }

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>글수정</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../IMG/favicon2.ico">
    <link href="../importcss.css" rel="stylesheet">
    <script src="../../js/bootstrap.min.js"></script>

    <style>

    @media screen and (max-width: 1920px) {
      .topfont{font-size:23px;}}

    @media screen and (max-width: 1200px) {
      .topfont{font-size:19px;}}

    @media screen and (max-width: 800px) {
      .topfont{font-size:16px;}}

    .tablebox{
      width:100%;
      height:35px;}

      textarea{
        width:100%; /*넓이*/
        height:330px; /*높이*/
        padding:6px 12px;
        margin-bottom:20px;
        resize:none;
        font-size:16px;
        color:#555;
        border:1px solid #ccc;
        border-radius:4px;
        box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-box-shadow ease-in-out .15s;
        -o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}

    textarea:focus{border-color:#66afe9;outline:0; /* 마우스 올렸을시 나오는 효과 */
      -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
      box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}

    </style>
  </head>
  </head>

  <body>

  <div class="modify_form"> <!-- 미디어쿼리 -->
    <form name="board_form" method="post" action="write_insert.php?mode=modify&num<?=$num?>&page=<?=$page?>">

    <table class="tablebox">
      <tr>
        <td class="topfont" style="width:50%">
          제목
        </td>
        <td class="topfont" style="width:50%" align="right">
          닉네임 : <?=$_SESSION['usernick']?>
        </td>
      </tr>
    </table>

      <div class="col2">
        <input type="text" name="write_subject" class="form-control" placeholder=" # 제목을 입력해주세요." style="width:100%; margin-bottom:15px;" value="<?=$item_subject?>" required>
      </div>
        <font size="5">내용</font>
        <textarea name="write_text" placeholder=" # 여러분의 소중한 의견을 들려주세요."><?=$item_content?></textarea>
      <div id="write_button">
        <div class="col-md-6 col-sm-6 col-xs-6">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="글 수정">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <a href="community.php?page=<?=$page?>"><input type="button" name="submit" class="btn btn-primary btn-block" value="목록"></a>
        </div>
      </div> <!-- write_button 종료 -->
  </form>

</div> <!-- 미디어쿼리 -->

  </body>
</html>
