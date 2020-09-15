<?php
  include "functions/connect.php";

  // вытаскиваю по Id данные о юзере
  $sql = "SELECT login, balance, typeInvest, dateStartInvest, amount FROM users WHERE id = '".$_COOKIE["id"]."'";
  $result = mysqli_query($link, $sql);
  // размещаем полученные данные из sql запроса по ячейкам массива $row, затем в переменных
  $row = mysqli_fetch_array($result);
  
  // делаю изменению в бд
  // создаю массив для бд
  $savesArray = array('one' => '1', 'two' => '2', 'three' => '3');
  setcookie("savesArraySerialize", serialize($savesArray), time()+60*30, "/");
  // setcookie("new-user", serialize($arr), time()+60*30, "/");
  // $arrSer = serialize($arr);
  $savesArraySerialize = serialize($savesArray);

  // $arrSer = (string)$arrSer;
  echo $savesArray;
  // $arrSer = serialize(implode($arr));
  // echo '<br>', $arrSer;

  $sql = "UPDATE ".$db_table." SET arr = '$savesArraySerialize' WHERE id = '".$_COOKIE["id"]."'";
  $result = mysqli_query($link, $sql);
?>