<?php

include "functions/connect.php";

// вытаскиваю по Id данные о юзере
$sql = "SELECT login, balance, typeInvest, dateStartInvest, amount, arr FROM users WHERE id = '".$_COOKIE["id"]."'";
$result = mysqli_query($link, $sql);

// размещаем полученные данные из sql запроса по ячейкам массива $row, затем в переменных
$row = mysqli_fetch_array($result);

$balance = $row["balance"];
$typeInvest = $row["typeInvest"];
$dateStartInvestUnix = $row["dateStartInvest"];
$dateStartInvest = date("H:i:s", $dateStartInvestUnix);
$amount = $row["amount"];
$arrr = $row["arr"];

if ($typeInvest == 1) {

  $duration = 20;

  // определить ожидаемый доход начисление
  $accrual = $amount * 1.1;
  $amountHTML = $amount.'₽';
  $accrualHTML = $accrual.'₽';

  // проверка времени работы вклада
  $timeNow = date("H:i:s");
  $timeNowUnix = strtotime($timeNow);
  // дата конца депозита
  $dateEndInvestUnix = $dateStartInvestUnix + $duration;
  $dateEndInvest = date("H:i:s", $dateEndInvestUnix);
  // времени до конца депозита
  date_default_timezone_set('UTC');
  $diffTime = $dateEndInvestUnix - $timeNowUnix; // осталось времени
  // прошло времени со старта депозита
  $timeLeftUnix = $duration - $diffTime;
  $timeLeft = date("H:i:s", $timeLeftUnix);

  if ($timeLeftUnix >= $duration) {
    // начисление дохода
    $balance = $balance + $accrual;

    $sql = "UPDATE ".$db_table." SET balance = ".$balance.", typeInvest = 0, dateStartInvest = 0, amount = 0 WHERE id = '".$_COOKIE["id"]."'";
    $result = mysqli_query($link, $sql);
  }

  // Отображение данных на странице
  $dateStartInvestHTML = $dateStartInvest;
  $amountHTML = $amount."₽";
  $accrualHTML = $accrual."₽";
  $diffTimeHTML = date("H:i:s", $diffTime);

} elseif ($typeInvest == 2) {

  $duration = 20*2;
  
  // определить ожидаемый доход начисление
  $accrual = $amount * 1.3;
  $amountHTML = $amount.'₽';
  $accrualHTML = $accrual.'₽';

  // проверка времени работы вклада
  $timeNow = date("H:i:s");
  $timeNowUnix = strtotime($timeNow);
  // дата конца депозита
  $dateEndInvestUnix = $dateStartInvestUnix + $duration;
  $dateEndInvest = date("H:i:s", $dateEndInvestUnix);
  // времени до конца депозита
  date_default_timezone_set('UTC');
  $diffTime = $dateEndInvestUnix - $timeNowUnix; // осталось времени
  // прошло времени со старта депозита
  $timeLeftUnix = $duration - $diffTime;
  $timeLeft = date("H:i:s", $timeLeftUnix);

  if ($timeLeftUnix >= $duration) {
    // начисление дохода
    $balance = $balance + $accrual;

    $sql = "UPDATE ".$db_table." SET balance = ".$balance.", typeInvest = 0, dateStartInvest = 0, amount = 0 WHERE id = '".$_COOKIE["id"]."'";
    $result = mysqli_query($link, $sql);
  }

  // Отображение данных на странице
  $dateStartInvestHTML = $dateStartInvest;
  $amountHTML = $amount."₽";
  $accrualHTML = $accrual."₽";
  $diffTimeHTML = date("H:i:s", $diffTime);

} else {

  $dateStartInvestHTML = "";
  $amountHTML = "";
  $accrualHTML = "";
  $diffTimeHTML = "";

}

?>