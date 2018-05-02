<!doctype html>
<html>
  <head><title>Download Solution</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../IMG/favicon.ico">
    <script src="../js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <style>

      @media screen and (max-width: 1920px) {
        article {margin:20px 0 20px 0;
          height: 500px;
          padding:10px 10px 30px 10px;
          font-family: 'Nanum Gothic', sans-serif;
          background-color:#fff;
          border:1px solid #e5e5e5;
          text-align: center;
          box-shadow: rgba(200,200,200,.7) 0 5px 10px 2px;}
      }

      @media screen and (max-width: 800px) {
        article {margin:20px 0 20px 0;
          height: auto;
          padding:10px 10px 30px 10px;
          font-family: 'Nanum Gothic', sans-serif;
          background-color:#fff;
          border:1px solid #e5e5e5;
          text-align: center;
          box-shadow: rgba(200,200,200,.7) 0 5px 10px 2px;}
      }

      .button1{
        margin:20px 10px 0 10px;
        border:2px solid black;
        width:250px;
        height:100px;
        font-size:20px;
        font-weight:bold;
        background-color:#f9f9f9;
        transition-duration:0.5s;
        border-radius: 10px;
      }
      .button1:hover{
        transition-duration:0.5s;
        color:#fff;
        background-color:#999999;
      }
    </style>
  </head>
  <body>
    <?
      include 'header.php';
    ?>
    <div class="container"> <!-- container -->
      <div class="row">

      <div class="col-md-12 col-sm-12">
        <article>
        <img src="../img/Download.png" style="width:60%; margin:15px 0 30px 0;">
        <br>
        <font size='5'>
          <p>
            MARUWARE는<br>
            The world of the best Etherium 
            세계 최고의 블록체인 이더리움을 기반으로 만들어졌습니다.<br>
            다운로드 해 주셔서 감사합니다.
          </p>
        </font>
          <input type="button" value="GitHub에서 다운로드" class="button1">
          <input type="button" value="GoogleDrive 다운로드" class="button1">
          <input type="button" value="직접 다운로드" class="button1">
        </article>
      </div>

      </div> <!-- row -->
    </div> <!-- container -->
    <?
      include 'footer.php';
    ?>
  </body>
</html>
