<?
  if(!isset($_SESSION))
  {
      session_start();
  }
unset($_SESSION['userid']);
unset($_SESSION['usernick']);

echo("<script>
location.href='main.php'
</script>")

?>
