<?php
setcookie("cookie", "", time()-60*30*100, "/");
setcookie("login", "", time()-60*30*100, "/");
setcookie("id", "", time()-60*30*100, "/");
header("Location: ../index.php");
?>