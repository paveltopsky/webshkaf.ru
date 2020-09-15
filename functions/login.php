<?php

if ( isset($_POST['login']) && isset($_POST['password']) ) {
  $login = $_POST['login'];
  $password = $_POST['password'];
}

include "connect.php";

// Делаем запрос
$sql = "SELECT id, login, password FROM users WHERE login = '".$login."'";
$result = mysqli_query($link, $sql);
$row_cnt = $result->num_rows; // определение числа рядов в выборке

// проверяет существовует ли запись о пользователи с его $login
if (!$row_cnt) {
  echo('Неверный логин/пароль');
}

// размещаем полученные данные из sql запроса по ячейкам массива $row
$row = mysqli_fetch_array($result);

if ($password == $row['password']) {
  // устанавливаем куки
  setcookie("id", $row['id'], time()+60*30*100, "/");
  setcookie("login", $login, time()+60*30*100, "/");
  setcookie("cookie", "true", time()+60*30*100, "/");
  setcookie("new-user", "", time()+60*30, "/");
  echo "<script>document.location.href='../account-page.php';</script>";
  exit;
} else {

  if (!$row_cnt) {
    exit;
  } else {
    echo('Неверный логин/пароль');
    exit;
  }
  
}

?>