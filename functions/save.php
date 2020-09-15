<?php
  if ( isset($_POST['height']) ) {
    // параметры модели
    $height = $_POST["height"];
    $width = $_POST['width'];
    $depth = $_POST['depth'];

    $rack_l = $_POST['rack_l'];
    $rack_r = $_POST['rack_r'];

    $roof = $_POST["roof"];
    $roof_type = $_POST["roof_type"];

    $visor = $_POST["visor"];
    $visor_side = $_POST["visor_side"];
    $visor_shift = $_POST["visor_shift"];
    $visor_side_shift = $_POST["visor_side_shift"];

    $roof_cut = $_POST["roof_cut"];
    $roof_f = $_POST["roof_f"];
    $roof_b = $_POST["roof_b"];
    $roof_f_shift = $_POST["roof_f_shift"];
    $roof_b_shift = $_POST["roof_b_shift"];

    $bottom = $_POST["bottom"];
    $bottom_type = $_POST["bottom_type"];

    $entresol = $_POST["entresol"];
    $entresol_height = $_POST["entresol_height"];
    $entresol_amount = $_POST["entresol_amount"];

    $lower_amount = $_POST["lower_amount"];

    $box_width_auto_1 = $_POST["box_width_auto_1"];
    $box_width_auto_2 = $_POST["box_width_auto_2"];
    $box_width_auto_3 = $_POST["box_width_auto_3"];
    $box_width_auto_4 = $_POST["box_width_auto_4"];
    $box_width_auto_5 = $_POST["box_width_auto_5"];
    $box_width_auto_6 = $_POST["box_width_auto_6"];
    $box_width_auto_7 = $_POST["box_width_auto_7"];
    $box_width_auto_8 = $_POST["box_width_auto_8"];
    $box_width_auto_9 = $_POST["box_width_auto_9"];
    $box_width_auto_10 = $_POST["box_width_auto_10"];
    $box_width_auto_11 = $_POST["box_width_auto_11"];
    $box_width_auto_12 = $_POST["box_width_auto_12"];
    $box_width_auto_13 = $_POST["box_width_auto_13"];
    $box_width_auto_14 = $_POST["box_width_auto_14"];
    $box_width_auto_15 = $_POST["box_width_auto_15"];
    $box_width_auto_16 = $_POST["box_width_auto_16"];
    $box_width_auto_17 = $_POST["box_width_auto_17"];
    $box_width_auto_18 = $_POST["box_width_auto_18"];

    $box_width_1 = $_POST["box_width_1"];
    $box_width_2 = $_POST["box_width_2"];
    $box_width_3 = $_POST["box_width_3"];
    $box_width_4 = $_POST["box_width_4"];
    $box_width_5 = $_POST["box_width_5"];
    $box_width_6 = $_POST["box_width_6"];
    $box_width_7 = $_POST["box_width_7"];
    $box_width_8 = $_POST["box_width_8"];
    $box_width_9 = $_POST["box_width_9"];
    $box_width_10 = $_POST["box_width_10"];
    $box_width_11 = $_POST["box_width_11"];
    $box_width_12 = $_POST["box_width_12"];
    $box_width_13 = $_POST["box_width_13"];
    $box_width_14 = $_POST["box_width_14"];
    $box_width_15 = $_POST["box_width_15"];
    $box_width_16 = $_POST["box_width_16"];
    $box_width_17 = $_POST["box_width_17"];
    $box_width_18 = $_POST["box_width_18"];

    $box_fill_type_1 = $_POST["box_fill_type_1"];
    $box_fill_type_2 = $_POST["box_fill_type_2"];
    $box_fill_type_3 = $_POST["box_fill_type_3"];
    $box_fill_type_4 = $_POST["box_fill_type_4"];
    $box_fill_type_5 = $_POST["box_fill_type_5"];
    $box_fill_type_6 = $_POST["box_fill_type_6"];
    $box_fill_type_7 = $_POST["box_fill_type_7"];
    $box_fill_type_8 = $_POST["box_fill_type_8"];
    $box_fill_type_9 = $_POST["box_fill_type_9"];
    $box_fill_type_10 = $_POST["box_fill_type_10"];
    $box_fill_type_11 = $_POST["box_fill_type_11"];
    $box_fill_type_12 = $_POST["box_fill_type_12"];
    $box_fill_type_13 = $_POST["box_fill_type_13"];
    $box_fill_type_14 = $_POST["box_fill_type_14"];
    $box_fill_type_15 = $_POST["box_fill_type_15"];
    $box_fill_type_16 = $_POST["box_fill_type_16"];
    $box_fill_type_17 = $_POST["box_fill_type_17"];
    $box_fill_type_18 = $_POST["box_fill_type_18"];

    $box_fill_amount_1 = $_POST["box_fill_amount_1"];
    $box_fill_amount_2 = $_POST["box_fill_amount_2"];
    $box_fill_amount_3 = $_POST["box_fill_amount_3"];
    $box_fill_amount_4 = $_POST["box_fill_amount_4"];
    $box_fill_amount_5 = $_POST["box_fill_amount_5"];
    $box_fill_amount_6 = $_POST["box_fill_amount_6"];
    $box_fill_amount_7 = $_POST["box_fill_amount_7"];
    $box_fill_amount_8 = $_POST["box_fill_amount_8"];
    $box_fill_amount_9 = $_POST["box_fill_amount_9"];
    $box_fill_amount_10 = $_POST["box_fill_amount_10"];
    $box_fill_amount_11 = $_POST["box_fill_amount_11"];
    $box_fill_amount_12 = $_POST["box_fill_amount_12"];
    $box_fill_amount_13 = $_POST["box_fill_amount_13"];
    $box_fill_amount_14 = $_POST["box_fill_amount_14"];
    $box_fill_amount_15 = $_POST["box_fill_amount_15"];
    $box_fill_amount_16 = $_POST["box_fill_amount_16"];
    $box_fill_amount_17 = $_POST["box_fill_amount_17"];
    $box_fill_amount_18 = $_POST["box_fill_amount_18"];

    $box_wall_1 = $_POST["box_wall_1"];
    $box_wall_2 = $_POST["box_wall_2"];
    $box_wall_3 = $_POST["box_wall_3"];
    $box_wall_4 = $_POST["box_wall_4"];
    $box_wall_5 = $_POST["box_wall_5"];
    $box_wall_6 = $_POST["box_wall_6"];
    $box_wall_7 = $_POST["box_wall_7"];
    $box_wall_8 = $_POST["box_wall_8"];
    $box_wall_9 = $_POST["box_wall_9"];
    $box_wall_10 = $_POST["box_wall_10"];
    $box_wall_11 = $_POST["box_wall_11"];
    $box_wall_12 = $_POST["box_wall_12"];
    $box_wall_13 = $_POST["box_wall_13"];
    $box_wall_14 = $_POST["box_wall_14"];
    $box_wall_15 = $_POST["box_wall_15"];
    $box_wall_16 = $_POST["box_wall_16"];
    $box_wall_17 = $_POST["box_wall_17"];
    $box_wall_18 = $_POST["box_wall_18"];

    $box_door_type_1 = $_POST["box_door_type_1"];
    $box_door_type_2 = $_POST["box_door_type_2"];
    $box_door_type_3 = $_POST["box_door_type_3"];
    $box_door_type_4 = $_POST["box_door_type_4"];
    $box_door_type_5 = $_POST["box_door_type_5"];
    $box_door_type_6 = $_POST["box_door_type_6"];
    $box_door_type_7 = $_POST["box_door_type_7"];
    $box_door_type_8 = $_POST["box_door_type_8"];
    $box_door_type_9 = $_POST["box_door_type_9"];
    $box_door_type_10 = $_POST["box_door_type_10"];
    $box_door_type_11 = $_POST["box_door_type_11"];
    $box_door_type_12 = $_POST["box_door_type_12"];
    $box_door_type_13 = $_POST["box_door_type_13"];
    $box_door_type_14 = $_POST["box_door_type_14"];
    $box_door_type_15 = $_POST["box_door_type_15"];
    $box_door_type_16 = $_POST["box_door_type_16"];
    $box_door_type_17 = $_POST["box_door_type_17"];
    $box_door_type_18 = $_POST["box_door_type_18"];

    $box_split_7 = $_POST["box_split_7"];
    $box_split_8 = $_POST["box_split_8"];
    $box_split_9 = $_POST["box_split_9"];
    $box_split_10 = $_POST["box_split_10"];
    $box_split_11 = $_POST["box_split_11"];
    $box_split_12 = $_POST["box_split_12"];

    $door_type = $_POST["door_type"];
    $door_sum = $_POST["door_sum"];
    $door_facade = $_POST["door_facade"];
    $hand_type = $_POST["hand_type"];
    $base_f = $_POST["base_f"];
    $base_b = $_POST["base_b"];
    $base_f_shift = $_POST["base_f_shift"];
    $base_b_shift = $_POST["base_b_shift"];
    $base_height = $_POST["base_height"];
    $floor_height = $_POST["floor_height"];
    $legs_type = $_POST["legs_type"];
    $wall = $_POST["wall"];
    $wall_full = $_POST["wall_full"];
    $wall_cut = $_POST["wall_cut"];

    // данные для отобржения
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $price = $_POST["price"];
  }

  include "connect.php";
  // вытаскиваю по Id данные о юзере
  $sql = "SELECT login, arr FROM users WHERE id = '".$_COOKIE["id"]."'";
  $result = mysqli_query($link, $sql);
  // размещаем полученные данные из sql запроса по ячейкам массива $row, затем в переменных
  $row = mysqli_fetch_array($result);
  
  // создаю массив для бд
  $savesArray = [
    $height, $width, $depth, $rack_l, $rack_r, $roof, $roof_type,
    $visor, $visor_side, $visor_shift, $visor_side_shift,
    $roof_cut, $roof_f, $roof_b, $roof_f_shift, $roof_b_shift, $bottom, $bottom_type, $entresol, $entresol_height, $entresol_amount, $lower_amount,
    $box_width_auto_1, $box_width_auto_2, $box_width_auto_3, $box_width_auto_4, $box_width_auto_5, $box_width_auto_6, $box_width_auto_7, $box_width_auto_8, $box_width_auto_9, $box_width_auto_10, $box_width_auto_11, $box_width_auto_12, $box_width_auto_13, $box_width_auto_14, $box_width_auto_15, $box_width_auto_16, $box_width_auto_17, $box_width_auto_18,
    $box_width_1, $box_width_2, $box_width_3, $box_width_4, $box_width_5, $box_width_6, $box_width_7, $box_width_8, $box_width_9, $box_width_10, $box_width_11, $box_width_12, $box_width_13, $box_width_14, $box_width_15, $box_width_16, $box_width_17, $box_width_18,
    $box_fill_type_1, $box_fill_type_2, $box_fill_type_3, $box_fill_type_4, $box_fill_type_5, $box_fill_type_6, $box_fill_type_7, $box_fill_type_8, $box_fill_type_9, $box_fill_type_10, $box_fill_type_11, $box_fill_type_12, $box_fill_type_13, $box_fill_type_14, $box_fill_type_15, $box_fill_type_16, $box_fill_type_17, $box_fill_type_18,
    $box_fill_amount_1, $box_fill_amount_2, $box_fill_amount_3, $box_fill_amount_4, $box_fill_amount_5, $box_fill_amount_6, $box_fill_amount_7, $box_fill_amount_8, $box_fill_amount_9, $box_fill_amount_10, $box_fill_amount_11, $box_fill_amount_12, $box_fill_amount_13, $box_fill_amount_14, $box_fill_amount_15, $box_fill_amount_16, $box_fill_amount_17, $box_fill_amount_18,
    $box_wall_1, $box_wall_2, $box_wall_3, $box_wall_4, $box_wall_5, $box_wall_6, $box_wall_7, $box_wall_8, $box_wall_9, $box_wall_10, $box_wall_11, $box_wall_12, $box_wall_13, $box_wall_14, $box_wall_15, $box_wall_16, $box_wall_17, $box_wall_18,
    $box_door_type_1, $box_door_type_2, $box_door_type_3, $box_door_type_4, $box_door_type_5, $box_door_type_6, $box_door_type_7, $box_door_type_8, $box_door_type_9, $box_door_type_10, $box_door_type_11, $box_door_type_12, $box_door_type_13, $box_door_type_14, $box_door_type_15, $box_door_type_16, $box_door_type_17, $box_door_type_18,
    $door_type, $door_sum, $door_facade, $hand_type, $base_f, $base_b, $base_f_shift, $base_b_shift, $base_height, $floor_height, $legs_type, $wall, $wall_full, $wall_cut,
    $box_split_7, $box_split_8, $box_split_9, $box_split_10, $box_split_11, $box_split_12,
    $title, $subtitle, $price
  ];

  echo '<pre>';
    print_r($savesArray);
  echo '</pre>';
  // вставляю в конец $savesArrayDataBase новое сохранение
  $savesArrayDataBase = unserialize($row['arr']);
  // $savesArrayDataBase[count($savesArrayDataBase)] = $savesArray;
  array_push($savesArrayDataBase, $savesArray);
  // сериализирую для внесения в бд
  // $savesArrayDataBase = [];
  $savesArraySerialize = serialize($savesArrayDataBase);

  // $arrSer = (string)$arrSer;
  echo '<pre>';
  // print_r($savesArrayDataBase);
  echo '</pre>';
  // $arrSer = serialize(implode($arr));
  // echo '<br>', $arrSer;

  // записываю в бд новый массив
  $sql = "UPDATE ".$db_table." SET arr = '$savesArraySerialize' WHERE id = '".$_COOKIE["id"]."'";
  $result = mysqli_query($link, $sql);
  setcookie("save-cookie", "true", time()+1, "/");

  // useful
  // setcookie("savesArraySerialize", serialize($savesArray), time()+60*30, "/");
  echo "<script>document.location.href='../account-page.php';</script>";
?>