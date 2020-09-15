<?php

if ( isset($_POST['amount']) && isset($_POST['type']) ) {
  $amount = $_POST['amount'];
  $type = $_POST['type'];
}

include "functions/connect.php";

// вытаскиваю по Id данные о юзере
$sql = "SELECT balance, login, typeInvest FROM users WHERE id = '".$_COOKIE["id"]."'";
$result = mysqli_query($link, $sql);

// размещаем полученные данные из sql запроса по ячейкам массива $row
$row = mysqli_fetch_array($result);
$balance = $row['balance'];
$typeInvest = $row['typeInvest'];

if (($amount < 100) || ($typeInvest) || ($balance < $amount)) {
  echo('кого ты наебать пытаешься, депозит от 100р, к тому же более одного депозита за раз открыть пока нельзя');
} else {
  $balance = $balance - $amount;
  $dateStartInvest = date("H:i:s");
  $dateStartInvestUnix = strtotime($dateStartInvest);

  if ($type == 1) {
    $sql = "UPDATE ".$db_table." SET balance = ".$balance.", typeInvest = 1, dateStartInvest = ".$dateStartInvestUnix.", amount = ".$amount." WHERE id = '".$_COOKIE["id"]."'";
  }

  if ($type == 2) {
    $sql = "UPDATE ".$db_table." SET balance = ".$balance.", typeInvest = 2, dateStartInvest = ".$dateStartInvestUnix.", amount = ".$amount." WHERE id = '".$_COOKIE["id"]."'";
  }

  $result = mysqli_query($link, $sql);

  echo "<script>document.location.href='account.php';</script>";
}

?>