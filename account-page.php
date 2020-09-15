<?php
  include "components/head.php";
?>

<title>3D CALC | Аккаунт</title>
</head>

<body>

<?php 
  include "components/header.php";
  include "functions/connect.php";

  // Вытаскиваю нужные данные из бд и проверяю открытый вклад
  // include "check-invest.php";
  // Размещаю по переменным

?>

<!-- проверка на наличие cookie -->
<?php if (isset($_COOKIE['cookie'])): ?>
  <section class="account-data" style="padding-top: 40px;">
    <div class="container">
      <div class="row flex-column flex-lg-row">
        
        <section class="menu col-6 col-lg-3 mb-4">

          <div class="menu__title mb-3">Личный кабинет:
          <?php
            echo $_COOKIE['login'];
          ?>
          </div>

          <div class="">
            <a href="index.php" class="btn menu__btn btn-secondary">Открыть редактор</a>
            <div class="btn menu__btn btn-secondary">Корзина</div>
            <div class="btn menu__btn btn-secondary">Заказы</div>
            <div class="btn menu__btn btn-secondary">Доставка</div>
            <form class="" action="functions/exit.php" method="POST" enctype="application/x-www-form-urlencoded">
              <!-- <form action="functions/exit.php" method="POST" enctype="application/x-www-form-urlencoded">
                <button type="submit">Выйти</button>
              </form> -->
              <button type="submit" class="btn menu__btn btn-secondary" style="">Выйти</button>
            </form>
          </div>
        </section>
        <!-- /.menu -->

        <!-- список сохранений -->
        <section class="saving col-12 col-lg-9">

          <?php
            // вытаскиваю arr из бд
            $sql = "SELECT arr FROM users WHERE id = '".$_COOKIE["id"]."'";
            $result = mysqli_query($link, $sql);
            $row_cnt = $result->num_rows; // определение числа рядов в выборке
            $row = mysqli_fetch_array($result);

            $unserArr = $row['arr'];
            $serArr = unserialize($row['arr']);

            // вывод массива сохранений
            // echo '<pre>';
            // print_r($serArr);
            // echo '</pre>';

            if(count($serArr) == 0) {
              $savingInfo =
              '<div class="saving__info d-flex justify-content-between">
                <div class="saving__counter">Нет сохранённых моделей!</div>
              </div>';
            } else {
              $savingInfo =
              '<div class="saving__info d-flex justify-content-between">
                <div class="saving__counter">Сохранённые модели: <span>'.count($serArr).'</span></div>
                <div class="saving__sort">Сортировать</div>
              </div>';
            }

            echo $savingInfo;
          ?>

          <?php
            
            function drawSavingItem($height, $width, $depth, $rack_l, $rack_r, $roof, $roof_type,
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
            $title, $subtitle, $price) {
              if(!$subtitle) {
                $subtitle = 'нет описания';
              }
              $savingItem = 
              '<div class="saving__item row">
                <div class="col-4 d-flex flex-column justify-content-center">
                  <div class="saving__title">'.$title.'</div>
                  <div class="saving__price">'.$price.' ₽</div>
                </div>
                <div class="col-4 d-flex flex-column justify-content-center" style="padding-left: 0;">
                  <div class="saving__subtitle">'.$subtitle.'</div>
                </div>
                <div class="col-4 saving__btn-group d-flex flex-column align-items-center justify-content-center">
                  <form class="saving__form-btn" action="index.php" method="post">
                    <button class="saving__btn saving__btn-open btn btn-info">Открыть в редакторе</button>
                    <input name="height" value="'.$height.'" type="hidden">
                    <input name="width" value="'.$width.'" type="hidden">
                    <input name="depth" value="'.$depth.'" type="hidden">

                    <input name="rack_l" value="'.$rack_l.'" type="hidden">
                    <input name="rack_r" value="'.$rack_r.'" type="hidden">

                    <input name="roof" value="'.$roof.'" type="hidden">
                    <input name="roof_type" value="'.$roof_type.'" type="hidden">

                    <input name="visor" value="'.$visor.'" type="hidden">
                    <input name="visor_side" value="'.$visor_side.'" type="hidden">
                    <input name="visor_shift" value="'.$visor_shift.'" type="hidden">
                    <input name="visor_side_shift" value="'.$visor_side_shift.'" type="hidden">

                    <input name="roof_cut" value="'.$roof_cut.'" type="hidden">
                    <input name="roof_f" value="'.$roof_f.'" type="hidden">
                    <input name="roof_b" value="'.$roof_b.'" type="hidden">
                    <input name="roof_f_shift" value="'.$roof_f_shift.'" type="hidden">
                    <input name="roof_b_shift" value="'.$roof_b_shift.'" type="hidden">

                    <input name="bottom" value="'.$bottom.'" type="hidden">
                    <input name="bottom_type" value="'.$bottom_type.'" type="hidden">

                    <input name="entresol" value="'.$entresol.'" type="hidden">
                    <input name="entresol_height" value="'.$entresol_height.'" type="hidden">
                    <input name="entresol_amount" value="'.$entresol_amount.'" type="hidden">

                    <input name="lower_amount" value="'.$lower_amount.'" type="hidden">

                    <input name="door_type" value="'.$door_type.'" type="hidden">
                    <input name="door_sum" value="'.$door_sum.'" type="hidden">
                    <input name="door_facade" value="'.$door_facade.'" type="hidden">

                    <input name="hand_type" value="'.$hand_type.'" type="hidden">

                    <input name="base_f" value="'.$base_f.'" type="hidden">
                    <input name="base_b" value="'.$base_b.'" type="hidden">
                    <input name="base_f_shift" value="'.$base_f_shift.'" type="hidden">
                    <input name="base_b_shift" value="'.$base_b_shift.'" type="hidden">
                    <input name="base_height" value="'.$base_height.'" type="hidden">

                    <input name="floor_height" value="'.$floor_height.'" type="hidden">

                    <input name="legs_type" value="'.$legs_type.'" type="hidden">

                    <input name="wall" value="'.$wall.'" type="hidden">
                    <input name="wall_full" value="'.$wall_full.'" type="hidden">
                    <input name="wall_cut" value="'.$wall_cut.'" type="hidden">

                    <input name="box_width_auto_1" value="'.$box_width_auto_1.'" type="hidden">
                    <input name="box_width_auto_2" value="'.$box_width_auto_2.'" type="hidden">
                    <input name="box_width_auto_3" value="'.$box_width_auto_3.'" type="hidden">
                    <input name="box_width_auto_4" value="'.$box_width_auto_4.'" type="hidden">
                    <input name="box_width_auto_5" value="'.$box_width_auto_5.'" type="hidden">
                    <input name="box_width_auto_6" value="'.$box_width_auto_6.'" type="hidden">
                    <input name="box_width_auto_7" value="'.$box_width_auto_7.'" type="hidden">
                    <input name="box_width_auto_8" value="'.$box_width_auto_8.'" type="hidden">
                    <input name="box_width_auto_9" value="'.$box_width_auto_9.'" type="hidden">
                    <input name="box_width_auto_10" value="'.$box_width_auto_10.'" type="hidden">
                    <input name="box_width_auto_11" value="'.$box_width_auto_11.'" type="hidden">
                    <input name="box_width_auto_12" value="'.$box_width_auto_12.'" type="hidden">
                    <input name="box_width_auto_13" value="'.$box_width_auto_13.'" type="hidden">
                    <input name="box_width_auto_14" value="'.$box_width_auto_14.'" type="hidden">
                    <input name="box_width_auto_15" value="'.$box_width_auto_15.'" type="hidden">
                    <input name="box_width_auto_16" value="'.$box_width_auto_16.'" type="hidden">
                    <input name="box_width_auto_17" value="'.$box_width_auto_17.'" type="hidden">
                    <input name="box_width_auto_18" value="'.$box_width_auto_18.'" type="hidden">

                    <input name="box_width_1" value="'.$box_width_1.'" type="hidden">
                    <input name="box_width_2" value="'.$box_width_2.'" type="hidden">
                    <input name="box_width_3" value="'.$box_width_3.'" type="hidden">
                    <input name="box_width_4" value="'.$box_width_4.'" type="hidden">
                    <input name="box_width_5" value="'.$box_width_5.'" type="hidden">
                    <input name="box_width_6" value="'.$box_width_6.'" type="hidden">
                    <input name="box_width_7" value="'.$box_width_7.'" type="hidden">
                    <input name="box_width_8" value="'.$box_width_8.'" type="hidden">
                    <input name="box_width_9" value="'.$box_width_9.'" type="hidden">
                    <input name="box_width_10" value="'.$box_width_10.'" type="hidden">
                    <input name="box_width_11" value="'.$box_width_11.'" type="hidden">
                    <input name="box_width_12" value="'.$box_width_12.'" type="hidden">
                    <input name="box_width_13" value="'.$box_width_13.'" type="hidden">
                    <input name="box_width_14" value="'.$box_width_14.'" type="hidden">
                    <input name="box_width_15" value="'.$box_width_15.'" type="hidden">
                    <input name="box_width_16" value="'.$box_width_16.'" type="hidden">
                    <input name="box_width_17" value="'.$box_width_17.'" type="hidden">
                    <input name="box_width_18" value="'.$box_width_18.'" type="hidden">

                    <input name="box_fill_type_1" value="'.$box_fill_type_1.'" type="hidden">
                    <input name="box_fill_type_2" value="'.$box_fill_type_2.'" type="hidden">
                    <input name="box_fill_type_3" value="'.$box_fill_type_3.'" type="hidden">
                    <input name="box_fill_type_4" value="'.$box_fill_type_4.'" type="hidden">
                    <input name="box_fill_type_5" value="'.$box_fill_type_5.'" type="hidden">
                    <input name="box_fill_type_6" value="'.$box_fill_type_6.'" type="hidden">
                    <input name="box_fill_type_7" value="'.$box_fill_type_7.'" type="hidden">
                    <input name="box_fill_type_8" value="'.$box_fill_type_8.'" type="hidden">
                    <input name="box_fill_type_9" value="'.$box_fill_type_9.'" type="hidden">
                    <input name="box_fill_type_10" value="'.$box_fill_type_10.'" type="hidden">
                    <input name="box_fill_type_11" value="'.$box_fill_type_11.'" type="hidden">
                    <input name="box_fill_type_12" value="'.$box_fill_type_12.'" type="hidden">
                    <input name="box_fill_type_13" value="'.$box_fill_type_13.'" type="hidden">
                    <input name="box_fill_type_14" value="'.$box_fill_type_14.'" type="hidden">
                    <input name="box_fill_type_15" value="'.$box_fill_type_15.'" type="hidden">
                    <input name="box_fill_type_16" value="'.$box_fill_type_16.'" type="hidden">
                    <input name="box_fill_type_17" value="'.$box_fill_type_17.'" type="hidden">
                    <input name="box_fill_type_18" value="'.$box_fill_type_18.'" type="hidden">

                    <input name="box_fill_amount_1" value="'.$box_fill_amount_1.'" type="hidden">
                    <input name="box_fill_amount_2" value="'.$box_fill_amount_2.'" type="hidden">
                    <input name="box_fill_amount_3" value="'.$box_fill_amount_3.'" type="hidden">
                    <input name="box_fill_amount_4" value="'.$box_fill_amount_4.'" type="hidden">
                    <input name="box_fill_amount_5" value="'.$box_fill_amount_5.'" type="hidden">
                    <input name="box_fill_amount_6" value="'.$box_fill_amount_6.'" type="hidden">
                    <input name="box_fill_amount_7" value="'.$box_fill_amount_7.'" type="hidden">
                    <input name="box_fill_amount_8" value="'.$box_fill_amount_8.'" type="hidden">
                    <input name="box_fill_amount_9" value="'.$box_fill_amount_9.'" type="hidden">
                    <input name="box_fill_amount_10" value="'.$box_fill_amount_10.'" type="hidden">
                    <input name="box_fill_amount_11" value="'.$box_fill_amount_11.'" type="hidden">
                    <input name="box_fill_amount_12" value="'.$box_fill_amount_12.'" type="hidden">
                    <input name="box_fill_amount_13" value="'.$box_fill_amount_13.'" type="hidden">
                    <input name="box_fill_amount_14" value="'.$box_fill_amount_14.'" type="hidden">
                    <input name="box_fill_amount_15" value="'.$box_fill_amount_15.'" type="hidden">
                    <input name="box_fill_amount_16" value="'.$box_fill_amount_16.'" type="hidden">
                    <input name="box_fill_amount_17" value="'.$box_fill_amount_17.'" type="hidden">
                    <input name="box_fill_amount_18" value="'.$box_fill_amount_18.'" type="hidden">

                    <input name="box_wall_1" value="'.$box_wall_1.'" type="hidden">
                    <input name="box_wall_2" value="'.$box_wall_2.'" type="hidden">
                    <input name="box_wall_3" value="'.$box_wall_3.'" type="hidden">
                    <input name="box_wall_4" value="'.$box_wall_4.'" type="hidden">
                    <input name="box_wall_5" value="'.$box_wall_5.'" type="hidden">
                    <input name="box_wall_6" value="'.$box_wall_6.'" type="hidden">
                    <input name="box_wall_7" value="'.$box_wall_7.'" type="hidden">
                    <input name="box_wall_8" value="'.$box_wall_8.'" type="hidden">
                    <input name="box_wall_9" value="'.$box_wall_9.'" type="hidden">
                    <input name="box_wall_10" value="'.$box_wall_10.'" type="hidden">
                    <input name="box_wall_11" value="'.$box_wall_11.'" type="hidden">
                    <input name="box_wall_12" value="'.$box_wall_12.'" type="hidden">
                    <input name="box_wall_13" value="'.$box_wall_13.'" type="hidden">
                    <input name="box_wall_14" value="'.$box_wall_14.'" type="hidden">
                    <input name="box_wall_15" value="'.$box_wall_15.'" type="hidden">
                    <input name="box_wall_16" value="'.$box_wall_16.'" type="hidden">
                    <input name="box_wall_17" value="'.$box_wall_17.'" type="hidden">
                    <input name="box_wall_18" value="'.$box_wall_18.'" type="hidden">

                    <input name="box_door_type_1" value="'.$box_door_type_1.'" type="hidden">
                    <input name="box_door_type_2" value="'.$box_door_type_2.'" type="hidden">
                    <input name="box_door_type_3" value="'.$box_door_type_3.'" type="hidden">
                    <input name="box_door_type_4" value="'.$box_door_type_4.'" type="hidden">
                    <input name="box_door_type_5" value="'.$box_door_type_5.'" type="hidden">
                    <input name="box_door_type_6" value="'.$box_door_type_6.'" type="hidden">
                    <input name="box_door_type_7" value="'.$box_door_type_7.'" type="hidden">
                    <input name="box_door_type_8" value="'.$box_door_type_8.'" type="hidden">
                    <input name="box_door_type_9" value="'.$box_door_type_9.'" type="hidden">
                    <input name="box_door_type_10" value="'.$box_door_type_10.'" type="hidden">
                    <input name="box_door_type_11" value="'.$box_door_type_11.'" type="hidden">
                    <input name="box_door_type_12" value="'.$box_door_type_12.'" type="hidden">
                    <input name="box_door_type_13" value="'.$box_door_type_13.'" type="hidden">
                    <input name="box_door_type_14" value="'.$box_door_type_14.'" type="hidden">
                    <input name="box_door_type_15" value="'.$box_door_type_15.'" type="hidden">
                    <input name="box_door_type_16" value="'.$box_door_type_16.'" type="hidden">
                    <input name="box_door_type_17" value="'.$box_door_type_17.'" type="hidden">
                    <input name="box_door_type_18" value="'.$box_door_type_18.'" type="hidden">

                    <input name="box_split_7" value="'.$box_split_7.'" type="hidden">
                    <input name="box_split_8" value="'.$box_split_8.'" type="hidden">
                    <input name="box_split_9" value="'.$box_split_9.'" type="hidden">
                    <input name="box_split_10" value="'.$box_split_10.'" type="hidden">
                    <input name="box_split_11" value="'.$box_split_11.'" type="hidden">
                    <input name="box_split_12" value="'.$box_split_12.'" type="hidden">

                  </form>
                  <form class="saving__form-btn" action="#" method="post">
                    <button class="saving__btn saving__btn-basket btn btn-info">Добавить в корзину</в>
                  </form>
                </div>
              </div>';
              echo $savingItem;
            }

            function drawEmptySavingitem() {
              $emptySavingItem =
              '<div class="saving__item empty d-flex align-items-center justify-content-center">
                <a href="index.php" class="saving__text empty">создать новую модель...</a>
              </div>';
              echo $emptySavingItem;
            }

            // $ignore = 1;
            // вывожу сохранённые модели
            for($i = 0; $i < count($serArr); $i++) {
              // if($i == $ignore) {
              //   continue;
              // }
              drawSavingItem($serArr[$i][0], $serArr[$i][1], $serArr[$i][2], $serArr[$i][3], $serArr[$i][4], $serArr[$i][5], $serArr[$i][6], $serArr[$i][7], $serArr[$i][8], $serArr[$i][9], $serArr[$i][10], $serArr[$i][11], $serArr[$i][12], $serArr[$i][13], $serArr[$i][14], $serArr[$i][15], $serArr[$i][16], $serArr[$i][17], $serArr[$i][18], $serArr[$i][19], $serArr[$i][20], $serArr[$i][21], $serArr[$i][22], $serArr[$i][23], $serArr[$i][24], $serArr[$i][25], $serArr[$i][26], $serArr[$i][27], $serArr[$i][28], $serArr[$i][29], $serArr[$i][30], $serArr[$i][31], $serArr[$i][32], $serArr[$i][33], $serArr[$i][34], $serArr[$i][35], $serArr[$i][36], $serArr[$i][37], $serArr[$i][38], $serArr[$i][39], $serArr[$i][40], $serArr[$i][41], $serArr[$i][42], $serArr[$i][43], $serArr[$i][44], $serArr[$i][45], $serArr[$i][46], $serArr[$i][47], $serArr[$i][48], $serArr[$i][49], $serArr[$i][50], $serArr[$i][51], $serArr[$i][52], $serArr[$i][53], $serArr[$i][54], $serArr[$i][55], $serArr[$i][56], $serArr[$i][57], $serArr[$i][58], $serArr[$i][59], $serArr[$i][60], $serArr[$i][61], $serArr[$i][62], $serArr[$i][63], $serArr[$i][64], $serArr[$i][65], $serArr[$i][66], $serArr[$i][67], $serArr[$i][68], $serArr[$i][69], $serArr[$i][70], $serArr[$i][71], $serArr[$i][72], $serArr[$i][73], $serArr[$i][74], $serArr[$i][75], $serArr[$i][76], $serArr[$i][77], $serArr[$i][78], $serArr[$i][79], $serArr[$i][80], $serArr[$i][81], $serArr[$i][82], $serArr[$i][83], $serArr[$i][84], $serArr[$i][85], $serArr[$i][86], $serArr[$i][87], $serArr[$i][88], $serArr[$i][89], $serArr[$i][90], $serArr[$i][91], $serArr[$i][92], $serArr[$i][93], $serArr[$i][94], $serArr[$i][95], $serArr[$i][96], $serArr[$i][97], $serArr[$i][98], $serArr[$i][99], $serArr[$i][100], $serArr[$i][101], $serArr[$i][102], $serArr[$i][103], $serArr[$i][104], $serArr[$i][105], $serArr[$i][106], $serArr[$i][107], $serArr[$i][108], $serArr[$i][109], $serArr[$i][110], $serArr[$i][111], $serArr[$i][112], $serArr[$i][113], $serArr[$i][114], $serArr[$i][115], $serArr[$i][116], $serArr[$i][117], $serArr[$i][118], $serArr[$i][119], $serArr[$i][120], $serArr[$i][121], $serArr[$i][122], $serArr[$i][123], $serArr[$i][124], $serArr[$i][125], $serArr[$i][126], $serArr[$i][127], $serArr[$i][128], $serArr[$i][129], $serArr[$i][130], $serArr[$i][131], $serArr[$i][132], $serArr[$i][133], $serArr[$i][134], $serArr[$i][135], $serArr[$i][136], $serArr[$i][137], $serArr[$i][138], $serArr[$i][139], $serArr[$i][140], $serArr[$i][141], $serArr[$i][142], $serArr[$i][143], $serArr[$i][144], $serArr[$i][145], $serArr[$i][146], $serArr[$i][147], $serArr[$i][148], $serArr[$i][149], $serArr[$i][150], $serArr[$i][151], $serArr[$i][152]);
            }

            if(count($serArr) == 0) {
              drawEmptySavingItem();
            }

            // drawSavingItem('gg', 'ff', 'gg');
            
          ?>
        </section>
        <!-- /.saving -->

      </div>

      <!-- проверка на новое сохранение -->
      <?php if (isset($_COOKIE["save-cookie"])): ?>
        <div class="text__success">Модель успешно сохранена</div>
      <?php else: ?>
        <div></div>
      <?php endif; ?>

    </div>
    <!-- /.container -->
  </section>
  <!-- /.account-data -->


<?php else: ?>
  <div class="ended-cookie__error">
    <div class="container" style="padding-top: 100px; text-align: center;">
      <span>Доступ имеют только авторизованные пользователи</span><br>
      <span style="font-weight: 500;">
        <a href="login-page.php">Войти </a>
        <span>/</span>
        <a href="reg-page.php"> Зарегистрироваться</a>
      </span>
    </div>
  </div>
<?php endif; ?>


<?php
  // echo $arrr, '<br>';
  // $arrr = unserialize($arrr);

  // $ar = unserialize($arrr);
  // var_export($ar);
  // $num = $ar['two'] * 2;

  // echo '<br>', $ar['two'];
?>

<?php 
  include "components/connect-scripts.php";
  include "components/footer.php";
?>