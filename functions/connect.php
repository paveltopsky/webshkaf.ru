<?php
  date_default_timezone_set('UTC + 3');
  // Параметры для подключения
  $db_host = "localhost";
  $db_user = "root"; // Логин БД
// u1035926
$db_password = "root"; // Пароль БД
// o%DYvS1a
$db_name = 'berkshire_db'; // Имя БД
// u1035926_3d_calc_db
$db_table = "users"; // Имя Таблицы БД

  // бд beget
  // $db_user = "shurin77_3d_calc"; // Логин БД
  // u1035926
  // $db_password = "o%DYvS1a"; // Пароль БД
  // o%DYvS1a
  // $db_name = 'shurin77_3d_calc'; // Имя БД
  // u1035926_3d_calc_db
  // $db_table = "users"; // Имя Таблицы БД
  
  // Соединяемся с базой, уведомляем об ошибке(если есть):
  $link = new mysqli($db_host, $db_user, $db_password, $db_name);
  if ($link->connect_error) {
    die('Ошибка : ('. $link->connect_errno .') '. $link->connect_error);
  }
  mysqli_set_charset($link, "utf8");
?>