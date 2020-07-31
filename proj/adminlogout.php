<?php
session_start();
if(isset($_POST['logout']))
{
  session_destroy();
  echo '<script>window.location.href="../proj/adminlogi.php"</script>';
}
 ?>
