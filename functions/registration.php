<?php

if ( isset($_POST['login']) && isset($_POST['password']) ) {
  $login = $_POST['login'];
  $password = $_POST['password'];
}

include "connect.php";

// проверяем, есть ли такой логин в БД, иначе ниже вносим данные
$sql = "SELECT login FROM users WHERE login = '".$login."'";
$result = mysqli_query($link, $sql);
$row_cnt = $result->num_rows; // определение числа рядов в выборке

if ($row_cnt) {
  echo('Такой аккаунт уже существует');
} else {
  setcookie("new-user", "true", time()+60*30, "/");
  // Вносим данные в БД
  $arr = [];
  $arrSerialize = serialize($arr);
  $sql = "INSERT INTO ".$db_table." (login, password, arr) VALUES ('$login', '$password', '$arrSerialize')";
  $result = mysqli_query($link, $sql);

  if ($result == true) {
    echo "Отлично, информация занесена в базу данных";
  } else {
    echo "Информация не занесена в базу данных";
  }
//   echo mysql_errno() . ": " . mysql_error() . "\n";
   echo "<script>document.location.href='../login-page.php';</script>";
}

?>