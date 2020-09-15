<?php
  // include "components/head.php";
?>

<!-- <title>3D CALC | Главная</title>
</head>
<body> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D CALC | Редактор</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/editor.css?ver=5">
  <link rel="stylesheet" href="css/style.css?ver=6">
  <link rel="stylesheet" href="css/media.css?ver=2">

</head>

<body>

  <?php 
    include "components/header.php";
  ?>

  <svg class="d-none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    width="30px" height="30px" viewBox="0 0 31.357 31.357">
    <g id="q">
      <path d="M15.255,0c5.424,0,10.764,2.498,10.764,8.473c0,5.51-6.314,7.629-7.67,9.62c-1.018,1.481-0.678,3.562-3.475,3.562
  c-1.822,0-2.712-1.482-2.712-2.838c0-5.046,7.414-6.188,7.414-10.343c0-2.287-1.522-3.643-4.066-3.643
  c-5.424,0-3.306,5.592-7.414,5.592c-1.483,0-2.756-0.89-2.756-2.584C5.339,3.683,10.084,0,15.255,0z M15.044,24.406
  c1.904,0,3.475,1.566,3.475,3.476c0,1.91-1.568,3.476-3.475,3.476c-1.907,0-3.476-1.564-3.476-3.476
  C11.568,25.973,13.137,24.406,15.044,24.406z" />
    </g>
  </svg>

  <svg class="d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 0 163.861 163.861" style="enable-background:new 0 0 163.861 163.861;" xml:space="preserve">
    <g id="arrow">
      <path d="M34.857,3.613C20.084-4.861,8.107,2.081,8.107,19.106v125.637c0,17.042,11.977,23.975,26.75,15.509L144.67,97.275
		c14.778-8.477,14.778-22.211,0-30.686L34.857,3.613z" />
    </g>
  </svg>

  <div class="calc-wrap d-none d-lg-flex">
    <div id="wrap">

    <!-- <div class="save__btn" data-toggle="modal" data-target="#saveModal">Сохранить модель</div> -->

      <div class="tool tool__align" title="выровнить камеру">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
          xml:space="preserve">
          <g>
            <path d="M256,261.927c44.1,0,79.978-35.878,79.978-79.978S300.1,101.972,256,101.972c-44.1,0-79.978,35.878-79.978,79.978
         S211.9,261.927,256,261.927z M256,141.961c22.05,0,39.989,17.939,39.989,39.989S278.05,221.938,256,221.938
         s-39.989-17.939-39.989-39.989S233.95,141.961,256,141.961z" />
            <path d="M181.878,375.038l32.476,32.476c-44.767-2.974-85.791-10.74-118.339-22.601c-41.301-15.05-55.954-32.036-55.954-42.008
         c0-2.294,0.788-4.965,2.486-7.893c-9.07-11.12-15.8-24.219-19.429-38.543C4.155,313.892,0.071,331.23,0.071,342.905
         c0,12.162,4.421,30.467,25.485,48.613c13.721,11.822,32.82,22.241,56.767,30.967c37.476,13.656,84.6,22.382,135.495,25.298
         l-35.94,35.94L210.155,512l82.619-82.619l-82.619-82.619L181.878,375.038z" />
            <path d="M120.038,331.908h271.924c33.075,0,59.983-26.909,59.983-59.983V111.969c0-33.075-26.909-59.983-59.983-59.983h-37.414
         l-14.79-30.763C333.56,8.33,320.313,0,306.009,0H208.99c-14.304,0-27.551,8.33-33.749,21.221l-14.791,30.764h-40.413
         c-33.075,0-59.983,26.909-59.983,59.983v159.956C60.054,304.999,86.963,331.908,120.038,331.908z M100.043,111.969
         c0-11.025,8.969-19.994,19.994-19.994h42.011c14.304,0,27.551-8.33,33.749-21.221l14.791-30.764h93.823l14.79,30.763
         c6.197,12.892,19.445,21.222,33.749,21.222h39.012c11.025,0,19.994,8.969,19.994,19.994v159.956
         c0,11.025-8.97,19.994-19.994,19.994H120.038c-11.025,0-19.994-8.969-19.994-19.994V111.969z" />
            <path d="M488.882,296.47c-3.629,14.323-10.358,27.423-19.429,38.543c1.699,2.928,2.486,5.598,2.486,7.893
         c0,9.972-14.654,26.958-55.954,42.008c-26.552,9.675-58.742,16.629-94.004,20.479v40.189
         c40.187-4.106,77.147-11.965,107.695-23.097c23.946-8.727,43.046-19.146,56.767-30.967
         c21.064-18.147,25.485-36.452,25.485-48.614C511.929,331.23,507.845,313.892,488.882,296.47z" />
          </g>
        </svg>
      </div>

      <div class="tool tool__zoom in" title="увеличить">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
          style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <g>
            <path d="M497.938,430.063l-112-112c-0.313-0.313-0.637-0.607-0.955-0.909C404.636,285.403,416,248.006,416,208
     C416,93.313,322.695,0,208,0S0,93.313,0,208s93.305,208,208,208c40.007,0,77.404-11.364,109.154-31.018
     c0.302,0.319,0.596,0.643,0.909,0.955l112,112C439.43,507.313,451.719,512,464,512c12.281,0,24.57-4.688,33.938-14.063
     C516.688,479.203,516.688,448.797,497.938,430.063z M64,208c0-79.406,64.602-144,144-144s144,64.594,144,144
     c0,79.406-64.602,144-144,144S64,287.406,64,208z" />
            <path d="M272,176h-32v-32c0-17.672-14.328-32-32-32s-32,14.328-32,32v32h-32c-17.672,0-32,14.328-32,32s14.328,32,32,32h32v32
     c0,17.672,14.328,32,32,32s32-14.328,32-32v-32h32c17.672,0,32-14.328,32-32S289.672,176,272,176z" />
          </g>
        </svg>
      </div>

      <div class="tool tool__zoom out" title="уменьшить">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
          style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <g>
            <path d="M497.938,430.063l-112-112c-0.367-0.367-0.805-0.613-1.18-0.965C404.438,285.332,416,248.035,416,208
     C416,93.313,322.695,0,208,0S0,93.313,0,208s93.305,208,208,208c40.035,0,77.332-11.563,109.098-31.242
     c0.354,0.375,0.598,0.813,0.965,1.18l112,112C439.43,507.313,451.719,512,464,512c12.281,0,24.57-4.688,33.938-14.063
     C516.688,479.203,516.688,448.797,497.938,430.063z M64,208c0-79.406,64.602-144,144-144s144,64.594,144,144
     c0,79.406-64.602,144-144,144S64,287.406,64,208z" />
            <path
              d="M272,176H144c-17.672,0-32,14.328-32,32s14.328,32,32,32h128c17.672,0,32-14.328,32-32S289.672,176,272,176z" />
          </g>
        </svg>
      </div>

      <div class="tool tool__arrow up" title="вверх">
        <svg viewBox="0 0 163.861 163.861">
          <use xlink:href="#arrow">
        </svg>
      </div>

      <div class="tool tool__arrow down" title="вниз">
        <svg viewBox="0 0 163.861 163.861">
          <use xlink:href="#arrow">
        </svg>
      </div>

      <div class="tool tool__arrow left" title="влево">
        <svg viewBox="0 0 163.861 163.861">
          <use xlink:href="#arrow">
        </svg>
      </div>

      <div class="tool tool__arrow right" title="вправо">
        <svg viewBox="0 0 163.861 163.861">
          <use xlink:href="#arrow">
        </svg>
      </div>

    </div>

    <form class="panel" action="functions/save.php" method="POST">

      <!-- табы редактора -->
      <div class="tabs">

        <div class="row align-items-end panel__header-block flex-wrap">
          <div class="col-6">
            <div class="tabs__title">Выбор редактора:</div>
            <div class="tabs__caption">
              <div class="tabs__caption-item d-flex justify-content-center align-items-center active">КОНСТРУКЦИЯ</div>
              <div class="tabs__caption-item d-flex justify-content-center align-items-center">МАТЕРИАЛ</div>
            </div>
          </div>
          <!-- /.col-6 -->

          <div class="col-6 d-flex justify-content-center align-items-center flex-wrap">
            <div class="price__wrap">
              <div class="price">
                <span class="price_js"></span><span class="ruble">₽</span>
              </div>
              <div class="availabel">
                В наличии на складе
              </div>
              <div class="basket">
                Добавить в корзину
              </div>
            </div>
          </div>
          <!-- /.col-6 -->

          <nav class="col-12 d-flex mt-3 panel__nav">
            <ul class="d-flex flex-row panel__nav-list flex-wrap">
              <li><a href="#nav--main">Основные параметры</a></li>
              <li><a href="#nav--fill">Наполнение</a></li>
              <li><a href="#nav--door">Фасады и двери</a></li>
              <li><a href="#nav--services">Доп. услуги</a></li>
            </ul>
          </nav>
          <!-- /.panel__nav -->
        </div>
        <!-- /.row --> 

        <div class="panel__design tabs__content active">
          <div id="nav--main" class="panel__title mt-3">Основные параметры</div>
          <!-- Высота -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <span>Высота, мм</span>
            </div>
            <div class="col-7 flex">
              <input type="number" id="inputNumber_height" name="height" min="300" max="3000" value="2000">
              <input type="range" id="inputRange_height" min="300" max="3000" value="2000">
            </div>
          </div>

          <!-- Ширина -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <span>Ширина, мм</span>
            </div>
            <div class="col-7 flex">
              <input type="number" id="inputNumber_width" name="width" min="200" max="4000" value="2000">
              <input type="range" id="inputRange_width" min="200" max="4000" value="2000">
            </div>
          </div>

          <!-- Глубина -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <span>Глубина, мм</ы>
            </div>
            <div class="col-7 flex">
              <input type="number" id="inputNumber_depth" name="depth" min="100" max="1500" value="500">
              <input type="range" id="inputRange_depth" min="100" max="1500" value="500">
            </div>
          </div>

          <!-- Внешнее обрамление -->
          <div class="panel__section first container">

            <!-- Левая стойка -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="rack_l" type="checkbox" id="" value="rack_l">
                  Левая стойка
                </label>
              </div>
            </div>

            <!-- Правая стойка -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="rack_r" type="checkbox" id="" value="rack_r">
                  Правая стойка
                </label>
              </div>
            </div>

            <!-- Крыша -->
            <div class="row">
              <div class="col-5 flex-start">
                <label>
                  <input name="roof" type="checkbox" id="" value="roof">
                  Крыша
                </label>
              </div>
              <div class="col-7">
                <select name="roof_type" id="inputSelect_roof" class="flex">
                  <option value="roof_out">Крыша накладная</option>
                  <option value="roof_in">Крыша вкладная</option>
                </select>
              </div>
            </div>

            <!-- Козырёк -->
            <div class="row">
              <div class="col-5">
                <label id="label_visor">
                  <input name="visor" type="checkbox" id="" value="visor">
                  Козырёк
                </label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_visor" name="visor_shift" min="0" max="200" value="30">
                <input type="range" id="inputRange_visor" min="0" max="200" value="30">
              </div>
            </div>

            <!-- Козырёк боковой -->
            <div class="row">
              <div class="col-5">
                <label id="label_visor_side">
                  <input name="visor_side" type="checkbox" id="" value="visor_side">
                  Козырёк боковой
                </label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_visor_side" name="visor_side_shift" min="0" max="200" value="30">
                <input type="range" id="inputRange_visor_side" min="0" max="200" value="30">
              </div>
            </div>

            <!-- Разрезать крышу -->
            <div class="row">
              <div class="col-12">
                <label id="label_roof_cut">
                  <input name="roof_cut" type="checkbox" id="" value="roof_cut">
                  Разрезать крышу
                </label>
              </div>
            </div>

            <!-- Передняя -->
            <div class="row">
              <div class="col-5">
                <label id="label_roof_f">
                  <input name="roof_f" type="checkbox" id="" value="roof_f">
                  Передняя
                </label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_roof_f" name="roof_f_shift" min="30" max="150" value="50">
                <input type="range" id="inputRange_roof_f" min="30" max="150" value="50">
              </div>
            </div>

            <!-- Задняя -->
            <div class="row">
              <div class="col-5">
                <label id="label_roof_b">
                  <input name="roof_b" type="checkbox" id="" value="roof_b">
                  Задняя
                </label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_roof_b" name="roof_b_shift" min="30" max="150" value="50">
                <input type="range" id="inputRange_roof_b" min="30" max="150" value="50">
              </div>
            </div>

            <!-- Дно -->
            <div class="row" id="row_bottom">
              <div class="col-5 flex-start">
                <label>
                  <input name="bottom" type="checkbox" id="" value="bottom">
                  Дно
                </label>
              </div>
              <div class="col-7">
                <select name="bottom_type" id="inputSelect_bottom" class="flex">
                  <option value="bottom_in" selected>Дно вкладное</option>
                  <option value="bottom_out">Дно накладное</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Антресоль -->
          <div class="panel__section second container">

            <!-- Антресоль -->
            <div class="row">
              <div class="col-6">
                <label>
                  <input name="entresol" type="checkbox" id="" value="entresol">
                  Антресоль
                </label>
              </div>
            </div>

            <!-- Высота -->
            <div class="row">
              <div class="col-5">
                <label id="label_entresol">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_entresol" name="entresol_height" min="0" max="1500" value="570">
                <input type="range" id="inputRange_entresol" min="0" max="1500" value="570">
              </div>
            </div>

          </div>

          <!-- Наполнение -->
          <div id="nav--fill" class="panel__title mt-3">Наполнение</div>


          <!-- Количество стоек антресоли -->
          <div class="row">
            <div class="col-7 flex-start">
              <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label id="label_entresol_amount">Количество стоек антресоли:</label>
            </div>
            <div class="col-5 flex">
              <input type="number" id="inputNumber_entresol_amount" name="entresol_amount" min="0" max="5" value="1">
            </div>
          </div>
          <!-- Количество стоек низа -->
          <div class="row">
            <div class="col-7 flex-start">
              <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label id="label_lower_amount">Количество стоек низа:</label>
            </div>
            <div class="col-5 flex">
              <input type="number" id="inputNumber_lower_amount" name="lower_amount" min="0" max="5" value="2">
            </div>
          </div>

          <!-- Секция 1 -->
          <div class="panel__section box__fill box__fill--first container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_1" type="checkbox" id="" value="box_width_auto_1">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_1">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_1" name="box_width_1" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_1" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row mt-3">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_1" id="inputSelect_fill_1" class="flex">
                  <option value="box_fill_no_1">Ничего</option>
                  <option value="box_fill_shelf_1">Полки</option>
                  <option value="box_fill_boxes_1">Ящики</option>
                  <option value="box_fill_rod_1">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_1">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_1" type="number" id="inputNumber_fill_amount_1" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_1_row">
              <div class="col-12">
                <div class="fill_size_1">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_1" type="checkbox" id="" value="box_wall_1">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_1" id="inputSelect_door_1" class="flex">
                  <option value="box_door_no_1">Без дверей</option>
                  <option value="box_door_one_left_1">1 дверь, петли слева</option>
                  <option value="box_door_one_right_1">1 дверь, петли справа</option>
                  <option value="box_door_two_1">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 2 -->
          <div class="panel__section box__fill box__fill--second container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_2" type="checkbox" id="" value="box_width_auto_2">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_2">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_2" name="box_width_2" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_2" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_2" id="inputSelect_fill_2" class="flex">
                  <option value="box_fill_no_2">Ничего</option>
                  <option value="box_fill_shelf_2">Полки</option>
                  <option value="box_fill_boxes_2">Ящики</option>
                  <option value="box_fill_rod_2">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_2">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_2" type="number" id="inputNumber_fill_amount_2" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_2_row">
              <div class="col-12">
                <div class="fill_size_2">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_2" type="checkbox" id="" value="box_wall_2">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_2" id="inputSelect_door_2" class="flex">
                  <option value="box_door_no_2">Без дверей</option>
                  <option value="box_door_one_left_2">1 дверь, петли слева</option>
                  <option value="box_door_one_right_2">1 дверь, петли справа</option>
                  <option value="box_door_two_2">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 3 -->
          <div class="panel__section box__fill box__fill--third container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_3" type="checkbox" id="" value="box_width_auto_3">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_3">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_3" name="box_width_3" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_3" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_3" id="inputSelect_fill_3" class="flex">
                  <option value="box_fill_no_3">Ничего</option>
                  <option value="box_fill_shelf_3">Полки</option>
                  <option value="box_fill_boxes_3">Ящики</option>
                  <option value="box_fill_rod_3">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_3">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_3" type="number" id="inputNumber_fill_amount_3" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_3_row">
              <div class="col-12">
                <div class="fill_size_3">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_3" type="checkbox" id="" value="box_wall_3">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_3" id="inputSelect_door_3" class="flex">
                  <option value="box_door_no_3">Без дверей</option>
                  <option value="box_door_one_left_3">1 дверь, петли слева</option>
                  <option value="box_door_one_right_3">1 дверь, петли справа</option>
                  <option value="box_door_two_3">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 4 -->
          <div class="panel__section box__fill box__fill--fourth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_4" type="checkbox" id="" value="box_width_auto_4">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_4">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_4" name="box_width_4" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_4" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_4" id="inputSelect_fill_4" class="flex">
                  <option value="box_fill_no_4">Ничего</option>
                  <option value="box_fill_shelf_4">Полки</option>
                  <option value="box_fill_boxes_4">Ящики</option>
                  <option value="box_fill_rod_4">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_4">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_4" type="number" id="inputNumber_fill_amount_4" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_4_row">
              <div class="col-12">
                <div class="fill_size_4">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_4" type="checkbox" id="" value="box_wall_4">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_4" id="inputSelect_door_4" class="flex">
                  <option value="box_door_no_4">Без дверей</option>
                  <option value="box_door_one_left_4">1 дверь, петли слева</option>
                  <option value="box_door_one_right_4">1 дверь, петли справа</option>
                  <option value="box_door_two_4">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 5 -->
          <div class="panel__section box__fill box__fill--fifth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_5" type="checkbox" id="" value="box_width_auto_5">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_5">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_5" name="box_width_5" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_5" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_5" id="inputSelect_fill_5" class="flex">
                  <option value="box_fill_no_5">Ничего</option>
                  <option value="box_fill_shelf_5">Полки</option>
                  <option value="box_fill_boxes_5">Ящики</option>
                  <option value="box_fill_rod_5">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_5">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_5" type="number" id="inputNumber_fill_amount_5" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_5_row">
              <div class="col-12">
                <div class="fill_size_5">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_5" type="checkbox" id="" value="box_wall_5">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_5" id="inputSelect_door_5" class="flex">
                  <option value="box_door_no_5">Без дверей</option>
                  <option value="box_door_one_left_5">1 дверь, петли слева</option>
                  <option value="box_door_one_right_5">1 дверь, петли справа</option>
                  <option value="box_door_two_5">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 6 -->
          <div class="panel__section box__fill box__fill--sixth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_6" type="checkbox" id="" value="box_width_auto_6">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_6">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_6" name="box_width_6" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_6" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_6" id="inputSelect_fill_6" class="flex">
                  <option value="box_fill_no_6">Ничего</option>
                  <option value="box_fill_shelf_6">Полки</option>
                  <option value="box_fill_boxes_6">Ящики</option>
                  <option value="box_fill_rod_6">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_6">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_6" type="number" id="inputNumber_fill_amount_6" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_6_row">
              <div class="col-12">
                <div class="fill_size_6">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_6" type="checkbox" id="" value="box_wall_6">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_6" id="inputSelect_door_6" class="flex">
                  <option value="box_door_no_6">Без дверей</option>
                  <option value="box_door_one_left_6">1 дверь, петли слева</option>
                  <option value="box_door_one_right_6">1 дверь, петли справа</option>
                  <option value="box_door_two_6">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 7 -->
          <div class="panel__section box__fill box__fill--seventh container d-none">

            <!-- Разделить по горизонтали -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_split_7" type="checkbox" id="" value="box_split_7">
                  Разделить по горизонтали
                </label>
              </div>
            </div>

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_7" type="checkbox" id="" value="box_width_auto_7">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_7">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_7" name="box_width_7" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_7" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_7" id="inputSelect_fill_7" class="flex">
                  <option value="box_fill_no_7">Ничего</option>
                  <option value="box_fill_shelf_7">Полки</option>
                  <option value="box_fill_boxes_7">Ящики</option>
                  <option value="box_fill_rod_7">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_7">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_7" type="number" id="inputNumber_fill_amount_7" min="0" max="5" value="3">
              </div>
            </div>

            <div class="row fill_size_7_row">
              <div class="col-12">
                <div class="fill_size_7">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_7" type="checkbox" id="" value="box_wall_7">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_7" id="inputSelect_door_7" class="flex">
                  <option value="box_door_no_7">Без дверей</option>
                  <option value="box_door_one_left_7">1 дверь, петли слева</option>
                  <option value="box_door_one_right_7">1 дверь, петли справа</option>
                  <option value="box_door_two_7">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 13 -->
          <div class="panel__section box__fill box__fill--thirteen container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_13" type="checkbox" id="" value="box_width_auto_13">
                  Автоматическая высота
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_13">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_13" name="box_width_13" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_13" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_13" id="inputSelect_fill_13" class="flex">
                  <option value="box_fill_no_13">Ничего</option>
                  <option value="box_fill_shelf_13">Полки</option>
                  <option value="box_fill_boxes_13">Ящики</option>
                  <option value="box_fill_rod_13">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_13">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_13" type="number" id="inputNumber_fill_amount_13" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_13_row">
              <div class="col-12">
                <div class="fill_size_13">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_13" type="checkbox" id="" value="box_wall_13">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_13" id="inputSelect_door_13" class="flex">
                  <option value="box_door_no_13">Без дверей</option>
                  <option value="box_door_one_left_13">1 дверь, петли слева</option>
                  <option value="box_door_one_right_13">1 дверь, петли справа</option>
                  <option value="box_door_two_13">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 8 -->
          <div class="panel__section box__fill box__fill--eighth container d-none">

            <!-- Разделить по горизонтали -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_split_8" type="checkbox" id="" value="box_split_8">
                  Разделить по горизонтали
                </label>
              </div>
            </div>

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_8" type="checkbox" id="" value="box_width_auto_8">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_8">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_8" name="box_width_8" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_8" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_8" id="inputSelect_fill_8" class="flex">
                  <option value="box_fill_no_8">Ничего</option>
                  <option value="box_fill_shelf_8">Полки</option>
                  <option value="box_fill_boxes_8">Ящики</option>
                  <option value="box_fill_rod_8">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_8">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_8" type="number" id="inputNumber_fill_amount_8" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_8_row">
              <div class="col-12">
                <div class="fill_size_8">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_8" type="checkbox" id="" value="box_wall_8">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_8" id="inputSelect_door_8" class="flex">
                  <option value="box_door_no_8">Без дверей</option>
                  <option value="box_door_one_left_8">1 дверь, петли слева</option>
                  <option value="box_door_one_right_8">1 дверь, петли справа</option>
                  <option value="box_door_two_8">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 14 -->
          <div class="panel__section box__fill box__fill--fourteenth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_14" type="checkbox" id="" value="box_width_auto_14">
                  Автоматическая высота
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_14">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_14" name="box_width_14" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_14" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_14" id="inputSelect_fill_14" class="flex">
                  <option value="box_fill_no_14">Ничего</option>
                  <option value="box_fill_shelf_14">Полки</option>
                  <option value="box_fill_boxes_14">Ящики</option>
                  <option value="box_fill_rod_14">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_14">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_14" type="number" id="inputNumber_fill_amount_14" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_14_row">
              <div class="col-12">
                <div class="fill_size_14">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_14" type="checkbox" id="" value="box_wall_14">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_14" id="inputSelect_door_14" class="flex">
                  <option value="box_door_no_14">Без дверей</option>
                  <option value="box_door_one_left_14">1 дверь, петли слева</option>
                  <option value="box_door_one_right_14">1 дверь, петли справа</option>
                  <option value="box_door_two_14">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 9 -->
          <div class="panel__section box__fill box__fill--ninth container d-none">

            <!-- Разделить по горизонтали -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_split_9" type="checkbox" id="" value="box_split_9">
                  Разделить по горизонтали
                </label>
              </div>
            </div>

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_9" type="checkbox" id="" value="box_width_auto_9">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_9">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_9" name="box_width_9" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_9" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_9" id="inputSelect_fill_9" class="flex">
                  <option value="box_fill_no_9">Ничего</option>
                  <option value="box_fill_shelf_9">Полки</option>
                  <option value="box_fill_boxes_9">Ящики</option>
                  <option value="box_fill_rod_9">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_9">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_9" type="number" id="inputNumber_fill_amount_9" min="0" max="5" value="3">
              </div>
            </div>

            <div class="row fill_size_9_row">
              <div class="col-12">
                <div class="fill_size_9">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_9" type="checkbox" id="" value="box_wall_9">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_9" id="inputSelect_door_9" class="flex">
                  <option value="box_door_no_9">Без дверей</option>
                  <option value="box_door_one_left_9">1 дверь, петли слева</option>
                  <option value="box_door_one_right_9">1 дверь, петли справа</option>
                  <option value="box_door_two_9">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 15 -->
          <div class="panel__section box__fill box__fill--fifteenth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_15" type="checkbox" id="" value="box_width_auto_15">
                  Автоматическая высота
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_15">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_15" name="box_width_15" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_15" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_15" id="inputSelect_fill_15" class="flex">
                  <option value="box_fill_no_15">Ничего</option>
                  <option value="box_fill_shelf_15">Полки</option>
                  <option value="box_fill_boxes_15">Ящики</option>
                  <option value="box_fill_rod_15">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_15">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_15" type="number" id="inputNumber_fill_amount_15" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_15_row">
              <div class="col-12">
                <div class="fill_size_15">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_15" type="checkbox" id="" value="box_wall_15">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_15" id="inputSelect_door_15" class="flex">
                  <option value="box_door_no_15">Без дверей</option>
                  <option value="box_door_one_left_15">1 дверь, петли слева</option>
                  <option value="box_door_one_right_15">1 дверь, петли справа</option>
                  <option value="box_door_two_15">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 10 -->
          <div class="panel__section box__fill box__fill--tenth container d-none">

            <!-- Разделить по горизонтали -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_split_10" type="checkbox" id="" value="box_split_10">
                  Разделить по горизонтали
                </label>
              </div>
            </div>

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_10" type="checkbox" id="" value="box_width_auto_10">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_10">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_10" name="box_width_10" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_10" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_10" id="inputSelect_fill_10" class="flex">
                  <option value="box_fill_no_10">Ничего</option>
                  <option value="box_fill_shelf_10">Полки</option>
                  <option value="box_fill_boxes_10">Ящики</option>
                  <option value="box_fill_rod_10">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_10">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_10" type="number" id="inputNumber_fill_amount_10" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_10_row">
              <div class="col-12">
                <div class="fill_size_10">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_10" type="checkbox" id="" value="box_wall_10">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_10" id="inputSelect_door_10" class="flex">
                  <option value="box_door_no_10">Без дверей</option>
                  <option value="box_door_one_left_10">1 дверь, петли слева</option>
                  <option value="box_door_one_right_10">1 дверь, петли справа</option>
                  <option value="box_door_two_10">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 16 -->
          <div class="panel__section box__fill box__fill--sixteenth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_16" type="checkbox" id="" value="box_width_auto_16">
                  Автоматическая высота
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_16">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_16" name="box_width_16" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_16" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_16" id="inputSelect_fill_16" class="flex">
                  <option value="box_fill_no_16">Ничего</option>
                  <option value="box_fill_shelf_16">Полки</option>
                  <option value="box_fill_boxes_16">Ящики</option>
                  <option value="box_fill_rod_16">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_16">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_16" type="number" id="inputNumber_fill_amount_16" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_16_row">
              <div class="col-12">
                <div class="fill_size_16">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_16" type="checkbox" id="" value="box_wall_16">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_16" id="inputSelect_door_16" class="flex">
                  <option value="box_door_no_16">Без дверей</option>
                  <option value="box_door_one_left_16">1 дверь, петли слева</option>
                  <option value="box_door_one_right_16">1 дверь, петли справа</option>
                  <option value="box_door_two_16">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 11 -->
          <div class="panel__section box__fill box__fill--eleventh container d-none">

            <!-- Разделить по горизонтали -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_split_11" type="checkbox" id="" value="box_split_11">
                  Разделить по горизонтали
                </label>
              </div>
            </div>

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_11" type="checkbox" id="" value="box_width_auto_11">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_11">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_11" name="box_width_11" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_11" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_11" id="inputSelect_fill_11" class="flex">
                  <option value="box_fill_no_11">Ничего</option>
                  <option value="box_fill_shelf_11">Полки</option>
                  <option value="box_fill_boxes_11">Ящики</option>
                  <option value="box_fill_rod_11">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_11">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_11" type="number" id="inputNumber_fill_amount_11" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_11_row">
              <div class="col-12">
                <div class="fill_size_11">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_11" type="checkbox" id="" value="box_wall_11">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_11" id="inputSelect_door_11" class="flex">
                  <option value="box_door_no_11">Без дверей</option>
                  <option value="box_door_one_left_11">1 дверь, петли слева</option>
                  <option value="box_door_one_right_11">1 дверь, петли справа</option>
                  <option value="box_door_two_11">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 17 -->
          <div class="panel__section box__fill box__fill--seventeenth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_17" type="checkbox" id="" value="box_width_auto_17">
                  Автоматическая высота
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_17">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_17" name="box_width_17" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_17" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_17" id="inputSelect_fill_17" class="flex">
                  <option value="box_fill_no_17">Ничего</option>
                  <option value="box_fill_shelf_17">Полки</option>
                  <option value="box_fill_boxes_17">Ящики</option>
                  <option value="box_fill_rod_17">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_17">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_17" type="number" id="inputNumber_fill_amount_17" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_17_row">
              <div class="col-12">
                <div class="fill_size_17">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_17" type="checkbox" id="" value="box_wall_17">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_17" id="inputSelect_door_17" class="flex">
                  <option value="box_door_no_17">Без дверей</option>
                  <option value="box_door_one_left_17">1 дверь, петли слева</option>
                  <option value="box_door_one_right_17">1 дверь, петли справа</option>
                  <option value="box_door_two_17">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 12 -->
          <div class="panel__section box__fill box__fill--twelfth container d-none">

            <!-- Разделить по горизонтали -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_split_12" type="checkbox" id="" value="box_split_12">
                  Разделить по горизонтали
                </label>
              </div>
            </div>

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_12" type="checkbox" id="" value="box_width_auto_12">
                  Автоматическая ширина
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_12">Ширина, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_12" name="box_width_12" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_12" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_12" id="inputSelect_fill_12" class="flex">
                  <option value="box_fill_no_12">Ничего</option>
                  <option value="box_fill_shelf_12">Полки</option>
                  <option value="box_fill_boxes_12">Ящики</option>
                  <option value="box_fill_rod_12">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_12">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_12" type="number" id="inputNumber_fill_amount_12" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_12_row">
              <div class="col-12">
                <div class="fill_size_12">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_12" type="checkbox" id="" value="box_wall_12">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_12" id="inputSelect_door_12" class="flex">
                  <option value="box_door_no_12">Без дверей</option>
                  <option value="box_door_one_left_12">1 дверь, петли слева</option>
                  <option value="box_door_one_right_12">1 дверь, петли справа</option>
                  <option value="box_door_two_12">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Секция 18 -->
          <div class="panel__section box__fill box__fill--eighteenth container d-none">

            <!-- Автоматическая ширина -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_width_auto_18" type="checkbox" id="" value="box_width_auto_18">
                  Автоматическая высота
                </label>
              </div>
            </div>

            <!-- Ширина секции -->
            <div class="row">
              <div class="col-5">
                <label id="label_width_18">Высота, мм</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_width_box_18" name="box_width_18" min="0" max="450" value="300">
                <input type="range" id="inputRange_width_box_18" min="0" max="450" value="300">
              </div>
            </div>

            <!-- Наполнение секции -->
            <div class="row">
              <div class="col-5">
                <label>Наполнение</label>
              </div>
              <div class="col-7">
                <select name="box_fill_type_18" id="inputSelect_fill_18" class="flex">
                  <option value="box_fill_no_18">Ничего</option>
                  <option value="box_fill_shelf_18">Полки</option>
                  <option value="box_fill_boxes_18">Ящики</option>
                  <option value="box_fill_rod_18">Штанга</option>
                </select>
              </div>
            </div>

            <!-- Количество полок, ящиков -->
            <div class="row">
              <div class="col-5">
                <label id="label_fill_amount_18">Количество:</label>
              </div>
              <div class="col-7 flex">
                <input name="box_fill_amount_18" type="number" id="inputNumber_fill_amount_18" min="0" max="5" value="1">
              </div>
            </div>

            <div class="row fill_size_18_row">
              <div class="col-12">
                <div class="fill_size_18">

                </div>
              </div>
            </div>

            <!-- Силовой элемент -->
            <div class="row">
              <div class="col-12">
                <label>
                  <input name="box_wall_18" type="checkbox" id="" value="box_wall_18">
                  Силовой элемент
                </label>
              </div>
            </div>

            <!-- Двери секции -->
            <div class="row">
              <div class="col-5">
                <label>Двери</label>
              </div>
              <div class="col-7">
                <select name="box_door_type_18" id="inputSelect_door_18" class="flex">
                  <option value="box_door_no_18">Без дверей</option>
                  <option value="box_door_one_left_18">1 дверь, петли слева</option>
                  <option value="box_door_one_right_18">1 дверь, петли справа</option>
                  <option value="box_door_two_18">2 двери</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Фасады и двери -->
          <div id="nav--door" class="panel__title mt-3">Фасады и двери</div>


            <!-- Вид дверей -->
            <div class="row">
              <div class="col-5">
                <label>Вид дверей</label>
              </div>
              <div class="col-7">
                <select name="door_type" id="inputSelect_door" class="flex">
                  <option value="door_no">Без дверей</option>
                  <option value="door_sliding">Сдвижные</option>
                  <option value="door_swing">Распашные</option>
                </select>
              </div>
            </div>

            <!-- Количество дверей -->
            <div class="row">
              <div class="col-5">
                <label id="label_door_sum">Количество дверей</label>
              </div>
              <div class="col-7">
                <select name="door_sum" id="inputSelect_door_sum" class="flex">
                  <option value="door_two_sl">2 двери</option>
                  <option value="door_three_sl">3 двери</option>
                  <option value="door_four_two_sl">4 двери, 2 перекрытия</option>
                  <option value="door_four_three_sl">4 двери, 3 перекрытия</option>
                  <option value="door_one_left_sw">1 дверь, петли слева</option>
                  <option value="door_one_right_sw">1 дверь, петли справа</option>
                  <option value="door_two_sw">2 двери, распашные</option>
                </select>
              </div>
            </div>

            <!-- Тип фасадов -->
            <div class="row">
              <div class="col-5 flex-start">
                <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                  <svg viewBox="0 0 31.357 31.357">
                    <use xlink:href="#q">
                  </svg>
                </div>
                <label id="label_door_facade">Тип фасадов</label>
              </div>
              <div class="col-7">
                <select name="door_facade" id="inputSelect_door_facade" class="flex">
                  <option value="door_in">Вкладной фасад</option>
                  <option value="door_out">Накладной фасад</option>
                </select>
              </div>
            </div>

            <!-- Тип ручки -->
            <div class="row">
              <div class="col-5 flex-start">
                <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                  <svg viewBox="0 0 31.357 31.357">
                    <use xlink:href="#q">
                  </svg>
                </div>
                <label id="label_door_hand">Тип ручки</label>
              </div>
              <div class="col-7">
                <select name="hand_type" id="inputSelect_door_hand" class="flex">
                  <option value="hand_no">Без ручки</option>
                  <option value="hand_bracket">Ручка "Скоба"</option>
                  <option value="hand_shell">Вкладная ручка "Ракушка"</option>
                  <option value="hand_cut">Вырез</option>
                </select>
              </div>
            </div>


          <!-- Цоколь -->
          <div class="panel__section third base container">
            <button type="button" id="btn_bottom" class="btn disable_btn btn-secondary d-none" data-toggle="tooltip"
              data-placement="top" title='Для отображения включите пункт "Дно" -> "Дно вкладное"'> Нет цоколя
            </button>

            <!-- Передний цоколь -->
            <div class="row">
              <div class="col-6">
                <label>
                  <input name="base_f" type="checkbox" id="" value="base_f">
                  Передний цоколь
                </label>
              </div>
            </div>

            <!-- Заглубление переднего цоколя -->
            <div class="row">
              <div class="col-5">
                <label id="label_base_f">Заглубление переднего цоколя</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_base_f" name="base_f_shift" min="0" max="150" value="30">
                <input type="range" id="inputRange_base_f" min="0" max="150" value="30">
              </div>
            </div>

            <!-- Задний цоколь -->
            <div class="row">
              <div class="col-6">
                <label id="label_base_b_check">
                  <input name="base_b" type="checkbox" id="" value="base_b">
                  Задний цоколь
                </label>
              </div>
            </div>

            <!-- Заглубление заднего цоколя -->
            <div class="row">
              <div class="col-5">
                <label id="label_base_b">Заглубление заднего цоколя</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_base_b" name="base_b_shift" min="0" max="150" value="30">
                <input type="range" id="inputRange_base_b" min="0" max="150" value="30">
              </div>
            </div>

            <!-- Высота цоколя -->
            <div class="row">
              <div class="col-5">
                <label id="label_base_height">Высота цоколя</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_base_height" name="base_height" min="0" max="150" value="20">
                <input type="range" id="inputRange_base_height" min="0" max="150" value="20">
              </div>
            </div>

            <!-- Высота пола -->
            <div class="row">
              <div class="col-5">
                <label id="label_floor_height">Высота пола</label>
              </div>
              <div class="col-7 flex">
                <input type="number" id="inputNumber_floor_height" name="floor_height" min="0" max="100" value="20">
                <input type="range" id="inputRange_floor_height" min="0" max="100" value="20">
              </div>
            </div>

          </div>

          <!-- Дополнительно -->
          <div class="panel__section sixth container">

            <!-- высота ножек -->
            <div class="row">
              <div class="col-5 flex-start">
                <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                  <svg viewBox="0 0 31.357 31.357">
                    <use xlink:href="#q">
                  </svg>
                </div>
                <label>Высота ножек</label>
              </div>
              <div class="col-7">
                <select name="legs_type" id="inputSelect_legs" class="flex">
                  <option value="legs_no">Без ножек</option>
                  <option value="legs_85">8.5мм</option>
                  <option value="legs_100">100мм</option>
                  <option value="legs_120">120мм</option>
                  <option value="legs_150">150мм</option>
                  <option value="legs_rollers">Ролики</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Задняя стенка -->
          <div class="panel__section fourth container">

            <!-- Стенка -->
            <div class="row">
              <div class="col-12 flex-start">
                <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                  <svg viewBox="0 0 31.357 31.357">
                    <use xlink:href="#q">
                  </svg>
                </div>
                <label>
                  <input name="wall" type="checkbox" id="" value="wall">
                  <span class="label__text">Задняя стенка ДВП/ХДФ</span>
                </label>
              </div>
            </div>

            <!-- Целая стенка -->
            <div class="row">
              <div class="col-12 flex-start">
                <div class="q mt-1" data-toggle="modal" data-target="#qModal">
                  <svg viewBox="0 0 31.357 31.357">
                    <use xlink:href="#q">
                  </svg>
                </div>
                <label>
                  <input name="wall_full" type="checkbox" id="" value="wall_full">
                  <span class="label__text">Цельная задняя стенка из ДСП</span>
                </label>
              </div>
            </div>

            <!-- Резать стенку -->
            <div class="row">
              <div class="col-12">
                <label id="label_wall_cut">
                  <input name="wall_cut" type="checkbox" id="" value="wall_cut">
                  <span class="label__text">Резать ДВП/ХДФ на блоки для упрощения подъема на этаж</span>
                </label>
              </div>
            </div>
          </div>

          <!-- Дополнительные услуги -->
          <div id="nav--services" class="panel__title mt-3">Дополнительные услуги</div>

          <!-- Сборка -->
          <div class="row">
            <div class="col-12">
              <label id="label_">
                <input name="assembly" type="checkbox" id="" value="assembly">
                <span class="label__text">Сборка (20% от стоимости)</span>
                <a href="#" class="badge__assembly badge badge-secondary ml-3">
                  <span class="badge__assembly--span"></span>
                  <span class="">₽</span>
                </a>
              </label>
            </div>
          </div>

          <!-- Доставка -->
          <div class="row">
            <div class="col-5">
              <label id="label_delivery">Доставка, км от центра города</label>
            </div>
            <div class="col-7 flex">
              <input type="number" id="inputNumber_delivery" name="delivery" min="0" max="100" value="20">
              <input type="range" id="inputRange_delivery" min="0" max="100" value="20">
            </div>
          </div>

          <!-- Подъём -->
          <div class="row">
            <div class="col-5">
              <label id="label_rise">Подъём, этаж</label>
            </div>
            <div class="col-7 flex">
              <input type="number" id="inputNumber_rise" name="rise" min="0" max="50" value="5">
            </div>
          </div>

          <!-- Грузовой лифт -->
          <div class="row mb-5">
            <div class="col-12">
              <label id="label_">
                <input name="elevator" type="checkbox" id="" value="elevator">
                <span class="label__text">Грузовой лифт</span>
              </label>
            </div>
          </div>

          <!-- <div class="panel__material"></div> -->


        </div>
        <!-- /.panel__design -->

        <div class="panel__material tabs__content">

          <!-- Отображение материала -->
          <div class="row">
            <div class="col-12">
              <label>
                <input type="checkbox" id="" value="material-show">
                <span style="font-weight: bold;">Отображение материала</span>
              </label>
            </div>
          </div>

          <!-- Материал каркаса -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Каркас:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialMain" class="flex">
                <option disabled>- - - Дерево - - -</option>
                <option value="акация_лэйклэнд">Акация лэйклэнд</option>
                <option value="арабеска">Арабеска</option>
                <option value="баменда_венге_тёмный" selected>Баменда венге</option>
                <option value="береза_майнау">Береза майнау</option>
                <option value="бук">Бук</option>
                <option value="бук_бавария">Бук бавария</option>
                <option value="бук_бавария_511">Бук бавария 511</option>
                <option value="бук_бавария_светлый">Бук бавария светлый</option>
                <option value="бук_кантри">Бук кантри</option>
                <option value="бук_натуральный">Бук натуральный</option>
                <option value="бук_тироль">Бук тироль</option>
                <option value="бук_эльмау">Бук эльмау</option>
                <option value="венге">Венге</option>
                <option value="венге_854">Венге 854</option>
                <option value="венге_аруба">Венге аруба</option>
                <option value="венге_мали">Венге мали</option>
                <option value="венге_тёмный">Венге тёмный</option>
                <option value="вишня">Вишня</option>
                <option value="вишня_верона">Вишня верона</option>
                <option value="вишня_виктория">Вишня виктория</option>
                <option value="вишня_локарно">Вишня локарно</option>
                <option value="вишня_ломбарно">Вишня ломбарно</option>
                <option value="вишня_оксфорд">Вишня оксфорд</option>
                <option value="вишня_оксфорд_тёмный">Вишня оксфорд тёмный</option>
                <option value="вишня_скандинавская">Вишня скандинавская</option>
                <option value="вудлайн_мокко">Вудлайн мокко</option>
                <option value="вяз_тоссини">Вяз тоссини</option>
                <option value="гасиенда_белый">Гасиенда белая</option>
                <option value="гикори">Гикори</option>
                <option value="груша">Груша</option>
                <option value="груша_тирано">Груша тирано</option>
                <option value="древесина_аттик">Древесина аттик</option>
                <option value="древесина_белая">Древесина белая</option>
                <option value="древесина_графит">Древесина графит</option>
                <option value="дрифтвуд">Дрифтвуд</option>
                <option value="дуб">Дуб</option>
                <option value="дуб_133">Дуб 133</option>
                <option value="дуб_156">Дуб 156</option>
                <option value="дуб_антик">Дуб антик</option>
                <option value="дуб_аризона">Дуб аризона</option>
                <option value="дуб_бардолино">Дуб бардолино</option>
                <option value="дуб_бардолино_серый">Дуб бардолино серый</option>
                <option value="дуб_венге">Дуб венге</option>
                <option value="дуб_венге_140">Дуб венге 140</option>
                <option value="дуб_галифакс">Дуб галифакс</option>
                <option value="дуб_галифакс_натуральный">Дуб галифакс натуральный</option>
                <option value="дуб_галифакс_табак">Дуб галифакс табак</option>
                <option value="дуб_гладстоун">Дуб гладстоун</option>
                <option value="дуб_давос">Дуб давос</option>
                <option value="дуб_кантри">Дуб кантри</option>
                <option value="дуб_кендал">Дуб кендал</option>
                <option value="дуб_корбридж">Дуб корбридж</option>
                <option value="дуб_кремона">Дуб кремона</option>
                <option value="дуб_молочный">Дуб молочный</option>
                <option value="дуб_небраска">Дуб небраска</option>
                <option value="дуб_пастельный">Дуб пастельный</option>
                <option value="дуб_сафари">Дуб сафари</option>
                <option value="дуб_светлый">Дуб светлый</option>
                <option value="дуб_седан">Дуб седан</option>
                <option value="дуб_скальный">Дуб скальный</option>
                <option value="дуб_соном">Дуб соном</option>
                <option value="дуб_сорано">Дуб сорано</option>
                <option value="дуб_тёмный">Дуб тёмный</option>
                <option value="дуб_феррара">Дуб феррара</option>
                <option value="дуб_шамони">Дуб шамони</option>
                <option value="дуб_шамони_светлый">Дуб шамони светлый</option>
                <option value="дуб_шато">Дуб шато</option>
                <option value="дуб_шато_серый">Дуб шато серый</option>
                <option value="дуб_ясный">Дуб ясный</option>
                <option value="зебрано_песочный">Зебрано песочный</option>
                <option value="зебрано_серый">Зебрано серый</option>
                <option value="кальвадос">Кальвадос</option>
                <option value="кальвадос_натуральный">Кальвадос натуральный</option>
                <option value="кашемир">Кашемир</option>
                <option value="клен">Клен</option>
                <option value="клен_канадский">Клен канадский</option>
                <option value="клен_медовый">Клен медовый</option>
                <option value="клен_сахарный">Клен сахарный</option>
                <option value="клен_светлый">Клен светлый</option>
                <option value="клён_танзай">Клён танзай</option>
                <option value="клен_штанберг">Клен штанберг</option>
                <option value="кокоболо">Кокоболо</option>
                <option value="лен">Лен</option>
                <option value="лиственница">Лиственница</option>
                <option value="лиственница_горная">Лиственница горная</option>
                <option value="лиственница_коричневая">Лиственница коричневая</option>
                <option value="лиственница_светлая">Лиственница светлая</option>
                <option value="макассар">Макассар</option>
                <option value="махагон">Махагон</option>
                <option value="махагон_512">Махагон_512</option>
                <option value="махагон_королевский">Махагон королевский</option>
                <option value="мерано">Мерано</option>
                <option value="моринга">Моринга</option>
                <option value="ольха">Ольха</option>
                <option value="ольха_513">Ольха 513</option>
                <option value="ольха_красный">Ольха красная</option>
                <option value="орех">Орех</option>
                <option value="орех_аида">Орех аида</option>
                <option value="орех_дижон">Орех дижон</option>
                <option value="орех_европейский">Орех европейский</option>
                <option value="орех_итальянский">Орех итальянский</option>
                <option value="орех_милано">Орех милано</option>
                <option value="орех_миланский">Орех миланский</option>
                <option value="орех_пацифик">Орех пацифик</option>
                <option value="орех_рибера">Орех рибера</option>
                <option value="орех_светлый">Орех светлый</option>
                <option value="орех_темный">Орех темный</option>
                <option value="орех_французский">Орех французский</option>
                <option value="сосна_авола">Сосна авола</option>
                <option value="сосна_авола_шампань">Сосна авола шампань</option>
                <option value="сосна_альпийская">Сосна альпийская</option>
                <option value="сосна_винтер">Сосна винтер</option>
                <option value="сосна_касцина">Сосна касцина</option>
                <option value="сосна_ларедо">Сосна ларедо</option>
                <option value="сосна_нордик">Сосна нордик</option>
                <option value="сосна_пасадена">Сосна пасадена</option>
                <option value="сосна_прованс">Сосна прованс</option>
                <option value="сосна_термо">Сосна термо</option>
                <option value="таксония">Таксония</option>
                <option value="файнлайн_кремовый">Файнлайн кремовый</option>
                <option value="фино_бронза">Фино бронза</option>
                <option value="фино_корица">Фино корица</option>
                <option value="эбони_светлый">Эбони светлый</option>
                <option value="эбони_темный">Эбони темный</option>
                <option value="эвкалипт_мистери">Эвкалипт мистери</option>
                <option value="яблоня_локарно">Яблоня локарно</option>
                <option value="ясень_анкор">Ясень анкор</option>
                <option value="ясень_анкор_светлый">Ясень анкор светлый</option>
                <option value="ясень_кассино">Ясень кассино</option>
                <option value="ясень_наварра">Ясень наварра</option>
                <option value="ясень_шимо">Ясень шимо</option>
                <option value="ясень_шимо_светлый">Ясень шимо светлый</option>

                <option disabled>- - - Цвет - - -</option>
                <option value="антрацит">Антрацит</option>
                <option value="бежевый">Бежевый</option>
                <option value="бежевый_200">Бежевый 200</option>
                <option value="бежевый_222">Бежевый 222</option>
                <option value="бежевый_латте">Бежевый латте</option>
                <option value="бежевый_песок">Бежевый песок</option>
                <option value="белый">Белый</option>
                <option value="белый_151">Белый_151</option>
                <option value="белый_алебастр">Белый алебастр</option>
                <option value="белый_базовый">Белый базовый</option>
                <option value="белый_крем">Белый крем</option>
                <option value="белый_платина">Белый платина</option>
                <option value="белый_премиум">Белый премиум</option>
                <option value="белый_фарфор">Белый фарфор</option>
                <option value="бетон_светлый">Бетон светлый</option>
                <option value="бетон_чикаго_светлый">Бетон чикаго светлый</option>
                <option value="бетон_чикаго_тёмный">Бетон чикаго тёмный</option>
                <option value="ваниль">Ваниль</option>
                <option value="гобубой_горизонт">Гобубой горизонт</option>
                <option value="голубой_аква">Голубой аква</option>
                <option value="голубой_лед">Голубой лед</option>
                <option value="голубой_небесный">Голубой небесный</option>
                <option value="желтый_бархат">Желтый бархат</option>
                <option value="желтый_бриллиант">Желтый бриллиант</option>
                <option value="зеленый">Зеленый</option>
                <option value="зеленый_изумруд">Зеленый изумруд</option>
                <option value="зеленый_лес">Зеленый лес</option>
                <option value="зеленый_салатовый">Зеленый салатовый</option>
                <option value="зеленый_степной">Зеленый степной</option>
                <option value="зеленый_яблоко">Зеленый яблоко</option>
                <option value="коралловый">Коралловый</option>
                <option value="коричневый_нуга">Коричневый нуга</option>
                <option value="коричневый_темный">Коричневый темный</option>
                <option value="коричневый_трюфель">Коричневый трюфель</option>
                <option value="красный">Красный</option>
                <option value="красный_бургундский">Красный бургундский</option>
                <option value="красный_китайский">Красный китайский</option>
                <option value="крокус">Крокус</option>
                <option value="лаванда">Лаванда</option>
                <option value="лаванда_нежная">Лаванда нежная</option>
                <option value="мята">Мята</option>
                <option value="полярный_голубой">Полярный голубой</option>
                <option value="розовый">Розовый</option>
                <option value="розовый_орхидея">Розовый орхидея</option>
                <option value="розовый_фламинго">Розовый фламинго</option>
                <option value="розовый_фуксия">Розовый фуксия</option>
                <option value="серебристый">Серебристый</option>
                <option value="серый">Серый</option>
                <option value="серый_арктика">Серый арктика</option>
                <option value="серый_асфальт">Серый асфальт</option>
                <option value="серый_мокка">Серый мокка</option>
                <option value="серый_оникс">Серый оникс</option>
                <option value="серый_светлый">Серый светлый</option>
                <option value="серый_светлый_2">Серый светлый_2</option>
                <option value="синий">Синий</option>
                <option value="синий_глубина">Синий глубина</option>
                <option value="синий_дельфт">Синий дельфт</option>
                <option value="синий_стальной">Синий стальной</option>
                <option value="слива">Слива</option>
                <option value="оранжевый">Оранжевый</option>
                <option value="оранжевый_332">Оранжевый 332</option>
                <option value="оранжевый_мандариновый">Оранжевый мандариновый</option>
                <option value="оранжевый_щербет">Оранжевый щербет</option>
                <option value="фиолетовый_темный">Фиолетовый темный</option>
                <option value="черный">Черный</option>
                <option value="черный_2">Черный 2</option>
                <option value="черный_графит">Черный графит</option>
                <option value="черный_коричневый">Черный коричневый</option>

                <option disabled>- - - Металл - - -</option>
                <option value="алюминий">Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Материал фасадов -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Фасад:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialFacade" class="flex">
              <option disabled>- - - Дерево - - -</option>
                <option value="акация_лэйклэнд" selected>Акация лэйклэнд</option>
                <option value="арабеска">Арабеска</option>
                <option value="баменда_венге_тёмный">Баменда венге</option>
                <option value="береза_майнау">Береза майнау</option>
                <option value="бук">Бук</option>
                <option value="бук_бавария">Бук бавария</option>
                <option value="бук_бавария_511">Бук бавария 511</option>
                <option value="бук_бавария_светлый">Бук бавария светлый</option>
                <option value="бук_кантри">Бук кантри</option>
                <option value="бук_натуральный">Бук натуральный</option>
                <option value="бук_тироль">Бук тироль</option>
                <option value="бук_эльмау">Бук эльмау</option>
                <option value="венге">Венге</option>
                <option value="венге_854">Венге 854</option>
                <option value="венге_аруба">Венге аруба</option>
                <option value="венге_мали">Венге мали</option>
                <option value="венге_тёмный">Венге тёмный</option>
                <option value="вишня">Вишня</option>
                <option value="вишня_верона">Вишня верона</option>
                <option value="вишня_виктория">Вишня виктория</option>
                <option value="вишня_локарно">Вишня локарно</option>
                <option value="вишня_ломбарно">Вишня ломбарно</option>
                <option value="вишня_оксфорд">Вишня оксфорд</option>
                <option value="вишня_оксфорд_тёмный">Вишня оксфорд тёмный</option>
                <option value="вишня_скандинавская">Вишня скандинавская</option>
                <option value="вудлайн_мокко">Вудлайн мокко</option>
                <option value="вяз_тоссини">Вяз тоссини</option>
                <option value="гасиенда_белый">Гасиенда белая</option>
                <option value="гикори">Гикори</option>
                <option value="груша">Груша</option>
                <option value="груша_тирано">Груша тирано</option>
                <option value="древесина_аттик">Древесина аттик</option>
                <option value="древесина_белая">Древесина белая</option>
                <option value="древесина_графит">Древесина графит</option>
                <option value="дрифтвуд">Дрифтвуд</option>
                <option value="дуб">Дуб</option>
                <option value="дуб_133">Дуб 133</option>
                <option value="дуб_156">Дуб 156</option>
                <option value="дуб_антик">Дуб антик</option>
                <option value="дуб_аризона">Дуб аризона</option>
                <option value="дуб_бардолино">Дуб бардолино</option>
                <option value="дуб_бардолино_серый">Дуб бардолино серый</option>
                <option value="дуб_венге">Дуб венге</option>
                <option value="дуб_венге_140">Дуб венге 140</option>
                <option value="дуб_галифакс">Дуб галифакс</option>
                <option value="дуб_галифакс_натуральный">Дуб галифакс натуральный</option>
                <option value="дуб_галифакс_табак">Дуб галифакс табак</option>
                <option value="дуб_гладстоун">Дуб гладстоун</option>
                <option value="дуб_давос">Дуб давос</option>
                <option value="дуб_кантри">Дуб кантри</option>
                <option value="дуб_кендал">Дуб кендал</option>
                <option value="дуб_корбридж">Дуб корбридж</option>
                <option value="дуб_кремона">Дуб кремона</option>
                <option value="дуб_молочный">Дуб молочный</option>
                <option value="дуб_небраска">Дуб небраска</option>
                <option value="дуб_пастельный">Дуб пастельный</option>
                <option value="дуб_сафари">Дуб сафари</option>
                <option value="дуб_светлый">Дуб светлый</option>
                <option value="дуб_седан">Дуб седан</option>
                <option value="дуб_скальный">Дуб скальный</option>
                <option value="дуб_соном">Дуб соном</option>
                <option value="дуб_сорано">Дуб сорано</option>
                <option value="дуб_тёмный">Дуб тёмный</option>
                <option value="дуб_феррара">Дуб феррара</option>
                <option value="дуб_шамони">Дуб шамони</option>
                <option value="дуб_шамони_светлый">Дуб шамони светлый</option>
                <option value="дуб_шато">Дуб шато</option>
                <option value="дуб_шато_серый">Дуб шато серый</option>
                <option value="дуб_ясный">Дуб ясный</option>
                <option value="зебрано_песочный">Зебрано песочный</option>
                <option value="зебрано_серый">Зебрано серый</option>
                <option value="кальвадос">Кальвадос</option>
                <option value="кальвадос_натуральный">Кальвадос натуральный</option>
                <option value="кашемир">Кашемир</option>
                <option value="клен">Клен</option>
                <option value="клен_канадский">Клен канадский</option>
                <option value="клен_медовый">Клен медовый</option>
                <option value="клен_сахарный">Клен сахарный</option>
                <option value="клен_светлый">Клен светлый</option>
                <option value="клён_танзай">Клён танзай</option>
                <option value="клен_штанберг">Клен штанберг</option>
                <option value="кокоболо">Кокоболо</option>
                <option value="лен">Лен</option>
                <option value="лиственница">Лиственница</option>
                <option value="лиственница_горная">Лиственница горная</option>
                <option value="лиственница_коричневая">Лиственница коричневая</option>
                <option value="лиственница_светлая">Лиственница светлая</option>
                <option value="макассар">Макассар</option>
                <option value="махагон">Махагон</option>
                <option value="махагон_512">Махагон_512</option>
                <option value="махагон_королевский">Махагон королевский</option>
                <option value="мерано">Мерано</option>
                <option value="моринга">Моринга</option>
                <option value="ольха">Ольха</option>
                <option value="ольха_513">Ольха 513</option>
                <option value="ольха_красный">Ольха красная</option>
                <option value="орех">Орех</option>
                <option value="орех_аида">Орех аида</option>
                <option value="орех_дижон">Орех дижон</option>
                <option value="орех_европейский">Орех европейский</option>
                <option value="орех_итальянский">Орех итальянский</option>
                <option value="орех_милано">Орех милано</option>
                <option value="орех_миланский">Орех миланский</option>
                <option value="орех_пацифик">Орех пацифик</option>
                <option value="орех_рибера">Орех рибера</option>
                <option value="орех_светлый">Орех светлый</option>
                <option value="орех_темный">Орех темный</option>
                <option value="орех_французский">Орех французский</option>
                <option value="сосна_авола">Сосна авола</option>
                <option value="сосна_авола_шампань">Сосна авола шампань</option>
                <option value="сосна_альпийская">Сосна альпийская</option>
                <option value="сосна_винтер">Сосна винтер</option>
                <option value="сосна_касцина">Сосна касцина</option>
                <option value="сосна_ларедо">Сосна ларедо</option>
                <option value="сосна_нордик">Сосна нордик</option>
                <option value="сосна_пасадена">Сосна пасадена</option>
                <option value="сосна_прованс">Сосна прованс</option>
                <option value="сосна_термо">Сосна термо</option>
                <option value="таксония">Таксония</option>
                <option value="файнлайн_кремовый">Файнлайн кремовый</option>
                <option value="фино_бронза">Фино бронза</option>
                <option value="фино_корица">Фино корица</option>
                <option value="эбони_светлый">Эбони светлый</option>
                <option value="эбони_темный">Эбони темный</option>
                <option value="эвкалипт_мистери">Эвкалипт мистери</option>
                <option value="яблоня_локарно">Яблоня локарно</option>
                <option value="ясень_анкор">Ясень анкор</option>
                <option value="ясень_анкор_светлый">Ясень анкор светлый</option>
                <option value="ясень_кассино">Ясень кассино</option>
                <option value="ясень_наварра">Ясень наварра</option>
                <option value="ясень_шимо">Ясень шимо</option>
                <option value="ясень_шимо_светлый">Ясень шимо светлый</option>

                <option disabled>- - - Цвет - - -</option>
                <option value="антрацит">Антрацит</option>
                <option value="бежевый">Бежевый</option>
                <option value="бежевый_200">Бежевый 200</option>
                <option value="бежевый_222">Бежевый 222</option>
                <option value="бежевый_латте">Бежевый латте</option>
                <option value="бежевый_песок">Бежевый песок</option>
                <option value="белый">Белый</option>
                <option value="белый_151">Белый_151</option>
                <option value="белый_алебастр">Белый алебастр</option>
                <option value="белый_базовый">Белый базовый</option>
                <option value="белый_крем">Белый крем</option>
                <option value="белый_платина">Белый платина</option>
                <option value="белый_премиум">Белый премиум</option>
                <option value="белый_фарфор">Белый фарфор</option>
                <option value="бетон_светлый">Бетон светлый</option>
                <option value="бетон_чикаго_светлый">Бетон чикаго светлый</option>
                <option value="бетон_чикаго_тёмный">Бетон чикаго тёмный</option>
                <option value="ваниль">Ваниль</option>
                <option value="гобубой_горизонт">Гобубой горизонт</option>
                <option value="голубой_аква">Голубой аква</option>
                <option value="голубой_лед">Голубой лед</option>
                <option value="голубой_небесный">Голубой небесный</option>
                <option value="желтый_бархат">Желтый бархат</option>
                <option value="желтый_бриллиант">Желтый бриллиант</option>
                <option value="зеленый">Зеленый</option>
                <option value="зеленый_изумруд">Зеленый изумруд</option>
                <option value="зеленый_лес">Зеленый лес</option>
                <option value="зеленый_салатовый">Зеленый салатовый</option>
                <option value="зеленый_степной">Зеленый степной</option>
                <option value="зеленый_яблоко">Зеленый яблоко</option>
                <option value="коралловый">Коралловый</option>
                <option value="коричневый_нуга">Коричневый нуга</option>
                <option value="коричневый_темный">Коричневый темный</option>
                <option value="коричневый_трюфель">Коричневый трюфель</option>
                <option value="красный">Красный</option>
                <option value="красный_бургундский">Красный бургундский</option>
                <option value="красный_китайский">Красный китайский</option>
                <option value="крокус">Крокус</option>
                <option value="лаванда">Лаванда</option>
                <option value="лаванда_нежная">Лаванда нежная</option>
                <option value="мята">Мята</option>
                <option value="полярный_голубой">Полярный голубой</option>
                <option value="розовый">Розовый</option>
                <option value="розовый_орхидея">Розовый орхидея</option>
                <option value="розовый_фламинго">Розовый фламинго</option>
                <option value="розовый_фуксия">Розовый фуксия</option>
                <option value="серебристый">Серебристый</option>
                <option value="серый">Серый</option>
                <option value="серый_арктика">Серый арктика</option>
                <option value="серый_асфальт">Серый асфальт</option>
                <option value="серый_мокка">Серый мокка</option>
                <option value="серый_оникс">Серый оникс</option>
                <option value="серый_светлый">Серый светлый</option>
                <option value="серый_светлый_2">Серый светлый_2</option>
                <option value="синий">Синий</option>
                <option value="синий_глубина">Синий глубина</option>
                <option value="синий_дельфт">Синий дельфт</option>
                <option value="синий_стальной">Синий стальной</option>
                <option value="слива">Слива</option>
                <option value="оранжевый">Оранжевый</option>
                <option value="оранжевый_332">Оранжевый 332</option>
                <option value="оранжевый_мандариновый">Оранжевый мандариновый</option>
                <option value="оранжевый_щербет">Оранжевый щербет</option>
                <option value="фиолетовый_темный">Фиолетовый темный</option>
                <option value="черный">Черный</option>
                <option value="черный_2">Черный 2</option>
                <option value="черный_графит">Черный графит</option>
                <option value="черный_коричневый">Черный коричневый</option>

                <option disabled>- - - Металл - - -</option>
                <option value="алюминий">Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Материал наполнения -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Наполнение:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialFill" class="flex">
              <option disabled>- - - Дерево - - -</option>
                <option value="акация_лэйклэнд" selected>Акация лэйклэнд</option>
                <option value="арабеска">Арабеска</option>
                <option value="баменда_венге_тёмный">Баменда венге</option>
                <option value="береза_майнау">Береза майнау</option>
                <option value="бук">Бук</option>
                <option value="бук_бавария">Бук бавария</option>
                <option value="бук_бавария_511">Бук бавария 511</option>
                <option value="бук_бавария_светлый">Бук бавария светлый</option>
                <option value="бук_кантри">Бук кантри</option>
                <option value="бук_натуральный">Бук натуральный</option>
                <option value="бук_тироль">Бук тироль</option>
                <option value="бук_эльмау">Бук эльмау</option>
                <option value="венге">Венге</option>
                <option value="венге_854">Венге 854</option>
                <option value="венге_аруба">Венге аруба</option>
                <option value="венге_мали">Венге мали</option>
                <option value="венге_тёмный">Венге тёмный</option>
                <option value="вишня">Вишня</option>
                <option value="вишня_верона">Вишня верона</option>
                <option value="вишня_виктория">Вишня виктория</option>
                <option value="вишня_локарно">Вишня локарно</option>
                <option value="вишня_ломбарно">Вишня ломбарно</option>
                <option value="вишня_оксфорд">Вишня оксфорд</option>
                <option value="вишня_оксфорд_тёмный">Вишня оксфорд тёмный</option>
                <option value="вишня_скандинавская">Вишня скандинавская</option>
                <option value="вудлайн_мокко">Вудлайн мокко</option>
                <option value="вяз_тоссини">Вяз тоссини</option>
                <option value="гасиенда_белый">Гасиенда белая</option>
                <option value="гикори">Гикори</option>
                <option value="груша">Груша</option>
                <option value="груша_тирано">Груша тирано</option>
                <option value="древесина_аттик">Древесина аттик</option>
                <option value="древесина_белая">Древесина белая</option>
                <option value="древесина_графит">Древесина графит</option>
                <option value="дрифтвуд">Дрифтвуд</option>
                <option value="дуб">Дуб</option>
                <option value="дуб_133">Дуб 133</option>
                <option value="дуб_156">Дуб 156</option>
                <option value="дуб_антик">Дуб антик</option>
                <option value="дуб_аризона">Дуб аризона</option>
                <option value="дуб_бардолино">Дуб бардолино</option>
                <option value="дуб_бардолино_серый">Дуб бардолино серый</option>
                <option value="дуб_венге">Дуб венге</option>
                <option value="дуб_венге_140">Дуб венге 140</option>
                <option value="дуб_галифакс">Дуб галифакс</option>
                <option value="дуб_галифакс_натуральный">Дуб галифакс натуральный</option>
                <option value="дуб_галифакс_табак">Дуб галифакс табак</option>
                <option value="дуб_гладстоун">Дуб гладстоун</option>
                <option value="дуб_давос">Дуб давос</option>
                <option value="дуб_кантри">Дуб кантри</option>
                <option value="дуб_кендал">Дуб кендал</option>
                <option value="дуб_корбридж">Дуб корбридж</option>
                <option value="дуб_кремона">Дуб кремона</option>
                <option value="дуб_молочный">Дуб молочный</option>
                <option value="дуб_небраска">Дуб небраска</option>
                <option value="дуб_пастельный">Дуб пастельный</option>
                <option value="дуб_сафари">Дуб сафари</option>
                <option value="дуб_светлый">Дуб светлый</option>
                <option value="дуб_седан">Дуб седан</option>
                <option value="дуб_скальный">Дуб скальный</option>
                <option value="дуб_соном">Дуб соном</option>
                <option value="дуб_сорано">Дуб сорано</option>
                <option value="дуб_тёмный">Дуб тёмный</option>
                <option value="дуб_феррара">Дуб феррара</option>
                <option value="дуб_шамони">Дуб шамони</option>
                <option value="дуб_шамони_светлый">Дуб шамони светлый</option>
                <option value="дуб_шато">Дуб шато</option>
                <option value="дуб_шато_серый">Дуб шато серый</option>
                <option value="дуб_ясный">Дуб ясный</option>
                <option value="зебрано_песочный">Зебрано песочный</option>
                <option value="зебрано_серый">Зебрано серый</option>
                <option value="кальвадос">Кальвадос</option>
                <option value="кальвадос_натуральный">Кальвадос натуральный</option>
                <option value="кашемир">Кашемир</option>
                <option value="клен">Клен</option>
                <option value="клен_канадский">Клен канадский</option>
                <option value="клен_медовый">Клен медовый</option>
                <option value="клен_сахарный">Клен сахарный</option>
                <option value="клен_светлый">Клен светлый</option>
                <option value="клён_танзай">Клён танзай</option>
                <option value="клен_штанберг">Клен штанберг</option>
                <option value="кокоболо">Кокоболо</option>
                <option value="лен">Лен</option>
                <option value="лиственница">Лиственница</option>
                <option value="лиственница_горная">Лиственница горная</option>
                <option value="лиственница_коричневая">Лиственница коричневая</option>
                <option value="лиственница_светлая">Лиственница светлая</option>
                <option value="макассар">Макассар</option>
                <option value="махагон">Махагон</option>
                <option value="махагон_512">Махагон_512</option>
                <option value="махагон_королевский">Махагон королевский</option>
                <option value="мерано">Мерано</option>
                <option value="моринга">Моринга</option>
                <option value="ольха">Ольха</option>
                <option value="ольха_513">Ольха 513</option>
                <option value="ольха_красный">Ольха красная</option>
                <option value="орех">Орех</option>
                <option value="орех_аида">Орех аида</option>
                <option value="орех_дижон">Орех дижон</option>
                <option value="орех_европейский">Орех европейский</option>
                <option value="орех_итальянский">Орех итальянский</option>
                <option value="орех_милано">Орех милано</option>
                <option value="орех_миланский">Орех миланский</option>
                <option value="орех_пацифик">Орех пацифик</option>
                <option value="орех_рибера">Орех рибера</option>
                <option value="орех_светлый">Орех светлый</option>
                <option value="орех_темный">Орех темный</option>
                <option value="орех_французский">Орех французский</option>
                <option value="сосна_авола">Сосна авола</option>
                <option value="сосна_авола_шампань">Сосна авола шампань</option>
                <option value="сосна_альпийская">Сосна альпийская</option>
                <option value="сосна_винтер">Сосна винтер</option>
                <option value="сосна_касцина">Сосна касцина</option>
                <option value="сосна_ларедо">Сосна ларедо</option>
                <option value="сосна_нордик">Сосна нордик</option>
                <option value="сосна_пасадена">Сосна пасадена</option>
                <option value="сосна_прованс">Сосна прованс</option>
                <option value="сосна_термо">Сосна термо</option>
                <option value="таксония">Таксония</option>
                <option value="файнлайн_кремовый">Файнлайн кремовый</option>
                <option value="фино_бронза">Фино бронза</option>
                <option value="фино_корица">Фино корица</option>
                <option value="эбони_светлый">Эбони светлый</option>
                <option value="эбони_темный">Эбони темный</option>
                <option value="эвкалипт_мистери">Эвкалипт мистери</option>
                <option value="яблоня_локарно">Яблоня локарно</option>
                <option value="ясень_анкор">Ясень анкор</option>
                <option value="ясень_анкор_светлый">Ясень анкор светлый</option>
                <option value="ясень_кассино">Ясень кассино</option>
                <option value="ясень_наварра">Ясень наварра</option>
                <option value="ясень_шимо">Ясень шимо</option>
                <option value="ясень_шимо_светлый">Ясень шимо светлый</option>

                <option disabled>- - - Цвет - - -</option>
                <option value="антрацит">Антрацит</option>
                <option value="бежевый">Бежевый</option>
                <option value="бежевый_200">Бежевый 200</option>
                <option value="бежевый_222">Бежевый 222</option>
                <option value="бежевый_латте">Бежевый латте</option>
                <option value="бежевый_песок">Бежевый песок</option>
                <option value="белый">Белый</option>
                <option value="белый_151">Белый_151</option>
                <option value="белый_алебастр">Белый алебастр</option>
                <option value="белый_базовый">Белый базовый</option>
                <option value="белый_крем">Белый крем</option>
                <option value="белый_платина">Белый платина</option>
                <option value="белый_премиум">Белый премиум</option>
                <option value="белый_фарфор">Белый фарфор</option>
                <option value="бетон_светлый">Бетон светлый</option>
                <option value="бетон_чикаго_светлый">Бетон чикаго светлый</option>
                <option value="бетон_чикаго_тёмный">Бетон чикаго тёмный</option>
                <option value="ваниль">Ваниль</option>
                <option value="гобубой_горизонт">Гобубой горизонт</option>
                <option value="голубой_аква">Голубой аква</option>
                <option value="голубой_лед">Голубой лед</option>
                <option value="голубой_небесный">Голубой небесный</option>
                <option value="желтый_бархат">Желтый бархат</option>
                <option value="желтый_бриллиант">Желтый бриллиант</option>
                <option value="зеленый">Зеленый</option>
                <option value="зеленый_изумруд">Зеленый изумруд</option>
                <option value="зеленый_лес">Зеленый лес</option>
                <option value="зеленый_салатовый">Зеленый салатовый</option>
                <option value="зеленый_степной">Зеленый степной</option>
                <option value="зеленый_яблоко">Зеленый яблоко</option>
                <option value="коралловый">Коралловый</option>
                <option value="коричневый_нуга">Коричневый нуга</option>
                <option value="коричневый_темный">Коричневый темный</option>
                <option value="коричневый_трюфель">Коричневый трюфель</option>
                <option value="красный">Красный</option>
                <option value="красный_бургундский">Красный бургундский</option>
                <option value="красный_китайский">Красный китайский</option>
                <option value="крокус">Крокус</option>
                <option value="лаванда">Лаванда</option>
                <option value="лаванда_нежная">Лаванда нежная</option>
                <option value="мята">Мята</option>
                <option value="полярный_голубой">Полярный голубой</option>
                <option value="розовый">Розовый</option>
                <option value="розовый_орхидея">Розовый орхидея</option>
                <option value="розовый_фламинго">Розовый фламинго</option>
                <option value="розовый_фуксия">Розовый фуксия</option>
                <option value="серебристый">Серебристый</option>
                <option value="серый">Серый</option>
                <option value="серый_арктика">Серый арктика</option>
                <option value="серый_асфальт">Серый асфальт</option>
                <option value="серый_мокка">Серый мокка</option>
                <option value="серый_оникс">Серый оникс</option>
                <option value="серый_светлый">Серый светлый</option>
                <option value="серый_светлый_2">Серый светлый_2</option>
                <option value="синий">Синий</option>
                <option value="синий_глубина">Синий глубина</option>
                <option value="синий_дельфт">Синий дельфт</option>
                <option value="синий_стальной">Синий стальной</option>
                <option value="слива">Слива</option>
                <option value="оранжевый">Оранжевый</option>
                <option value="оранжевый_332">Оранжевый 332</option>
                <option value="оранжевый_мандариновый">Оранжевый мандариновый</option>
                <option value="оранжевый_щербет">Оранжевый щербет</option>
                <option value="фиолетовый_темный">Фиолетовый темный</option>
                <option value="черный">Черный</option>
                <option value="черный_2">Черный 2</option>
                <option value="черный_графит">Черный графит</option>
                <option value="черный_коричневый">Черный коричневый</option>

                <option disabled>- - - Металл - - -</option>
                <option value="алюминий">Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Материал задней стенки и дна ящиков -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Задняя стенка и дно ящиков:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialWall" class="flex">
              <option disabled>- - - Дерево - - -</option>
                <option value="акация_лэйклэнд">Акация лэйклэнд</option>
                <option value="арабеска">Арабеска</option>
                <option value="баменда_венге_тёмный">Баменда венге</option>
                <option value="береза_майнау">Береза майнау</option>
                <option value="бук">Бук</option>
                <option value="бук_бавария">Бук бавария</option>
                <option value="бук_бавария_511">Бук бавария 511</option>
                <option value="бук_бавария_светлый">Бук бавария светлый</option>
                <option value="бук_кантри">Бук кантри</option>
                <option value="бук_натуральный">Бук натуральный</option>
                <option value="бук_тироль">Бук тироль</option>
                <option value="бук_эльмау">Бук эльмау</option>
                <option value="венге">Венге</option>
                <option value="венге_854">Венге 854</option>
                <option value="венге_аруба">Венге аруба</option>
                <option value="венге_мали">Венге мали</option>
                <option value="венге_тёмный">Венге тёмный</option>
                <option value="вишня">Вишня</option>
                <option value="вишня_верона">Вишня верона</option>
                <option value="вишня_виктория">Вишня виктория</option>
                <option value="вишня_локарно">Вишня локарно</option>
                <option value="вишня_ломбарно">Вишня ломбарно</option>
                <option value="вишня_оксфорд">Вишня оксфорд</option>
                <option value="вишня_оксфорд_тёмный">Вишня оксфорд тёмный</option>
                <option value="вишня_скандинавская">Вишня скандинавская</option>
                <option value="вудлайн_мокко">Вудлайн мокко</option>
                <option value="вяз_тоссини">Вяз тоссини</option>
                <option value="гасиенда_белый">Гасиенда белая</option>
                <option value="гикори">Гикори</option>
                <option value="груша">Груша</option>
                <option value="груша_тирано">Груша тирано</option>
                <option value="древесина_аттик">Древесина аттик</option>
                <option value="древесина_белая">Древесина белая</option>
                <option value="древесина_графит">Древесина графит</option>
                <option value="дрифтвуд">Дрифтвуд</option>
                <option value="дуб">Дуб</option>
                <option value="дуб_133">Дуб 133</option>
                <option value="дуб_156">Дуб 156</option>
                <option value="дуб_антик">Дуб антик</option>
                <option value="дуб_аризона">Дуб аризона</option>
                <option value="дуб_бардолино">Дуб бардолино</option>
                <option value="дуб_бардолино_серый">Дуб бардолино серый</option>
                <option value="дуб_венге">Дуб венге</option>
                <option value="дуб_венге_140">Дуб венге 140</option>
                <option value="дуб_галифакс">Дуб галифакс</option>
                <option value="дуб_галифакс_натуральный">Дуб галифакс натуральный</option>
                <option value="дуб_галифакс_табак">Дуб галифакс табак</option>
                <option value="дуб_гладстоун">Дуб гладстоун</option>
                <option value="дуб_давос">Дуб давос</option>
                <option value="дуб_кантри">Дуб кантри</option>
                <option value="дуб_кендал">Дуб кендал</option>
                <option value="дуб_корбридж">Дуб корбридж</option>
                <option value="дуб_кремона">Дуб кремона</option>
                <option value="дуб_молочный">Дуб молочный</option>
                <option value="дуб_небраска">Дуб небраска</option>
                <option value="дуб_пастельный">Дуб пастельный</option>
                <option value="дуб_сафари">Дуб сафари</option>
                <option value="дуб_светлый">Дуб светлый</option>
                <option value="дуб_седан">Дуб седан</option>
                <option value="дуб_скальный">Дуб скальный</option>
                <option value="дуб_соном">Дуб соном</option>
                <option value="дуб_сорано">Дуб сорано</option>
                <option value="дуб_тёмный">Дуб тёмный</option>
                <option value="дуб_феррара">Дуб феррара</option>
                <option value="дуб_шамони">Дуб шамони</option>
                <option value="дуб_шамони_светлый">Дуб шамони светлый</option>
                <option value="дуб_шато">Дуб шато</option>
                <option value="дуб_шато_серый">Дуб шато серый</option>
                <option value="дуб_ясный">Дуб ясный</option>
                <option value="зебрано_песочный">Зебрано песочный</option>
                <option value="зебрано_серый">Зебрано серый</option>
                <option value="кальвадос">Кальвадос</option>
                <option value="кальвадос_натуральный">Кальвадос натуральный</option>
                <option value="кашемир">Кашемир</option>
                <option value="клен">Клен</option>
                <option value="клен_канадский">Клен канадский</option>
                <option value="клен_медовый">Клен медовый</option>
                <option value="клен_сахарный">Клен сахарный</option>
                <option value="клен_светлый">Клен светлый</option>
                <option value="клён_танзай">Клён танзай</option>
                <option value="клен_штанберг">Клен штанберг</option>
                <option value="кокоболо">Кокоболо</option>
                <option value="лен">Лен</option>
                <option value="лиственница">Лиственница</option>
                <option value="лиственница_горная">Лиственница горная</option>
                <option value="лиственница_коричневая">Лиственница коричневая</option>
                <option value="лиственница_светлая">Лиственница светлая</option>
                <option value="макассар">Макассар</option>
                <option value="махагон">Махагон</option>
                <option value="махагон_512">Махагон_512</option>
                <option value="махагон_королевский">Махагон королевский</option>
                <option value="мерано">Мерано</option>
                <option value="моринга">Моринга</option>
                <option value="ольха">Ольха</option>
                <option value="ольха_513">Ольха 513</option>
                <option value="ольха_красный">Ольха красная</option>
                <option value="орех">Орех</option>
                <option value="орех_аида">Орех аида</option>
                <option value="орех_дижон">Орех дижон</option>
                <option value="орех_европейский">Орех европейский</option>
                <option value="орех_итальянский">Орех итальянский</option>
                <option value="орех_милано">Орех милано</option>
                <option value="орех_миланский">Орех миланский</option>
                <option value="орех_пацифик">Орех пацифик</option>
                <option value="орех_рибера">Орех рибера</option>
                <option value="орех_светлый">Орех светлый</option>
                <option value="орех_темный">Орех темный</option>
                <option value="орех_французский">Орех французский</option>
                <option value="сосна_авола">Сосна авола</option>
                <option value="сосна_авола_шампань">Сосна авола шампань</option>
                <option value="сосна_альпийская">Сосна альпийская</option>
                <option value="сосна_винтер">Сосна винтер</option>
                <option value="сосна_касцина">Сосна касцина</option>
                <option value="сосна_ларедо">Сосна ларедо</option>
                <option value="сосна_нордик">Сосна нордик</option>
                <option value="сосна_пасадена">Сосна пасадена</option>
                <option value="сосна_прованс">Сосна прованс</option>
                <option value="сосна_термо">Сосна термо</option>
                <option value="таксония">Таксония</option>
                <option value="файнлайн_кремовый">Файнлайн кремовый</option>
                <option value="фино_бронза">Фино бронза</option>
                <option value="фино_корица">Фино корица</option>
                <option value="эбони_светлый">Эбони светлый</option>
                <option value="эбони_темный">Эбони темный</option>
                <option value="эвкалипт_мистери">Эвкалипт мистери</option>
                <option value="яблоня_локарно">Яблоня локарно</option>
                <option value="ясень_анкор">Ясень анкор</option>
                <option value="ясень_анкор_светлый">Ясень анкор светлый</option>
                <option value="ясень_кассино">Ясень кассино</option>
                <option value="ясень_наварра">Ясень наварра</option>
                <option value="ясень_шимо">Ясень шимо</option>
                <option value="ясень_шимо_светлый">Ясень шимо светлый</option>

                <option disabled>- - - Цвет - - -</option>
                <option value="антрацит">Антрацит</option>
                <option value="бежевый">Бежевый</option>
                <option value="бежевый_200">Бежевый 200</option>
                <option value="бежевый_222">Бежевый 222</option>
                <option value="бежевый_латте">Бежевый латте</option>
                <option value="бежевый_песок">Бежевый песок</option>
                <option value="белый">Белый</option>
                <option value="белый_151">Белый_151</option>
                <option value="белый_алебастр">Белый алебастр</option>
                <option value="белый_базовый">Белый базовый</option>
                <option value="белый_крем">Белый крем</option>
                <option value="белый_платина">Белый платина</option>
                <option value="белый_премиум">Белый премиум</option>
                <option value="белый_фарфор">Белый фарфор</option>
                <option value="бетон_светлый">Бетон светлый</option>
                <option value="бетон_чикаго_светлый">Бетон чикаго светлый</option>
                <option value="бетон_чикаго_тёмный">Бетон чикаго тёмный</option>
                <option value="ваниль">Ваниль</option>
                <option value="гобубой_горизонт">Гобубой горизонт</option>
                <option value="голубой_аква">Голубой аква</option>
                <option value="голубой_лед">Голубой лед</option>
                <option value="голубой_небесный">Голубой небесный</option>
                <option value="желтый_бархат" selected>Желтый бархат</option>
                <option value="желтый_бриллиант">Желтый бриллиант</option>
                <option value="зеленый">Зеленый</option>
                <option value="зеленый_изумруд">Зеленый изумруд</option>
                <option value="зеленый_лес">Зеленый лес</option>
                <option value="зеленый_салатовый">Зеленый салатовый</option>
                <option value="зеленый_степной">Зеленый степной</option>
                <option value="зеленый_яблоко">Зеленый яблоко</option>
                <option value="коралловый">Коралловый</option>
                <option value="коричневый_нуга">Коричневый нуга</option>
                <option value="коричневый_темный">Коричневый темный</option>
                <option value="коричневый_трюфель">Коричневый трюфель</option>
                <option value="красный">Красный</option>
                <option value="красный_бургундский">Красный бургундский</option>
                <option value="красный_китайский">Красный китайский</option>
                <option value="крокус">Крокус</option>
                <option value="лаванда">Лаванда</option>
                <option value="лаванда_нежная">Лаванда нежная</option>
                <option value="мята">Мята</option>
                <option value="полярный_голубой">Полярный голубой</option>
                <option value="розовый">Розовый</option>
                <option value="розовый_орхидея">Розовый орхидея</option>
                <option value="розовый_фламинго">Розовый фламинго</option>
                <option value="розовый_фуксия">Розовый фуксия</option>
                <option value="серебристый">Серебристый</option>
                <option value="серый">Серый</option>
                <option value="серый_арктика">Серый арктика</option>
                <option value="серый_асфальт">Серый асфальт</option>
                <option value="серый_мокка">Серый мокка</option>
                <option value="серый_оникс">Серый оникс</option>
                <option value="серый_светлый">Серый светлый</option>
                <option value="серый_светлый_2">Серый светлый_2</option>
                <option value="синий">Синий</option>
                <option value="синий_глубина">Синий глубина</option>
                <option value="синий_дельфт">Синий дельфт</option>
                <option value="синий_стальной">Синий стальной</option>
                <option value="слива">Слива</option>
                <option value="оранжевый">Оранжевый</option>
                <option value="оранжевый_332">Оранжевый 332</option>
                <option value="оранжевый_мандариновый">Оранжевый мандариновый</option>
                <option value="оранжевый_щербет">Оранжевый щербет</option>
                <option value="фиолетовый_темный">Фиолетовый темный</option>
                <option value="черный">Черный</option>
                <option value="черный_2">Черный 2</option>
                <option value="черный_графит">Черный графит</option>
                <option value="черный_коричневый">Черный коричневый</option>

                <option disabled>- - - Металл - - -</option>
                <option value="алюминий">Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Материал ручек -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Ручки:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialHand" class="flex">
              <option disabled>- - - Металл - - -</option>
                <option value="алюминий" selected>Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Материал штанги, рельс для дверей -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Штанга, рельсы для дверей:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialRod" class="flex">
                <option disabled>- - - Металл - - -</option>
                <option value="алюминий" selected>Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Материал ножек -->
          <div class="row">
            <div class="col-5 flex-start">
              <div class="q mt-1">
                <svg viewBox="0 0 31.357 31.357">
                  <use xlink:href="#q">
                </svg>
              </div>
              <label>Ножки:</label>
            </div>
            <div class="col-7">
              <select id="inputSelect_materialLeg" class="flex">
              <option disabled>- - - Дерево - - -</option>
                <option value="акация_лэйклэнд">Акация лэйклэнд</option>
                <option value="арабеска">Арабеска</option>
                <option value="баменда_венге_тёмный">Баменда венге</option>
                <option value="береза_майнау">Береза майнау</option>
                <option value="бук">Бук</option>
                <option value="бук_бавария">Бук бавария</option>
                <option value="бук_бавария_511">Бук бавария 511</option>
                <option value="бук_бавария_светлый">Бук бавария светлый</option>
                <option value="бук_кантри">Бук кантри</option>
                <option value="бук_натуральный">Бук натуральный</option>
                <option value="бук_тироль">Бук тироль</option>
                <option value="бук_эльмау">Бук эльмау</option>
                <option value="венге">Венге</option>
                <option value="венге_854">Венге 854</option>
                <option value="венге_аруба">Венге аруба</option>
                <option value="венге_мали">Венге мали</option>
                <option value="венге_тёмный">Венге тёмный</option>
                <option value="вишня">Вишня</option>
                <option value="вишня_верона">Вишня верона</option>
                <option value="вишня_виктория">Вишня виктория</option>
                <option value="вишня_локарно">Вишня локарно</option>
                <option value="вишня_ломбарно">Вишня ломбарно</option>
                <option value="вишня_оксфорд">Вишня оксфорд</option>
                <option value="вишня_оксфорд_тёмный">Вишня оксфорд тёмный</option>
                <option value="вишня_скандинавская">Вишня скандинавская</option>
                <option value="вудлайн_мокко">Вудлайн мокко</option>
                <option value="вяз_тоссини">Вяз тоссини</option>
                <option value="гасиенда_белый">Гасиенда белая</option>
                <option value="гикори">Гикори</option>
                <option value="груша">Груша</option>
                <option value="груша_тирано">Груша тирано</option>
                <option value="древесина_аттик">Древесина аттик</option>
                <option value="древесина_белая">Древесина белая</option>
                <option value="древесина_графит">Древесина графит</option>
                <option value="дрифтвуд">Дрифтвуд</option>
                <option value="дуб">Дуб</option>
                <option value="дуб_133">Дуб 133</option>
                <option value="дуб_156">Дуб 156</option>
                <option value="дуб_антик">Дуб антик</option>
                <option value="дуб_аризона">Дуб аризона</option>
                <option value="дуб_бардолино">Дуб бардолино</option>
                <option value="дуб_бардолино_серый">Дуб бардолино серый</option>
                <option value="дуб_венге">Дуб венге</option>
                <option value="дуб_венге_140">Дуб венге 140</option>
                <option value="дуб_галифакс">Дуб галифакс</option>
                <option value="дуб_галифакс_натуральный">Дуб галифакс натуральный</option>
                <option value="дуб_галифакс_табак">Дуб галифакс табак</option>
                <option value="дуб_гладстоун">Дуб гладстоун</option>
                <option value="дуб_давос">Дуб давос</option>
                <option value="дуб_кантри">Дуб кантри</option>
                <option value="дуб_кендал">Дуб кендал</option>
                <option value="дуб_корбридж">Дуб корбридж</option>
                <option value="дуб_кремона">Дуб кремона</option>
                <option value="дуб_молочный">Дуб молочный</option>
                <option value="дуб_небраска">Дуб небраска</option>
                <option value="дуб_пастельный">Дуб пастельный</option>
                <option value="дуб_сафари">Дуб сафари</option>
                <option value="дуб_светлый">Дуб светлый</option>
                <option value="дуб_седан">Дуб седан</option>
                <option value="дуб_скальный">Дуб скальный</option>
                <option value="дуб_соном">Дуб соном</option>
                <option value="дуб_сорано">Дуб сорано</option>
                <option value="дуб_тёмный">Дуб тёмный</option>
                <option value="дуб_феррара">Дуб феррара</option>
                <option value="дуб_шамони">Дуб шамони</option>
                <option value="дуб_шамони_светлый">Дуб шамони светлый</option>
                <option value="дуб_шато">Дуб шато</option>
                <option value="дуб_шато_серый">Дуб шато серый</option>
                <option value="дуб_ясный">Дуб ясный</option>
                <option value="зебрано_песочный">Зебрано песочный</option>
                <option value="зебрано_серый">Зебрано серый</option>
                <option value="кальвадос">Кальвадос</option>
                <option value="кальвадос_натуральный">Кальвадос натуральный</option>
                <option value="кашемир">Кашемир</option>
                <option value="клен">Клен</option>
                <option value="клен_канадский">Клен канадский</option>
                <option value="клен_медовый">Клен медовый</option>
                <option value="клен_сахарный">Клен сахарный</option>
                <option value="клен_светлый">Клен светлый</option>
                <option value="клён_танзай">Клён танзай</option>
                <option value="клен_штанберг">Клен штанберг</option>
                <option value="кокоболо">Кокоболо</option>
                <option value="лен">Лен</option>
                <option value="лиственница">Лиственница</option>
                <option value="лиственница_горная">Лиственница горная</option>
                <option value="лиственница_коричневая">Лиственница коричневая</option>
                <option value="лиственница_светлая">Лиственница светлая</option>
                <option value="макассар">Макассар</option>
                <option value="махагон">Махагон</option>
                <option value="махагон_512">Махагон_512</option>
                <option value="махагон_королевский">Махагон королевский</option>
                <option value="мерано">Мерано</option>
                <option value="моринга">Моринга</option>
                <option value="ольха">Ольха</option>
                <option value="ольха_513">Ольха 513</option>
                <option value="ольха_красный">Ольха красная</option>
                <option value="орех">Орех</option>
                <option value="орех_аида">Орех аида</option>
                <option value="орех_дижон">Орех дижон</option>
                <option value="орех_европейский">Орех европейский</option>
                <option value="орех_итальянский">Орех итальянский</option>
                <option value="орех_милано">Орех милано</option>
                <option value="орех_миланский">Орех миланский</option>
                <option value="орех_пацифик">Орех пацифик</option>
                <option value="орех_рибера">Орех рибера</option>
                <option value="орех_светлый">Орех светлый</option>
                <option value="орех_темный">Орех темный</option>
                <option value="орех_французский">Орех французский</option>
                <option value="сосна_авола">Сосна авола</option>
                <option value="сосна_авола_шампань">Сосна авола шампань</option>
                <option value="сосна_альпийская">Сосна альпийская</option>
                <option value="сосна_винтер">Сосна винтер</option>
                <option value="сосна_касцина">Сосна касцина</option>
                <option value="сосна_ларедо">Сосна ларедо</option>
                <option value="сосна_нордик">Сосна нордик</option>
                <option value="сосна_пасадена">Сосна пасадена</option>
                <option value="сосна_прованс">Сосна прованс</option>
                <option value="сосна_термо">Сосна термо</option>
                <option value="таксония">Таксония</option>
                <option value="файнлайн_кремовый">Файнлайн кремовый</option>
                <option value="фино_бронза">Фино бронза</option>
                <option value="фино_корица">Фино корица</option>
                <option value="эбони_светлый">Эбони светлый</option>
                <option value="эбони_темный">Эбони темный</option>
                <option value="эвкалипт_мистери">Эвкалипт мистери</option>
                <option value="яблоня_локарно">Яблоня локарно</option>
                <option value="ясень_анкор">Ясень анкор</option>
                <option value="ясень_анкор_светлый">Ясень анкор светлый</option>
                <option value="ясень_кассино">Ясень кассино</option>
                <option value="ясень_наварра">Ясень наварра</option>
                <option value="ясень_шимо">Ясень шимо</option>
                <option value="ясень_шимо_светлый">Ясень шимо светлый</option>

                <option disabled>- - - Цвет - - -</option>
                <option value="антрацит">Антрацит</option>
                <option value="бежевый">Бежевый</option>
                <option value="бежевый_200">Бежевый 200</option>
                <option value="бежевый_222">Бежевый 222</option>
                <option value="бежевый_латте">Бежевый латте</option>
                <option value="бежевый_песок">Бежевый песок</option>
                <option value="белый">Белый</option>
                <option value="белый_151">Белый_151</option>
                <option value="белый_алебастр">Белый алебастр</option>
                <option value="белый_базовый">Белый базовый</option>
                <option value="белый_крем">Белый крем</option>
                <option value="белый_платина">Белый платина</option>
                <option value="белый_премиум">Белый премиум</option>
                <option value="белый_фарфор">Белый фарфор</option>
                <option value="бетон_светлый">Бетон светлый</option>
                <option value="бетон_чикаго_светлый">Бетон чикаго светлый</option>
                <option value="бетон_чикаго_тёмный">Бетон чикаго тёмный</option>
                <option value="ваниль">Ваниль</option>
                <option value="гобубой_горизонт">Гобубой горизонт</option>
                <option value="голубой_аква">Голубой аква</option>
                <option value="голубой_лед">Голубой лед</option>
                <option value="голубой_небесный">Голубой небесный</option>
                <option value="желтый_бархат">Желтый бархат</option>
                <option value="желтый_бриллиант">Желтый бриллиант</option>
                <option value="зеленый">Зеленый</option>
                <option value="зеленый_изумруд">Зеленый изумруд</option>
                <option value="зеленый_лес">Зеленый лес</option>
                <option value="зеленый_салатовый">Зеленый салатовый</option>
                <option value="зеленый_степной">Зеленый степной</option>
                <option value="зеленый_яблоко">Зеленый яблоко</option>
                <option value="коралловый">Коралловый</option>
                <option value="коричневый_нуга">Коричневый нуга</option>
                <option value="коричневый_темный">Коричневый темный</option>
                <option value="коричневый_трюфель">Коричневый трюфель</option>
                <option value="красный">Красный</option>
                <option value="красный_бургундский">Красный бургундский</option>
                <option value="красный_китайский">Красный китайский</option>
                <option value="крокус">Крокус</option>
                <option value="лаванда">Лаванда</option>
                <option value="лаванда_нежная">Лаванда нежная</option>
                <option value="мята">Мята</option>
                <option value="полярный_голубой">Полярный голубой</option>
                <option value="розовый">Розовый</option>
                <option value="розовый_орхидея">Розовый орхидея</option>
                <option value="розовый_фламинго">Розовый фламинго</option>
                <option value="розовый_фуксия">Розовый фуксия</option>
                <option value="серебристый">Серебристый</option>
                <option value="серый">Серый</option>
                <option value="серый_арктика">Серый арктика</option>
                <option value="серый_асфальт">Серый асфальт</option>
                <option value="серый_мокка">Серый мокка</option>
                <option value="серый_оникс">Серый оникс</option>
                <option value="серый_светлый">Серый светлый</option>
                <option value="серый_светлый_2">Серый светлый_2</option>
                <option value="синий">Синий</option>
                <option value="синий_глубина">Синий глубина</option>
                <option value="синий_дельфт">Синий дельфт</option>
                <option value="синий_стальной">Синий стальной</option>
                <option value="слива">Слива</option>
                <option value="оранжевый">Оранжевый</option>
                <option value="оранжевый_332">Оранжевый 332</option>
                <option value="оранжевый_мандариновый">Оранжевый мандариновый</option>
                <option value="оранжевый_щербет">Оранжевый щербет</option>
                <option value="фиолетовый_темный">Фиолетовый темный</option>
                <option value="черный" selected>Черный</option>
                <option value="черный_2">Черный 2</option>
                <option value="черный_графит">Черный графит</option>
                <option value="черный_коричневый">Черный коричневый</option>

                <option disabled>- - - Металл - - -</option>
                <option value="алюминий">Алюминий</option>
                <option value="медь_матированная">Медь матированная</option>
                <option value="металлик">Металлик</option>
                <option value="металлик_золото">Металлик золото</option>
                <option value="сильвер">Сильвер</option>
                <option value="титан">Титан</option>
                <option value="титан_2">Титан 2</option>
              </select>
            </div>
          </div>

          <!-- Отображение материала -->
          <div class="row mt-4">
            <div class="col-12">
              <a a href="preview.php" class="link__open-preview d-flex">
                <div class="panel__svg mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  	 viewBox="0 0 511.999 511.999" xml:space="preserve">
                  <g>
                  	<g>
                  		<path d="M508.874,478.708L360.142,329.976c28.21-34.827,45.191-79.103,45.191-127.309c0-111.75-90.917-202.667-202.667-202.667
                  			S0,90.917,0,202.667s90.917,202.667,202.667,202.667c48.206,0,92.482-16.982,127.309-45.191l148.732,148.732
                  			c4.167,4.165,10.919,4.165,15.086,0l15.081-15.082C513.04,489.627,513.04,482.873,508.874,478.708z M202.667,362.667
                  			c-88.229,0-160-71.771-160-160s71.771-160,160-160s160,71.771,160,160S290.896,362.667,202.667,362.667z"/>
                  	</g>
                  </g>
                  </svg>
                </div>
                Открыть предпросмотр материала
              </a>
            </div>
          </div>

        </div>
        <!-- /.panel__material -->

      </div>
      <!-- /.tabs -->

      <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Сохранение модели</h5>
              <div class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </div>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <div class="mb-1"">Название:</div>
                <input class="save_input" class="" type="text" name="title" value="Модель шкаф-купе">
              </div>
              <div>
                <div class="mb-1"">Описание:</div>
                <textarea class="save_input" name="subtitle" cols="30" rows="2" placeholder="до 150 знаков..."></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <input name="price" id="input__price" type="hidden">
              <button class="btn btn-primary">Сохранить</button>
            </div>
          </div>
        </div>
      </div>
      <!-- модальное окно сохранения -->
    </form>
    <!-- /.panel -->
  </div>
  <!-- /.calc-wrap -->
  <div class="mobile__warning d-block d-xl-none container">
    <div class="alert alert-warning" role="alert">
      <strong>Ошибка!</strong> Просмотр доступен только для ПК версии
    </div>
  </div>

  <!-- q modal -->
  <div class="modal fade" id="qModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Заголовок</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          текст подсказки
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/three.min.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
  <script>

    (function ($) {
      $(function () {

        $('div.tabs__caption').on('click', 'div:not(.active)', function () {
          $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });

      });
    })(jQuery);

  </script>

  <?php
    if ( isset($_POST['height']) ) {
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

      $openSaving = 'true';
    } else {
      $openSaving = false;
    }
    echo "<div id='openSaving' class='d-none'>".$openSaving."</div>";

    echo "<div id='height_saving' class='d-none'>".$height."</div>";
    echo "<div id='width_saving' class='d-none'>".$width."</div>";
    echo "<div id='depth_saving' class='d-none'>".$depth."</div>";

    echo "<div id='rack_l' class='d-none'>".$rack_l."</div>";
    echo "<div id='rack_r' class='d-none'>".$rack_r."</div>";

    echo "<div id='roof' class='d-none'>".$roof."</div>";
    echo "<div id='roof_type' class='d-none'>".$roof_type."</div>";

    echo "<div id='visor' class='d-none'>".$visor."</div>";
    echo "<div id='visor_side' class='d-none'>".$visor_side."</div>";
    echo "<div id='visor_shift' class='d-none'>".$visor_shift."</div>";
    echo "<div id='visor_side_shift' class='d-none'>".$visor_side_shift."</div>";

    echo "<div id='roof_cut' class='d-none'>".$roof_cut."</div>";
    echo "<div id='roof_f' class='d-none'>".$roof_f."</div>";
    echo "<div id='roof_b' class='d-none'>".$roof_b."</div>";
    echo "<div id='roof_f_shift' class='d-none'>".$roof_f_shift."</div>";
    echo "<div id='roof_b_shift' class='d-none'>".$roof_b_shift."</div>";

    echo "<div id='bottom' class='d-none'>".$bottom."</div>";
    echo "<div id='bottom_type' class='d-none'>".$bottom_type."</div>";

    echo "<div id='entresol' class='d-none'>".$entresol."</div>";
    echo "<div id='entresol_height' class='d-none'>".$entresol_height."</div>";
    echo "<div id='entresol_amount' class='d-none'>".$entresol_amount."</div>";

    echo "<div id='lower_amount' class='d-none'>".$lower_amount."</div>";

    echo "<div id='door_type' class='d-none'>".$door_type."</div>";
    echo "<div id='door_sum' class='d-none'>".$door_sum."</div>";
    echo "<div id='door_facade' class='d-none'>".$door_facade."</div>";

    echo "<div id='hand_type' class='d-none'>".$hand_type."</div>";

    echo "<div id='base_f' class='d-none'>".$base_f."</div>";
    echo "<div id='base_b' class='d-none'>".$base_b."</div>";
    echo "<div id='base_f_shift' class='d-none'>".$base_f_shift."</div>";
    echo "<div id='base_b_shift' class='d-none'>".$base_b_shift."</div>";
    echo "<div id='base_height' class='d-none'>".$base_height."</div>";

    echo "<div id='floor_height' class='d-none'>".$floor_height."</div>";

    echo "<div id='legs_type' class='d-none'>".$legs_type."</div>";

    echo "<div id='wall' class='d-none'>".$wall."</div>";
    echo "<div id='wall_full' class='d-none'>".$wall_full."</div>";
    echo "<div id='wall_cut' class='d-none'>".$wall_cut."</div>";

    echo "<div id='box_width_auto_1' class='d-none'>".$box_width_auto_1."</div>";
    echo "<div id='box_width_auto_2' class='d-none'>".$box_width_auto_2."</div>";
    echo "<div id='box_width_auto_3' class='d-none'>".$box_width_auto_3."</div>";
    echo "<div id='box_width_auto_4' class='d-none'>".$box_width_auto_4."</div>";
    echo "<div id='box_width_auto_5' class='d-none'>".$box_width_auto_5."</div>";
    echo "<div id='box_width_auto_6' class='d-none'>".$box_width_auto_6."</div>";
    echo "<div id='box_width_auto_7' class='d-none'>".$box_width_auto_7."</div>";
    echo "<div id='box_width_auto_8' class='d-none'>".$box_width_auto_8."</div>";
    echo "<div id='box_width_auto_9' class='d-none'>".$box_width_auto_9."</div>";
    echo "<div id='box_width_auto_10' class='d-none'>".$box_width_auto_10."</div>";
    echo "<div id='box_width_auto_11' class='d-none'>".$box_width_auto_11."</div>";
    echo "<div id='box_width_auto_12' class='d-none'>".$box_width_auto_12."</div>";
    echo "<div id='box_width_auto_13' class='d-none'>".$box_width_auto_13."</div>";
    echo "<div id='box_width_auto_14' class='d-none'>".$box_width_auto_14."</div>";
    echo "<div id='box_width_auto_15' class='d-none'>".$box_width_auto_15."</div>";
    echo "<div id='box_width_auto_16' class='d-none'>".$box_width_auto_16."</div>";
    echo "<div id='box_width_auto_17' class='d-none'>".$box_width_auto_17."</div>";
    echo "<div id='box_width_auto_18' class='d-none'>".$box_width_auto_18."</div>";

    echo "<div id='box_width_1' class='d-none'>".$box_width_1."</div>";
    echo "<div id='box_width_2' class='d-none'>".$box_width_2."</div>";
    echo "<div id='box_width_3' class='d-none'>".$box_width_3."</div>";
    echo "<div id='box_width_4' class='d-none'>".$box_width_4."</div>";
    echo "<div id='box_width_5' class='d-none'>".$box_width_5."</div>";
    echo "<div id='box_width_6' class='d-none'>".$box_width_6."</div>";
    echo "<div id='box_width_7' class='d-none'>".$box_width_7."</div>";
    echo "<div id='box_width_8' class='d-none'>".$box_width_8."</div>";
    echo "<div id='box_width_9' class='d-none'>".$box_width_9."</div>";
    echo "<div id='box_width_10' class='d-none'>".$box_width_10."</div>";
    echo "<div id='box_width_11' class='d-none'>".$box_width_11."</div>";
    echo "<div id='box_width_12' class='d-none'>".$box_width_12."</div>";
    echo "<div id='box_width_13' class='d-none'>".$box_width_13."</div>";
    echo "<div id='box_width_14' class='d-none'>".$box_width_14."</div>";
    echo "<div id='box_width_15' class='d-none'>".$box_width_15."</div>";
    echo "<div id='box_width_16' class='d-none'>".$box_width_16."</div>";
    echo "<div id='box_width_17' class='d-none'>".$box_width_17."</div>";
    echo "<div id='box_width_18' class='d-none'>".$box_width_18."</div>";

    echo "<div id='box_fill_type_1' class='d-none'>".$box_fill_type_1."</div>";
    echo "<div id='box_fill_type_2' class='d-none'>".$box_fill_type_2."</div>";
    echo "<div id='box_fill_type_3' class='d-none'>".$box_fill_type_3."</div>";
    echo "<div id='box_fill_type_4' class='d-none'>".$box_fill_type_4."</div>";
    echo "<div id='box_fill_type_5' class='d-none'>".$box_fill_type_5."</div>";
    echo "<div id='box_fill_type_6' class='d-none'>".$box_fill_type_6."</div>";
    echo "<div id='box_fill_type_7' class='d-none'>".$box_fill_type_7."</div>";
    echo "<div id='box_fill_type_8' class='d-none'>".$box_fill_type_8."</div>";
    echo "<div id='box_fill_type_9' class='d-none'>".$box_fill_type_9."</div>";
    echo "<div id='box_fill_type_10' class='d-none'>".$box_fill_type_10."</div>";
    echo "<div id='box_fill_type_11' class='d-none'>".$box_fill_type_11."</div>";
    echo "<div id='box_fill_type_12' class='d-none'>".$box_fill_type_12."</div>";
    echo "<div id='box_fill_type_13' class='d-none'>".$box_fill_type_13."</div>";
    echo "<div id='box_fill_type_14' class='d-none'>".$box_fill_type_14."</div>";
    echo "<div id='box_fill_type_15' class='d-none'>".$box_fill_type_15."</div>";
    echo "<div id='box_fill_type_16' class='d-none'>".$box_fill_type_16."</div>";
    echo "<div id='box_fill_type_17' class='d-none'>".$box_fill_type_17."</div>";
    echo "<div id='box_fill_type_18' class='d-none'>".$box_fill_type_18."</div>";

    echo "<div id='box_fill_amount_1' class='d-none'>".$box_fill_amount_1."</div>";
    echo "<div id='box_fill_amount_2' class='d-none'>".$box_fill_amount_2."</div>";
    echo "<div id='box_fill_amount_3' class='d-none'>".$box_fill_amount_3."</div>";
    echo "<div id='box_fill_amount_4' class='d-none'>".$box_fill_amount_4."</div>";
    echo "<div id='box_fill_amount_5' class='d-none'>".$box_fill_amount_5."</div>";
    echo "<div id='box_fill_amount_6' class='d-none'>".$box_fill_amount_6."</div>";
    echo "<div id='box_fill_amount_7' class='d-none'>".$box_fill_amount_7."</div>";
    echo "<div id='box_fill_amount_8' class='d-none'>".$box_fill_amount_8."</div>";
    echo "<div id='box_fill_amount_9' class='d-none'>".$box_fill_amount_9."</div>";
    echo "<div id='box_fill_amount_10' class='d-none'>".$box_fill_amount_10."</div>";
    echo "<div id='box_fill_amount_11' class='d-none'>".$box_fill_amount_11."</div>";
    echo "<div id='box_fill_amount_12' class='d-none'>".$box_fill_amount_12."</div>";
    echo "<div id='box_fill_amount_13' class='d-none'>".$box_fill_amount_13."</div>";
    echo "<div id='box_fill_amount_14' class='d-none'>".$box_fill_amount_14."</div>";
    echo "<div id='box_fill_amount_15' class='d-none'>".$box_fill_amount_15."</div>";
    echo "<div id='box_fill_amount_16' class='d-none'>".$box_fill_amount_16."</div>";
    echo "<div id='box_fill_amount_17' class='d-none'>".$box_fill_amount_17."</div>";
    echo "<div id='box_fill_amount_18' class='d-none'>".$box_fill_amount_18."</div>";

    echo "<div id='box_wall_1' class='d-none'>".$box_wall_1."</div>";
    echo "<div id='box_wall_2' class='d-none'>".$box_wall_2."</div>";
    echo "<div id='box_wall_3' class='d-none'>".$box_wall_3."</div>";
    echo "<div id='box_wall_4' class='d-none'>".$box_wall_4."</div>";
    echo "<div id='box_wall_5' class='d-none'>".$box_wall_5."</div>";
    echo "<div id='box_wall_6' class='d-none'>".$box_wall_6."</div>";
    echo "<div id='box_wall_7' class='d-none'>".$box_wall_7."</div>";
    echo "<div id='box_wall_8' class='d-none'>".$box_wall_8."</div>";
    echo "<div id='box_wall_9' class='d-none'>".$box_wall_9."</div>";
    echo "<div id='box_wall_10' class='d-none'>".$box_wall_10."</div>";
    echo "<div id='box_wall_11' class='d-none'>".$box_wall_11."</div>";
    echo "<div id='box_wall_12' class='d-none'>".$box_wall_12."</div>";
    echo "<div id='box_wall_13' class='d-none'>".$box_wall_13."</div>";
    echo "<div id='box_wall_14' class='d-none'>".$box_wall_14."</div>";
    echo "<div id='box_wall_15' class='d-none'>".$box_wall_15."</div>";
    echo "<div id='box_wall_16' class='d-none'>".$box_wall_16."</div>";
    echo "<div id='box_wall_17' class='d-none'>".$box_wall_17."</div>";
    echo "<div id='box_wall_18' class='d-none'>".$box_wall_18."</div>";

    echo "<div id='box_door_type_1' class='d-none'>".$box_door_type_1."</div>";
    echo "<div id='box_door_type_2' class='d-none'>".$box_door_type_2."</div>";
    echo "<div id='box_door_type_3' class='d-none'>".$box_door_type_3."</div>";
    echo "<div id='box_door_type_4' class='d-none'>".$box_door_type_4."</div>";
    echo "<div id='box_door_type_5' class='d-none'>".$box_door_type_5."</div>";
    echo "<div id='box_door_type_6' class='d-none'>".$box_door_type_6."</div>";
    echo "<div id='box_door_type_7' class='d-none'>".$box_door_type_7."</div>";
    echo "<div id='box_door_type_8' class='d-none'>".$box_door_type_8."</div>";
    echo "<div id='box_door_type_9' class='d-none'>".$box_door_type_9."</div>";
    echo "<div id='box_door_type_10' class='d-none'>".$box_door_type_10."</div>";
    echo "<div id='box_door_type_11' class='d-none'>".$box_door_type_11."</div>";
    echo "<div id='box_door_type_12' class='d-none'>".$box_door_type_12."</div>";
    echo "<div id='box_door_type_13' class='d-none'>".$box_door_type_13."</div>";
    echo "<div id='box_door_type_14' class='d-none'>".$box_door_type_14."</div>";
    echo "<div id='box_door_type_15' class='d-none'>".$box_door_type_15."</div>";
    echo "<div id='box_door_type_16' class='d-none'>".$box_door_type_16."</div>";
    echo "<div id='box_door_type_17' class='d-none'>".$box_door_type_17."</div>";
    echo "<div id='box_door_type_18' class='d-none'>".$box_door_type_18."</div>";

    echo "<div id='box_split_7' class='d-none'>".$box_split_7."</div>";
    echo "<div id='box_split_8' class='d-none'>".$box_split_8."</div>";
    echo "<div id='box_split_9' class='d-none'>".$box_split_9."</div>";
    echo "<div id='box_split_10' class='d-none'>".$box_split_10."</div>";
    echo "<div id='box_split_11' class='d-none'>".$box_split_11."</div>";
    echo "<div id='box_split_12' class='d-none'>".$box_split_12."</div>";

  ?>

  <script type="module">

    // СОХРАНЕНИЯ
    var saving = {
      height: $('#height_saving').html() || 2000,
      width: $('#width_saving').html() || 2000,
      depth: $('#depth_saving').html() || 500,
      rack_l: $('#rack_l').html() || true,
      rack_r: $('#rack_r').html() || true,

      roof: true,
      roof_in: true,
      roof_out: false,

      visor: false,
      visor_side: false,
      visor_shift: $('#visor_shift').html() || 30,
      visor_side_shift: $('#visor_side_shift').html() || 30,

      roof_cut: false,
      roof_f: true,
      roof_b: true,
      roof_f_shift: $('#roof_f_shift').html() || 50,
      roof_b_shift: $('#roof_b_shift').html() || 50,

      bottom: true,
      bottom_in: true,
      bottom_out: false,

      entresol: true,
      entresol_height: $('#entresol_height').html() || 570,
      // нули тк загрузки из saving в числовые поля нет,
      // написано просто для вида
      entresol_amount: $('#entresol_amount').html() || 1,

      lower_amount: $('#lower_amount').html() || 2,

      base_f: true,
      base_b: true,
      base_f_shift: $('#base_f_shift').html() || 30,
      base_b_shift: $('#base_b_shift').html() || 30,
      base_height: $('#base_height').html() || 20,
      floor_height: $('#floor_height').html() || 20,

      wall: false,
      wall_full: true,
      wall_cut: false,

      door_no: true,
      door_sliding: false,
      door_swing: false,

      door_in: true,
      door_out: false,

      door_two_sl: false,
      door_three_sl: false,
      door_four_two_sl: false,
      door_four_three_sl: false,
      door_one_left_sw: false,
      door_one_right_sw: false,
      door_two_sw: false,

      hand_no: false,
      hand_bracket: true,
      hand_shell: false,
      hand_cut: false,

      legs_no: true,
      legs_85: false,
      legs_100: false,
      legs_120: false,
      legs_150: false,
      legs_rollers: false,

      box_width_1: $('#box_width_1').html() || 300,
      box_width_2: $('#box_width_2').html() || 300,
      box_width_3: $('#box_width_3').html() || 300,
      box_width_4: $('#box_width_4').html() || 300,
      box_width_5: $('#box_width_5').html() || 300,
      box_width_6: $('#box_width_6').html() || 300,
      box_width_7: $('#box_width_7').html() || 300,
      box_width_8: $('#box_width_8').html() || 300,
      box_width_9: $('#box_width_9').html() || 300,
      box_width_10: $('#box_width_10').html() || 300,
      box_width_11: $('#box_width_11').html() || 300,
      box_width_12: $('#box_width_12').html() || 300,
      box_width_13: $('#box_width_13').html() || 300,
      box_width_14: $('#box_width_14').html() || 300,
      box_width_15: $('#box_width_15').html() || 300,
      box_width_16: $('#box_width_16').html() || 300,
      box_width_17: $('#box_width_17').html() || 300,
      box_width_18: $('#box_width_18').html() || 300,

      box_fill_amount_1: $('#box_fill_amount_1').html() || 1,
      box_fill_amount_2: $('#box_fill_amount_2').html() || 1,
      box_fill_amount_3: $('#box_fill_amount_3').html() || 1,
      box_fill_amount_4: $('#box_fill_amount_4').html() || 1,
      box_fill_amount_5: $('#box_fill_amount_5').html() || 1,
      box_fill_amount_6: $('#box_fill_amount_6').html() || 1,
      box_fill_amount_7: $('#box_fill_amount_7').html() || 1,
      box_fill_amount_8: $('#box_fill_amount_8').html() || 1,
      box_fill_amount_9: $('#box_fill_amount_9').html() || 1,
      box_fill_amount_10: $('#box_fill_amount_10').html() || 1,
      box_fill_amount_11: $('#box_fill_amount_11').html() || 1,
      box_fill_amount_12: $('#box_fill_amount_12').html() || 1,
      box_fill_amount_13: $('#box_fill_amount_13').html() || 1,
      box_fill_amount_14: $('#box_fill_amount_14').html() || 1,
      box_fill_amount_15: $('#box_fill_amount_15').html() || 1,
      box_fill_amount_16: $('#box_fill_amount_16').html() || 1,
      box_fill_amount_17: $('#box_fill_amount_17').html() || 1,
      box_fill_amount_18: $('#box_fill_amount_18').html() || 1,

      box_width_auto_1: true,

      box_fill_no_1: true,
      box_fill_shelf_1: false,
      box_fill_boxes_1: false,
      box_fill_rod_1: false,

      box_wall_1: false,
      box_door_no_1: true,
      box_door_one_left_1: false,
      box_door_one_right_1: false,
      box_door_two_1: false,

      box_width_auto_2: true,

      box_fill_no_2: true,
      box_fill_shelf_2: false,
      box_fill_boxes_2: false,
      box_fill_rod_2: false,

      box_wall_2: false,
      box_door_no_2: true,
      box_door_one_left_2: false,
      box_door_one_right_2: false,
      box_door_two_2: false,

      box_width_auto_3: true,

      box_fill_no_3: false,
      box_fill_shelf_3: false,
      box_fill_boxes_3: false,
      box_fill_rod_3: false,

      box_wall_3: false,
      box_door_no_3: true,
      box_door_one_left_3: false,
      box_door_one_right_3: false,
      box_door_two_3: false,

      box_width_auto_4: true,

      box_fill_no_4: true,
      box_fill_shelf_4: false,
      box_fill_boxes_4: false,
      box_fill_rod_4: false,

      box_wall_4: false,
      box_door_no_4: true,
      box_door_one_left_4: false,
      box_door_one_right_4: false,
      box_door_two_4: false,

      box_width_auto_5: true,

      box_fill_no_5: true,
      box_fill_shelf_5: false,
      box_fill_boxes_5: false,
      box_fill_rod_5: false,

      box_wall_5: false,
      box_door_no_5: true,
      box_door_one_left_5: false,
      box_door_one_right_5: false,
      box_door_two_5: false,

      box_width_auto_6: true,

      box_fill_no_6: true,
      box_fill_shelf_6: false,
      box_fill_boxes_6: false,
      box_fill_rod_6: false,

      box_wall_6: false,
      box_door_no_6: true,
      box_door_one_left_6: false,
      box_door_one_right_6: false,
      box_door_two_6: false,

      box_width_auto_7: true,
      box_split_7: false,

      box_fill_no_7: false,
      box_fill_shelf_7: true,
      box_fill_boxes_7: false,
      box_fill_rod_7: false,

      box_wall_7: false,
      box_door_no_7: true,
      box_door_one_left_7: false,
      box_door_one_right_7: false,
      box_door_two_7: false,

      box_width_auto_8: true,
      box_split_8: false,

      box_fill_no_8: true,
      box_fill_shelf_8: false,
      box_fill_boxes_8: false,
      box_fill_rod_8: false,

      box_wall_8: false,
      box_door_no_8: true,
      box_door_one_left_8: false,
      box_door_one_right_8: false,
      box_door_two_8: false,

      box_width_auto_9: true,
      box_split_9: true,

      box_fill_no_9: true,
      box_fill_shelf_9: false,
      box_fill_boxes_9: true,
      box_fill_rod_9: false,

      box_wall_9: false,
      box_door_no_9: true,
      box_door_one_left_9: false,
      box_door_one_right_9: false,
      box_door_two_9: false,

      box_width_auto_10: true,
      box_split_10: false,

      box_fill_no_10: true,
      box_fill_shelf_10: false,
      box_fill_boxes_10: false,
      box_fill_rod_10: false,

      box_wall_10: false,
      box_door_no_10: true,
      box_door_one_left_10: false,
      box_door_one_right_10: false,
      box_door_two_10: false,

      box_width_auto_11: true,
      box_split_11: false,

      box_fill_no_11: true,
      box_fill_shelf_11: false,
      box_fill_boxes_11: false,
      box_fill_rod_11: false,

      box_wall_11: false,
      box_door_no_11: true,
      box_door_one_left_11: false,
      box_door_one_right_11: false,
      box_door_two_11: false,

      box_width_auto_12: true,
      box_split_12: false,

      box_fill_no_12: true,
      box_fill_shelf_12: false,
      box_fill_boxes_12: false,
      box_fill_rod_12: false,

      box_wall_12: false,
      box_door_no_12: true,
      box_door_one_left_12: false,
      box_door_one_right_12: false,
      box_door_two_12: false,

      box_width_auto_13: true,

      box_fill_no_13: true,
      box_fill_shelf_13: false,
      box_fill_boxes_13: false,
      box_fill_rod_13: false,

      box_wall_13: false,
      box_door_no_13: true,
      box_door_one_left_13: false,
      box_door_one_right_13: false,
      box_door_two_13: false,

      box_width_auto_14: true,

      box_fill_no_14: true,
      box_fill_shelf_14: false,
      box_fill_boxes_14: false,
      box_fill_rod_14: false,

      box_wall_14: false,
      box_door_no_14: true,
      box_door_one_left_14: false,
      box_door_one_right_14: false,
      box_door_two_14: false,

      box_width_auto_15: true,

      box_fill_no_15: true,
      box_fill_shelf_15: false,
      box_fill_boxes_15: false,
      box_fill_rod_15: false,

      box_wall_15: false,
      box_door_no_15: true,
      box_door_one_left_15: false,
      box_door_one_right_15: false,
      box_door_two_15: false,

      box_width_auto_16: true,

      box_fill_no_16: true,
      box_fill_shelf_16: false,
      box_fill_boxes_16: false,
      box_fill_rod_16: false,

      box_wall_16: false,
      box_door_no_16: true,
      box_door_one_left_16: false,
      box_door_one_right_16: false,
      box_door_two_16: false,

      box_width_auto_17: true,

      box_fill_no_17: true,
      box_fill_shelf_17: false,
      box_fill_boxes_17: false,
      box_fill_rod_17: false,

      box_wall_17: false,
      box_door_no_17: true,
      box_door_one_left_17: false,
      box_door_one_right_17: false,
      box_door_two_17: false,

      box_width_auto_18: true,

      box_fill_no_18: true,
      box_fill_shelf_18: false,
      box_fill_boxes_18: false,
      box_fill_rod_18: false,

      box_wall_18: false,
      box_door_no_18: true,
      box_door_one_left_18: false,
      box_door_one_right_18: false,
      box_door_two_18: false,
    }

    if($('#openSaving').html()) {
      // console.log('вы пришли из сохранеения');
      // выставляю значения из saving

      if($('#box_door_type_1').html() == 'box_door_no_1') {
        saving.box_door_no_1 = true;
      }
      if($('#box_door_type_1').html() == 'box_door_one_left_1') {
        saving.box_door_one_left_1 = true;
      }
      if($('#box_door_type_1').html() == 'box_door_one_right_1') {
        saving.box_door_one_right_1 = true;
      }
      if($('#box_door_type_1').html() == 'box_door_two_1') {
        saving.box_door_two_1 = true;
      }

      if($('#box_door_type_2').html() == 'box_door_no_2') {
        saving.box_door_no_2 = true;
      }
      if($('#box_door_type_2').html() == 'box_door_one_left_2') {
        saving.box_door_one_left_2 = true;
      }
      if($('#box_door_type_2').html() == 'box_door_one_right_2') {
        saving.box_door_one_right_2 = true;
      }
      if($('#box_door_type_2').html() == 'box_door_two_2') {
        saving.box_door_two_2 = true;
      }

      if($('#box_door_type_3').html() == 'box_door_no_3') {
        saving.box_door_no_3 = true;
      }
      if($('#box_door_type_3').html() == 'box_door_one_left_3') {
        saving.box_door_one_left_3 = true;
      }
      if($('#box_door_type_3').html() == 'box_door_one_right_3') {
        saving.box_door_one_right_3 = true;
      }
      if($('#box_door_type_3').html() == 'box_door_two_3') {
        saving.box_door_two_3 = true;
      }

      if($('#box_door_type_4').html() == 'box_door_no_4') {
        saving.box_door_no_4 = true;
      }
      if($('#box_door_type_4').html() == 'box_door_one_left_4') {
        saving.box_door_one_left_4 = true;
      }
      if($('#box_door_type_4').html() == 'box_door_one_right_4') {
        saving.box_door_one_right_4 = true;
      }
      if($('#box_door_type_4').html() == 'box_door_two_4') {
        saving.box_door_two_4 = true;
      }

      if($('#box_door_type_5').html() == 'box_door_no_5') {
        saving.box_door_no_5 = true;
      }
      if($('#box_door_type_5').html() == 'box_door_one_left_5') {
        saving.box_door_one_left_5 = true;
      }
      if($('#box_door_type_5').html() == 'box_door_one_right_5') {
        saving.box_door_one_right_5 = true;
      }
      if($('#box_door_type_5').html() == 'box_door_two_5') {
        saving.box_door_two_5 = true;
      }

      if($('#box_door_type_6').html() == 'box_door_no_6') {
        saving.box_door_no_6 = true;
      }
      if($('#box_door_type_6').html() == 'box_door_one_left_6') {
        saving.box_door_one_left_6 = true;
      }
      if($('#box_door_type_6').html() == 'box_door_one_right_6') {
        saving.box_door_one_right_6 = true;
      }
      if($('#box_door_type_6').html() == 'box_door_two_6') {
        saving.box_door_two_6 = true;
      }

      if($('#box_door_type_7').html() == 'box_door_no_7') {
        saving.box_door_no_7 = true;
      }
      if($('#box_door_type_7').html() == 'box_door_one_left_7') {
        saving.box_door_one_left_7 = true;
      }
      if($('#box_door_type_7').html() == 'box_door_one_right_7') {
        saving.box_door_one_right_7 = true;
      }
      if($('#box_door_type_7').html() == 'box_door_two_7') {
        saving.box_door_two_7 = true;
      }

      if($('#box_door_type_8').html() == 'box_door_no_8') {
        saving.box_door_no_8 = true;
      }
      if($('#box_door_type_8').html() == 'box_door_one_left_8') {
        saving.box_door_one_left_8 = true;
      }
      if($('#box_door_type_8').html() == 'box_door_one_right_8') {
        saving.box_door_one_right_8 = true;
      }
      if($('#box_door_type_8').html() == 'box_door_two_8') {
        saving.box_door_two_8 = true;
      }

      if($('#box_door_type_9').html() == 'box_door_no_9') {
        saving.box_door_no_9 = true;
      }
      if($('#box_door_type_9').html() == 'box_door_one_left_9') {
        saving.box_door_one_left_9 = true;
      }
      if($('#box_door_type_9').html() == 'box_door_one_right_9') {
        saving.box_door_one_right_9 = true;
      }
      if($('#box_door_type_9').html() == 'box_door_two_9') {
        saving.box_door_two_9 = true;
      }

      if($('#box_door_type_10').html() == 'box_door_no_10') {
        saving.box_door_no_10 = true;
      }
      if($('#box_door_type_10').html() == 'box_door_one_left_10') {
        saving.box_door_one_left_10 = true;
      }
      if($('#box_door_type_10').html() == 'box_door_one_right_10') {
        saving.box_door_one_right_10 = true;
      }
      if($('#box_door_type_10').html() == 'box_door_two_10') {
        saving.box_door_two_10 = true;
      }

      if($('#box_door_type_11').html() == 'box_door_no_11') {
        saving.box_door_no_11 = true;
      }
      if($('#box_door_type_11').html() == 'box_door_one_left_11') {
        saving.box_door_one_left_11 = true;
      }
      if($('#box_door_type_11').html() == 'box_door_one_right_11') {
        saving.box_door_one_right_11 = true;
      }
      if($('#box_door_type_11').html() == 'box_door_two_11') {
        saving.box_door_two_11 = true;
      }

      if($('#box_door_type_12').html() == 'box_door_no_12') {
        saving.box_door_no_12 = true;
      }
      if($('#box_door_type_12').html() == 'box_door_one_left_12') {
        saving.box_door_one_left_12 = true;
      }
      if($('#box_door_type_12').html() == 'box_door_one_right_12') {
        saving.box_door_one_right_12 = true;
      }
      if($('#box_door_type_12').html() == 'box_door_two_12') {
        saving.box_door_two_12 = true;
      }

      if($('#box_door_type_13').html() == 'box_door_no_13') {
        saving.box_door_no_13 = true;
      }
      if($('#box_door_type_13').html() == 'box_door_one_left_13') {
        saving.box_door_one_left_13 = true;
      }
      if($('#box_door_type_13').html() == 'box_door_one_right_13') {
        saving.box_door_one_right_13 = true;
      }
      if($('#box_door_type_13').html() == 'box_door_two_13') {
        saving.box_door_two_13 = true;
      }

      if($('#box_door_type_14').html() == 'box_door_no_14') {
        saving.box_door_no_14 = true;
      }
      if($('#box_door_type_14').html() == 'box_door_one_left_14') {
        saving.box_door_one_left_14 = true;
      }
      if($('#box_door_type_14').html() == 'box_door_one_right_14') {
        saving.box_door_one_right_14 = true;
      }
      if($('#box_door_type_14').html() == 'box_door_two_14') {
        saving.box_door_two_14 = true;
      }

      if($('#box_door_type_15').html() == 'box_door_no_15') {
        saving.box_door_no_15 = true;
      }
      if($('#box_door_type_15').html() == 'box_door_one_left_15') {
        saving.box_door_one_left_15 = true;
      }
      if($('#box_door_type_15').html() == 'box_door_one_right_15') {
        saving.box_door_one_right_15 = true;
      }
      if($('#box_door_type_15').html() == 'box_door_two_15') {
        saving.box_door_two_15 = true;
      }

      if($('#box_door_type_16').html() == 'box_door_no_16') {
        saving.box_door_no_16 = true;
      }
      if($('#box_door_type_16').html() == 'box_door_one_left_16') {
        saving.box_door_one_left_16 = true;
      }
      if($('#box_door_type_16').html() == 'box_door_one_right_16') {
        saving.box_door_one_right_16 = true;
      }
      if($('#box_door_type_16').html() == 'box_door_two_16') {
        saving.box_door_two_16 = true;
      }

      if($('#box_door_type_17').html() == 'box_door_no_17') {
        saving.box_door_no_17 = true;
      }
      if($('#box_door_type_17').html() == 'box_door_one_left_17') {
        saving.box_door_one_left_17 = true;
      }
      if($('#box_door_type_17').html() == 'box_door_one_right_17') {
        saving.box_door_one_right_17 = true;
      }
      if($('#box_door_type_17').html() == 'box_door_two_17') {
        saving.box_door_two_17 = true;
      }

      if($('#box_door_type_18').html() == 'box_door_no_18') {
        saving.box_door_no_18 = true;
      }
      if($('#box_door_type_18').html() == 'box_door_one_left_18') {
        saving.box_door_one_left_18 = true;
      }
      if($('#box_door_type_18').html() == 'box_door_one_right_18') {
        saving.box_door_one_right_18 = true;
      }
      if($('#box_door_type_18').html() == 'box_door_two_18') {
        saving.box_door_two_18 = true;
      }

      if($('#box_door_type_1').html() == 'box_door_no_1') {
        saving.box_door_no_1 = true;
      }
      if($('#box_door_type_1').html() == 'box_door_one_left_1') {
        saving.box_door_one_left_1 = true;
      }
      if($('#box_door_type_1').html() == 'box_door_one_right_1') {
        saving.box_door_one_right_1 = true;
      }
      if($('#box_door_type_1').html() == 'box_door_two_1') {
        saving.box_door_two_1 = true;
      }

      // наполнение

      if($('#box_fill_type_1').html() == 'box_fill_no_1') {
        saving.box_fill_no_1 = true;
      }
      if($('#box_fill_type_1').html() == 'box_fill_shelf_1') {
        saving.box_fill_shelf_1 = true;
      }
      if($('#box_fill_type_1').html() == 'box_fill_boxes_1') {
        saving.box_fill_boxes_1 = true;
      }
      if($('#box_fill_type_1').html() == 'box_fill_rod_1') {
        saving.box_fill_rod_1 = true;
      }

      if($('#box_fill_type_2').html() == 'box_fill_no_2') {
        saving.box_fill_no_2 = true;
      }
      if($('#box_fill_type_2').html() == 'box_fill_shelf_2') {
        saving.box_fill_shelf_2 = true;
      }
      if($('#box_fill_type_2').html() == 'box_fill_boxes_2') {
        saving.box_fill_boxes_2 = true;
      }
      if($('#box_fill_type_2').html() == 'box_fill_rod_2') {
        saving.box_fill_rod_2 = true;
      }

      if($('#box_fill_type_3').html() == 'box_fill_no_3') {
        saving.box_fill_no_3 = true;
      }
      if($('#box_fill_type_3').html() == 'box_fill_shelf_3') {
        saving.box_fill_shelf_3 = true;
      }
      if($('#box_fill_type_3').html() == 'box_fill_boxes_3') {
        saving.box_fill_boxes_3 = true;
      }
      if($('#box_fill_type_3').html() == 'box_fill_rod_3') {
        saving.box_fill_rod_3 = true;
      }

      if($('#box_fill_type_4').html() == 'box_fill_no_4') {
        saving.box_fill_no_4 = true;
      }
      if($('#box_fill_type_4').html() == 'box_fill_shelf_4') {
        saving.box_fill_shelf_4 = true;
      }
      if($('#box_fill_type_4').html() == 'box_fill_boxes_4') {
        saving.box_fill_boxes_4 = true;
      }
      if($('#box_fill_type_4').html() == 'box_fill_rod_4') {
        saving.box_fill_rod_4 = true;
      }

      if($('#box_fill_type_5').html() == 'box_fill_no_5') {
        saving.box_fill_no_5 = true;
      }
      if($('#box_fill_type_5').html() == 'box_fill_shelf_5') {
        saving.box_fill_shelf_5 = true;
      }
      if($('#box_fill_type_5').html() == 'box_fill_boxes_5') {
        saving.box_fill_boxes_5 = true;
      }
      if($('#box_fill_type_5').html() == 'box_fill_rod_5') {
        saving.box_fill_rod_5 = true;
      }

      if($('#box_fill_type_6').html() == 'box_fill_no_6') {
        saving.box_fill_no_6 = true;
      }
      if($('#box_fill_type_6').html() == 'box_fill_shelf_6') {
        saving.box_fill_shelf_6 = true;
      }
      if($('#box_fill_type_6').html() == 'box_fill_boxes_6') {
        saving.box_fill_boxes_6 = true;
      }
      if($('#box_fill_type_6').html() == 'box_fill_rod_6') {
        saving.box_fill_rod_6 = true;
      }

      if($('#box_fill_type_7').html() == 'box_fill_no_7') {
        saving.box_fill_no_7 = true;
      }
      if($('#box_fill_type_7').html() == 'box_fill_shelf_7') {
        saving.box_fill_shelf_7 = true;
      }
      if($('#box_fill_type_7').html() == 'box_fill_boxes_7') {
        saving.box_fill_boxes_7 = true;
      }
      if($('#box_fill_type_7').html() == 'box_fill_rod_7') {
        saving.box_fill_rod_7 = true;
      }

      if($('#box_fill_type_8').html() == 'box_fill_no_8') {
        saving.box_fill_no_8 = true;
      }
      if($('#box_fill_type_8').html() == 'box_fill_shelf_8') {
        saving.box_fill_shelf_8 = true;
      }
      if($('#box_fill_type_8').html() == 'box_fill_boxes_8') {
        saving.box_fill_boxes_8 = true;
      }
      if($('#box_fill_type_8').html() == 'box_fill_rod_8') {
        saving.box_fill_rod_8 = true;
      }

      if($('#box_fill_type_9').html() == 'box_fill_no_9') {
        saving.box_fill_no_9 = true;
      }
      if($('#box_fill_type_9').html() == 'box_fill_shelf_9') {
        saving.box_fill_shelf_9 = true;
      }
      if($('#box_fill_type_9').html() == 'box_fill_boxes_9') {
        saving.box_fill_boxes_9 = true;
      }
      if($('#box_fill_type_9').html() == 'box_fill_rod_9') {
        saving.box_fill_rod_9 = true;
      }

      if($('#box_fill_type_10').html() == 'box_fill_no_10') {
        saving.box_fill_no_10 = true;
      }
      if($('#box_fill_type_10').html() == 'box_fill_shelf_10') {
        saving.box_fill_shelf_10 = true;
      }
      if($('#box_fill_type_10').html() == 'box_fill_boxes_10') {
        saving.box_fill_boxes_10 = true;
      }
      if($('#box_fill_type_10').html() == 'box_fill_rod_10') {
        saving.box_fill_rod_10 = true;
      }

      if($('#box_fill_type_11').html() == 'box_fill_no_11') {
        saving.box_fill_no_11 = true;
      }
      if($('#box_fill_type_11').html() == 'box_fill_shelf_11') {
        saving.box_fill_shelf_11 = true;
      }
      if($('#box_fill_type_11').html() == 'box_fill_boxes_11') {
        saving.box_fill_boxes_11 = true;
      }
      if($('#box_fill_type_11').html() == 'box_fill_rod_11') {
        saving.box_fill_rod_11 = true;
      }

      if($('#box_fill_type_12').html() == 'box_fill_no_12') {
        saving.box_fill_no_12 = true;
      }
      if($('#box_fill_type_12').html() == 'box_fill_shelf_12') {
        saving.box_fill_shelf_12 = true;
      }
      if($('#box_fill_type_12').html() == 'box_fill_boxes_12') {
        saving.box_fill_boxes_12 = true;
      }
      if($('#box_fill_type_12').html() == 'box_fill_rod_12') {
        saving.box_fill_rod_12 = true;
      }

      if($('#box_fill_type_13').html() == 'box_fill_no_13') {
        saving.box_fill_no_13 = true;
      }
      if($('#box_fill_type_13').html() == 'box_fill_shelf_13') {
        saving.box_fill_shelf_13 = true;
      }
      if($('#box_fill_type_13').html() == 'box_fill_boxes_13') {
        saving.box_fill_boxes_13 = true;
      }
      if($('#box_fill_type_13').html() == 'box_fill_rod_13') {
        saving.box_fill_rod_13 = true;
      }

      if($('#box_fill_type_14').html() == 'box_fill_no_14') {
        saving.box_fill_no_14 = true;
      }
      if($('#box_fill_type_14').html() == 'box_fill_shelf_14') {
        saving.box_fill_shelf_14 = true;
      }
      if($('#box_fill_type_14').html() == 'box_fill_boxes_14') {
        saving.box_fill_boxes_14 = true;
      }
      if($('#box_fill_type_14').html() == 'box_fill_rod_14') {
        saving.box_fill_rod_14 = true;
      }

      if($('#box_fill_type_15').html() == 'box_fill_no_15') {
        saving.box_fill_no_15 = true;
      }
      if($('#box_fill_type_15').html() == 'box_fill_shelf_15') {
        saving.box_fill_shelf_15 = true;
      }
      if($('#box_fill_type_15').html() == 'box_fill_boxes_15') {
        saving.box_fill_boxes_15 = true;
      }
      if($('#box_fill_type_15').html() == 'box_fill_rod_15') {
        saving.box_fill_rod_15 = true;
      }

      if($('#box_fill_type_16').html() == 'box_fill_no_16') {
        saving.box_fill_no_16 = true;
      }
      if($('#box_fill_type_16').html() == 'box_fill_shelf_16') {
        saving.box_fill_shelf_16 = true;
      }
      if($('#box_fill_type_16').html() == 'box_fill_boxes_16') {
        saving.box_fill_boxes_16 = true;
      }
      if($('#box_fill_type_16').html() == 'box_fill_rod_16') {
        saving.box_fill_rod_16 = true;
      }

      if($('#box_fill_type_17').html() == 'box_fill_no_17') {
        saving.box_fill_no_17 = true;
      }
      if($('#box_fill_type_17').html() == 'box_fill_shelf_17') {
        saving.box_fill_shelf_17 = true;
      }
      if($('#box_fill_type_17').html() == 'box_fill_boxes_17') {
        saving.box_fill_boxes_17 = true;
      }
      if($('#box_fill_type_17').html() == 'box_fill_rod_17') {
        saving.box_fill_rod_17 = true;
      }

      if($('#box_fill_type_18').html() == 'box_fill_no_18') {
        saving.box_fill_no_18 = true;
      }
      if($('#box_fill_type_18').html() == 'box_fill_shelf_18') {
        saving.box_fill_shelf_18 = true;
      }
      if($('#box_fill_type_18').html() == 'box_fill_boxes_18') {
        saving.box_fill_boxes_18 = true;
      }
      if($('#box_fill_type_18').html() == 'box_fill_rod_18') {
        saving.box_fill_rod_18 = true;
      }


      $('#inputNumber_fill_amount_1').val(saving.box_fill_amount_1);
      $('#inputNumber_fill_amount_2').val(saving.box_fill_amount_2);
      $('#inputNumber_fill_amount_3').val(saving.box_fill_amount_3);
      $('#inputNumber_fill_amount_4').val(saving.box_fill_amount_4);
      $('#inputNumber_fill_amount_5').val(saving.box_fill_amount_5);
      $('#inputNumber_fill_amount_6').val(saving.box_fill_amount_6);
      $('#inputNumber_fill_amount_7').val(saving.box_fill_amount_7);
      $('#inputNumber_fill_amount_8').val(saving.box_fill_amount_8);
      $('#inputNumber_fill_amount_9').val(saving.box_fill_amount_9);
      $('#inputNumber_fill_amount_10').val(saving.box_fill_amount_10);
      $('#inputNumber_fill_amount_11').val(saving.box_fill_amount_11);
      $('#inputNumber_fill_amount_12').val(saving.box_fill_amount_12);
      $('#inputNumber_fill_amount_13').val(saving.box_fill_amount_13);
      $('#inputNumber_fill_amount_14').val(saving.box_fill_amount_14);
      $('#inputNumber_fill_amount_15').val(saving.box_fill_amount_15);
      $('#inputNumber_fill_amount_16').val(saving.box_fill_amount_16);
      $('#inputNumber_fill_amount_17').val(saving.box_fill_amount_17);
      $('#inputNumber_fill_amount_18').val(saving.box_fill_amount_18);

      // высота
      $('#inputNumber_width_box_1').val(saving.box_width_1);
      $('#inputRange_width_box_1').val(saving.box_width_1);

      $('#inputNumber_width_box_2').val(saving.box_width_2);
      $('#inputRange_width_box_2').val(saving.box_width_2);

      $('#inputNumber_width_box_3').val(saving.box_width_3);
      $('#inputRange_width_box_3').val(saving.box_width_3);

      $('#inputNumber_width_box_4').val(saving.box_width_4);
      $('#inputRange_width_box_4').val(saving.box_width_4);

      $('#inputNumber_width_box_5').val(saving.box_width_5);
      $('#inputRange_width_box_5').val(saving.box_width_5);

      $('#inputNumber_width_box_6').val(saving.box_width_6);
      $('#inputRange_width_box_6').val(saving.box_width_6);

      $('#inputNumber_width_box_7').val(saving.box_width_7);
      $('#inputRange_width_box_7').val(saving.box_width_7);

      $('#inputNumber_width_box_8').val(saving.box_width_8);
      $('#inputRange_width_box_8').val(saving.box_width_8);

      $('#inputNumber_width_box_9').val(saving.box_width_9);
      $('#inputRange_width_box_9').val(saving.box_width_9);

      $('#inputNumber_width_box_10').val(saving.box_width_10);
      $('#inputRange_width_box_10').val(saving.box_width_10);

      $('#inputNumber_width_box_11').val(saving.box_width_11);
      $('#inputRange_width_box_11').val(saving.box_width_11);

      $('#inputNumber_width_box_12').val(saving.box_width_12);
      $('#inputRange_width_box_12').val(saving.box_width_12);

      $('#inputNumber_width_box_13').val(saving.box_width_13);
      $('#inputRange_width_box_13').val(saving.box_width_13);

      $('#inputNumber_width_box_14').val(saving.box_width_14);
      $('#inputRange_width_box_14').val(saving.box_width_14);

      $('#inputNumber_width_box_15').val(saving.box_width_15);
      $('#inputRange_width_box_15').val(saving.box_width_15);

      $('#inputNumber_width_box_16').val(saving.box_width_16);
      $('#inputRange_width_box_16').val(saving.box_width_16);

      $('#inputNumber_width_box_17').val(saving.box_width_17);
      $('#inputRange_width_box_17').val(saving.box_width_17);

      $('#inputNumber_width_box_18').val(saving.box_width_18);
      $('#inputRange_width_box_18').val(saving.box_width_18);


      if($('#box_split_7').html()) {
        saving.box_split_7 = true;
      } else {
        saving.box_split_7 = false;
      }

      if($('#box_split_8').html()) {
        saving.box_split_8 = true;
      } else {
        saving.box_split_8 = false;
      }

      if($('#box_split_9').html()) {
        saving.box_split_9 = true;
      } else {
        saving.box_split_9 = false;
      }

      if($('#box_split_10').html()) {
        saving.box_split_10 = true;
      } else {
        saving.box_split_10 = false;
      }

      if($('#box_split_11').html()) {
        saving.box_split_11 = true;
      } else {
        saving.box_split_11 = false;
      }

      if($('#box_split_12').html()) {
        saving.box_split_12 = true;
      } else {
        saving.box_split_12 = false;
      }

      if($('#box_wall_1').html()) {
        saving.box_wall_1 = true;
      } else {
        saving.box_wall_1 = false;
      }

      if($('#box_wall_2').html()) {
        saving.box_wall_2 = true;
      } else {
        saving.box_wall_2 = false;
      }

      if($('#box_wall_3').html()) {
        saving.box_wall_3 = true;
      } else {
        saving.box_wall_3 = false;
      }

      if($('#box_wall_4').html()) {
        saving.box_wall_4 = true;
      } else {
        saving.box_wall_4 = false;
      }

      if($('#box_wall_5').html()) {
        saving.box_wall_5 = true;
      } else {
        saving.box_wall_5 = false;
      }

      if($('#box_wall_6').html()) {
        saving.box_wall_6 = true;
      } else {
        saving.box_wall_6 = false;
      }

      if($('#box_wall_7').html()) {
        saving.box_wall_7 = true;
      } else {
        saving.box_wall_7 = false;
      }

      if($('#box_wall_8').html()) {
        saving.box_wall_8 = true;
      } else {
        saving.box_wall_8 = false;
      }

      if($('#box_wall_9').html()) {
        saving.box_wall_9 = true;
      } else {
        saving.box_wall_9 = false;
      }

      if($('#box_wall_10').html()) {
        saving.box_wall_10 = true;
      } else {
        saving.box_wall_10 = false;
      }

      if($('#box_wall_11').html()) {
        saving.box_wall_11 = true;
      } else {
        saving.box_wall_11 = false;
      }

      if($('#box_wall_12').html()) {
        saving.box_wall_12 = true;
      } else {
        saving.box_wall_12 = false;
      }

      if($('#box_wall_13').html()) {
        saving.box_wall_13 = true;
      } else {
        saving.box_wall_13 = false;
      }

      if($('#box_wall_14').html()) {
        saving.box_wall_14 = true;
      } else {
        saving.box_wall_14 = false;
      }

      if($('#box_wall_15').html()) {
        saving.box_wall_15 = true;
      } else {
        saving.box_wall_15 = false;
      }

      if($('#box_wall_16').html()) {
        saving.box_wall_16 = true;
      } else {
        saving.box_wall_16 = false;
      }

      if($('#box_wall_17').html()) {
        saving.box_wall_17 = true;
      } else {
        saving.box_wall_17 = false;
      }

      if($('#box_wall_18').html()) {
        saving.box_wall_18 = true;
      } else {
        saving.box_wall_18 = false;
      }

      if($('#box_width_auto_1').html()) {
        saving.box_width_auto_1 = true;
      } else {
        saving.box_width_auto_1 = false;
      }

      if($('#box_width_auto_2').html()) {
        saving.box_width_auto_2 = true;
      } else {
        saving.box_width_auto_2 = false;
      }

      if($('#box_width_auto_3').html()) {
        saving.box_width_auto_3 = true;
      } else {
        saving.box_width_auto_3 = false;
      }

      if($('#box_width_auto_4').html()) {
        saving.box_width_auto_4 = true;
      } else {
        saving.box_width_auto_4 = false;
      }

      if($('#box_width_auto_5').html()) {
        saving.box_width_auto_5 = true;
      } else {
        saving.box_width_auto_5 = false;
      }

      if($('#box_width_auto_6').html()) {
        saving.box_width_auto_6 = true;
      } else {
        saving.box_width_auto_6 = false;
      }

      if($('#box_width_auto_7').html()) {
        saving.box_width_auto_7 = true;
      } else {
        saving.box_width_auto_7 = false;
      }

      if($('#box_width_auto_8').html()) {
        saving.box_width_auto_8 = true;
      } else {
        saving.box_width_auto_8 = false;
      }

      if($('#box_width_auto_9').html()) {
        saving.box_width_auto_9 = true;
      } else {
        saving.box_width_auto_9 = false;
      }

      if($('#box_width_auto_10').html()) {
        saving.box_width_auto_10 = true;
      } else {
        saving.box_width_auto_10 = false;
      }

      if($('#box_width_auto_11').html()) {
        saving.box_width_auto_11 = true;
      } else {
        saving.box_width_auto_11 = false;
      }

      if($('#box_width_auto_12').html()) {
        saving.box_width_auto_12 = true;
      } else {
        saving.box_width_auto_12 = false;
      }

      if($('#box_width_auto_13').html()) {
        saving.box_width_auto_13 = true;
      } else {
        saving.box_width_auto_13 = false;
      }

      if($('#box_width_auto_14').html()) {
        saving.box_width_auto_14 = true;
      } else {
        saving.box_width_auto_14 = false;
      }

      if($('#box_width_auto_15').html()) {
        saving.box_width_auto_15 = true;
      } else {
        saving.box_width_auto_15 = false;
      }

      if($('#box_width_auto_16').html()) {
        saving.box_width_auto_16 = true;
      } else {
        saving.box_width_auto_16 = false;
      }

      if($('#box_width_auto_17').html()) {
        saving.box_width_auto_17 = true;
      } else {
        saving.box_width_auto_17 = false;
      }

      if($('#box_width_auto_18').html()) {
        saving.box_width_auto_18 = true;
      } else {
        saving.box_width_auto_18 = false;
      }

      // console.log($('box_width_auto_1').html());

      // высота
      $('#inputNumber_height').val(saving.height);
      $('#inputRange_height').val(saving.height);
      // ширина
      $('#inputNumber_width').val(saving.width);
      $('#inputRange_width').val(saving.width);
      // глубина
      $('#inputNumber_depth').val(saving.depth);
      $('#inputRange_depth').val(saving.depth);

      if($('#rack_l').html()) {
        saving.rack_l = true;
      } else {
        saving.rack_l = false;
      }

      if($('#rack_r').html()) {
        saving.rack_r = true;
      } else {
        saving.rack_r = false;
      }

      if($('#roof').html()) {
        saving.roof = true;
      } else {
        saving.roof = false;
      }

      if($('#roof_type').html() == 'roof_in') {
        saving.roof_in = true;
        saving.roof_out = false;
      } else {
        saving.roof_in = false;
        saving.roof_out = true;
      }

      if($('#visor').html()) {
        saving.visor = true;
      } else {
        saving.visor = false;
      }

      if($('#visor_side').html()) {
        saving.visor_side = true;
      } else {
        saving.visor_side = false;
      }

      $('#inputNumber_visor').val(saving.visor_shift);
      $('#inputRange_visor').val(saving.visor_shift);

      $('#inputNumber_visor_side').val(saving.visor_side_shift);
      $('#inputRange_visor_side').val(saving.visor_side_shift);

      if($('#roof_cut').html()) {
        saving.roof_cut = true;
      } else {
        saving.roof_cut = false;
      }

      if($('#roof_f').html()) {
        saving.roof_cut = true;
      } else {
        saving.roof_cut = false;
      }

      if($('#roof_b').html()) {
        saving.roof_b = true;
      } else {
        saving.roof_b = false;
      }

      $('#inputNumber_roof_f').val(saving.roof_f_shift);
      $('#inputRange_roof_f').val(saving.roof_f_shift);

      $('#inputNumber_roof_b').val(saving.roof_b_shift);
      $('#inputRange_roof_b').val(saving.roof_b_shift);

      if($('#bottom').html()) {
        saving.bottom = true;
      } else {
        saving.bottom = false;
      }

      if($('#bottom_type').html() == 'bottom_in') {
        saving.bottom_in = true;
        saving.bottom_out = false;
      } else {
        saving.bottom_in = false;
        saving.bottom_out = true;
      }

      if($('#entresol').html()) {
        saving.entresol = true;
      } else {
        saving.entresol = false;
      }

      $('#inputNumber_entresol').val(saving.entresol_height);
      $('#inputRange_entresol').val(saving.entresol_height);

      $('#inputNumber_entresol_amount').val(saving.entresol_amount);

      $('#inputNumber_lower_amount').val(saving.lower_amount);
      $('#inputRange_lower_amount').val(saving.lower_amount);

      if($('#door_type').html() == 'door_no') {
        saving.door_no = true;
        saving.door_sliding = false;
        saving.door_swing = false;
      }
      if($('#door_type').html() == 'door_sliding'){
        saving.door_no = false;
        saving.door_sliding = true;
        saving.door_swing = false;
      }
      if($('#door_type').html() == 'door_swing'){
        saving.door_no = false;
        saving.door_sliding = false;
        saving.door_swing = true;
      }

      saving.door_two_sl = false;
      saving.door_three_sl = false;
      saving.door_four_two_sl = false;
      saving.door_four_three_sl = false;
      saving.door_one_left_sw = false;
      saving.door_one_right_sw = false;
      saving.door_two_sw = false;

      if($('#door_sum').html() == 'door_two_sl') {
        saving.door_two_sl = true;
      }
      if($('#door_sum').html() == 'door_three_sl') {
        saving.door_three_sl = true;
      }
      if($('#door_sum').html() == 'door_four_two_sl') {
        saving.door_four_two_sl = true;
      }
      if($('#door_sum').html() == 'door_four_three_sl') {
        saving.door_four_three_sl = true;
      }
      if($('#door_sum').html() == 'door_one_left_sw') {
        saving.door_one_left_sw = true;
      }
      if($('#door_sum').html() == 'door_one_right_sw') {
        saving.door_one_right_sw = true;
      }
      if($('#door_sum').html() == 'door_two_sw') {
        saving.door_two_sw = true;
      }

      if($('#door_type').html() == 'door_in'){
        saving.door_in = true;
        saving.door_out = false;
      } else {
        saving.door_in = false;
        saving.door_out = true;
      }

      saving.hand_no = false;
      saving.hand_bracket = false;
      saving.hand_shell = false;
      saving.hand_cut = false;

      if($('#hand_type').html() == 'hand_no') {
        saving.hand_no = true;
      }
      if($('#hand_type').html() == 'hand_bracket') {
        saving.hand_bracket = true;
      }
      if($('#hand_type').html() == 'hand_shell') {
        saving.hand_shell = true;
      }
      if($('#hand_type').html() == 'hand_cut') {
        saving.hand_cut = true;
      }
      if($('#hand_type').html() == '') {
        saving.hand_bracket = true;
      }

      if($('#base_f').html()) {
        saving.base_f = true;
      } else {
        saving.base_f = false;
      }

      if($('#base_b').html()) {
        saving.base_b = true;
      } else {
        saving.base_b = false;
      }

      $('#inputNumber_base_f').val(saving.base_f_shift);
      $('#inputRange_base_f').val(saving.base_f_shift);

      $('#inputNumber_base_b').val(saving.base_b_shift);
      $('#inputRange_base_b').val(saving.base_b_shift);

      $('#inputNumber_base_height').val(saving.base_height);
      $('#inputRange_base_height').val(saving.base_height);

      $('#inputNumber_floor_height').val(saving.floor_height);
      $('#inputRange_floor_height').val(saving.floor_height);

      // saving.legs_no = false;
      if($('#legs_type').html() == 'legs_no') {
        saving.legs_no = true;
      }
      if($('#legs_type').html() == 'legs_85') {
        saving.legs_85 = true;
      }
      if($('#legs_type').html() == 'legs_100') {
        saving.legs_100 = true;
      }
      if($('#legs_type').html() == 'legs_120') {
        saving.legs_120 = true;
      }
      if($('#legs_type').html() == 'legs_150') {
        saving.legs_150 = true;
      }
      if($('#legs_type').html() == 'legs_rollers') {
        saving.legs_rollers = true;
      }

      if($('#wall').html()) {
        saving.wall = true;
      } else {
        saving.wall = false;
      }

      if($('#wall_full').html()) {
        saving.wall_full = true;
      } else {
        saving.wall_full = false;
      }

      if($('#wall_cut').html()) {
        saving.wall_cut = true;
      } else {
        saving.wall_cut = false;
      }
    } else {
      // console.log('рнадом утнffик');
    }

    // console.log(saving.depth);

    // применяю saving к select полям,
    // отмечаю select нужные поля
    if (saving.roof_in) {
      $('option[value="roof_in"]').attr('selected', true);
      $('option[value="roof_out"]').attr('selected', false);
    } else {
      $('option[value="roof_in"]').attr('selected', false);
      $('option[value="roof_out"]').attr('selected', true);
    }
    if (saving.bottom_in) {
      $('option[value="bottom_in"]').attr('selected', true);
      $('option[value="bottom_out"]').attr('selected', false);
    } else {
      $('option[value="bottom_in"]').attr('selected', false);
      $('option[value="bottom_out"]').attr('selected', true);
    }

    // копирую из сохранений данные в рабочий массив stock
    var stock = {
      rack_l: saving.rack_l,
      rack_r: saving.rack_r,

      roof: saving.roof,
      roof_in: saving.roof_in,
      roof_out: saving.roof_out,

      visor: saving.visor,
      visor_side: saving.visor_side,

      roof_cut: saving.roof_cut,
      roof_f: saving.roof_f,
      roof_b: saving.roof_b,

      bottom: saving.bottom,
      bottom_in: saving.bottom_in,
      bottom_out: saving.bottom_out,

      entresol: saving.entresol,

      base_f: saving.base_f,
      base_b: saving.base_b,

      wall: saving.wall,
      wall_full: saving.wall_full,
      wall_cut: saving.wall_cut,

      door_no: saving.door_no,
      door_sliding: saving.door_sliding,
      door_swing: saving.door_swing,

      door_two_sl: saving.door_two_sl,
      door_three_sl: saving.door_three_sl,
      door_four_two_sl: saving.door_four_two_sl,
      door_four_three_sl: saving.door_four_three_sl,
      door_one_left_sw: saving.door_one_left_sw,
      door_one_right_sw: saving.door_one_right_sw,
      door_two_sw: saving.door_two_sw,

      door_in: saving.door_in,
      door_out: saving.door_out,

      hand_no: saving.hand_no,
      hand_bracket: saving.hand_bracket,
      hand_shell: saving.hand_shell,
      hand_cut: saving.hand_cut,

      legs_no: saving.legs_no,
      legs_85: saving.legs_85,
      legs_100: saving.legs_100,
      legs_120: saving.legs_120,
      legs_150: saving.legs_150,
      legs_rollers: saving.legs_rollers,

      entresol_amount: 0,
      lower_amount: 1,

      box_width_auto_1: saving.box_width_auto_1,

      box_fill_no_1: saving.box_fill_no_1,
      box_fill_shelf_1: saving.box_fill_shelf_1,
      box_fill_boxes_1: saving.box_fill_boxes_1,
      box_fill_rod_1: saving.box_fill_rod_1,

      box_wall_1: saving.box_wall_1,
      box_door_no_1: saving.box_door_no_1,
      box_door_one_left_1: saving.box_door_one_left_1,
      box_door_one_right_1: saving.box_door_one_right_1,
      box_door_two_1: saving.box_door_two_1,

      box_width_auto_2: saving.box_width_auto_2,

      box_fill_no_2: saving.box_fill_no_2,
      box_fill_shelf_2: saving.box_fill_shelf_2,
      box_fill_boxes_2: saving.box_fill_boxes_2,
      box_fill_rod_2: saving.box_fill_rod_2,

      box_wall_2: saving.box_wall_2,
      box_door_no_2: saving.box_door_no_2,
      box_door_one_left_2: saving.box_door_one_left_2,
      box_door_one_right_2: saving.box_door_one_right_2,
      box_door_two_2: saving.box_door_two_2,

      box_width_auto_3: saving.box_width_auto_3,

      box_fill_no_3: saving.box_fill_no_3,
      box_fill_shelf_3: saving.box_fill_shelf_3,
      box_fill_boxes_3: saving.box_fill_boxes_3,
      box_fill_rod_3: saving.box_fill_rod_3,

      box_wall_3: saving.box_wall_3,
      box_door_no_3: saving.box_door_no_3,
      box_door_one_left_3: saving.box_door_one_left_3,
      box_door_one_right_3: saving.box_door_one_right_3,
      box_door_two_3: saving.box_door_two_3,

      box_width_auto_4: saving.box_width_auto_4,

      box_fill_no_4: saving.box_fill_no_4,
      box_fill_shelf_4: saving.box_fill_shelf_4,
      box_fill_boxes_4: saving.box_fill_boxes_4,
      box_fill_rod_4: saving.box_fill_rod_4,

      box_wall_4: saving.box_wall_4,
      box_door_no_4: saving.box_door_no_4,
      box_door_one_left_4: saving.box_door_one_left_4,
      box_door_one_right_4: saving.box_door_one_right_4,
      box_door_two_4: saving.box_door_two_4,

      box_width_auto_5: saving.box_width_auto_5,

      box_fill_no_5: saving.box_fill_no_5,
      box_fill_shelf_5: saving.box_fill_shelf_5,
      box_fill_boxes_5: saving.box_fill_boxes_5,
      box_fill_rod_5: saving.box_fill_rod_5,

      box_wall_5: saving.box_wall_5,
      box_door_no_5: saving.box_door_no_5,
      box_door_one_left_5: saving.box_door_one_left_5,
      box_door_one_right_5: saving.box_door_one_right_5,
      box_door_two_5: saving.box_door_two_5,

      box_width_auto_6: saving.box_width_auto_6,

      box_fill_no_6: saving.box_fill_no_6,
      box_fill_shelf_6: saving.box_fill_shelf_6,
      box_fill_boxes_6: saving.box_fill_boxes_6,
      box_fill_rod_6: saving.box_fill_rod_6,

      box_wall_6: saving.box_wall_6,
      box_door_no_6: saving.box_door_no_6,
      box_door_one_left_6: saving.box_door_one_left_6,
      box_door_one_right_6: saving.box_door_one_right_6,
      box_door_two_6: saving.box_door_two_6,

      box_width_auto_7: saving.box_width_auto_7,
      box_split_7: saving.box_split_7,

      box_fill_no_7: saving.box_fill_no_7,
      box_fill_shelf_7: saving.box_fill_shelf_7,
      box_fill_boxes_7: saving.box_fill_boxes_7,
      box_fill_rod_7: saving.box_fill_rod_7,

      box_wall_7: saving.box_wall_7,
      box_door_no_7: saving.box_door_no_7,
      box_door_one_left_7: saving.box_door_one_left_7,
      box_door_one_right_7: saving.box_door_one_right_7,
      box_door_two_7: saving.box_door_two_7,

      box_width_auto_8: saving.box_width_auto_8,
      box_split_8: saving.box_split_8,

      box_fill_no_8: saving.box_fill_no_8,
      box_fill_shelf_8: saving.box_fill_shelf_8,
      box_fill_boxes_8: saving.box_fill_boxes_8,
      box_fill_rod_8: saving.box_fill_rod_8,

      box_wall_8: saving.box_wall_8,
      box_door_no_8: saving.box_door_no_8,
      box_door_one_left_8: saving.box_door_one_left_8,
      box_door_one_right_8: saving.box_door_one_right_8,
      box_door_two_8: saving.box_door_two_8,

      box_width_auto_9: saving.box_width_auto_9,
      box_split_9: saving.box_split_9,

      box_fill_no_9: saving.box_fill_no_9,
      box_fill_shelf_9: saving.box_fill_shelf_9,
      box_fill_boxes_9: saving.box_fill_boxes_9,
      box_fill_rod_9: saving.box_fill_rod_9,

      box_wall_9: saving.box_wall_9,
      box_door_no_9: saving.box_door_no_9,
      box_door_one_left_9: saving.box_door_one_left_9,
      box_door_one_right_9: saving.box_door_one_right_9,
      box_door_two_9: saving.box_door_two_9,

      box_width_auto_10: saving.box_width_auto_10,
      box_split_10: saving.box_split_10,

      box_fill_no_10: saving.box_fill_no_10,
      box_fill_shelf_10: saving.box_fill_shelf_10,
      box_fill_boxes_10: saving.box_fill_boxes_10,
      box_fill_rod_10: saving.box_fill_rod_10,

      box_wall_10: saving.box_wall_10,
      box_door_no_10: saving.box_door_no_10,
      box_door_one_left_10: saving.box_door_one_left_10,
      box_door_one_right_10: saving.box_door_one_right_10,
      box_door_two_10: saving.box_door_two_10,

      box_width_auto_11: saving.box_width_auto_11,
      box_split_11: saving.box_split_11,

      box_fill_no_11: saving.box_fill_no_11,
      box_fill_shelf_11: saving.box_fill_shelf_11,
      box_fill_boxes_11: saving.box_fill_boxes_11,
      box_fill_rod_11: saving.box_fill_rod_11,

      box_wall_11: saving.box_wall_11,
      box_door_no_11: saving.box_door_no_11,
      box_door_one_left_11: saving.box_door_one_left_11,
      box_door_one_right_11: saving.box_door_one_right_11,
      box_door_two_11: saving.box_door_two_11,

      box_width_auto_12: saving.box_width_auto_12,
      box_split_12: saving.box_split_12,

      box_fill_no_12: saving.box_fill_no_12,
      box_fill_shelf_12: saving.box_fill_shelf_12,
      box_fill_boxes_12: saving.box_fill_boxes_12,
      box_fill_rod_12: saving.box_fill_rod_12,

      box_wall_12: saving.box_wall_12,
      box_door_no_12: saving.box_door_no_12,
      box_door_one_left_12: saving.box_door_one_left_12,
      box_door_one_right_12: saving.box_door_one_right_12,
      box_door_two_12: saving.box_door_two_12,

      box_width_auto_13: saving.box_width_auto_13,

      box_fill_no_13: saving.box_fill_no_13,
      box_fill_shelf_13: saving.box_fill_shelf_13,
      box_fill_boxes_13: saving.box_fill_boxes_13,
      box_fill_rod_13: saving.box_fill_rod_13,

      box_wall_13: saving.box_wall_13,
      box_door_no_13: saving.box_door_no_13,
      box_door_one_left_13: saving.box_door_one_left_13,
      box_door_one_right_13: saving.box_door_one_right_13,
      box_door_two_13: saving.box_door_two_13,

      box_width_auto_14: saving.box_width_auto_14,

      box_fill_no_14: saving.box_fill_no_14,
      box_fill_shelf_14: saving.box_fill_shelf_14,
      box_fill_boxes_14: saving.box_fill_boxes_14,
      box_fill_rod_14: saving.box_fill_rod_14,

      box_wall_14: saving.box_wall_14,
      box_door_no_14: saving.box_door_no_14,
      box_door_one_left_14: saving.box_door_one_left_14,
      box_door_one_right_14: saving.box_door_one_right_14,
      box_door_two_14: saving.box_door_two_14,

      box_width_auto_15: saving.box_width_auto_15,

      box_fill_no_15: saving.box_fill_no_15,
      box_fill_shelf_15: saving.box_fill_shelf_15,
      box_fill_boxes_15: saving.box_fill_boxes_15,
      box_fill_rod_15: saving.box_fill_rod_15,

      box_wall_15: saving.box_wall_15,
      box_door_no_15: saving.box_door_no_15,
      box_door_one_left_15: saving.box_door_one_left_15,
      box_door_one_right_15: saving.box_door_one_right_15,
      box_door_two_15: saving.box_door_two_15,

      box_width_auto_16: saving.box_width_auto_16,

      box_fill_no_16: saving.box_fill_no_16,
      box_fill_shelf_16: saving.box_fill_shelf_16,
      box_fill_boxes_16: saving.box_fill_boxes_16,
      box_fill_rod_16: saving.box_fill_rod_16,

      box_wall_16: saving.box_wall_16,
      box_door_no_16: saving.box_door_no_16,
      box_door_one_left_16: saving.box_door_one_left_16,
      box_door_one_right_16: saving.box_door_one_right_16,
      box_door_two_16: saving.box_door_two_16,

      box_width_auto_17: saving.box_width_auto_17,

      box_fill_no_17: saving.box_fill_no_17,
      box_fill_shelf_17: saving.box_fill_shelf_17,
      box_fill_boxes_17: saving.box_fill_boxes_17,
      box_fill_rod_17: saving.box_fill_rod_17,

      box_wall_17: saving.box_wall_17,
      box_door_no_17: saving.box_door_no_17,
      box_door_one_left_17: saving.box_door_one_left_17,
      box_door_one_right_17: saving.box_door_one_right_17,
      box_door_two_17: saving.box_door_two_17,

      box_width_auto_18: saving.box_width_auto_18,

      box_fill_no_18: saving.box_fill_no_18,
      box_fill_shelf_18: saving.box_fill_shelf_18,
      box_fill_boxes_18: saving.box_fill_boxes_18,
      box_fill_rod_18: saving.box_fill_rod_18,

      box_wall_18: saving.box_wall_18,
      box_door_no_18: saving.box_door_no_18,
      box_door_one_left_18: saving.box_door_one_left_18,
      box_door_one_right_18: saving.box_door_one_right_18,
      box_door_two_18: saving.box_door_two_18,

      material: false,

      assembly: false, // сборка
      delivery: 20, // доставка
      rise: 5,
      elevator: false, // грузовой лифт
    }

    // При старте страницы расставляются значения из stock (пока stock == saving)
    $(document).ready(function () {

      // start assembly
      if (stock.assembly) {
        $('input[value="assembly"]').prop('checked', true);
      } else {
        $('input[value="assembly"]').prop('checked', false);
      }

      // start elevator
      if (stock.elevator) {
        $('input[value="elevator"]').prop('checked', true);
      } else {
        $('input[value="elevator"]').prop('checked', false);
      }

      // start rack_l
      if (stock.rack_l) {
        $('input[value="rack_l"]').prop('checked', true);
      } else {
        $('input[value="rack_l"]').prop('checked', false);
      }

      // start rack_r
      if (stock.rack_r) {
        $('input[value="rack_r"]').prop('checked', true);
      } else {
        $('input[value="rack_r"]').prop('checked', false);
      }

      // предварительно проверяем чтобы stock.roof_in и stock.roof_out не были true
      if (stock.roof_in && stock.roof_out) {
        stock.roof_in = false;
        stock.roof_out = true;
        $('option[value="roof_in"]').attr('selected', false);
        $('option[value="roof_out"]').attr('selected', true);
      }

      // старт roof
      if (stock.roof) {
        $('input[value="roof"]').prop('checked', true);
        $('#inputSelect_roof').attr('disabled', false);
        if (stock.roof_in) {
          openRoofIn();
          hideRoofOut();
        } else {
          hideRoofIn();
          openRoofOut();
        }
      } else {
        $('input[value="roof"]').prop('checked', false);
        $('#inputSelect_roof').attr('disabled', true);
        hideRoofOut();
        hideRoofIn();
      }

      // старт visor
      if (stock.visor) {
        $('input[value="visor"]').prop('checked', true);

        if (stock.roof_out) {
          $('#inputNumber_visor').attr('disabled', false);
          $('#inputRange_visor').attr('disabled', false);
          $('#inputRange_visor').removeClass('disabled_range');
        }
      } else {
        $('input[value="visor"]').prop('checked', false);

        $('#inputNumber_visor').attr('disabled', true);
        $('#inputRange_visor').attr('disabled', true);
        $('#inputRange_visor').addClass('disabled_range');
      }

      if (stock.visor && stock.roof_out) {
        openVisorSide();
      } else {
        hideVisorSide();
      }

      // старт check visor_side
      if (stock.visor_side) {
        $('input[value="visor_side"]').prop('checked', true);

        if (stock.roof_out) {
          $('#inputNumber_visor_side').attr('disabled', false);
          $('#inputRange_visor_side').attr('disabled', false);
          $('#inputRange_visor_side').removeClass('disabled_range');
        }
      } else {
        $('input[value="visor_side"]').prop('checked', false);

        $('#inputNumber_visor_side').attr('disabled', true);
        $('#inputRange_visor_side').attr('disabled', true);
        $('#inputRange_visor_side').addClass('disabled_range');
      }

      // старт check roof_cut
      if (stock.roof_cut) {
        $('input[value="roof_cut"]').prop('checked', true);
      } else {
        $('input[value="roof_cut"]').prop('checked', false);
      }

      if (stock.roof_cut && stock.roof_in) {
        openRoofCutChild();
      } else {
        hideRoofCutChild();
      }

      // старт check roof_f
      if (stock.roof_f) {
        $('input[value="roof_f"]').prop('checked', true);

        if (stock.roof_cut && stock.roof_in) {
          $('#inputNumber_roof_f').attr('disabled', false);
          $('#inputRange_roof_f').attr('disabled', false);
          $('#inputRange_roof_f').removeClass('disabled_range');
        }
      } else {
        $('input[value="roof_f"]').prop('checked', false);

        $('#inputNumber_roof_f').attr('disabled', true);
        $('#inputRange_roof_f').attr('disabled', true);
        $('#inputRange_roof_f').addClass('disabled_range');
      }

      // старт check roof_b
      if (stock.roof_b) {
        $('input[value="roof_b"]').prop('checked', true);

        if (stock.roof_cut && stock.roof_in) {
          $('#inputNumber_roof_b').attr('disabled', false);
          $('#inputRange_roof_b').attr('disabled', false);
          $('#inputRange_roof_b').removeClass('disabled_range');
        }
      } else {
        $('input[value="roof_b"]').prop('checked', false);

        $('#inputNumber_roof_b').attr('disabled', true);
        $('#inputRange_roof_b').attr('disabled', true);
        $('#inputRange_roof_b').addClass('disabled_range');
      }

      // старт bottom
      if (stock.bottom_in && stock.bottom_out) {
        stock.bottom_in = true;
        stock.bottom_out = false;
        $('option[value="bottom_in"]').attr('selected', true);
        $('option[value="bottom_out"]').attr('selected', false);
      }

      if (stock.bottom) {
        $('input[value="bottom"]').prop('checked', true);
        $('#inputSelect_bottom').attr('disabled', false);
      } else {
        $('input[value="bottom"]').prop('checked', false);
        $('#inputSelect_bottom').attr('disabled', true);
      }

      // старт entresol
      if (stock.entresol) {
        $('input[value="entresol"]').prop('checked', true);
        openEntresol();
        openEntresolAmount();
      } else {
        $('input[value="entresol"]').prop('checked', false);
        hideEntresol();
        hideEntresolAmount();
      }

      // старт блок цоколь | сначала отображение потом контент
      if (stock.bottom && stock.bottom_in) {
        $('.panel__section.base').removeClass('disabled');
        $('#btn_bottom').addClass('d-none');
      } else {
        $('.panel__section.base').addClass('disabled');
        $('#btn_bottom').removeClass('d-none');
      }

      // старт base_f
      if (stock.base_f) {
        $('input[value="base_f"]').prop('checked', true);
        if (stock.base_b) {
          openBaseF();
        } else {
          openBaseF();
          hideBaseB();
        }
        hideFloorHeight();
      } else {
        $('input[value="base_f"]').prop('checked', false);
        hideBaseF();
        openFloorHeight();
      }

      // старт base_b
      if (stock.base_b) {
        $('input[value="base_b"]').prop('checked', true);
        if (stock.base_f) {
          openBaseB();
        }
      } else {
        $('input[value="base_b"]').prop('checked', false);
        hideBaseB();
      }

      // wall и wall_full это radio, и если оба true, то выбираю wall
      if (stock.wall && stock.wall_full) {
        stock.wall_full = false;
      }

      // старт wall
      if (stock.wall && !stock.wall_full) {
        $('input[value="wall"]').prop('checked', true);
        openWallCut();
      } else {
        $('input[value="wall"]').prop('checked', false);
        hideWallCut();
      }

      // старт wall_full
      if (stock.wall_full && !stock.wall) {
        $('input[value="wall_full"]').prop('checked', true);
      } else {
        $('input[value="wall_full"]').prop('checked', false);
      }

      // старт wall_cut
      if (stock.wall_cut) {
        $('input[value="wall_cut"]').prop('checked', true);
      } else {
        $('input[value="wall_cut"]').prop('checked', false);
      }

      // старт door and hand 
      if (stock.door_no) {
        $('option[value="door_no"]').attr('selected', true);
        $('option[value="door_sliding"]').attr('selected', false);
        $('option[value="door_swing"]').attr('selected', false);
        hideChooseDoor();
      }
      if (stock.door_sliding) {
        $('option[value="door_no"]').attr('selected', false);
        $('option[value="door_sliding"]').attr('selected', true);
        $('option[value="door_swing"]').attr('selected', false);
        openChooseDoor();
        // $('option[value="door_two_sl"]').attr('selected', true);
        // stock.door_two_sl = true;
      }
      if (stock.door_swing) {
        $('option[value="door_no"]').attr('selected', false);
        $('option[value="door_sliding"]').attr('selected', false);
        $('option[value="door_swing"]').attr('selected', true);
        openChooseDoor();
        // $('option[value="door_one_left_sw"]').attr('selected', true);
        // stock.door_one_left_sw = true;
      }
      // 
      if (stock.door_two_sl) {
        $('option[value="door_two_sl"]').attr('selected', true);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
      }
      if (stock.door_three_sl) {
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', true);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
      }
      if (stock.door_four_two_sl) {
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', true);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
      }
      if (stock.door_four_three_sl) {
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', true);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
      }
      if (stock.door_one_left_sw) {
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', true);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
      }
      if (stock.door_one_right_sw) {
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', true);
        $('option[value="door_two_sw"]').attr('selected', false);
      }
      if (stock.door_two_sw) {
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', true);
      }
      // 
      if (stock.door_in) {
        $('option[value="door_in"]').attr('selected', true);
        $('option[value="door_out"]').attr('selected', false);
      }
      if (stock.door_out) {
        $('option[value="door_in"]').attr('selected', false);
        $('option[value="door_out"]').attr('selected', true);
      }
      if (stock.hand_no) {
        $('option[value="hand_no"]').attr('selected', true);
        $('option[value="hand_bracket"]').attr('selected', false);
        $('option[value="hand_shell"]').attr('selected', false);
        $('option[value="hand_cut"]').attr('selected', false);
      }
      if (stock.hand_bracket) {
        $('option[value="hand_no"]').attr('selected', false);
        $('option[value="hand_bracket"]').attr('selected', true);
        $('option[value="hand_shell"]').attr('selected', false);
        $('option[value="hand_cut"]').attr('selected', false);
      }
      if (stock.hand_shell) {
        $('option[value="hand_no"]').attr('selected', false);
        $('option[value="hand_bracket"]').attr('selected', false);
        $('option[value="hand_shell"]').attr('selected', true);
        $('option[value="hand_cut"]').attr('selected', false);
      }
      if (stock.hand_cut) {
        $('option[value="hand_no"]').attr('selected', false);
        $('option[value="hand_bracket"]').attr('selected', false);
        $('option[value="hand_shell"]').attr('selected', false);
        $('option[value="hand_cut"]').attr('selected', true);
      }

      // старт legs
      // if (stock.bottom_in) {
      //   $('option[value="legs_85"]').attr('disabled', false);
      //   $('option[value="legs_100"]').attr('disabled', true);
      //   $('option[value="legs_120"]').attr('disabled', true);
      //   $('option[value="legs_150"]').attr('disabled', true);
      //   $('option[value="legs_rollers"]').attr('disabled', true);
      //   stock.legs_no = false;
      //   stock.legs_85 = true;
      //   stock.legs_100 = false;
      //   stock.legs_120 = false;
      //   stock.legs_150 = false;
      //   stock.legs_rollers = false;
      //   $('option[value="legs_85"]').attr('selected', true);
      // }
      // if (stock.bottom_out) {
      //   $('option[value="legs_85"]').attr('disabled', true);
      //   $('option[value="legs_100"]').attr('disabled', false);
      //   $('option[value="legs_120"]').attr('disabled', false);
      //   $('option[value="legs_150"]').attr('disabled', false);
      //   $('option[value="legs_rollers"]').attr('disabled', false);
      //   stock.legs_no = false;
      //   stock.legs_85 = false;
      //   stock.legs_100 = true;
      //   stock.legs_120 = false;
      //   stock.legs_150 = false;
      //   stock.legs_rollers = false;
      //   $('option[value="legs_100"]').attr('selected', true);
      // }

      // СЕКЦИИ

      // старт entresol_amount
      prop.entresol_rack = +$('#inputNumber_entresol_amount').val();
      prop.lower_rack = +$('#inputNumber_lower_amount').val();

      // старт check width auto
      if (stock.box_width_auto_1) {
        $('input[value="box_width_auto_1"]').prop('checked', true);
        hideBoxWidth1();
      } else {
        $('input[value="box_width_auto_1"]').prop('checked', false);
        openBoxWidth1();
      }

      if (stock.box_width_auto_2) {
        $('input[value="box_width_auto_2"]').prop('checked', true);
        hideBoxWidth2();
      } else {
        $('input[value="box_width_auto_2"]').prop('checked', false);
        openBoxWidth2();
      }

      if (stock.box_width_auto_3) {
        $('input[value="box_width_auto_3"]').prop('checked', true);
        hideBoxWidth3();
      } else {
        $('input[value="box_width_auto_3"]').prop('checked', false);
        openBoxWidth3();
      }

      if (stock.box_width_auto_4) {
        $('input[value="box_width_auto_4"]').prop('checked', true);
        hideBoxWidth4();
      } else {
        $('input[value="box_width_auto_4"]').prop('checked', false);
        openBoxWidth4();
      }

      if (stock.box_width_auto_5) {
        $('input[value="box_width_auto_5"]').prop('checked', true);
        hideBoxWidth5();
      } else {
        $('input[value="box_width_auto_5"]').prop('checked', false);
        openBoxWidth5();
      }

      if (stock.box_width_auto_6) {
        $('input[value="box_width_auto_6"]').prop('checked', true);
        hideBoxWidth6();
      } else {
        $('input[value="box_width_auto_6"]').prop('checked', false);
        openBoxWidth6();
      }

      if (stock.box_width_auto_7) {
        $('input[value="box_width_auto_7"]').prop('checked', true);
        hideBoxWidth7();
      } else {
        $('input[value="box_width_auto_7"]').prop('checked', false);
        openBoxWidth7();
      }

      if (stock.box_width_auto_8) {
        $('input[value="box_width_auto_8"]').prop('checked', true);
        hideBoxWidth8();
      } else {
        $('input[value="box_width_auto_8"]').prop('checked', false);
        openBoxWidth8();
      }

      if (stock.box_width_auto_9) {
        $('input[value="box_width_auto_9"]').prop('checked', true);
        hideBoxWidth9();
      } else {
        $('input[value="box_width_auto_9"]').prop('checked', false);
        openBoxWidth9();
      }

      if (stock.box_width_auto_10) {
        $('input[value="box_width_auto_10"]').prop('checked', true);
        hideBoxWidth10();
      } else {
        $('input[value="box_width_auto_10"]').prop('checked', false);
        openBoxWidth10();
      }

      if (stock.box_width_auto_11) {
        $('input[value="box_width_auto_11"]').prop('checked', true);
        hideBoxWidth11();
      } else {
        $('input[value="box_width_auto_11"]').prop('checked', false);
        openBoxWidth11();
      }

      if (stock.box_width_auto_12) {
        $('input[value="box_width_auto_12"]').prop('checked', true);
        hideBoxWidth12();
      } else {
        $('input[value="box_width_auto_12"]').prop('checked', false);
        openBoxWidth12();
      }

      if (stock.box_width_auto_13) {
        $('input[value="box_width_auto_13"]').prop('checked', true);
        hideBoxWidth13();
      } else {
        $('input[value="box_width_auto_13"]').prop('checked', false);
        openBoxWidth13();
      }

      if (stock.box_width_auto_14) {
        $('input[value="box_width_auto_14"]').prop('checked', true);
        hideBoxWidth14();
      } else {
        $('input[value="box_width_auto_14"]').prop('checked', false);
        openBoxWidth14();
      }

      if (stock.box_width_auto_15) {
        $('input[value="box_width_auto_15"]').prop('checked', true);
        hideBoxWidth15();
      } else {
        $('input[value="box_width_auto_15"]').prop('checked', false);
        openBoxWidth15();
      }

      if (stock.box_width_auto_16) {
        $('input[value="box_width_auto_16"]').prop('checked', true);
        hideBoxWidth16();
      } else {
        $('input[value="box_width_auto_16"]').prop('checked', false);
        openBoxWidth16();
      }

      if (stock.box_width_auto_17) {
        $('input[value="box_width_auto_17"]').prop('checked', true);
        hideBoxWidth17();
      } else {
        $('input[value="box_width_auto_17"]').prop('checked', false);
        openBoxWidth17();
      }

      if (stock.box_width_auto_18) {
        $('input[value="box_width_auto_18"]').prop('checked', true);
        hideBoxWidth18();
      } else {
        $('input[value="box_width_auto_18"]').prop('checked', false);
        openBoxWidth18();
      }
      // старт check split
      if (stock.box_split_7) {
        $('input[value="box_split_7"]').prop('checked', true);
      } else {
        $('input[value="box_split_7"]').prop('checked', false);
      }
      if (stock.box_split_8) {
        $('input[value="box_split_8"]').prop('checked', true);
      } else {
        $('input[value="box_split_8"]').prop('checked', false);
      }
      if (stock.box_split_9) {
        $('input[value="box_split_9"]').prop('checked', true);
      } else {
        $('input[value="box_split_9"]').prop('checked', false);
      }
      if (stock.box_split_10) {
        $('input[value="box_split_10"]').prop('checked', true);
      } else {
        $('input[value="box_split_10"]').prop('checked', false);
      }
      if (stock.box_split_11) {
        $('input[value="box_split_11"]').prop('checked', true);
      } else {
        $('input[value="box_split_11"]').prop('checked', false);
      }
      if (stock.box_split_12) {
        $('input[value="box_split_12"]').prop('checked', true);
      } else {
        $('input[value="box_split_12"]').prop('checked', false);
      }

      // старт check wall auto
      if (stock.box_wall_1) {
        $('input[value="box_wall_1"]').prop('checked', true);
      } else {
        $('input[value="box_wall_1"]').prop('checked', false);
      }

      if (stock.box_wall_2) {
        $('input[value="box_wall_2"]').prop('checked', true);
      } else {
        $('input[value="box_wall_2"]').prop('checked', false);
      }

      if (stock.box_wall_3) {
        $('input[value="box_wall_3"]').prop('checked', true);
      } else {
        $('input[value="box_wall_3"]').prop('checked', false);
      }

      if (stock.box_wall_4) {
        $('input[value="box_wall_4"]').prop('checked', true);
      } else {
        $('input[value="box_wall_4"]').prop('checked', false);
      }

      if (stock.box_wall_5) {
        $('input[value="box_wall_5"]').prop('checked', true);
      } else {
        $('input[value="box_wall_5"]').prop('checked', false);
      }

      if (stock.box_wall_6) {
        $('input[value="box_wall_6"]').prop('checked', true);
      } else {
        $('input[value="box_wall_6"]').prop('checked', false);
      }

      if (stock.box_wall_7) {
        $('input[value="box_wall_7"]').prop('checked', true);
      } else {
        $('input[value="box_wall_7"]').prop('checked', false);
      }

      if (stock.box_wall_8) {
        $('input[value="box_wall_8"]').prop('checked', true);
      } else {
        $('input[value="box_wall_8"]').prop('checked', false);
      }

      if (stock.box_wall_9) {
        $('input[value="box_wall_9"]').prop('checked', true);
      } else {
        $('input[value="box_wall_9"]').prop('checked', false);
      }

      if (stock.box_wall_10) {
        $('input[value="box_wall_10"]').prop('checked', true);
      } else {
        $('input[value="box_wall_10"]').prop('checked', false);
      }

      if (stock.box_wall_11) {
        $('input[value="box_wall_11"]').prop('checked', true);
      } else {
        $('input[value="box_wall_11"]').prop('checked', false);
      }

      if (stock.box_wall_12) {
        $('input[value="box_wall_12"]').prop('checked', true);
      } else {
        $('input[value="box_wall_12"]').prop('checked', false);
      }

      if (stock.box_wall_13) {
        $('input[value="box_wall_13"]').prop('checked', true);
      } else {
        $('input[value="box_wall_13"]').prop('checked', false);
      }

      if (stock.box_wall_14) {
        $('input[value="box_wall_14"]').prop('checked', true);
      } else {
        $('input[value="box_wall_14"]').prop('checked', false);
      }

      if (stock.box_wall_15) {
        $('input[value="box_wall_15"]').prop('checked', true);
      } else {
        $('input[value="box_wall_15"]').prop('checked', false);
      }

      if (stock.box_wall_16) {
        $('input[value="box_wall_16"]').prop('checked', true);
      } else {
        $('input[value="box_wall_16"]').prop('checked', false);
      }

      if (stock.box_wall_17) {
        $('input[value="box_wall_17"]').prop('checked', true);
      } else {
        $('input[value="box_wall_17"]').prop('checked', false);
      }

      if (stock.box_wall_18) {
        $('input[value="box_wall_18"]').prop('checked', true);
      } else {
        $('input[value="box_wall_18"]').prop('checked', false);
      }

      if (stock.box_fill_no_1) {
        $('option[value="box_fill_no_1"]').attr('selected', true);
        hideBoxFillAmount1();
      }
      if (stock.box_fill_shelf_1) {
        $('option[value="box_fill_shelf_1"]').attr('selected', true);
        openBoxFillAmount1();
      }
      if (stock.box_fill_boxes_1) {
        $('option[value="box_fill_boxes_1"]').attr('selected', true);
        openBoxFillAmount1();
      }
      if (stock.box_fill_rod_1) {
        $('option[value="box_fill_rod_1"]').attr('selected', true);
        openBoxFillAmount1();
      }

      if (stock.box_fill_no_2) {
        $('option[value="box_fill_no_2"]').attr('selected', true);
        hideBoxFillAmount2();
      }
      if (stock.box_fill_shelf_2) {
        $('option[value="box_fill_shelf_2"]').attr('selected', true);
        openBoxFillAmount2();
      }
      if (stock.box_fill_boxes_2) {
        $('option[value="box_fill_boxes_2"]').attr('selected', true);
        openBoxFillAmount2();
      }
      if (stock.box_fill_rod_2) {
        $('option[value="box_fill_rod_2"]').attr('selected', true);
        openBoxFillAmount2();
      }

      if (stock.box_fill_no_3) {
        $('option[value="box_fill_no_3"]').attr('selected', true);
        hideBoxFillAmount3();
      }
      if (stock.box_fill_shelf_3) {
        $('option[value="box_fill_shelf_3"]').attr('selected', true);
        openBoxFillAmount3();
      }
      if (stock.box_fill_boxes_3) {
        $('option[value="box_fill_boxes_3"]').attr('selected', true);
        openBoxFillAmount3();
      }
      if (stock.box_fill_rod_3) {
        $('option[value="box_fill_rod_3"]').attr('selected', true);
        openBoxFillAmount3();
      }

      if (stock.box_fill_no_4) {
        $('option[value="box_fill_no_4"]').attr('selected', true);
        hideBoxFillAmount4();
      }
      if (stock.box_fill_shelf_4) {
        $('option[value="box_fill_shelf_4"]').attr('selected', true);
        openBoxFillAmount4();
      }
      if (stock.box_fill_boxes_4) {
        $('option[value="box_fill_boxes_4"]').attr('selected', true);
        openBoxFillAmount4();
      }
      if (stock.box_fill_rod_4) {
        $('option[value="box_fill_rod_4"]').attr('selected', true);
        openBoxFillAmount4();
      }

      if (stock.box_fill_no_5) {
        $('option[value="box_fill_no_5"]').attr('selected', true);
        hideBoxFillAmount5();
      }
      if (stock.box_fill_shelf_5) {
        $('option[value="box_fill_shelf_5"]').attr('selected', true);
        openBoxFillAmount5();
      }
      if (stock.box_fill_boxes_5) {
        $('option[value="box_fill_boxes_5"]').attr('selected', true);
        openBoxFillAmount5();
      }
      if (stock.box_fill_rod_5) {
        $('option[value="box_fill_rod_5"]').attr('selected', true);
        openBoxFillAmount5();
      }

      if (stock.box_fill_no_6) {
        $('option[value="box_fill_no_6"]').attr('selected', true);
        hideBoxFillAmount6();
      }
      if (stock.box_fill_shelf_6) {
        $('option[value="box_fill_shelf_6"]').attr('selected', true);
        openBoxFillAmount6();
      }
      if (stock.box_fill_boxes_6) {
        $('option[value="box_fill_boxes_6"]').attr('selected', true);
        openBoxFillAmount6();
      }
      if (stock.box_fill_rod_6) {
        $('option[value="box_fill_rod_6"]').attr('selected', true);
        openBoxFillAmount6();
      }

      if (stock.box_fill_no_7) {
        $('option[value="box_fill_no_7"]').attr('selected', true);
        hideBoxFillAmount7();
      }
      if (stock.box_fill_shelf_7) {
        $('option[value="box_fill_shelf_7"]').attr('selected', true);
        openBoxFillAmount7();
      }
      if (stock.box_fill_boxes_7) {
        $('option[value="box_fill_boxes_7"]').attr('selected', true);
        openBoxFillAmount7();
      }
      if (stock.box_fill_rod_7) {
        $('option[value="box_fill_rod_7"]').attr('selected', true);
        openBoxFillAmount7();
      }

      if (stock.box_fill_no_8) {
        $('option[value="box_fill_no_8"]').attr('selected', true);
        hideBoxFillAmount8();
      }
      if (stock.box_fill_shelf_8) {
        $('option[value="box_fill_shelf_8"]').attr('selected', true);
        openBoxFillAmount8();
      }
      if (stock.box_fill_boxes_8) {
        $('option[value="box_fill_boxes_8"]').attr('selected', true);
        openBoxFillAmount8();
      }
      if (stock.box_fill_rod_8) {
        $('option[value="box_fill_rod_8"]').attr('selected', true);
        openBoxFillAmount8();
      }

      if (stock.box_fill_no_9) {
        $('option[value="box_fill_no_9"]').attr('selected', true);
        hideBoxFillAmount9();
      }
      if (stock.box_fill_shelf_9) {
        $('option[value="box_fill_shelf_9"]').attr('selected', true);
        openBoxFillAmount9();
      }
      if (stock.box_fill_boxes_9) {
        $('option[value="box_fill_boxes_9"]').attr('selected', true);
        openBoxFillAmount9();
      }
      if (stock.box_fill_rod_9) {
        $('option[value="box_fill_rod_9"]').attr('selected', true);
        openBoxFillAmount9();
      }

      if (stock.box_fill_no_10) {
        $('option[value="box_fill_no_10"]').attr('selected', true);
        hideBoxFillAmount10();
      }
      if (stock.box_fill_shelf_10) {
        $('option[value="box_fill_shelf_10"]').attr('selected', true);
        openBoxFillAmount10();
      }
      if (stock.box_fill_boxes_10) {
        $('option[value="box_fill_boxes_10"]').attr('selected', true);
        openBoxFillAmount10();
      }
      if (stock.box_fill_rod_10) {
        $('option[value="box_fill_rod_10"]').attr('selected', true);
        openBoxFillAmount10();
      }

      if (stock.box_fill_no_11) {
        $('option[value="box_fill_no_11"]').attr('selected', true);
        hideBoxFillAmount11();
      }
      if (stock.box_fill_shelf_11) {
        $('option[value="box_fill_shelf_11"]').attr('selected', true);
        openBoxFillAmount11();
      }
      if (stock.box_fill_boxes_11) {
        $('option[value="box_fill_boxes_11"]').attr('selected', true);
        openBoxFillAmount11();
      }
      if (stock.box_fill_rod_11) {
        $('option[value="box_fill_rod_11"]').attr('selected', true);
        openBoxFillAmount11();
      }

      if (stock.box_fill_no_12) {
        $('option[value="box_fill_no_12"]').attr('selected', true);
        hideBoxFillAmount12();
      }
      if (stock.box_fill_shelf_12) {
        $('option[value="box_fill_shelf_12"]').attr('selected', true);
        openBoxFillAmount12();
      }
      if (stock.box_fill_boxes_12) {
        $('option[value="box_fill_boxes_12"]').attr('selected', true);
        openBoxFillAmount12();
      }
      if (stock.box_fill_rod_12) {
        $('option[value="box_fill_rod_12"]').attr('selected', true);
        openBoxFillAmount12();
      }

      if (stock.box_fill_no_13) {
        $('option[value="box_fill_no_13"]').attr('selected', true);
        hideBoxFillAmount13();
      }
      if (stock.box_fill_shelf_13) {
        $('option[value="box_fill_shelf_13"]').attr('selected', true);
        openBoxFillAmount13();
      }
      if (stock.box_fill_boxes_13) {
        $('option[value="box_fill_boxes_13"]').attr('selected', true);
        openBoxFillAmount13();
      }
      if (stock.box_fill_rod_13) {
        $('option[value="box_fill_rod_13"]').attr('selected', true);
        openBoxFillAmount13();
      }

      if (stock.box_fill_no_14) {
        $('option[value="box_fill_no_14"]').attr('selected', true);
        hideBoxFillAmount14();
      }
      if (stock.box_fill_shelf_14) {
        $('option[value="box_fill_shelf_14"]').attr('selected', true);
        openBoxFillAmount14();
      }
      if (stock.box_fill_boxes_14) {
        $('option[value="box_fill_boxes_14"]').attr('selected', true);
        openBoxFillAmount14();
      }
      if (stock.box_fill_rod_14) {
        $('option[value="box_fill_rod_14"]').attr('selected', true);
        openBoxFillAmount14();
      }

      if (stock.box_fill_no_15) {
        $('option[value="box_fill_no_15"]').attr('selected', true);
        hideBoxFillAmount15();
      }
      if (stock.box_fill_shelf_15) {
        $('option[value="box_fill_shelf_15"]').attr('selected', true);
        openBoxFillAmount15();
      }
      if (stock.box_fill_boxes_15) {
        $('option[value="box_fill_boxes_15"]').attr('selected', true);
        openBoxFillAmount15();
      }
      if (stock.box_fill_rod_15) {
        $('option[value="box_fill_rod_15"]').attr('selected', true);
        openBoxFillAmount15();
      }

      if (stock.box_fill_no_16) {
        $('option[value="box_fill_no_16"]').attr('selected', true);
        hideBoxFillAmount16();
      }
      if (stock.box_fill_shelf_16) {
        $('option[value="box_fill_shelf_16"]').attr('selected', true);
        openBoxFillAmount16();
      }
      if (stock.box_fill_boxes_16) {
        $('option[value="box_fill_boxes_16"]').attr('selected', true);
        openBoxFillAmount16();
      }
      if (stock.box_fill_rod_16) {
        $('option[value="box_fill_rod_16"]').attr('selected', true);
        openBoxFillAmount16();
      }

      if (stock.box_fill_no_17) {
        $('option[value="box_fill_no_17"]').attr('selected', true);
        hideBoxFillAmount17();
      }
      if (stock.box_fill_shelf_17) {
        $('option[value="box_fill_shelf_17"]').attr('selected', true);
        openBoxFillAmount17();
      }
      if (stock.box_fill_boxes_17) {
        $('option[value="box_fill_boxes_17"]').attr('selected', true);
        openBoxFillAmount17();
      }
      if (stock.box_fill_rod_17) {
        $('option[value="box_fill_rod_17"]').attr('selected', true);
        openBoxFillAmount17();
      }

      if (stock.box_fill_no_18) {
        $('option[value="box_fill_no_18"]').attr('selected', true);
        hideBoxFillAmount18();
      }
      if (stock.box_fill_shelf_18) {
        $('option[value="box_fill_shelf_18"]').attr('selected', true);
        openBoxFillAmount18();
      }
      if (stock.box_fill_boxes_18) {
        $('option[value="box_fill_boxes_18"]').attr('selected', true);
        openBoxFillAmount18();
      }
      if (stock.box_fill_rod_18) {
        $('option[value="box_fill_rod_18"]').attr('selected', true);
        openBoxFillAmount18();
      }

      if (stock.box_door_no_1) {
        $('option[value="box_door_no_1"]').attr('selected', true);
      }
      if (stock.box_door_one_left_1) {
        $('option[value="box_door_one_left_1"]').attr('selected', true);
      }
      if (stock.box_door_one_right_1) {
        $('option[value="box_door_one_right_1"]').attr('selected', true);
      }
      if (stock.box_door_two_1) {
        $('option[value="box_door_two_1"]').attr('selected', true);
      }

      if (stock.box_door_no_2) {
        $('option[value="box_door_no_2"]').attr('selected', true);
      }
      if (stock.box_door_one_left_2) {
        $('option[value="box_door_one_left_2"]').attr('selected', true);
      }
      if (stock.box_door_one_right_2) {
        $('option[value="box_door_one_right_2"]').attr('selected', true);
      }
      if (stock.box_door_two_2) {
        $('option[value="box_door_two_2"]').attr('selected', true);
      }

      if (stock.box_door_no_3) {
        $('option[value="box_door_no_3"]').attr('selected', true);
      }
      if (stock.box_door_one_left_3) {
        $('option[value="box_door_one_left_3"]').attr('selected', true);
      }
      if (stock.box_door_one_right_3) {
        $('option[value="box_door_one_right_3"]').attr('selected', true);
      }
      if (stock.box_door_two_3) {
        $('option[value="box_door_two_3"]').attr('selected', true);
      }

      if (stock.box_door_no_4) {
        $('option[value="box_door_no_4"]').attr('selected', true);
      }
      if (stock.box_door_one_left_4) {
        $('option[value="box_door_one_left_4"]').attr('selected', true);
      }
      if (stock.box_door_one_right_4) {
        $('option[value="box_door_one_right_4"]').attr('selected', true);
      }
      if (stock.box_door_two_4) {
        $('option[value="box_door_two_4"]').attr('selected', true);
      }

      if (stock.box_door_no_5) {
        $('option[value="box_door_no_5"]').attr('selected', true);
      }
      if (stock.box_door_one_left_5) {
        $('option[value="box_door_one_left_5"]').attr('selected', true);
      }
      if (stock.box_door_one_right_5) {
        $('option[value="box_door_one_right_5"]').attr('selected', true);
      }
      if (stock.box_door_two_5) {
        $('option[value="box_door_two_5"]').attr('selected', true);
      }

      if (stock.box_door_no_6) {
        $('option[value="box_door_no_6"]').attr('selected', true);
      }
      if (stock.box_door_one_left_6) {
        $('option[value="box_door_one_left_6"]').attr('selected', true);
      }
      if (stock.box_door_one_right_6) {
        $('option[value="box_door_one_right_6"]').attr('selected', true);
      }
      if (stock.box_door_two_6) {
        $('option[value="box_door_two_6"]').attr('selected', true);
      }

      if (stock.box_door_no_7) {
        $('option[value="box_door_no_7"]').attr('selected', true);
      }
      if (stock.box_door_one_left_7) {
        $('option[value="box_door_one_left_7"]').attr('selected', true);
      }
      if (stock.box_door_one_right_7) {
        $('option[value="box_door_one_right_7"]').attr('selected', true);
      }
      if (stock.box_door_two_7) {
        $('option[value="box_door_two_7"]').attr('selected', true);
      }

      if (stock.box_door_no_8) {
        $('option[value="box_door_no_8"]').attr('selected', true);
      }
      if (stock.box_door_one_left_8) {
        $('option[value="box_door_one_left_8"]').attr('selected', true);
      }
      if (stock.box_door_one_right_8) {
        $('option[value="box_door_one_right_8"]').attr('selected', true);
      }
      if (stock.box_door_two_8) {
        $('option[value="box_door_two_8"]').attr('selected', true);
      }

      if (stock.box_door_no_9) {
        $('option[value="box_door_no_9"]').attr('selected', true);
      }
      if (stock.box_door_one_left_9) {
        $('option[value="box_door_one_left_9"]').attr('selected', true);
      }
      if (stock.box_door_one_right_9) {
        $('option[value="box_door_one_right_9"]').attr('selected', true);
      }
      if (stock.box_door_two_9) {
        $('option[value="box_door_two_9"]').attr('selected', true);
      }

      if (stock.box_door_no_10) {
        $('option[value="box_door_no_10"]').attr('selected', true);
      }
      if (stock.box_door_one_left_10) {
        $('option[value="box_door_one_left_10"]').attr('selected', true);
      }
      if (stock.box_door_one_right_10) {
        $('option[value="box_door_one_right_10"]').attr('selected', true);
      }
      if (stock.box_door_two_10) {
        $('option[value="box_door_two_10"]').attr('selected', true);
      }

      if (stock.box_door_no_11) {
        $('option[value="box_door_no_11"]').attr('selected', true);
      }
      if (stock.box_door_one_left_11) {
        $('option[value="box_door_one_left_11"]').attr('selected', true);
      }
      if (stock.box_door_one_right_11) {
        $('option[value="box_door_one_right_11"]').attr('selected', true);
      }
      if (stock.box_door_two_11) {
        $('option[value="box_door_two_11"]').attr('selected', true);
      }

      if (stock.box_door_no_12) {
        $('option[value="box_door_no_12"]').attr('selected', true);
      }
      if (stock.box_door_one_left_12) {
        $('option[value="box_door_one_left_12"]').attr('selected', true);
      }
      if (stock.box_door_one_right_12) {
        $('option[value="box_door_one_right_12"]').attr('selected', true);
      }
      if (stock.box_door_two_12) {
        $('option[value="box_door_two_12"]').attr('selected', true);
      }

      if (stock.box_door_no_13) {
        $('option[value="box_door_no_13"]').attr('selected', true);
      }
      if (stock.box_door_one_left_13) {
        $('option[value="box_door_one_left_13"]').attr('selected', true);
      }
      if (stock.box_door_one_right_13) {
        $('option[value="box_door_one_right_13"]').attr('selected', true);
      }
      if (stock.box_door_two_13) {
        $('option[value="box_door_two_13"]').attr('selected', true);
      }

      if (stock.box_door_no_14) {
        $('option[value="box_door_no_14"]').attr('selected', true);
      }
      if (stock.box_door_one_left_14) {
        $('option[value="box_door_one_left_14"]').attr('selected', true);
      }
      if (stock.box_door_one_right_14) {
        $('option[value="box_door_one_right_14"]').attr('selected', true);
      }
      if (stock.box_door_two_14) {
        $('option[value="box_door_two_14"]').attr('selected', true);
      }

      if (stock.box_door_no_15) {
        $('option[value="box_door_no_15"]').attr('selected', true);
      }
      if (stock.box_door_one_left_15) {
        $('option[value="box_door_one_left_15"]').attr('selected', true);
      }
      if (stock.box_door_one_right_15) {
        $('option[value="box_door_one_right_15"]').attr('selected', true);
      }
      if (stock.box_door_two_15) {
        $('option[value="box_door_two_15"]').attr('selected', true);
      }

      if (stock.box_door_no_16) {
        $('option[value="box_door_no_16"]').attr('selected', true);
      }
      if (stock.box_door_one_left_16) {
        $('option[value="box_door_one_left_16"]').attr('selected', true);
      }
      if (stock.box_door_one_right_16) {
        $('option[value="box_door_one_right_16"]').attr('selected', true);
      }
      if (stock.box_door_two_16) {
        $('option[value="box_door_two_16"]').attr('selected', true);
      }

      if (stock.box_door_no_17) {
        $('option[value="box_door_no_17"]').attr('selected', true);
      }
      if (stock.box_door_one_left_17) {
        $('option[value="box_door_one_left_17"]').attr('selected', true);
      }
      if (stock.box_door_one_right_17) {
        $('option[value="box_door_one_right_17"]').attr('selected', true);
      }
      if (stock.box_door_two_17) {
        $('option[value="box_door_two_17"]').attr('selected', true);
      }

      if (stock.box_door_no_18) {
        $('option[value="box_door_no_18"]').attr('selected', true);
      }
      if (stock.box_door_one_left_18) {
        $('option[value="box_door_one_left_18"]').attr('selected', true);
      }
      if (stock.box_door_one_right_18) {
        $('option[value="box_door_one_right_18"]').attr('selected', true);
      }
      if (stock.box_door_two_18) {
        $('option[value="box_door_two_18"]').attr('selected', true);
      }

    });

    // ОТЛАВЛИВАНИЕ СОБЫТИЙ ПО ФОРМАМ

    // change assembly
    $('input[value="assembly"]').click(function () {
      if (getCheckedCheckBoxes('assembly')) {
        stock.assembly = true;
      } else {
        stock.assembly = false;
      }
    });

    // change elevator
    $('input[value="elevator"]').click(function () {
      if (getCheckedCheckBoxes('elevator')) {
        stock.elevator = true;
      } else {
        stock.elevator = false;
      }
    });

    // change rack_l
    $('input[value="rack_l"]').click(function () {
      if (getCheckedCheckBoxes('rack_l')) {
        stock.rack_l = true;
      } else {
        stock.rack_l = false;
      }
    });

    // change rack_r
    $('input[value="rack_r"]').click(function () {
      if (getCheckedCheckBoxes('rack_r')) {
        stock.rack_r = true;
      } else {
        stock.rack_r = false;
      }
    });

    // изменение check roof
    $('input[value="roof"]').click(function () {
      if (getCheckedCheckBoxes('roof')) {
        stock.roof = true;
        $('#inputSelect_roof').attr('disabled', false);

        if (stock.roof_out) {
          openRoofOut();
          if (stock.visor) {
            openVisorSide();
          } else {
            hideVisorSide()
          }
        }

        if (stock.roof_in) {
          openRoofIn();
          if (stock.roof_cut) {
            openRoofCutChild();
          } else {
            hideRoofCutChild();
          }
        }

      } else {
        stock.roof = false;
        $('#inputSelect_roof').attr('disabled', true);
        hideRoofOut();
        hideRoofIn();
      }
    });

    // изменение check visor
    $('input[value="visor"]').click(function () {
      if (getCheckedCheckBoxes('visor')) {
        stock.visor = true;

        $('#inputNumber_visor').attr('disabled', false);
        $('#inputRange_visor').attr('disabled', false);
        $('#inputRange_visor').removeClass('disabled_range');
        openVisorSide();
      } else {
        stock.visor = false;

        $('#inputNumber_visor').attr('disabled', true);
        $('#inputRange_visor').attr('disabled', true);
        $('#inputRange_visor').addClass('disabled_range');
        hideVisorSide();
      }
    });

    // изменение check visor_side
    $('input[value="visor_side"]').click(function () {
      if (getCheckedCheckBoxes('visor_side')) {
        stock.visor_side = true;
        $('#inputNumber_visor_side').attr('disabled', false);
        $('#inputRange_visor_side').attr('disabled', false);
        $('#inputRange_visor_side').removeClass('disabled_range');
      } else {
        stock.visor_side = false;
        $('#inputNumber_visor_side').attr('disabled', true);
        $('#inputRange_visor_side').attr('disabled', true);
        $('#inputRange_visor_side').addClass('disabled_range');
      }
    });

    // изменение check roof_cut
    $('input[value="roof_cut"]').click(function () {
      if (getCheckedCheckBoxes('roof_cut')) {
        stock.roof_cut = true;
        openRoofCutChild();
      } else {
        stock.roof_cut = false;
        hideRoofCutChild();
      }
    });

    // изменение check roof_f
    $('input[value="roof_f"]').click(function () {
      if (getCheckedCheckBoxes('roof_f')) {
        stock.roof_f = true;
        $('#inputNumber_roof_f').attr('disabled', false);
        $('#inputRange_roof_f').attr('disabled', false);
        $('#inputRange_roof_f').removeClass('disabled_range');
      } else {
        stock.roof_f = false;
        $('#inputNumber_roof_f').attr('disabled', true);
        $('#inputRange_roof_f').attr('disabled', true);
        $('#inputRange_roof_f').addClass('disabled_range');
      }
    });

    // изменение check roof_b
    $('input[value="roof_b"]').click(function () {
      if (getCheckedCheckBoxes('roof_b')) {
        stock.roof_b = true;
        $('#inputNumber_roof_b').attr('disabled', false);
        $('#inputRange_roof_b').attr('disabled', false);
        $('#inputRange_roof_b').removeClass('disabled_range');
      } else {
        stock.roof_b = false;
        $('#inputNumber_roof_b').attr('disabled', true);
        $('#inputRange_roof_b').attr('disabled', true);
        $('#inputRange_roof_b').addClass('disabled_range');
      }
    });

    // изменение check bottom
    $('input[value="bottom"]').click(function () {
      if (getCheckedCheckBoxes('bottom')) {
        stock.bottom = true;
        $('#inputSelect_bottom').attr('disabled', false);
      } else {
        stock.bottom = false;
        $('#inputSelect_bottom').attr('disabled', true);
      }
    });

    // отображение цоколь block
    $('#row_bottom').click(function () {
      if (stock.bottom && stock.bottom_in) {
        $('.panel__section.base').removeClass('disabled');
        $('#btn_bottom').addClass('d-none');
      } else {
        $('.panel__section.base').addClass('disabled');
        $('#btn_bottom').removeClass('d-none');
      }
    });

    // изменение check entresol
    $('input[value="entresol"]').click(function () {
      if (getCheckedCheckBoxes('entresol')) {
        stock.entresol = true;
        openEntresol();
        openEntresolAmount();
      } else {
        stock.entresol = false;
        hideEntresol();
        hideEntresolAmount();
      }
    });

    // изменение check base_f
    $('input[value="base_f"]').click(function () {
      if (getCheckedCheckBoxes('base_f')) {
        stock.base_f = true;
        if (stock.base_b) {
          openBaseF();
        } else {
          openBaseF();
          hideBaseB();
        }
        hideFloorHeight();
      } else {
        stock.base_f = false;
        hideBaseF();
        openFloorHeight();
      }
    });

    // изменение check base_b
    $('input[value="base_b"]').click(function () {
      if (getCheckedCheckBoxes('base_b')) {
        stock.base_b = true;
        openBaseB();
      } else {
        stock.base_b = false;
        hideBaseB();
      }
    });

    // изменение check wall
    $('input[value="wall"]').click(function () {
      if (getCheckedCheckBoxes('wall')) {
        stock.wall = true;
        stock.wall_full = false;
        $('input[value="wall_full"]').prop('checked', false);
        openWallCut();
      } else {
        stock.wall = false;
        hideWallCut();
      }
    });

    // изменение check wall_full
    $('input[value="wall_full"]').click(function () {
      if (getCheckedCheckBoxes('wall_full')) {
        stock.wall = false;
        $('input[value="wall"]').prop('checked', false);
        stock.wall_full = true;
        hideWallCut();
      } else {
        stock.wall_full = false;
        if (stock.wall_cut) {
          openWallCut();
        }
      }
    });

    // изменение check wall_cut
    $('input[value="wall_cut"]').click(function () {
      if (getCheckedCheckBoxes('wall_cut')) {
        stock.wall_cut = true;
      } else {
        stock.wall_cut = false;
      }
    });

    // изменение check width auto
    $('input[value="box_width_auto_1"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_1')) {
        stock.box_width_auto_1 = true;
        hideBoxWidth1();
      } else {
        stock.box_width_auto_1 = false;
        openBoxWidth1();
      }
    });

    $('input[value="box_width_auto_2"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_2')) {
        stock.box_width_auto_2 = true;
        hideBoxWidth2();
      } else {
        stock.box_width_auto_2 = false;
        openBoxWidth2();
      }
    });

    $('input[value="box_width_auto_3"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_3')) {
        stock.box_width_auto_3 = true;
        hideBoxWidth3();
      } else {
        stock.box_width_auto_3 = false;
        openBoxWidth3();
      }
    });

    $('input[value="box_width_auto_4"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_4')) {
        stock.box_width_auto_4 = true;
        hideBoxWidth4();
      } else {
        stock.box_width_auto_4 = false;
        openBoxWidth4();
      }
    });

    $('input[value="box_width_auto_5"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_5')) {
        stock.box_width_auto_5 = true;
        hideBoxWidth5();
      } else {
        stock.box_width_auto_5 = false;
        openBoxWidth5();
      }
    });

    $('input[value="box_width_auto_6"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_6')) {
        stock.box_width_auto_6 = true;
        hideBoxWidth6();
      } else {
        stock.box_width_auto_6 = false;
        openBoxWidth6();
      }
    });

    $('input[value="box_width_auto_7"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_7')) {
        stock.box_width_auto_7 = true;
        hideBoxWidth7();
      } else {
        stock.box_width_auto_7 = false;
        openBoxWidth7();
      }
    });

    $('input[value="box_width_auto_8"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_8')) {
        stock.box_width_auto_8 = true;
        hideBoxWidth8();
      } else {
        stock.box_width_auto_8 = false;
        openBoxWidth8();
      }
    });

    $('input[value="box_width_auto_9"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_9')) {
        stock.box_width_auto_9 = true;
        hideBoxWidth9();
      } else {
        stock.box_width_auto_9 = false;
        openBoxWidth9();
      }
    });

    $('input[value="box_width_auto_10"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_10')) {
        stock.box_width_auto_10 = true;
        hideBoxWidth10();
      } else {
        stock.box_width_auto_10 = false;
        openBoxWidth10();
      }
    });

    $('input[value="box_width_auto_11"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_11')) {
        stock.box_width_auto_11 = true;
        hideBoxWidth11();
      } else {
        stock.box_width_auto_11 = false;
        openBoxWidth11();
      }
    });

    $('input[value="box_width_auto_12"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_12')) {
        stock.box_width_auto_12 = true;
        hideBoxWidth12();
      } else {
        stock.box_width_auto_12 = false;
        openBoxWidth12();
      }
    });

    $('input[value="box_width_auto_13"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_13')) {
        stock.box_width_auto_13 = true;
        hideBoxWidth13();
      } else {
        stock.box_width_auto_13 = false;
        openBoxWidth13();
      }
    });

    $('input[value="box_width_auto_14"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_14')) {
        stock.box_width_auto_14 = true;
        hideBoxWidth14();
      } else {
        stock.box_width_auto_14 = false;
        openBoxWidth14();
      }
    });

    $('input[value="box_width_auto_15"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_15')) {
        stock.box_width_auto_15 = true;
        hideBoxWidth15();
      } else {
        stock.box_width_auto_15 = false;
        openBoxWidth15();
      }
    });

    $('input[value="box_width_auto_16"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_16')) {
        stock.box_width_auto_16 = true;
        hideBoxWidth16();
      } else {
        stock.box_width_auto_16 = false;
        openBoxWidth16();
      }
    });

    $('input[value="box_width_auto_17"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_17')) {
        stock.box_width_auto_17 = true;
        hideBoxWidth17();
      } else {
        stock.box_width_auto_17 = false;
        openBoxWidth17();
      }
    });

    $('input[value="box_width_auto_18"]').click(function () {
      if (getCheckedCheckBoxes('box_width_auto_18')) {
        stock.box_width_auto_18 = true;
        hideBoxWidth18();
      } else {
        stock.box_width_auto_18 = false;
        openBoxWidth18();
      }
    });

    // изменение check box split
    $('input[value="box_split_7"]').click(function () {
      if (getCheckedCheckBoxes('box_split_7')) {
        stock.box_split_7 = true;
      } else {
        stock.box_split_7 = false;
      }
    });
    $('input[value="box_split_8"]').click(function () {
      if (getCheckedCheckBoxes('box_split_8')) {
        stock.box_split_8 = true;
      } else {
        stock.box_split_8 = false;
      }
    });
    $('input[value="box_split_9"]').click(function () {
      if (getCheckedCheckBoxes('box_split_9')) {
        stock.box_split_9 = true;
      } else {
        stock.box_split_9 = false;
      }
    });
    $('input[value="box_split_10"]').click(function () {
      if (getCheckedCheckBoxes('box_split_10')) {
        stock.box_split_10 = true;
      } else {
        stock.box_split_10 = false;
      }
    });
    $('input[value="box_split_11"]').click(function () {
      if (getCheckedCheckBoxes('box_split_11')) {
        stock.box_split_11 = true;
      } else {
        stock.box_split_11 = false;
      }
    });
    $('input[value="box_split_12"]').click(function () {
      if (getCheckedCheckBoxes('box_split_12')) {
        stock.box_split_12 = true;
      } else {
        stock.box_split_12 = false;
      }
    });

    // изменение check box wall
    $('input[value="box_wall_1"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_1')) {
        stock.box_wall_1 = true;
      } else {
        stock.box_wall_1 = false;
      }
    });

    $('input[value="box_wall_2"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_2')) {
        stock.box_wall_2 = true;
      } else {
        stock.box_wall_2 = false;
      }
    });

    $('input[value="box_wall_3"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_3')) {
        stock.box_wall_3 = true;
      } else {
        stock.box_wall_3 = false;
      }
    });

    $('input[value="box_wall_4"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_4')) {
        stock.box_wall_4 = true;
      } else {
        stock.box_wall_4 = false;
      }
    });

    $('input[value="box_wall_5"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_5')) {
        stock.box_wall_5 = true;
      } else {
        stock.box_wall_5 = false;
      }
    });

    $('input[value="box_wall_6"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_6')) {
        stock.box_wall_6 = true;
      } else {
        stock.box_wall_6 = false;
      }
    });

    $('input[value="box_wall_7"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_7')) {
        stock.box_wall_7 = true;
      } else {
        stock.box_wall_7 = false;
      }
    });

    $('input[value="box_wall_8"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_8')) {
        stock.box_wall_8 = true;
      } else {
        stock.box_wall_8 = false;
      }
    });

    $('input[value="box_wall_9"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_9')) {
        stock.box_wall_9 = true;
      } else {
        stock.box_wall_9 = false;
      }
    });

    $('input[value="box_wall_10"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_10')) {
        stock.box_wall_10 = true;
      } else {
        stock.box_wall_10 = false;
      }
    });

    $('input[value="box_wall_11"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_11')) {
        stock.box_wall_11 = true;
      } else {
        stock.box_wall_11 = false;
      }
    });

    $('input[value="box_wall_12"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_12')) {
        stock.box_wall_12 = true;
      } else {
        stock.box_wall_12 = false;
      }
    });

    $('input[value="box_wall_13"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_13')) {
        stock.box_wall_13 = true;
      } else {
        stock.box_wall_13 = false;
      }
    });

    $('input[value="box_wall_14"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_14')) {
        stock.box_wall_14 = true;
      } else {
        stock.box_wall_14 = false;
      }
    });

    $('input[value="box_wall_15"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_15')) {
        stock.box_wall_15 = true;
      } else {
        stock.box_wall_15 = false;
      }
    });

    $('input[value="box_wall_16"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_16')) {
        stock.box_wall_16 = true;
      } else {
        stock.box_wall_16 = false;
      }
    });

    $('input[value="box_wall_17"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_17')) {
        stock.box_wall_17 = true;
      } else {
        stock.box_wall_17 = false;
      }
    });

    $('input[value="box_wall_18"]').click(function () {
      if (getCheckedCheckBoxes('box_wall_18')) {
        stock.box_wall_18 = true;
      } else {
        stock.box_wall_18 = false;
      }
    });

    // изменение check material
    $('input[value="material-show"]').click(function () {
      if(getCheckedCheckBoxes('material-show')) {
        stock.material = true;
      } else {
        stock.material = false;
      }
    });

    // значение объекта prop меняется по окончанию клика мыши
    // пока что не пашет, мб когда-нибудь пригодится, но функционал готов
    $('#inputRange-height').mouseup(function () {
      prop.height = $('#inputRange-height').val();
    });
    $('#inputRange-width').mouseup(function () {
      prop.width = $('#inputRange-width').val();
    });
    $('#inputRange-depth').mouseup(function () {
      prop.depth = $('#inputRange-depth').val();
    });
    $('#inputRange_delivery').mouseup(function () {
      prop.delivery = $('#inputRange_delivery').val();
    });

    // при движении ползунка моментально меняется поле number
    $('#inputRange_delivery').mousemove(function () {
      $('#inputNumber_delivery').val($('#inputRange_delivery').val());
    });

    $('#inputRange_height').mousemove(function () {
      $('#inputNumber_height').val($('#inputRange_height').val());
    });
    $('#inputRange_width').mousemove(function () {
      $('#inputNumber_width').val($('#inputRange_width').val());
    });
    $('#inputRange_depth').mousemove(function () {
      $('#inputNumber_depth').val($('#inputRange_depth').val());
    });
    $('#inputRange_visor').mousemove(function () {
      $('#inputNumber_visor').val($('#inputRange_visor').val());
    });
    $('#inputRange_visor_side').mousemove(function () {
      $('#inputNumber_visor_side').val($('#inputRange_visor_side').val());
    });
    $('#inputRange_roof_f').mousemove(function () {
      $('#inputNumber_roof_f').val($('#inputRange_roof_f').val());
    });
    $('#inputRange_roof_b').mousemove(function () {
      $('#inputNumber_roof_b').val($('#inputRange_roof_b').val());
    });
    $('#inputRange_entresol').mousemove(function () {
      $('#inputNumber_entresol').val($('#inputRange_entresol').val());
    });
    $('#inputRange_base_f').mousemove(function () {
      $('#inputNumber_base_f').val($('#inputRange_base_f').val());
    });
    $('#inputRange_base_b').mousemove(function () {
      $('#inputNumber_base_b').val($('#inputRange_base_b').val());
    });
    $('#inputRange_base_height').mousemove(function () {
      $('#inputNumber_base_height').val($('#inputRange_base_height').val());
    });
    $('#inputRange_floor_height').mousemove(function () {
      $('#inputNumber_floor_height').val($('#inputRange_floor_height').val());
    });

    // задержка при ручном вводе в поле number
    timeoutInput('#inputNumber_height', '#inputRange_height', 'height');
    timeoutInput('#inputNumber_width', '#inputRange_width', 'width');
    timeoutInput('#inputNumber_depth', '#inputRange_depth', 'depth');
    timeoutInput('#inputNumber_visor', '#inputRange_visor', 'depth');
    timeoutInput('#inputNumber_visor_side', '#inputRange_visor_side', 'depth');
    timeoutInput('#inputNumber_roof_f', '#inputRange_roof_f', 'depth');
    timeoutInput('#inputNumber_roof_b', '#inputRange_roof_b', 'depth');
    timeoutInput('#inputNumber_entresol', '#inputRange_entresol', 'depth');
    timeoutInput('#inputNumber_base_f', '#inputRange_base_f', 'depth');
    timeoutInput('#inputNumber_base_b', '#inputRange_base_b', 'depth');
    timeoutInput('#inputNumber_base_height', '#inputRange_base_height', 'depth');
    timeoutInput('#inputNumber_floor_height', '#inputRange_floor_height', 'depth');
    timeoutInput('#inputNumber_delivery', '#inputRange_delivery', 'delivery');

    $('#inputNumber_entresol_amount').on('input', function () {
      prop.entresol_rack = +$('#inputNumber_entresol_amount').val();
    });

    $('#inputNumber_lower_amount').on('input', function () {
      prop.lower_rack = +$('#inputNumber_lower_amount').val();
    });

    $('#inputNumber_rise').on('input', function () {
      stock.rise = +$('#inputNumber_rise').val();
    });

    $('#inputNumber_delivery').on('input', function () {
      stock.delivery = +$('#inputNumber_delivery').val();
    });

    // заполняю ширину и количество наполнения в каждой секции
    timeoutInput('#inputNumber_width_box_1', '#inputRange_width_box_1', 'box_width_1');
    $('#inputRange_width_box_1').mousemove(function () {
      $('#inputNumber_width_box_1').val($('#inputRange_width_box_1').val());
    });

    timeoutInput('#inputNumber_width_box_2', '#inputRange_width_box_2', 'box_width_2');
    $('#inputRange_width_box_2').mousemove(function () {
      $('#inputNumber_width_box_2').val($('#inputRange_width_box_2').val());
    });

    timeoutInput('#inputNumber_width_box_3', '#inputRange_width_box_3', 'box_width_3');
    $('#inputRange_width_box_3').mousemove(function () {
      $('#inputNumber_width_box_3').val($('#inputRange_width_box_3').val());
    });

    timeoutInput('#inputNumber_width_box_4', '#inputRange_width_box_4', 'box_width_4');
    $('#inputRange_width_box_4').mousemove(function () {
      $('#inputNumber_width_box_4').val($('#inputRange_width_box_4').val());
    });

    timeoutInput('#inputNumber_width_box_5', '#inputRange_width_box_5', 'box_width_5');
    $('#inputRange_width_box_5').mousemove(function () {
      $('#inputNumber_width_box_5').val($('#inputRange_width_box_5').val());
    });

    timeoutInput('#inputNumber_width_box_6', '#inputRange_width_box_6', 'box_width_6');
    $('#inputRange_width_box_6').mousemove(function () {
      $('#inputNumber_width_box_6').val($('#inputRange_width_box_6').val());
    });

    timeoutInput('#inputNumber_width_box_7', '#inputRange_width_box_7', 'box_width_7');
    $('#inputRange_width_box_7').mousemove(function () {
      $('#inputNumber_width_box_7').val($('#inputRange_width_box_7').val());
    });

    timeoutInput('#inputNumber_width_box_8', '#inputRange_width_box_8', 'box_width_8');
    $('#inputRange_width_box_8').mousemove(function () {
      $('#inputNumber_width_box_8').val($('#inputRange_width_box_8').val());
    });

    timeoutInput('#inputNumber_width_box_9', '#inputRange_width_box_9', 'box_width_9');
    $('#inputRange_width_box_9').mousemove(function () {
      $('#inputNumber_width_box_9').val($('#inputRange_width_box_9').val());
    });

    timeoutInput('#inputNumber_width_box_10', '#inputRange_width_box_10', 'box_width_10');
    $('#inputRange_width_box_10').mousemove(function () {
      $('#inputNumber_width_box_10').val($('#inputRange_width_box_10').val());
    });

    timeoutInput('#inputNumber_width_box_11', '#inputRange_width_box_11', 'box_width_11');
    $('#inputRange_width_box_11').mousemove(function () {
      $('#inputNumber_width_box_11').val($('#inputRange_width_box_11').val());
    });

    timeoutInput('#inputNumber_width_box_12', '#inputRange_width_box_12', 'box_width_12');
    $('#inputRange_width_box_12').mousemove(function () {
      $('#inputNumber_width_box_12').val($('#inputRange_width_box_12').val());
    });

    timeoutInput('#inputNumber_width_box_13', '#inputRange_width_box_13', 'box_width_13');
    $('#inputRange_width_box_13').mousemove(function () {
      $('#inputNumber_width_box_13').val($('#inputRange_width_box_13').val());
    });

    timeoutInput('#inputNumber_width_box_14', '#inputRange_width_box_14', 'box_width_14');
    $('#inputRange_width_box_14').mousemove(function () {
      $('#inputNumber_width_box_14').val($('#inputRange_width_box_14').val());
    });

    timeoutInput('#inputNumber_width_box_15', '#inputRange_width_box_15', 'box_width_15');
    $('#inputRange_width_box_15').mousemove(function () {
      $('#inputNumber_width_box_15').val($('#inputRange_width_box_15').val());
    });

    timeoutInput('#inputNumber_width_box_16', '#inputRange_width_box_16', 'box_width_16');
    $('#inputRange_width_box_16').mousemove(function () {
      $('#inputNumber_width_box_16').val($('#inputRange_width_box_16').val());
    });

    timeoutInput('#inputNumber_width_box_17', '#inputRange_width_box_17', 'box_width_17');
    $('#inputRange_width_box_17').mousemove(function () {
      $('#inputNumber_width_box_17').val($('#inputRange_width_box_17').val());
    });
    // console.log($('#inputRange_width_box_13').val());
    timeoutInput('#inputNumber_width_box_18', '#inputRange_width_box_18', 'box_width_18');
    $('#inputRange_width_box_18').mousemove(function () {
      $('#inputNumber_width_box_18').val($('#inputRange_width_box_18').val());
    });

    $('#inputNumber_fill_amount_1').on('input', function () {
      prop.box_fill_amount_1 = $('inputNumber_fill_amount_1').val();
    });

    $('#inputNumber_fill_amount_2').on('input', function () {
      prop.box_fill_amount_2 = $('inputNumber_fill_amount_2').val();
    });

    $('#inputNumber_fill_amount_3').on('input', function () {
      prop.box_fill_amount_3 = $('inputNumber_fill_amount_3').val();
    });

    $('#inputNumber_fill_amount_4').on('input', function () {
      prop.box_fill_amount_4 = $('inputNumber_fill_amount_4').val();
    });

    $('#inputNumber_fill_amount_5').on('input', function () {
      prop.box_fill_amount_5 = $('inputNumber_fill_amount_5').val();
    });

    $('#inputNumber_fill_amount_6').on('input', function () {
      prop.box_fill_amount_6 = $('inputNumber_fill_amount_6').val();
    });

    $('#inputNumber_fill_amount_7').on('input', function () {
      prop.box_fill_amount_7 = $('inputNumber_fill_amount_7').val();
    });

    $('#inputNumber_fill_amount_8').on('input', function () {
      prop.box_fill_amount_8 = $('inputNumber_fill_amount_8').val();
    });

    $('#inputNumber_fill_amount_9').on('input', function () {
      prop.box_fill_amount_9 = $('inputNumber_fill_amount_9').val();
    });

    $('#inputNumber_fill_amount_10').on('input', function () {
      prop.box_fill_amount_10 = $('inputNumber_fill_amount_10').val();
    });

    $('#inputNumber_fill_amount_11').on('input', function () {
      prop.box_fill_amount_11 = $('inputNumber_fill_amount_11').val();
    });

    $('#inputNumber_fill_amount_12').on('input', function () {
      prop.box_fill_amount_12 = $('inputNumber_fill_amount_12').val();
    });

    $('#inputNumber_fill_amount_13').on('input', function () {
      prop.box_fill_amount_13 = $('inputNumber_fill_amount_13').val();
    });

    $('#inputNumber_fill_amount_14').on('input', function () {
      prop.box_fill_amount_14 = $('inputNumber_fill_amount_14').val();
    });

    $('#inputNumber_fill_amount_15').on('input', function () {
      prop.box_fill_amount_15 = $('inputNumber_fill_amount_15').val();
    });

    $('#inputNumber_fill_amount_16').on('input', function () {
      prop.box_fill_amount_16 = $('inputNumber_fill_amount_16').val();
    });

    $('#inputNumber_fill_amount_17').on('input', function () {
      prop.box_fill_amount_17 = $('inputNumber_fill_amount_17').val();
    });

    $('#inputNumber_fill_amount_18').on('input', function () {
      prop.box_fill_amount_18 = $('inputNumber_fill_amount_18').val();
    });

    // обработка изменений в полях select
    $('#inputSelect_roof').change(function () {
      if ($('#inputSelect_roof').val() == 'roof_in') {

        stock.roof_in = true;
        stock.roof_out = false;
        openRoofIn();
        hideRoofOut();
        if (stock.roof_cut) {
          openRoofCutChild();
        } else {
          hideRoofCutChild();
        }

      } else {

        stock.roof_in = false;
        stock.roof_out = true;
        openRoofOut();
        hideRoofIn();
        if (stock.visor) {
          openVisorSide();
        } else {
          hideVisorSide()
        }
      }
    });

    $('#inputSelect_bottom').change(function () {
      if ($('#inputSelect_bottom').val() == 'bottom_in') {
        stock.bottom_in = true;
        stock.bottom_out = false;

        $('option[value="legs_85"]').attr('disabled', false);
        $('option[value="legs_100"]').attr('disabled', true);
        $('option[value="legs_120"]').attr('disabled', true);
        $('option[value="legs_150"]').attr('disabled', true);
        $('option[value="legs_rollers"]').attr('disabled', true);

        $('option[value="legs_85"]').attr('selected', true);
        $('option[value="legs_100"]').attr('selected', false);
        stock.legs_no = false;
        stock.legs_85 = true;
        stock.legs_100 = false;
        stock.legs_120 = false;
        stock.legs_150 = false;
        stock.legs_rollers = false;

      } else {
        stock.bottom_in = false;
        stock.bottom_out = true;

        $('option[value="legs_85"]').attr('disabled', true);
        $('option[value="legs_100"]').attr('disabled', false);
        $('option[value="legs_120"]').attr('disabled', false);
        $('option[value="legs_150"]').attr('disabled', false);
        $('option[value="legs_rollers"]').attr('disabled', false);

        $('option[value="legs_85"]').attr('selected', false);
        $('option[value="legs_100"]').attr('selected', true);
        stock.legs_no = false;
        stock.legs_85 = false;
        stock.legs_100 = true;
        stock.legs_120 = false;
        stock.legs_150 = false;
        stock.legs_rollers = false;
      }
    });

    $('#inputSelect_legs').change(function () {
      if ($('#inputSelect_legs').val() == 'legs_no') {
        stock.legs_no = true;
        stock.legs_85 = false;
        stock.legs_100 = false;
        stock.legs_120 = false;
        stock.legs_150 = false;
        stock.legs_rollers = false;
      }
      if ($('#inputSelect_legs').val() == 'legs_85') {
        stock.legs_no = false;
        stock.legs_85 = true;
        stock.legs_100 = false;
        stock.legs_120 = false;
        stock.legs_150 = false;
        stock.legs_rollers = false;
      }
      if ($('#inputSelect_legs').val() == 'legs_100') {
        stock.legs_no = false;
        stock.legs_85 = false;
        stock.legs_100 = true;
        stock.legs_120 = false;
        stock.legs_150 = false;
        stock.legs_rollers = false;
      }
      if ($('#inputSelect_legs').val() == 'legs_120') {
        stock.legs_no = false;
        stock.legs_85 = false;
        stock.legs_100 = false;
        stock.legs_120 = true;
        stock.legs_150 = false;
        stock.legs_rollers = false;
      }
      if ($('#inputSelect_legs').val() == 'legs_150') {
        stock.legs_no = false;
        stock.legs_85 = false;
        stock.legs_100 = false;
        stock.legs_120 = false;
        stock.legs_150 = true;
        stock.legs_rollers = false;
      }
      if ($('#inputSelect_legs').val() == 'legs_rollers') {
        stock.legs_no = false;
        stock.legs_85 = false;
        stock.legs_100 = false;
        stock.legs_120 = false;
        stock.legs_150 = false;
        stock.legs_rollers = true;
      }
    });

    $('#inputSelect_door').change(function () {
      if ($('#inputSelect_door').val() == 'door_no') {
        stock.door_no = true;
        stock.door_sliding = false;
        stock.door_swing = false;
        hideChooseDoor();
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door').val() == 'door_sliding') {
        stock.door_no = false;
        stock.door_sliding = true;
        stock.door_swing = false;
        openChooseDoor();
        $('option[value="door_two_sl"]').attr('selected', true);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', false);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
        stock.door_two_sl = true;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door').val() == 'door_swing') {
        stock.door_no = false;
        stock.door_sliding = false;
        stock.door_swing = true;
        openChooseDoor();
        $('option[value="door_two_sl"]').attr('selected', false);
        $('option[value="door_three_sl"]').attr('selected', false);
        $('option[value="door_four_two_sl"]').attr('selected', false);
        $('option[value="door_four_three_sl"]').attr('selected', false);
        $('option[value="door_one_left_sw"]').attr('selected', true);
        $('option[value="door_one_right_sw"]').attr('selected', false);
        $('option[value="door_two_sw"]').attr('selected', false);
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = true;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
    });

    $('#inputSelect_door_sum').change(function () {
      if ($('#inputSelect_door_sum').val() == 'door_two_sl') {
        stock.door_two_sl = true;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door_sum').val() == 'door_three_sl') {
        stock.door_two_sl = false;
        stock.door_three_sl = true;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door_sum').val() == 'door_four_two_sl') {
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = true;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door_sum').val() == 'door_four_three_sl') {
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = true;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door_sum').val() == 'door_one_left_sw') {
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = true;
        stock.door_one_right_sw = false;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door_sum').val() == 'door_one_right_sw') {
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = true;
        stock.door_two_sw = false;
      }
      if ($('#inputSelect_door_sum').val() == 'door_two_sw') {
        stock.door_two_sl = false;
        stock.door_three_sl = false;
        stock.door_four_two_sl = false;
        stock.door_four_three_sl = false;
        stock.door_one_left_sw = false;
        stock.door_one_right_sw = false;
        stock.door_two_sw = true;
      }
    });

    $('#inputSelect_door_facade').change(function () {
      if ($('#inputSelect_door_facade').val() == 'door_in') {
        stock.door_in = true;
        stock.door_out = false;
      }
      if ($('#inputSelect_door_facade').val() == 'door_out') {
        stock.door_in = false;
        stock.door_out = true;
      }
    });

    $('#inputSelect_door_hand').change(function () {
      if ($('#inputSelect_door_hand').val() == 'hand_no') {
        stock.hand_no = true;
        stock.hand_bracket = false;
        stock.hand_shell = false;
        stock.hand_cut = false;
      }
      if ($('#inputSelect_door_hand').val() == 'hand_bracket') {
        stock.hand_no = false;
        stock.hand_bracket = true;
        stock.hand_shell = false;
        stock.hand_cut = false;
      }
      if ($('#inputSelect_door_hand').val() == 'hand_shell') {
        stock.hand_no = false;
        stock.hand_bracket = false;
        stock.hand_shell = true;
        stock.hand_cut = false;
      }
      if ($('#inputSelect_door_hand').val() == 'hand_cut') {
        stock.hand_no = false;
        stock.hand_bracket = false;
        stock.hand_shell = false;
        stock.hand_cut = true;
      }
    });

    // СЕКЦИИ SELECT

    // НАПОЛНЕНИЕ
    $('#inputSelect_fill_1').change(function () {
      if ($('#inputSelect_fill_1').val() == 'box_fill_no_1') {
        stock.box_fill_no_1 = true;
        stock.box_fill_shelf_1 = false;
        stock.box_fill_boxes_1 = false;
        stock.box_fill_rod_1 = false;
        hideBoxFillAmount1();
      }
      if ($('#inputSelect_fill_1').val() == 'box_fill_shelf_1') {
        stock.box_fill_no_1 = false;
        stock.box_fill_shelf_1 = true;
        stock.box_fill_boxes_1 = false;
        stock.box_fill_rod_1 = false;
        openBoxFillAmount1();
      }
      if ($('#inputSelect_fill_1').val() == 'box_fill_boxes_1') {
        stock.box_fill_no_1 = false;
        stock.box_fill_shelf_1 = false;
        stock.box_fill_boxes_1 = true;
        stock.box_fill_rod_1 = false;
        openBoxFillAmount1();
      }
      if ($('#inputSelect_fill_1').val() == 'box_fill_rod_1') {
        stock.box_fill_no_1 = false;
        stock.box_fill_shelf_1 = false;
        stock.box_fill_boxes_1 = false;
        stock.box_fill_rod_1 = true;
        openBoxFillAmount1();
      }
    });

    $('#inputSelect_fill_2').change(function () {
      if ($('#inputSelect_fill_2').val() == 'box_fill_no_2') {
        stock.box_fill_no_2 = true;
        stock.box_fill_shelf_2 = false;
        stock.box_fill_boxes_2 = false;
        stock.box_fill_rod_2 = false;
        hideBoxFillAmount2();
      }
      if ($('#inputSelect_fill_2').val() == 'box_fill_shelf_2') {
        stock.box_fill_no_2 = false;
        stock.box_fill_shelf_2 = true;
        stock.box_fill_boxes_2 = false;
        stock.box_fill_rod_2 = false;
        openBoxFillAmount2();
      }
      if ($('#inputSelect_fill_2').val() == 'box_fill_boxes_2') {
        stock.box_fill_no_2 = false;
        stock.box_fill_shelf_2 = false;
        stock.box_fill_boxes_2 = true;
        stock.box_fill_rod_2 = false;
        openBoxFillAmount2();
      }
      if ($('#inputSelect_fill_2').val() == 'box_fill_rod_2') {
        stock.box_fill_no_2 = false;
        stock.box_fill_shelf_2 = false;
        stock.box_fill_boxes_2 = false;
        stock.box_fill_rod_2 = true;
        openBoxFillAmount2();
      }
    });

    $('#inputSelect_fill_3').change(function () {
      if ($('#inputSelect_fill_3').val() == 'box_fill_no_3') {
        stock.box_fill_no_3 = true;
        stock.box_fill_shelf_3 = false;
        stock.box_fill_boxes_3 = false;
        stock.box_fill_rod_3 = false;
        hideBoxFillAmount3();
      }
      if ($('#inputSelect_fill_3').val() == 'box_fill_shelf_3') {
        stock.box_fill_no_3 = false;
        stock.box_fill_shelf_3 = true;
        stock.box_fill_boxes_3 = false;
        stock.box_fill_rod_3 = false;
        openBoxFillAmount3();
      }
      if ($('#inputSelect_fill_3').val() == 'box_fill_boxes_3') {
        stock.box_fill_no_3 = false;
        stock.box_fill_shelf_3 = false;
        stock.box_fill_boxes_3 = true;
        stock.box_fill_rod_3 = false;
        openBoxFillAmount3();
      }
      if ($('#inputSelect_fill_3').val() == 'box_fill_rod_3') {
        stock.box_fill_no_3 = false;
        stock.box_fill_shelf_3 = false;
        stock.box_fill_boxes_3 = false;
        stock.box_fill_rod_3 = true;
        openBoxFillAmount3();
      }
    });

    $('#inputSelect_fill_4').change(function () {
      if ($('#inputSelect_fill_4').val() == 'box_fill_no_4') {
        stock.box_fill_no_4 = true;
        stock.box_fill_shelf_4 = false;
        stock.box_fill_boxes_4 = false;
        stock.box_fill_rod_4 = false;
        hideBoxFillAmount4();
      }
      if ($('#inputSelect_fill_4').val() == 'box_fill_shelf_4') {
        stock.box_fill_no_4 = false;
        stock.box_fill_shelf_4 = true;
        stock.box_fill_boxes_4 = false;
        stock.box_fill_rod_4 = false;
        openBoxFillAmount4();
      }
      if ($('#inputSelect_fill_4').val() == 'box_fill_boxes_4') {
        stock.box_fill_no_4 = false;
        stock.box_fill_shelf_4 = false;
        stock.box_fill_boxes_4 = true;
        stock.box_fill_rod_4 = false;
        openBoxFillAmount4();
      }
      if ($('#inputSelect_fill_4').val() == 'box_fill_rod_4') {
        stock.box_fill_no_4 = false;
        stock.box_fill_shelf_4 = false;
        stock.box_fill_boxes_4 = false;
        stock.box_fill_rod_4 = true;
        openBoxFillAmount4();
      }
    });

    $('#inputSelect_fill_5').change(function () {
      if ($('#inputSelect_fill_5').val() == 'box_fill_no_5') {
        stock.box_fill_no_5 = true;
        stock.box_fill_shelf_5 = false;
        stock.box_fill_boxes_5 = false;
        stock.box_fill_rod_5 = false;
        hideBoxFillAmount5();
      }
      if ($('#inputSelect_fill_5').val() == 'box_fill_shelf_5') {
        stock.box_fill_no_5 = false;
        stock.box_fill_shelf_5 = true;
        stock.box_fill_boxes_5 = false;
        stock.box_fill_rod_5 = false;
        openBoxFillAmount5();
      }
      if ($('#inputSelect_fill_5').val() == 'box_fill_boxes_5') {
        stock.box_fill_no_5 = false;
        stock.box_fill_shelf_5 = false;
        stock.box_fill_boxes_5 = true;
        stock.box_fill_rod_5 = false;
        openBoxFillAmount5();
      }
      if ($('#inputSelect_fill_5').val() == 'box_fill_rod_5') {
        stock.box_fill_no_5 = false;
        stock.box_fill_shelf_5 = false;
        stock.box_fill_boxes_5 = false;
        stock.box_fill_rod_5 = true;
        openBoxFillAmount5();
      }
    });

    $('#inputSelect_fill_6').change(function () {
      if ($('#inputSelect_fill_6').val() == 'box_fill_no_6') {
        stock.box_fill_no_6 = true;
        stock.box_fill_shelf_6 = false;
        stock.box_fill_boxes_6 = false;
        stock.box_fill_rod_6 = false;
        hideBoxFillAmount6();
      }
      if ($('#inputSelect_fill_6').val() == 'box_fill_shelf_6') {
        stock.box_fill_no_6 = false;
        stock.box_fill_shelf_6 = true;
        stock.box_fill_boxes_6 = false;
        stock.box_fill_rod_6 = false;
        openBoxFillAmount6();
      }
      if ($('#inputSelect_fill_6').val() == 'box_fill_boxes_6') {
        stock.box_fill_no_6 = false;
        stock.box_fill_shelf_6 = false;
        stock.box_fill_boxes_6 = true;
        stock.box_fill_rod_6 = false;
        openBoxFillAmount6();
      }
      if ($('#inputSelect_fill_6').val() == 'box_fill_rod_6') {
        stock.box_fill_no_6 = false;
        stock.box_fill_shelf_6 = false;
        stock.box_fill_boxes_6 = false;
        stock.box_fill_rod_6 = true;
        openBoxFillAmount6();
      }
    });

    $('#inputSelect_fill_7').change(function () {
      if ($('#inputSelect_fill_7').val() == 'box_fill_no_7') {
        stock.box_fill_no_7 = true;
        stock.box_fill_shelf_7 = false;
        stock.box_fill_boxes_7 = false;
        stock.box_fill_rod_7 = false;
        hideBoxFillAmount7();
      }
      if ($('#inputSelect_fill_7').val() == 'box_fill_shelf_7') {
        stock.box_fill_no_7 = false;
        stock.box_fill_shelf_7 = true;
        stock.box_fill_boxes_7 = false;
        stock.box_fill_rod_7 = false;
        openBoxFillAmount7();
      }
      if ($('#inputSelect_fill_7').val() == 'box_fill_boxes_7') {
        stock.box_fill_no_7 = false;
        stock.box_fill_shelf_7 = false;
        stock.box_fill_boxes_7 = true;
        stock.box_fill_rod_7 = false;
        openBoxFillAmount7();
      }
      if ($('#inputSelect_fill_7').val() == 'box_fill_rod_7') {
        stock.box_fill_no_7 = false;
        stock.box_fill_shelf_7 = false;
        stock.box_fill_boxes_7 = false;
        stock.box_fill_rod_7 = true;
        openBoxFillAmount7();
      }
    });

    $('#inputSelect_fill_8').change(function () {
      if ($('#inputSelect_fill_8').val() == 'box_fill_no_8') {
        stock.box_fill_no_8 = true;
        stock.box_fill_shelf_8 = false;
        stock.box_fill_boxes_8 = false;
        stock.box_fill_rod_8 = false;
        hideBoxFillAmount8();
      }
      if ($('#inputSelect_fill_8').val() == 'box_fill_shelf_8') {
        stock.box_fill_no_8 = false;
        stock.box_fill_shelf_8 = true;
        stock.box_fill_boxes_8 = false;
        stock.box_fill_rod_8 = false;
        openBoxFillAmount8();
      }
      if ($('#inputSelect_fill_8').val() == 'box_fill_boxes_8') {
        stock.box_fill_no_8 = false;
        stock.box_fill_shelf_8 = false;
        stock.box_fill_boxes_8 = true;
        stock.box_fill_rod_8 = false;
        openBoxFillAmount8();
      }
      if ($('#inputSelect_fill_8').val() == 'box_fill_rod_8') {
        stock.box_fill_no_8 = false;
        stock.box_fill_shelf_8 = false;
        stock.box_fill_boxes_8 = false;
        stock.box_fill_rod_8 = true;
        openBoxFillAmount8();
      }
    });

    $('#inputSelect_fill_9').change(function () {
      if ($('#inputSelect_fill_9').val() == 'box_fill_no_9') {
        stock.box_fill_no_9 = true;
        stock.box_fill_shelf_9 = false;
        stock.box_fill_boxes_9 = false;
        stock.box_fill_rod_9 = false;
        hideBoxFillAmount9();
      }
      if ($('#inputSelect_fill_9').val() == 'box_fill_shelf_9') {
        stock.box_fill_no_9 = false;
        stock.box_fill_shelf_9 = true;
        stock.box_fill_boxes_9 = false;
        stock.box_fill_rod_9 = false;
        openBoxFillAmount9();
      }
      if ($('#inputSelect_fill_9').val() == 'box_fill_boxes_9') {
        stock.box_fill_no_9 = false;
        stock.box_fill_shelf_9 = false;
        stock.box_fill_boxes_9 = true;
        stock.box_fill_rod_9 = false;
        openBoxFillAmount9();
      }
      if ($('#inputSelect_fill_9').val() == 'box_fill_rod_9') {
        stock.box_fill_no_9 = false;
        stock.box_fill_shelf_9 = false;
        stock.box_fill_boxes_9 = false;
        stock.box_fill_rod_9 = true;
        openBoxFillAmount9();
      }
    });

    $('#inputSelect_fill_10').change(function () {
      if ($('#inputSelect_fill_10').val() == 'box_fill_no_10') {
        stock.box_fill_no_10 = true;
        stock.box_fill_shelf_10 = false;
        stock.box_fill_boxes_10 = false;
        stock.box_fill_rod_10 = false;
        hideBoxFillAmount10();
      }
      if ($('#inputSelect_fill_10').val() == 'box_fill_shelf_10') {
        stock.box_fill_no_10 = false;
        stock.box_fill_shelf_10 = true;
        stock.box_fill_boxes_10 = false;
        stock.box_fill_rod_10 = false;
        openBoxFillAmount10();
      }
      if ($('#inputSelect_fill_10').val() == 'box_fill_boxes_10') {
        stock.box_fill_no_10 = false;
        stock.box_fill_shelf_10 = false;
        stock.box_fill_boxes_10 = true;
        stock.box_fill_rod_10 = false;
        openBoxFillAmount10();
      }
      if ($('#inputSelect_fill_10').val() == 'box_fill_rod_10') {
        stock.box_fill_no_10 = false;
        stock.box_fill_shelf_10 = false;
        stock.box_fill_boxes_10 = false;
        stock.box_fill_rod_10 = true;
        openBoxFillAmount10();
      }
    });

    $('#inputSelect_fill_11').change(function () {
      if ($('#inputSelect_fill_11').val() == 'box_fill_no_11') {
        stock.box_fill_no_11 = true;
        stock.box_fill_shelf_11 = false;
        stock.box_fill_boxes_11 = false;
        stock.box_fill_rod_11 = false;
        hideBoxFillAmount11();
      }
      if ($('#inputSelect_fill_11').val() == 'box_fill_shelf_11') {
        stock.box_fill_no_11 = false;
        stock.box_fill_shelf_11 = true;
        stock.box_fill_boxes_11 = false;
        stock.box_fill_rod_11 = false;
        openBoxFillAmount11();
      }
      if ($('#inputSelect_fill_11').val() == 'box_fill_boxes_11') {
        stock.box_fill_no_11 = false;
        stock.box_fill_shelf_11 = false;
        stock.box_fill_boxes_11 = true;
        stock.box_fill_rod_11 = false;
        openBoxFillAmount11();
      }
      if ($('#inputSelect_fill_11').val() == 'box_fill_rod_11') {
        stock.box_fill_no_11 = false;
        stock.box_fill_shelf_11 = false;
        stock.box_fill_boxes_11 = false;
        stock.box_fill_rod_11 = true;
        openBoxFillAmount11();
      }
    });

    $('#inputSelect_fill_12').change(function () {
      if ($('#inputSelect_fill_12').val() == 'box_fill_no_12') {
        stock.box_fill_no_12 = true;
        stock.box_fill_shelf_12 = false;
        stock.box_fill_boxes_12 = false;
        stock.box_fill_rod_12 = false;
        hideBoxFillAmount12();
      }
      if ($('#inputSelect_fill_12').val() == 'box_fill_shelf_12') {
        stock.box_fill_no_12 = false;
        stock.box_fill_shelf_12 = true;
        stock.box_fill_boxes_12 = false;
        stock.box_fill_rod_12 = false;
        openBoxFillAmount12();
      }
      if ($('#inputSelect_fill_12').val() == 'box_fill_boxes_12') {
        stock.box_fill_no_12 = false;
        stock.box_fill_shelf_12 = false;
        stock.box_fill_boxes_12 = true;
        stock.box_fill_rod_12 = false;
        openBoxFillAmount12();
      }
      if ($('#inputSelect_fill_12').val() == 'box_fill_rod_12') {
        stock.box_fill_no_12 = false;
        stock.box_fill_shelf_12 = false;
        stock.box_fill_boxes_12 = false;
        stock.box_fill_rod_12 = true;
        openBoxFillAmount12();
      }
    });

    $('#inputSelect_fill_13').change(function () {
      if ($('#inputSelect_fill_13').val() == 'box_fill_no_13') {
        stock.box_fill_no_13 = true;
        stock.box_fill_shelf_13 = false;
        stock.box_fill_boxes_13 = false;
        stock.box_fill_rod_13 = false;
        hideBoxFillAmount13();
      }
      if ($('#inputSelect_fill_13').val() == 'box_fill_shelf_13') {
        stock.box_fill_no_13 = false;
        stock.box_fill_shelf_13 = true;
        stock.box_fill_boxes_13 = false;
        stock.box_fill_rod_13 = false;
        openBoxFillAmount13();
      }
      if ($('#inputSelect_fill_13').val() == 'box_fill_boxes_13') {
        stock.box_fill_no_13 = false;
        stock.box_fill_shelf_13 = false;
        stock.box_fill_boxes_13 = true;
        stock.box_fill_rod_13 = false;
        openBoxFillAmount13();
      }
      if ($('#inputSelect_fill_13').val() == 'box_fill_rod_13') {
        stock.box_fill_no_13 = false;
        stock.box_fill_shelf_13 = false;
        stock.box_fill_boxes_13 = false;
        stock.box_fill_rod_13 = true;
        openBoxFillAmount13();
      }
    });

    $('#inputSelect_fill_14').change(function () {
      if ($('#inputSelect_fill_14').val() == 'box_fill_no_14') {
        stock.box_fill_no_14 = true;
        stock.box_fill_shelf_14 = false;
        stock.box_fill_boxes_14 = false;
        stock.box_fill_rod_14 = false;
        hideBoxFillAmount14();
      }
      if ($('#inputSelect_fill_14').val() == 'box_fill_shelf_14') {
        stock.box_fill_no_14 = false;
        stock.box_fill_shelf_14 = true;
        stock.box_fill_boxes_14 = false;
        stock.box_fill_rod_14 = false;
        openBoxFillAmount14();
      }
      if ($('#inputSelect_fill_14').val() == 'box_fill_boxes_14') {
        stock.box_fill_no_14 = false;
        stock.box_fill_shelf_14 = false;
        stock.box_fill_boxes_14 = true;
        stock.box_fill_rod_14 = false;
        openBoxFillAmount14();
      }
      if ($('#inputSelect_fill_14').val() == 'box_fill_rod_14') {
        stock.box_fill_no_14 = false;
        stock.box_fill_shelf_14 = false;
        stock.box_fill_boxes_14 = false;
        stock.box_fill_rod_14 = true;
        openBoxFillAmount14();
      }
    });

    $('#inputSelect_fill_15').change(function () {
      if ($('#inputSelect_fill_15').val() == 'box_fill_no_15') {
        stock.box_fill_no_15 = true;
        stock.box_fill_shelf_15 = false;
        stock.box_fill_boxes_15 = false;
        stock.box_fill_rod_15 = false;
        hideBoxFillAmount15();
      }
      if ($('#inputSelect_fill_15').val() == 'box_fill_shelf_15') {
        stock.box_fill_no_15 = false;
        stock.box_fill_shelf_15 = true;
        stock.box_fill_boxes_15 = false;
        stock.box_fill_rod_15 = false;
        openBoxFillAmount15();
      }
      if ($('#inputSelect_fill_15').val() == 'box_fill_boxes_15') {
        stock.box_fill_no_15 = false;
        stock.box_fill_shelf_15 = false;
        stock.box_fill_boxes_15 = true;
        stock.box_fill_rod_15 = false;
        openBoxFillAmount15();
      }
      if ($('#inputSelect_fill_15').val() == 'box_fill_rod_15') {
        stock.box_fill_no_15 = false;
        stock.box_fill_shelf_15 = false;
        stock.box_fill_boxes_15 = false;
        stock.box_fill_rod_15 = true;
        openBoxFillAmount15();
      }
    });

    $('#inputSelect_fill_16').change(function () {
      if ($('#inputSelect_fill_16').val() == 'box_fill_no_16') {
        stock.box_fill_no_16 = true;
        stock.box_fill_shelf_16 = false;
        stock.box_fill_boxes_16 = false;
        stock.box_fill_rod_16 = false;
        hideBoxFillAmount16();
      }
      if ($('#inputSelect_fill_16').val() == 'box_fill_shelf_16') {
        stock.box_fill_no_16 = false;
        stock.box_fill_shelf_16 = true;
        stock.box_fill_boxes_16 = false;
        stock.box_fill_rod_16 = false;
        openBoxFillAmount16();
      }
      if ($('#inputSelect_fill_16').val() == 'box_fill_boxes_16') {
        stock.box_fill_no_16 = false;
        stock.box_fill_shelf_16 = false;
        stock.box_fill_boxes_16 = true;
        stock.box_fill_rod_16 = false;
        openBoxFillAmount16();
      }
      if ($('#inputSelect_fill_16').val() == 'box_fill_rod_16') {
        stock.box_fill_no_16 = false;
        stock.box_fill_shelf_16 = false;
        stock.box_fill_boxes_16 = false;
        stock.box_fill_rod_16 = true;
        openBoxFillAmount16();
      }
    });

    $('#inputSelect_fill_17').change(function () {
      if ($('#inputSelect_fill_17').val() == 'box_fill_no_17') {
        stock.box_fill_no_17 = true;
        stock.box_fill_shelf_17 = false;
        stock.box_fill_boxes_17 = false;
        stock.box_fill_rod_17 = false;
        hideBoxFillAmount17();
      }
      if ($('#inputSelect_fill_17').val() == 'box_fill_shelf_17') {
        stock.box_fill_no_17 = false;
        stock.box_fill_shelf_17 = true;
        stock.box_fill_boxes_17 = false;
        stock.box_fill_rod_17 = false;
        openBoxFillAmount17();
      }
      if ($('#inputSelect_fill_17').val() == 'box_fill_boxes_17') {
        stock.box_fill_no_17 = false;
        stock.box_fill_shelf_17 = false;
        stock.box_fill_boxes_17 = true;
        stock.box_fill_rod_17 = false;
        openBoxFillAmount17();
      } 1
      if ($('#inputSelect_fill_17').val() == 'box_fill_rod_17') {
        stock.box_fill_no_17 = false;
        stock.box_fill_shelf_17 = false;
        stock.box_fill_boxes_17 = false;
        stock.box_fill_rod_17 = true;
        openBoxFillAmount17();
      }
    });

    $('#inputSelect_fill_18').change(function () {
      if ($('#inputSelect_fill_18').val() == 'box_fill_no_18') {
        stock.box_fill_no_18 = true;
        stock.box_fill_shelf_18 = false;
        stock.box_fill_boxes_18 = false;
        stock.box_fill_rod_18 = false;
        hideBoxFillAmount18();
      }
      if ($('#inputSelect_fill_18').val() == 'box_fill_shelf_18') {
        stock.box_fill_no_18 = false;
        stock.box_fill_shelf_18 = true;
        stock.box_fill_boxes_18 = false;
        stock.box_fill_rod_18 = false;
        openBoxFillAmount18();
      }
      if ($('#inputSelect_fill_18').val() == 'box_fill_boxes_18') {
        stock.box_fill_no_18 = false;
        stock.box_fill_shelf_18 = false;
        stock.box_fill_boxes_18 = true;
        stock.box_fill_rod_18 = false;
        openBoxFillAmount18();
      }
      if ($('#inputSelect_fill_18').val() == 'box_fill_rod_18') {
        stock.box_fill_no_18 = false;
        stock.box_fill_shelf_18 = false;
        stock.box_fill_boxes_18 = false;
        stock.box_fill_rod_18 = true;
        openBoxFillAmount18();
      }
    });
    // ДВЕРЬ
    $('#inputSelect_door_1').change(function () {
      if ($('#inputSelect_door_1').val() == 'box_door_no_1') {
        stock.box_door_no_1 = true;
        stock.box_door_one_left_1 = false;
        stock.box_door_one_right_1 = false;
        stock.box_door_two_1 = false;
      }
      if ($('#inputSelect_door_1').val() == 'box_door_one_left_1') {
        stock.box_door_no_1 = false;
        stock.box_door_one_left_1 = true;
        stock.box_door_one_right_1 = false;
        stock.box_door_two_1 = false;
      }
      if ($('#inputSelect_door_1').val() == 'box_door_one_right_1') {
        stock.box_door_no_1 = false;
        stock.box_door_one_left_1 = false;
        stock.box_door_one_right_1 = true;
        stock.box_door_two_1 = false;
      }
      if ($('#inputSelect_door_1').val() == 'box_door_two_1') {
        stock.box_door_no_1 = false;
        stock.box_door_one_left_1 = false;
        stock.box_door_one_right_1 = false;
        stock.box_door_two_1 = true;
      }
    });

    $('#inputSelect_door_2').change(function () {
      if ($('#inputSelect_door_2').val() == 'box_door_no_2') {
        stock.box_door_no_2 = true;
        stock.box_door_one_left_2 = false;
        stock.box_door_one_right_2 = false;
        stock.box_door_two_2 = false;
      }
      if ($('#inputSelect_door_2').val() == 'box_door_one_left_2') {
        stock.box_door_no_2 = false;
        stock.box_door_one_left_2 = true;
        stock.box_door_one_right_2 = false;
        stock.box_door_two_2 = false;
      }
      if ($('#inputSelect_door_2').val() == 'box_door_one_right_2') {
        stock.box_door_no_2 = false;
        stock.box_door_one_left_2 = false;
        stock.box_door_one_right_2 = true;
        stock.box_door_two_2 = false;
      }
      if ($('#inputSelect_door_2').val() == 'box_door_two_2') {
        stock.box_door_no_2 = false;
        stock.box_door_one_left_2 = false;
        stock.box_door_one_right_2 = false;
        stock.box_door_two_2 = true;
      }
    });

    $('#inputSelect_door_3').change(function () {
      if ($('#inputSelect_door_3').val() == 'box_door_no_3') {
        stock.box_door_no_3 = true;
        stock.box_door_one_left_3 = false;
        stock.box_door_one_right_3 = false;
        stock.box_door_two_3 = false;
      }
      if ($('#inputSelect_door_3').val() == 'box_door_one_left_3') {
        stock.box_door_no_3 = false;
        stock.box_door_one_left_3 = true;
        stock.box_door_one_right_3 = false;
        stock.box_door_two_3 = false;
      }
      if ($('#inputSelect_door_3').val() == 'box_door_one_right_3') {
        stock.box_door_no_3 = false;
        stock.box_door_one_left_3 = false;
        stock.box_door_one_right_3 = true;
        stock.box_door_two_3 = false;
      }
      if ($('#inputSelect_door_3').val() == 'box_door_two_3') {
        stock.box_door_no_3 = false;
        stock.box_door_one_left_3 = false;
        stock.box_door_one_right_3 = false;
        stock.box_door_two_3 = true;
      }
    });

    $('#inputSelect_door_4').change(function () {
      if ($('#inputSelect_door_4').val() == 'box_door_no_4') {
        stock.box_door_no_4 = true;
        stock.box_door_one_left_4 = false;
        stock.box_door_one_right_4 = false;
        stock.box_door_two_4 = false;
      }
      if ($('#inputSelect_door_4').val() == 'box_door_one_left_4') {
        stock.box_door_no_4 = false;
        stock.box_door_one_left_4 = true;
        stock.box_door_one_right_4 = false;
        stock.box_door_two_4 = false;
      }
      if ($('#inputSelect_door_4').val() == 'box_door_one_right_4') {
        stock.box_door_no_4 = false;
        stock.box_door_one_left_4 = false;
        stock.box_door_one_right_4 = true;
        stock.box_door_two_4 = false;
      }
      if ($('#inputSelect_door_4').val() == 'box_door_two_4') {
        stock.box_door_no_4 = false;
        stock.box_door_one_left_4 = false;
        stock.box_door_one_right_4 = false;
        stock.box_door_two_4 = true;
      }
    });

    $('#inputSelect_door_5').change(function () {
      if ($('#inputSelect_door_5').val() == 'box_door_no_5') {
        stock.box_door_no_5 = true;
        stock.box_door_one_left_5 = false;
        stock.box_door_one_right_5 = false;
        stock.box_door_two_5 = false;
      }
      if ($('#inputSelect_door_5').val() == 'box_door_one_left_5') {
        stock.box_door_no_5 = false;
        stock.box_door_one_left_5 = true;
        stock.box_door_one_right_5 = false;
        stock.box_door_two_5 = false;
      }
      if ($('#inputSelect_door_5').val() == 'box_door_one_right_5') {
        stock.box_door_no_5 = false;
        stock.box_door_one_left_5 = false;
        stock.box_door_one_right_5 = true;
        stock.box_door_two_5 = false;
      }
      if ($('#inputSelect_door_5').val() == 'box_door_two_5') {
        stock.box_door_no_5 = false;
        stock.box_door_one_left_5 = false;
        stock.box_door_one_right_5 = false;
        stock.box_door_two_5 = true;
      }
    });

    $('#inputSelect_door_6').change(function () {
      if ($('#inputSelect_door_6').val() == 'box_door_no_6') {
        stock.box_door_no_6 = true;
        stock.box_door_one_left_6 = false;
        stock.box_door_one_right_6 = false;
        stock.box_door_two_6 = false;
      }
      if ($('#inputSelect_door_6').val() == 'box_door_one_left_6') {
        stock.box_door_no_6 = false;
        stock.box_door_one_left_6 = true;
        stock.box_door_one_right_6 = false;
        stock.box_door_two_6 = false;
      }
      if ($('#inputSelect_door_6').val() == 'box_door_one_right_6') {
        stock.box_door_no_6 = false;
        stock.box_door_one_left_6 = false;
        stock.box_door_one_right_6 = true;
        stock.box_door_two_6 = false;
      }
      if ($('#inputSelect_door_6').val() == 'box_door_two_6') {
        stock.box_door_no_6 = false;
        stock.box_door_one_left_6 = false;
        stock.box_door_one_right_6 = false;
        stock.box_door_two_6 = true;
      }
    });

    $('#inputSelect_door_7').change(function () {
      if ($('#inputSelect_door_7').val() == 'box_door_no_7') {
        stock.box_door_no_7 = true;
        stock.box_door_one_left_7 = false;
        stock.box_door_one_right_7 = false;
        stock.box_door_two_7 = false;
      }
      if ($('#inputSelect_door_7').val() == 'box_door_one_left_7') {
        stock.box_door_no_7 = false;
        stock.box_door_one_left_7 = true;
        stock.box_door_one_right_7 = false;
        stock.box_door_two_7 = false;
      }
      if ($('#inputSelect_door_7').val() == 'box_door_one_right_7') {
        stock.box_door_no_7 = false;
        stock.box_door_one_left_7 = false;
        stock.box_door_one_right_7 = true;
        stock.box_door_two_7 = false;
      }
      if ($('#inputSelect_door_7').val() == 'box_door_two_7') {
        stock.box_door_no_7 = false;
        stock.box_door_one_left_7 = false;
        stock.box_door_one_right_7 = false;
        stock.box_door_two_7 = true;
      }
    });

    $('#inputSelect_door_8').change(function () {
      if ($('#inputSelect_door_8').val() == 'box_door_no_8') {
        stock.box_door_no_8 = true;
        stock.box_door_one_left_8 = false;
        stock.box_door_one_right_8 = false;
        stock.box_door_two_8 = false;
      }
      if ($('#inputSelect_door_8').val() == 'box_door_one_left_8') {
        stock.box_door_no_8 = false;
        stock.box_door_one_left_8 = true;
        stock.box_door_one_right_8 = false;
        stock.box_door_two_8 = false;
      }
      if ($('#inputSelect_door_8').val() == 'box_door_one_right_8') {
        stock.box_door_no_8 = false;
        stock.box_door_one_left_8 = false;
        stock.box_door_one_right_8 = true;
        stock.box_door_two_8 = false;
      }
      if ($('#inputSelect_door_8').val() == 'box_door_two_8') {
        stock.box_door_no_8 = false;
        stock.box_door_one_left_8 = false;
        stock.box_door_one_right_8 = false;
        stock.box_door_two_8 = true;
      }
    });

    $('#inputSelect_door_9').change(function () {
      if ($('#inputSelect_door_9').val() == 'box_door_no_9') {
        stock.box_door_no_9 = true;
        stock.box_door_one_left_9 = false;
        stock.box_door_one_right_9 = false;
        stock.box_door_two_9 = false;
      }
      if ($('#inputSelect_door_9').val() == 'box_door_one_left_9') {
        stock.box_door_no_9 = false;
        stock.box_door_one_left_9 = true;
        stock.box_door_one_right_9 = false;
        stock.box_door_two_9 = false;
      }
      if ($('#inputSelect_door_9').val() == 'box_door_one_right_9') {
        stock.box_door_no_9 = false;
        stock.box_door_one_left_9 = false;
        stock.box_door_one_right_9 = true;
        stock.box_door_two_9 = false;
      }
      if ($('#inputSelect_door_9').val() == 'box_door_two_9') {
        stock.box_door_no_9 = false;
        stock.box_door_one_left_9 = false;
        stock.box_door_one_right_9 = false;
        stock.box_door_two_9 = true;
      }
    });

    $('#inputSelect_door_10').change(function () {
      if ($('#inputSelect_door_10').val() == 'box_door_no_10') {
        stock.box_door_no_10 = true;
        stock.box_door_one_left_10 = false;
        stock.box_door_one_right_10 = false;
        stock.box_door_two_10 = false;
      }
      if ($('#inputSelect_door_10').val() == 'box_door_one_left_10') {
        stock.box_door_no_10 = false;
        stock.box_door_one_left_10 = true;
        stock.box_door_one_right_10 = false;
        stock.box_door_two_10 = false;
      }
      if ($('#inputSelect_door_10').val() == 'box_door_one_right_10') {
        stock.box_door_no_10 = false;
        stock.box_door_one_left_10 = false;
        stock.box_door_one_right_10 = true;
        stock.box_door_two_10 = false;
      }
      if ($('#inputSelect_door_10').val() == 'box_door_two_10') {
        stock.box_door_no_10 = false;
        stock.box_door_one_left_10 = false;
        stock.box_door_one_right_10 = false;
        stock.box_door_two_10 = true;
      }
    });

    $('#inputSelect_door_11').change(function () {
      if ($('#inputSelect_door_11').val() == 'box_door_no_11') {
        stock.box_door_no_11 = true;
        stock.box_door_one_left_11 = false;
        stock.box_door_one_right_11 = false;
        stock.box_door_two_11 = false;
      }
      if ($('#inputSelect_door_11').val() == 'box_door_one_left_11') {
        stock.box_door_no_11 = false;
        stock.box_door_one_left_11 = true;
        stock.box_door_one_right_11 = false;
        stock.box_door_two_11 = false;
      }
      if ($('#inputSelect_door_11').val() == 'box_door_one_right_11') {
        stock.box_door_no_11 = false;
        stock.box_door_one_left_11 = false;
        stock.box_door_one_right_11 = true;
        stock.box_door_two_11 = false;
      }
      if ($('#inputSelect_door_11').val() == 'box_door_two_11') {
        stock.box_door_no_11 = false;
        stock.box_door_one_left_11 = false;
        stock.box_door_one_right_11 = false;
        stock.box_door_two_11 = true;
      }
    });

    $('#inputSelect_door_12').change(function () {
      if ($('#inputSelect_door_12').val() == 'box_door_no_12') {
        stock.box_door_no_12 = true;
        stock.box_door_one_left_12 = false;
        stock.box_door_one_right_12 = false;
        stock.box_door_two_12 = false;
      }
      if ($('#inputSelect_door_12').val() == 'box_door_one_left_12') {
        stock.box_door_no_12 = false;
        stock.box_door_one_left_12 = true;
        stock.box_door_one_right_12 = false;
        stock.box_door_two_12 = false;
      }
      if ($('#inputSelect_door_12').val() == 'box_door_one_right_12') {
        stock.box_door_no_12 = false;
        stock.box_door_one_left_12 = false;
        stock.box_door_one_right_12 = true;
        stock.box_door_two_12 = false;
      }
      if ($('#inputSelect_door_12').val() == 'box_door_two_12') {
        stock.box_door_no_12 = false;
        stock.box_door_one_left_12 = false;
        stock.box_door_one_right_12 = false;
        stock.box_door_two_12 = true;
      }
    });

    $('#inputSelect_door_13').change(function () {
      if ($('#inputSelect_door_13').val() == 'box_door_no_13') {
        stock.box_door_no_13 = true;
        stock.box_door_one_left_13 = false;
        stock.box_door_one_right_13 = false;
        stock.box_door_two_13 = false;
      }
      if ($('#inputSelect_door_13').val() == 'box_door_one_left_13') {
        stock.box_door_no_13 = false;
        stock.box_door_one_left_13 = true;
        stock.box_door_one_right_13 = false;
        stock.box_door_two_13 = false;
      }
      if ($('#inputSelect_door_13').val() == 'box_door_one_right_13') {
        stock.box_door_no_13 = false;
        stock.box_door_one_left_13 = false;
        stock.box_door_one_right_13 = true;
        stock.box_door_two_13 = false;
      }
      if ($('#inputSelect_door_13').val() == 'box_door_two_13') {
        stock.box_door_no_13 = false;
        stock.box_door_one_left_13 = false;
        stock.box_door_one_right_13 = false;
        stock.box_door_two_13 = true;
      }
    });

    $('#inputSelect_door_14').change(function () {
      if ($('#inputSelect_door_14').val() == 'box_door_no_14') {
        stock.box_door_no_14 = true;
        stock.box_door_one_left_14 = false;
        stock.box_door_one_right_14 = false;
        stock.box_door_two_14 = false;
      }
      if ($('#inputSelect_door_14').val() == 'box_door_one_left_14') {
        stock.box_door_no_14 = false;
        stock.box_door_one_left_14 = true;
        stock.box_door_one_right_14 = false;
        stock.box_door_two_14 = false;
      }
      if ($('#inputSelect_door_14').val() == 'box_door_one_right_14') {
        stock.box_door_no_14 = false;
        stock.box_door_one_left_14 = false;
        stock.box_door_one_right_14 = true;
        stock.box_door_two_14 = false;
      }
      if ($('#inputSelect_door_14').val() == 'box_door_two_14') {
        stock.box_door_no_14 = false;
        stock.box_door_one_left_14 = false;
        stock.box_door_one_right_14 = false;
        stock.box_door_two_14 = true;
      }
    });

    $('#inputSelect_door_15').change(function () {
      if ($('#inputSelect_door_15').val() == 'box_door_no_15') {
        stock.box_door_no_15 = true;
        stock.box_door_one_left_15 = false;
        stock.box_door_one_right_15 = false;
        stock.box_door_two_15 = false;
      }
      if ($('#inputSelect_door_15').val() == 'box_door_one_left_15') {
        stock.box_door_no_15 = false;
        stock.box_door_one_left_15 = true;
        stock.box_door_one_right_15 = false;
        stock.box_door_two_15 = false;
      }
      if ($('#inputSelect_door_15').val() == 'box_door_one_right_15') {
        stock.box_door_no_15 = false;
        stock.box_door_one_left_15 = false;
        stock.box_door_one_right_15 = true;
        stock.box_door_two_15 = false;
      }
      if ($('#inputSelect_door_15').val() == 'box_door_two_15') {
        stock.box_door_no_15 = false;
        stock.box_door_one_left_15 = false;
        stock.box_door_one_right_15 = false;
        stock.box_door_two_15 = true;
      }
    });

    $('#inputSelect_door_16').change(function () {
      if ($('#inputSelect_door_16').val() == 'box_door_no_16') {
        stock.box_door_no_16 = true;
        stock.box_door_one_left_16 = false;
        stock.box_door_one_right_16 = false;
        stock.box_door_two_16 = false;
      }
      if ($('#inputSelect_door_16').val() == 'box_door_one_left_16') {
        stock.box_door_no_16 = false;
        stock.box_door_one_left_16 = true;
        stock.box_door_one_right_16 = false;
        stock.box_door_two_16 = false;
      }
      if ($('#inputSelect_door_16').val() == 'box_door_one_right_16') {
        stock.box_door_no_16 = false;
        stock.box_door_one_left_16 = false;
        stock.box_door_one_right_16 = true;
        stock.box_door_two_16 = false;
      }
      if ($('#inputSelect_door_16').val() == 'box_door_two_16') {
        stock.box_door_no_16 = false;
        stock.box_door_one_left_16 = false;
        stock.box_door_one_right_16 = false;
        stock.box_door_two_16 = true;
      }
    });

    $('#inputSelect_door_17').change(function () {
      if ($('#inputSelect_door_17').val() == 'box_door_no_17') {
        stock.box_door_no_17 = true;
        stock.box_door_one_left_17 = false;
        stock.box_door_one_right_17 = false;
        stock.box_door_two_17 = false;
      }
      if ($('#inputSelect_door_17').val() == 'box_door_one_left_17') {
        stock.box_door_no_17 = false;
        stock.box_door_one_left_17 = true;
        stock.box_door_one_right_17 = false;
        stock.box_door_two_17 = false;
      }
      if ($('#inputSelect_door_17').val() == 'box_door_one_right_17') {
        stock.box_door_no_17 = false;
        stock.box_door_one_left_17 = false;
        stock.box_door_one_right_17 = true;
        stock.box_door_two_17 = false;
      }
      if ($('#inputSelect_door_17').val() == 'box_door_two_17') {
        stock.box_door_no_17 = false;
        stock.box_door_one_left_17 = false;
        stock.box_door_one_right_17 = false;
        stock.box_door_two_17 = true;
      }
    });

    $('#inputSelect_door_18').change(function () {
      if ($('#inputSelect_door_18').val() == 'box_door_no_18') {
        stock.box_door_no_18 = true;
        stock.box_door_one_left_18 = false;
        stock.box_door_one_right_18 = false;
        stock.box_door_two_18 = false;
      }
      if ($('#inputSelect_door_18').val() == 'box_door_one_left_18') {
        stock.box_door_no_18 = false;
        stock.box_door_one_left_18 = true;
        stock.box_door_one_right_18 = false;
        stock.box_door_two_18 = false;
      }
      if ($('#inputSelect_door_18').val() == 'box_door_one_right_18') {
        stock.box_door_no_18 = false;
        stock.box_door_one_left_18 = false;
        stock.box_door_one_right_18 = true;
        stock.box_door_two_18 = false;
      }
      if ($('#inputSelect_door_18').val() == 'box_door_two_18') {
        stock.box_door_no_18 = false;
        stock.box_door_one_left_18 = false;
        stock.box_door_one_right_18 = false;
        stock.box_door_two_18 = true;
      }
    });

    // БЛОК ФУНКЦИЙ

    // ожидание для ручного ввода в input number
    function timeoutInput(inputNumber, inputRange, value) {
      $(inputNumber).on('input', function () {
        settings.stack += 1;
        var timeout = setTimeout.bind(null, function () {
          if (settings.stack == 1) {
            $(inputRange).val($(inputNumber).val());
            prop[value] = $(inputRange).val();
            settings.stack = 0;
          } else {
            settings.stack -= 1;
          }
        }, 300);
        timeout();
      })
    }

    // получаю все выбранные checkbox на странице
    function getCheckedCheckBoxes(value) {
      var selectedCheckBoxes = document.querySelectorAll('input[type="checkbox"]:checked');
      var checkedValues = Array.from(selectedCheckBoxes).map(cb => cb.value);
      return checkedValues.includes(value); // массив checked CheckBoxes
    }

    // Функции по переключению полей
    var hideRoofOut = function () {
      hideVisor();
      hideVisorSide();
    }
    var hideRoofIn = function () {
      $('#label_roof_cut').addClass('disabled_label');
      $('input[value="roof_cut"]').attr('disabled', true);
      hideRoofCutChild();
    }
    var openRoofOut = function () {
      openVisor();
      openVisorSide();
    }
    var openRoofIn = function () {
      $('#label_roof_cut').removeClass('disabled_label');
      $('input[value="roof_cut"]').attr('disabled', false);
      openRoofCutChild();
    }

    // составные функции
    var hideVisor = function () {
      $('#label_visor').addClass('disabled_label');
      $('input[value="visor"]').attr('disabled', true);
      $('#inputNumber_visor').attr('disabled', true);
      $('#inputRange_visor').attr('disabled', true);
      $('#inputRange_visor').addClass('disabled_range');
    }
    var hideVisorSide = function () {
      $('#label_visor_side').addClass('disabled_label');
      $('input[value="visor_side"]').attr('disabled', true);
      $('#inputNumber_visor_side').attr('disabled', true);
      $('#inputRange_visor_side').attr('disabled', true);
      $('#inputRange_visor_side').addClass('disabled_range');
    }
    var openVisor = function () {
      $('#label_visor').removeClass('disabled_label');
      $('input[value="visor"]').attr('disabled', false);
      if (stock.visor) {
        $('#inputNumber_visor').attr('disabled', false);
        $('#inputRange_visor').attr('disabled', false);
        $('#inputRange_visor').removeClass('disabled_range');
      }
    }
    var openVisorSide = function () {
      $('#label_visor_side').removeClass('disabled_label');
      $('input[value="visor_side"]').attr('disabled', false);
      if (stock.visor_side) {
        $('#inputNumber_visor_side').attr('disabled', false);
        $('#inputRange_visor_side').attr('disabled', false);
        $('#inputRange_visor_side').removeClass('disabled_range');
      }
    }

    var hideRoofCutChild = function () {
      $('#label_roof_f').addClass('disabled_label');
      $('input[value="roof_f"]').attr('disabled', true);
      $('#inputNumber_roof_f').attr('disabled', true);
      $('#inputRange_roof_f').attr('disabled', true);
      $('#inputRange_roof_f').addClass('disabled_range');

      $('#label_roof_b').addClass('disabled_label');
      $('input[value="roof_b"]').attr('disabled', true);
      $('#inputNumber_roof_b').attr('disabled', true);
      $('#inputRange_roof_b').attr('disabled', true);
      $('#inputRange_roof_b').addClass('disabled_range');
    }
    var openRoofCutChild = function () {
      $('#label_roof_f').removeClass('disabled_label');
      $('input[value="roof_f"]').attr('disabled', false);
      if (stock.roof_f) {
        $('#inputNumber_roof_f').attr('disabled', false);
        $('#inputRange_roof_f').attr('disabled', false);
        $('#inputRange_roof_f').removeClass('disabled_range');
      }
      $('#label_roof_b').removeClass('disabled_label');
      $('input[value="roof_b"]').attr('disabled', false);
      if (stock.roof_b) {
        $('#inputNumber_roof_b').attr('disabled', false);
        $('#inputRange_roof_b').attr('disabled', false);
        $('#inputRange_roof_b').removeClass('disabled_range');
      }
    }
    var hideEntresol = function () {
      $('#label_entresol').addClass('disabled_label');
      $('#inputNumber_entresol').attr('disabled', true);
      $('#inputRange_entresol').attr('disabled', true);
      $('#inputRange_entresol').addClass('disabled_range');
    }
    var openEntresol = function () {
      $('#label_entresol').removeClass('disabled_label');
      $('#inputNumber_entresol').attr('disabled', false);
      $('#inputRange_entresol').attr('disabled', false);
      $('#inputRange_entresol').removeClass('disabled_range');
    }
    var hideEntresolAmount = function () {
      $('#label_entresol_amount').addClass('disabled_label');
      $('#inputNumber_entresol_amount').attr('disabled', true);
    }
    var openEntresolAmount = function () {
      $('#label_entresol_amount').removeClass('disabled_label');
      $('#inputNumber_entresol_amount').attr('disabled', false);
    }

    var hideBaseF = function () {
      $('#label_base_f').addClass('disabled_label');
      $('#inputNumber_base_f').attr('disabled', true);
      $('#inputRange_base_f').attr('disabled', true);
      $('#inputRange_base_f').addClass('disabled_range');

      $('#label_base_b_check').addClass('disabled_label');
      $('input[value="base_b"]').attr('disabled', true);

      $('#label_base_b').addClass('disabled_label');
      $('#inputNumber_base_b').attr('disabled', true);
      $('#inputRange_base_b').attr('disabled', true);
      $('#inputRange_base_b').addClass('disabled_range');

      $('#label_base_height').addClass('disabled_label');
      $('#inputNumber_base_height').attr('disabled', true);
      $('#inputRange_base_height').attr('disabled', true);
      $('#inputRange_base_height').addClass('disabled_range');
    }
    var openBaseF = function () {
      $('#label_base_f').removeClass('disabled_label');
      $('#inputNumber_base_f').attr('disabled', false);
      $('#inputRange_base_f').attr('disabled', false);
      $('#inputRange_base_f').removeClass('disabled_range');

      $('#label_base_b_check').removeClass('disabled_label');
      $('input[value="base_b"]').attr('disabled', false);

      $('#label_base_b').removeClass('disabled_label');
      $('#inputNumber_base_b').attr('disabled', false);
      $('#inputRange_base_b').attr('disabled', false);
      $('#inputRange_base_b').removeClass('disabled_range');

      $('#label_base_height').removeClass('disabled_label');
      $('#inputNumber_base_height').attr('disabled', false);
      $('#inputRange_base_height').attr('disabled', false);
      $('#inputRange_base_height').removeClass('disabled_range');
    }
    var hideBaseB = function () {
      $('#label_base_b').addClass('disabled_label');
      $('#inputNumber_base_b').attr('disabled', true);
      $('#inputRange_base_b').attr('disabled', true);
      $('#inputRange_base_b').addClass('disabled_range');

      // $('#label_base_height').addClass('disabled_label');
      // $('#inputNumber_base_height').attr('disabled', true);
      // $('#inputRange_base_height').attr('disabled', true);
      // $('#inputRange_base_height').addClass('disabled_range');
    }
    var openBaseB = function () {
      $('#label_base_b').removeClass('disabled_label');
      $('#inputNumber_base_b').attr('disabled', false);
      $('#inputRange_base_b').attr('disabled', false);
      $('#inputRange_base_b').removeClass('disabled_range');

      // $('#label_base_height').removeClass('disabled_label');
      // $('#inputNumber_base_height').attr('disabled', false);
      // $('#inputRange_base_height').attr('disabled', false);
      // $('#inputRange_base_height').removeClass('disabled_range');
    }
    var hideFloorHeight = function () {
      $('#label_floor_height').addClass('disabled_label');
      $('#inputNumber_floor_height').attr('disabled', true);
      $('#inputRange_floor_height').attr('disabled', true);
      $('#inputRange_floor_height').addClass('disabled_range');
    }
    var openFloorHeight = function () {
      $('#label_floor_height').removeClass('disabled_label');
      $('#inputNumber_floor_height').attr('disabled', false);
      $('#inputRange_floor_height').attr('disabled', false);
      $('#inputRange_floor_height').removeClass('disabled_range');
    }

    var hideWallCut = function () {
      $('#label_wall_cut').addClass('disabled_label');
      $('input[value="wall_cut"]').attr('disabled', true);
    }
    var openWallCut = function () {
      $('#label_wall_cut').removeClass('disabled_label');
      $('input[value="wall_cut"]').attr('disabled', false);
    }

    var hideChooseDoor = function () {
      $('#label_door_facade').addClass('disabled_label');
      $('#inputSelect_door_facade').attr('disabled', true);
      $('#label_door_hand').addClass('disabled_label');
      $('#inputSelect_door_hand').attr('disabled', true);
      $('#label_door_sum').addClass('disabled_label');
      $('#inputSelect_door_sum').attr('disabled', true);

      // $('option[value="door_two_sl"]').attr('disabled', true);
      // $('option[value="door_three_sl"]').attr('disabled', true);
      // $('option[value="door_four_two_sl"]').attr('disabled', true);
      // $('option[value="door_four_three_sl"]').attr('disabled', true);
      // $('option[value="door_one_left_sw"]').attr('disabled', true);
      // $('option[value="door_one_right_sw"]').attr('disabled', true);
      // $('option[value="door_two_sw"]').attr('disabled', true);
    }
    var openChooseDoor = function () {
      $('#label_door_facade').removeClass('disabled_label');
      $('#inputSelect_door_facade').attr('disabled', false);
      $('#label_door_hand').removeClass('disabled_label');
      $('#inputSelect_door_hand').attr('disabled', false);
      $('#label_door_sum').removeClass('disabled_label');
      $('#inputSelect_door_sum').attr('disabled', false);
      if (stock.door_sliding) {
        $('option[value="door_two_sl"]').attr('disabled', false);
        $('option[value="door_three_sl"]').attr('disabled', false);
        $('option[value="door_four_two_sl"]').attr('disabled', false);
        $('option[value="door_four_three_sl"]').attr('disabled', false);
        $('option[value="door_one_left_sw"]').attr('disabled', true);
        $('option[value="door_one_right_sw"]').attr('disabled', true);
        $('option[value="door_two_sw"]').attr('disabled', true);
      }
      if (stock.door_swing) {
        $('option[value="door_two_sl"]').attr('disabled', true);
        $('option[value="door_three_sl"]').attr('disabled', true);
        $('option[value="door_four_two_sl"]').attr('disabled', true);
        $('option[value="door_four_three_sl"]').attr('disabled', true);
        $('option[value="door_one_left_sw"]').attr('disabled', false);
        $('option[value="door_one_right_sw"]').attr('disabled', false);
        $('option[value="door_two_sw"]').attr('disabled', false);
      }
    }

    var hideBoxWidth1 = function () {
      $('#label_width_1').addClass('disabled_label');
      $('#inputNumber_width_box_1').attr('disabled', true);
      $('#inputRange_width_box_1').attr('disabled', true);
      $('#inputRange_width_box_1').addClass('disabled_range');
    }
    var hideBoxWidth2 = function () {
      $('#label_width_2').addClass('disabled_label');
      $('#inputNumber_width_box_2').attr('disabled', true);
      $('#inputRange_width_box_2').attr('disabled', true);
      $('#inputRange_width_box_2').addClass('disabled_range');
    }
    var hideBoxWidth3 = function () {
      $('#label_width_3').addClass('disabled_label');
      $('#inputNumber_width_box_3').attr('disabled', true);
      $('#inputRange_width_box_3').attr('disabled', true);
      $('#inputRange_width_box_3').addClass('disabled_range');
    }
    var hideBoxWidth4 = function () {
      $('#label_width_4').addClass('disabled_label');
      $('#inputNumber_width_box_4').attr('disabled', true);
      $('#inputRange_width_box_4').attr('disabled', true);
      $('#inputRange_width_box_4').addClass('disabled_range');
    }
    var hideBoxWidth5 = function () {
      $('#label_width_5').addClass('disabled_label');
      $('#inputNumber_width_box_5').attr('disabled', true);
      $('#inputRange_width_box_5').attr('disabled', true);
      $('#inputRange_width_box_5').addClass('disabled_range');
    }
    var hideBoxWidth6 = function () {
      $('#label_width_6').addClass('disabled_label');
      $('#inputNumber_width_box_6').attr('disabled', true);
      $('#inputRange_width_box_6').attr('disabled', true);
      $('#inputRange_width_box_6').addClass('disabled_range');
    }
    var hideBoxWidth7 = function () {
      $('#label_width_7').addClass('disabled_label');
      $('#inputNumber_width_box_7').attr('disabled', true);
      $('#inputRange_width_box_7').attr('disabled', true);
      $('#inputRange_width_box_7').addClass('disabled_range');
    }
    var hideBoxWidth8 = function () {
      $('#label_width_8').addClass('disabled_label');
      $('#inputNumber_width_box_8').attr('disabled', true);
      $('#inputRange_width_box_8').attr('disabled', true);
      $('#inputRange_width_box_8').addClass('disabled_range');
    }
    var hideBoxWidth9 = function () {
      $('#label_width_9').addClass('disabled_label');
      $('#inputNumber_width_box_9').attr('disabled', true);
      $('#inputRange_width_box_9').attr('disabled', true);
      $('#inputRange_width_box_9').addClass('disabled_range');
    }
    var hideBoxWidth10 = function () {
      $('#label_width_10').addClass('disabled_label');
      $('#inputNumber_width_box_10').attr('disabled', true);
      $('#inputRange_width_box_10').attr('disabled', true);
      $('#inputRange_width_box_10').addClass('disabled_range');
    }
    var hideBoxWidth11 = function () {
      $('#label_width_11').addClass('disabled_label');
      $('#inputNumber_width_box_11').attr('disabled', true);
      $('#inputRange_width_box_11').attr('disabled', true);
      $('#inputRange_width_box_11').addClass('disabled_range');
    }
    var hideBoxWidth12 = function () {
      $('#label_width_12').addClass('disabled_label');
      $('#inputNumber_width_box_12').attr('disabled', true);
      $('#inputRange_width_box_12').attr('disabled', true);
      $('#inputRange_width_box_12').addClass('disabled_range');
    }
    var hideBoxWidth13 = function () {
      $('#label_width_13').addClass('disabled_label');
      $('#inputNumber_width_box_13').attr('disabled', true);
      $('#inputRange_width_box_13').attr('disabled', true);
      $('#inputRange_width_box_13').addClass('disabled_range');
    }
    var hideBoxWidth14 = function () {
      $('#label_width_14').addClass('disabled_label');
      $('#inputNumber_width_box_14').attr('disabled', true);
      $('#inputRange_width_box_14').attr('disabled', true);
      $('#inputRange_width_box_14').addClass('disabled_range');
    }
    var hideBoxWidth15 = function () {
      $('#label_width_15').addClass('disabled_label');
      $('#inputNumber_width_box_15').attr('disabled', true);
      $('#inputRange_width_box_15').attr('disabled', true);
      $('#inputRange_width_box_15').addClass('disabled_range');
    }
    var hideBoxWidth16 = function () {
      $('#label_width_16').addClass('disabled_label');
      $('#inputNumber_width_box_16').attr('disabled', true);
      $('#inputRange_width_box_16').attr('disabled', true);
      $('#inputRange_width_box_16').addClass('disabled_range');
    }
    var hideBoxWidth17 = function () {
      $('#label_width_17').addClass('disabled_label');
      $('#inputNumber_width_box_17').attr('disabled', true);
      $('#inputRange_width_box_17').attr('disabled', true);
      $('#inputRange_width_box_17').addClass('disabled_range');
    }
    var hideBoxWidth18 = function () {
      $('#label_width_18').addClass('disabled_label');
      $('#inputNumber_width_box_18').attr('disabled', true);
      $('#inputRange_width_box_18').attr('disabled', true);
      $('#inputRange_width_box_18').addClass('disabled_range');
    }
    var openBoxWidth1 = function () {
      $('#label_width_1').removeClass('disabled_label');
      $('#inputNumber_width_box_1').attr('disabled', false);
      $('#inputRange_width_box_1').attr('disabled', false);
      $('#inputRange_width_box_1').removeClass('disabled_range');
    }
    var openBoxWidth2 = function () {
      $('#label_width_2').removeClass('disabled_label');
      $('#inputNumber_width_box_2').attr('disabled', false);
      $('#inputRange_width_box_2').attr('disabled', false);
      $('#inputRange_width_box_2').removeClass('disabled_range');
    }
    var openBoxWidth3 = function () {
      $('#label_width_3').removeClass('disabled_label');
      $('#inputNumber_width_box_3').attr('disabled', false);
      $('#inputRange_width_box_3').attr('disabled', false);
      $('#inputRange_width_box_3').removeClass('disabled_range');
    }
    var openBoxWidth4 = function () {
      $('#label_width_4').removeClass('disabled_label');
      $('#inputNumber_width_box_4').attr('disabled', false);
      $('#inputRange_width_box_4').attr('disabled', false);
      $('#inputRange_width_box_4').removeClass('disabled_range');
    }
    var openBoxWidth5 = function () {
      $('#label_width_5').removeClass('disabled_label');
      $('#inputNumber_width_box_5').attr('disabled', false);
      $('#inputRange_width_box_5').attr('disabled', false);
      $('#inputRange_width_box_5').removeClass('disabled_range');
    }
    var openBoxWidth6 = function () {
      $('#label_width_6').removeClass('disabled_label');
      $('#inputNumber_width_box_6').attr('disabled', false);
      $('#inputRange_width_box_6').attr('disabled', false);
      $('#inputRange_width_box_6').removeClass('disabled_range');
    }
    var openBoxWidth7 = function () {
      $('#label_width_7').removeClass('disabled_label');
      $('#inputNumber_width_box_7').attr('disabled', false);
      $('#inputRange_width_box_7').attr('disabled', false);
      $('#inputRange_width_box_7').removeClass('disabled_range');
    }
    var openBoxWidth8 = function () {
      $('#label_width_8').removeClass('disabled_label');
      $('#inputNumber_width_box_8').attr('disabled', false);
      $('#inputRange_width_box_8').attr('disabled', false);
      $('#inputRange_width_box_8').removeClass('disabled_range');
    }
    var openBoxWidth9 = function () {
      $('#label_width_9').removeClass('disabled_label');
      $('#inputNumber_width_box_9').attr('disabled', false);
      $('#inputRange_width_box_9').attr('disabled', false);
      $('#inputRange_width_box_9').removeClass('disabled_range');
    }
    var openBoxWidth10 = function () {
      $('#label_width_10').removeClass('disabled_label');
      $('#inputNumber_width_box_10').attr('disabled', false);
      $('#inputRange_width_box_10').attr('disabled', false);
      $('#inputRange_width_box_10').removeClass('disabled_range');
    }
    var openBoxWidth11 = function () {
      $('#label_width_11').removeClass('disabled_label');
      $('#inputNumber_width_box_11').attr('disabled', false);
      $('#inputRange_width_box_11').attr('disabled', false);
      $('#inputRange_width_box_11').removeClass('disabled_range');
    }
    var openBoxWidth12 = function () {
      $('#label_width_12').removeClass('disabled_label');
      $('#inputNumber_width_box_12').attr('disabled', false);
      $('#inputRange_width_box_12').attr('disabled', false);
      $('#inputRange_width_box_12').removeClass('disabled_range');
    }
    var openBoxWidth13 = function () {
      $('#label_width_13').removeClass('disabled_label');
      $('#inputNumber_width_box_13').attr('disabled', false);
      $('#inputRange_width_box_13').attr('disabled', false);
      $('#inputRange_width_box_13').removeClass('disabled_range');
    }
    var openBoxWidth14 = function () {
      $('#label_width_14').removeClass('disabled_label');
      $('#inputNumber_width_box_14').attr('disabled', false);
      $('#inputRange_width_box_14').attr('disabled', false);
      $('#inputRange_width_box_14').removeClass('disabled_range');
    }
    var openBoxWidth15 = function () {
      $('#label_width_15').removeClass('disabled_label');
      $('#inputNumber_width_box_15').attr('disabled', false);
      $('#inputRange_width_box_15').attr('disabled', false);
      $('#inputRange_width_box_15').removeClass('disabled_range');
    }
    var openBoxWidth16 = function () {
      $('#label_width_16').removeClass('disabled_label');
      $('#inputNumber_width_box_16').attr('disabled', false);
      $('#inputRange_width_box_16').attr('disabled', false);
      $('#inputRange_width_box_16').removeClass('disabled_range');
    }
    var openBoxWidth17 = function () {
      $('#label_width_17').removeClass('disabled_label');
      $('#inputNumber_width_box_17').attr('disabled', false);
      $('#inputRange_width_box_17').attr('disabled', false);
      $('#inputRange_width_box_17').removeClass('disabled_range');
    }
    var openBoxWidth18 = function () {
      $('#label_width_18').removeClass('disabled_label');
      $('#inputNumber_width_box_18').attr('disabled', false);
      $('#inputRange_width_box_18').attr('disabled', false);
      $('#inputRange_width_box_18').removeClass('disabled_range');
    }

    var hideBoxFillAmount1 = function () {
      $('#label_fill_amount_1').addClass('disabled_label');
      $('#inputNumber_fill_amount_1').attr('disabled', true);
    }
    var hideBoxFillAmount2 = function () {
      $('#label_fill_amount_2').addClass('disabled_label');
      $('#inputNumber_fill_amount_2').attr('disabled', true);
    }
    var hideBoxFillAmount3 = function () {
      $('#label_fill_amount_3').addClass('disabled_label');
      $('#inputNumber_fill_amount_3').attr('disabled', true);
    }
    var hideBoxFillAmount4 = function () {
      $('#label_fill_amount_4').addClass('disabled_label');
      $('#inputNumber_fill_amount_4').attr('disabled', true);
    }
    var hideBoxFillAmount5 = function () {
      $('#label_fill_amount_5').addClass('disabled_label');
      $('#inputNumber_fill_amount_5').attr('disabled', true);
    }
    var hideBoxFillAmount6 = function () {
      $('#label_fill_amount_6').addClass('disabled_label');
      $('#inputNumber_fill_amount_6').attr('disabled', true);
    }
    var hideBoxFillAmount7 = function () {
      $('#label_fill_amount_7').addClass('disabled_label');
      $('#inputNumber_fill_amount_7').attr('disabled', true);
    }
    var hideBoxFillAmount8 = function () {
      $('#label_fill_amount_8').addClass('disabled_label');
      $('#inputNumber_fill_amount_8').attr('disabled', true);
    }
    var hideBoxFillAmount9 = function () {
      $('#label_fill_amount_9').addClass('disabled_label');
      $('#inputNumber_fill_amount_9').attr('disabled', true);
    }
    var hideBoxFillAmount10 = function () {
      $('#label_fill_amount_10').addClass('disabled_label');
      $('#inputNumber_fill_amount_10').attr('disabled', true);
    }
    var hideBoxFillAmount11 = function () {
      $('#label_fill_amount_11').addClass('disabled_label');
      $('#inputNumber_fill_amount_11').attr('disabled', true);
    }
    var hideBoxFillAmount12 = function () {
      $('#label_fill_amount_12').addClass('disabled_label');
      $('#inputNumber_fill_amount_12').attr('disabled', true);
    }
    var hideBoxFillAmount13 = function () {
      $('#label_fill_amount_13').addClass('disabled_label');
      $('#inputNumber_fill_amount_13').attr('disabled', true);
    }
    var hideBoxFillAmount14 = function () {
      $('#label_fill_amount_14').addClass('disabled_label');
      $('#inputNumber_fill_amount_14').attr('disabled', true);
    }
    var hideBoxFillAmount15 = function () {
      $('#label_fill_amount_15').addClass('disabled_label');
      $('#inputNumber_fill_amount_15').attr('disabled', true);
    }
    var hideBoxFillAmount16 = function () {
      $('#label_fill_amount_16').addClass('disabled_label');
      $('#inputNumber_fill_amount_16').attr('disabled', true);
    }
    var hideBoxFillAmount17 = function () {
      $('#label_fill_amount_17').addClass('disabled_label');
      $('#inputNumber_fill_amount_17').attr('disabled', true);
    }
    var hideBoxFillAmount18 = function () {
      $('#label_fill_amount_18').addClass('disabled_label');
      $('#inputNumber_fill_amount_18').attr('disabled', true);
    }
    var openBoxFillAmount1 = function () {
      $('#label_fill_amount_1').removeClass('disabled_label');
      $('#inputNumber_fill_amount_1').attr('disabled', false);
    }
    var openBoxFillAmount2 = function () {
      $('#label_fill_amount_2').removeClass('disabled_label');
      $('#inputNumber_fill_amount_2').attr('disabled', false);
    }
    var openBoxFillAmount3 = function () {
      $('#label_fill_amount_3').removeClass('disabled_label');
      $('#inputNumber_fill_amount_3').attr('disabled', false);
    }
    var openBoxFillAmount4 = function () {
      $('#label_fill_amount_4').removeClass('disabled_label');
      $('#inputNumber_fill_amount_4').attr('disabled', false);
    }
    var openBoxFillAmount5 = function () {
      $('#label_fill_amount_5').removeClass('disabled_label');
      $('#inputNumber_fill_amount_5').attr('disabled', false);
    }
    var openBoxFillAmount6 = function () {
      $('#label_fill_amount_6').removeClass('disabled_label');
      $('#inputNumber_fill_amount_6').attr('disabled', false);
    }
    var openBoxFillAmount7 = function () {
      $('#label_fill_amount_7').removeClass('disabled_label');
      $('#inputNumber_fill_amount_7').attr('disabled', false);
    }
    var openBoxFillAmount8 = function () {
      $('#label_fill_amount_8').removeClass('disabled_label');
      $('#inputNumber_fill_amount_8').attr('disabled', false);
    }
    var openBoxFillAmount9 = function () {
      $('#label_fill_amount_9').removeClass('disabled_label');
      $('#inputNumber_fill_amount_9').attr('disabled', false);
    }
    var openBoxFillAmount10 = function () {
      $('#label_fill_amount_10').removeClass('disabled_label');
      $('#inputNumber_fill_amount_10').attr('disabled', false);
    }
    var openBoxFillAmount11 = function () {
      $('#label_fill_amount_11').removeClass('disabled_label');
      $('#inputNumber_fill_amount_11').attr('disabled', false);
    }
    var openBoxFillAmount12 = function () {
      $('#label_fill_amount_12').removeClass('disabled_label');
      $('#inputNumber_fill_amount_12').attr('disabled', false);
    }
    var openBoxFillAmount13 = function () {
      $('#label_fill_amount_13').removeClass('disabled_label');
      $('#inputNumber_fill_amount_13').attr('disabled', false);
    }
    var openBoxFillAmount14 = function () {
      $('#label_fill_amount_14').removeClass('disabled_label');
      $('#inputNumber_fill_amount_14').attr('disabled', false);
    }
    var openBoxFillAmount15 = function () {
      $('#label_fill_amount_15').removeClass('disabled_label');
      $('#inputNumber_fill_amount_15').attr('disabled', false);
    }
    var openBoxFillAmount16 = function () {
      $('#label_fill_amount_16').removeClass('disabled_label');
      $('#inputNumber_fill_amount_16').attr('disabled', false);
    }
    var openBoxFillAmount17 = function () {
      $('#label_fill_amount_17').removeClass('disabled_label');
      $('#inputNumber_fill_amount_17').attr('disabled', false);
    }
    var openBoxFillAmount18 = function () {
      $('#label_fill_amount_18').removeClass('disabled_label');
      $('#inputNumber_fill_amount_18').attr('disabled', false);
    }
    ///////////////////////////////////////////////////////////////////////////
    // THREE.JS ///////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    import * as THREE from './js/three.module.js';
    import { OrbitControls } from './js/OrbitControls.js';

    // EDITOR TOOLS

    var tools = {
      zoomIn: false,
      zoomOut: false,
    }

    $('.tool__align').click(function () {
      camera.position.set(settings.cameraX, settings.cameraY, settings.cameraZ);
      camera.lookAt(scene.position);
      group.rotation.set(0, 0, 0)
    });

    $('.tool__zoom.in').mouseover(function () {
      $('.tool__zoom.in').mousedown(function () {
        tools.zoomIn = true;
      })
    })
    $('.tool__zoom.in').mouseup(function () {
      tools.zoomIn = false;
    })

    $('.tool__zoom.out').mouseover(function () {
      $('.tool__zoom.out').mousedown(function () {
        tools.zoomOut = true;
      })
    })
    $('.tool__zoom.out').mouseup(function () {
      tools.zoomOut = false;
    })

    $('.tool__arrow.up').mouseover(function () {
      $('.tool__arrow.up').mousedown(function () {
        tools.up = true;
      })
    })
    $('.tool__arrow.up').mouseup(function () {
      tools.up = false;
    })
    $('.tool__arrow.up').mouseout(function () {
      tools.up = false;
    })

    $('.tool__arrow.down').mouseover(function () {
      $('.tool__arrow.down').mousedown(function () {
        tools.down = true;
      })
    })
    $('.tool__arrow.down').mouseup(function () {
      tools.down = false;
    })
    $('.tool__arrow.down').mouseout(function () {
      tools.down = false;
    })

    $('.tool__arrow.left').mouseover(function () {
      $('.tool__arrow.left').mousedown(function () {
        tools.left = true;
      })
    })
    $('.tool__arrow.left').mouseup(function () {
      tools.left = false;
    })
    $('.tool__arrow.left').mouseout(function () {
      tools.left = false;
    })

    $('.tool__arrow.right').mouseover(function () {
      $('.tool__arrow.right').mousedown(function () {
        tools.right = true;
      })
    })
    $('.tool__arrow.right').mouseup(function () {
      tools.right = false;
    })
    $('.tool__arrow.right').mouseout(function () {
      tools.right = false;
    })

    // MAIN THREE.JS

    var settings = {
      // cameraX: -200,
      // cameraY: 280,
      // cameraZ: 350,
      cameraX: 0,
      cameraY: 10,
      cameraZ: 70,
      stack: 0,
    }

    var prop = {
      height: 0,
      width: 0,
      depth: 0,

      rackX: 0,
      rackY: 0,
      rackZ: 0,

      roofX: 0,
      roofY: 0,
      roofZ: 0,

      thickness: 10,       //  толщина доски
      halfThickness: 5,   // половина толщины
      delivery: stock.delivery,
    }

    var wrap = $('#wrap');
    var width = document.getElementById('wrap').offsetWidth;
    var height = document.getElementById('wrap').offsetHeight;

    // THREE.JS
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(40, width / height, 0.1, 300000);
    var renderer = new THREE.WebGLRenderer({antialias: true});

    // устанавливаю серый цвет фона, размеры
    renderer.setClearColor(0xEEEEEE, 1);
    renderer.setSize(width / 1, height / 1);
    wrap.append(renderer.domElement);

    // controls | вращение камеры, зум
    var controls = new OrbitControls(camera, renderer.domElement);
    controls.maxDistance = 310000;
    controls.minDistance = 15;
    controls.rotateSpeed = 0.6;
    controls.zoomSpeed = 1;

    // оси координат
    var axes = new THREE.AxesHelper(150);
    // scene.add(axes);

    // CUSTOME CODE

    var group = new THREE.Group();
    group.position.set(0, 0, 0);
    scene.add(group);

    var resize = function () {
      resizeDoor();
      // entresolHeight вынесена сюда, чтобы избавиться от дёрганий при перестроении entresol_rack
      if (stock.entresol) {
        prop.entresolHeight = +$('#inputRange_entresol').val();
      } else {
        prop.entresolHeight = 0;
      }
      resizeBox();

      if (!stock.door_no) {
        prop.door_shift = prop.door_depth;
      } else {
        prop.door_shift = 0;
      }
      if (stock.wall_full) {
        prop.wall_shift = prop.thickness;
      } else {
        prop.wall_shift = 0;
      }
      // start
      prop.height = +$('#inputRange_height').val();
      prop.width = +$('#inputRange_width').val();
      prop.depth = +$('#inputRange_depth').val();
      prop.visorZ = +$('#inputRange_visor').val();
      prop.visorSideX = +$('#inputRange_visor_side').val();
      prop.roofFZ = +$('#inputRange_roof_f').val();
      prop.roofBZ = +$('#inputRange_roof_b').val();
      // prop.entresolHeight = +$('#inputRange_entresol').val();
      prop.floorHeight = +$('#inputRange_floor_height').val();
      prop.baseFY = +$('#inputRange_base_height').val();
      prop.shiftBaseF = +$('#inputRange_base_f').val();
      prop.shiftBaseB = +$('#inputRange_base_b').val();
      prop.wallX = 0;
      prop.wallY = 0;
      prop.wallZ = 0;
      prop.wallFullX = 0;
      prop.wallFullY = 0;
      prop.wallFullZ = 0;
      // СЕКЦИИ
      prop.box_width_1 = +$('#inputNumber_width_box_1').val();
      prop.box_fill_amount_1 = +$('#inputNumber_fill_amount_1').val();
      prop.box_width_2 = +$('#inputNumber_width_box_2').val();
      prop.box_fill_amount_2 = +$('#inputNumber_fill_amount_2').val();
      prop.box_width_3 = +$('#inputNumber_width_box_3').val();
      prop.box_fill_amount_3 = +$('#inputNumber_fill_amount_3').val();
      prop.box_width_4 = +$('#inputNumber_width_box_4').val();
      prop.box_fill_amount_4 = +$('#inputNumber_fill_amount_4').val();
      prop.box_width_5 = +$('#inputNumber_width_box_5').val();
      prop.box_fill_amount_5 = +$('#inputNumber_fill_amount_5').val();
      prop.box_width_6 = +$('#inputNumber_width_box_6').val();
      prop.box_fill_amount_6 = +$('#inputNumber_fill_amount_6').val();
      prop.box_width_7 = +$('#inputNumber_width_box_7').val();
      prop.box_fill_amount_7 = +$('#inputNumber_fill_amount_7').val();
      prop.box_width_8 = +$('#inputNumber_width_box_8').val();
      prop.box_fill_amount_8 = +$('#inputNumber_fill_amount_8').val();
      prop.box_width_9 = +$('#inputNumber_width_box_9').val();
      prop.box_fill_amount_9 = +$('#inputNumber_fill_amount_9').val();
      prop.box_width_10 = +$('#inputNumber_width_box_10').val();
      prop.box_fill_amount_10 = +$('#inputNumber_fill_amount_10').val();
      prop.box_width_11 = +$('#inputNumber_width_box_11').val();
      prop.box_fill_amount_11 = +$('#inputNumber_fill_amount_11').val();
      prop.box_width_12 = +$('#inputNumber_width_box_12').val();
      prop.box_fill_amount_12 = +$('#inputNumber_fill_amount_12').val();
      prop.box_width_13 = +$('#inputNumber_width_box_13').val();
      prop.box_fill_amount_13 = +$('#inputNumber_fill_amount_13').val();
      prop.box_width_14 = +$('#inputNumber_width_box_14').val();
      prop.box_fill_amount_14 = +$('#inputNumber_fill_amount_14').val();
      prop.box_width_15 = +$('#inputNumber_width_box_15').val();
      prop.box_fill_amount_15 = +$('#inputNumber_fill_amount_15').val();
      prop.box_width_16 = +$('#inputNumber_width_box_16').val();
      prop.box_fill_amount_16 = +$('#inputNumber_fill_amount_16').val();
      prop.box_width_17 = +$('#inputNumber_width_box_17').val();
      prop.box_fill_amount_17 = +$('#inputNumber_fill_amount_17').val();
      prop.box_width_18 = +$('#inputNumber_width_box_18').val();
      prop.box_fill_amount_18 = +$('#inputNumber_fill_amount_18').val();
      // prop.legsHeight = 10;
      // legs
      prop.legsHeight = 0;
      if (!stock.legs_no) {
        prop.legsX = 11;
        prop.legsZ = 11;
        prop.legs_shift = 30;
      }
      if (stock.legs_85) {
        prop.legsHeight = 8.5;
        prop.legs_shift = 30;
        prop.legsX = 15;
        prop.legsY = prop.legsHeight;
        prop.legsZ = 15;
      }
      if (stock.legs_100) {
        prop.legsHeight = 100;
        prop.legsY = prop.legsHeight;
      }
      if (stock.legs_120) {
        prop.legsHeight = 120;
        prop.legsY = prop.legsHeight;
      }
      if (stock.legs_150) {
        prop.legsHeight = 150;
        prop.legsY = prop.legsHeight;
      }
      if (stock.legs_rollers) {
        prop.legsHeight = 10;
        prop.legsY = prop.legsHeight / 2;
        prop.legsX = 3;
        prop.legsZ = 3;
      }
      // rack
      prop.rackThickness = 2 * prop.thickness;
      if (!stock.rack_l) {
        prop.rackThickness = prop.thickness;
      }
      if (!stock.rack_r) {
        prop.rackThickness = prop.thickness;
      }
      if (!stock.rack_l && !stock.rack_r) {
        prop.rackThickness = 0;
      }
      prop.rackX = prop.thickness;
      prop.rackZ = prop.depth;
      prop.rackY = prop.height - 2 * prop.thickness;
      if (((stock.roof && stock.roof_in) || !stock.roof) || ((stock.bottom && stock.bottom_in) || !stock.bottom)) {
        prop.rackY = prop.height - prop.thickness;
      }
      if (((stock.roof && stock.roof_in) || !stock.roof) && ((stock.bottom && stock.bottom_in) || !stock.bottom)) {
        prop.rackY = prop.height;
      }
      prop.rackY = prop.rackY - prop.legsHeight;
      // roof_out
      prop.roofOutX = prop.width;
      prop.roofOutY = prop.thickness;
      prop.roofOutZ = prop.depth;
      if (stock.visor) {
        prop.roofOutX = prop.width;
        prop.roofOutY = prop.thickness;
        prop.roofOutZ = +prop.depth + +prop.visorZ;
      }
      if (stock.visor_side && stock.visor) {
        prop.roofOutX = +prop.width + 2 * prop.visorSideX;
        prop.roofOutY = prop.thickness;
        prop.roofOutZ = prop.depth;
      }
      if (stock.visor && stock.visor_side) {
        prop.roofOutX = +prop.width + 2 * prop.visorSideX;
        prop.roofOutY = prop.thickness;
        prop.roofOutZ = +prop.depth + +prop.visorZ;
      }
      if (!stock.visor && !stock.visor_side) {
        prop.roofOutX = prop.width;
        prop.roofOutY = prop.thickness;
        prop.roofOutZ = prop.depth;
      }
      // roof_in
      prop.roofInX = prop.width - prop.rackThickness;
      prop.roofInY = prop.thickness;
      prop.roofInZ = prop.depth;
      // roof_f
      if (stock.roof_cut && stock.roof_f) {
        prop.roofFX = prop.width - prop.rackThickness;
        prop.roofFY = prop.thickness;
        prop.roofFZ = prop.roofFZ;
      }
      // roof_b
      if (stock.roof_cut && stock.roof_b) {
        prop.roofBX = prop.width - prop.rackThickness;
        prop.roofBY = prop.thickness;
        prop.roofBZ = prop.roofBZ;
      }
      // bottom_in
      prop.bottomInX = prop.width - prop.rackThickness;
      prop.bottomInY = prop.thickness;
      prop.bottomInZ = prop.depth;
      // bottom_out 
      prop.bottomOutX = prop.width;
      prop.bottomOutY = prop.thickness;
      prop.bottomOutZ = prop.depth;
      // entresol
      prop.entresolX = prop.width - prop.rackThickness;
      prop.entresolY = prop.thickness;
      prop.entresolZ = prop.depth - prop.door_shift - prop.wall_shift;
      // floor_height
      if (!stock.base_b && !stock.base_f && stock.bottom && stock.bottom_in) {
        prop.floorHeight = prop.floorHeight;
      } else {
        prop.floorHeight = 0;
      }
      // base_f
      if (stock.base_f && stock.bottom && stock.bottom_in) {
        prop.baseFX = prop.width - prop.rackThickness;
        prop.baseFY = prop.baseFY;
        prop.baseFZ = prop.thickness;
      }
      // base_b
      if (stock.base_b && stock.bottom && stock.bottom_in) {
        prop.baseFX = prop.width - prop.rackThickness;
        prop.baseFY = prop.baseFY;
        prop.baseFZ = prop.thickness;
      }
      // baseFY (высота цоколя)
      if (!stock.base_f && !stock.base_b) {
        prop.baseFY = 0;
      }
      if (!stock.bottom || !stock.bottom_in) {
        prop.baseFY = 0;
        prop.floorHeight = 0;
      }
      // wall - накладная, wall_ful - вкладная
      // wall
      if (stock.wall) {
        prop.wallX = prop.width;
        prop.wallY = prop.height - prop.baseFY - prop.floorHeight - prop.legsHeight;
        prop.wallZ = prop.halfThickness;
      }
      // wall_full
      if (stock.wall_full) {
        prop.wallFullX = prop.width - prop.rackThickness;
        prop.wallFullY = prop.height - prop.baseFY - prop.floorHeight - 2 * prop.thickness;
        prop.wallFullZ = prop.thickness;
      }
      if (!stock.roof && stock.bottom) {
        prop.wallFullY = prop.height - prop.baseFY - prop.floorHeight - prop.thickness;
      }
      if (!stock.bottom && stock.roof) {
        prop.wallFullY = prop.height - prop.baseFY - prop.floorHeight - prop.thickness;
      }
      if (!stock.bottom && !stock.roof) {
        prop.wallFullY = prop.height - prop.baseFY - prop.floorHeight;
      }
      prop.wallFullY -= prop.legsHeight;
    }

    var drawSize = function() {

      if(stock.box_fill_shelf_1 || stock.box_fill_boxes_1) {
        $('.fill_size_1_row').removeClass('d-none');
        var height = (prop.entresolRackY) / prop.box_fill_amount_1 - prop.thickness * 2;
        var depth = prop.shelfZ1;
        if(stock.box_fill_shelf_1) {
          var tool = ' полки: ';
          var height = (prop.entresolRackY) / (prop.box_fill_amount_1 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_1').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_1_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_2 || stock.box_fill_boxes_2) {
        $('.fill_size_2_row').removeClass('d-none');
        var height = (prop.entresolRackY) / prop.box_fill_amount_2 - prop.thickness * 2;
        var depth = prop.shelfZ2;
        if(stock.box_fill_shelf_2) {
          var tool = ' полки: ';
          var height = (prop.entresolRackY) / (prop.box_fill_amount_2 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_2').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_2_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_3 || stock.box_fill_boxes_3) {
        $('.fill_size_3_row').removeClass('d-none');
        var height = (prop.entresolRackY) / prop.box_fill_amount_3 - prop.thickness * 2;
        var depth = prop.shelfZ3;
        if(stock.box_fill_shelf_3) {
          var tool = ' полки: ';
          var height = (prop.entresolRackY) / (prop.box_fill_amount_3 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_3').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_3_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_4 || stock.box_fill_boxes_4) {
        $('.fill_size_4_row').removeClass('d-none');
        var height = (prop.entresolRackY) / prop.box_fill_amount_4 - prop.thickness * 2;
        var depth = prop.shelfZ4;
        if(stock.box_fill_shelf_4) {
          var tool = ' полки: ';
          var height = (prop.entresolRackY) / (prop.box_fill_amount_4 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_4').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_4_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_5 || stock.box_fill_boxes_5) {
        $('.fill_size_5_row').removeClass('d-none');
        var height = (prop.entresolRackY) / prop.box_fill_amount_5 - prop.thickness * 2;
        var depth = prop.shelfZ5;
        if(stock.box_fill_shelf_5) {
          var tool = ' полки: ';
          var height = (prop.entresolRackY) / (prop.box_fill_amount_5 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_5').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_5_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_6 || stock.box_fill_boxes_6) {
        $('.fill_size_6_row').removeClass('d-none');
        var height = (prop.entresolRackY) / prop.box_fill_amount_6 - prop.thickness * 2;
        var depth = prop.shelfZ6;
        if(stock.box_fill_shelf_6) {
          var tool = ' полки: ';
          var height = (prop.entresolRackY) / (prop.box_fill_amount_6 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_6').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_6_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_7 || stock.box_fill_boxes_7) {
        $('.fill_size_7_row').removeClass('d-none');
        var height = (prop.lowerRackY) / prop.box_fill_amount_7 - prop.thickness * 2;
        if(stock.box_split_7) {
          var height = (prop.lowerRackY - prop.box_width_13) / (prop.box_fill_amount_7) - prop.thickness * 2;
        }
        var depth = prop.shelfZ7;
        if(stock.box_fill_shelf_7) {
          var tool = ' полки: ';
          var height = (prop.lowerRackY) / (prop.box_fill_amount_7 + 1) - prop.thickness * 2;
          if(stock.box_split_7) {
            var height = (prop.lowerRackY - prop.box_width_13) / (prop.box_fill_amount_7 + 1) - prop.thickness * 2;
          }
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_7').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_7_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_13 || stock.box_fill_boxes_13) {
        $('.fill_size_13_row').removeClass('d-none');
        var height = prop.box_width_13 / prop.box_fill_amount_13 - prop.thickness * 2;
        var depth = prop.shelfZ13;
        if(stock.box_fill_shelf_13) {
          var tool = ' полки: ';
          var height = prop.box_width_13 / (prop.box_fill_amount_13 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_13').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_13_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_8 || stock.box_fill_boxes_8) {
        $('.fill_size_8_row').removeClass('d-none');
        var height = (prop.lowerRackY) / prop.box_fill_amount_8 - prop.thickness * 2;
        if(stock.box_split_8) {
          var height = (prop.lowerRackY - prop.box_width_14) / (prop.box_fill_amount_8) - prop.thickness * 2;
        }
        var depth = prop.shelfZ8;
        if(stock.box_fill_shelf_8) {
          var tool = ' полки: ';
          var height = (prop.lowerRackY) / (prop.box_fill_amount_8 + 1) - prop.thickness * 2;
          if(stock.box_split_8) {
            var height = (prop.lowerRackY - prop.box_width_14) / (prop.box_fill_amount_8 + 1) - prop.thickness * 2;
          }
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_8').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_8_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_14 || stock.box_fill_boxes_14) {
        $('.fill_size_14_row').removeClass('d-none');
        var height = prop.box_width_14 / prop.box_fill_amount_14 - prop.thickness * 2;
        var depth = prop.shelfZ14;
        if(stock.box_fill_shelf_14) {
          var tool = ' полки: ';
          var height = prop.box_width_14 / (prop.box_fill_amount_14 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_14').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_14_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_9 || stock.box_fill_boxes_9) {
        $('.fill_size_9_row').removeClass('d-none');
        var height = (prop.lowerRackY) / prop.box_fill_amount_9 - prop.thickness * 2;
        if(stock.box_split_9) {
          var height = (prop.lowerRackY - prop.box_width_15) / (prop.box_fill_amount_9) - prop.thickness * 2;
        }
        var depth = prop.shelfZ9;
        if(stock.box_fill_shelf_9) {
          var tool = ' полки: ';
          var height = (prop.lowerRackY) / (prop.box_fill_amount_9 + 1) - prop.thickness * 2;
          if(stock.box_split_9) {
            var height = (prop.lowerRackY - prop.box_width_15) / (prop.box_fill_amount_9 + 1) - prop.thickness * 2;
          }
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_9').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_9_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_15 || stock.box_fill_boxes_15) {
        $('.fill_size_15_row').removeClass('d-none');
        var height = prop.box_width_15 / prop.box_fill_amount_15 - prop.thickness * 2;
        var depth = prop.shelfZ15;
        if(stock.box_fill_shelf_15) {
          var tool = ' полки: ';
          var height = prop.box_width_15 / (prop.box_fill_amount_15 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_15').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_15_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_10 || stock.box_fill_boxes_10) {
        $('.fill_size_10_row').removeClass('d-none');
        var height = (prop.lowerRackY) / prop.box_fill_amount_10 - prop.thickness * 2;
        if(stock.box_split_10) {
          var height = (prop.lowerRackY - prop.box_width_16) / (prop.box_fill_amount_10) - prop.thickness * 2;
        }
        var depth = prop.shelfZ10;
        if(stock.box_fill_shelf_10) {
          var tool = ' полки: ';
          var height = (prop.lowerRackY) / (prop.box_fill_amount_10 + 1) - prop.thickness * 2;
          if(stock.box_split_10) {
            var height = (prop.lowerRackY - prop.box_width_16) / (prop.box_fill_amount_10 + 1) - prop.thickness * 2;
          }
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_10').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_10_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_16 || stock.box_fill_boxes_16) {
        $('.fill_size_16_row').removeClass('d-none');
        var height = prop.box_width_16 / prop.box_fill_amount_16 - prop.thickness * 2;
        var depth = prop.shelfZ16;
        if(stock.box_fill_shelf_16) {
          var tool = ' полки: ';
          var height = prop.box_width_16 / (prop.box_fill_amount_16 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_16').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_16_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_11 || stock.box_fill_boxes_11) {
        $('.fill_size_11_row').removeClass('d-none');
        var height = (prop.lowerRackY) / prop.box_fill_amount_11 - prop.thickness * 2;
        if(stock.box_split_11) {
          var height = (prop.lowerRackY - prop.box_width_17) / (prop.box_fill_amount_11) - prop.thickness * 2;
        }
        var depth = prop.shelfZ11;
        if(stock.box_fill_shelf_11) {
          var tool = ' полки: ';
          var height = (prop.lowerRackY) / (prop.box_fill_amount_11 + 1) - prop.thickness * 2;
          if(stock.box_split_11) {
            var height = (prop.lowerRackY - prop.box_width_17) / (prop.box_fill_amount_11 + 1) - prop.thickness * 2;
          }
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_11').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_11_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_17 || stock.box_fill_boxes_17) {
        $('.fill_size_17_row').removeClass('d-none');
        var height = prop.box_width_17 / prop.box_fill_amount_17 - prop.thickness * 2;
        var depth = prop.shelfZ17;
        if(stock.box_fill_shelf_17) {
          var tool = ' полки: ';
          var height = prop.box_width_17 / (prop.box_fill_amount_17 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_17').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_17_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_12 || stock.box_fill_boxes_12) {
        $('.fill_size_12_row').removeClass('d-none');
        var height = (prop.lowerRackY) / prop.box_fill_amount_12 - prop.thickness * 2;
        if(stock.box_split_12) {
          var height = (prop.lowerRackY - prop.box_width_18) / (prop.box_fill_amount_12) - prop.thickness * 2;
        }
        var depth = prop.shelfZ12;
        if(stock.box_fill_shelf_12) {
          var tool = ' полки: ';
          var height = (prop.lowerRackY) / (prop.box_fill_amount_12 + 1) - prop.thickness * 2;
          if(stock.box_split_12) {
            var height = (prop.lowerRackY - prop.box_width_18) / (prop.box_fill_amount_12 + 1) - prop.thickness * 2;
          }
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_12').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_12_row').addClass('d-none');
      }

      if(stock.box_fill_shelf_18 || stock.box_fill_boxes_18) {
        $('.fill_size_18_row').removeClass('d-none');
        var height = prop.box_width_18 / prop.box_fill_amount_18 - prop.thickness * 2;
        var depth = prop.shelfZ18;
        if(stock.box_fill_shelf_18) {
          var tool = ' полки: ';
          var height = prop.box_width_18 / (prop.box_fill_amount_18 + 1) - prop.thickness * 2;
        } else {
          var tool = ' ящика: ';
        }
        $('.fill_size_18').html('Высота' + tool + ~~height + 'мм' + '<br>' + 'Глубина' + tool + ~~depth + 'мм');

      } else {
        $('.fill_size_18_row').addClass('d-none');
      }

    }
    // объект с деталями, помещаются в reconstruct, достаются в draw
    var part = {};

    // ГЕОМЕОТРИЯ НОМЕРОВ СЕКЦИЙ
    var loader = new THREE.FontLoader();
    loader.load('fonts/helvetiker_regular.typeface.json', function (font) {
      var textSettings = {
        // loader = font.scene,
        font: font,
        size: 90,
        height: 1, // depth
        curveSegments: 100,
        bevelEnabled: false,
        bevelThickness: 10,
        bevelSize: 1,
        bevelOffset: 0,
        bevelSegments: 5,
      }
      // default text: Hello three.js!
      var geometry1 = new THREE.TextGeometry('1', textSettings);
      var geometry2 = new THREE.TextGeometry('2', textSettings);
      var geometry3 = new THREE.TextGeometry('3', textSettings);
      var geometry4 = new THREE.TextGeometry('4', textSettings);
      var geometry5 = new THREE.TextGeometry('5', textSettings);
      var geometry6 = new THREE.TextGeometry('6', textSettings);
      var geometry7 = new THREE.TextGeometry('7', textSettings);
      var geometry8 = new THREE.TextGeometry('8', textSettings);
      var geometry9 = new THREE.TextGeometry('9', textSettings);
      var geometry10 = new THREE.TextGeometry('10', textSettings);
      var geometry11 = new THREE.TextGeometry('11', textSettings);
      var geometry12 = new THREE.TextGeometry('12', textSettings);
      var geometry13 = new THREE.TextGeometry('13', textSettings);
      var geometry14 = new THREE.TextGeometry('14', textSettings);
      var geometry15 = new THREE.TextGeometry('15', textSettings);
      var geometry16 = new THREE.TextGeometry('16', textSettings);
      var geometry17 = new THREE.TextGeometry('17', textSettings);
      var geometry18 = new THREE.TextGeometry('18', textSettings);
      var material = new THREE.MeshBasicMaterial({
        color: 0xB22222, // красный, практически бордовый
      });
      part.textMesh1 = new THREE.Mesh(geometry1, material);
      part.textMesh2 = new THREE.Mesh(geometry2, material);
      part.textMesh3 = new THREE.Mesh(geometry3, material);
      part.textMesh4 = new THREE.Mesh(geometry4, material);
      part.textMesh5 = new THREE.Mesh(geometry5, material);
      part.textMesh6 = new THREE.Mesh(geometry6, material);
      part.textMesh7 = new THREE.Mesh(geometry7, material);
      part.textMesh8 = new THREE.Mesh(geometry8, material);
      part.textMesh9 = new THREE.Mesh(geometry9, material);
      part.textMesh10 = new THREE.Mesh(geometry10, material);
      part.textMesh11 = new THREE.Mesh(geometry11, material);
      part.textMesh12 = new THREE.Mesh(geometry12, material);
      part.textMesh13 = new THREE.Mesh(geometry13, material);
      part.textMesh14 = new THREE.Mesh(geometry14, material);
      part.textMesh15 = new THREE.Mesh(geometry15, material);
      part.textMesh16 = new THREE.Mesh(geometry16, material);
      part.textMesh17 = new THREE.Mesh(geometry17, material);
      part.textMesh18 = new THREE.Mesh(geometry18, material);
    });

    // материалы

    // по умолчанию цвета
    prop.textureWordMain = 'баменда_венге_тёмный';
    prop.textureWordFacade = 'акация_лэйклэнд';
    prop.textureWordFill = 'акация_лэйклэнд';
    prop.textureWordWall = 'желтый_бархат';
    prop.textureWordHand = 'алюминий';
    prop.textureWordRod = 'алюминий';
    prop.textureWordLeg = 'черный';

    // обработка изменений
    prop.textureMapMain = new THREE.TextureLoader().load('textures/' + prop.textureWordMain + '.jpg');
    $('#inputSelect_materialMain').change(function () {
      prop.textureWordMain = $('#inputSelect_materialMain').val();
      prop.textureMapMain = new THREE.TextureLoader().load('textures/' + prop.textureWordMain + '.jpg');
    });

    prop.textureMapFacade = new THREE.TextureLoader().load('textures/' + prop.textureWordFacade + '.jpg');
    $('#inputSelect_materialFacade').change(function () {
      prop.textureWordFacade = $('#inputSelect_materialFacade').val();
      prop.textureMapFacade = new THREE.TextureLoader().load('textures/' + prop.textureWordFacade + '.jpg');
    });

    prop.textureMapFill = new THREE.TextureLoader().load('textures/' + prop.textureWordFill + '.jpg');
    $('#inputSelect_materialFill').change(function () {
      prop.textureWordFill = $('#inputSelect_materialFill').val();
      prop.textureMapFill = new THREE.TextureLoader().load('textures/' + prop.textureWordFill + '.jpg');
    });

    prop.textureMapWall = new THREE.TextureLoader().load('textures/' + prop.textureWordWall + '.jpg');
    $('#inputSelect_materialWall').change(function () {
      prop.textureWordWall = $('#inputSelect_materialWall').val();
      prop.textureMapWall = new THREE.TextureLoader().load('textures/' + prop.textureWordWall + '.jpg');
    });

    prop.textureMapHand = new THREE.TextureLoader().load('textures/' + prop.textureWordHand + '.jpg');
    $('#inputSelect_materialHand').change(function () {
      prop.textureWordHand = $('#inputSelect_materialHand').val();
      prop.textureMapHand = new THREE.TextureLoader().load('textures/' + prop.textureWordHand + '.jpg');
    });

    prop.textureMapRod = new THREE.TextureLoader().load('textures/' + prop.textureWordRod + '.jpg');
    $('#inputSelect_materialRod').change(function () {
      prop.textureWordRod = $('#inputSelect_materialRod').val();
      prop.textureMapRod = new THREE.TextureLoader().load('textures/' + prop.textureWordRod + '.jpg');
    });

    prop.textureMapLeg = new THREE.TextureLoader().load('textures/' + prop.textureWordLeg + '.jpg');
    $('#inputSelect_materialLeg').change(function () {
      prop.textureWordLeg = $('#inputSelect_materialLeg').val();
      prop.textureMapLeg = new THREE.TextureLoader().load('textures/' + prop.textureWordLeg + '.jpg');
    });

    // для отключённых материалов
    var material = {};

    var choiceMaterial = function() {
      material.shadow = new THREE.MeshLambertMaterial({
        color: 0x323636,
        wireframe: false,
      });
      var textureMain = new THREE.MeshBasicMaterial({
        map: prop.textureMapMain,
      });
      var textureFacade = new THREE.MeshBasicMaterial({
        map: prop.textureMapFacade,
      });
      var textureFill = new THREE.MeshBasicMaterial({
        map: prop.textureMapFill,
      });
      var textureWall = new THREE.MeshBasicMaterial({
        map: prop.textureMapWall,
      });
      var textureHand = new THREE.MeshBasicMaterial({
        map: prop.textureMapHand,
      });
      var textureRod = new THREE.MeshBasicMaterial({
        map: prop.textureMapRod,
      });
      var textureLeg = new THREE.MeshBasicMaterial({
        map: prop.textureMapLeg,
      });

      stock.press = true;
      if(stock.press) {
        material.main = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
        material.facade = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
        material.fill = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
        material.wall = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
        material.hand = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
        material.rod = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
        material.leg = new THREE.MeshLambertMaterial({
          color: 0xCDC9C9,
          wireframe: false,
        });
      } else {
        material.main = new THREE.MeshBasicMaterial({
          color: 0x000000,
          wireframe: true,
        });
        material.facade = new THREE.MeshBasicMaterial({
          color: 0x48485f,
          wireframe: true,
        });
        material.fill = new THREE.MeshBasicMaterial({
          color: 0x000000,
          wireframe: true,
        });
        material.wall = new THREE.MeshBasicMaterial({
          color: 0x48485f,
          wireframe: true,
        });
        material.hand = new THREE.MeshBasicMaterial({
          color: 0x48485f,
          wireframe: false,
        });
        material.rod = new THREE.MeshBasicMaterial({
          color: 0x000000,
          wireframe: true,
        });
        material.leg = new THREE.MeshBasicMaterial({
          color: 0x48485f,
          wireframe: true,
        });
      }

      if(stock.material) {
        material.main = textureMain;
        material.facade = textureFacade;
        material.fill = textureFill;
        material.wall = textureWall;
        material.hand = textureHand;
        material.rod = textureRod;
        material.leg = textureLeg;
      } 
    }

    var reconstruct = function () {
      reconstructDoor();
      group.remove(part.rack_l, part.rack_r, part.roof_out, part.roof_in, part.roof_f, part.roof_b, part.bottom_in, part.bottom_out, part.entresol, part.base_f, part.base_b, part.wall, part.wall_full,
      part.legs_first, part.legs_second, part.legs_third, part.legs_fourth, part.rollers_first, part.rollers_second, part.rollers_third, part.rollers_fourth,
      part.rack_l_shadow, part.rack_r_shadow, part.roof_out_shadow, part.roof_f_shadow, part.roof_in_shadow, part.bottom_in_shadow, part.bottom_out_shadow, part.entresol_shadow);

      // rack_l
      var geometryRack = new THREE.BoxGeometry(prop.rackX, prop.rackY, prop.rackZ);
      part.rack_l = new THREE.Mesh(geometryRack, material.main);
      var geometryRackShadow = new THREE.BoxGeometry(prop.rackX, prop.rackY, 1);
      part.rack_l_shadow = new THREE.Mesh(geometryRackShadow, material.shadow);
      // rack_r
      part.rack_r = new THREE.Mesh(geometryRack, material.main);
      part.rack_r_shadow = new THREE.Mesh(geometryRackShadow, material.shadow);
      // roof_out
      var geometryRoofOut = new THREE.BoxGeometry(prop.roofOutX, prop.roofOutY, prop.roofOutZ);
      part.roof_out = new THREE.Mesh(geometryRoofOut, material.main);
      var geometryRoofOutShadow =  new THREE.BoxGeometry(prop.roofOutX, prop.roofOutY, 1);
      part.roof_out_shadow = new THREE.Mesh(geometryRoofOutShadow, material.shadow);
      // roof_in
      var geometryRoofIn = new THREE.BoxGeometry(prop.roofInX, prop.roofInY, prop.roofInZ);
      var geometryRoofInShadow = new THREE.BoxGeometry(prop.roofInX, prop.roofInY, 1);
      // roof_f
      var geometryRoofF = new THREE.BoxGeometry(prop.roofFX, prop.roofFY, prop.roofFZ);
      part.roof_f = new THREE.Mesh(geometryRoofF, material.main);
      var geometryRoofFShadow = new THREE.BoxGeometry(prop.roofFX, prop.roofFY, 1);
      part.roof_f_shadow = new THREE.Mesh(geometryRoofFShadow, material.shadow);
      // roof_b
      var geometryRoofB = new THREE.BoxGeometry(prop.roofBX, prop.roofBY, prop.roofBZ);
      part.roof_b = new THREE.Mesh(geometryRoofB, material.main);
      part.roof_b_shadow = new THREE.Mesh(geometryRoofFShadow, material.shadow);
      part.roof_in = new THREE.Mesh(geometryRoofIn, material.main);
      part.roof_in_shadow = new THREE.Mesh(geometryRoofInShadow, material.shadow);
      // bottom_in
      var geometryBottomIn = new THREE.BoxGeometry(prop.bottomInX, prop.bottomInY, prop.bottomInZ);
      part.bottom_in = new THREE.Mesh(geometryBottomIn, material.main);
      var geometryBottomInShadow = new THREE.BoxGeometry(prop.bottomInX, prop.bottomInY, 1);
      part.bottom_in_shadow = new THREE.Mesh(geometryBottomInShadow, material.shadow);
      // bottom_out
      var geometryBottomOut = new THREE.BoxGeometry(prop.bottomOutX, prop.bottomOutY, prop.bottomOutZ);
      part.bottom_out = new THREE.Mesh(geometryBottomOut, material.main);
      var geometryBottomOutShadow = new THREE.BoxGeometry(prop.bottomOutX, prop.bottomOutY, 1);
      part.bottom_out_shadow = new THREE.Mesh(geometryBottomOutShadow, material.shadow);
      // entresol
      var geometryEntresol = new THREE.BoxGeometry(prop.entresolX, prop.entresolY, prop.entresolZ);
      part.entresol = new THREE.Mesh(geometryEntresol, material.fill);
      var geometryEntresolShadow = new THREE.BoxGeometry(prop.entresolX, prop.entresolY, 1);
      part.entresol_shadow = new THREE.Mesh(geometryEntresolShadow, material.shadow);
      // base_f
      var geometryBaseF = new THREE.BoxGeometry(prop.baseFX, prop.baseFY, prop.baseFZ);
      part.base_f = new THREE.Mesh(geometryBaseF, material.main);
      // base_f
      part.base_b = new THREE.Mesh(geometryBaseF, material.main);
      // wall
      var geometryWall = new THREE.BoxGeometry(prop.wallX, prop.wallY, prop.wallZ);
      part.wall = new THREE.Mesh(geometryWall, material.wall);
      // wall_full
      var geometryWallFull = new THREE.BoxGeometry(prop.wallFullX, prop.wallFullY, prop.wallFullZ);
      part.wall_full = new THREE.Mesh(geometryWallFull, material.wall);
      // legs
      var geometryLegs = new THREE.BoxGeometry(prop.legsX, prop.legsY, prop.legsZ);
      part.legs_first = new THREE.Mesh(geometryLegs, material.leg);
      part.legs_second = new THREE.Mesh(geometryLegs, material.leg);
      part.legs_third = new THREE.Mesh(geometryLegs, material.leg);
      part.legs_fourth = new THREE.Mesh(geometryLegs, material.leg);
      // rollers
      var geometryLegs = new THREE.CylinderGeometry(prop.legsY, prop.legsY, 10, 30);
      part.rollers_first = new THREE.Mesh(geometryLegs, material.leg);
      part.rollers_second = new THREE.Mesh(geometryLegs, material.leg);
      part.rollers_third = new THREE.Mesh(geometryLegs, material.leg);
      part.rollers_fourth = new THREE.Mesh(geometryLegs, material.leg);
      reconstructBox();
    }

    var draw = function () {
      drawDoor();
      // добавляем rack_l
      if (stock.rack_l) {
        group.add(part.rack_l, part.rack_l_shadow);
        part.rack_l.position.set(-(prop.width / 2 - prop.halfThickness), 0, 0);
        part.rack_l_shadow.position.set(-(prop.width / 2 - prop.halfThickness), 0, prop.depth / 2);
        if (stock.roof && stock.roof_out) {
          part.rack_l.position.set(-(prop.width / 2 - prop.halfThickness), -prop.halfThickness, 0);
          part.rack_l_shadow.position.set(-(prop.width / 2 - prop.halfThickness), -prop.halfThickness, prop.depth / 2);
        }
        if (stock.bottom && stock.bottom_out) {
          part.rack_l.position.set(-(prop.width / 2 - prop.halfThickness), prop.halfThickness, 0);
          part.rack_l_shadow.position.set(-(prop.width / 2 - prop.halfThickness), prop.halfThickness, prop.depth / 2);
        }
        if (stock.roof && stock.bottom && stock.roof_out && stock.bottom_out) {
          part.rack_l.position.set(-(prop.width / 2 - prop.halfThickness), 0, 0);
          part.rack_l_shadow.position.set(-(prop.width / 2 - prop.halfThickness), 0, prop.depth / 2);
        }
      }
      part.rack_l.position.y += prop.legsHeight / 2;
      part.rack_l_shadow.position.y += prop.legsHeight / 2;
      // добавляем rack_r
      if (stock.rack_r) {
        group.add(part.rack_r, part.rack_r_shadow);
        part.rack_r.position.set((prop.width / 2 - prop.halfThickness), 0, 0);
        part.rack_r_shadow.position.set((prop.width / 2 - prop.halfThickness), 0, prop.depth / 2);
        if (stock.roof && stock.roof_out) {
          part.rack_r.position.set((prop.width / 2 - prop.halfThickness), -prop.halfThickness, 0);
          part.rack_r_shadow.position.set((prop.width / 2 - prop.halfThickness), -prop.halfThickness, prop.depth / 2);
        }
        if (stock.bottom && stock.bottom_out) {
          part.rack_r.position.set((prop.width / 2 - prop.halfThickness), prop.halfThickness, 0);
          part.rack_r_shadow.position.set((prop.width / 2 - prop.halfThickness), prop.halfThickness, prop.depth / 2);
        }
        if (stock.roof && stock.bottom && stock.roof_out && stock.bottom_out) {
          part.rack_r.position.set((prop.width / 2 - prop.halfThickness), 0, 0);
          part.rack_r_shadow.position.set((prop.width / 2 - prop.halfThickness), 0, prop.depth / 2);
        }
      }
      part.rack_r.position.y += prop.legsHeight / 2;
      part.rack_r_shadow.position.y += prop.legsHeight / 2;
      // добавляем roof_out
      if (stock.roof && stock.roof_out) {
        group.add(part.roof_out, part.roof_out_shadow);
        part.roof_out.position.set(0, (prop.height / 2 - prop.halfThickness), 0);
        part.roof_out_shadow.position.set(0, (prop.height / 2 - prop.halfThickness), prop.depth / 2);
        if (stock.visor) {
          part.roof_out.position.set(0, (prop.height / 2 - prop.halfThickness), prop.visorZ / 2);
          part.roof_out_shadow.position.set(0, (prop.height / 2 - prop.halfThickness), prop.depth / 2 + prop.visorZ);
        }
      }
      // добавляем roof_in
      if (stock.roof && stock.roof_in && !stock.roof_cut) {
        group.add(part.roof_in, part.roof_in_shadow);
        part.roof_in.position.set(0, (prop.height / 2 - prop.halfThickness), 0);
        part.roof_in_shadow.position.set(0, (prop.height / 2 - prop.halfThickness), prop.depth / 2);
      }
      // добавляем roof_f
      if (stock.roof && stock.roof_f && stock.roof_cut && stock.roof_in) {
        group.add(part.roof_f, part.roof_f_shadow);
        part.roof_f.position.set(0, (prop.height / 2 - prop.halfThickness), prop.depth / 2 - prop.roofFZ / 2);
        part.roof_f_shadow.position.set(0, (prop.height / 2 - prop.halfThickness), prop.depth / 2);
      }
      // добавляем roof_b
      if (stock.roof && stock.roof_b && stock.roof_cut && stock.roof_in) {
        group.add(part.roof_b, part.roof_b_shadow);
        part.roof_b.position.set(0, (prop.height / 2 - prop.halfThickness), -prop.depth / 2 + prop.roofBZ / 2);
        part.roof_b_shadow.position.set(0, (prop.height / 2 - prop.halfThickness), -prop.depth / 2 + prop.roofBZ);
      }
      // добавляем bottom_in
      if (stock.bottom && stock.bottom_in) {
        group.add(part.bottom_in, part.bottom_in_shadow);
        part.bottom_in.position.set(0, -(prop.height / 2 - prop.halfThickness) + +prop.floorHeight + +prop.baseFY, 0);
        part.bottom_in_shadow.position.set(0, -(prop.height / 2 - prop.halfThickness) + +prop.floorHeight + +prop.baseFY, prop.depth / 2);
      }
      part.bottom_in.position.y += prop.legsHeight;
      part.bottom_in_shadow.position.y += prop.legsHeight;
      // добавляем bottom_out
      if (stock.bottom && stock.bottom_out) {
        group.add(part.bottom_out, part.bottom_out_shadow);
        part.bottom_out.position.set(0, -(prop.height / 2 - prop.halfThickness), 0);
        part.bottom_out_shadow.position.set(0, -(prop.height / 2 - prop.halfThickness) + +prop.floorHeight + +prop.baseFY, prop.depth / 2);
      }
      part.bottom_out.position.y += prop.legsHeight;
      part.bottom_out_shadow.position.y += prop.legsHeight;
      // добавляем entresol
      if (stock.entresol) {
        group.add(part.entresol, part.entresol_shadow);
        part.entresol.position.set(0, prop.height / 2 - prop.entresolHeight - 1.5 * prop.thickness, 0);
        part.entresol.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
        // тень
        part.entresol_shadow.position.set(0, prop.height / 2 - prop.entresolHeight - 1.5 * prop.thickness, prop.depth / 2);
        part.entresol_shadow.position.z -= prop.door_shift;
      }
      // добавляем base_f
      if (stock.base_f && stock.bottom && stock.bottom_in) {
        part.base_f.position.set(0, -(prop.height / 2 - prop.baseFY / 2), prop.depth / 2 - prop.halfThickness - prop.shiftBaseF);
        group.add(part.base_f);
      }
      part.base_f.position.y += prop.legsHeight;
      // добавляем base_b
      if (stock.base_b && stock.bottom && stock.bottom_in) {
        part.base_b.position.set(0, -(prop.height / 2 - prop.baseFY / 2), -prop.depth / 2 + prop.halfThickness + +prop.shiftBaseB);
        group.add(part.base_b);
      }
      part.base_b.position.y += prop.legsHeight;
      // добавляем wall
      if (stock.wall) {
        part.wall.position.set(0, +prop.baseFY / 2 + +prop.floorHeight / 2, -prop.depth / 2 - prop.halfThickness / 2);
        group.add(part.wall);
      }
      part.wall.position.y += prop.legsHeight / 2;
      // добавляем wall_full
      if (stock.wall_full) {
        part.wall_full.position.set(0, +prop.baseFY / 2 + +prop.floorHeight / 2, -prop.depth / 2 + +prop.thickness / 2);
        if (!stock.roof && stock.bottom) {
          part.wall_full.position.set(0, +prop.baseFY / 2 + +prop.floorHeight / 2 + prop.halfThickness, -prop.depth / 2 + +prop.thickness / 2);
        }
        if (!stock.bottom && stock.roof) {
          part.wall_full.position.set(0, +prop.baseFY / 2 + +prop.floorHeight / 2 - prop.halfThickness, -prop.depth / 2 + +prop.thickness / 2);
        }
        if (!stock.bottom && !stock.roof) {
          part.wall_full.position.set(0, +prop.baseFY / 2 + +prop.floorHeight / 2, -prop.depth / 2 + +prop.thickness / 2);
        }
        group.add(part.wall_full);
      }
      part.wall_full.position.y += prop.legsHeight / 2;

      // добавляем legs
      if (stock.legs_85) {
        if (stock.rack_r) {
          part.legs_first.position.set(prop.width / 2 - prop.halfThickness, -prop.height / 2 + prop.legsHeight / 2, -prop.depth / 2 + prop.legsZ / 2 + prop.legs_shift);
          group.add(part.legs_first);
          part.legs_second.position.set(prop.width / 2 - prop.halfThickness, -prop.height / 2 + prop.legsHeight / 2, prop.depth / 2 - prop.legsZ / 2 - prop.legs_shift);
          group.add(part.legs_second);
        }
        if (stock.rack_l) {
          part.legs_third.position.set(-prop.width / 2 + prop.halfThickness, -prop.height / 2 + prop.legsHeight / 2, -prop.depth / 2 + prop.legsZ / 2 + prop.legs_shift);
          group.add(part.legs_third);
          part.legs_fourth.position.set(-prop.width / 2 + prop.halfThickness, -prop.height / 2 + prop.legsHeight / 2, prop.depth / 2 - prop.legsZ / 2 - prop.legs_shift);
          group.add(part.legs_fourth);
        }
      }
      if (stock.legs_100 || stock.legs_120 || stock.legs_150) {
        if (stock.rack_r) {
          part.legs_first.position.set(prop.width / 2 - prop.halfThickness - prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, -prop.depth / 2 + prop.legsZ / 2 + prop.legs_shift);
          group.add(part.legs_first);
          part.legs_second.position.set(prop.width / 2 - prop.halfThickness - prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, prop.depth / 2 - prop.legsZ / 2 - prop.legs_shift);
          group.add(part.legs_second);
        }
        if (stock.rack_l) {
          part.legs_third.position.set(-prop.width / 2 + prop.halfThickness + prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, -prop.depth / 2 + prop.legsZ / 2 + prop.legs_shift);
          group.add(part.legs_third);
          part.legs_fourth.position.set(-prop.width / 2 + prop.halfThickness + prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, prop.depth / 2 - prop.legsZ / 2 - prop.legs_shift);
          group.add(part.legs_fourth);
        }
      }
      if (stock.legs_rollers) {
        if (stock.rack_r) {
          part.rollers_first.position.set(prop.width / 2 - prop.halfThickness - prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, -prop.depth / 2 + prop.legsZ / 2 + prop.legs_shift);
          group.add(part.rollers_first);
          part.rollers_first.rotation.x = 1.57;
          part.rollers_first.rotation.z = 1.57;
          part.rollers_second.rotation.x = 1.57;
          part.rollers_second.rotation.z = 1.57;
          part.rollers_second.position.set(prop.width / 2 - prop.halfThickness - prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, prop.depth / 2 - prop.legsZ / 2 - prop.legs_shift);
          group.add(part.rollers_second);
        }
        if (stock.rack_l) {
          part.rollers_third.position.set(-prop.width / 2 + prop.halfThickness + prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, -prop.depth / 2 + prop.legsZ / 2 + prop.legs_shift);
          group.add(part.rollers_third);
          part.rollers_third.rotation.x = 1.57;
          part.rollers_third.rotation.z = 1.57;
          part.rollers_fourth.rotation.x = 1.57;
          part.rollers_fourth.rotation.z = 1.57;
          part.rollers_fourth.position.set(-prop.width / 2 + prop.halfThickness + prop.legs_shift, -prop.height / 2 + prop.legsHeight / 2, prop.depth / 2 - prop.legsZ / 2 - prop.legs_shift);
          group.add(part.rollers_fourth);
        }
      }

      // изменение позиций в зависимости от левой/правой стойки
      if (!stock.rack_l) {
        part.roof_in.position.x -= prop.halfThickness;
        part.roof_f.position.x -= prop.halfThickness;
        part.roof_b.position.x -= prop.halfThickness;
        part.entresol.position.x -= prop.halfThickness;
        part.base_f.position.x -= prop.halfThickness;
        part.base_b.position.x -= prop.halfThickness;
        part.bottom_in.position.x -= prop.halfThickness;
        part.wall_full.position.x -= prop.halfThickness;
        // тени
        part.roof_in_shadow.position.x -= prop.halfThickness;
        part.roof_f_shadow.position.x -= prop.halfThickness;
        part.roof_b_shadow.position.x -= prop.halfThickness;
        part.bottom_in_shadow.position.x -= prop.halfThickness;
        part.entresol_shadow.position.x -= prop.halfThickness;
      }
      if (!stock.rack_r) {
        part.roof_in.position.x += prop.halfThickness;
        part.roof_f.position.x += prop.halfThickness;
        part.roof_b.position.x += prop.halfThickness;
        part.entresol.position.x += prop.halfThickness;
        part.base_f.position.x += prop.halfThickness;
        part.base_b.position.x += prop.halfThickness;
        part.bottom_in.position.x += prop.halfThickness;
        part.wall_full.position.x += prop.halfThickness;
        // тени
        part.roof_in_shadow.position.x += prop.halfThickness;
        part.roof_f_shadow.position.x += prop.halfThickness;
        part.roof_b_shadow.position.x += prop.halfThickness;
        part.bottom_in_shadow.position.x += prop.halfThickness;
        part.entresol_shadow.position.x += prop.halfThickness;
      }

      drawBox();
    }

    // DOORS FUNCTIONS (PROP, RECONSTRUCT, DRAW)
    var resizeDoor = function () {
      // общие размеры для деталей sliding дверей
      if (stock.door_sliding) {
        prop.door_depth = 35;
        // sl_bottom
        prop.doorBottomX = prop.width - prop.rackThickness;
        prop.doorBottomY = 5;
        prop.doorBottomZ = prop.door_depth;
        // sl_bottom_crossbar
        prop.doorBottomCrossbarY = 20;
        prop.doorBottomCrossbarZ = 10;
        // sl_top
        prop.doorTopX = prop.width - prop.rackThickness;
        prop.doorTopY = 1.5;
        prop.doorTopZ = prop.door_depth;
        // sl_top_crossbar
        prop.doorTopCrossbarX = prop.width - prop.rackThickness;
        prop.doorTopCrossbarY = 20;
        prop.doorTopCrossbarZ = 1.5;
        // sl_rack
        prop.doorRackX = 9;
        prop.doorRackY = prop.height - prop.legsHeight - prop.baseFY - prop.floorHeight - prop.thickness * 2 - prop.doorBottomY - prop.doorTopY;
        prop.doorRackZ = 15;
        // sl_crossbar
        prop.doorCrossbarY = 15;
        prop.doorCrossbarZ = 10;
      }
      // 2 сдвижные двери
      if (stock.door_sliding && stock.door_two_sl) {
        // sl_bottom_crossbar
        prop.doorBottomCrossbarX = (prop.width - prop.rackThickness) / 2;
        // sl_crossbar
        prop.doorCrossbarX = (prop.width - prop.rackThickness) / 2;
      }
      // 3 сдвижные двери
      if (stock.door_sliding && stock.door_three_sl) {
        // sl_bottom_crossbar
        prop.doorBottomCrossbarX = (prop.width - prop.rackThickness) / 3;
        // sl_crossbar
        prop.doorCrossbarX = (prop.width - prop.rackThickness) / 3;
      }
      // 4 распашные двери, размеры общии
      if (stock.door_sliding && stock.door_four_two_sl || stock.door_four_three_sl) {
        // sl_bottom_crossbar
        prop.doorBottomCrossbarX = (prop.width - prop.rackThickness) / 4;
        // sl_crossbar
        prop.doorCrossbarX = (prop.width - prop.rackThickness) / 4;
      }
      // распашные двери
      if (stock.door_swing && (stock.door_one_left_sw || stock.door_one_right_sw)) {
        prop.door_depth = 35;
        prop.doorX = prop.width;
        
        prop.doorY = prop.height - prop.legsHeight - prop.baseFY - prop.floorHeight - prop.thickness * 2;
        prop.doorZ = prop.door_depth;
      }
      if (stock.door_swing && stock.door_two_sw) {
        prop.door_depth = 35;
        prop.doorX = prop.width / 2 - 0.5;
        prop.doorY = prop.height - prop.legsHeight - prop.baseFY - prop.floorHeight - prop.thickness * 2;
        prop.doorZ = prop.door_depth;
      }
      if (!stock.door_swing && !stock.door_sliding) {
        prop.door_depth - 0;
      }
      // ручки
      prop.handBracketX = 20;
      prop.handBracketY = 100;
      prop.handBracketZ = 20;
      prop.handShellRadius = 50;
      prop.handShellSegments = 9;
      prop.handCutRadius = 50;
      prop.handCutSegments = 10;
      prop.handCutThetaStart = Math.PI * 1;
      prop.handCutThetaLength = Math.PI * 1;
      prop.boxHandShift = 100;
    }

    var reconstructDoor = function () {
      group.remove(part.sl_facade_first, part.sl_facade_second, part.sl_facade_third, part.sl_facade_fourth);
      if (stock.door_sliding) {
        // remove
        group.remove(part.sl_bottom, part.sl_bottom_crossbar_first, part.sl_bottom_crossbar_second, part.sl_bottom_crossbar_third, part.sl_bottom_crossbar_fourth,
          part.sl_top, part.sl_top_crossbar_first, part.sl_top_crossbar_second, part.sl_top_crossbar_third,
          part.sl_rack_first, part.sl_rack_second, part.sl_rack_third, part.sl_rack_fourth, part.sl_rack_fifth, part.sl_rack_sixth, part.sl_rack_seventh, part.sl_rack_eighth,
          part.sl_crossbar_first, part.sl_crossbar_second, part.sl_crossbar_third, part.sl_crossbar_fourth, part.sl_crossbar_fifth, part.sl_crossbar_sixth);
        // sl_bottom
        var geometryDoorBottom = new THREE.BoxGeometry(prop.doorBottomX, prop.doorBottomY, prop.doorBottomZ);
        part.sl_bottom = new THREE.Mesh(geometryDoorBottom, material.rod);
        // sl_bottom_crossbar (4 items)
        var geometryDoorBottomCrossbar = new THREE.BoxGeometry(prop.doorBottomCrossbarX, prop.doorBottomCrossbarY, prop.doorBottomCrossbarZ);
        part.sl_bottom_crossbar_first = new THREE.Mesh(geometryDoorBottomCrossbar, material.rod);
        part.sl_bottom_crossbar_second = new THREE.Mesh(geometryDoorBottomCrossbar, material.rod);
        part.sl_bottom_crossbar_third = new THREE.Mesh(geometryDoorBottomCrossbar, material.rod);
        part.sl_bottom_crossbar_fourth = new THREE.Mesh(geometryDoorBottomCrossbar, material.rod);
        // sl_top
        var geometryDoorTop = new THREE.BoxGeometry(prop.doorTopX, prop.doorTopY, prop.doorTopZ);
        part.sl_top = new THREE.Mesh(geometryDoorTop, material.rod);
        // sl_top_crossbar (3 items)
        var geometryDoorTopCrossbar = new THREE.BoxGeometry(prop.doorTopCrossbarX, prop.doorTopCrossbarY, prop.doorTopCrossbarZ);
        part.sl_top_crossbar_first = new THREE.Mesh(geometryDoorTopCrossbar, material.rod);
        part.sl_top_crossbar_second = new THREE.Mesh(geometryDoorTopCrossbar, material.rod);
        part.sl_top_crossbar_third = new THREE.Mesh(geometryDoorTopCrossbar, material.rod);
        // sl_rack (8 items)
        var geometryDoorRack = new THREE.BoxGeometry(prop.doorRackX, prop.doorRackY, prop.doorRackZ);
        part.sl_rack_first = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_second = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_third = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_fourth = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_fifth = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_sixth = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_seventh = new THREE.Mesh(geometryDoorRack, material.main);
        part.sl_rack_eighth = new THREE.Mesh(geometryDoorRack, material.main);
        // sl_crossbar (6 items)
        var geometryDoorCrosssbar = new THREE.BoxGeometry(prop.doorCrossbarX, prop.doorCrossbarY, prop.doorCrossbarZ);
        part.sl_crossbar_first = new THREE.Mesh(geometryDoorCrosssbar, material.main);
        part.sl_crossbar_second = new THREE.Mesh(geometryDoorCrosssbar, material.main);
        part.sl_crossbar_third = new THREE.Mesh(geometryDoorCrosssbar, material.main);
        part.sl_crossbar_fourth = new THREE.Mesh(geometryDoorCrosssbar, material.main);
        part.sl_crossbar_fifth = new THREE.Mesh(geometryDoorCrosssbar, material.main);
        part.sl_crossbar_sixth = new THREE.Mesh(geometryDoorCrosssbar, material.main);
        // sl_facade (4 items)
        var geometryDoorCrosssbar = new THREE.BoxGeometry(prop.doorCrossbarX, prop.doorRackY, prop.thickness);
        part.sl_facade_first = new THREE.Mesh(geometryDoorCrosssbar, material.facade);
        part.sl_facade_second = new THREE.Mesh(geometryDoorCrosssbar, material.facade);
        part.sl_facade_third = new THREE.Mesh(geometryDoorCrosssbar, material.facade);
        part.sl_facade_fourth = new THREE.Mesh(geometryDoorCrosssbar, material.facade);
      }
      if (stock.door_swing && (stock.door_one_left_sw || stock.door_one_right_sw)) {
        group.remove(part.door_swing);
        var geometryDoorSwing = new THREE.BoxGeometry(prop.doorX, prop.doorY, prop.doorZ);
        part.door_swing = new THREE.Mesh(geometryDoorSwing, material.facade);
      }
      if (stock.door_swing && stock.door_two_sw) {
        group.remove(part.door_swing_first);
        group.remove(part.door_swing_second);
        var geometryDoorSwing = new THREE.BoxGeometry(prop.doorX, prop.doorY, prop.doorZ);
        part.door_swing_first = new THREE.Mesh(geometryDoorSwing, material.facade);
        part.door_swing_second = new THREE.Mesh(geometryDoorSwing, material.facade);
      }
      if (stock.hand_bracket) {
        group.remove(part.hand_bracket_left);
        group.remove(part.hand_bracket_right);
        group.remove(part.hand_bracket_center_first);
        group.remove(part.hand_bracket_center_second);
        var geometryHandBracket = new THREE.BoxGeometry(prop.handBracketX, prop.handBracketY, prop.handBracketZ);
        part.hand_bracket_left = new THREE.Mesh(geometryHandBracket, material.hand);
        part.hand_bracket_right = new THREE.Mesh(geometryHandBracket, material.hand);
        part.hand_bracket_center_first = new THREE.Mesh(geometryHandBracket, material.hand);
        part.hand_bracket_center_second = new THREE.Mesh(geometryHandBracket, material.hand);
      }
      if (stock.hand_shell) {
        group.remove(part.hand_shell_left);
        group.remove(part.hand_shell_right);
        group.remove(part.hand_shell_center_first);
        group.remove(part.hand_shell_center_second);
        var geometryHandShell = new THREE.CircleGeometry(prop.handShellRadius, prop.handShellSegments);
        part.hand_shell_left = new THREE.Mesh(geometryHandShell, material.hand);
        part.hand_shell_right = new THREE.Mesh(geometryHandShell, material.hand);
        part.hand_shell_center_first = new THREE.Mesh(geometryHandShell, material.hand);
        part.hand_shell_center_second = new THREE.Mesh(geometryHandShell, material.hand);
      }
      if (stock.hand_cut) {
        group.remove(part.hand_cut_left);
        group.remove(part.hand_cut_right);
        group.remove(part.hand_cut_center_first);
        group.remove(part.hand_cut_center_second);
        var geometryHandCut = new THREE.CircleGeometry(prop.handCutRadius, prop.handCutSegments, prop.handCutThetaStart, prop.handCutThetaLength);
        part.hand_cut_left = new THREE.Mesh(geometryHandCut, material.hand);
        part.hand_cut_right = new THREE.Mesh(geometryHandCut, material.hand);
        part.hand_cut_center_first = new THREE.Mesh(geometryHandCut, material.hand);
        part.hand_cut_center_second = new THREE.Mesh(geometryHandCut, material.hand);
      }
    }

    var drawDoor = function () {
      var sectionHeight = prop.height - prop.legsHeight - prop.baseFY - prop.floorHeight - prop.thickness * 2 - prop.doorBottomY - prop.doorTopY - prop.doorTopCrossbarY;
      // 2 сдвижные двери
      if (stock.door_sliding && stock.door_two_sl) {
        group.add(part.sl_bottom_crossbar_first, part.sl_bottom_crossbar_second,
          part.sl_rack_first, part.sl_rack_second, part.sl_rack_third, part.sl_rack_fourth,
          part.sl_crossbar_first, part.sl_crossbar_second);
        // sl_bottom_crossbar
        part.sl_bottom_crossbar_first.position.set(-prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));
        part.sl_bottom_crossbar_second.position.set(prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomZ + prop.doorBottomCrossbarZ / 2);
        // sl_rack (4 items)
        part.sl_rack_first.position.set(0, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_second.position.set(0, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_third.position.set(prop.width / 2 - prop.thickness - prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_fourth.position.set(-prop.width / 2 + prop.thickness + prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2);
        // sl_crossbar (2 item)
        part.sl_crossbar_first.position.set(-prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_second.position.set(-prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        // sl_facade (2 item)
        if(stock.material) {
          group.add(part.sl_facade_first, part.sl_facade_second);
          part.sl_facade_first.position.set(-prop.doorBottomCrossbarX / 2, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_second.position.set(prop.doorBottomCrossbarX / 2, prop.thickness,
            prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ) - 1);
        }
      }

      // 3 сдвижные двери
      if (stock.door_sliding && stock.door_three_sl) {
        group.add(part.sl_bottom_crossbar_first, part.sl_bottom_crossbar_second, part.sl_bottom_crossbar_third,
          part.sl_rack_first, part.sl_rack_second, part.sl_rack_third, part.sl_rack_fourth, part.sl_rack_fifth, part.sl_rack_sixth,
          part.sl_crossbar_first, part.sl_crossbar_second, part.sl_crossbar_third, part.sl_crossbar_fourth,
          part.sl_facade_first, part.sl_facade_second, part.sl_facade_third);
        // sl_bottom_crossbar
        part.sl_bottom_crossbar_first.position.set(-prop.doorBottomCrossbarX, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));
        part.sl_bottom_crossbar_second.position.set(0, 0,
          prop.depth / 2 - prop.doorBottomZ + prop.doorBottomCrossbarZ / 2);
        part.sl_bottom_crossbar_third.position.set(prop.doorBottomCrossbarX, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));
        // sl_rack (6 items)   
        part.sl_rack_first.position.set(-prop.doorBottomX / 6, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_second.position.set(prop.doorBottomX / 6 + prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_third.position.set(prop.doorBottomX / 2 - prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_fourth.position.set(-prop.doorBottomX / 2 + prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_fifth.position.set(prop.doorBottomX / 6, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_sixth.position.set(-prop.doorBottomX / 6, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);
        // sl_crossbar (4 item)
        part.sl_crossbar_first.position.set(prop.doorCrossbarX, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_second.position.set(-prop.doorCrossbarX, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_third.position.set(-prop.doorCrossbarX, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_fourth.position.set(prop.doorCrossbarX, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        // sl_facade (3 item)
        if(stock.material) {
          group.add(part.sl_facade_first, part.sl_facade_second, part.sl_facade_third);
          part.sl_facade_first.position.set(-prop.doorBottomCrossbarX, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_second.position.set(0, prop.thickness,
            prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_third.position.set(prop.doorBottomCrossbarX, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
        }
      }
      // 4 сдвижные двери, 2 перекрытия
      if (stock.door_sliding && stock.door_four_two_sl) {
        group.add(part.sl_bottom_crossbar_first, part.sl_bottom_crossbar_second, part.sl_bottom_crossbar_third, part.sl_bottom_crossbar_fourth,
          part.sl_rack_first, part.sl_rack_second, part.sl_rack_third, part.sl_rack_fourth, part.sl_rack_fifth, part.sl_rack_sixth, part.sl_rack_seventh, part.sl_rack_eighth,
          part.sl_crossbar_first, part.sl_crossbar_second, part.sl_crossbar_third, part.sl_crossbar_fourth, part.sl_crossbar_fifth, part.sl_crossbar_sixth,
          part.sl_facade_first, part.sl_facade_second, part.sl_facade_third, part.sl_facade_fourth);
        // sl_bottom_crossbar (4 item)
        part.sl_bottom_crossbar_first.position.set(-prop.doorBottomCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));

        part.sl_bottom_crossbar_second.position.set(prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomZ + prop.doorBottomCrossbarZ / 2);

        part.sl_bottom_crossbar_third.position.set(prop.doorBottomCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));

        part.sl_bottom_crossbar_fourth.position.set(-prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomZ + prop.doorBottomCrossbarZ / 2);
        // sl_rack (6 items)   
        part.sl_rack_first.position.set(-prop.doorRackZ / 3, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_second.position.set(prop.doorRackZ / 3, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_third.position.set(prop.doorBottomX / 2 - prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_fourth.position.set(-prop.doorBottomX / 2 + prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_fifth.position.set(prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_sixth.position.set(-prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_seventh.position.set(prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_eighth.position.set(-prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);
        // sl_crossbar (6 item)
        part.sl_crossbar_first.position.set(-prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_second.position.set(-prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_third.position.set(prop.doorCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_fourth.position.set(prop.doorCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_fifth.position.set(prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_sixth.position.set(prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        // sl_facade (4 item)
        if(stock.material) {
          group.add(part.sl_facade_first, part.sl_facade_second, part.sl_facade_third);
          part.sl_facade_first.position.set(-prop.doorBottomCrossbarX * 1.5, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_second.position.set(-prop.doorBottomCrossbarX / 2, prop.thickness,
            prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_third.position.set(prop.doorBottomCrossbarX / 2, prop.thickness,
            prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_fourth.position.set(prop.doorBottomCrossbarX * 1.5, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
        }
      }
      // 4 сдвижные двери, 3 перекрытия
      if (stock.door_sliding && stock.door_four_three_sl) {
        group.add(part.sl_bottom_crossbar_first, part.sl_bottom_crossbar_second, part.sl_bottom_crossbar_third, part.sl_bottom_crossbar_fourth,
          part.sl_rack_first, part.sl_rack_second, part.sl_rack_third, part.sl_rack_fourth, part.sl_rack_fifth, part.sl_rack_sixth, part.sl_rack_seventh, part.sl_rack_eighth,
          part.sl_crossbar_first, part.sl_crossbar_second, part.sl_crossbar_third, part.sl_crossbar_fourth, part.sl_crossbar_fifth, part.sl_crossbar_sixth,
          part.sl_facade_first, part.sl_facade_second, part.sl_facade_third, part.sl_facade_fourth);
        // sl_bottom_crossbar (4 item)
        part.sl_bottom_crossbar_first.position.set(-prop.doorBottomCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));

        part.sl_bottom_crossbar_second.position.set(prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorBottomCrossbarZ));

        part.sl_bottom_crossbar_third.position.set(prop.doorBottomCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomZ + prop.doorBottomCrossbarZ / 2);

        part.sl_bottom_crossbar_fourth.position.set(-prop.doorBottomCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomZ + prop.doorBottomCrossbarZ / 2);
        // sl_rack (6 items)   
        part.sl_rack_first.position.set(0, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_second.position.set(0, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_third.position.set(prop.doorBottomX / 2 - prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_fourth.position.set(-prop.doorBottomX / 2 + prop.doorRackX / 2, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_fifth.position.set(prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_sixth.position.set(-prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2);

        part.sl_rack_seventh.position.set(prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);

        part.sl_rack_eighth.position.set(-prop.doorBottomX / 4, 0,
          prop.depth / 2 - prop.doorRackZ / 2 - ((prop.doorBottomZ - prop.doorRackZ * 2) / 2) - prop.doorBottomZ / 2);
        // sl_crossbar (6 item)
        part.sl_crossbar_first.position.set(-prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_second.position.set(-prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_third.position.set(prop.doorCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_fourth.position.set(prop.doorCrossbarX / 2, 0,
          prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_fifth.position.set(prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ));
        part.sl_crossbar_sixth.position.set(prop.doorCrossbarX * 1.5, 0,
          prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ));
        // sl_facade (4 item)
        if(stock.material) {
          group.add(part.sl_facade_first, part.sl_facade_second, part.sl_facade_third, part.sl_facade_fourth);
          part.sl_facade_first.position.set(-prop.doorBottomCrossbarX * 1.5, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_second.position.set(-prop.doorBottomCrossbarX / 2, prop.thickness,
            prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_third.position.set(prop.doorBottomCrossbarX / 2, prop.thickness,
            prop.depth / 2 - prop.doorBottomCrossbarZ / 2 - (prop.doorRackZ - prop.doorCrossbarZ) - 1);
          part.sl_facade_fourth.position.set(prop.doorBottomCrossbarX * 1.5, prop.thickness,
            prop.depth / 2 - prop.doorBottomZ + (prop.doorRackZ - prop.doorCrossbarZ) - 1);
        }
      }
      // общее положение деталей для всех сдвижных дверей
      if (stock.door_sliding) {
        // sl_bottom
        group.add(part.sl_bottom);
        part.sl_bottom.position.set(0, -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.thickness + prop.doorBottomY / 2, prop.depth / 2 - prop.doorBottomZ / 2);
        part.sl_bottom.position.y += prop.legsHeight;
        // sl_top
        group.add(part.sl_top);
        part.sl_top.position.set(0, prop.height / 2 - prop.doorTopY / 2 - prop.thickness, prop.depth / 2 - prop.doorTopZ / 2);
        // sl_top_crossbar
        group.add(part.sl_top_crossbar_first);
        group.add(part.sl_top_crossbar_second);
        group.add(part.sl_top_crossbar_third);
        part.sl_top_crossbar_first.position.set(0, prop.height / 2 - prop.doorTopCrossbarY / 2 - prop.thickness - prop.doorTopY, prop.depth / 2 - prop.doorTopZ + prop.doorTopCrossbarZ / 2);
        part.sl_top_crossbar_second.position.set(0, prop.height / 2 - prop.doorTopCrossbarY / 2 - prop.thickness - prop.doorTopY, prop.depth / 2 - prop.doorTopZ / 2);
        part.sl_top_crossbar_third.position.set(0, prop.height / 2 - prop.doorTopCrossbarY / 2 - prop.thickness - prop.doorTopY, prop.depth / 2 - prop.doorTopCrossbarZ / 2);
        // составные
        // sl_bottom_crossbar
        part.sl_bottom_crossbar_first.position.y = -(prop.height / 2) + +prop.floorHeight + +prop.baseFY + prop.doorBottomY + prop.doorBottomCrossbarY;
        part.sl_bottom_crossbar_second.position.y = -(prop.height / 2) + +prop.floorHeight + +prop.baseFY + prop.doorBottomY + prop.doorBottomCrossbarY;
        part.sl_bottom_crossbar_third.position.y = -(prop.height / 2) + +prop.floorHeight + +prop.baseFY + prop.doorBottomY + prop.doorBottomCrossbarY;
        part.sl_bottom_crossbar_fourth.position.y = -(prop.height / 2) + +prop.floorHeight + +prop.baseFY + prop.doorBottomY + prop.doorBottomCrossbarY;

        part.sl_bottom_crossbar_first.position.y += prop.legsHeight;
        part.sl_bottom_crossbar_second.position.y += prop.legsHeight;
        part.sl_bottom_crossbar_third.position.y += prop.legsHeight;
        part.sl_bottom_crossbar_fourth.position.y += prop.legsHeight;
        // sl_rack  
        part.sl_rack_first.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_second.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_third.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_fourth.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_fifth.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_sixth.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_seventh.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        part.sl_rack_eighth.position.y = prop.baseFY / 2 + prop.floorHeight / 2 + prop.doorBottomY / 2 - prop.doorTopY / 2;
        // part.sl_rack_first.positionzy -= 2;
        // part.sl_rack_second.position.z -= 2;
        // part.sl_rack_third.position.z -= 2;
        // part.sl_rack_fourth.position.z -= 2;
        // part.sl_rack_fifth.position.z -= 2;
        // part.sl_rack_sixth.position.z -= 2;
        // part.sl_rack_seventh.position.z -= 2;
        // part.sl_rack_eighth.position.z -= 2;

        part.sl_rack_first.position.y += prop.legsHeight / 2;
        part.sl_rack_second.position.y += prop.legsHeight / 2;
        part.sl_rack_third.position.y += prop.legsHeight / 2;
        part.sl_rack_fourth.position.y += prop.legsHeight / 2;
        part.sl_rack_fifth.position.y += prop.legsHeight / 2;
        part.sl_rack_sixth.position.y += prop.legsHeight / 2;
        part.sl_rack_seventh.position.y += prop.legsHeight / 2;
        part.sl_rack_eighth.position.y += prop.legsHeight / 2;
        // sl_crossbar
        part.sl_crossbar_first.position.y = -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.doorBottomY * 2.5 + prop.doorBottomCrossbarY + sectionHeight / 3;
        part.sl_crossbar_second.position.y = -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.doorBottomY * 2.5 + prop.doorBottomCrossbarY + sectionHeight / 3 * 2;
        part.sl_crossbar_third.position.y = -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.doorBottomY * 2.5 + prop.doorBottomCrossbarY + sectionHeight / 3;
        part.sl_crossbar_fourth.position.y = -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.doorBottomY * 2.5 + prop.doorBottomCrossbarY + sectionHeight / 3 * 2;
        part.sl_crossbar_fifth.position.y = -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.doorBottomY * 2.5 + prop.doorBottomCrossbarY + sectionHeight / 3;
        part.sl_crossbar_sixth.position.y = -(prop.height / 2) + prop.floorHeight + +prop.baseFY + prop.doorBottomY * 2.5 + prop.doorBottomCrossbarY + sectionHeight / 3 * 2;

        part.sl_crossbar_first.position.y += prop.legsHeight - prop.doorCrossbarY / 2;
        part.sl_crossbar_second.position.y += prop.legsHeight - prop.doorCrossbarY / 2;
        part.sl_crossbar_third.position.y += prop.legsHeight - prop.doorCrossbarY / 2;
        part.sl_crossbar_fourth.position.y += prop.legsHeight - prop.doorCrossbarY / 2;
        part.sl_crossbar_fifth.position.y += prop.legsHeight - prop.doorCrossbarY / 2;
        part.sl_crossbar_sixth.position.y += prop.legsHeight - prop.doorCrossbarY / 2;
      }
      // если не сдвижные двери, то удаляем все их детали
      if (!stock.door_sliding) {
        group.remove(part.sl_bottom, part.sl_bottom_crossbar_first, part.sl_bottom_crossbar_second, part.sl_bottom_crossbar_third, part.sl_bottom_crossbar_fourth,
          part.sl_top, part.sl_top_crossbar_first, part.sl_top_crossbar_second, part.sl_top_crossbar_third,
          part.sl_rack_first, part.sl_rack_second, part.sl_rack_third, part.sl_rack_fourth, part.sl_rack_fifth, part.sl_rack_sixth, part.sl_rack_seventh, part.sl_rack_eighth,
          part.sl_crossbar_first, part.sl_crossbar_second, part.sl_crossbar_third, part.sl_crossbar_fourth, part.sl_crossbar_fifth, part.sl_crossbar_sixth);
      }
      // распашные двери
      if (stock.door_swing && (stock.door_one_left_sw || stock.door_one_right_sw)) {
        group.add(part.door_swing);

        part.door_swing.position.set(0, prop.baseFY / 2 + prop.floorHeight / 2, prop.depth / 2 - prop.doorZ / 2);
        part.door_swing.position.y += prop.legsHeight / 2;

      } else {
        group.remove(part.door_swing, part.hand_bracket_right, part.hand_bracket_left);
      }

      if (stock.door_swing && stock.hand_bracket) {
        if (stock.door_swing && stock.door_one_left_sw) {
          group.add(part.hand_bracket_right);
          part.hand_bracket_right.position.set(prop.width / 2 - prop.boxHandShift, 0, prop.depth / 2 + prop.handBracketZ / 2);
        } else {
          group.remove(part.hand_bracket_right);
        }
        if (stock.door_swing && stock.door_one_right_sw) {
          group.add(part.hand_bracket_left);
          part.hand_bracket_left.position.set(-prop.width / 2 + prop.boxHandShift, 0, prop.depth / 2 + prop.handBracketZ / 2);
        } else {
          group.remove(part.hand_bracket_left);
        }
      } else {
        group.remove(part.hand_bracket_left, part.hand_bracket_right);
      }

      if (stock.door_swing && stock.hand_shell) {
        if (stock.door_swing && stock.door_one_left_sw) {
          group.add(part.hand_shell_right);
          part.hand_shell_right.position.set(prop.width / 2 - prop.boxHandShift, 0, prop.depth / 2);
        } else {
          group.remove(part.hand_shell_right);
        }
        if (stock.door_swing && stock.door_one_right_sw) {
          group.add(part.hand_shell_left);
          part.hand_shell_left.position.set(-prop.width / 2 + prop.boxHandShift, 0, prop.depth / 2);
        } else {
          group.remove(part.hand_shell_left);
        }
      } else {
        group.remove(part.hand_shell_left, part.hand_shell_right);
      }

      if (stock.door_swing && stock.door_two_sw) {
        group.add(part.door_swing_first, part.door_swing_second);

        part.door_swing_first.position.set(-prop.doorX / 2 - 0.5, prop.baseFY / 2 + prop.floorHeight / 2, prop.depth / 2 - prop.doorZ / 2);
        part.door_swing_second.position.set(prop.doorX / 2 + 0.5, prop.baseFY / 2 + prop.floorHeight / 2, prop.depth / 2 - prop.doorZ / 2);
        part.door_swing_first.position.y += prop.legsHeight / 2;
        part.door_swing_second.position.y += prop.legsHeight / 2;

        if (stock.hand_bracket) {
          group.add(part.hand_bracket_center_first);
          group.add(part.hand_bracket_center_second);
          part.hand_bracket_center_first.position.set(-prop.boxHandShift, 0, prop.depth / 2 + prop.handBracketZ / 2);
          part.hand_bracket_center_second.position.set(prop.boxHandShift, 0, prop.depth / 2 + prop.handBracketZ / 2);
        } else {
          group.remove(part.hand_bracket_center_first, part.hand_bracket_center_second);
        }

        if (stock.hand_shell) {
          group.add(part.hand_shell_center_first);
          group.add(part.hand_shell_center_second);
          part.hand_shell_center_first.position.set(-prop.boxHandShift, 0, prop.depth / 2);
          part.hand_shell_center_second.position.set(prop.boxHandShift, 0, prop.depth / 2);
        } else {
          group.remove(part.hand_shell_center_first, part.hand_shell_center_second);
        }
      } else {
        group.remove(part.door_swing_first, part.door_swing_second, part.hand_bracket_center_first, part.hand_bracket_center_second);
      }
    }

    // BOX FUNCTIONS (PROP, RECONSTRUCT, DRAW)
    var resizeBox = function () {
      // размеры entresol_rack
      if (prop.entresol_rack >= 0) {
        prop.entresolRackX = +prop.thickness;
        prop.entresolRackY = prop.entresolHeight;
        prop.entresolRackZ = prop.depth - prop.door_shift - prop.wall_shift;
      }
      if (prop.lower_rack >= 0) {
        prop.lowerRackX = +prop.thickness;
        prop.lowerRackY = prop.height - prop.entresolHeight - prop.baseFY - prop.floorHeight - prop.legsHeight - prop.thickness * 3;
        prop.lowerRackZ = prop.depth - prop.door_shift - prop.wall_shift;
      }
      if (!stock.entresol) {
        prop.lowerRackY = prop.height - prop.entresolHeight - prop.baseFY - prop.floorHeight - prop.legsHeight - prop.thickness * 3 + prop.thickness;
      }
      prop.lowerBarY = prop.thickness;
      prop.lowerBarZ = prop.depth - prop.door_shift - prop.wall_shift;
      // ширина внутренней части антресоли
      prop.entresolX = prop.width - prop.rackThickness - prop.thickness * prop.entresol_rack;
      prop.lowerX = prop.width - prop.rackThickness - prop.thickness * prop.lower_rack;
      // силовые элементы антресоли
      prop.boxForceEntresolX1 = prop.box_width_1;
      prop.boxForceEntresolX2 = prop.box_width_2;
      prop.boxForceEntresolX3 = prop.box_width_3;
      prop.boxForceEntresolX4 = prop.box_width_4;
      prop.boxForceEntresolX5 = prop.box_width_5;
      prop.boxForceEntresolX6 = prop.box_width_6;
      prop.boxForceEntresolY = prop.entresolHeight;
      prop.boxForceEntresolZ = prop.thickness;
      // силовые элементы низа
      prop.boxForceLowerX1 = prop.boxForceLowerX7 = prop.box_width_7;
      prop.boxForceLowerX2 = prop.boxForceLowerX8 = prop.box_width_8;
      prop.boxForceLowerX3 = prop.boxForceLowerX9 = prop.box_width_9;
      prop.boxForceLowerX4 = prop.boxForceLowerX10 = prop.box_width_10;
      prop.boxForceLowerX5 = prop.boxForceLowerX11 = prop.box_width_11;
      prop.boxForceLowerX6 = prop.boxForceLowerX12 = prop.box_width_12;
      if (stock.box_split_7) {
        prop.boxForceLowerY1 = prop.lowerRackY - prop.box_width_13 - prop.halfThickness;
      } else {
        prop.boxForceLowerY1 = prop.lowerRackY;
      }
      prop.boxForceLowerY7 = prop.box_width_13 - prop.halfThickness;
      if (stock.box_split_8) {
        prop.boxForceLowerY2 = prop.lowerRackY - prop.box_width_14 - prop.halfThickness;
      } else {
        prop.boxForceLowerY2 = prop.lowerRackY;
      }
      prop.boxForceLowerY8 = prop.box_width_14 - prop.halfThickness;
      if (stock.box_split_9) {
        prop.boxForceLowerY3 = prop.lowerRackY - prop.box_width_15 - prop.halfThickness;
      } else {
        prop.boxForceLowerY3 = prop.lowerRackY;
      }
      prop.boxForceLowerY9 = prop.box_width_15 - prop.halfThickness;
      if (stock.box_split_10) {
        prop.boxForceLowerY4 = prop.lowerRackY - prop.box_width_16 - prop.halfThickness;
      } else {
        prop.boxForceLowerY4 = prop.lowerRackY;
      }
      prop.boxForceLowerY10 = prop.box_width_16 - prop.halfThickness;
      if (stock.box_split_11) {
        prop.boxForceLowerY5 = prop.lowerRackY - prop.box_width_17 - prop.halfThickness;
      } else {
        prop.boxForceLowerY5 = prop.lowerRackY;
      }
      prop.boxForceLowerY11 = prop.box_width_17 - prop.halfThickness;
      if (stock.box_split_12) {
        prop.boxForceLowerY6 = prop.lowerRackY - prop.box_width_18 - prop.halfThickness;
      } else {
        prop.boxForceLowerY6 = prop.lowerRackY;
      }
      prop.boxForceLowerY12 = prop.box_width_18 - prop.halfThickness;

      prop.boxForceLowerZ = prop.thickness;
      // ширина секции по умолчанию (при всех автоматических размерах)
      if (stock.box_width_auto_1) {
        prop.box_width_set_1 = 0;
      } else {
        prop.box_width_set_1 = prop.box_width_1;
      }
      if (stock.box_width_auto_2) {
        prop.box_width_set_2 = 0;
      } else {
        prop.box_width_set_2 = prop.box_width_2;
      }
      if (stock.box_width_auto_3) {
        prop.box_width_set_3 = 0;
      } else {
        prop.box_width_set_3 = prop.box_width_3;
      }
      if (stock.box_width_auto_4) {
        prop.box_width_set_4 = 0;
      } else {
        prop.box_width_set_4 = prop.box_width_4;
      }
      if (stock.box_width_auto_5) {
        prop.box_width_set_5 = 0;
      } else {
        prop.box_width_set_5 = prop.box_width_5;
      }
      if (stock.box_width_auto_6) {
        prop.box_width_set_6 = 0;
      } else {
        prop.box_width_set_6 = prop.box_width_6;
      }

      // ширина секций низа
      if (stock.box_width_auto_7) {
        prop.box_width_set_7 = 0;
      } else {
        prop.box_width_set_7 = prop.box_width_7;
      }
      if (stock.box_width_auto_8) {
        prop.box_width_set_8 = 0;
      } else {
        prop.box_width_set_8 = prop.box_width_8;
      }
      if (stock.box_width_auto_9) {
        prop.box_width_set_9 = 0;
      } else {
        prop.box_width_set_9 = prop.box_width_9;
      }
      if (stock.box_width_auto_10) {
        prop.box_width_set_10 = 0;
      } else {
        prop.box_width_set_10 = prop.box_width_10;
      }
      if (stock.box_width_auto_11) {
        prop.box_width_set_11 = 0;
      } else {
        prop.box_width_set_11 = prop.box_width_11;
      }
      if (stock.box_width_auto_12) {
        prop.box_width_set_12 = 0;
      } else {
        prop.box_width_set_12 = prop.box_width_12;
      }

      // высота секций низа
      if (stock.box_width_auto_13) {
        prop.box_width_set_13 = 0;
      } else {
        prop.box_width_set_13 = prop.box_width_13;
      }
      // console.log(prop.box_width_13);
      if (stock.box_width_auto_14) {
        prop.box_width_set_14 = 0;
      } else {
        prop.box_width_set_14 = prop.box_width_14;
      }
      if (stock.box_width_auto_15) {
        prop.box_width_set_15 = 0;
      } else {
        prop.box_width_set_15 = prop.box_width_15;
      }
      if (stock.box_width_auto_16) {
        prop.box_width_set_16 = 0;
      } else {
        prop.box_width_set_16 = prop.box_width_16;
      }
      if (stock.box_width_auto_17) {
        prop.box_width_set_17 = 0;
      } else {
        prop.box_width_set_17 = prop.box_width_17;
      }
      if (stock.box_width_auto_18) {
        prop.box_width_set_18 = 0;
      } else {
        prop.box_width_set_18 = prop.box_width_18;
      }

      // ширина перегородок низа
      if (stock.box_split_7) {
        prop.lowerBarX7 = prop.box_width_7;
      }
      if (stock.box_split_8) {
        prop.lowerBarX8 = prop.box_width_8;
      }
      if (stock.box_split_9) {
        prop.lowerBarX9 = prop.box_width_9;
      }
      if (stock.box_split_10) {
        prop.lowerBarX10 = prop.box_width_10;
      }
      if (stock.box_split_11) {
        prop.lowerBarX11 = prop.box_width_11;
      }
      if (stock.box_split_12) {
        prop.lowerBarX12 = prop.box_width_12;
      }

      // в зависимости от количества стоек, меняется автоматическая ширина по умолчанию
      if (prop.entresol_rack >= 0) {
        prop.entresolBoxWidthAuto = (prop.entresolX - prop.box_width_set_1) / (+stock.box_width_auto_1);
      }
      if (prop.entresol_rack >= 1) {
        prop.entresolBoxWidthAuto = (prop.entresolX - prop.box_width_set_1 - prop.box_width_set_2) / (+stock.box_width_auto_1 + +stock.box_width_auto_2);
      }
      if (prop.entresol_rack >= 2) {
        prop.entresolBoxWidthAuto = (prop.entresolX - prop.box_width_set_1 - prop.box_width_set_2 - prop.box_width_set_3) / (+stock.box_width_auto_1 + +stock.box_width_auto_2 + +stock.box_width_auto_3);
      }
      if (prop.entresol_rack >= 3) {
        prop.entresolBoxWidthAuto = (prop.entresolX - prop.box_width_set_1 - prop.box_width_set_2 - prop.box_width_set_3 - prop.box_width_set_4) / (+stock.box_width_auto_1 + +stock.box_width_auto_2 + +stock.box_width_auto_3 + +stock.box_width_auto_4);
      }
      if (prop.entresol_rack >= 4) {
        prop.entresolBoxWidthAuto = (prop.entresolX - prop.box_width_set_1 - prop.box_width_set_2 - prop.box_width_set_3 - prop.box_width_set_4 - prop.box_width_set_5) / (+stock.box_width_auto_1 + +stock.box_width_auto_2 + +stock.box_width_auto_3 + +stock.box_width_auto_4 + +stock.box_width_auto_5);
      }
      if (prop.entresol_rack >= 5) {
        prop.entresolBoxWidthAuto = (prop.entresolX - prop.box_width_set_1 - prop.box_width_set_2 - prop.box_width_set_3 - prop.box_width_set_4 - prop.box_width_set_5 - prop.box_width_set_6) / (+stock.box_width_auto_1 + +stock.box_width_auto_2 + +stock.box_width_auto_3 + +stock.box_width_auto_4 + +stock.box_width_auto_5 + +stock.box_width_auto_6);
      }

      if (prop.lower_rack >= 0) {
        prop.lowerBoxWidthAuto = (prop.lowerX - prop.box_width_set_7) / (+stock.box_width_auto_7);
      }
      if (prop.lower_rack >= 1) {
        prop.lowerBoxWidthAuto = (prop.lowerX - prop.box_width_set_7 - prop.box_width_set_8) / (+stock.box_width_auto_7 + +stock.box_width_auto_8);
      }
      if (prop.lower_rack >= 2) {
        prop.lowerBoxWidthAuto = (prop.lowerX - prop.box_width_set_7 - prop.box_width_set_8 - prop.box_width_set_9) / (+stock.box_width_auto_7 + +stock.box_width_auto_8 + +stock.box_width_auto_9);
      }
      if (prop.lower_rack >= 3) {
        prop.lowerBoxWidthAuto = (prop.lowerX - prop.box_width_set_7 - prop.box_width_set_8 - prop.box_width_set_9 - prop.box_width_set_10) / (+stock.box_width_auto_7 + +stock.box_width_auto_8 + +stock.box_width_auto_9 + +stock.box_width_auto_10);
      }
      if (prop.lower_rack >= 4) {
        prop.lowerBoxWidthAuto = (prop.lowerX - prop.box_width_set_7 - prop.box_width_set_8 - prop.box_width_set_9 - prop.box_width_set_10 - prop.box_width_set_11) / (+stock.box_width_auto_7 + +stock.box_width_auto_8 + +stock.box_width_auto_9 + +stock.box_width_auto_10 + +stock.box_width_auto_11);
      }
      if (prop.lower_rack >= 5) {
        prop.lowerBoxWidthAuto = (prop.lowerX - prop.box_width_set_7 - prop.box_width_set_8 - prop.box_width_set_9 - prop.box_width_set_10 - prop.box_width_set_11 - prop.box_width_set_12) / (+stock.box_width_auto_7 + +stock.box_width_auto_8 + +stock.box_width_auto_9 + +stock.box_width_auto_10 + +stock.box_width_auto_11 + +stock.box_width_auto_12);
      }

      // автоматическая ширина и высота секций низа по умолчанию
      if (stock.box_split_7 && stock.box_width_auto_7) {
        prop.boxLowerHeightAuto = prop.lowerRackY / 2;
        prop.lowerBarX7 = prop.lowerBoxWidthAuto;
      }
      if (stock.box_split_8 && stock.box_width_auto_8) {
        prop.boxLowerHeightAuto = prop.lowerRackY / 2;
        prop.lowerBarX8 = prop.lowerBoxWidthAuto;
      }
      if (stock.box_split_9 && stock.box_width_auto_9) {
        prop.boxLowerHeightAuto = prop.lowerRackY / 2;
        prop.lowerBarX9 = prop.lowerBoxWidthAuto;
      }
      if (stock.box_split_10 && stock.box_width_auto_10) {
        prop.boxLowerHeightAuto = prop.lowerRackY / 2;
        prop.lowerBarX10 = prop.lowerBoxWidthAuto;
      }
      if (stock.box_split_11 && stock.box_width_auto_11) {
        prop.boxLowerHeightAuto = prop.lowerRackY / 2;
        prop.lowerBarX11 = prop.lowerBoxWidthAuto;
      }
      if (stock.box_split_12 && stock.box_width_auto_12) {
        prop.boxLowerHeightAuto = prop.lowerRackY / 2;
        prop.lowerBarX12 = prop.lowerBoxWidthAuto;
      }

      // на всякий случай
      prop.entresolBoxWidthAuto = +prop.entresolBoxWidthAuto;
      prop.lowerBoxWidthAuto = +prop.lowerBoxWidthAuto;

      // устанавливаю автоматический value полям блоков entresol
      if (stock.box_width_auto_1) {
        $('#inputNumber_width_box_1').val(prop.entresolBoxWidthAuto);
        $('#inputRange_width_box_1').val(prop.entresolBoxWidthAuto);
      }
      if (stock.box_width_auto_2) {
        $('#inputNumber_width_box_2').val(prop.entresolBoxWidthAuto);
        $('#inputRange_width_box_2').val(prop.entresolBoxWidthAuto);
      }
      if (stock.box_width_auto_3) {
        $('#inputNumber_width_box_3').val(prop.entresolBoxWidthAuto);
        $('#inputRange_width_box_3').val(prop.entresolBoxWidthAuto);
      }
      if (stock.box_width_auto_4) {
        $('#inputNumber_width_box_4').val(prop.entresolBoxWidthAuto);
        $('#inputRange_width_box_4').val(prop.entresolBoxWidthAuto);
      }
      if (stock.box_width_auto_5) {
        $('#inputNumber_width_box_5').val(prop.entresolBoxWidthAuto);
        $('#inputRange_width_box_5').val(prop.entresolBoxWidthAuto);
      }
      if (stock.box_width_auto_6) {
        $('#inputNumber_width_box_6').val(prop.entresolBoxWidthAuto);
        $('#inputRange_width_box_6').val(prop.entresolBoxWidthAuto);
      }

      // устанавливаю автоматический value полям блоков lower
      if (stock.box_width_auto_7) {
        $('#inputNumber_width_box_7').val(prop.lowerBoxWidthAuto);
        $('#inputRange_width_box_7').val(prop.lowerBoxWidthAuto);
      }
      if (stock.box_width_auto_8) {
        $('#inputNumber_width_box_8').val(prop.lowerBoxWidthAuto);
        $('#inputRange_width_box_8').val(prop.lowerBoxWidthAuto);
      }
      if (stock.box_width_auto_9) {
        $('#inputNumber_width_box_9').val(prop.lowerBoxWidthAuto);
        $('#inputRange_width_box_9').val(prop.lowerBoxWidthAuto);
      }
      if (stock.box_width_auto_10) {
        $('#inputNumber_width_box_10').val(prop.lowerBoxWidthAuto);
        $('#inputRange_width_box_10').val(prop.lowerBoxWidthAuto);
      }
      if (stock.box_width_auto_11) {
        $('#inputNumber_width_box_11').val(prop.lowerBoxWidthAuto);
        $('#inputRange_width_box_11').val(prop.lowerBoxWidthAuto);
      }
      if (stock.box_width_auto_12) {
        $('#inputNumber_width_box_12').val(prop.lowerBoxWidthAuto);
        $('#inputRange_width_box_12').val(prop.lowerBoxWidthAuto);
      }

      if (stock.box_width_auto_13) {
        $('#inputNumber_width_box_13').val(prop.boxLowerHeightAuto);
        $('#inputRange_width_box_13').val(prop.boxLowerHeightAuto);
      }
      if (stock.box_width_auto_14) {
        $('#inputNumber_width_box_14').val(prop.boxLowerHeightAuto);
        $('#inputRange_width_box_14').val(prop.boxLowerHeightAuto);
      }
      if (stock.box_width_auto_15) {
        $('#inputNumber_width_box_15').val(prop.boxLowerHeightAuto);
        $('#inputRange_width_box_15').val(prop.boxLowerHeightAuto);
      }
      if (stock.box_width_auto_16) {
        $('#inputNumber_width_box_16').val(prop.boxLowerHeightAuto);
        $('#inputRange_width_box_16').val(prop.boxLowerHeightAuto);
      }
      if (stock.box_width_auto_17) {
        $('#inputNumber_width_box_17').val(prop.boxLowerHeightAuto);
        $('#inputRange_width_box_17').val(prop.boxLowerHeightAuto);
      }
      if (stock.box_width_auto_18) {
        $('#inputNumber_width_box_18').val(prop.boxLowerHeightAuto);
        $('#inputRange_width_box_18').val(prop.boxLowerHeightAuto);
      }

      // устанавливаю max полям блоков (ширина антресоли)
      $('#inputNumber_width_box_1').attr('max', prop.entresolX);
      $('#inputRange_width_box_1').attr('max', prop.entresolX);
      $('#inputNumber_width_box_2').attr('max', prop.entresolX);
      $('#inputRange_width_box_2').attr('max', prop.entresolX);
      $('#inputNumber_width_box_3').attr('max', prop.entresolX);
      $('#inputRange_width_box_3').attr('max', prop.entresolX);
      $('#inputNumber_width_box_4').attr('max', prop.entresolX);
      $('#inputRange_width_box_4').attr('max', prop.entresolX);
      $('#inputNumber_width_box_5').attr('max', prop.entresolX);
      $('#inputRange_width_box_5').attr('max', prop.entresolX);
      $('#inputNumber_width_box_6').attr('max', prop.entresolX);
      $('#inputRange_width_box_6').attr('max', prop.entresolX);

      $('#inputNumber_width_box_7').attr('max', prop.lowerX);
      $('#inputRange_width_box_7').attr('max', prop.lowerX);
      $('#inputNumber_width_box_8').attr('max', prop.lowerX);
      $('#inputRange_width_box_8').attr('max', prop.lowerX);
      $('#inputNumber_width_box_9').attr('max', prop.lowerX);
      $('#inputRange_width_box_9').attr('max', prop.lowerX);
      $('#inputNumber_width_box_10').attr('max', prop.lowerX);
      $('#inputRange_width_box_10').attr('max', prop.lowerX);
      $('#inputNumber_width_box_11').attr('max', prop.lowerX);
      $('#inputRange_width_box_11').attr('max', prop.lowerX);
      $('#inputNumber_width_box_12').attr('max', prop.lowerX);
      $('#inputRange_width_box_12').attr('max', prop.lowerX);

      $('#inputNumber_width_box_13').attr('max', prop.lowerRackY);
      $('#inputRange_width_box_13').attr('max', prop.lowerRackY);
      $('#inputNumber_width_box_14').attr('max', prop.lowerRackY);
      $('#inputRange_width_box_14').attr('max', prop.lowerRackY);
      $('#inputNumber_width_box_15').attr('max', prop.lowerRackY);
      $('#inputRange_width_box_15').attr('max', prop.lowerRackY);
      $('#inputNumber_width_box_16').attr('max', prop.lowerRackY);
      $('#inputRange_width_box_16').attr('max', prop.lowerRackY);
      $('#inputNumber_width_box_17').attr('max', prop.lowerRackY);
      $('#inputRange_width_box_17').attr('max', prop.lowerRackY);
      $('#inputNumber_width_box_18').attr('max', prop.lowerRackY);
      $('#inputRange_width_box_18').attr('max', prop.lowerRackY);

      // распашные двери секций
      // двери антресоли
      prop.boxDoorOneX1 = prop.box_width_1;
      prop.boxDoorOneX2 = prop.box_width_2;
      prop.boxDoorOneX3 = prop.box_width_3;
      prop.boxDoorOneX4 = prop.box_width_4;
      prop.boxDoorOneX5 = prop.box_width_5;
      prop.boxDoorOneX6 = prop.box_width_6;

      prop.boxDoorOneX7 = prop.box_width_7;
      prop.boxDoorOneX8 = prop.box_width_8;
      prop.boxDoorOneX9 = prop.box_width_9;
      prop.boxDoorOneX10 = prop.box_width_10;
      prop.boxDoorOneX11 = prop.box_width_11;
      prop.boxDoorOneX12 = prop.box_width_12;
      prop.boxDoorOneX13 = prop.box_width_7;
      prop.boxDoorOneX14 = prop.box_width_8;
      prop.boxDoorOneX15 = prop.box_width_9;
      prop.boxDoorOneX16 = prop.box_width_10;
      prop.boxDoorOneX17 = prop.box_width_11;
      prop.boxDoorOneX18 = prop.box_width_12;

      prop.boxDoorTwoX1 = prop.box_width_1 / 2 - 0.5;
      prop.boxDoorTwoX2 = prop.box_width_2 / 2 - 0.5;
      prop.boxDoorTwoX3 = prop.box_width_3 / 2 - 0.5;
      prop.boxDoorTwoX4 = prop.box_width_4 / 2 - 0.5;
      prop.boxDoorTwoX5 = prop.box_width_5 / 2 - 0.5;
      prop.boxDoorTwoX6 = prop.box_width_6 / 2 - 0.5;

      prop.boxDoorTwoX7 = prop.box_width_7 / 2 - 0.5;
      prop.boxDoorTwoX8 = prop.box_width_8 / 2 - 0.5;
      prop.boxDoorTwoX9 = prop.box_width_9 / 2 - 0.5;
      prop.boxDoorTwoX10 = prop.box_width_10 / 2 - 0.5;
      prop.boxDoorTwoX11 = prop.box_width_11 / 2 - 0.5;
      prop.boxDoorTwoX12 = prop.box_width_12 / 2 - 0.5;
      prop.boxDoorTwoX13 = prop.box_width_7 / 2 - 0.5;
      prop.boxDoorTwoX14 = prop.box_width_8 / 2 - 0.5;
      prop.boxDoorTwoX15 = prop.box_width_9 / 2 - 0.5;
      prop.boxDoorTwoX16 = prop.box_width_10 / 2 - 0.5;
      prop.boxDoorTwoX17 = prop.box_width_11 / 2 - 0.5;
      prop.boxDoorTwoX18 = prop.box_width_12 / 2 - 0.5;

      // полки
      // I секция, полки
      prop.shelfX1 = prop.box_width_1;
      prop.shelfY1 = prop.thickness;
      prop.shelfZ1 = prop.depth - prop.door_shift - prop.wall_shift - prop.door1_shift - prop.wall1_shift - prop.box1_shift * 2;
      if (stock.box_fill_boxes_1) {
        prop.shelfX1 = prop.box_width_1 - prop.thickness;
        prop.shelfY1 = prop.thickness / 5;
        prop.shelfZ1 = prop.depth - prop.door_shift - prop.door1_shift - prop.box1_shift * 2 - prop.thickness;
        prop.box1_shift = prop.thickness;
      } else {
        prop.box1_shift = 0;
      }
      // II секция, полки
      prop.shelfX2 = prop.box_width_2;
      prop.shelfY2 = prop.thickness;
      prop.shelfZ2 = prop.depth - prop.door_shift - prop.wall_shift - prop.door2_shift - prop.wall2_shift - prop.box2_shift * 2;
      if (stock.box_fill_boxes_2) {
        prop.shelfX2 = prop.box_width_2 - prop.thickness;
        prop.shelfY2 = prop.thickness / 5;
        prop.shelfZ2 = prop.depth - prop.door_shift - prop.door2_shift - prop.box2_shift * 2 - prop.thickness;
        prop.box2_shift = prop.thickness;
      } else {
        prop.box2_shift = 0;
      }
      // III секция, полки
      prop.shelfX3 = prop.box_width_1;
      prop.shelfY3 = prop.thickness;
      prop.shelfZ3 = prop.depth - prop.door_shift - prop.wall_shift - prop.door3_shift - prop.wall3_shift - prop.box3_shift * 2;
      if (stock.box_fill_boxes_3) {
        prop.shelfX3 = prop.box_width_3 - prop.thickness;
        prop.shelfY3 = prop.thickness / 5;
        prop.shelfZ3 = prop.depth - prop.door_shift - prop.door3_shift - prop.box3_shift * 2 - prop.thickness;
        prop.box3_shift = prop.thickness;
      } else {
        prop.box3_shift = 0;
      }
      // IV секция, полки
      prop.shelfX4 = prop.box_width_4;
      prop.shelfY4 = prop.thickness;
      prop.shelfZ4 = prop.depth - prop.door_shift - prop.wall_shift - prop.door4_shift - prop.wall4_shift - prop.box4_shift * 2;
      if (stock.box_fill_boxes_4) {
        prop.shelfX4 = prop.box_width_4 - prop.thickness;
        prop.shelfY4 = prop.thickness / 5;
        prop.shelfZ4 = prop.depth - prop.door_shift - prop.door4_shift - prop.box4_shift * 2 - prop.thickness;
        prop.box4_shift = prop.thickness;
      } else {
        prop.box4_shift = 0;
      }
      // V секция, полки
      prop.shelfX5 = prop.box_width_5;
      prop.shelfY5 = prop.thickness;
      prop.shelfZ5 = prop.depth - prop.door_shift - prop.wall_shift - prop.door5_shift - prop.wall5_shift - prop.box5_shift * 2;
      if (stock.box_fill_boxes_5) {
        prop.shelfX5 = prop.box_width_5 - prop.thickness;
        prop.shelfY5 = prop.thickness / 5;
        prop.shelfZ5 = prop.depth - prop.door_shift - prop.door5_shift - prop.box5_shift * 2 - prop.thickness;
        prop.box5_shift = prop.thickness;
      } else {
        prop.box5_shift = 0;
      }
      // VI секция, полки
      prop.shelfX6 = prop.box_width_6;
      prop.shelfY6 = prop.thickness;
      prop.shelfZ6 = prop.depth - prop.door_shift - prop.wall_shift - prop.door6_shift - prop.wall6_shift - prop.box6_shift * 2;
      if (stock.box_fill_boxes_6) {
        prop.shelfX6 = prop.box_width_6 - prop.thickness;
        prop.shelfY6 = prop.thickness / 5;
        prop.shelfZ6 = prop.depth - prop.door_shift - prop.door6_shift - prop.box6_shift * 2 - prop.thickness;
        prop.box6_shift = prop.thickness;
      } else {
        prop.box6_shift = 0;
      }
      // lower
      // VII секция, полки
      prop.shelfX7 = prop.box_width_7;
      prop.shelfY7 = prop.thickness;
      prop.shelfZ7 = prop.depth - prop.door_shift - prop.wall_shift - prop.door7_shift - prop.wall7_shift - prop.box7_shift * 2;
      if (stock.box_fill_boxes_7) {
        prop.shelfX7 = prop.box_width_7 - prop.thickness;
        prop.shelfY7 = prop.thickness / 5;
        prop.shelfZ7 = prop.depth - prop.door_shift - prop.door7_shift - prop.box7_shift * 2 - prop.thickness;
        prop.box7_shift = prop.thickness;
      } else {
        prop.box7_shift = 0;
      }
      // VIII секция, полки
      prop.shelfX8 = prop.box_width_8;
      prop.shelfY8 = prop.thickness;
      prop.shelfZ8 = prop.depth - prop.door_shift - prop.wall_shift - prop.door8_shift - prop.wall8_shift - prop.box8_shift * 2;
      if (stock.box_fill_boxes_8) {
        prop.shelfX8 = prop.box_width_8 - prop.thickness;
        prop.shelfY8 = prop.thickness / 5;
        prop.shelfZ8 = prop.depth - prop.door_shift - prop.door8_shift - prop.box8_shift * 2 - prop.thickness;
        prop.box8_shift = prop.thickness;
      } else {
        prop.box8_shift = 0;
      }
      // IX секция, полки
      prop.shelfX9 = prop.box_width_9;
      prop.shelfY9 = prop.thickness;
      prop.shelfZ9 = prop.depth - prop.door_shift - prop.wall_shift - prop.door9_shift - prop.wall9_shift - prop.box9_shift * 2;
      if (stock.box_fill_boxes_9) {
        prop.shelfX9 = prop.box_width_9 - prop.thickness;
        prop.shelfY9 = prop.thickness / 5;
        prop.shelfZ9 = prop.depth - prop.door_shift - prop.door9_shift - prop.box9_shift * 2 - prop.thickness;
        prop.box9_shift = prop.thickness;
      } else {
        prop.box9_shift = 0;
      }
      // X секция, полки
      prop.shelfX10 = prop.box_width_10;
      prop.shelfY10 = prop.thickness;
      prop.shelfZ10 = prop.depth - prop.door_shift - prop.wall_shift - prop.door10_shift - prop.wall10_shift - prop.box10_shift * 2;
      if (stock.box_fill_boxes_10) {
        prop.shelfX10 = prop.box_width_10 - prop.thickness;
        prop.shelfY10 = prop.thickness / 5;
        prop.shelfZ10 = prop.depth - prop.door_shift - prop.door10_shift - prop.box10_shift * 2 - prop.thickness;
        prop.box10_shift = prop.thickness;
      } else {
        prop.box10_shift = 0;
      }
      // XI секция, полки
      prop.shelfX11 = prop.box_width_11;
      prop.shelfY11 = prop.thickness;
      prop.shelfZ11 = prop.depth - prop.door_shift - prop.wall_shift - prop.door11_shift - prop.wall11_shift - prop.box11_shift * 2;
      if (stock.box_fill_boxes_11) {
        prop.shelfX11 = prop.box_width_11 - prop.thickness;
        prop.shelfY11 = prop.thickness / 5;
        prop.shelfZ11 = prop.depth - prop.door_shift - prop.door11_shift - prop.box11_shift * 2 - prop.thickness;
        prop.box11_shift = prop.thickness;
      } else {
        prop.box11_shift = 0;
      }
      // XII секция, полки
      prop.shelfX12 = prop.box_width_12;
      prop.shelfY12 = prop.thickness;
      prop.shelfZ12 = prop.depth - prop.door_shift - prop.wall_shift - prop.door12_shift - prop.wall12_shift - prop.box12_shift * 2;
      if (stock.box_fill_boxes_12) {
        prop.shelfX12 = prop.box_width_12 - prop.thickness;
        prop.shelfY12 = prop.thickness / 5;
        prop.shelfZ12 = prop.depth - prop.door_shift - prop.door12_shift - prop.box12_shift * 2 - prop.thickness;
        prop.box12_shift = prop.thickness;
      } else {
        prop.box12_shift = 0;
      }
      // SPLIT
      // XIII секция, полки
      prop.shelfX13 = prop.box_width_7;
      prop.shelfY13 = prop.thickness;
      prop.shelfZ13 = prop.depth - prop.door_shift - prop.wall_shift - prop.door13_shift - prop.wall13_shift - prop.box13_shift * 2;
      if (stock.box_fill_boxes_13) {
        prop.shelfX13 = prop.box_width_7 - prop.thickness;
        prop.shelfY13 = prop.thickness / 5;
        prop.shelfZ13 = prop.depth - prop.door_shift - prop.door13_shift - prop.box13_shift * 2 - prop.thickness;
        prop.box13_shift = prop.thickness;
      } else {
        prop.box13_shift = 0;
      }
      // XIV секция, полки
      prop.shelfX14 = prop.box_width_8;
      prop.shelfY14 = prop.thickness;
      prop.shelfZ14 = prop.depth - prop.door_shift - prop.wall_shift - prop.door14_shift - prop.wall14_shift - prop.box14_shift * 2;
      if (stock.box_fill_boxes_14) {
        prop.shelfX14 = prop.box_width_8 - prop.thickness;
        prop.shelfY14 = prop.thickness / 5;
        prop.shelfZ14 = prop.depth - prop.door_shift - prop.door14_shift - prop.box14_shift * 2 - prop.thickness;
        prop.box14_shift = prop.thickness;
      } else {
        prop.box14_shift = 0;
      }
      // XV секция, полки
      prop.shelfX15 = prop.box_width_9;
      prop.shelfY15 = prop.thickness;
      prop.shelfZ15 = prop.depth - prop.door_shift - prop.wall_shift - prop.door15_shift - prop.wall15_shift - prop.box15_shift * 2;
      if (stock.box_fill_boxes_15) {
        prop.shelfX15 = prop.box_width_9 - prop.thickness;
        prop.shelfY15 = prop.thickness / 5;
        prop.shelfZ15 = prop.depth - prop.door_shift - prop.door15_shift - prop.box15_shift * 2 - prop.thickness;
        prop.box15_shift = prop.thickness;
      } else {
        prop.box15_shift = 0;
      }
      // XVI секция, полки
      prop.shelfX16 = prop.box_width_10;
      prop.shelfY16 = prop.thickness;
      prop.shelfZ16 = prop.depth - prop.door_shift - prop.wall_shift - prop.door16_shift - prop.wall16_shift - prop.box16_shift * 2;
      if (stock.box_fill_boxes_13) {
        prop.shelfX16 = prop.box_width_10 - prop.thickness;
        prop.shelfY16 = prop.thickness / 5;
        prop.shelfZ16 = prop.depth - prop.door_shift - prop.door16_shift - prop.box16_shift * 2 - prop.thickness;
        prop.box16_shift = prop.thickness;
      } else {
        prop.box16_shift = 0;
      }
      // XVII секция, полки
      prop.shelfX17 = prop.box_width_11;
      prop.shelfY17 = prop.thickness;
      prop.shelfZ17 = prop.depth - prop.door_shift - prop.wall_shift - prop.door17_shift - prop.wall17_shift - prop.box17_shift * 2;
      if (stock.box_fill_boxes_17) {
        prop.shelfX17 = prop.box_width_11 - prop.thickness;
        prop.shelfY17 = prop.thickness / 5;
        prop.shelfZ17 = prop.depth - prop.door_shift - prop.door17_shift - prop.box17_shift * 2 - prop.thickness;
        prop.box17_shift = prop.thickness;
      } else {
        prop.box17_shift = 0;
      }
      // XVIII секция, полки
      prop.shelfX18 = prop.box_width_12;
      prop.shelfY18 = prop.thickness;
      prop.shelfZ18 = prop.depth - prop.door_shift - prop.wall_shift - prop.door18_shift - prop.wall18_shift - prop.box18_shift * 2;
      if (stock.box_fill_boxes_18) {
        prop.shelfX18 = prop.box_width_12 - prop.thickness;
        prop.shelfY18 = prop.thickness / 5;
        prop.shelfZ18 = prop.depth - prop.door_shift - prop.door18_shift - prop.box18_shift * 2 - prop.thickness;
        prop.box18_shift = prop.thickness;
      } else {
        prop.box18_shift = 0;
      }
      // детали ящиков, нижним основанием служит полка
      // I секция, ящики
      prop.boxWallX1 = prop.box_width_1 - prop.thickness * 2;
      prop.boxWallY1 = (prop.entresolRackY) / prop.box_fill_amount_1 - prop.thickness * 2;
      prop.boxWallZ1 = prop.depth - prop.door_shift - prop.door1_shift - prop.box1_shift - prop.thickness * 2;
      // наличник platband
      prop.boxPlatbandX1 = prop.box_width_1;
      prop.boxPlatbandY1 = (prop.entresolRackY) / prop.box_fill_amount_1;
      prop.boxPlatbandZ1 = prop.thickness;
      // штанга, Y и Z - prop.thickess, устанавливаются в geometry
      // штанга
      prop.rodX1 = prop.box_width_1;
      prop.rodShift = 50;
      // II секция
      prop.boxWallX2 = prop.box_width_2 - prop.thickness * 2;
      prop.boxWallY2 = (prop.entresolRackY) / prop.box_fill_amount_2 - prop.thickness * 2;
      prop.boxWallZ2 = prop.depth - prop.door_shift - prop.door2_shift - prop.box2_shift - prop.thickness * 2;
      prop.boxPlatbandX2 = prop.box_width_2;
      prop.boxPlatbandY2 = (prop.entresolRackY) / prop.box_fill_amount_2;
      prop.boxPlatbandZ2 = prop.thickness;
      prop.rodX2 = prop.box_width_2;
      // III секция
      prop.boxWallX3 = prop.box_width_3 - prop.thickness * 2;
      prop.boxWallY3 = (prop.entresolRackY) / prop.box_fill_amount_3 - prop.thickness * 2;
      prop.boxWallZ3 = prop.depth - prop.door_shift - prop.door3_shift - prop.box3_shift - prop.thickness * 2;
      prop.boxPlatbandX3 = prop.box_width_3;
      prop.boxPlatbandY3 = (prop.entresolRackY) / prop.box_fill_amount_3;
      prop.boxPlatbandZ3 = prop.thickness;
      prop.rodX3 = prop.box_width_3;
      // IV секция
      prop.boxWallX4 = prop.box_width_4 - prop.thickness * 2;
      prop.boxWallY4 = (prop.entresolRackY) / prop.box_fill_amount_4 - prop.thickness * 2;
      prop.boxWallZ4 = prop.depth - prop.door_shift - prop.door4_shift - prop.box4_shift - prop.thickness * 2;
      prop.boxPlatbandX4 = prop.box_width_4;
      prop.boxPlatbandY4 = (prop.entresolRackY) / prop.box_fill_amount_4;
      prop.boxPlatbandZ4 = prop.thickness;
      prop.rodX4 = prop.box_width_4;
      // V секция
      prop.boxWallX5 = prop.box_width_5 - prop.thickness * 2;
      prop.boxWallY5 = (prop.entresolRackY) / prop.box_fill_amount_5 - prop.thickness * 2;
      prop.boxWallZ5 = prop.depth - prop.door_shift - prop.door5_shift - prop.box5_shift - prop.thickness * 2;
      prop.boxPlatbandX5 = prop.box_width_5;
      prop.boxPlatbandY5 = (prop.entresolRackY) / prop.box_fill_amount_5;
      prop.boxPlatbandZ5 = prop.thickness;
      prop.rodX5 = prop.box_width_5;
      // VI секция
      prop.boxWallX6 = prop.box_width_6 - prop.thickness * 2;
      prop.boxWallY6 = (prop.entresolRackY) / prop.box_fill_amount_6 - prop.thickness * 2;
      prop.boxWallZ6 = prop.depth - prop.door_shift - prop.door6_shift - prop.box6_shift - prop.thickness * 2;
      prop.boxPlatbandX6 = prop.box_width_6;
      prop.boxPlatbandY6 = (prop.entresolRackY) / prop.box_fill_amount_6;
      prop.boxPlatbandZ6 = prop.thickness;
      prop.rodX6 = prop.box_width_6;
      // lower
      // VII секция
      prop.boxWallX7 = prop.box_width_7 - prop.thickness * 2;
      prop.boxWallY7 = (prop.lowerRackY - prop.box_width_13) / prop.box_fill_amount_7 - prop.thickness * 2;
      prop.boxWallZ7 = prop.depth - prop.door_shift - prop.door7_shift - prop.box7_shift - prop.thickness * 2;
      prop.boxPlatbandX7 = prop.box_width_7;
      prop.boxPlatbandY7 = (prop.lowerRackY - prop.box_width_13) / prop.box_fill_amount_7 - prop.halfThickness;
      if (!stock.box_split_7) {
        prop.boxWallY7 = prop.lowerRackY / prop.box_fill_amount_7 - prop.thickness * 2;
        prop.boxPlatbandY7 = prop.lowerRackY / prop.box_fill_amount_7 - prop.halfThickness;
      }
      prop.boxPlatbandZ7 = prop.thickness;
      prop.rodX7 = prop.box_width_7;
      // VIII секция
      prop.boxWallX8 = prop.box_width_8 - prop.thickness * 2;
      prop.boxWallY8 = (prop.lowerRackY - prop.box_width_14) / prop.box_fill_amount_8 - prop.thickness * 2;
      prop.boxWallZ8 = prop.depth - prop.door_shift - prop.door8_shift - prop.box8_shift - prop.thickness * 2;
      prop.boxPlatbandX8 = prop.box_width_8;
      prop.boxPlatbandY8 = (prop.lowerRackY - prop.box_width_14) / prop.box_fill_amount_8 - prop.halfThickness;
      if (!stock.box_split_8) {
        prop.boxWallY8 = prop.lowerRackY / prop.box_fill_amount_8 - prop.thickness * 2;
        prop.boxPlatbandY8 = prop.lowerRackY / prop.box_fill_amount_8 - prop.halfThickness;
      }
      prop.boxPlatbandZ8 = prop.thickness;
      prop.rodX8 = prop.box_width_8;
      // IX секция
      prop.boxWallX9 = prop.box_width_9 - prop.thickness * 2;
      prop.boxWallY9 = (prop.lowerRackY - prop.box_width_15) / prop.box_fill_amount_9 - prop.thickness * 2;
      prop.boxWallZ9 = prop.depth - prop.door_shift - prop.door9_shift - prop.box9_shift - prop.thickness * 2;
      prop.boxPlatbandX9 = prop.box_width_9;
      prop.boxPlatbandY9 = (prop.lowerRackY - prop.box_width_15) / prop.box_fill_amount_9 - prop.halfThickness;
      if (!stock.box_split_9) {
        prop.boxWallY9 = prop.lowerRackY / prop.box_fill_amount_9 - prop.thickness * 2;
        prop.boxPlatbandY9 = prop.lowerRackY / prop.box_fill_amount_9 - prop.halfThickness;
      }
      prop.boxPlatbandZ9 = prop.thickness;
      prop.rodX9 = prop.box_width_9;
      // X секция
      prop.boxWallX10 = prop.box_width_10 - prop.thickness * 2;
      prop.boxWallY10 = (prop.lowerRackY - prop.box_width_16) / prop.box_fill_amount_10 - prop.thickness * 2;
      prop.boxWallZ10 = prop.depth - prop.door_shift - prop.door10_shift - prop.box10_shift - prop.thickness * 2;
      prop.boxPlatbandX10 = prop.box_width_10;
      prop.boxPlatbandY10 = (prop.lowerRackY - prop.box_width_16) / prop.box_fill_amount_10 - prop.halfThickness;
      if (!stock.box_split_10) {
        prop.boxWallY10 = prop.lowerRackY / prop.box_fill_amount_10 - prop.thickness * 2;
        prop.boxPlatbandY10 = prop.lowerRackY / prop.box_fill_amount_10 - prop.halfThickness;
      }
      prop.boxPlatbandZ10 = prop.thickness;
      prop.rodX10 = prop.box_width_10;
      // XI секция
      prop.boxWallX11 = prop.box_width_11 - prop.thickness * 2;
      prop.boxWallY11 = (prop.lowerRackY - prop.box_width_17) / prop.box_fill_amount_11 - prop.thickness * 2;
      prop.boxWallZ11 = prop.depth - prop.door_shift - prop.door11_shift - prop.box11_shift - prop.thickness * 2;
      prop.boxPlatbandX11 = prop.box_width_11;
      prop.boxPlatbandY11 = (prop.lowerRackY - prop.box_width_17) / prop.box_fill_amount_11 - prop.halfThickness;
      if (!stock.box_split_11) {
        prop.boxWallY11 = prop.lowerRackY / prop.box_fill_amount_11 - prop.thickness * 2;
        prop.boxPlatbandY11 = prop.lowerRackY / prop.box_fill_amount_11 - prop.halfThickness;
      }
      prop.boxPlatbandZ11 = prop.thickness;
      prop.rodX11 = prop.box_width_11;
      // XII секция
      prop.boxWallX12 = prop.box_width_12 - prop.thickness * 2;
      prop.boxWallY12 = (prop.lowerRackY - prop.box_width_18) / prop.box_fill_amount_12 - prop.thickness * 2;
      prop.boxWallZ12 = prop.depth - prop.door_shift - prop.door12_shift - prop.box12_shift - prop.thickness * 2;
      prop.boxPlatbandX12 = prop.box_width_12;
      prop.boxPlatbandY12 = (prop.lowerRackY - prop.box_width_18) / prop.box_fill_amount_12 - prop.halfThickness;
      if (!stock.box_split_12) {
        prop.boxWallY12 = prop.lowerRackY / prop.box_fill_amount_12 - prop.thickness * 2;
        prop.boxPlatbandY12 = prop.lowerRackY / prop.box_fill_amount_12 - prop.halfThickness;
      }
      prop.boxPlatbandZ12 = prop.thickness;
      prop.rodX12 = prop.box_width_12;
      // SPLIT
      // XIII секция
      prop.boxWallX13 = prop.box_width_7 - prop.thickness;
      prop.boxWallY13 = (prop.box_width_13 - prop.halfThickness) / prop.box_fill_amount_13 - prop.thickness * 2;
      prop.boxWallZ13 = prop.depth - prop.door_shift - prop.door13_shift - prop.box13_shift - prop.thickness * 2;
      prop.boxPlatbandX13 = prop.box_width_7;
      prop.boxPlatbandY13 = (prop.box_width_13 - prop.halfThickness) / prop.box_fill_amount_13;
      prop.boxPlatbandZ13 = prop.thickness;
      prop.rodX13 = prop.box_width_7;
      // XIV секция
      prop.boxWallX14 = prop.box_width_8 - prop.thickness;
      prop.boxWallY14 = (prop.box_width_14 - prop.halfThickness) / prop.box_fill_amount_14 - prop.thickness * 2;
      prop.boxWallZ14 = prop.depth - prop.door_shift - prop.door14_shift - prop.box14_shift - prop.thickness * 2;
      prop.boxPlatbandX14 = prop.box_width_8;
      prop.boxPlatbandY14 = (prop.box_width_14 - prop.halfThickness) / prop.box_fill_amount_14;
      prop.boxPlatbandZ14 = prop.thickness;
      prop.rodX14 = prop.box_width_8;
      // XV секция
      prop.boxWallX15 = prop.box_width_9 - prop.thickness;
      prop.boxWallY15 = (prop.box_width_15 - prop.halfThickness) / prop.box_fill_amount_15 - prop.thickness * 2;
      prop.boxWallZ15 = prop.depth - prop.door_shift - prop.door15_shift - prop.box15_shift - prop.thickness * 2;
      prop.boxPlatbandX15 = prop.box_width_9;
      prop.boxPlatbandY15 = (prop.box_width_15 - prop.halfThickness) / prop.box_fill_amount_15;
      prop.boxPlatbandZ15 = prop.thickness;
      prop.rodX15 = prop.box_width_9;
      // XVI секция
      prop.boxWallX16 = prop.box_width_10 - prop.thickness;
      prop.boxWallY16 = (prop.box_width_16 - prop.halfThickness) / prop.box_fill_amount_16 - prop.thickness * 2;
      prop.boxWallZ16 = prop.depth - prop.door_shift - prop.door16_shift - prop.box16_shift - prop.thickness * 2;
      prop.boxPlatbandX16 = prop.box_width_10;
      prop.boxPlatbandY16 = (prop.box_width_16 - prop.halfThickness) / prop.box_fill_amount_16;
      prop.boxPlatbandZ16 = prop.thickness;
      prop.rodX16 = prop.box_width_10;
      // XVII секция
      prop.boxWallX17 = prop.box_width_11 - prop.thickness;
      prop.boxWallY17 = (prop.box_width_17 - prop.halfThickness) / prop.box_fill_amount_17 - prop.thickness * 2;
      prop.boxWallZ17 = prop.depth - prop.door_shift - prop.door17_shift - prop.box17_shift - prop.thickness * 2;
      prop.boxPlatbandX17 = prop.box_width_11;
      prop.boxPlatbandY17 = (prop.box_width_17 - prop.halfThickness) / prop.box_fill_amount_17;
      prop.boxPlatbandZ17 = prop.thickness;
      prop.rodX17 = prop.box_width_11;
      // XVIII секция
      prop.boxWallX18 = prop.box_width_12 - prop.thickness;
      prop.boxWallY18 = (prop.box_width_18 - prop.halfThickness) / prop.box_fill_amount_18 - prop.thickness * 2;
      prop.boxWallZ18 = prop.depth - prop.door_shift - prop.door18_shift - prop.box18_shift - prop.thickness * 2;
      prop.boxPlatbandX18 = prop.box_width_12;
      prop.boxPlatbandY18 = (prop.box_width_18 - prop.halfThickness) / prop.box_fill_amount_18;
      prop.boxPlatbandZ18 = prop.thickness;
      prop.rodX18 = prop.box_width_12;
    }

    var reconstructBox = function () {
      // remove
      group.remove(part.entresol_rack_first, part.entresol_rack_second, part.entresol_rack_third, part.entresol_rack_fourth, part.entresol_rack_fifth,
      part.entresol_rack_shadow_first, part.entresol_rack_shadow_second, part.entresol_rack_shadow_third, part.entresol_rack_shadow_fourth, part.entresol_rack_shadow_fifth,
      part.lower_rack_shadow_first, part.lower_rack_shadow_second, part.lower_rack_shadow_third, part.lower_rack_shadow_fourth, part.lower_rack_shadow_fifth,
        part.lower_rack_first, part.lower_rack_second, part.lower_rack_third, part.lower_rack_fourth, part.lower_rack_fifth,
        part.lower_bar_7, part.lower_bar_8, part.lower_bar_9, part.lower_bar_10, part.lower_bar_11, part.lower_bar_12,
        part.box_force_1, part.box_force_2, part.box_force_3, part.box_force_4, part.box_force_5, part.box_force_6,
        part.box_force_7, part.box_force_8, part.box_force_9, part.box_force_10, part.box_force_11, part.box_force_12, part.box_force_13, part.box_force_14, part.box_force_15, part.box_force_16, part.box_force_17, part.box_force_18,
        part.box_door_one_1, part.box_door_two_1_first, part.box_door_two_1_second, part.box_door_one_2, part.box_door_two_2_first, part.box_door_two_2_second, part.box_door_one_3, part.box_door_two_3_first, part.box_door_two_3_second, part.box_door_one_4, part.box_door_two_4_first, part.box_door_two_4_second, part.box_door_one_5, part.box_door_two_5_first, part.box_door_two_5_second, part.box_door_one_6, part.box_door_two_6_first, part.box_door_two_6_second, part.box_door_one_7, part.box_door_two_7_first, part.box_door_two_7_second, part.box_door_one_8, part.box_door_two_8_first, part.box_door_two_8_second, part.box_door_one_9, part.box_door_two_9_first, part.box_door_two_9_second, part.box_door_one_10, part.box_door_two_10_first, part.box_door_two_10_second, part.box_door_one_11, part.box_door_two_11_first, part.box_door_two_11_second, part.box_door_one_12, part.box_door_two_12_first, part.box_door_two_12_second, part.box_door_one_13, part.box_door_two_13_first, part.box_door_two_13_second, part.box_door_one_14, part.box_door_two_14_first, part.box_door_two_14_second, part.box_door_one_15, part.box_door_two_15_first, part.box_door_two_15_second, part.box_door_one_16, part.box_door_two_16_first, part.box_door_two_16_second, part.box_door_one_17, part.box_door_two_17_first, part.box_door_two_17_second, part.box_door_one_18, part.box_door_two_18_first, part.box_door_two_18_second,
        part.box_hand_bracket_1_first, part.box_hand_bracket_1_second, part.box_hand_bracket_2_first, part.box_hand_bracket_2_second, part.box_hand_bracket_3_first, part.box_hand_bracket_3_second, part.box_hand_bracket_4_first, part.box_hand_bracket_4_second, part.box_hand_bracket_5_first, part.box_hand_bracket_5_second, part.box_hand_bracket_6_first, part.box_hand_bracket_6_second, part.box_hand_bracket_7_first, part.box_hand_bracket_7_second, part.box_hand_bracket_8_first, part.box_hand_bracket_8_second, part.box_hand_bracket_9_first, part.box_hand_bracket_9_second, part.box_hand_bracket_10_first, part.box_hand_bracket_10_second, part.box_hand_bracket_11_first, part.box_hand_bracket_11_second, part.box_hand_bracket_12_first, part.box_hand_bracket_12_second, part.box_hand_bracket_13_first, part.box_hand_bracket_13_second, part.box_hand_bracket_14_first, part.box_hand_bracket_14_second, part.box_hand_bracket_15_first, part.box_hand_bracket_15_second, part.box_hand_bracket_16_first, part.box_hand_bracket_16_second, part.box_hand_bracket_17_first, part.box_hand_bracket_17_second, part.box_hand_bracket_18_first, part.box_hand_bracket_18_second,
        part.box_hand_shell_1_first, part.box_hand_shell_1_second, part.box_hand_shell_2_first, part.box_hand_shell_2_second, part.box_hand_shell_3_first, part.box_hand_shell_3_second, part.box_hand_shell_4_first, part.box_hand_shell_4_second, part.box_hand_shell_5_first, part.box_hand_shell_5_second, part.box_hand_shell_6_first, part.box_hand_shell_6_second, part.box_hand_shell_7_first, part.box_hand_shell_7_second, part.box_hand_shell_8_first, part.box_hand_shell_8_second, part.box_hand_shell_9_first, part.box_hand_shell_9_second, part.box_hand_shell_10_first, part.box_hand_shell_10_second, part.box_hand_shell_11_first, part.box_hand_shell_11_second, part.box_hand_shell_12_first, part.box_hand_shell_12_second, part.box_hand_shell_13_first, part.box_hand_shell_13_second, part.box_hand_shell_14_first, part.box_hand_shell_14_second, part.box_hand_shell_15_first, part.box_hand_shell_15_second, part.box_hand_shell_16_first, part.box_hand_shell_16_second, part.box_hand_shell_17_first, part.box_hand_shell_17_second, part.box_hand_shell_18_first, part.box_hand_shell_18_second,
        part.shelf_1, part.shelf_2, part.shelf_3, part.shelf_4, part.shelf_5, part.shelf_6, part.shelf_7, part.shelf_8, part.shelf_9, part.shelf_10, part.shelf_11, part.shelf_12, part.shelf_13, part.shelf_14, part.shelf_15, part.shelf_16, part.shelf_17, part.shelf_18, part.shelf_19, part.shelf_20, part.shelf_21, part.shelf_22, part.shelf_23, part.shelf_24, part.shelf_25, part.shelf_26, part.shelf_27, part.shelf_28, part.shelf_29, part.shelf_30, part.shelf_31, part.shelf_32, part.shelf_33, part.shelf_34, part.shelf_35, part.shelf_36, part.shelf_37, part.shelf_38, part.shelf_39, part.shelf_40, part.shelf_41, part.shelf_42, part.shelf_43, part.shelf_44, part.shelf_45, part.shelf_46, part.shelf_47, part.shelf_48, part.shelf_49, part.shelf_50, part.shelf_51, part.shelf_52, part.shelf_53, part.shelf_54, part.shelf_55, part.shelf_56, part.shelf_57, part.shelf_58, part.shelf_59, part.shelf_60, part.shelf_61, part.shelf_62, part.shelf_63, part.shelf_64, part.shelf_65, part.shelf_66, part.shelf_67, part.shelf_68, part.shelf_69, part.shelf_70, part.shelf_71, part.shelf_72, part.shelf_73, part.shelf_74, part.shelf_75, part.shelf_76, part.shelf_77, part.shelf_78, part.shelf_79, part.shelf_80, part.shelf_81, part.shelf_82, part.shelf_83, part.shelf_84, part.shelf_85, part.shelf_86, part.shelf_87, part.shelf_88, part.shelf_89, part.shelf_90,
        part.shelf_shadow_1, part.shelf_shadow_2, part.shelf_shadow_3, part.shelf_shadow_4, part.shelf_shadow_5,
        part.shelf_shadow_6, part.shelf_shadow_7, part.shelf_shadow_8, part.shelf_shadow_9, part.shelf_shadow_10,
        part.shelf_shadow_11, part.shelf_shadow_12, part.shelf_shadow_13, part.shelf_shadow_14, part.shelf_shadow_15,
        part.shelf_shadow_16, part.shelf_shadow_17, part.shelf_shadow_18, part.shelf_shadow_19, part.shelf_shadow_20,
        part.shelf_shadow_21, part.shelf_shadow_22, part.shelf_shadow_23, part.shelf_shadow_24, part.shelf_shadow_25,
        part.shelf_shadow_26, part.shelf_shadow_27, part.shelf_shadow_28, part.shelf_shadow_29, part.shelf_shadow_30,
        part.shelf_shadow_31, part.shelf_shadow_32, part.shelf_shadow_33, part.shelf_shadow_34, part.shelf_shadow_35,
        part.shelf_shadow_36, part.shelf_shadow_37, part.shelf_shadow_38, part.shelf_shadow_39, part.shelf_shadow_40,
        part.shelf_shadow_41, part.shelf_shadow_42, part.shelf_shadow_43, part.shelf_shadow_44, part.shelf_shadow_45,
        part.shelf_shadow_46, part.shelf_shadow_47, part.shelf_shadow_48, part.shelf_shadow_49, part.shelf_shadow_50,
        part.shelf_shadow_51, part.shelf_shadow_52, part.shelf_shadow_53, part.shelf_shadow_54, part.shelf_shadow_55,
        part.shelf_shadow_56, part.shelf_shadow_57, part.shelf_shadow_58, part.shelf_shadow_59, part.shelf_shadow_60,
        part.shelf_shadow_61, part.shelf_shadow_62, part.shelf_shadow_63, part.shelf_shadow_64, part.shelf_shadow_65,
        part.shelf_shadow_66, part.shelf_shadow_67, part.shelf_shadow_68, part.shelf_shadow_69, part.shelf_shadow_70,
        part.shelf_shadow_71, part.shelf_shadow_72, part.shelf_shadow_73, part.shelf_shadow_74, part.shelf_shadow_75,
        part.shelf_shadow_76, part.shelf_shadow_77, part.shelf_shadow_78, part.shelf_shadow_79, part.shelf_shadow_80,
        part.shelf_shadow_81, part.shelf_shadow_82, part.shelf_shadow_83, part.shelf_shadow_84, part.shelf_shadow_85,
        part.shelf_shadow_86, part.shelf_shadow_87, part.shelf_shadow_88, part.shelf_shadow_89, part.shelf_shadow_90,
        part.box_wall_left_1, part.box_wall_right_1, part.box_wall_back_1, part.box_wall_forward_1,
        part.box_platband_1, part.boxes_hand_bracket_1, part.boxes_hand_shell_1, part.boxes_hand_cut_1,
        part.box_wall_left_2, part.box_wall_right_2, part.box_wall_back_2, part.box_wall_forward_2,
        part.box_platband_2, part.boxes_hand_bracket_2, part.boxes_hand_shell_2, part.boxes_hand_cut_2,
        part.box_wall_left_3, part.box_wall_right_3, part.box_wall_back_3, part.box_wall_forward_3,
        part.box_platband_3, part.boxes_hand_bracket_3, part.boxes_hand_shell_3, part.boxes_hand_cut_3,
        part.box_wall_left_4, part.box_wall_right_4, part.box_wall_back_4, part.box_wall_forward_4,
        part.box_platband_4, part.boxes_hand_bracket_4, part.boxes_hand_shell_4, part.boxes_hand_cut_4,
        part.box_wall_left_5, part.box_wall_right_5, part.box_wall_back_5, part.box_wall_forward_5,
        part.box_platband_5, part.boxes_hand_bracket_5, part.boxes_hand_shell_5, part.boxes_hand_cut_5,
        part.box_wall_left_6, part.box_wall_right_6, part.box_wall_back_6, part.box_wall_forward_6,
        part.box_platband_6, part.boxes_hand_bracket_6, part.boxes_hand_shell_6, part.boxes_hand_cut_6,
        part.box_wall_left_7, part.box_wall_right_7, part.box_wall_back_7, part.box_wall_forward_7,
        part.box_platband_7, part.boxes_hand_bracket_7, part.boxes_hand_shell_7, part.boxes_hand_cut_7,
        part.box_wall_left_8, part.box_wall_right_8, part.box_wall_back_8, part.box_wall_forward_8,
        part.box_platband_8, part.boxes_hand_bracket_8, part.boxes_hand_shell_8, part.boxes_hand_cut_8,
        part.box_wall_left_9, part.box_wall_right_9, part.box_wall_back_9, part.box_wall_forward_9,
        part.box_platband_9, part.boxes_hand_bracket_9, part.boxes_hand_shell_9, part.boxes_hand_cut_9,
        part.box_wall_left_10, part.box_wall_right_10, part.box_wall_back_10, part.box_wall_forward_10,
        part.box_platband_10, part.boxes_hand_bracket_10, part.boxes_hand_shell_10, part.boxes_hand_cut_10,
        part.box_wall_left_11, part.box_wall_right_11, part.box_wall_back_11, part.box_wall_forward_11,
        part.box_platband_11, part.boxes_hand_bracket_11, part.boxes_hand_shell_11, part.boxes_hand_cut_11,
        part.box_wall_left_12, part.box_wall_right_12, part.box_wall_back_12, part.box_wall_forward_12,
        part.box_platband_12, part.boxes_hand_bracket_12, part.boxes_hand_shell_12, part.boxes_hand_cut_12,
        part.box_wall_left_13, part.box_wall_right_13, part.box_wall_back_13, part.box_wall_forward_13,
        part.box_platband_13, part.boxes_hand_bracket_13, part.boxes_hand_shell_13, part.boxes_hand_cut_13,
        part.box_wall_left_14, part.box_wall_right_14, part.box_wall_back_14, part.box_wall_forward_14,
        part.box_platband_14, part.boxes_hand_bracket_14, part.boxes_hand_shell_14, part.boxes_hand_cut_14,
        part.box_wall_left_15, part.box_wall_right_15, part.box_wall_back_15, part.box_wall_forward_15,
        part.box_platband_15, part.boxes_hand_bracket_15, part.boxes_hand_shell_15, part.boxes_hand_cut_15,
        part.box_wall_left_16, part.box_wall_right_16, part.box_wall_back_16, part.box_wall_forward_16,
        part.box_platband_16, part.boxes_hand_bracket_16, part.boxes_hand_shell_16, part.boxes_hand_cut_16,
        part.box_wall_left_17, part.box_wall_right_17, part.box_wall_back_17, part.box_wall_forward_17,
        part.box_platband_17, part.boxes_hand_bracket_17, part.boxes_hand_shell_17, part.boxes_hand_cut_17,
        part.box_wall_left_18, part.box_wall_right_18, part.box_wall_back_18, part.box_wall_forward_18,
        part.box_platband_18, part.boxes_hand_bracket_18, part.boxes_hand_shell_18, part.boxes_hand_cut_18,
        part.box_wall_left_19, part.box_wall_right_19, part.box_wall_back_19, part.box_wall_forward_19,
        part.box_platband_19, part.boxes_hand_bracket_19, part.boxes_hand_shell_19, part.boxes_hand_cut_19,
        part.box_wall_left_20, part.box_wall_right_20, part.box_wall_back_20, part.box_wall_forward_20,
        part.box_platband_20, part.boxes_hand_bracket_20, part.boxes_hand_shell_20, part.boxes_hand_cut_20,
        part.box_wall_left_21, part.box_wall_right_21, part.box_wall_back_21, part.box_wall_forward_21,
        part.box_platband_21, part.boxes_hand_bracket_21, part.boxes_hand_shell_21, part.boxes_hand_cut_21,
        part.box_wall_left_22, part.box_wall_right_22, part.box_wall_back_22, part.box_wall_forward_22,
        part.box_platband_22, part.boxes_hand_bracket_22, part.boxes_hand_shell_22, part.boxes_hand_cut_22,
        part.box_wall_left_23, part.box_wall_right_23, part.box_wall_back_23, part.box_wall_forward_23,
        part.box_platband_23, part.boxes_hand_bracket_23, part.boxes_hand_shell_23, part.boxes_hand_cut_23,
        part.box_wall_left_24, part.box_wall_right_24, part.box_wall_back_24, part.box_wall_forward_24,
        part.box_platband_24, part.boxes_hand_bracket_24, part.boxes_hand_shell_24, part.boxes_hand_cut_24,
        part.box_wall_left_25, part.box_wall_right_25, part.box_wall_back_25, part.box_wall_forward_25,
        part.box_platband_25, part.boxes_hand_bracket_25, part.boxes_hand_shell_25, part.boxes_hand_cut_25,
        part.box_wall_left_26, part.box_wall_right_26, part.box_wall_back_26, part.box_wall_forward_26,
        part.box_platband_26, part.boxes_hand_bracket_26, part.boxes_hand_shell_26, part.boxes_hand_cut_26,
        part.box_wall_left_27, part.box_wall_right_27, part.box_wall_back_27, part.box_wall_forward_27,
        part.box_platband_27, part.boxes_hand_bracket_27, part.boxes_hand_shell_27, part.boxes_hand_cut_27,
        part.box_wall_left_28, part.box_wall_right_28, part.box_wall_back_28, part.box_wall_forward_28,
        part.box_platband_28, part.boxes_hand_bracket_28, part.boxes_hand_shell_28, part.boxes_hand_cut_28,
        part.box_wall_left_29, part.box_wall_right_29, part.box_wall_back_29, part.box_wall_forward_29,
        part.box_platband_29, part.boxes_hand_bracket_29, part.boxes_hand_shell_29, part.boxes_hand_cut_29,
        part.box_wall_left_30, part.box_wall_right_30, part.box_wall_back_30, part.box_wall_forward_30,
        part.box_platband_30, part.boxes_hand_bracket_30, part.boxes_hand_shell_30, part.boxes_hand_cut_30,
        part.box_wall_left_31, part.box_wall_right_31, part.box_wall_back_31, part.box_wall_forward_31,
        part.box_platband_31, part.boxes_hand_bracket_31, part.boxes_hand_shell_31, part.boxes_hand_cut_31,
        part.box_wall_left_32, part.box_wall_right_32, part.box_wall_back_32, part.box_wall_forward_32,
        part.box_platband_32, part.boxes_hand_bracket_32, part.boxes_hand_shell_32, part.boxes_hand_cut_32,
        part.box_wall_left_33, part.box_wall_right_33, part.box_wall_back_33, part.box_wall_forward_33,
        part.box_platband_33, part.boxes_hand_bracket_33, part.boxes_hand_shell_33, part.boxes_hand_cut_33,
        part.box_wall_left_34, part.box_wall_right_34, part.box_wall_back_34, part.box_wall_forward_34,
        part.box_platband_34, part.boxes_hand_bracket_34, part.boxes_hand_shell_34, part.boxes_hand_cut_34,
        part.box_wall_left_35, part.box_wall_right_35, part.box_wall_back_35, part.box_wall_forward_35,
        part.box_platband_35, part.boxes_hand_bracket_35, part.boxes_hand_shell_35, part.boxes_hand_cut_35,
        part.box_wall_left_36, part.box_wall_right_36, part.box_wall_back_36, part.box_wall_forward_36,
        part.box_platband_36, part.boxes_hand_bracket_36, part.boxes_hand_shell_36, part.boxes_hand_cut_36,
        part.box_wall_left_37, part.box_wall_right_37, part.box_wall_back_37, part.box_wall_forward_37,
        part.box_platband_37, part.boxes_hand_bracket_37, part.boxes_hand_shell_37, part.boxes_hand_cut_37,
        part.box_wall_left_38, part.box_wall_right_38, part.box_wall_back_38, part.box_wall_forward_38,
        part.box_platband_38, part.boxes_hand_bracket_38, part.boxes_hand_shell_38, part.boxes_hand_cut_38,
        part.box_wall_left_39, part.box_wall_right_39, part.box_wall_back_39, part.box_wall_forward_39,
        part.box_platband_39, part.boxes_hand_bracket_39, part.boxes_hand_shell_39, part.boxes_hand_cut_39,
        part.box_wall_left_40, part.box_wall_right_40, part.box_wall_back_40, part.box_wall_forward_40,
        part.box_platband_40, part.boxes_hand_bracket_40, part.boxes_hand_shell_40, part.boxes_hand_cut_40,
        part.box_wall_left_41, part.box_wall_right_41, part.box_wall_back_41, part.box_wall_forward_41,
        part.box_platband_41, part.boxes_hand_bracket_41, part.boxes_hand_shell_41, part.boxes_hand_cut_41,
        part.box_wall_left_42, part.box_wall_right_42, part.box_wall_back_42, part.box_wall_forward_42,
        part.box_platband_42, part.boxes_hand_bracket_42, part.boxes_hand_shell_42, part.boxes_hand_cut_42,
        part.box_wall_left_43, part.box_wall_right_43, part.box_wall_back_43, part.box_wall_forward_43,
        part.box_platband_43, part.boxes_hand_bracket_43, part.boxes_hand_shell_43, part.boxes_hand_cut_43,
        part.box_wall_left_44, part.box_wall_right_44, part.box_wall_back_44, part.box_wall_forward_44,
        part.box_platband_44, part.boxes_hand_bracket_44, part.boxes_hand_shell_44, part.boxes_hand_cut_44,
        part.box_wall_left_45, part.box_wall_right_45, part.box_wall_back_45, part.box_wall_forward_45,
        part.box_platband_45, part.boxes_hand_bracket_45, part.boxes_hand_shell_45, part.boxes_hand_cut_45,
        part.box_wall_left_46, part.box_wall_right_46, part.box_wall_back_46, part.box_wall_forward_46,
        part.box_platband_46, part.boxes_hand_bracket_46, part.boxes_hand_shell_46, part.boxes_hand_cut_46,
        part.box_wall_left_47, part.box_wall_right_47, part.box_wall_back_47, part.box_wall_forward_47,
        part.box_platband_47, part.boxes_hand_bracket_47, part.boxes_hand_shell_47, part.boxes_hand_cut_47,
        part.box_wall_left_48, part.box_wall_right_48, part.box_wall_back_48, part.box_wall_forward_48,
        part.box_platband_48, part.boxes_hand_bracket_48, part.boxes_hand_shell_48, part.boxes_hand_cut_48,
        part.box_wall_left_49, part.box_wall_right_49, part.box_wall_back_49, part.box_wall_forward_49,
        part.box_platband_49, part.boxes_hand_bracket_49, part.boxes_hand_shell_49, part.boxes_hand_cut_49,
        part.box_wall_left_50, part.box_wall_right_50, part.box_wall_back_50, part.box_wall_forward_50,
        part.box_platband_50, part.boxes_hand_bracket_50, part.boxes_hand_shell_50, part.boxes_hand_cut_50,
        part.box_wall_left_51, part.box_wall_right_51, part.box_wall_back_51, part.box_wall_forward_51,
        part.box_platband_51, part.boxes_hand_bracket_51, part.boxes_hand_shell_51, part.boxes_hand_cut_51,
        part.box_wall_left_52, part.box_wall_right_52, part.box_wall_back_52, part.box_wall_forward_52,
        part.box_platband_52, part.boxes_hand_bracket_52, part.boxes_hand_shell_52, part.boxes_hand_cut_52,
        part.box_wall_left_53, part.box_wall_right_53, part.box_wall_back_53, part.box_wall_forward_53,
        part.box_platband_53, part.boxes_hand_bracket_53, part.boxes_hand_shell_53, part.boxes_hand_cut_53,
        part.box_wall_left_54, part.box_wall_right_54, part.box_wall_back_54, part.box_wall_forward_54,
        part.box_platband_54, part.boxes_hand_bracket_54, part.boxes_hand_shell_54, part.boxes_hand_cut_54,
        part.box_wall_left_55, part.box_wall_right_55, part.box_wall_back_55, part.box_wall_forward_55,
        part.box_platband_55, part.boxes_hand_bracket_55, part.boxes_hand_shell_55, part.boxes_hand_cut_55,
        part.box_wall_left_56, part.box_wall_right_56, part.box_wall_back_56, part.box_wall_forward_56,
        part.box_platband_56, part.boxes_hand_bracket_56, part.boxes_hand_shell_56, part.boxes_hand_cut_56,
        part.box_wall_left_57, part.box_wall_right_57, part.box_wall_back_57, part.box_wall_forward_57,
        part.box_platband_57, part.boxes_hand_bracket_57, part.boxes_hand_shell_57, part.boxes_hand_cut_57,
        part.box_wall_left_58, part.box_wall_right_58, part.box_wall_back_58, part.box_wall_forward_58,
        part.box_platband_58, part.boxes_hand_bracket_58, part.boxes_hand_shell_58, part.boxes_hand_cut_58,
        part.box_wall_left_59, part.box_wall_right_59, part.box_wall_back_59, part.box_wall_forward_59,
        part.box_platband_59, part.boxes_hand_bracket_59, part.boxes_hand_shell_59, part.boxes_hand_cut_59,
        part.box_wall_left_60, part.box_wall_right_60, part.box_wall_back_60, part.box_wall_forward_60,
        part.box_platband_60, part.boxes_hand_bracket_60, part.boxes_hand_shell_60, part.boxes_hand_cut_60,
        part.box_wall_left_61, part.box_wall_right_61, part.box_wall_back_61, part.box_wall_forward_61,
        part.box_platband_61, part.boxes_hand_bracket_61, part.boxes_hand_shell_61, part.boxes_hand_cut_61,
        part.box_wall_left_62, part.box_wall_right_62, part.box_wall_back_62, part.box_wall_forward_62,
        part.box_platband_62, part.boxes_hand_bracket_62, part.boxes_hand_shell_62, part.boxes_hand_cut_62,
        part.box_wall_left_63, part.box_wall_right_63, part.box_wall_back_63, part.box_wall_forward_63,
        part.box_platband_63, part.boxes_hand_bracket_63, part.boxes_hand_shell_63, part.boxes_hand_cut_63,
        part.box_wall_left_64, part.box_wall_right_64, part.box_wall_back_64, part.box_wall_forward_64,
        part.box_platband_64, part.boxes_hand_bracket_64, part.boxes_hand_shell_64, part.boxes_hand_cut_64,
        part.box_wall_left_65, part.box_wall_right_65, part.box_wall_back_65, part.box_wall_forward_65,
        part.box_platband_65, part.boxes_hand_bracket_65, part.boxes_hand_shell_65, part.boxes_hand_cut_65,
        part.box_wall_left_66, part.box_wall_right_66, part.box_wall_back_66, part.box_wall_forward_66,
        part.box_platband_66, part.boxes_hand_bracket_66, part.boxes_hand_shell_66, part.boxes_hand_cut_66,
        part.box_wall_left_67, part.box_wall_right_67, part.box_wall_back_67, part.box_wall_forward_67,
        part.box_platband_67, part.boxes_hand_bracket_67, part.boxes_hand_shell_67, part.boxes_hand_cut_67,
        part.box_wall_left_68, part.box_wall_right_68, part.box_wall_back_68, part.box_wall_forward_68,
        part.box_platband_68, part.boxes_hand_bracket_68, part.boxes_hand_shell_68, part.boxes_hand_cut_68,
        part.box_wall_left_69, part.box_wall_right_69, part.box_wall_back_69, part.box_wall_forward_69,
        part.box_platband_69, part.boxes_hand_bracket_69, part.boxes_hand_shell_69, part.boxes_hand_cut_69,
        part.box_wall_left_70, part.box_wall_right_70, part.box_wall_back_70, part.box_wall_forward_70,
        part.box_platband_70, part.boxes_hand_bracket_70, part.boxes_hand_shell_70, part.boxes_hand_cut_70,
        part.box_wall_left_71, part.box_wall_right_71, part.box_wall_back_71, part.box_wall_forward_71,
        part.box_platband_71, part.boxes_hand_bracket_71, part.boxes_hand_shell_71, part.boxes_hand_cut_71,
        part.box_wall_left_72, part.box_wall_right_72, part.box_wall_back_72, part.box_wall_forward_72,
        part.box_platband_72, part.boxes_hand_bracket_72, part.boxes_hand_shell_72, part.boxes_hand_cut_72,
        part.box_wall_left_73, part.box_wall_right_73, part.box_wall_back_73, part.box_wall_forward_73,
        part.box_platband_73, part.boxes_hand_bracket_73, part.boxes_hand_shell_73, part.boxes_hand_cut_73,
        part.box_wall_left_74, part.box_wall_right_74, part.box_wall_back_74, part.box_wall_forward_74,
        part.box_platband_74, part.boxes_hand_bracket_74, part.boxes_hand_shell_74, part.boxes_hand_cut_74,
        part.box_wall_left_75, part.box_wall_right_75, part.box_wall_back_75, part.box_wall_forward_75,
        part.box_platband_75, part.boxes_hand_bracket_75, part.boxes_hand_shell_75, part.boxes_hand_cut_75,
        part.box_wall_left_76, part.box_wall_right_76, part.box_wall_back_76, part.box_wall_forward_76,
        part.box_platband_76, part.boxes_hand_bracket_76, part.boxes_hand_shell_76, part.boxes_hand_cut_76,
        part.box_wall_left_77, part.box_wall_right_77, part.box_wall_back_77, part.box_wall_forward_77,
        part.box_platband_77, part.boxes_hand_bracket_77, part.boxes_hand_shell_77, part.boxes_hand_cut_77,
        part.box_wall_left_78, part.box_wall_right_78, part.box_wall_back_78, part.box_wall_forward_78,
        part.box_platband_78, part.boxes_hand_bracket_78, part.boxes_hand_shell_78, part.boxes_hand_cut_78,
        part.box_wall_left_79, part.box_wall_right_79, part.box_wall_back_79, part.box_wall_forward_79,
        part.box_platband_79, part.boxes_hand_bracket_79, part.boxes_hand_shell_79, part.boxes_hand_cut_79,
        part.box_wall_left_80, part.box_wall_right_80, part.box_wall_back_80, part.box_wall_forward_80,
        part.box_platband_80, part.boxes_hand_bracket_80, part.boxes_hand_shell_80, part.boxes_hand_cut_80,
        part.box_wall_left_81, part.box_wall_right_81, part.box_wall_back_81, part.box_wall_forward_81,
        part.box_platband_81, part.boxes_hand_bracket_81, part.boxes_hand_shell_81, part.boxes_hand_cut_81,
        part.box_wall_left_82, part.box_wall_right_82, part.box_wall_back_82, part.box_wall_forward_82,
        part.box_platband_82, part.boxes_hand_bracket_82, part.boxes_hand_shell_82, part.boxes_hand_cut_82,
        part.box_wall_left_83, part.box_wall_right_83, part.box_wall_back_83, part.box_wall_forward_83,
        part.box_platband_83, part.boxes_hand_bracket_83, part.boxes_hand_shell_83, part.boxes_hand_cut_83,
        part.box_wall_left_84, part.box_wall_right_84, part.box_wall_back_84, part.box_wall_forward_84,
        part.box_platband_84, part.boxes_hand_bracket_84, part.boxes_hand_shell_84, part.boxes_hand_cut_84,
        part.box_wall_left_85, part.box_wall_right_85, part.box_wall_back_85, part.box_wall_forward_85,
        part.box_platband_85, part.boxes_hand_bracket_85, part.boxes_hand_shell_85, part.boxes_hand_cut_85,
        part.box_wall_left_86, part.box_wall_right_86, part.box_wall_back_86, part.box_wall_forward_86,
        part.box_platband_86, part.boxes_hand_bracket_86, part.boxes_hand_shell_86, part.boxes_hand_cut_86,
        part.box_wall_left_87, part.box_wall_right_87, part.box_wall_back_87, part.box_wall_forward_87,
        part.box_platband_87, part.boxes_hand_bracket_87, part.boxes_hand_shell_87, part.boxes_hand_cut_87,
        part.box_wall_left_88, part.box_wall_right_88, part.box_wall_back_88, part.box_wall_forward_88,
        part.box_platband_88, part.boxes_hand_bracket_88, part.boxes_hand_shell_88, part.boxes_hand_cut_88,
        part.box_wall_left_89, part.box_wall_right_89, part.box_wall_back_89, part.box_wall_forward_89,
        part.box_platband_89, part.boxes_hand_bracket_89, part.boxes_hand_shell_89, part.boxes_hand_cut_89,
        part.box_wall_left_90, part.box_wall_right_90, part.box_wall_back_90, part.box_wall_forward_90,
        part.box_platband_90, part.boxes_hand_bracket_90, part.boxes_hand_shell_90, part.boxes_hand_cut_90,
        part.rod1, part.rod2, part.rod3, part.rod4, part.rod5, part.rod6, part.rod7, part.rod8, part.rod9, part.rod10, part.rod11, part.rod12, part.rod13, part.rod14, part.rod15, part.rod16, part.rod17, part.rod18);
      // entresol_rack
      var geometryEntresolRack = new THREE.BoxGeometry(prop.entresolRackX, prop.entresolRackY, prop.entresolRackZ);
      part.entresol_rack_zero = new THREE.Mesh(geometryEntresolRack, material.fill); // для отображения номера, когда стоек нет
      part.entresol_rack_first = new THREE.Mesh(geometryEntresolRack, material.fill);
      part.entresol_rack_second = new THREE.Mesh(geometryEntresolRack, material.fill);
      part.entresol_rack_third = new THREE.Mesh(geometryEntresolRack, material.fill);
      part.entresol_rack_fourth = new THREE.Mesh(geometryEntresolRack, material.fill);
      part.entresol_rack_fifth = new THREE.Mesh(geometryEntresolRack, material.fill);
      // тени
      var geometryEntresolRackShadow = new THREE.BoxGeometry(prop.entresolRackX, prop.entresolRackY, 1);
      part.entresol_rack_shadow_first = new THREE.Mesh(geometryEntresolRackShadow, material.shadow);
      part.entresol_rack_shadow_second = new THREE.Mesh(geometryEntresolRackShadow, material.shadow);
      part.entresol_rack_shadow_third = new THREE.Mesh(geometryEntresolRackShadow, material.shadow);
      part.entresol_rack_shadow_fourth = new THREE.Mesh(geometryEntresolRackShadow, material.shadow);
      part.entresol_rack_shadow_fifth = new THREE.Mesh(geometryEntresolRackShadow, material.shadow);
      // lower_rack
      var geometryLowerRack = new THREE.BoxGeometry(prop.lowerRackX, prop.lowerRackY, prop.lowerRackZ);
      part.lower_rack_zero = new THREE.Mesh(geometryEntresolRack, material.fill); // для отображения номера, когда стоек нет
      part.lower_rack_first = new THREE.Mesh(geometryLowerRack, material.fill);
      part.lower_rack_second = new THREE.Mesh(geometryLowerRack, material.fill);
      part.lower_rack_third = new THREE.Mesh(geometryLowerRack, material.fill);
      part.lower_rack_fourth = new THREE.Mesh(geometryLowerRack, material.fill);
      part.lower_rack_fifth = new THREE.Mesh(geometryLowerRack, material.fill);
      // тени
      var geometryLowerRackShadow = new THREE.BoxGeometry(prop.lowerRackX, prop.lowerRackY, 1);
      part.lower_rack_shadow_first = new THREE.Mesh(geometryLowerRackShadow, material.shadow);
      part.lower_rack_shadow_second = new THREE.Mesh(geometryLowerRackShadow, material.shadow);
      part.lower_rack_shadow_third = new THREE.Mesh(geometryLowerRackShadow, material.shadow);
      part.lower_rack_shadow_fourth = new THREE.Mesh(geometryLowerRackShadow, material.shadow);
      part.lower_rack_shadow_fifth = new THREE.Mesh(geometryLowerRackShadow, material.shadow);
      // lower bar
      var geometryLowerBar7 = new THREE.BoxGeometry(prop.lowerBarX7, prop.lowerBarY, prop.lowerBarZ);
      part.lower_bar_7 = new THREE.Mesh(geometryLowerBar7, material.fill);
      var geometryLowerBar8 = new THREE.BoxGeometry(prop.lowerBarX8, prop.lowerBarY, prop.lowerBarZ);
      part.lower_bar_8 = new THREE.Mesh(geometryLowerBar8, material.fill);
      var geometryLowerBar9 = new THREE.BoxGeometry(prop.lowerBarX9, prop.lowerBarY, prop.lowerBarZ);
      part.lower_bar_9 = new THREE.Mesh(geometryLowerBar9, material.fill);
      var geometryLowerBar10 = new THREE.BoxGeometry(prop.lowerBarX10, prop.lowerBarY, prop.lowerBarZ);
      part.lower_bar_10 = new THREE.Mesh(geometryLowerBar10, material.fill);
      var geometryLowerBar11 = new THREE.BoxGeometry(prop.lowerBarX11, prop.lowerBarY, prop.lowerBarZ);
      part.lower_bar_11 = new THREE.Mesh(geometryLowerBar11, material.fill);
      var geometryLowerBar12 = new THREE.BoxGeometry(prop.lowerBarX12, prop.lowerBarY, prop.lowerBarZ);
      part.lower_bar_12 = new THREE.Mesh(geometryLowerBar12, material.fill);
      // entresol force
      var geometryEntresolForce1 = new THREE.BoxGeometry(prop.boxForceEntresolX1, prop.boxForceEntresolY, prop.boxForceEntresolZ);
      var geometryEntresolForce2 = new THREE.BoxGeometry(prop.boxForceEntresolX2, prop.boxForceEntresolY, prop.boxForceEntresolZ);
      var geometryEntresolForce3 = new THREE.BoxGeometry(prop.boxForceEntresolX3, prop.boxForceEntresolY, prop.boxForceEntresolZ);
      var geometryEntresolForce4 = new THREE.BoxGeometry(prop.boxForceEntresolX4, prop.boxForceEntresolY, prop.boxForceEntresolZ);
      var geometryEntresolForce5 = new THREE.BoxGeometry(prop.boxForceEntresolX5, prop.boxForceEntresolY, prop.boxForceEntresolZ);
      var geometryEntresolForce6 = new THREE.BoxGeometry(prop.boxForceEntresolX6, prop.boxForceEntresolY, prop.boxForceEntresolZ);
      part.box_force_1 = new THREE.Mesh(geometryEntresolForce1, material.wall);
      part.box_force_2 = new THREE.Mesh(geometryEntresolForce2, material.wall);
      part.box_force_3 = new THREE.Mesh(geometryEntresolForce3, material.wall);
      part.box_force_4 = new THREE.Mesh(geometryEntresolForce4, material.wall);
      part.box_force_5 = new THREE.Mesh(geometryEntresolForce5, material.wall);
      part.box_force_6 = new THREE.Mesh(geometryEntresolForce6, material.wall);
      // lower force
      var geometryLowerForce1 = new THREE.BoxGeometry(prop.boxForceLowerX1, prop.boxForceLowerY1, prop.boxForceLowerZ);
      var geometryLowerForce2 = new THREE.BoxGeometry(prop.boxForceLowerX2, prop.boxForceLowerY2, prop.boxForceLowerZ);
      var geometryLowerForce3 = new THREE.BoxGeometry(prop.boxForceLowerX3, prop.boxForceLowerY3, prop.boxForceLowerZ);
      var geometryLowerForce4 = new THREE.BoxGeometry(prop.boxForceLowerX4, prop.boxForceLowerY4, prop.boxForceLowerZ);
      var geometryLowerForce5 = new THREE.BoxGeometry(prop.boxForceLowerX5, prop.boxForceLowerY5, prop.boxForceLowerZ);
      var geometryLowerForce6 = new THREE.BoxGeometry(prop.boxForceLowerX6, prop.boxForceLowerY6, prop.boxForceLowerZ);
      var geometryLowerForce7 = new THREE.BoxGeometry(prop.boxForceLowerX7, prop.boxForceLowerY7, prop.boxForceLowerZ);
      var geometryLowerForce8 = new THREE.BoxGeometry(prop.boxForceLowerX8, prop.boxForceLowerY8, prop.boxForceLowerZ);
      var geometryLowerForce9 = new THREE.BoxGeometry(prop.boxForceLowerX9, prop.boxForceLowerY9, prop.boxForceLowerZ);
      var geometryLowerForce10 = new THREE.BoxGeometry(prop.boxForceLowerX10, prop.boxForceLowerY10, prop.boxForceLowerZ);
      var geometryLowerForce11 = new THREE.BoxGeometry(prop.boxForceLowerX11, prop.boxForceLowerY11, prop.boxForceLowerZ);
      var geometryLowerForce12 = new THREE.BoxGeometry(prop.boxForceLowerX12, prop.boxForceLowerY12, prop.boxForceLowerZ);
      part.box_force_7 = new THREE.Mesh(geometryLowerForce1, material.wall);
      part.box_force_8 = new THREE.Mesh(geometryLowerForce2, material.wall);
      part.box_force_9 = new THREE.Mesh(geometryLowerForce3, material.wall);
      part.box_force_10 = new THREE.Mesh(geometryLowerForce4, material.wall);
      part.box_force_11 = new THREE.Mesh(geometryLowerForce5, material.wall);
      part.box_force_12 = new THREE.Mesh(geometryLowerForce6, material.wall);
      part.box_force_13 = new THREE.Mesh(geometryLowerForce7, material.wall);
      part.box_force_14 = new THREE.Mesh(geometryLowerForce8, material.wall);
      part.box_force_15 = new THREE.Mesh(geometryLowerForce9, material.wall);
      part.box_force_16 = new THREE.Mesh(geometryLowerForce10, material.wall);
      part.box_force_17 = new THREE.Mesh(geometryLowerForce11, material.wall);
      part.box_force_18 = new THREE.Mesh(geometryLowerForce12, material.wall);
      // entresol doors
      var geometryBoxDoorOne1 = new THREE.BoxGeometry(prop.boxDoorOneX1, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorTwo1 = new THREE.BoxGeometry(prop.boxDoorTwoX1, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorOne2 = new THREE.BoxGeometry(prop.boxDoorOneX2, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorTwo2 = new THREE.BoxGeometry(prop.boxDoorTwoX2, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorOne3 = new THREE.BoxGeometry(prop.boxDoorOneX3, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorTwo3 = new THREE.BoxGeometry(prop.boxDoorTwoX3, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorOne4 = new THREE.BoxGeometry(prop.boxDoorOneX4, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorTwo4 = new THREE.BoxGeometry(prop.boxDoorTwoX4, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorOne5 = new THREE.BoxGeometry(prop.boxDoorOneX5, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorTwo5 = new THREE.BoxGeometry(prop.boxDoorTwoX5, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorOne6 = new THREE.BoxGeometry(prop.boxDoorOneX6, prop.entresolHeight, prop.thickness);
      var geometryBoxDoorTwo6 = new THREE.BoxGeometry(prop.boxDoorTwoX6, prop.entresolHeight, prop.thickness);

      var geometryBoxDoorOne7 = new THREE.BoxGeometry(prop.boxDoorOneX7, prop.boxForceLowerY1, prop.thickness);
      var geometryBoxDoorTwo7 = new THREE.BoxGeometry(prop.boxDoorTwoX7, prop.boxForceLowerY1, prop.thickness);
      var geometryBoxDoorOne8 = new THREE.BoxGeometry(prop.boxDoorOneX8, prop.boxForceLowerY2, prop.thickness);
      var geometryBoxDoorTwo8 = new THREE.BoxGeometry(prop.boxDoorTwoX8, prop.boxForceLowerY2, prop.thickness);
      var geometryBoxDoorOne9 = new THREE.BoxGeometry(prop.boxDoorOneX9, prop.boxForceLowerY3, prop.thickness);
      var geometryBoxDoorTwo9 = new THREE.BoxGeometry(prop.boxDoorTwoX9, prop.boxForceLowerY3, prop.thickness);
      var geometryBoxDoorOne10 = new THREE.BoxGeometry(prop.boxDoorOneX10, prop.boxForceLowerY4, prop.thickness);
      var geometryBoxDoorTwo10 = new THREE.BoxGeometry(prop.boxDoorTwoX10, prop.boxForceLowerY4, prop.thickness);
      var geometryBoxDoorOne11 = new THREE.BoxGeometry(prop.boxDoorOneX11, prop.boxForceLowerY5, prop.thickness);
      var geometryBoxDoorTwo11 = new THREE.BoxGeometry(prop.boxDoorTwoX11, prop.boxForceLowerY5, prop.thickness);
      var geometryBoxDoorOne12 = new THREE.BoxGeometry(prop.boxDoorOneX12, prop.boxForceLowerY6, prop.thickness);
      var geometryBoxDoorTwo12 = new THREE.BoxGeometry(prop.boxDoorTwoX12, prop.boxForceLowerY6, prop.thickness);
      var geometryBoxDoorOne13 = new THREE.BoxGeometry(prop.boxDoorOneX13, prop.boxForceLowerY7, prop.thickness);
      var geometryBoxDoorTwo13 = new THREE.BoxGeometry(prop.boxDoorTwoX13, prop.boxForceLowerY7, prop.thickness);
      var geometryBoxDoorOne14 = new THREE.BoxGeometry(prop.boxDoorOneX14, prop.boxForceLowerY8, prop.thickness);
      var geometryBoxDoorTwo14 = new THREE.BoxGeometry(prop.boxDoorTwoX14, prop.boxForceLowerY8, prop.thickness);
      var geometryBoxDoorOne15 = new THREE.BoxGeometry(prop.boxDoorOneX15, prop.boxForceLowerY9, prop.thickness);
      var geometryBoxDoorTwo15 = new THREE.BoxGeometry(prop.boxDoorTwoX15, prop.boxForceLowerY9, prop.thickness);
      var geometryBoxDoorOne16 = new THREE.BoxGeometry(prop.boxDoorOneX16, prop.boxForceLowerY10, prop.thickness);
      var geometryBoxDoorTwo16 = new THREE.BoxGeometry(prop.boxDoorTwoX16, prop.boxForceLowerY10, prop.thickness);
      var geometryBoxDoorOne17 = new THREE.BoxGeometry(prop.boxDoorOneX17, prop.boxForceLowerY11, prop.thickness);
      var geometryBoxDoorTwo17 = new THREE.BoxGeometry(prop.boxDoorTwoX17, prop.boxForceLowerY11, prop.thickness);
      var geometryBoxDoorOne18 = new THREE.BoxGeometry(prop.boxDoorOneX18, prop.boxForceLowerY12, prop.thickness);
      var geometryBoxDoorTwo18 = new THREE.BoxGeometry(prop.boxDoorTwoX18, prop.boxForceLowerY12, prop.thickness);

      part.box_door_one_1 = new THREE.Mesh(geometryBoxDoorOne1, material.facade);
      part.box_door_two_1_first = new THREE.Mesh(geometryBoxDoorTwo1, material.facade);
      part.box_door_two_1_second = new THREE.Mesh(geometryBoxDoorTwo1, material.facade);
      part.box_door_one_2 = new THREE.Mesh(geometryBoxDoorOne2, material.facade);
      part.box_door_two_2_first = new THREE.Mesh(geometryBoxDoorTwo2, material.facade);
      part.box_door_two_2_second = new THREE.Mesh(geometryBoxDoorTwo2, material.facade);
      part.box_door_one_3 = new THREE.Mesh(geometryBoxDoorOne3, material.facade);
      part.box_door_two_3_first = new THREE.Mesh(geometryBoxDoorTwo3, material.facade);
      part.box_door_two_3_second = new THREE.Mesh(geometryBoxDoorTwo3, material.facade);
      part.box_door_one_4 = new THREE.Mesh(geometryBoxDoorOne4, material.facade);
      part.box_door_two_4_first = new THREE.Mesh(geometryBoxDoorTwo4, material.facade);
      part.box_door_two_4_second = new THREE.Mesh(geometryBoxDoorTwo4, material.facade);
      part.box_door_one_5 = new THREE.Mesh(geometryBoxDoorOne5, material.facade);
      part.box_door_two_5_first = new THREE.Mesh(geometryBoxDoorTwo5, material.facade);
      part.box_door_two_5_second = new THREE.Mesh(geometryBoxDoorTwo5, material.facade);
      part.box_door_one_6 = new THREE.Mesh(geometryBoxDoorOne6, material.facade);
      part.box_door_two_6_first = new THREE.Mesh(geometryBoxDoorTwo6, material.facade);
      part.box_door_two_6_second = new THREE.Mesh(geometryBoxDoorTwo6, material.facade);
      part.box_door_one_7 = new THREE.Mesh(geometryBoxDoorOne7, material.facade);
      part.box_door_two_7_first = new THREE.Mesh(geometryBoxDoorTwo7, material.facade);
      part.box_door_two_7_second = new THREE.Mesh(geometryBoxDoorTwo7, material.facade);
      part.box_door_one_8 = new THREE.Mesh(geometryBoxDoorOne8, material.facade);
      part.box_door_two_8_first = new THREE.Mesh(geometryBoxDoorTwo8, material.facade);
      part.box_door_two_8_second = new THREE.Mesh(geometryBoxDoorTwo8, material.facade);
      part.box_door_one_9 = new THREE.Mesh(geometryBoxDoorOne9, material.facade);
      part.box_door_two_9_first = new THREE.Mesh(geometryBoxDoorTwo9, material.facade);
      part.box_door_two_9_second = new THREE.Mesh(geometryBoxDoorTwo9, material.facade);
      part.box_door_one_10 = new THREE.Mesh(geometryBoxDoorOne10, material.facade);
      part.box_door_two_10_first = new THREE.Mesh(geometryBoxDoorTwo10, material.facade);
      part.box_door_two_10_second = new THREE.Mesh(geometryBoxDoorTwo10, material.facade);
      part.box_door_one_11 = new THREE.Mesh(geometryBoxDoorOne11, material.facade);
      part.box_door_two_11_first = new THREE.Mesh(geometryBoxDoorTwo11, material.facade);
      part.box_door_two_11_second = new THREE.Mesh(geometryBoxDoorTwo11, material.facade);
      part.box_door_one_12 = new THREE.Mesh(geometryBoxDoorOne12, material.facade);
      part.box_door_two_12_first = new THREE.Mesh(geometryBoxDoorTwo12, material.facade);
      part.box_door_two_12_second = new THREE.Mesh(geometryBoxDoorTwo12, material.facade);
      part.box_door_one_13 = new THREE.Mesh(geometryBoxDoorOne13, material.facade);
      part.box_door_two_13_first = new THREE.Mesh(geometryBoxDoorTwo13, material.facade);
      part.box_door_two_13_second = new THREE.Mesh(geometryBoxDoorTwo13, material.facade);
      part.box_door_one_14 = new THREE.Mesh(geometryBoxDoorOne14, material.facade);
      part.box_door_two_14_first = new THREE.Mesh(geometryBoxDoorTwo14, material.facade);
      part.box_door_two_14_second = new THREE.Mesh(geometryBoxDoorTwo14, material.facade);
      part.box_door_one_15 = new THREE.Mesh(geometryBoxDoorOne15, material.facade);
      part.box_door_two_15_first = new THREE.Mesh(geometryBoxDoorTwo15, material.facade);
      part.box_door_two_15_second = new THREE.Mesh(geometryBoxDoorTwo15, material.facade);
      part.box_door_one_16 = new THREE.Mesh(geometryBoxDoorOne16, material.facade);
      part.box_door_two_16_first = new THREE.Mesh(geometryBoxDoorTwo16, material.facade);
      part.box_door_two_16_second = new THREE.Mesh(geometryBoxDoorTwo16, material.facade);
      part.box_door_one_17 = new THREE.Mesh(geometryBoxDoorOne17, material.facade);
      part.box_door_two_17_first = new THREE.Mesh(geometryBoxDoorTwo17, material.facade);
      part.box_door_two_17_second = new THREE.Mesh(geometryBoxDoorTwo17, material.facade);
      part.box_door_one_18 = new THREE.Mesh(geometryBoxDoorOne18, material.facade);
      part.box_door_two_18_first = new THREE.Mesh(geometryBoxDoorTwo18, material.facade);
      part.box_door_two_18_second = new THREE.Mesh(geometryBoxDoorTwo18, material.facade);

      var geometryBoxHandBracket = new THREE.BoxGeometry(prop.handBracketX, prop.handBracketY, prop.handBracketZ);
      var geomertyBoxHandShell = new THREE.CircleGeometry(prop.handShellRadius, prop.handShellSegments);

      part.box_hand_bracket_1_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_1_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_2_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_2_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_3_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_3_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_4_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_4_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_5_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_5_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_6_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_6_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_7_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_7_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_8_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_8_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_9_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_9_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_10_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_10_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_11_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_11_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_12_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_12_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_13_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_13_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_14_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_14_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_15_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_15_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_16_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_16_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_17_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_17_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_18_first = new THREE.Mesh(geometryBoxHandBracket, material.hand);
      part.box_hand_bracket_18_second = new THREE.Mesh(geometryBoxHandBracket, material.hand);

      part.box_hand_shell_1_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_1_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_2_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_2_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_3_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_3_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_4_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_4_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_5_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_5_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_6_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_6_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_7_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_7_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_8_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_8_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_9_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_9_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_10_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_10_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_11_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_11_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_12_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_12_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_13_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_13_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_14_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_14_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_15_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_15_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_16_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_16_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_17_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_17_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_18_first = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.box_hand_shell_18_second = new THREE.Mesh(geomertyBoxHandShell, material.hand);

      // полки для полок и ящиков
      // 1 секция, геометрия полок
      var geometryShelfBox1 = new THREE.BoxGeometry(prop.shelfX1, prop.shelfY1, prop.shelfZ1);
      part.shelf_1 = new THREE.Mesh(geometryShelfBox1, material.fill);
      part.shelf_2 = new THREE.Mesh(geometryShelfBox1, material.fill);
      part.shelf_3 = new THREE.Mesh(geometryShelfBox1, material.fill);
      part.shelf_4 = new THREE.Mesh(geometryShelfBox1, material.fill);
      part.shelf_5 = new THREE.Mesh(geometryShelfBox1, material.fill);
      var geometryShelfBox2 = new THREE.BoxGeometry(prop.shelfX2, prop.shelfY2, prop.shelfZ2);
      part.shelf_6 = new THREE.Mesh(geometryShelfBox2, material.fill);
      part.shelf_7 = new THREE.Mesh(geometryShelfBox2, material.fill);
      part.shelf_8 = new THREE.Mesh(geometryShelfBox2, material.fill);
      part.shelf_9 = new THREE.Mesh(geometryShelfBox2, material.fill);
      part.shelf_10 = new THREE.Mesh(geometryShelfBox2, material.fill);
      var geometryShelfBox3 = new THREE.BoxGeometry(prop.shelfX3, prop.shelfY3, prop.shelfZ3);
      part.shelf_11 = new THREE.Mesh(geometryShelfBox3, material.fill);
      part.shelf_12 = new THREE.Mesh(geometryShelfBox3, material.fill);
      part.shelf_13 = new THREE.Mesh(geometryShelfBox3, material.fill);
      part.shelf_14 = new THREE.Mesh(geometryShelfBox3, material.fill);
      part.shelf_15 = new THREE.Mesh(geometryShelfBox3, material.fill);
      var geometryShelfBox4 = new THREE.BoxGeometry(prop.shelfX4, prop.shelfY4, prop.shelfZ4);
      part.shelf_16 = new THREE.Mesh(geometryShelfBox4, material.fill);
      part.shelf_17 = new THREE.Mesh(geometryShelfBox4, material.fill);
      part.shelf_18 = new THREE.Mesh(geometryShelfBox4, material.fill);
      part.shelf_19 = new THREE.Mesh(geometryShelfBox4, material.fill);
      part.shelf_20 = new THREE.Mesh(geometryShelfBox4, material.fill);
      var geometryShelfBox5 = new THREE.BoxGeometry(prop.shelfX5, prop.shelfY5, prop.shelfZ5);
      part.shelf_21 = new THREE.Mesh(geometryShelfBox5, material.fill);
      part.shelf_22 = new THREE.Mesh(geometryShelfBox5, material.fill);
      part.shelf_23 = new THREE.Mesh(geometryShelfBox5, material.fill);
      part.shelf_24 = new THREE.Mesh(geometryShelfBox5, material.fill);
      part.shelf_25 = new THREE.Mesh(geometryShelfBox5, material.fill);
      var geometryShelfBox6 = new THREE.BoxGeometry(prop.shelfX6, prop.shelfY6, prop.shelfZ6);
      part.shelf_26 = new THREE.Mesh(geometryShelfBox6, material.fill);
      part.shelf_27 = new THREE.Mesh(geometryShelfBox6, material.fill);
      part.shelf_28 = new THREE.Mesh(geometryShelfBox6, material.fill);
      part.shelf_29 = new THREE.Mesh(geometryShelfBox6, material.fill);
      part.shelf_30 = new THREE.Mesh(geometryShelfBox6, material.fill);
      var geometryShelfBox7 = new THREE.BoxGeometry(prop.shelfX7, prop.shelfY7, prop.shelfZ7);
      part.shelf_31 = new THREE.Mesh(geometryShelfBox7, material.fill);
      part.shelf_32 = new THREE.Mesh(geometryShelfBox7, material.fill);
      part.shelf_33 = new THREE.Mesh(geometryShelfBox7, material.fill);
      part.shelf_34 = new THREE.Mesh(geometryShelfBox7, material.fill);
      part.shelf_35 = new THREE.Mesh(geometryShelfBox7, material.fill);
      var geometryShelfBox8 = new THREE.BoxGeometry(prop.shelfX8, prop.shelfY8, prop.shelfZ8);
      part.shelf_36 = new THREE.Mesh(geometryShelfBox8, material.fill);
      part.shelf_37 = new THREE.Mesh(geometryShelfBox8, material.fill);
      part.shelf_38 = new THREE.Mesh(geometryShelfBox8, material.fill);
      part.shelf_39 = new THREE.Mesh(geometryShelfBox8, material.fill);
      part.shelf_40 = new THREE.Mesh(geometryShelfBox8, material.fill);
      var geometryShelfBox9 = new THREE.BoxGeometry(prop.shelfX9, prop.shelfY9, prop.shelfZ9);
      part.shelf_41 = new THREE.Mesh(geometryShelfBox9, material.fill);
      part.shelf_42 = new THREE.Mesh(geometryShelfBox9, material.fill);
      part.shelf_43 = new THREE.Mesh(geometryShelfBox9, material.fill);
      part.shelf_44 = new THREE.Mesh(geometryShelfBox9, material.fill);
      part.shelf_45 = new THREE.Mesh(geometryShelfBox9, material.fill);
      var geometryShelfBox10 = new THREE.BoxGeometry(prop.shelfX10, prop.shelfY10, prop.shelfZ10);
      part.shelf_46 = new THREE.Mesh(geometryShelfBox10, material.fill);
      part.shelf_47 = new THREE.Mesh(geometryShelfBox10, material.fill);
      part.shelf_48 = new THREE.Mesh(geometryShelfBox10, material.fill);
      part.shelf_49 = new THREE.Mesh(geometryShelfBox10, material.fill);
      part.shelf_50 = new THREE.Mesh(geometryShelfBox10, material.fill);
      var geometryShelfBox11 = new THREE.BoxGeometry(prop.shelfX11, prop.shelfY11, prop.shelfZ11);
      part.shelf_51 = new THREE.Mesh(geometryShelfBox11, material.fill);
      part.shelf_52 = new THREE.Mesh(geometryShelfBox11, material.fill);
      part.shelf_53 = new THREE.Mesh(geometryShelfBox11, material.fill);
      part.shelf_54 = new THREE.Mesh(geometryShelfBox11, material.fill);
      part.shelf_55 = new THREE.Mesh(geometryShelfBox11, material.fill);
      var geometryShelfBox12 = new THREE.BoxGeometry(prop.shelfX12, prop.shelfY12, prop.shelfZ12);
      part.shelf_56 = new THREE.Mesh(geometryShelfBox12, material.fill);
      part.shelf_57 = new THREE.Mesh(geometryShelfBox12, material.fill);
      part.shelf_58 = new THREE.Mesh(geometryShelfBox12, material.fill);
      part.shelf_59 = new THREE.Mesh(geometryShelfBox12, material.fill);
      part.shelf_60 = new THREE.Mesh(geometryShelfBox12, material.fill);
      var geometryShelfBox13 = new THREE.BoxGeometry(prop.shelfX13, prop.shelfY13, prop.shelfZ13);
      part.shelf_61 = new THREE.Mesh(geometryShelfBox13, material.fill);
      part.shelf_62 = new THREE.Mesh(geometryShelfBox13, material.fill);
      part.shelf_63 = new THREE.Mesh(geometryShelfBox13, material.fill);
      part.shelf_64 = new THREE.Mesh(geometryShelfBox13, material.fill);
      part.shelf_65 = new THREE.Mesh(geometryShelfBox13, material.fill);
      var geometryShelfBox14 = new THREE.BoxGeometry(prop.shelfX14, prop.shelfY14, prop.shelfZ14);
      part.shelf_66 = new THREE.Mesh(geometryShelfBox14, material.fill);
      part.shelf_67 = new THREE.Mesh(geometryShelfBox14, material.fill);
      part.shelf_68 = new THREE.Mesh(geometryShelfBox14, material.fill);
      part.shelf_69 = new THREE.Mesh(geometryShelfBox14, material.fill);
      part.shelf_70 = new THREE.Mesh(geometryShelfBox14, material.fill);
      var geometryShelfBox15 = new THREE.BoxGeometry(prop.shelfX15, prop.shelfY15, prop.shelfZ15);
      part.shelf_71 = new THREE.Mesh(geometryShelfBox15, material.fill);
      part.shelf_72 = new THREE.Mesh(geometryShelfBox15, material.fill);
      part.shelf_73 = new THREE.Mesh(geometryShelfBox15, material.fill);
      part.shelf_74 = new THREE.Mesh(geometryShelfBox15, material.fill);
      part.shelf_75 = new THREE.Mesh(geometryShelfBox15, material.fill);
      var geometryShelfBox16 = new THREE.BoxGeometry(prop.shelfX16, prop.shelfY16, prop.shelfZ16);
      part.shelf_76 = new THREE.Mesh(geometryShelfBox16, material.fill);
      part.shelf_77 = new THREE.Mesh(geometryShelfBox16, material.fill);
      part.shelf_78 = new THREE.Mesh(geometryShelfBox16, material.fill);
      part.shelf_79 = new THREE.Mesh(geometryShelfBox16, material.fill);
      part.shelf_80 = new THREE.Mesh(geometryShelfBox16, material.fill);
      var geometryShelfBox17 = new THREE.BoxGeometry(prop.shelfX17, prop.shelfY17, prop.shelfZ17);
      part.shelf_81 = new THREE.Mesh(geometryShelfBox17, material.fill);
      part.shelf_82 = new THREE.Mesh(geometryShelfBox17, material.fill);
      part.shelf_83 = new THREE.Mesh(geometryShelfBox17, material.fill);
      part.shelf_84 = new THREE.Mesh(geometryShelfBox17, material.fill);
      part.shelf_85 = new THREE.Mesh(geometryShelfBox17, material.fill);
      var geometryShelfBox18 = new THREE.BoxGeometry(prop.shelfX18, prop.shelfY18, prop.shelfZ18);
      part.shelf_86 = new THREE.Mesh(geometryShelfBox18, material.fill);
      part.shelf_87 = new THREE.Mesh(geometryShelfBox18, material.fill);
      part.shelf_88 = new THREE.Mesh(geometryShelfBox18, material.fill);
      part.shelf_89 = new THREE.Mesh(geometryShelfBox18, material.fill);
      part.shelf_90 = new THREE.Mesh(geometryShelfBox18, material.fill);

      var geometryShelfShadowBox1 = new THREE.BoxGeometry(prop.shelfX1, prop.shelfY1, 1);
      var geometryShelfShadowBox2 = new THREE.BoxGeometry(prop.shelfX2, prop.shelfY2, 1);
      var geometryShelfShadowBox3 = new THREE.BoxGeometry(prop.shelfX3, prop.shelfY3, 1);
      var geometryShelfShadowBox4 = new THREE.BoxGeometry(prop.shelfX4, prop.shelfY4, 1);
      var geometryShelfShadowBox5 = new THREE.BoxGeometry(prop.shelfX5, prop.shelfY5, 1);
      var geometryShelfShadowBox6 = new THREE.BoxGeometry(prop.shelfX6, prop.shelfY6, 1);
      var geometryShelfShadowBox7 = new THREE.BoxGeometry(prop.shelfX7, prop.shelfY7, 1);
      var geometryShelfShadowBox8 = new THREE.BoxGeometry(prop.shelfX8, prop.shelfY8, 1);
      var geometryShelfShadowBox9 = new THREE.BoxGeometry(prop.shelfX9, prop.shelfY9, 1);
      var geometryShelfShadowBox10 = new THREE.BoxGeometry(prop.shelfX10, prop.shelfY10, 1);
      var geometryShelfShadowBox11 = new THREE.BoxGeometry(prop.shelfX11, prop.shelfY11, 1);
      var geometryShelfShadowBox12 = new THREE.BoxGeometry(prop.shelfX12, prop.shelfY12, 1);
      var geometryShelfShadowBox13 = new THREE.BoxGeometry(prop.shelfX13, prop.shelfY13, 1);
      var geometryShelfShadowBox14 = new THREE.BoxGeometry(prop.shelfX14, prop.shelfY14, 1);
      var geometryShelfShadowBox15 = new THREE.BoxGeometry(prop.shelfX15, prop.shelfY15, 1);
      var geometryShelfShadowBox16 = new THREE.BoxGeometry(prop.shelfX16, prop.shelfY16, 1);
      var geometryShelfShadowBox17 = new THREE.BoxGeometry(prop.shelfX17, prop.shelfY17, 1);
      var geometryShelfShadowBox18 = new THREE.BoxGeometry(prop.shelfX18, prop.shelfY18, 1);
      
      part.shelf_shadow_1 = new THREE.Mesh(geometryShelfShadowBox1, material.shadow);
      part.shelf_shadow_2 = new THREE.Mesh(geometryShelfShadowBox1, material.shadow);
      part.shelf_shadow_3 = new THREE.Mesh(geometryShelfShadowBox1, material.shadow);
      part.shelf_shadow_4 = new THREE.Mesh(geometryShelfShadowBox1, material.shadow);
      part.shelf_shadow_5 = new THREE.Mesh(geometryShelfShadowBox1, material.shadow);
      part.shelf_shadow_6 = new THREE.Mesh(geometryShelfShadowBox2, material.shadow);
      part.shelf_shadow_7 = new THREE.Mesh(geometryShelfShadowBox2, material.shadow);
      part.shelf_shadow_8 = new THREE.Mesh(geometryShelfShadowBox2, material.shadow);
      part.shelf_shadow_9 = new THREE.Mesh(geometryShelfShadowBox2, material.shadow);
      part.shelf_shadow_10 = new THREE.Mesh(geometryShelfShadowBox2, material.shadow);
      part.shelf_shadow_11 = new THREE.Mesh(geometryShelfShadowBox3, material.shadow);
      part.shelf_shadow_12 = new THREE.Mesh(geometryShelfShadowBox3, material.shadow);
      part.shelf_shadow_13 = new THREE.Mesh(geometryShelfShadowBox3, material.shadow);
      part.shelf_shadow_14 = new THREE.Mesh(geometryShelfShadowBox3, material.shadow);
      part.shelf_shadow_15 = new THREE.Mesh(geometryShelfShadowBox3, material.shadow);
      part.shelf_shadow_16 = new THREE.Mesh(geometryShelfShadowBox4, material.shadow);
      part.shelf_shadow_17 = new THREE.Mesh(geometryShelfShadowBox4, material.shadow);
      part.shelf_shadow_18 = new THREE.Mesh(geometryShelfShadowBox4, material.shadow);
      part.shelf_shadow_19 = new THREE.Mesh(geometryShelfShadowBox4, material.shadow);
      part.shelf_shadow_20 = new THREE.Mesh(geometryShelfShadowBox4, material.shadow);
      part.shelf_shadow_21 = new THREE.Mesh(geometryShelfShadowBox5, material.shadow);
      part.shelf_shadow_22 = new THREE.Mesh(geometryShelfShadowBox5, material.shadow);
      part.shelf_shadow_23 = new THREE.Mesh(geometryShelfShadowBox5, material.shadow);
      part.shelf_shadow_24 = new THREE.Mesh(geometryShelfShadowBox5, material.shadow);
      part.shelf_shadow_25 = new THREE.Mesh(geometryShelfShadowBox5, material.shadow);
      part.shelf_shadow_26 = new THREE.Mesh(geometryShelfShadowBox6, material.shadow);
      part.shelf_shadow_27 = new THREE.Mesh(geometryShelfShadowBox6, material.shadow);
      part.shelf_shadow_28 = new THREE.Mesh(geometryShelfShadowBox6, material.shadow);
      part.shelf_shadow_29 = new THREE.Mesh(geometryShelfShadowBox6, material.shadow);
      part.shelf_shadow_30 = new THREE.Mesh(geometryShelfShadowBox6, material.shadow);
      part.shelf_shadow_31 = new THREE.Mesh(geometryShelfShadowBox7, material.shadow);
      part.shelf_shadow_32 = new THREE.Mesh(geometryShelfShadowBox7, material.shadow);
      part.shelf_shadow_33 = new THREE.Mesh(geometryShelfShadowBox7, material.shadow);
      part.shelf_shadow_34 = new THREE.Mesh(geometryShelfShadowBox7, material.shadow);
      part.shelf_shadow_35 = new THREE.Mesh(geometryShelfShadowBox7, material.shadow);
      part.shelf_shadow_36 = new THREE.Mesh(geometryShelfShadowBox8, material.shadow);
      part.shelf_shadow_37 = new THREE.Mesh(geometryShelfShadowBox8, material.shadow);
      part.shelf_shadow_38 = new THREE.Mesh(geometryShelfShadowBox8, material.shadow);
      part.shelf_shadow_39 = new THREE.Mesh(geometryShelfShadowBox8, material.shadow);
      part.shelf_shadow_40 = new THREE.Mesh(geometryShelfShadowBox8, material.shadow);
      part.shelf_shadow_41 = new THREE.Mesh(geometryShelfShadowBox9, material.shadow);
      part.shelf_shadow_42 = new THREE.Mesh(geometryShelfShadowBox9, material.shadow);
      part.shelf_shadow_43 = new THREE.Mesh(geometryShelfShadowBox9, material.shadow);
      part.shelf_shadow_44 = new THREE.Mesh(geometryShelfShadowBox9, material.shadow);
      part.shelf_shadow_45 = new THREE.Mesh(geometryShelfShadowBox9, material.shadow);
      part.shelf_shadow_46 = new THREE.Mesh(geometryShelfShadowBox10, material.shadow);
      part.shelf_shadow_47 = new THREE.Mesh(geometryShelfShadowBox10, material.shadow);
      part.shelf_shadow_48 = new THREE.Mesh(geometryShelfShadowBox10, material.shadow);
      part.shelf_shadow_49 = new THREE.Mesh(geometryShelfShadowBox10, material.shadow);
      part.shelf_shadow_50 = new THREE.Mesh(geometryShelfShadowBox10, material.shadow);
      part.shelf_shadow_51 = new THREE.Mesh(geometryShelfShadowBox11, material.shadow);
      part.shelf_shadow_52 = new THREE.Mesh(geometryShelfShadowBox11, material.shadow);
      part.shelf_shadow_53 = new THREE.Mesh(geometryShelfShadowBox11, material.shadow);
      part.shelf_shadow_54 = new THREE.Mesh(geometryShelfShadowBox11, material.shadow);
      part.shelf_shadow_55 = new THREE.Mesh(geometryShelfShadowBox11, material.shadow);
      part.shelf_shadow_56 = new THREE.Mesh(geometryShelfShadowBox12, material.shadow);
      part.shelf_shadow_57 = new THREE.Mesh(geometryShelfShadowBox12, material.shadow);
      part.shelf_shadow_58 = new THREE.Mesh(geometryShelfShadowBox12, material.shadow);
      part.shelf_shadow_59 = new THREE.Mesh(geometryShelfShadowBox12, material.shadow);
      part.shelf_shadow_60 = new THREE.Mesh(geometryShelfShadowBox12, material.shadow);
      part.shelf_shadow_61 = new THREE.Mesh(geometryShelfShadowBox13, material.shadow);
      part.shelf_shadow_62 = new THREE.Mesh(geometryShelfShadowBox13, material.shadow);
      part.shelf_shadow_63 = new THREE.Mesh(geometryShelfShadowBox13, material.shadow);
      part.shelf_shadow_64 = new THREE.Mesh(geometryShelfShadowBox13, material.shadow);
      part.shelf_shadow_65 = new THREE.Mesh(geometryShelfShadowBox13, material.shadow);
      part.shelf_shadow_66 = new THREE.Mesh(geometryShelfShadowBox14, material.shadow);
      part.shelf_shadow_67 = new THREE.Mesh(geometryShelfShadowBox14, material.shadow);
      part.shelf_shadow_68 = new THREE.Mesh(geometryShelfShadowBox14, material.shadow);
      part.shelf_shadow_69 = new THREE.Mesh(geometryShelfShadowBox14, material.shadow);
      part.shelf_shadow_70 = new THREE.Mesh(geometryShelfShadowBox14, material.shadow);
      part.shelf_shadow_71 = new THREE.Mesh(geometryShelfShadowBox15, material.shadow);
      part.shelf_shadow_72 = new THREE.Mesh(geometryShelfShadowBox15, material.shadow);
      part.shelf_shadow_73 = new THREE.Mesh(geometryShelfShadowBox15, material.shadow);
      part.shelf_shadow_74 = new THREE.Mesh(geometryShelfShadowBox15, material.shadow);
      part.shelf_shadow_75 = new THREE.Mesh(geometryShelfShadowBox15, material.shadow);
      part.shelf_shadow_76 = new THREE.Mesh(geometryShelfShadowBox16, material.shadow);
      part.shelf_shadow_77 = new THREE.Mesh(geometryShelfShadowBox16, material.shadow);
      part.shelf_shadow_78 = new THREE.Mesh(geometryShelfShadowBox16, material.shadow);
      part.shelf_shadow_79 = new THREE.Mesh(geometryShelfShadowBox16, material.shadow);
      part.shelf_shadow_80 = new THREE.Mesh(geometryShelfShadowBox16, material.shadow);
      part.shelf_shadow_81 = new THREE.Mesh(geometryShelfShadowBox17, material.shadow);
      part.shelf_shadow_82 = new THREE.Mesh(geometryShelfShadowBox17, material.shadow);
      part.shelf_shadow_83 = new THREE.Mesh(geometryShelfShadowBox17, material.shadow);
      part.shelf_shadow_84 = new THREE.Mesh(geometryShelfShadowBox17, material.shadow);
      part.shelf_shadow_85 = new THREE.Mesh(geometryShelfShadowBox17, material.shadow);
      part.shelf_shadow_86 = new THREE.Mesh(geometryShelfShadowBox18, material.shadow);
      part.shelf_shadow_87 = new THREE.Mesh(geometryShelfShadowBox18, material.shadow);
      part.shelf_shadow_88 = new THREE.Mesh(geometryShelfShadowBox18, material.shadow);
      part.shelf_shadow_89 = new THREE.Mesh(geometryShelfShadowBox18, material.shadow);
      part.shelf_shadow_90 = new THREE.Mesh(geometryShelfShadowBox18, material.shadow);
      // детали ящиков, нижним основанием служит полка
      // 1 секция, геометрия ящиков
      var geometryboxWallSide1 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY1, prop.boxWallZ1);
      var geometryboxWallFront1 = new THREE.BoxGeometry(prop.shelfX1, prop.boxWallY1, prop.thickness);
      part.box_wall_left_1 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_right_1 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_back_1 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_forward_1 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_left_2 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_right_2 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_back_2 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_forward_2 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_left_3 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_right_3 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_back_3 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_forward_3 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_left_4 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_right_4 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_back_4 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_forward_4 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_left_5 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_right_5 = new THREE.Mesh(geometryboxWallSide1, material.fill);
      part.box_wall_back_5 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      part.box_wall_forward_5 = new THREE.Mesh(geometryboxWallFront1, material.fill);
      // 2 секция, геометрия ящиков
      var geometryboxWallSide2 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY2, prop.boxWallZ2);
      var geometryboxWallFront2 = new THREE.BoxGeometry(prop.shelfX2, prop.boxWallY2, prop.thickness);
      part.box_wall_left_6 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_right_6 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_back_6 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_forward_6 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_left_7 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_right_7 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_back_7 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_forward_7 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_left_8 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_right_8 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_back_8 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_forward_8 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_left_9 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_right_9 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_back_9 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_forward_9 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_left_10 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_right_10 = new THREE.Mesh(geometryboxWallSide2, material.fill);
      part.box_wall_back_10 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      part.box_wall_forward_10 = new THREE.Mesh(geometryboxWallFront2, material.fill);
      // 3 секция, геометрия ящиков
      var geometryboxWallSide3 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY3, prop.boxWallZ3);
      var geometryboxWallFront3 = new THREE.BoxGeometry(prop.shelfX3, prop.boxWallY3, prop.thickness);
      part.box_wall_left_11 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_right_11 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_back_11 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_forward_11 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_left_12 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_right_12 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_back_12 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_forward_12 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_left_13 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_right_13 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_back_13 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_forward_13 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_left_14 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_right_14 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_back_14 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_forward_14 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_left_15 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_right_15 = new THREE.Mesh(geometryboxWallSide3, material.fill);
      part.box_wall_back_15 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      part.box_wall_forward_15 = new THREE.Mesh(geometryboxWallFront3, material.fill);
      // 4 секция, геометрия ящиков
      var geometryboxWallSide4 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY4, prop.boxWallZ4);
      var geometryboxWallFront4 = new THREE.BoxGeometry(prop.shelfX4, prop.boxWallY4, prop.thickness);
      part.box_wall_left_16 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_right_16 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_back_16 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_forward_16 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_left_17 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_right_17 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_back_17 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_forward_17 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_left_18 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_right_18 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_back_18 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_forward_18 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_left_19 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_right_19 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_back_19 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_forward_19 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_left_20 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_right_20 = new THREE.Mesh(geometryboxWallSide4, material.fill);
      part.box_wall_back_20 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      part.box_wall_forward_20 = new THREE.Mesh(geometryboxWallFront4, material.fill);
      // 5 секция, геометрия ящиков
      var geometryboxWallSide5 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY5, prop.boxWallZ5);
      var geometryboxWallFront5 = new THREE.BoxGeometry(prop.shelfX5, prop.boxWallY5, prop.thickness);
      part.box_wall_left_21 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_right_21 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_back_21 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_forward_21 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_left_22 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_right_22 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_back_22 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_forward_22 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_left_23 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_right_23 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_back_23 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_forward_23 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_left_24 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_right_24 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_back_24 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_forward_24 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_left_25 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_right_25 = new THREE.Mesh(geometryboxWallSide5, material.fill);
      part.box_wall_back_25 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      part.box_wall_forward_25 = new THREE.Mesh(geometryboxWallFront5, material.fill);
      // 6 секция, геометрия ящиков
      var geometryboxWallSide6 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY6, prop.boxWallZ6);
      var geometryboxWallFront6 = new THREE.BoxGeometry(prop.shelfX6, prop.boxWallY6, prop.thickness);
      part.box_wall_left_26 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_right_26 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_back_26 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_forward_26 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_left_27 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_right_27 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_back_27 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_forward_27 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_left_28 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_right_28 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_back_28 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_forward_28 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_left_29 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_right_29 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_back_29 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_forward_29 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_left_30 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_right_30 = new THREE.Mesh(geometryboxWallSide6, material.fill);
      part.box_wall_back_30 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      part.box_wall_forward_30 = new THREE.Mesh(geometryboxWallFront6, material.fill);
      // 7 секция, геометрия ящиков
      var geometryboxWallSide7 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY7, prop.boxWallZ7);
      var geometryboxWallFront7 = new THREE.BoxGeometry(prop.shelfX7, prop.boxWallY7, prop.thickness);
      part.box_wall_left_31 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_right_31 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_back_31 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_forward_31 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_left_32 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_right_32 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_back_32 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_forward_32 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_left_33 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_right_33 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_back_33 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_forward_33 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_left_34 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_right_34 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_back_34 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_forward_34 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_left_35 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_right_35 = new THREE.Mesh(geometryboxWallSide7, material.fill);
      part.box_wall_back_35 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      part.box_wall_forward_35 = new THREE.Mesh(geometryboxWallFront7, material.fill);
      // 8 секция, геометрия ящиков
      var geometryboxWallSide8 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY8, prop.boxWallZ8);
      var geometryboxWallFront8 = new THREE.BoxGeometry(prop.shelfX8, prop.boxWallY8, prop.thickness);
      part.box_wall_left_36 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_right_36 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_back_36 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_forward_36 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_left_37 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_right_37 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_back_37 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_forward_37 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_left_38 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_right_38 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_back_38 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_forward_38 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_left_39 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_right_39 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_back_39 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_forward_39 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_left_40 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_right_40 = new THREE.Mesh(geometryboxWallSide8, material.fill);
      part.box_wall_back_40 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      part.box_wall_forward_40 = new THREE.Mesh(geometryboxWallFront8, material.fill);
      // 9 секция, геометрия ящиков
      var geometryboxWallSide9 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY9, prop.boxWallZ9);
      var geometryboxWallFront9 = new THREE.BoxGeometry(prop.shelfX9, prop.boxWallY9, prop.thickness);
      part.box_wall_left_41 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_right_41 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_back_41 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_forward_41 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_left_42 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_right_42 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_back_42 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_forward_42 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_left_43 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_right_43 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_back_43 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_forward_43 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_left_44 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_right_44 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_back_44 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_forward_44 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_left_45 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_right_45 = new THREE.Mesh(geometryboxWallSide9, material.fill);
      part.box_wall_back_45 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      part.box_wall_forward_45 = new THREE.Mesh(geometryboxWallFront9, material.fill);
      // 10 секция, геометрия ящиков
      var geometryboxWallSide10 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY10, prop.boxWallZ10);
      var geometryboxWallFront10 = new THREE.BoxGeometry(prop.shelfX10, prop.boxWallY10, prop.thickness);
      part.box_wall_left_46 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_right_46 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_back_46 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_forward_46 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_left_47 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_right_47 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_back_47 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_forward_47 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_left_48 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_right_48 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_back_48 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_forward_48 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_left_49 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_right_49 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_back_49 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_forward_49 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_left_50 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_right_50 = new THREE.Mesh(geometryboxWallSide10, material.fill);
      part.box_wall_back_50 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      part.box_wall_forward_50 = new THREE.Mesh(geometryboxWallFront10, material.fill);
      // 11 секция, геометрия ящиков
      var geometryboxWallSide11 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY11, prop.boxWallZ11);
      var geometryboxWallFront11 = new THREE.BoxGeometry(prop.shelfX11, prop.boxWallY11, prop.thickness);
      part.box_wall_left_51 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_right_51 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_back_51 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_forward_51 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_left_52 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_right_52 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_back_52 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_forward_52 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_left_53 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_right_53 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_back_53 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_forward_53 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_left_54 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_right_54 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_back_54 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_forward_54 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_left_55 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_right_55 = new THREE.Mesh(geometryboxWallSide11, material.fill);
      part.box_wall_back_55 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      part.box_wall_forward_55 = new THREE.Mesh(geometryboxWallFront11, material.fill);
      // 12 секция, геометрия ящиков
      var geometryboxWallSide12 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY12, prop.boxWallZ12);
      var geometryboxWallFront12 = new THREE.BoxGeometry(prop.shelfX12, prop.boxWallY12, prop.thickness);
      part.box_wall_left_56 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_right_56 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_back_56 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_forward_56 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_left_57 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_right_57 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_back_57 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_forward_57 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_left_58 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_right_58 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_back_58 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_forward_58 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_left_59 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_right_59 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_back_59 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_forward_59 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_left_60 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_right_60 = new THREE.Mesh(geometryboxWallSide12, material.fill);
      part.box_wall_back_60 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      part.box_wall_forward_60 = new THREE.Mesh(geometryboxWallFront12, material.fill);
      // 13 секция, геометрия ящиков
      var geometryboxWallSide13 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY13, prop.boxWallZ13);
      var geometryboxWallFront13 = new THREE.BoxGeometry(prop.boxWallX13, prop.boxWallY13, prop.thickness);
      part.box_wall_left_61 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_right_61 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_back_61 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_forward_61 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_left_62 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_right_62 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_back_62 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_forward_62 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_left_63 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_right_63 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_back_63 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_forward_63 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_left_64 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_right_64 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_back_64 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_forward_64 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_left_65 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_right_65 = new THREE.Mesh(geometryboxWallSide13, material.fill);
      part.box_wall_back_65 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      part.box_wall_forward_65 = new THREE.Mesh(geometryboxWallFront13, material.fill);
      // 14 секция, геометрия ящиков
      var geometryboxWallSide14 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY14, prop.boxWallZ14);
      var geometryboxWallFront14 = new THREE.BoxGeometry(prop.boxWallX14, prop.boxWallY14, prop.thickness);
      part.box_wall_left_66 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_right_66 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_back_66 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_forward_66 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_left_67 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_right_67 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_back_67 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_forward_67 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_left_68 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_right_68 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_back_68 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_forward_68 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_left_69 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_right_69 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_back_69 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_forward_69 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_left_70 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_right_70 = new THREE.Mesh(geometryboxWallSide14, material.fill);
      part.box_wall_back_70 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      part.box_wall_forward_70 = new THREE.Mesh(geometryboxWallFront14, material.fill);
      // 15 секция, геометрия ящиков
      var geometryboxWallSide15 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY15, prop.boxWallZ15);
      var geometryboxWallFront15 = new THREE.BoxGeometry(prop.boxWallX15, prop.boxWallY15, prop.thickness);
      part.box_wall_left_71 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_right_71 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_back_71 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_forward_71 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_left_72 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_right_72 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_back_72 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_forward_72 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_left_73 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_right_73 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_back_73 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_forward_73 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_left_74 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_right_74 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_back_74 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_forward_74 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_left_75 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_right_75 = new THREE.Mesh(geometryboxWallSide15, material.fill);
      part.box_wall_back_75 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      part.box_wall_forward_75 = new THREE.Mesh(geometryboxWallFront15, material.fill);
      // 16 секция, геометрия ящиков
      var geometryboxWallSide16 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY16, prop.boxWallZ16);
      var geometryboxWallFront16 = new THREE.BoxGeometry(prop.boxWallX16, prop.boxWallY16, prop.thickness);
      part.box_wall_left_76 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_right_76 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_back_76 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_forward_76 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_left_77 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_right_77 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_back_77 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_forward_77 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_left_78 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_right_78 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_back_78 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_forward_78 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_left_79 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_right_79 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_back_79 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_forward_79 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_left_80 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_right_80 = new THREE.Mesh(geometryboxWallSide16, material.fill);
      part.box_wall_back_80 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      part.box_wall_forward_80 = new THREE.Mesh(geometryboxWallFront16, material.fill);
      // 17 секция, геометрия ящиков
      var geometryboxWallSide17 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY17, prop.boxWallZ17);
      var geometryboxWallFront17 = new THREE.BoxGeometry(prop.boxWallX17, prop.boxWallY17, prop.thickness);
      part.box_wall_left_81 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_right_81 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_back_81 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_forward_81 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_left_82 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_right_82 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_back_82 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_forward_82 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_left_83 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_right_83 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_back_83 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_forward_83 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_left_84 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_right_84 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_back_84 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_forward_84 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_left_85 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_right_85 = new THREE.Mesh(geometryboxWallSide17, material.fill);
      part.box_wall_back_85 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      part.box_wall_forward_85 = new THREE.Mesh(geometryboxWallFront17, material.fill);
      // 18 секция, геометрия ящиков
      var geometryboxWallSide18 = new THREE.BoxGeometry(prop.thickness, prop.boxWallY18, prop.boxWallZ18);
      var geometryboxWallFront18 = new THREE.BoxGeometry(prop.boxWallX18, prop.boxWallY18, prop.thickness);
      part.box_wall_left_86 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_right_86 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_back_86 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_forward_86 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_left_87 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_right_87 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_back_87 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_forward_87 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_left_88 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_right_88 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_back_88 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_forward_88 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_left_89 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_right_89 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_back_89 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_forward_89 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_left_90 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_right_90 = new THREE.Mesh(geometryboxWallSide18, material.fill);
      part.box_wall_back_90 = new THREE.Mesh(geometryboxWallFront18, material.fill);
      part.box_wall_forward_90 = new THREE.Mesh(geometryboxWallFront18, material.fill);

      // геометрия наличников platband
      var geometryPlatband1 = new THREE.BoxGeometry(prop.boxPlatbandX1, prop.boxPlatbandY1, prop.boxPlatbandZ1);
      part.box_platband_1 = new THREE.Mesh(geometryPlatband1, material.facade);
      part.box_platband_2 = new THREE.Mesh(geometryPlatband1, material.facade);
      part.box_platband_3 = new THREE.Mesh(geometryPlatband1, material.facade);
      part.box_platband_4 = new THREE.Mesh(geometryPlatband1, material.facade);
      part.box_platband_5 = new THREE.Mesh(geometryPlatband1, material.facade);
      var geometryPlatband2 = new THREE.BoxGeometry(prop.boxPlatbandX2, prop.boxPlatbandY2, prop.boxPlatbandZ2);
      part.box_platband_6 = new THREE.Mesh(geometryPlatband2, material.facade);
      part.box_platband_7 = new THREE.Mesh(geometryPlatband2, material.facade);
      part.box_platband_8 = new THREE.Mesh(geometryPlatband2, material.facade);
      part.box_platband_9 = new THREE.Mesh(geometryPlatband2, material.facade);
      part.box_platband_10 = new THREE.Mesh(geometryPlatband2, material.facade);
      var geometryPlatband3 = new THREE.BoxGeometry(prop.boxPlatbandX3, prop.boxPlatbandY3, prop.boxPlatbandZ3);
      part.box_platband_11 = new THREE.Mesh(geometryPlatband3, material.facade);
      part.box_platband_12 = new THREE.Mesh(geometryPlatband3, material.facade);
      part.box_platband_13 = new THREE.Mesh(geometryPlatband3, material.facade);
      part.box_platband_14 = new THREE.Mesh(geometryPlatband3, material.facade);
      part.box_platband_15 = new THREE.Mesh(geometryPlatband3, material.facade);
      var geometryPlatband4 = new THREE.BoxGeometry(prop.boxPlatbandX4, prop.boxPlatbandY4, prop.boxPlatbandZ4);
      part.box_platband_16 = new THREE.Mesh(geometryPlatband4, material.facade);
      part.box_platband_17 = new THREE.Mesh(geometryPlatband4, material.facade);
      part.box_platband_18 = new THREE.Mesh(geometryPlatband4, material.facade);
      part.box_platband_19 = new THREE.Mesh(geometryPlatband4, material.facade);
      part.box_platband_20 = new THREE.Mesh(geometryPlatband4, material.facade);
      var geometryPlatband5 = new THREE.BoxGeometry(prop.boxPlatbandX5, prop.boxPlatbandY5, prop.boxPlatbandZ5);
      part.box_platband_21 = new THREE.Mesh(geometryPlatband5, material.facade);
      part.box_platband_22 = new THREE.Mesh(geometryPlatband5, material.facade);
      part.box_platband_23 = new THREE.Mesh(geometryPlatband5, material.facade);
      part.box_platband_24 = new THREE.Mesh(geometryPlatband5, material.facade);
      part.box_platband_25 = new THREE.Mesh(geometryPlatband5, material.facade);
      var geometryPlatband6 = new THREE.BoxGeometry(prop.boxPlatbandX6, prop.boxPlatbandY6, prop.boxPlatbandZ6);
      part.box_platband_26 = new THREE.Mesh(geometryPlatband6, material.facade);
      part.box_platband_27 = new THREE.Mesh(geometryPlatband6, material.facade);
      part.box_platband_28 = new THREE.Mesh(geometryPlatband6, material.facade);
      part.box_platband_29 = new THREE.Mesh(geometryPlatband6, material.facade);
      part.box_platband_30 = new THREE.Mesh(geometryPlatband6, material.facade);
      var geometryPlatband7 = new THREE.BoxGeometry(prop.boxPlatbandX7, prop.boxPlatbandY7, prop.boxPlatbandZ7);
      part.box_platband_31 = new THREE.Mesh(geometryPlatband7, material.facade);
      part.box_platband_32 = new THREE.Mesh(geometryPlatband7, material.facade);
      part.box_platband_33 = new THREE.Mesh(geometryPlatband7, material.facade);
      part.box_platband_34 = new THREE.Mesh(geometryPlatband7, material.facade);
      part.box_platband_35 = new THREE.Mesh(geometryPlatband7, material.facade);
      var geometryPlatband8 = new THREE.BoxGeometry(prop.boxPlatbandX8, prop.boxPlatbandY8, prop.boxPlatbandZ8);
      part.box_platband_36 = new THREE.Mesh(geometryPlatband8, material.facade);
      part.box_platband_37 = new THREE.Mesh(geometryPlatband8, material.facade);
      part.box_platband_38 = new THREE.Mesh(geometryPlatband8, material.facade);
      part.box_platband_39 = new THREE.Mesh(geometryPlatband8, material.facade);
      part.box_platband_40 = new THREE.Mesh(geometryPlatband8, material.facade);
      var geometryPlatband9 = new THREE.BoxGeometry(prop.boxPlatbandX9, prop.boxPlatbandY9, prop.boxPlatbandZ9);
      part.box_platband_41 = new THREE.Mesh(geometryPlatband9, material.facade);
      part.box_platband_42 = new THREE.Mesh(geometryPlatband9, material.facade);
      part.box_platband_43 = new THREE.Mesh(geometryPlatband9, material.facade);
      part.box_platband_44 = new THREE.Mesh(geometryPlatband9, material.facade);
      part.box_platband_45 = new THREE.Mesh(geometryPlatband9, material.facade);
      var geometryPlatband10 = new THREE.BoxGeometry(prop.boxPlatbandX10, prop.boxPlatbandY10, prop.boxPlatbandZ10);
      part.box_platband_46 = new THREE.Mesh(geometryPlatband10, material.facade);
      part.box_platband_47 = new THREE.Mesh(geometryPlatband10, material.facade);
      part.box_platband_48 = new THREE.Mesh(geometryPlatband10, material.facade);
      part.box_platband_49 = new THREE.Mesh(geometryPlatband10, material.facade);
      part.box_platband_50 = new THREE.Mesh(geometryPlatband10, material.facade);
      var geometryPlatband11 = new THREE.BoxGeometry(prop.boxPlatbandX11, prop.boxPlatbandY11, prop.boxPlatbandZ11);
      part.box_platband_51 = new THREE.Mesh(geometryPlatband11, material.facade);
      part.box_platband_52 = new THREE.Mesh(geometryPlatband11, material.facade);
      part.box_platband_53 = new THREE.Mesh(geometryPlatband11, material.facade);
      part.box_platband_54 = new THREE.Mesh(geometryPlatband11, material.facade);
      part.box_platband_55 = new THREE.Mesh(geometryPlatband11, material.facade);
      var geometryPlatband12 = new THREE.BoxGeometry(prop.boxPlatbandX12, prop.boxPlatbandY12, prop.boxPlatbandZ12);
      part.box_platband_56 = new THREE.Mesh(geometryPlatband12, material.facade);
      part.box_platband_57 = new THREE.Mesh(geometryPlatband12, material.facade);
      part.box_platband_58 = new THREE.Mesh(geometryPlatband12, material.facade);
      part.box_platband_59 = new THREE.Mesh(geometryPlatband12, material.facade);
      part.box_platband_60 = new THREE.Mesh(geometryPlatband12, material.facade);
      var geometryPlatband13 = new THREE.BoxGeometry(prop.boxPlatbandX13, prop.boxPlatbandY13, prop.boxPlatbandZ13);
      part.box_platband_61 = new THREE.Mesh(geometryPlatband13, material.facade);
      part.box_platband_62 = new THREE.Mesh(geometryPlatband13, material.facade);
      part.box_platband_63 = new THREE.Mesh(geometryPlatband13, material.facade);
      part.box_platband_64 = new THREE.Mesh(geometryPlatband13, material.facade);
      part.box_platband_65 = new THREE.Mesh(geometryPlatband13, material.facade);
      var geometryPlatband14 = new THREE.BoxGeometry(prop.boxPlatbandX14, prop.boxPlatbandY14, prop.boxPlatbandZ14);
      part.box_platband_66 = new THREE.Mesh(geometryPlatband14, material.facade);
      part.box_platband_67 = new THREE.Mesh(geometryPlatband14, material.facade);
      part.box_platband_68 = new THREE.Mesh(geometryPlatband14, material.facade);
      part.box_platband_69 = new THREE.Mesh(geometryPlatband14, material.facade);
      part.box_platband_70 = new THREE.Mesh(geometryPlatband14, material.facade);
      var geometryPlatband15 = new THREE.BoxGeometry(prop.boxPlatbandX15, prop.boxPlatbandY15, prop.boxPlatbandZ15);
      part.box_platband_71 = new THREE.Mesh(geometryPlatband15, material.facade);
      part.box_platband_72 = new THREE.Mesh(geometryPlatband15, material.facade);
      part.box_platband_73 = new THREE.Mesh(geometryPlatband15, material.facade);
      part.box_platband_74 = new THREE.Mesh(geometryPlatband15, material.facade);
      part.box_platband_75 = new THREE.Mesh(geometryPlatband15, material.facade);
      var geometryPlatband16 = new THREE.BoxGeometry(prop.boxPlatbandX16, prop.boxPlatbandY16, prop.boxPlatbandZ16);
      part.box_platband_76 = new THREE.Mesh(geometryPlatband16, material.facade);
      part.box_platband_77 = new THREE.Mesh(geometryPlatband16, material.facade);
      part.box_platband_78 = new THREE.Mesh(geometryPlatband16, material.facade);
      part.box_platband_79 = new THREE.Mesh(geometryPlatband16, material.facade);
      part.box_platband_80 = new THREE.Mesh(geometryPlatband16, material.facade);
      var geometryPlatband17 = new THREE.BoxGeometry(prop.boxPlatbandX17, prop.boxPlatbandY17, prop.boxPlatbandZ17);
      part.box_platband_81 = new THREE.Mesh(geometryPlatband17, material.facade);
      part.box_platband_82 = new THREE.Mesh(geometryPlatband17, material.facade);
      part.box_platband_83 = new THREE.Mesh(geometryPlatband17, material.facade);
      part.box_platband_84 = new THREE.Mesh(geometryPlatband17, material.facade);
      part.box_platband_85 = new THREE.Mesh(geometryPlatband17, material.facade);
      var geometryPlatband18 = new THREE.BoxGeometry(prop.boxPlatbandX18, prop.boxPlatbandY18, prop.boxPlatbandZ18);
      part.box_platband_86 = new THREE.Mesh(geometryPlatband18, material.facade);
      part.box_platband_87 = new THREE.Mesh(geometryPlatband18, material.facade);
      part.box_platband_88 = new THREE.Mesh(geometryPlatband18, material.facade);
      part.box_platband_89 = new THREE.Mesh(geometryPlatband18, material.facade);
      part.box_platband_90 = new THREE.Mesh(geometryPlatband18, material.facade);
      // ручки ящиков
      var geometryBoxesHandBracket = new THREE.BoxGeometry(prop.handBracketY, prop.handBracketX, prop.handBracketZ);
      var geometryHandShell = new THREE.CircleGeometry(prop.handShellRadius, prop.handShellSegments);
      var geometryHandCut = new THREE.CircleGeometry(prop.handCutRadius, prop.handCutSegments, prop.handCutThetaStart, prop.handCutThetaLength);
      part.boxes_hand_bracket_1 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_1 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_1 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_2 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_2 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_2 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_3 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_3 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_3 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_4 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_4 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_4 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_5 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_5 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_5 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_6 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_6 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_6 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_7 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_7 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_7 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_8 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_8 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_8 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_9 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_9 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_9 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_10 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_10 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_10 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_11 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_11 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_11 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_12 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_12 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_12 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_13 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_13 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_13 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_14 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_14 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_14 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_15 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_15 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_15 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_16 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_16 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_16 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_17 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_17 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_17 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_18 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_18 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_18 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_19 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_19 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_19 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_20 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_20 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_20 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_21 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_21 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_21 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_22 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_22 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_22 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_23 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_23 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_23 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_24 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_24 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_24 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_25 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_25 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_25 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_26 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_26 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_26 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_27 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_27 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_27 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_28 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_28 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_28 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_29 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_29 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_29 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_30 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_30 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_30 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_31 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_31 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_31 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_32 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_32 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_32 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_33 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_33 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_33 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_34 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_34 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_34 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_35 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_35 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_35 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_36 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_36 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_36 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_37 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_37 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_37 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_38 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_38 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_38 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_39 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_39 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_39 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_40 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_40 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_40 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_41 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_41 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_41 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_42 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_42 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_42 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_43 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_43 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_43 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_44 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_44 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_44 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_45 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_45 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_45 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_46 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_46 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_46 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_47 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_47 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_47 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_48 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_48 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_48 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_49 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_49 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_49 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_50 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_50 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_50 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_51 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_51 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_51 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_52 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_52 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_52 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_53 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_53 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_53 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_54 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_54 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_54 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_55 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_55 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_55 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_56 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_56 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_56 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_57 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_57 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_57 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_58 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_58 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_58 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_59 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_59 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_59 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_60 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_60 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_60 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_61 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_61 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_61 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_62 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_62 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_62 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_63 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_63 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_63 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_64 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_64 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_64 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_65 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_65 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_65 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_66 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_66 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_66 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_67 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_67 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_67 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_68 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_68 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_68 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_69 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_69 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_69 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_70 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_70 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_70 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_71 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_71 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_71 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_72 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_72 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_72 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_73 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_73 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_73 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_74 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_74 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_74 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_75 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_75 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_75 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_76 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_76 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_76 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_77 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_77 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_77 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_78 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_78 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_78 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_79 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_79 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_79 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_80 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_80 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_80 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_81 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_81 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_81 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_82 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_82 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_82 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_83 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_83 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_83 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_84 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_84 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_84 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_85 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_85 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_85 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_86 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_86 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_86 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_87 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_87 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_87 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_88 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_88 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_88 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_89 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_89 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_89 = new THREE.Mesh(geometryHandCut, material.hand);
      part.boxes_hand_bracket_90 = new THREE.Mesh(geometryBoxesHandBracket, material.hand);
      part.boxes_hand_shell_90 = new THREE.Mesh(geomertyBoxHandShell, material.hand);
      part.boxes_hand_cut_90 = new THREE.Mesh(geometryHandCut, material.hand);
      // штанга
      var geometryRodBox1 = new THREE.BoxGeometry(prop.rodX1, prop.thickness, prop.thickness);
      part.rod1 = new THREE.Mesh(geometryRodBox1, material.rod);
      var geometryRodBox2 = new THREE.BoxGeometry(prop.rodX2, prop.thickness, prop.thickness);
      part.rod2 = new THREE.Mesh(geometryRodBox2, material.rod);
      var geometryRodBox3 = new THREE.BoxGeometry(prop.rodX3, prop.thickness, prop.thickness);
      part.rod3 = new THREE.Mesh(geometryRodBox3, material.rod);
      var geometryRodBox4 = new THREE.BoxGeometry(prop.rodX4, prop.thickness, prop.thickness);
      part.rod4 = new THREE.Mesh(geometryRodBox4, material.rod);
      var geometryRodBox5 = new THREE.BoxGeometry(prop.rodX5, prop.thickness, prop.thickness);
      part.rod5 = new THREE.Mesh(geometryRodBox5, material.rod);
      var geometryRodBox6 = new THREE.BoxGeometry(prop.rodX6, prop.thickness, prop.thickness);
      part.rod6 = new THREE.Mesh(geometryRodBox6, material.rod);
      var geometryRodBox7 = new THREE.BoxGeometry(prop.rodX7, prop.thickness, prop.thickness);
      part.rod7 = new THREE.Mesh(geometryRodBox7, material.rod);
      var geometryRodBox8 = new THREE.BoxGeometry(prop.rodX8, prop.thickness, prop.thickness);
      part.rod8 = new THREE.Mesh(geometryRodBox8, material.rod);
      var geometryRodBox9 = new THREE.BoxGeometry(prop.rodX9, prop.thickness, prop.thickness);
      part.rod9 = new THREE.Mesh(geometryRodBox9, material.rod);
      var geometryRodBox10 = new THREE.BoxGeometry(prop.rodX10, prop.thickness, prop.thickness);
      part.rod10 = new THREE.Mesh(geometryRodBox10, material.rod);
      var geometryRodBox11 = new THREE.BoxGeometry(prop.rodX11, prop.thickness, prop.thickness);
      part.rod11 = new THREE.Mesh(geometryRodBox11, material.rod);
      var geometryRodBox12 = new THREE.BoxGeometry(prop.rodX12, prop.thickness, prop.thickness);
      part.rod12 = new THREE.Mesh(geometryRodBox12, material.rod);
      var geometryRodBox13 = new THREE.BoxGeometry(prop.rodX13, prop.thickness, prop.thickness);
      part.rod13 = new THREE.Mesh(geometryRodBox13, material.rod);
      var geometryRodBox14 = new THREE.BoxGeometry(prop.rodX14, prop.thickness, prop.thickness);
      part.rod14 = new THREE.Mesh(geometryRodBox14, material.rod);
      var geometryRodBox15 = new THREE.BoxGeometry(prop.rodX15, prop.thickness, prop.thickness);
      part.rod15 = new THREE.Mesh(geometryRodBox15, material.rod);
      var geometryRodBox16 = new THREE.BoxGeometry(prop.rodX16, prop.thickness, prop.thickness);
      part.rod16 = new THREE.Mesh(geometryRodBox16, material.rod);
      var geometryRodBox17 = new THREE.BoxGeometry(prop.rodX17, prop.thickness, prop.thickness);
      part.rod17 = new THREE.Mesh(geometryRodBox17, material.rod);
      var geometryRodBox18 = new THREE.BoxGeometry(prop.rodX18, prop.thickness, prop.thickness);
      part.rod18 = new THREE.Mesh(geometryRodBox18, material.rod);
    }

    var drawBox = function () {
      var sectionEntresolHeight = prop.height / 2 - prop.entresolHeight - 1.5 * prop.thickness;
      var sectionLowerHeight = prop.lowerRackY;

      if (stock.rack_l) {
        var resetWidth = -prop.width / 2 + prop.thickness;
      } else {
        var resetWidth = -prop.width / 2;
      }

      var arrBoxes = [];
      var arrNum = [part.textMesh1, part.textMesh2, part.textMesh3, part.textMesh4, part.textMesh5, part.textMesh6, part.textMesh7, part.textMesh8, part.textMesh9, part.textMesh10, part.textMesh11, part.textMesh12, part.textMesh13, part.textMesh14, part.textMesh15, part.textMesh16, part.textMesh17, part.textMesh18];
      if (prop.entresol_rack >= 0 && stock.entresol) {
        arrBoxes.push(part.entresol_rack_zero);
        if (stock.box_wall_1 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_1);
          prop.wall1_shift = prop.thickness;
        } else {
          prop.wall1_shift = 0;
        }
      }
      if (prop.entresol_rack >= 1 && stock.entresol) {
        group.add(part.entresol_rack_first, part.entresol_rack_shadow_first);
        arrBoxes.push(part.entresol_rack_first);
        if (stock.box_wall_2 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_2);
          prop.wall2_shift = prop.thickness;
        } else {
          prop.wall2_shift = 0;
        }
      }
      if (prop.entresol_rack >= 2 && stock.entresol) {
        group.add(part.entresol_rack_second, part.entresol_rack_shadow_second);
        arrBoxes.push(part.entresol_rack_second);
        if (stock.box_wall_3 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_3);
          prop.wall3_shift = prop.thickness;
        } else {
          prop.wall3_shift = 0;
        }
      }
      if (prop.entresol_rack >= 3 && stock.entresol) {
        group.add(part.entresol_rack_third, part.entresol_rack_shadow_third);
        arrBoxes.push(part.entresol_rack_third);
        if (stock.box_wall_4 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_4);
          prop.wall4_shift = prop.thickness;
        } else {
          prop.wall4_shift = 0;
        }
      }
      if (prop.entresol_rack >= 4 && stock.entresol) {
        group.add(part.entresol_rack_fourth, part.entresol_rack_shadow_fourth);
        arrBoxes.push(part.entresol_rack_fourth);
        if (stock.box_wall_5 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_5);
          prop.wall5_shift = prop.thickness;
        } else {
          prop.wall5_shift = 0;
        }
      }
      if (prop.entresol_rack >= 5 && stock.entresol) {
        group.add(part.entresol_rack_fifth, part.entresol_rack_shadow_fifth);
        arrBoxes.push(part.entresol_rack_fifth);
        if (stock.box_wall_6 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_6);
          prop.wall6_shift = prop.thickness;
        } else {
          prop.wall6_shift = 0;
        }
      }

      // силовые элементы антресоли
      if (prop.lower_rack >= 0) {
        arrBoxes.push(part.lower_rack_zero);
        if (stock.box_wall_7 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_7);
          prop.wall7_shift = prop.thickness;
        } else {
          prop.wall7_shift = 0;
        }
      }
      if (stock.box_split_7 && (prop.lower_rack >= 0)) {
        group.add(part.lower_bar_7);
        arrBoxes.push(part.lower_bar_7);
        if (stock.box_wall_13 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_13);
          prop.wall13_shift = prop.thickness;
        } else {
          prop.wall13_shift = 0;
        }
      }
      if (prop.lower_rack >= 1) {
        group.add(part.lower_rack_first, part.lower_rack_shadow_first);
        arrBoxes.push(part.lower_rack_first);
        if (stock.box_wall_8 && !stock.wall && !stock.wall_full) {
          prop.wall8_shift = prop.thickness;
        } else {
          prop.wall8_shift = 0;
        }
      }
      if (stock.box_split_8 && (prop.lower_rack >= 1)) {
        group.add(part.lower_bar_8);
        arrBoxes.push(part.lower_bar_8);
        if (stock.box_wall_14 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_14);
          prop.wall14_shift = prop.thickness;
        } else {
          prop.wall14_shift = 0;
        }
      }
      if (prop.lower_rack >= 2) {
        group.add(part.lower_rack_second, part.lower_rack_shadow_second);
        arrBoxes.push(part.lower_rack_second);
        if (stock.box_wall_9 && !stock.wall && !stock.wall_full) {
          prop.wall9_shift = prop.thickness;
        } else {
          prop.wall9_shift = 0;
        }
      }
      if (stock.box_split_9 && (prop.lower_rack >= 2)) {
        group.add(part.lower_bar_9);
        arrBoxes.push(part.lower_bar_9);
        if (stock.box_wall_15 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_15);
          prop.wall15_shift = prop.thickness;
        } else {
          prop.wall15_shift = 0;
        }
      }
      if (prop.lower_rack >= 3) {
        group.add(part.lower_rack_third, part.lower_rack_shadow_third);
        arrBoxes.push(part.lower_rack_third);
        if (stock.box_wall_10 && !stock.wall && !stock.wall_full) {
          prop.wall10_shift = prop.thickness;
        } else {
          prop.wall10_shift = 0;
        }
      }
      if (stock.box_split_10 && (prop.lower_rack >= 3)) {
        group.add(part.lower_bar_10);
        arrBoxes.push(part.lower_bar_10);
        if (stock.box_wall_16 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_16);
          prop.wall16_shift = prop.thickness;
        } else {
          prop.wall16_shift = 0;
        }
      }
      if (prop.lower_rack >= 4) {
        group.add(part.lower_rack_fourth, part.lower_rack_shadow_fourth);
        arrBoxes.push(part.lower_rack_fourth);
        if (stock.box_wall_11 && !stock.wall && !stock.wall_full) {
          prop.wall11_shift = prop.thickness;
        } else {
          prop.wall11_shift = 0;
        }
      }
      if (stock.box_split_11 && (prop.lower_rack >= 4)) {
        group.add(part.lower_bar_11);
        arrBoxes.push(part.lower_bar_11);
        if (stock.box_wall_17 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_17);
          prop.wall17_shift = prop.thickness;
        } else {
          prop.wall17_shift = 0;
        }
      }
      if (prop.lower_rack >= 5) {
        group.add(part.lower_rack_fifth, part.lower_rack_shadow_fifth);
        arrBoxes.push(part.lower_rack_fifth);
        if (stock.box_wall_12 && !stock.wall && !stock.wall_full) {
          prop.wall12_shift = prop.thickness;
        } else {
          prop.wall12_shift = 0;
        }
      }
      if (stock.box_split_12 && (prop.lower_rack >= 5)) {
        group.add(part.lower_bar_12);
        arrBoxes.push(part.lower_bar_12);
        if (stock.box_wall_18 && !stock.wall && !stock.wall_full) {
          group.add(part.box_force_18);
          prop.wall18_shift = prop.thickness;
        } else {
          prop.wall18_shift = 0;
        }
      }

      // запоминаю размеры, чтобы избавиться от бага с дёрганьем
      var saveWidth = {
        width1: +prop.box_width_1,
        width2: +prop.box_width_2,
        width3: +prop.box_width_3,
        width4: +prop.box_width_4,
        width5: +prop.box_width_5,

        width7: +prop.box_width_7,
        width8: +prop.box_width_8,
        width9: +prop.box_width_9,
        width10: +prop.box_width_10,
        width11: +prop.box_width_11,

        width13: +prop.box_width_13,
        width14: +prop.box_width_14,
        width15: +prop.box_width_15,
        width16: +prop.box_width_16,
        width17: +prop.box_width_17,
      }

      if (prop.box_width_set_1) {
        prop.box_width_1 = +prop.box_width_set_1;
      }
      if (prop.box_width_set_2) {
        prop.box_width_2 = +prop.box_width_set_2;
      }
      if (prop.box_width_set_3) {
        prop.box_width_3 = +prop.box_width_set_3;
      }
      if (prop.box_width_set_4) {
        prop.box_width_4 = +prop.box_width_set_4;
      }
      if (prop.box_width_set_5) {
        prop.box_width_5 = +prop.box_width_set_5;
      }

      if (prop.box_width_set_7) {
        prop.box_width_7 = +prop.box_width_set_7;
      }
      if (prop.box_width_set_8) {
        prop.box_width_8 = +prop.box_width_set_8;
      }
      if (prop.box_width_set_9) {
        prop.box_width_9 = +prop.box_width_set_9;
      }
      if (prop.box_width_set_10) {
        prop.box_width_10 = +prop.box_width_set_10;
      }
      if (prop.box_width_set_11) {
        prop.box_width_11 = +prop.box_width_set_11;
      }

      if (prop.box_width_set_13) {
        prop.box_width_13 = +prop.box_width_set_13;
      }
      if (prop.box_width_set_14) {
        prop.box_width_14 = +prop.box_width_set_14;
      }
      if (prop.box_width_set_15) {
        prop.box_width_15 = +prop.box_width_set_15;
      }
      if (prop.box_width_set_16) {
        prop.box_width_16 = +prop.box_width_set_16;
      }
      if (prop.box_width_set_17) {
        prop.box_width_17 = +prop.box_width_set_17;
      }

      if (!stock.box_split_7) {
        prop.box_width_13 = 0;
      }
      if (!stock.box_split_8) {
        prop.box_width_14 = 0;
      }
      if (!stock.box_split_9) {
        prop.box_width_15 = 0;
      }
      if (!stock.box_split_10) {
        prop.box_width_16 = 0;
      }
      if (!stock.box_split_11) {
        prop.box_width_17 = 0;
      }
      if (!stock.box_split_12) {
        prop.box_width_18 = 0;
      }

      // ставлю позиции для всех стоек rack
      part.entresol_rack_first.position.set(resetWidth + +prop.box_width_1 + 0.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, 0);
      part.entresol_rack_shadow_first.position.set(resetWidth + +prop.box_width_1 + 0.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2);

      part.entresol_rack_second.position.set(resetWidth + prop.box_width_1 + prop.box_width_2 + 1.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, 0);
      part.entresol_rack_shadow_second.position.set(resetWidth + prop.box_width_1 + prop.box_width_2 + 1.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2);

      part.entresol_rack_third.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + 2.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, 0);
      part.entresol_rack_shadow_third.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + 2.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2);

      part.entresol_rack_fourth.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + 3.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, 0);
      part.entresol_rack_shadow_fourth.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + 3.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2);

      part.entresol_rack_fifth.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + 4.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, 0);
      part.entresol_rack_shadow_fifth.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + 4.5 * prop.thickness,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2);


      part.entresol_rack_first.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.entresol_rack_second.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.entresol_rack_third.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.entresol_rack_fourth.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.entresol_rack_fifth.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.entresol_rack_shadow_first.position.z -= prop.door_shift;
      part.entresol_rack_shadow_second.position.z -= prop.door_shift;
      part.entresol_rack_shadow_third.position.z -= prop.door_shift;
      part.entresol_rack_shadow_fourth.position.z -= prop.door_shift;
      part.entresol_rack_shadow_fifth.position.z -= prop.door_shift;

      // силовые элементы антресоли
      part.box_force_1.position.set(resetWidth + +prop.box_width_1 - prop.boxForceEntresolX1 / 2,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, -prop.depth / 2 + prop.thickness / 2);

      part.box_force_2.position.set(resetWidth + prop.box_width_1 + prop.box_width_2 + 1 * prop.thickness - prop.boxForceEntresolX2 / 2,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, -prop.depth / 2 + prop.thickness / 2);

      part.box_force_3.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + 2 * prop.thickness - prop.boxForceEntresolX3 / 2,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, -prop.depth / 2 + prop.thickness / 2);

      part.box_force_4.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + 3 * prop.thickness - prop.boxForceEntresolX4 / 2,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, -prop.depth / 2 + prop.thickness / 2);

      part.box_force_5.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + 4 * prop.thickness - prop.boxForceEntresolX5 / 2,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, -prop.depth / 2 + prop.thickness / 2);

      part.box_force_6.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 + 5 * prop.thickness - prop.boxForceEntresolX6 / 2,
        sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, -prop.depth / 2 + prop.thickness / 2);

      // console.log(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + 2.5 * prop.thickness);

      part.lower_rack_first.position.set(resetWidth + +prop.box_width_7 + 0.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, 0);
      part.lower_rack_shadow_first.position.set(resetWidth + +prop.box_width_7 + 0.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, prop.depth / 2);
      part.lower_rack_first.position.y += prop.legsHeight;
      part.lower_rack_shadow_first.position.y += prop.legsHeight;

      part.lower_rack_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + 1.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, 0);
      part.lower_rack_shadow_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + 1.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, prop.depth / 2);
      part.lower_rack_second.position.y += prop.legsHeight;
      part.lower_rack_shadow_second.position.y += prop.legsHeight;

      part.lower_rack_third.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + 2.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, 0);
      part.lower_rack_shadow_third.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + 2.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, prop.depth / 2);
      part.lower_rack_third.position.y += prop.legsHeight;
      part.lower_rack_shadow_third.position.y += prop.legsHeight;

      part.lower_rack_fourth.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + 3.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, 0);
      part.lower_rack_shadow_fourth.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + 3.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, prop.depth / 2);
      part.lower_rack_fourth.position.y += prop.legsHeight;
      part.lower_rack_shadow_fourth.position.y += prop.legsHeight;

      part.lower_rack_fifth.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + 4.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, 0);
      part.lower_rack_shadow_fifth.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + 4.5 * prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.lowerRackY / 2 + prop.thickness, prop.depth / 2);
      part.lower_rack_fifth.position.y += prop.legsHeight;
      part.lower_rack_shadow_fifth.position.y += prop.legsHeight;

      part.lower_rack_first.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_rack_second.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_rack_third.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_rack_fourth.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_rack_fifth.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_rack_shadow_first.position.z -= prop.door_shift;
      part.lower_rack_shadow_second.position.z -= prop.door_shift;
      part.lower_rack_shadow_third.position.z -= prop.door_shift;
      part.lower_rack_shadow_fourth.position.z -= prop.door_shift;
      part.lower_rack_shadow_fifth.position.z -= prop.door_shift;

      // позиции перегородок
      // console.log(prop.box_width_7, prop.box_width_8, prop.box_width_9);
      part.lower_bar_7.position.set(resetWidth + +prop.box_width_7 - prop.lowerBarX7 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_13) + prop.thickness, 0);
      part.lower_bar_7.position.y += prop.legsHeight;

      part.lower_bar_8.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.thickness - prop.lowerBarX8 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_14) + prop.thickness, 0);
      part.lower_bar_8.position.y += prop.legsHeight;

      part.lower_bar_9.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + 2 * prop.thickness - prop.lowerBarX9 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_15) + prop.thickness, 0);
      part.lower_bar_9.position.y += prop.legsHeight;

      part.lower_bar_10.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + 3 * prop.thickness - prop.lowerBarX10 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_16) + prop.thickness, 0);
      part.lower_bar_10.position.y += prop.legsHeight;

      part.lower_bar_11.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + 4 * prop.thickness - prop.lowerBarX11 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_17) + prop.thickness, 0);
      part.lower_bar_11.position.y += prop.legsHeight;

      part.lower_bar_12.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 + 5 * prop.thickness - prop.lowerBarX12 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_18) + prop.thickness, 0);
      part.lower_bar_12.position.y += prop.legsHeight;

      part.lower_bar_7.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_bar_8.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_bar_9.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_bar_10.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_bar_11.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;
      part.lower_bar_12.position.z -= prop.door_shift / 2 - prop.wall_shift / 2;

      // силовые элементы низа
      part.box_force_7.position.set(resetWidth + +prop.box_width_7 - prop.boxForceLowerX1 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_7.position.y += prop.legsHeight;
      if (stock.box_split_7) {
        part.box_force_7.position.y -= prop.halfThickness / 2;
      }

      part.box_force_13.position.set(resetWidth + prop.box_width_7 - prop.boxForceLowerX7 / 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_13.position.y += prop.legsHeight;
      if (stock.box_split_7) {
        part.box_force_13.position.y -= prop.halfThickness / 2;
      }

      part.box_force_8.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxForceLowerX2 / 2 + prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_8.position.y += prop.legsHeight;
      if (stock.box_split_8) {
        part.box_force_8.position.y -= prop.halfThickness / 2;
      }

      part.box_force_14.position.set(resetWidth + prop.box_width_7 + +prop.box_width_8 - prop.boxForceLowerX8 / 2 + prop.thickness,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_14.position.y += prop.legsHeight;
      if (stock.box_split_8) {
        part.box_force_14.position.y -= prop.halfThickness / 2;
      }

      part.box_force_9.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxForceLowerX3 / 2 + prop.thickness * 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_9.position.y += prop.legsHeight;
      if (stock.box_split_9) {
        part.box_force_9.position.y -= prop.halfThickness / 2;
      }

      part.box_force_15.position.set(resetWidth + prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxForceLowerX9 / 2 + prop.thickness * 2,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_15.position.y += prop.legsHeight;
      if (stock.box_split_9) {
        part.box_force_15.position.y -= prop.halfThickness / 2;
      }

      part.box_force_10.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxForceLowerX4 / 2 + prop.thickness * 3,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_10.position.y += prop.legsHeight;
      if (stock.box_split_10) {
        part.box_force_10.position.y -= prop.halfThickness / 2;
      }

      part.box_force_16.position.set(resetWidth + prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxForceLowerX10 / 2 + prop.thickness * 3,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_16.position.y += prop.legsHeight;
      if (stock.box_split_10) {
        part.box_force_16.position.y -= prop.halfThickness / 2;
      }

      part.box_force_11.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxForceLowerX5 / 2 + prop.thickness * 4,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_11.position.y += prop.legsHeight;
      if (stock.box_split_11) {
        part.box_force_11.position.y -= prop.halfThickness / 2;
      }

      part.box_force_17.position.set(resetWidth + prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxForceLowerX11 / 2 + prop.thickness * 4,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_17.position.y += prop.legsHeight;
      if (stock.box_split_11) {
        part.box_force_17.position.y -= prop.halfThickness / 2;
      }

      part.box_force_12.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxForceLowerX6 / 2 + prop.thickness * 5,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_12.position.y += prop.legsHeight;
      if (stock.box_split_12) {
        part.box_force_12.position.y -= prop.halfThickness / 2;
      }

      part.box_force_18.position.set(resetWidth + prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxForceLowerX12 / 2 + prop.thickness * 5,
        -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, -prop.depth / 2 + prop.thickness / 2);
      part.box_force_18.position.y += prop.legsHeight;
      if (stock.box_split_12) {
        part.box_force_18.position.y -= prop.halfThickness / 2;
      }

      // DOORS and FILL ENTRESOL
      var arrShelf = [part.shelf_1, part.shelf_2, part.shelf_3, part.shelf_4, part.shelf_5, part.shelf_6, part.shelf_7, part.shelf_8, part.shelf_9, part.shelf_10, part.shelf_11, part.shelf_12, part.shelf_13, part.shelf_14, part.shelf_15, part.shelf_16, part.shelf_17, part.shelf_18, part.shelf_19, part.shelf_20, part.shelf_21, part.shelf_22, part.shelf_23, part.shelf_24, part.shelf_25, part.shelf_26, part.shelf_27, part.shelf_28, part.shelf_29, part.shelf_30, part.shelf_31, part.shelf_32, part.shelf_33, part.shelf_34, part.shelf_35, part.shelf_36, part.shelf_37, part.shelf_38, part.shelf_39, part.shelf_40, part.shelf_41, part.shelf_42, part.shelf_43, part.shelf_44, part.shelf_45, part.shelf_46, part.shelf_47, part.shelf_48, part.shelf_49, part.shelf_50, part.shelf_51, part.shelf_52, part.shelf_53, part.shelf_54, part.shelf_55, part.shelf_56, part.shelf_57, part.shelf_58, part.shelf_59, part.shelf_60, part.shelf_61, part.shelf_62, part.shelf_63, part.shelf_64, part.shelf_65,
      part.shelf_66, part.shelf_67, part.shelf_68, part.shelf_69, part.shelf_70,
      part.shelf_71, part.shelf_72, part.shelf_73, part.shelf_74, part.shelf_75,
      part.shelf_76, part.shelf_77, part.shelf_78, part.shelf_79, part.shelf_80,
      part.shelf_81, part.shelf_82, part.shelf_83, part.shelf_84, part.shelf_85,
      part.shelf_86, part.shelf_87, part.shelf_88, part.shelf_89, part.shelf_90];

      var arrShelfShadow = [part.shelf_shadow_1, part.shelf_shadow_2, part.shelf_shadow_3, part.shelf_shadow_4, part.shelf_shadow_5,
      part.shelf_shadow_6, part.shelf_shadow_7, part.shelf_shadow_8, part.shelf_shadow_9, part.shelf_shadow_10,
      part.shelf_shadow_11, part.shelf_shadow_12, part.shelf_shadow_13, part.shelf_shadow_14, part.shelf_shadow_15,
      part.shelf_shadow_16, part.shelf_shadow_17, part.shelf_shadow_18, part.shelf_shadow_19, part.shelf_shadow_20,
      part.shelf_shadow_21, part.shelf_shadow_22, part.shelf_shadow_23, part.shelf_shadow_24, part.shelf_shadow_25,
      part.shelf_shadow_26, part.shelf_shadow_27, part.shelf_shadow_28, part.shelf_shadow_29, part.shelf_shadow_30,
      part.shelf_shadow_31, part.shelf_shadow_32, part.shelf_shadow_33, part.shelf_shadow_34, part.shelf_shadow_35,
      part.shelf_shadow_36, part.shelf_shadow_37, part.shelf_shadow_38, part.shelf_shadow_39, part.shelf_shadow_40,
      part.shelf_shadow_41, part.shelf_shadow_42, part.shelf_shadow_43, part.shelf_shadow_44, part.shelf_shadow_45,
      part.shelf_shadow_46, part.shelf_shadow_47, part.shelf_shadow_48, part.shelf_shadow_49, part.shelf_shadow_50,
      part.shelf_shadow_51, part.shelf_shadow_52, part.shelf_shadow_53, part.shelf_shadow_54, part.shelf_shadow_55,
      part.shelf_shadow_56, part.shelf_shadow_57, part.shelf_shadow_58, part.shelf_shadow_59, part.shelf_shadow_60,
      part.shelf_shadow_61, part.shelf_shadow_62, part.shelf_shadow_63, part.shelf_shadow_64, part.shelf_shadow_65,
      part.shelf_shadow_66, part.shelf_shadow_67, part.shelf_shadow_68, part.shelf_shadow_69, part.shelf_shadow_70,
      part.shelf_shadow_71, part.shelf_shadow_72, part.shelf_shadow_73, part.shelf_shadow_74, part.shelf_shadow_75,
      part.shelf_shadow_76, part.shelf_shadow_77, part.shelf_shadow_78, part.shelf_shadow_79, part.shelf_shadow_80,
      part.shelf_shadow_81, part.shelf_shadow_82, part.shelf_shadow_83, part.shelf_shadow_84, part.shelf_shadow_85,
      part.shelf_shadow_86, part.shelf_shadow_87, part.shelf_shadow_88, part.shelf_shadow_89, part.shelf_shadow_90];

      var arrBoxesWallLeft = [part.box_wall_left_1, part.box_wall_left_2, part.box_wall_left_3, part.box_wall_left_4, part.box_wall_left_5, part.box_wall_left_6, part.box_wall_left_7, part.box_wall_left_8, part.box_wall_left_9, part.box_wall_left_10, part.box_wall_left_11, part.box_wall_left_12, part.box_wall_left_13, part.box_wall_left_14, part.box_wall_left_15, part.box_wall_left_16, part.box_wall_left_17, part.box_wall_left_18, part.box_wall_left_19, part.box_wall_left_20, part.box_wall_left_21, part.box_wall_left_22, part.box_wall_left_23, part.box_wall_left_24, part.box_wall_left_25, part.box_wall_left_26, part.box_wall_left_27, part.box_wall_left_28, part.box_wall_left_29, part.box_wall_left_30, part.box_wall_left_31, part.box_wall_left_32, part.box_wall_left_33, part.box_wall_left_34, part.box_wall_left_35, part.box_wall_left_36, part.box_wall_left_37, part.box_wall_left_38, part.box_wall_left_39, part.box_wall_left_40, part.box_wall_left_41, part.box_wall_left_42, part.box_wall_left_43, part.box_wall_left_44, part.box_wall_left_45, part.box_wall_left_46, part.box_wall_left_47, part.box_wall_left_48, part.box_wall_left_49, part.box_wall_left_50, part.box_wall_left_51, part.box_wall_left_52, part.box_wall_left_53, part.box_wall_left_54, part.box_wall_left_55, part.box_wall_left_56, part.box_wall_left_57, part.box_wall_left_58, part.box_wall_left_59, part.box_wall_left_60, part.box_wall_left_61, part.box_wall_left_62, part.box_wall_left_63, part.box_wall_left_64, part.box_wall_left_65,
      part.box_wall_left_66, part.box_wall_left_67, part.box_wall_left_68, part.box_wall_left_69, part.box_wall_left_70,
      part.box_wall_left_71, part.box_wall_left_72, part.box_wall_left_73, part.box_wall_left_74, part.box_wall_left_75,
      part.box_wall_left_76, part.box_wall_left_77, part.box_wall_left_78, part.box_wall_left_79, part.box_wall_left_80,
      part.box_wall_left_81, part.box_wall_left_82, part.box_wall_left_83, part.box_wall_left_84, part.box_wall_left_85,
      part.box_wall_left_86, part.box_wall_left_87, part.box_wall_left_88, part.box_wall_left_89, part.box_wall_left_90];

      var arrBoxesWallRight = [part.box_wall_right_1, part.box_wall_right_2, part.box_wall_right_3, part.box_wall_right_4, part.box_wall_right_5, part.box_wall_right_6, part.box_wall_right_7, part.box_wall_right_8, part.box_wall_right_9, part.box_wall_right_10, part.box_wall_right_11, part.box_wall_right_12, part.box_wall_right_13, part.box_wall_right_14, part.box_wall_right_15, part.box_wall_right_16, part.box_wall_right_17, part.box_wall_right_18, part.box_wall_right_19, part.box_wall_right_20, part.box_wall_right_21, part.box_wall_right_22, part.box_wall_right_23, part.box_wall_right_24, part.box_wall_right_25, part.box_wall_right_26, part.box_wall_right_27, part.box_wall_right_28, part.box_wall_right_29, part.box_wall_right_30, part.box_wall_right_31, part.box_wall_right_32, part.box_wall_right_33, part.box_wall_right_34, part.box_wall_right_35, part.box_wall_right_36, part.box_wall_right_37, part.box_wall_right_38, part.box_wall_right_39, part.box_wall_right_40, part.box_wall_right_41, part.box_wall_right_42, part.box_wall_right_43, part.box_wall_right_44, part.box_wall_right_45, part.box_wall_right_46, part.box_wall_right_47, part.box_wall_right_48, part.box_wall_right_49, part.box_wall_right_50, part.box_wall_right_51, part.box_wall_right_52, part.box_wall_right_53, part.box_wall_right_54, part.box_wall_right_55, part.box_wall_right_56, part.box_wall_right_57, part.box_wall_right_58, part.box_wall_right_59, part.box_wall_right_60, part.box_wall_right_61, part.box_wall_right_62, part.box_wall_right_63, part.box_wall_right_64, part.box_wall_right_65,
      part.box_wall_right_66, part.box_wall_right_67, part.box_wall_right_68, part.box_wall_right_69, part.box_wall_right_70,
      part.box_wall_right_71, part.box_wall_right_72, part.box_wall_right_73, part.box_wall_right_74, part.box_wall_right_75,
      part.box_wall_right_76, part.box_wall_right_77, part.box_wall_right_78, part.box_wall_right_79, part.box_wall_right_80,
      part.box_wall_right_81, part.box_wall_right_82, part.box_wall_right_83, part.box_wall_right_84, part.box_wall_right_85,
      part.box_wall_right_86, part.box_wall_right_87, part.box_wall_right_88, part.box_wall_right_89, part.box_wall_right_90];

      var arrBoxesWallBack = [part.box_wall_back_1, part.box_wall_back_2, part.box_wall_back_3, part.box_wall_back_4, part.box_wall_back_5, part.box_wall_back_6, part.box_wall_back_7, part.box_wall_back_8, part.box_wall_back_9, part.box_wall_back_10, part.box_wall_back_11, part.box_wall_back_12, part.box_wall_back_13, part.box_wall_back_14, part.box_wall_back_15, part.box_wall_back_16, part.box_wall_back_17, part.box_wall_back_18, part.box_wall_back_19, part.box_wall_back_20, part.box_wall_back_21, part.box_wall_back_22, part.box_wall_back_23, part.box_wall_back_24, part.box_wall_back_25, part.box_wall_back_26, part.box_wall_back_27, part.box_wall_back_28, part.box_wall_back_29, part.box_wall_back_30, part.box_wall_back_31, part.box_wall_back_32, part.box_wall_back_33, part.box_wall_back_34, part.box_wall_back_35, part.box_wall_back_36, part.box_wall_back_37, part.box_wall_back_38, part.box_wall_back_39, part.box_wall_back_40, part.box_wall_back_41, part.box_wall_back_42, part.box_wall_back_43, part.box_wall_back_44, part.box_wall_back_45, part.box_wall_back_46, part.box_wall_back_47, part.box_wall_back_48, part.box_wall_back_49, part.box_wall_back_50, part.box_wall_back_51, part.box_wall_back_52, part.box_wall_back_53, part.box_wall_back_54, part.box_wall_back_55, part.box_wall_back_56, part.box_wall_back_57, part.box_wall_back_58, part.box_wall_back_59, part.box_wall_back_60, part.box_wall_back_61, part.box_wall_back_62, part.box_wall_back_63, part.box_wall_back_64, part.box_wall_back_65,
      part.box_wall_back_66, part.box_wall_back_67, part.box_wall_back_68, part.box_wall_back_69, part.box_wall_back_70,
      part.box_wall_back_71, part.box_wall_back_72, part.box_wall_back_73, part.box_wall_back_74, part.box_wall_back_75,
      part.box_wall_back_76, part.box_wall_back_77, part.box_wall_back_78, part.box_wall_back_79, part.box_wall_back_80,
      part.box_wall_back_81, part.box_wall_back_82, part.box_wall_back_83, part.box_wall_back_84, part.box_wall_back_85,
      part.box_wall_back_86, part.box_wall_back_87, part.box_wall_back_88, part.box_wall_back_89, part.box_wall_back_90];

      var arrBoxesWallForward = [part.box_wall_forward_1, part.box_wall_forward_2, part.box_wall_forward_3, part.box_wall_forward_4, part.box_wall_forward_5, part.box_wall_forward_6, part.box_wall_forward_7, part.box_wall_forward_8, part.box_wall_forward_9, part.box_wall_forward_10, part.box_wall_forward_11, part.box_wall_forward_12, part.box_wall_forward_13, part.box_wall_forward_14, part.box_wall_forward_15, part.box_wall_forward_16, part.box_wall_forward_17, part.box_wall_forward_18, part.box_wall_forward_19, part.box_wall_forward_20, part.box_wall_forward_21, part.box_wall_forward_22, part.box_wall_forward_23, part.box_wall_forward_24, part.box_wall_forward_25, part.box_wall_forward_26, part.box_wall_forward_27, part.box_wall_forward_28, part.box_wall_forward_29, part.box_wall_forward_30, part.box_wall_forward_31, part.box_wall_forward_32, part.box_wall_forward_33, part.box_wall_forward_34, part.box_wall_forward_35, part.box_wall_forward_36, part.box_wall_forward_37, part.box_wall_forward_38, part.box_wall_forward_39, part.box_wall_forward_40, part.box_wall_forward_41, part.box_wall_forward_42, part.box_wall_forward_43, part.box_wall_forward_44, part.box_wall_forward_45, part.box_wall_forward_46, part.box_wall_forward_47, part.box_wall_forward_48, part.box_wall_forward_49, part.box_wall_forward_50, part.box_wall_forward_51, part.box_wall_forward_52, part.box_wall_forward_53, part.box_wall_forward_54, part.box_wall_forward_55, part.box_wall_forward_56, part.box_wall_forward_57, part.box_wall_forward_58, part.box_wall_forward_59, part.box_wall_forward_60, part.box_wall_forward_61, part.box_wall_forward_62, part.box_wall_forward_63, part.box_wall_forward_64, part.box_wall_forward_65,
      part.box_wall_forward_66, part.box_wall_forward_67, part.box_wall_forward_68, part.box_wall_forward_69, part.box_wall_forward_70,
      part.box_wall_forward_71, part.box_wall_forward_72, part.box_wall_forward_73, part.box_wall_forward_74, part.box_wall_forward_75,
      part.box_wall_forward_76, part.box_wall_forward_77, part.box_wall_forward_78, part.box_wall_forward_79, part.box_wall_forward_80,
      part.box_wall_forward_81, part.box_wall_forward_82, part.box_wall_forward_83, part.box_wall_forward_84, part.box_wall_forward_85,
      part.box_wall_forward_86, part.box_wall_forward_87, part.box_wall_forward_88, part.box_wall_forward_89, part.box_wall_forward_90];

      var arrPlatband = [part.box_platband_1, part.box_platband_2, part.box_platband_3, part.box_platband_4, part.box_platband_5, part.box_platband_6, part.box_platband_7, part.box_platband_8, part.box_platband_9, part.box_platband_10, part.box_platband_11, part.box_platband_12, part.box_platband_13, part.box_platband_14, part.box_platband_15, part.box_platband_16, part.box_platband_17, part.box_platband_18, part.box_platband_19, part.box_platband_20, part.box_platband_21, part.box_platband_22, part.box_platband_23, part.box_platband_24, part.box_platband_25, part.box_platband_26, part.box_platband_27, part.box_platband_28, part.box_platband_29, part.box_platband_30, part.box_platband_31, part.box_platband_32, part.box_platband_33, part.box_platband_34, part.box_platband_35, part.box_platband_36, part.box_platband_37, part.box_platband_38, part.box_platband_39, part.box_platband_40, part.box_platband_41, part.box_platband_42, part.box_platband_43, part.box_platband_44, part.box_platband_45, part.box_platband_46, part.box_platband_47, part.box_platband_48, part.box_platband_49, part.box_platband_50, part.box_platband_51, part.box_platband_52, part.box_platband_53, part.box_platband_54, part.box_platband_55, part.box_platband_56, part.box_platband_57, part.box_platband_58, part.box_platband_59, part.box_platband_60, part.box_platband_61, part.box_platband_62, part.box_platband_63, part.box_platband_64, part.box_platband_65,
      part.box_platband_66, part.box_platband_67, part.box_platband_68, part.box_platband_69, part.box_platband_70,
      part.box_platband_71, part.box_platband_72, part.box_platband_73, part.box_platband_74, part.box_platband_75,
      part.box_platband_76, part.box_platband_77, part.box_platband_78, part.box_platband_79, part.box_platband_80,
      part.box_platband_81, part.box_platband_82, part.box_platband_83, part.box_platband_84, part.box_platband_85,
      part.box_platband_86, part.box_platband_87, part.box_platband_88, part.box_platband_89, part.box_platband_90];

      var arrBoxesHandBracket = [part.boxes_hand_bracket_1, part.boxes_hand_bracket_2, part.boxes_hand_bracket_3, part.boxes_hand_bracket_4, part.boxes_hand_bracket_5, part.boxes_hand_bracket_6, part.boxes_hand_bracket_7, part.boxes_hand_bracket_8, part.boxes_hand_bracket_9, part.boxes_hand_bracket_10, part.boxes_hand_bracket_11, part.boxes_hand_bracket_12, part.boxes_hand_bracket_13, part.boxes_hand_bracket_14, part.boxes_hand_bracket_15, part.boxes_hand_bracket_16, part.boxes_hand_bracket_17, part.boxes_hand_bracket_18, part.boxes_hand_bracket_19, part.boxes_hand_bracket_20, part.boxes_hand_bracket_21, part.boxes_hand_bracket_22, part.boxes_hand_bracket_23, part.boxes_hand_bracket_24, part.boxes_hand_bracket_25, part.boxes_hand_bracket_26, part.boxes_hand_bracket_27, part.boxes_hand_bracket_28, part.boxes_hand_bracket_29, part.boxes_hand_bracket_30, part.boxes_hand_bracket_31, part.boxes_hand_bracket_32, part.boxes_hand_bracket_33, part.boxes_hand_bracket_34, part.boxes_hand_bracket_35, part.boxes_hand_bracket_36, part.boxes_hand_bracket_37, part.boxes_hand_bracket_38, part.boxes_hand_bracket_39, part.boxes_hand_bracket_40, part.boxes_hand_bracket_41, part.boxes_hand_bracket_42, part.boxes_hand_bracket_43, part.boxes_hand_bracket_44, part.boxes_hand_bracket_45, part.boxes_hand_bracket_46, part.boxes_hand_bracket_47, part.boxes_hand_bracket_48, part.boxes_hand_bracket_49, part.boxes_hand_bracket_50, part.boxes_hand_bracket_51, part.boxes_hand_bracket_52, part.boxes_hand_bracket_53, part.boxes_hand_bracket_54, part.boxes_hand_bracket_55, part.boxes_hand_bracket_56, part.boxes_hand_bracket_57, part.boxes_hand_bracket_58, part.boxes_hand_bracket_59, part.boxes_hand_bracket_60, part.boxes_hand_bracket_61, part.boxes_hand_bracket_62, part.boxes_hand_bracket_63, part.boxes_hand_bracket_64, part.boxes_hand_bracket_65,
      part.boxes_hand_bracket_66, part.boxes_hand_bracket_67, part.boxes_hand_bracket_68, part.boxes_hand_bracket_69, part.boxes_hand_bracket_70,
      part.boxes_hand_bracket_71, part.boxes_hand_bracket_72, part.boxes_hand_bracket_73, part.boxes_hand_bracket_74, part.boxes_hand_bracket_75,
      part.boxes_hand_bracket_76, part.boxes_hand_bracket_77, part.boxes_hand_bracket_78, part.boxes_hand_bracket_79, part.boxes_hand_bracket_80,
      part.boxes_hand_bracket_81, part.boxes_hand_bracket_82, part.boxes_hand_bracket_83, part.boxes_hand_bracket_84, part.boxes_hand_bracket_85,
      part.boxes_hand_bracket_86, part.boxes_hand_bracket_87, part.boxes_hand_bracket_88, part.boxes_hand_bracket_89, part.boxes_hand_bracket_90];

      var arrBoxesHandShell = [part.boxes_hand_shell_1, part.boxes_hand_shell_2, part.boxes_hand_shell_3, part.boxes_hand_shell_4, part.boxes_hand_shell_5, part.boxes_hand_shell_6, part.boxes_hand_shell_7, part.boxes_hand_shell_8, part.boxes_hand_shell_9, part.boxes_hand_shell_10, part.boxes_hand_shell_11, part.boxes_hand_shell_12, part.boxes_hand_shell_13, part.boxes_hand_shell_14, part.boxes_hand_shell_15, part.boxes_hand_shell_16, part.boxes_hand_shell_17, part.boxes_hand_shell_18, part.boxes_hand_shell_19, part.boxes_hand_shell_20, part.boxes_hand_shell_21, part.boxes_hand_shell_22, part.boxes_hand_shell_23, part.boxes_hand_shell_24, part.boxes_hand_shell_25, part.boxes_hand_shell_26, part.boxes_hand_shell_27, part.boxes_hand_shell_28, part.boxes_hand_shell_29, part.boxes_hand_shell_30, part.boxes_hand_shell_31, part.boxes_hand_shell_32, part.boxes_hand_shell_33, part.boxes_hand_shell_34, part.boxes_hand_shell_35, part.boxes_hand_shell_36, part.boxes_hand_shell_37, part.boxes_hand_shell_38, part.boxes_hand_shell_39, part.boxes_hand_shell_40, part.boxes_hand_shell_41, part.boxes_hand_shell_42, part.boxes_hand_shell_43, part.boxes_hand_shell_44, part.boxes_hand_shell_45, part.boxes_hand_shell_46, part.boxes_hand_shell_47, part.boxes_hand_shell_48, part.boxes_hand_shell_49, part.boxes_hand_shell_50, part.boxes_hand_shell_51, part.boxes_hand_shell_52, part.boxes_hand_shell_53, part.boxes_hand_shell_54, part.boxes_hand_shell_55, part.boxes_hand_shell_56, part.boxes_hand_shell_57, part.boxes_hand_shell_58, part.boxes_hand_shell_59, part.boxes_hand_shell_60, part.boxes_hand_shell_61, part.boxes_hand_shell_62, part.boxes_hand_shell_63, part.boxes_hand_shell_64, part.boxes_hand_shell_65,
      part.boxes_hand_shell_66, part.boxes_hand_shell_67, part.boxes_hand_shell_68, part.boxes_hand_shell_69, part.boxes_hand_shell_70,
      part.boxes_hand_shell_71, part.boxes_hand_shell_72, part.boxes_hand_shell_73, part.boxes_hand_shell_74, part.boxes_hand_shell_75,
      part.boxes_hand_shell_76, part.boxes_hand_shell_77, part.boxes_hand_shell_78, part.boxes_hand_shell_79, part.boxes_hand_shell_80,
      part.boxes_hand_shell_81, part.boxes_hand_shell_82, part.boxes_hand_shell_83, part.boxes_hand_shell_84, part.boxes_hand_shell_85,
      part.boxes_hand_shell_86, part.boxes_hand_shell_87, part.boxes_hand_shell_88, part.boxes_hand_shell_89, part.boxes_hand_shell_90];

      var arrBoxesHandCut = [part.boxes_hand_cut_1, part.boxes_hand_cut_2, part.boxes_hand_cut_3, part.boxes_hand_cut_4, part.boxes_hand_cut_5, part.boxes_hand_cut_6, part.boxes_hand_cut_7, part.boxes_hand_cut_8, part.boxes_hand_cut_9, part.boxes_hand_cut_10, part.boxes_hand_cut_11, part.boxes_hand_cut_12, part.boxes_hand_cut_13, part.boxes_hand_cut_14, part.boxes_hand_cut_15, part.boxes_hand_cut_16, part.boxes_hand_cut_17, part.boxes_hand_cut_18, part.boxes_hand_cut_19, part.boxes_hand_cut_20, part.boxes_hand_cut_21, part.boxes_hand_cut_22, part.boxes_hand_cut_23, part.boxes_hand_cut_24, part.boxes_hand_cut_25, part.boxes_hand_cut_26, part.boxes_hand_cut_27, part.boxes_hand_cut_28, part.boxes_hand_cut_29, part.boxes_hand_cut_30, part.boxes_hand_cut_31, part.boxes_hand_cut_32, part.boxes_hand_cut_33, part.boxes_hand_cut_34, part.boxes_hand_cut_35, part.boxes_hand_cut_36, part.boxes_hand_cut_37, part.boxes_hand_cut_38, part.boxes_hand_cut_39, part.boxes_hand_cut_40, part.boxes_hand_cut_41, part.boxes_hand_cut_42, part.boxes_hand_cut_43, part.boxes_hand_cut_44, part.boxes_hand_cut_45, part.boxes_hand_cut_46, part.boxes_hand_cut_47, part.boxes_hand_cut_48, part.boxes_hand_cut_49, part.boxes_hand_cut_50, part.boxes_hand_cut_51, part.boxes_hand_cut_52, part.boxes_hand_cut_53, part.boxes_hand_cut_54, part.boxes_hand_cut_55, part.boxes_hand_cut_56, part.boxes_hand_cut_57, part.boxes_hand_cut_58, part.boxes_hand_cut_59, part.boxes_hand_cut_60, part.boxes_hand_cut_61, part.boxes_hand_cut_62, part.boxes_hand_cut_63, part.boxes_hand_cut_64, part.boxes_hand_cut_65,
      part.boxes_hand_cut_66, part.boxes_hand_cut_67, part.boxes_hand_cut_68, part.boxes_hand_cut_69, part.boxes_hand_cut_70,
      part.boxes_hand_cut_71, part.boxes_hand_cut_72, part.boxes_hand_cut_73, part.boxes_hand_cut_74, part.boxes_hand_cut_75,
      part.boxes_hand_cut_76, part.boxes_hand_cut_77, part.boxes_hand_cut_78, part.boxes_hand_cut_79, part.boxes_hand_cut_80,
      part.boxes_hand_cut_81, part.boxes_hand_cut_82, part.boxes_hand_cut_83, part.boxes_hand_cut_84, part.boxes_hand_cut_85,
      part.boxes_hand_cut_86, part.boxes_hand_cut_87, part.boxes_hand_cut_88, part.boxes_hand_cut_89, part.boxes_hand_cut_90];

      var arrRod = [part.rod1, part.rod2, part.rod3, part.rod4, part.rod5, part.rod6, part.rod7, part.rod8, part.rod9, part.rod10, part.rod11, part.rod12, part.rod13, part.rod14, part.rod15, part.rod16, part.rod17, part.rod18];

      // 1 секция
      if (stock.door_no && stock.entresol && (stock.box_door_one_left_1 || stock.box_door_one_right_1) && prop.entresol_rack >= 0) {
        prop.door1_shift = prop.thickness;
        group.add(part.box_door_one_1);
        part.box_door_one_1.position.set(resetWidth + +prop.box_width_1 / 2,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket && stock.box_door_one_left_1) {
          group.add(part.box_hand_bracket_1_first);
          part.box_hand_bracket_1_first.position.set(resetWidth + +prop.box_width_1 - prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_bracket && stock.box_door_one_right_1) {
          group.add(part.box_hand_bracket_1_second);
          part.box_hand_bracket_1_second.position.set(resetWidth + prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_left_1) {
          group.add(part.box_hand_shell_1_first);
          part.box_hand_shell_1_first.position.set(resetWidth + +prop.box_width_1 - prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_right_1) {
          group.add(part.box_hand_shell_1_second);
          part.box_hand_shell_1_second.position.set(resetWidth + prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        prop.door1_shift = 0;
      }
      if (stock.door_no && stock.entresol && stock.box_door_two_1 && prop.entresol_rack >= 0) {
        prop.door1_shift = prop.thickness;
        group.add(part.box_door_two_1_first, part.box_door_two_1_second);

        part.box_door_two_1_first.position.set(resetWidth + +prop.box_width_1 / 2 - prop.boxDoorTwoX1 / 2 - 0.5,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_1_second.position.set(resetWidth + +prop.box_width_1 / 2 + prop.boxDoorTwoX1 / 2 + 0.5,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_1_first, part.box_hand_bracket_1_second);

          part.box_hand_bracket_1_first.position.set(resetWidth + +prop.box_width_1 / 2 - prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_1_second.position.set(resetWidth + +prop.box_width_1 / 2 + prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_1_first, part.box_hand_shell_1_second);
          part.box_hand_shell_1_first.position.set(resetWidth + +prop.box_width_1 / 2 - prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_1_second.position.set(resetWidth + +prop.box_width_1 / 2 + prop.boxHandShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_1 || stock.box_door_one_right_1) && prop.entresol_rack >= 0)) {
          prop.door1_shift = 0;
        }
      }
      // 2 секция
      if (stock.door_no && stock.entresol && (stock.box_door_one_left_2 || stock.box_door_one_right_2) && prop.entresol_rack >= 1) {
        prop.door2_shift = prop.thickness;
        group.add(part.box_door_one_2);
        part.box_door_one_2.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 + prop.thickness,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket && stock.box_door_one_left_2 && prop.entresol_rack >= 1) {
          group.add(part.box_hand_bracket_2_first);
          part.box_hand_bracket_2_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 - prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_bracket && stock.box_door_one_right_2) {
          group.add(part.box_hand_bracket_2_second);
          part.box_hand_bracket_2_second.position.set(resetWidth + +prop.box_width_1 + prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_left_2) {
          group.add(part.box_hand_shell_2_first);
          part.box_hand_shell_2_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 - prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_right_2) {
          group.add(part.box_hand_shell_2_second);
          part.box_hand_shell_2_second.position.set(resetWidth + +prop.box_width_1 + prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        prop.door2_shift = 0;
      }
      if (stock.door_no && stock.entresol && stock.box_door_two_2 && prop.entresol_rack >= 1) {
        prop.door2_shift = prop.thickness;
        group.add(part.box_door_two_2_first, part.box_door_two_2_second);

        part.box_door_two_2_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 - prop.boxDoorTwoX2 / 2 - 0.5 + prop.thickness,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_2_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 + prop.boxDoorTwoX2 / 2 + 0.5 + prop.thickness,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_2_first, part.box_hand_bracket_2_second);

          part.box_hand_bracket_2_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 - prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_2_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 + prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_2_first, part.box_hand_shell_2_second);
          part.box_hand_shell_2_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 - prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_2_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 / 2 + prop.boxHandShift + prop.thickness,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_2 || stock.box_door_one_right_2) && prop.entresol_rack >= 0)) {
          prop.door2_shift = 0;
        }
      }
      // 3 секция
      if (stock.door_no && stock.entresol && (stock.box_door_one_left_3 || stock.box_door_one_right_3) && prop.entresol_rack >= 2) {
        prop.door3_shift = prop.thickness;
        group.add(part.box_door_one_3);
        part.box_door_one_3.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 + prop.thickness * 2,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket && stock.box_door_one_left_3) {
          group.add(part.box_hand_bracket_3_first);
          part.box_hand_bracket_3_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 - prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_bracket && stock.box_door_one_right_3) {
          group.add(part.box_hand_bracket_3_second);
          part.box_hand_bracket_3_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_left_3) {
          group.add(part.box_hand_shell_3_first);
          part.box_hand_shell_3_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 - prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_right_3) {
          group.add(part.box_hand_shell_3_second);
          part.box_hand_shell_3_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        prop.door3_shift = 0;
      }
      if (stock.door_no && stock.entresol && stock.box_door_two_3 && prop.entresol_rack >= 2) {
        prop.door3_shift = prop.thickness;
        group.add(part.box_door_two_3_first, part.box_door_two_3_second);

        part.box_door_two_3_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 - prop.boxDoorTwoX3 / 2 - 0.5 + prop.thickness * 2,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_3_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 + prop.boxDoorTwoX3 / 2 + 0.5 + prop.thickness * 2,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_3_first, part.box_hand_bracket_3_second);

          part.box_hand_bracket_3_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 - prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_3_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 + prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_3_first, part.box_hand_shell_3_second);
          part.box_hand_shell_3_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 - prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_3_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 + prop.boxHandShift + prop.thickness * 2,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_3 || stock.box_door_one_right_3) && prop.entresol_rack >= 0)) {
          prop.door3_shift = 0;
        }
      }
      // 4 секция
      if (stock.door_no && stock.entresol && (stock.box_door_one_left_4 || stock.box_door_one_right_4) && prop.entresol_rack >= 3) {
        prop.door4_shift = prop.thickness;
        group.add(part.box_door_one_4);
        part.box_door_one_4.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 + prop.thickness * 3,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket && stock.box_door_one_left_4) {
          group.add(part.box_hand_bracket_4_first);
          part.box_hand_bracket_4_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 - prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_bracket && stock.box_door_one_right_4) {
          group.add(part.box_hand_bracket_4_second);
          part.box_hand_bracket_4_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_left_4) {
          group.add(part.box_hand_shell_4_first);
          part.box_hand_shell_4_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 - prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_right_4) {
          group.add(part.box_hand_shell_4_second);
          part.box_hand_shell_4_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        prop.door4_shift = 0;
      }
      if (stock.door_no && stock.entresol && stock.box_door_two_4 && prop.entresol_rack >= 3) {
        prop.door4_shift = prop.thickness;
        group.add(part.box_door_two_4_first, part.box_door_two_4_second);

        part.box_door_two_4_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 - prop.boxDoorTwoX4 / 2 - 0.5 + prop.thickness * 3,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_4_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 + prop.boxDoorTwoX4 / 2 + 0.5 + prop.thickness * 3,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_4_first, part.box_hand_bracket_4_second);

          part.box_hand_bracket_4_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 - prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_4_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 + prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_4_first, part.box_hand_shell_4_second);
          part.box_hand_shell_4_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 - prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_4_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 + prop.boxHandShift + prop.thickness * 3,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_4 || stock.box_door_one_right_4) && prop.entresol_rack >= 0)) {
          prop.door4_shift = 0;
        }
      }
      // 5 секция
      if (stock.door_no && stock.entresol && (stock.box_door_one_left_5 || stock.box_door_one_right_5) && prop.entresol_rack >= 4) {
        prop.door5_shift = prop.thickness;
        group.add(part.box_door_one_5);
        part.box_door_one_5.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 + prop.thickness * 4,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket && stock.box_door_one_left_5) {
          group.add(part.box_hand_bracket_5_first);
          part.box_hand_bracket_5_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 - prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_bracket && stock.box_door_one_right_5) {
          group.add(part.box_hand_bracket_5_second);
          part.box_hand_bracket_5_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_left_5) {
          group.add(part.box_hand_shell_5_first);
          part.box_hand_shell_5_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 - prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_right_5) {
          group.add(part.box_hand_shell_5_second);
          part.box_hand_shell_5_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        prop.door5_shift = 0;
      }
      if (stock.door_no && stock.entresol && stock.box_door_two_5 && prop.entresol_rack >= 4) {
        prop.door5_shift = prop.thickness;
        group.add(part.box_door_two_5_first, part.box_door_two_5_second);

        part.box_door_two_5_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 - prop.boxDoorTwoX5 / 2 - 0.5 + prop.thickness * 4,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_5_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 + prop.boxDoorTwoX5 / 2 + 0.5 + prop.thickness * 4,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_5_first, part.box_hand_bracket_5_second);

          part.box_hand_bracket_5_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 - prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_5_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 + prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_5_first, part.box_hand_shell_5_second);
          part.box_hand_shell_5_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 - prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_5_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 + prop.boxHandShift + prop.thickness * 4,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_5 || stock.box_door_one_right_5) && prop.entresol_rack >= 0)) {
          prop.door5_shift = 0;
        }
      }
      // 6 секция
      if (stock.door_no && stock.entresol && (stock.box_door_one_left_6 || stock.box_door_one_right_6) && prop.entresol_rack >= 5) {
        prop.door6_shift = prop.thickness;
        group.add(part.box_door_one_6);
        part.box_door_one_6.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 + prop.thickness * 5,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket && stock.box_door_one_left_6) {
          group.add(part.box_hand_bracket_6_first);
          part.box_hand_bracket_6_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 - prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_bracket && stock.box_door_one_right_6) {
          group.add(part.box_hand_bracket_6_second);
          part.box_hand_bracket_6_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_left_6) {
          group.add(part.box_hand_shell_6_first);
          part.box_hand_shell_6_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 - prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell && stock.box_door_one_right_6) {
          group.add(part.box_hand_shell_6_second);
          part.box_hand_shell_6_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        prop.door6_shift = 0;
      }
      if (stock.door_no && stock.entresol && stock.box_door_two_6 && prop.entresol_rack >= 5) {
        prop.door6_shift = prop.thickness;
        group.add(part.box_door_two_6_first, part.box_door_two_6_second);

        part.box_door_two_6_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 - prop.boxDoorTwoX6 / 2 - 0.5 + prop.thickness * 5,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_6_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 + prop.boxDoorTwoX6 / 2 + 0.5 + prop.thickness * 5,
          sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_6_first, part.box_hand_bracket_6_second);

          part.box_hand_bracket_6_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 - prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_6_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 + prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_6_first, part.box_hand_shell_6_second);
          part.box_hand_shell_6_first.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 - prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_6_second.position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 + prop.boxHandShift + prop.thickness * 5,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2, prop.depth / 2 - prop.thickness / 2);
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_6 || stock.box_door_one_right_6) && prop.entresol_rack >= 0)) {
          prop.door6_shift = 0;
        }
      }
      // НАПОЛНЕНИЕ ENTRESOL
      // параметры для функции
      var shift = 5;
      var count = 2;
      var boxWall = prop.boxWallY2;
      var boxDoorShift = prop.door2_shift;
      var boxShift = prop.box2_shift;
      var amount = prop.box_fill_amount_2;
      var boxWallShift = prop.wall2_shift;
      var widthShift = +prop.box_width_1;
      var widthLast = +prop.box_width_2;
      var cond1 = stock.box_fill_shelf_2;
      var cond2 = stock.box_fill_boxes_2;
      var cond3 = stock.box_fill_rod_2;

      drawFillEntresol(0, 1, prop.boxWallY1, prop.door1_shift, prop.box1_shift, prop.box_fill_amount_1, prop.wall1_shift, 0, +prop.box_width_1, stock.box_fill_shelf_1, stock.box_fill_boxes_1, stock.box_fill_rod_1);
      drawFillEntresol(5, 2, prop.boxWallY2, prop.door2_shift, prop.box2_shift, prop.box_fill_amount_2, prop.wall2_shift, +prop.box_width_1, +prop.box_width_2, stock.box_fill_shelf_2, stock.box_fill_boxes_2, stock.box_fill_rod_2);
      drawFillEntresol(10, 3, prop.boxWallY3, prop.door3_shift, prop.box3_shift, prop.box_fill_amount_3, prop.wall3_shift, +prop.box_width_1 + +prop.box_width_2, +prop.box_width_3, stock.box_fill_shelf_3, stock.box_fill_boxes_3, stock.box_fill_rod_3);
      drawFillEntresol(15, 4, prop.boxWallY4, prop.door4_shift, prop.box4_shift, prop.box_fill_amount_4, prop.wall4_shift, +prop.box_width_1 + +prop.box_width_2 + prop.box_width_3, +prop.box_width_4, stock.box_fill_shelf_4, stock.box_fill_boxes_4, stock.box_fill_rod_4);
      drawFillEntresol(20, 5, prop.boxWallY5, prop.door5_shift, prop.box5_shift, prop.box_fill_amount_5, prop.wall5_shift, +prop.box_width_1 + +prop.box_width_2 + prop.box_width_3 + prop.box_width_4, +prop.box_width_5, stock.box_fill_shelf_5, stock.box_fill_boxes_5, stock.box_fill_rod_5);
      drawFillEntresol(25, 6, prop.boxWallY6, prop.door6_shift, prop.box6_shift, prop.box_fill_amount_6, prop.wall6_shift, +prop.box_width_1 + +prop.box_width_2 + prop.box_width_3 + prop.box_width_4 + prop.box_width_5, +prop.box_width_6, stock.box_fill_shelf_6, stock.box_fill_boxes_6, stock.box_fill_rod_6);
      function drawFillEntresol(shift, count, boxWall, boxDoorShift, boxShift, amount, boxWallShift, widthShift, widthLast, cond1, cond2, cond3) {
        if (cond1 && stock.entresol && prop.entresol_rack >= (count - 1)) {
          var height = (prop.entresolRackY + prop.thickness) / (amount + 1);
          for (var i = 0 + shift; i < amount + shift; i++) {
            group.add(arrShelf[i], arrShelfShadow[i]);
            arrShelf[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              sectionEntresolHeight + height * (i + 1 - shift), 0);
            arrShelf[i].position.z += (-prop.door_shift + prop.wall_shift - boxDoorShift + boxWallShift) / 2;
            arrShelfShadow[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              sectionEntresolHeight + height * (i + 1 - shift), prop.depth / 2);
            arrShelfShadow[i].position.z += (-prop.door_shift - boxDoorShift);
          }
        }
        if (cond2 && stock.entresol && prop.entresol_rack >= (count - 1)) {
          var height = (prop.entresolRackY) / amount;
          for (var i = 0 + shift; i < amount + shift; i++) {
            group.add(arrShelf[i], arrBoxesWallLeft[i], arrBoxesWallRight[i], arrBoxesWallBack[i], arrBoxesWallForward[i], arrPlatband[i]);
            arrShelf[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              sectionEntresolHeight + height * (i - shift) + prop.thickness * 1.5, 0);
            arrShelf[i].position.z += (-prop.door_shift - boxDoorShift - boxShift) / 2 + prop.thickness;

            // prop.boxWallY[i] имеется ввиду для всей [i] секции, с shift также
            arrBoxesWallLeft[i].position.set(resetWidth + widthShift + prop.thickness * count, sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              (-prop.door_shift - boxDoorShift - boxShift) / 2);
            arrBoxesWallRight[i].position.set(resetWidth + widthShift + widthLast - prop.thickness * count + prop.thickness * (count - 1) * 2, sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              (-prop.door_shift - boxDoorShift - boxShift) / 2);
            arrBoxesWallBack[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              -prop.depth / 2 + boxShift / 2 + prop.thickness);
            arrBoxesWallForward[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 2 + boxShift) / 2 - prop.thickness);
            // platband
            arrPlatband[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2);
            // hand bracket
            if (stock.hand_bracket) {
              group.add(arrBoxesHandBracket[i]);
              arrBoxesHandBracket[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
            }
            // hand shell
            if (stock.hand_shell) {
              group.add(arrBoxesHandShell[i]);
              arrBoxesHandShell[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), sectionEntresolHeight + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
            }
            // hand cut
            if (stock.hand_cut) {
              group.add(arrBoxesHandCut[i]);
              arrBoxesHandCut[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), sectionEntresolHeight + boxWall + prop.handCutRadius / 2 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
              // немного опускаю все секции
              arrBoxesWallLeft[i].position.y -= prop.thickness;
              arrBoxesWallRight[i].position.y -= prop.thickness;
              arrBoxesWallBack[i].position.y -= prop.thickness;
              arrBoxesWallForward[i].position.y -= prop.thickness;
            }
          }
        }
        if (cond3 && amount != 0 && stock.entresol && prop.entresol_rack >= (count - 1)) {
          group.add(arrRod[count - 1]);
          arrRod[count - 1].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
            sectionEntresolHeight + prop.entresolRackY - prop.rodShift, 0);
        }
        if(stock.material) {
          group.remove(arrBoxesWallBack[i]);
        }
      }
      // LOWER НАПОЛНЕНИЕ
      drawFillLower(30, 1, prop.boxWallY7, prop.door7_shift, prop.box7_shift, prop.box_fill_amount_7, prop.wall7_shift, 0, +prop.box_width_7, +prop.box_width_13, stock.box_fill_shelf_7, stock.box_fill_boxes_7, stock.box_fill_rod_7);
      drawFillLower(35, 2, prop.boxWallY8, prop.door8_shift, prop.box8_shift, prop.box_fill_amount_8, prop.wall8_shift, +prop.box_width_7, +prop.box_width_8, +prop.box_width_14, stock.box_fill_shelf_8, stock.box_fill_boxes_8, stock.box_fill_rod_8);
      drawFillLower(40, 3, prop.boxWallY9, prop.door9_shift, prop.box9_shift, prop.box_fill_amount_9, prop.wall9_shift, +prop.box_width_7 + +prop.box_width_8, +prop.box_width_9, +prop.box_width_15, stock.box_fill_shelf_9, stock.box_fill_boxes_9, stock.box_fill_rod_9);
      drawFillLower(45, 4, prop.boxWallY10, prop.door10_shift, prop.box10_shift, prop.box_fill_amount_10, prop.wall10_shift, +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9, +prop.box_width_10, +prop.box_width_16, stock.box_fill_shelf_10, stock.box_fill_boxes_10, stock.box_fill_rod_10);
      drawFillLower(50, 5, prop.boxWallY11, prop.door11_shift, prop.box11_shift, prop.box_fill_amount_11, prop.wall11_shift, +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10, +prop.box_width_11, +prop.box_width_17, stock.box_fill_shelf_11, stock.box_fill_boxes_11, stock.box_fill_rod_11);
      drawFillLower(55, 6, prop.boxWallY12, prop.door12_shift, prop.box12_shift, prop.box_fill_amount_12, prop.wall12_shift, +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11, +prop.box_width_12, +prop.box_width_18, stock.box_fill_shelf_12, stock.box_fill_boxes_12, stock.box_fill_rod_12);
      function drawFillLower(shift, count, boxWall, boxDoorShift, boxShift, amount, boxWallShift, widthShift, widthLast, heightSplit, cond1, cond2, cond3) {
        var shiftY = -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.legsHeight;
        if (cond1 && prop.lower_rack >= (count - 1)) {
          var height = (prop.lowerRackY - heightSplit + prop.thickness) / (amount + 1);
          for (var i = 0 + shift; i < amount + shift; i++) {
            group.add(arrShelf[i], arrShelfShadow[i]);
            arrShelf[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              -prop.height / 2 + +prop.floorHeight + +prop.baseFY + height * (i + 1 - shift), 0);
            arrShelf[i].position.z += (-prop.door_shift + prop.wall_shift - boxDoorShift + boxWallShift) / 2;

            arrShelfShadow[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              -prop.height / 2 + +prop.floorHeight + +prop.baseFY + height * (i + 1 - shift), prop.depth / 2);
            arrShelfShadow[i].position.z += (-prop.door_shift - boxDoorShift);
          }
        }
        if (cond2 && prop.lower_rack >= (count - 1)) {
          var height = (prop.lowerRackY - heightSplit) / amount;
          for (var i = 0 + shift; i < amount + shift; i++) {
            group.add(arrShelf[i], arrBoxesWallLeft[i], arrBoxesWallRight[i], arrBoxesWallBack[i], arrBoxesWallForward[i], arrPlatband[i]);
            arrShelf[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              shiftY + height * (i - shift) + prop.thickness * 1.5, 0);
            arrShelf[i].position.z += (-prop.door_shift - boxDoorShift - boxShift) / 2 + prop.thickness;

            // prop.boxWallY[i] имеется ввиду для всей [i] секции, с shift также
            arrBoxesWallLeft[i].position.set(resetWidth + widthShift + prop.thickness * count, shiftY + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              (-prop.door_shift - boxDoorShift - boxShift) / 2);
            arrBoxesWallRight[i].position.set(resetWidth + widthShift + widthLast - prop.thickness * count + prop.thickness * (count - 1) * 2, shiftY + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              (-prop.door_shift - boxDoorShift - boxShift) / 2);
            arrBoxesWallBack[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              -prop.depth / 2 + boxShift / 2 + prop.thickness);
            arrBoxesWallForward[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
              prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 2 + boxShift) / 2 - prop.thickness);
            if(stock.material) {
              group.remove(arrBoxesWallForward[i]);
            }
            // platband
            arrPlatband[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 1.75 + height * (i - shift),
              prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2);
            // hand bracket
            if (stock.hand_bracket) {
              group.add(arrBoxesHandBracket[i]);
              arrBoxesHandBracket[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
            }
            // hand shell
            if (stock.hand_shell) {
              group.add(arrBoxesHandShell[i]);
              arrBoxesHandShell[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 1.5 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
            }
            // hand cut
            if (stock.hand_cut) {
              group.add(arrBoxesHandCut[i]);
              arrBoxesHandCut[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall + prop.handCutRadius / 2 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
              // немного опускаю все секции
              arrBoxesWallLeft[i].position.y -= prop.thickness;
              arrBoxesWallRight[i].position.y -= prop.thickness;
              arrBoxesWallBack[i].position.y -= prop.thickness;
              arrBoxesWallForward[i].position.y -= prop.thickness;
            }
          }
        }
        if (cond3 && amount != 0 && prop.lower_rack >= (count - 1)) {
          group.add(arrRod[count - 1 + 6]);
          arrRod[count - 1 + 6].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
            shiftY + (prop.lowerRackY - heightSplit) - prop.rodShift, 0);
        }
      }
      // наполнение LOWER SPLIT
      // drawFillLowerSplit(shift, count, boxWall, boxDoorShift, boxShift, amount, boxWallShift, widthShift, widthLast, heightSplit, cond1, cond2, cond3);
      drawFillLowerSplit(60, 1, prop.boxWallY13, prop.door13_shift, prop.box13_shift, prop.box_fill_amount_13, prop.wall13_shift, 0, +prop.box_width_7, +prop.box_width_13, stock.box_fill_shelf_13, stock.box_fill_boxes_13, stock.box_fill_rod_13, stock.box_split_7);
      drawFillLowerSplit(65, 2, prop.boxWallY14, prop.door14_shift, prop.box14_shift, prop.box_fill_amount_14, prop.wall14_shift, +prop.box_width_7, +prop.box_width_8, +prop.box_width_14, stock.box_fill_shelf_14, stock.box_fill_boxes_14, stock.box_fill_rod_14, stock.box_split_8);
      drawFillLowerSplit(70, 3, prop.boxWallY15, prop.door15_shift, prop.box15_shift, prop.box_fill_amount_15, prop.wall15_shift, +prop.box_width_7 + +prop.box_width_8, +prop.box_width_9, +prop.box_width_15, stock.box_fill_shelf_15, stock.box_fill_boxes_15, stock.box_fill_rod_15, stock.box_split_9);
      drawFillLowerSplit(75, 4, prop.boxWallY16, prop.door16_shift, prop.box16_shift, prop.box_fill_amount_16, prop.wall16_shift, +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9, +prop.box_width_10, +prop.box_width_16, stock.box_fill_shelf_16, stock.box_fill_boxes_16, stock.box_fill_rod_16, stock.box_split_10);
      drawFillLowerSplit(80, 5, prop.boxWallY17, prop.door17_shift, prop.box17_shift, prop.box_fill_amount_17, prop.wall17_shift, +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10, +prop.box_width_11, +prop.box_width_17, stock.box_fill_shelf_17, stock.box_fill_boxes_17, stock.box_fill_rod_17, stock.box_split_11);
      drawFillLowerSplit(85, 6, prop.boxWallY18, prop.door18_shift, prop.box18_shift, prop.box_fill_amount_18, prop.wall18_shift, +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11, +prop.box_width_12, +prop.box_width_18, stock.box_fill_shelf_18, stock.box_fill_boxes_18, stock.box_fill_rod_18, stock.box_split_12);
      function drawFillLowerSplit(shift, count, boxWall, boxDoorShift, boxShift, amount, boxWallShift, widthShift, widthLast, heightSplit, cond1, cond2, cond3, cond4) {
        if (cond4) {
          var shiftY = -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.legsHeight + (prop.lowerRackY - heightSplit);
          if (cond1 && prop.lower_rack >= (count - 1)) {
            var height = (heightSplit + prop.thickness) / (amount + 1);
            for (var i = 0 + shift; i < amount + shift; i++) {
              group.add(arrShelf[i], arrShelfShadow[i]);
              arrShelf[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
                shiftY + height * (i - shift) + height + prop.thickness * 0.5, 0);
              arrShelf[i].position.z += (-prop.door_shift + prop.wall_shift - boxDoorShift + boxWallShift) / 2;

              arrShelfShadow[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
                shiftY + height * (i - shift) + height + prop.thickness * 0.5, prop.depth / 2);
              arrShelfShadow[i].position.z += (-prop.door_shift - boxDoorShift);
            }
          }
          if (cond2 && prop.lower_rack >= (count - 1)) {
            var height = heightSplit / amount;
            for (var i = 0 + shift; i < amount + shift; i++) {
              group.add(arrShelf[i], arrBoxesWallLeft[i], arrBoxesWallRight[i], arrBoxesWallBack[i], arrBoxesWallForward[i], arrPlatband[i]);
              arrShelf[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
                shiftY + height * (i - shift) + prop.thickness * 2.5, 0);
              arrShelf[i].position.z += (-prop.door_shift - boxDoorShift - boxShift) / 2 + prop.thickness;

              // prop.boxWallY[i] имеется ввиду для всей [i] секции, с shift также
              arrBoxesWallLeft[i].position.set(resetWidth + widthShift + prop.thickness * count, shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                (-prop.door_shift - boxDoorShift - boxShift) / 2);
              arrBoxesWallRight[i].position.set(resetWidth + widthShift + widthLast - prop.thickness * count + prop.thickness * (count - 1) * 2, shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                (-prop.door_shift - boxDoorShift - boxShift) / 2);
              arrBoxesWallBack[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                -prop.depth / 2 + boxShift / 2 + prop.thickness);
              arrBoxesWallForward[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 2 + boxShift) / 2 - prop.thickness);
              if(stock.material) {
                group.remove(arrBoxesWallForward[i]);
              }
              // platband
              arrPlatband[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2);
              // hand bracket
              if (stock.hand_bracket) {
                group.add(arrBoxesHandBracket[i]);
                arrBoxesHandBracket[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                  prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
              }
              // hand shell
              if (stock.hand_shell) {
                group.add(arrBoxesHandShell[i]);
                arrBoxesHandShell[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall / 2 + prop.thickness * 2.5 + height * (i - shift),
                  prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
              }
              // hand cut
              if (stock.hand_cut) {
                group.add(arrBoxesHandCut[i]);
                arrBoxesHandCut[i].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1), shiftY + boxWall + prop.handCutRadius / 2 + height * (i - shift) + prop.thickness,
                  prop.depth / 2 - (prop.door_shift * 2 + boxDoorShift * 4 + boxShift) / 2 + prop.thickness);
                // немного опускаю все секции
                arrBoxesWallLeft[i].position.y -= prop.thickness;
                arrBoxesWallRight[i].position.y -= prop.thickness;
                arrBoxesWallBack[i].position.y -= prop.thickness;
                arrBoxesWallForward[i].position.y -= prop.thickness;
              }
            }
          }
          if (cond3 && amount != 0 && prop.lower_rack >= (count - 1)) {
            group.add(arrRod[count - 1 + 12]);
            arrRod[count - 1 + 12].position.set(resetWidth + widthShift + widthLast / 2 + prop.thickness * (count - 1),
              shiftY + heightSplit - prop.rodShift, 0);
          }
        }
      }

      // DOORS LOWER
      // 7 секция
      if (stock.door_no && (stock.box_door_one_left_7 || stock.box_door_one_right_7) && prop.lower_rack >= 0) {
        prop.door7_shift = prop.thickness;
        group.add(part.box_door_one_7);
        part.box_door_one_7.position.set(resetWidth + +prop.box_width_7 - prop.boxForceLowerX7 / 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_7.position.y += prop.legsHeight;
        if (stock.box_split_7) {
          part.box_door_one_7.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket && stock.box_door_one_left_7) {
          group.add(part.box_hand_bracket_7_first);
          part.box_hand_bracket_7_first.position.set(resetWidth + +prop.box_width_7 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_7_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_7) {
          group.add(part.box_hand_bracket_7_second);
          part.box_hand_bracket_7_second.position.set(resetWidth + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_7_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_7) {
          group.add(part.box_hand_shell_7_first);
          part.box_hand_shell_7_first.position.set(resetWidth + +prop.box_width_7 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_7_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_7) {
          group.add(part.box_hand_shell_7_second);
          part.box_hand_shell_7_second.position.set(resetWidth + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_7_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door7_shift = 0;
      }
      if (stock.door_no && stock.box_door_two_7 && prop.lower_rack >= 0) {
        prop.door7_shift = prop.thickness;
        group.add(part.box_door_two_7_first, part.box_door_two_7_second);

        part.box_door_two_7_first.position.set(resetWidth + +prop.box_width_7 / 2 - prop.boxDoorTwoX7 / 2 - 0.5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_7_second.position.set(resetWidth + +prop.box_width_7 / 2 + prop.boxDoorTwoX7 / 2 + 0.5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_7_first.position.y += prop.legsHeight;
        part.box_door_two_7_second.position.y += prop.legsHeight;
        if (stock.box_split_7) {
          part.box_door_two_7_first.position.y -= prop.halfThickness / 2;
          part.box_door_two_7_second.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_7_first, part.box_hand_bracket_7_second);

          part.box_hand_bracket_7_first.position.set(resetWidth + +prop.box_width_7 / 2 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_7_second.position.set(resetWidth + +prop.box_width_7 / 2 + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_7_first.position.y += prop.legsHeight;
          part.box_hand_bracket_7_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_7_first, part.box_hand_shell_7_second);

          part.box_hand_shell_7_first.position.set(resetWidth + +prop.box_width_7 / 2 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_7_second.position.set(resetWidth + +prop.box_width_7 / 2 + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_7_first.position.y += prop.legsHeight;
          part.box_hand_shell_7_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_7 || stock.box_door_one_right_7) && prop.entresol_rack >= 0)) {
          prop.door7_shift = 0;
        }
      }
      // 13 секция
      if (stock.door_no && stock.box_split_7 && (stock.box_door_one_left_13 || stock.box_door_one_right_13) && prop.lower_rack >= 0) {
        prop.door13_shift = prop.thickness;
        group.add(part.box_door_one_13);
        part.box_door_one_13.position.set(resetWidth + +prop.box_width_7 - prop.boxForceLowerX7 / 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_13.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket && stock.box_door_one_left_13) {
          group.add(part.box_hand_bracket_13_first);
          part.box_hand_bracket_13_first.position.set(resetWidth + +prop.box_width_7 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_13_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_13) {
          group.add(part.box_hand_bracket_13_second);
          part.box_hand_bracket_13_second.position.set(resetWidth + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_13_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_13) {
          group.add(part.box_hand_shell_13_first);
          part.box_hand_shell_13_first.position.set(resetWidth + +prop.box_width_7 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_13_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_13) {
          group.add(part.box_hand_shell_13_second);
          part.box_hand_shell_13_second.position.set(resetWidth + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_13_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door13_shift = 0;
      }
      if (stock.door_no && stock.box_split_7 && stock.box_door_two_13 && prop.lower_rack >= 0) {
        prop.door13_shift = prop.thickness;
        group.add(part.box_door_two_13_first, part.box_door_two_13_second);

        part.box_door_two_13_first.position.set(resetWidth + +prop.box_width_7 / 2 - prop.boxDoorTwoX7 / 2 - 0.5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_13_second.position.set(resetWidth + +prop.box_width_7 / 2 + prop.boxDoorTwoX7 / 2 + 0.5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_13_first.position.y += prop.legsHeight - prop.halfThickness / 2;
        part.box_door_two_13_second.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_13_first, part.box_hand_bracket_13_second);

          part.box_hand_bracket_13_first.position.set(resetWidth + +prop.box_width_7 / 2 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_13_second.position.set(resetWidth + +prop.box_width_7 / 2 + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_13_first.position.y += prop.legsHeight;
          part.box_hand_bracket_13_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_13_first, part.box_hand_shell_13_second);

          part.box_hand_shell_13_first.position.set(resetWidth + +prop.box_width_7 / 2 - prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_13_second.position.set(resetWidth + +prop.box_width_7 / 2 + prop.boxHandShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_13_first.position.y += prop.legsHeight;
          part.box_hand_shell_13_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_13 || stock.box_door_one_right_13) && prop.entresol_rack >= 0)) {
          prop.door13_shift = 0;
        }
      }
      // 8 секция
      if (stock.door_no && (stock.box_door_one_left_8 || stock.box_door_one_right_8) && prop.lower_rack >= 1) {
        prop.door8_shift = prop.thickness;
        group.add(part.box_door_one_8);
        part.box_door_one_8.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxForceLowerX8 / 2 + prop.thickness,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_8.position.y += prop.legsHeight;
        if (stock.box_split_8) {
          part.box_door_one_8.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket && stock.box_door_one_left_8) {
          group.add(part.box_hand_bracket_8_first);
          part.box_hand_bracket_8_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_8_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_8) {
          group.add(part.box_hand_bracket_8_second);
          part.box_hand_bracket_8_second.position.set(resetWidth + +prop.box_width_7 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_8_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_8) {
          group.add(part.box_hand_shell_8_first);
          part.box_hand_shell_8_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_8_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_8) {
          group.add(part.box_hand_shell_8_second);
          part.box_hand_shell_8_second.position.set(resetWidth + +prop.box_width_7 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_8_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door8_shift = 0;
      }
      if (stock.door_no && stock.box_door_two_8 && prop.lower_rack >= 1) {
        prop.door8_shift = prop.thickness;
        group.add(part.box_door_two_8_first, part.box_door_two_8_second);

        part.box_door_two_8_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 - prop.boxDoorTwoX8 / 2 - 0.5 + prop.thickness,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_8_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + prop.boxDoorTwoX8 / 2 + 0.5 + prop.thickness,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_8_first.position.y += prop.legsHeight;
        part.box_door_two_8_second.position.y += prop.legsHeight;
        if (stock.box_split_8) {
          part.box_door_two_8_first.position.y -= prop.halfThickness / 2;
          part.box_door_two_8_second.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_8_first, part.box_hand_bracket_8_second);

          part.box_hand_bracket_8_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_8_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_8_first.position.y += prop.legsHeight;
          part.box_hand_bracket_8_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_8_first, part.box_hand_shell_8_second);

          part.box_hand_shell_8_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_8_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_8_first.position.y += prop.legsHeight;
          part.box_hand_shell_8_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_8 || stock.box_door_one_right_8) && prop.entresol_rack >= 0)) {
          prop.door8_shift = 0;
        }
      }
      // 14 секция
      if (stock.door_no && stock.box_split_8 && (stock.box_door_one_left_14 || stock.box_door_one_right_14) && prop.lower_rack >= 1) {
        prop.door14_shift = prop.thickness;
        group.add(part.box_door_one_14);
        part.box_door_one_14.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxForceLowerX8 / 2 + prop.thickness,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_14.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket && stock.box_door_one_left_14) {
          group.add(part.box_hand_bracket_14_first);
          part.box_hand_bracket_14_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_14_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_14) {
          group.add(part.box_hand_bracket_14_second);
          part.box_hand_bracket_14_second.position.set(resetWidth + +prop.box_width_7 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_14_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_14) {
          group.add(part.box_hand_shell_14_first);
          part.box_hand_shell_14_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_14_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_14) {
          group.add(part.box_hand_shell_14_second);
          part.box_hand_shell_14_second.position.set(resetWidth + +prop.box_width_7 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_14_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door14_shift = prop.thickness;
      }
      if (stock.door_no && stock.box_split_8 && stock.box_door_two_14 && prop.lower_rack >= 1) {
        prop.door14_shift = prop.thickness;
        group.add(part.box_door_two_14_first, part.box_door_two_14_second);

        part.box_door_two_14_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 - prop.boxDoorTwoX8 / 2 - 0.5 + prop.thickness,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_14_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + prop.boxDoorTwoX8 / 2 + 0.5 + prop.thickness,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_14_first.position.y += prop.legsHeight - prop.halfThickness / 2;
        part.box_door_two_14_second.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_14_first, part.box_hand_bracket_14_second);

          part.box_hand_bracket_14_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_14_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_14_first.position.y += prop.legsHeight;
          part.box_hand_bracket_14_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_14_first, part.box_hand_shell_14_second);

          part.box_hand_shell_14_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 - prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_14_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + prop.boxHandShift + prop.thickness,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_14_first.position.y += prop.legsHeight;
          part.box_hand_shell_14_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_14 || stock.box_door_one_right_14) && prop.entresol_rack >= 0)) {
          prop.door14_shift = 0;
        }
      }
      // 9 секция
      if (stock.door_no && (stock.box_door_one_left_9 || stock.box_door_one_right_9) && prop.lower_rack >= 2) {
        prop.door9_shift = prop.thickness;
        group.add(part.box_door_one_9);
        part.box_door_one_9.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxForceLowerX9 / 2 + prop.thickness * 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_9.position.y += prop.legsHeight;
        if (stock.box_split_9) {
          part.box_door_one_9.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket && stock.box_door_one_left_9) {
          group.add(part.box_hand_bracket_9_first);
          part.box_hand_bracket_9_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_9_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_9) {
          group.add(part.box_hand_bracket_9_second);
          part.box_hand_bracket_9_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_9_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_9) {
          group.add(part.box_hand_shell_9_first);
          part.box_hand_shell_9_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_9_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_9) {
          group.add(part.box_hand_shell_9_second);
          part.box_hand_shell_9_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_9_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door9_shift = 0;
      }
      if (stock.door_no && stock.box_door_two_9 && prop.lower_rack >= 2) {
        prop.door9_shift = prop.thickness;
        group.add(part.box_door_two_9_first, part.box_door_two_9_second);

        part.box_door_two_9_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 - prop.boxDoorTwoX9 / 2 - 0.5 + prop.thickness * 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_9_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 + prop.boxDoorTwoX9 / 2 + 0.5 + prop.thickness * 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_9_first.position.y += prop.legsHeight;
        part.box_door_two_9_second.position.y += prop.legsHeight;
        if (stock.box_split_9) {
          part.box_door_two_9_first.position.y -= prop.halfThickness / 2;
          part.box_door_two_9_second.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_9_first, part.box_hand_bracket_9_second);

          part.box_hand_bracket_9_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_9_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_9_first.position.y += prop.legsHeight;
          part.box_hand_bracket_9_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_9_first, part.box_hand_shell_9_second);

          part.box_hand_shell_9_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_9_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_9_first.position.y += prop.legsHeight;
          part.box_hand_shell_9_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_9 || stock.box_door_one_right_9) && prop.entresol_rack >= 0)) {
          prop.door9_shift = 0;
        }
      }
      // 15 секция
      if (stock.door_no && stock.box_split_9 && (stock.box_door_one_left_15 || stock.box_door_one_right_15) && prop.lower_rack >= 2) {
        prop.door15_shift = prop.thickness;
        group.add(part.box_door_one_15);
        part.box_door_one_15.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxForceLowerX9 / 2 + prop.thickness * 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_15.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket && stock.box_door_one_left_15) {
          group.add(part.box_hand_bracket_15_first);
          part.box_hand_bracket_15_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_15_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_15) {
          group.add(part.box_hand_bracket_15_second);
          part.box_hand_bracket_15_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_15_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_15) {
          group.add(part.box_hand_shell_15_first);
          part.box_hand_shell_15_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_15_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_15) {
          group.add(part.box_hand_shell_15_second);
          part.box_hand_shell_15_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_15_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door15_shift = 0;
      }
      if (stock.door_no && stock.box_split_9 && stock.box_door_two_15 && prop.lower_rack >= 2) {
        prop.door15_shift = prop.thickness;
        group.add(part.box_door_two_15_first, part.box_door_two_15_second);

        part.box_door_two_15_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 - prop.boxDoorTwoX9 / 2 - 0.5 + prop.thickness * 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_15_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 + prop.boxDoorTwoX9 / 2 + 0.5 + prop.thickness * 2,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_15_first.position.y += prop.legsHeight - prop.halfThickness / 2;
        part.box_door_two_15_second.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_15_first, part.box_hand_bracket_15_second);

          part.box_hand_bracket_15_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_15_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_15_first.position.y += prop.legsHeight;
          part.box_hand_bracket_15_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_15_first, part.box_hand_shell_15_second);

          part.box_hand_shell_15_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 - prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_15_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 / 2 + prop.boxHandShift + prop.thickness * 2,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_15_first.position.y += prop.legsHeight;
          part.box_hand_shell_15_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_15 || stock.box_door_one_right_15) && prop.entresol_rack >= 0)) {
          prop.door15_shift = 0;
        }
      }
      // 10 секция
      if (stock.door_no && (stock.box_door_one_left_10 || stock.box_door_one_right_10) && prop.lower_rack >= 3) {
        prop.door10_shift = prop.thickness;
        group.add(part.box_door_one_10);
        part.box_door_one_10.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxForceLowerX10 / 2 + prop.thickness * 3,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_10.position.y += prop.legsHeight;
        if (stock.box_split_10) {
          part.box_door_one_10.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket && stock.box_door_one_left_10) {
          group.add(part.box_hand_bracket_10_first);
          part.box_hand_bracket_10_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_10_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_10) {
          group.add(part.box_hand_bracket_10_second);
          part.box_hand_bracket_10_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_10_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_10) {
          group.add(part.box_hand_shell_10_first);
          part.box_hand_shell_10_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_10_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_10) {
          group.add(part.box_hand_shell_10_second);
          part.box_hand_shell_10_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_10_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door10_shift = 0;
      }
      if (stock.door_no && stock.box_door_two_10 && prop.lower_rack >= 3) {
        prop.door10_shift = prop.thickness;
        group.add(part.box_door_two_10_first, part.box_door_two_10_second);

        part.box_door_two_10_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 - prop.boxDoorTwoX10 / 2 - 0.5 + prop.thickness * 3,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_10_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 + prop.boxDoorTwoX10 / 2 + 0.5 + prop.thickness * 3,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_10_first.position.y += prop.legsHeight;
        part.box_door_two_10_second.position.y += prop.legsHeight;
        if (stock.box_split_10) {
          part.box_door_two_10_first.position.y -= prop.halfThickness / 2;
          part.box_door_two_10_second.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_10_first, part.box_hand_bracket_10_second);

          part.box_hand_bracket_10_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_10_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_10_first.position.y += prop.legsHeight;
          part.box_hand_bracket_10_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_10_first, part.box_hand_shell_10_second);

          part.box_hand_shell_10_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_10_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_10_first.position.y += prop.legsHeight;
          part.box_hand_shell_10_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_10 || stock.box_door_one_right_10) && prop.entresol_rack >= 0)) {
          prop.door10_shift = 0;
        }
      }
      // 16 секция
      if (stock.door_no && stock.box_split_10 && (stock.box_door_one_left_16 || stock.box_door_one_right_16) && prop.lower_rack >= 3) {
        prop.door16_shift = prop.thickness;
        group.add(part.box_door_one_16);
        part.box_door_one_16.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxForceLowerX10 / 2 + prop.thickness * 3,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_16.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket && stock.box_door_one_left_16) {
          group.add(part.box_hand_bracket_16_first);
          part.box_hand_bracket_16_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_16_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_16) {
          group.add(part.box_hand_bracket_16_second);
          part.box_hand_bracket_16_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_16_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_16) {
          group.add(part.box_hand_shell_16_first);
          part.box_hand_shell_16_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_16_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_16) {
          group.add(part.box_hand_shell_16_second);
          part.box_hand_shell_16_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_16_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door16_shift = 0;
      }
      if (stock.door_no && stock.box_split_10 && stock.box_door_two_16 && prop.lower_rack >= 3) {
        prop.door16_shift = prop.thickness;
        group.add(part.box_door_two_16_first, part.box_door_two_16_second);

        part.box_door_two_16_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 - prop.boxDoorTwoX10 / 2 - 0.5 + prop.thickness * 3,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_16_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 + prop.boxDoorTwoX10 / 2 + 0.5 + prop.thickness * 3,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_16_first.position.y += prop.legsHeight - prop.halfThickness / 2;
        part.box_door_two_16_second.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_16_first, part.box_hand_bracket_16_second);

          part.box_hand_bracket_16_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_16_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_16_first.position.y += prop.legsHeight;
          part.box_hand_bracket_16_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_16_first, part.box_hand_shell_16_second);

          part.box_hand_shell_16_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 - prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_16_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 / 2 + prop.boxHandShift + prop.thickness * 3,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_16_first.position.y += prop.legsHeight;
          part.box_hand_shell_16_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_16 || stock.box_door_one_right_16) && prop.entresol_rack >= 0)) {
          prop.door16_shift = 0;
        }
      }
      // 11 секция
      if (stock.door_no && (stock.box_door_one_left_11 || stock.box_door_one_right_11) && prop.lower_rack >= 4) {
        prop.door11_shift = prop.thickness;
        group.add(part.box_door_one_11);
        part.box_door_one_11.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxForceLowerX11 / 2 + prop.thickness * 4,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_11.position.y += prop.legsHeight;
        if (stock.box_split_11) {
          part.box_door_one_11.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket && stock.box_door_one_left_11) {
          group.add(part.box_hand_bracket_11_first);
          part.box_hand_bracket_11_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_11_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_11) {
          group.add(part.box_hand_bracket_11_second);
          part.box_hand_bracket_11_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_11_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_11) {
          group.add(part.box_hand_shell_11_first);
          part.box_hand_shell_11_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_11_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_11) {
          group.add(part.box_hand_shell_11_second);
          part.box_hand_shell_11_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_11_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door11_shift = 0;
      }
      if (stock.door_no && stock.box_door_two_11 && prop.lower_rack >= 4) {
        prop.door11_shift = prop.thickness;
        group.add(part.box_door_two_11_first, part.box_door_two_11_second);

        part.box_door_two_11_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 - prop.boxDoorTwoX11 / 2 - 0.5 + prop.thickness * 4,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_11_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 + prop.boxDoorTwoX11 / 2 + 0.5 + prop.thickness * 4,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_11_first.position.y += prop.legsHeight;
        part.box_door_two_11_second.position.y += prop.legsHeight;
        if (stock.box_split_11) {
          part.box_door_two_11_first.position.y -= prop.halfThickness / 2;
          part.box_door_two_11_second.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_11_first, part.box_hand_bracket_11_second);

          part.box_hand_bracket_11_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_11_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_11_first.position.y += prop.legsHeight;
          part.box_hand_bracket_11_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_11_first, part.box_hand_shell_11_second);

          part.box_hand_shell_11_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_11_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_11_first.position.y += prop.legsHeight;
          part.box_hand_shell_11_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_11 || stock.box_door_one_right_11) && prop.entresol_rack >= 0)) {
          prop.door11_shift = 0;
        }
      }
      // 17 секция
      if (stock.door_no && stock.box_split_11 && (stock.box_door_one_left_17 || stock.box_door_one_right_17) && prop.lower_rack >= 4) {
        prop.door17_shift = prop.thickness;
        group.add(part.box_door_one_17);
        part.box_door_one_17.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxForceLowerX11 / 2 + prop.thickness * 4,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_17.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket && stock.box_door_one_left_17) {
          group.add(part.box_hand_bracket_17_first);
          part.box_hand_bracket_17_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_17_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_17) {
          group.add(part.box_hand_bracket_17_second);
          part.box_hand_bracket_17_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_17_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_17) {
          group.add(part.box_hand_shell_17_first);
          part.box_hand_shell_17_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_17_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_17) {
          group.add(part.box_hand_shell_17_second);
          part.box_hand_shell_17_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_17_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door17_shift = 0;
      }
      if (stock.door_no && stock.box_split_11 && stock.box_door_two_17 && prop.lower_rack >= 4) {
        prop.door17_shift = prop.thickness;
        group.add(part.box_door_two_17_first, part.box_door_two_17_second);

        part.box_door_two_17_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 - prop.boxDoorTwoX11 / 2 - 0.5 + prop.thickness * 4,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_17_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 + prop.boxDoorTwoX11 / 2 + 0.5 + prop.thickness * 4,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_17_first.position.y += prop.legsHeight - prop.halfThickness / 2;
        part.box_door_two_17_second.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_17_first, part.box_hand_bracket_17_second);

          part.box_hand_bracket_17_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_17_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_17_first.position.y += prop.legsHeight;
          part.box_hand_bracket_17_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_17_first, part.box_hand_shell_17_second);

          part.box_hand_shell_17_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 - prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_17_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 / 2 + prop.boxHandShift + prop.thickness * 4,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_17_first.position.y += prop.legsHeight;
          part.box_hand_shell_17_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_17 || stock.box_door_one_right_17) && prop.entresol_rack >= 0)) {
          prop.door17_shift = 0;
        }
      }
      // 12 секция
      if (stock.door_no && (stock.box_door_one_left_12 || stock.box_door_one_right_12) && prop.lower_rack >= 5) {
        prop.door12_shift = prop.thickness;
        group.add(part.box_door_one_12);
        part.box_door_one_12.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxForceLowerX12 / 2 + prop.thickness * 5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_12.position.y += prop.legsHeight;
        if (stock.box_split_12) {
          part.box_door_one_12.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket && stock.box_door_one_left_12) {
          group.add(part.box_hand_bracket_12_first);
          part.box_hand_bracket_12_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_12_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_12) {
          group.add(part.box_hand_bracket_12_second);
          part.box_hand_bracket_12_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_12_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_12) {
          group.add(part.box_hand_shell_12_first);
          part.box_hand_shell_12_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_12_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_12) {
          group.add(part.box_hand_shell_12_second);
          part.box_hand_shell_12_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_12_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door12_shift = 0;
      }
      if (stock.door_no && stock.box_door_two_12 && prop.lower_rack >= 5) {
        prop.door12_shift = prop.thickness;
        group.add(part.box_door_two_12_first, part.box_door_two_12_second);

        part.box_door_two_12_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 - prop.boxDoorTwoX12 / 2 - 0.5 + prop.thickness * 5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_12_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 + prop.boxDoorTwoX12 / 2 + 0.5 + prop.thickness * 5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_12_first.position.y += prop.legsHeight;
        part.box_door_two_12_second.position.y += prop.legsHeight;
        if (stock.box_split_12) {
          part.box_door_two_12_first.position.y -= prop.halfThickness / 2;
          part.box_door_two_12_second.position.y -= prop.halfThickness / 2;
        }

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_12_first, part.box_hand_bracket_12_second);

          part.box_hand_bracket_12_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_12_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_12_first.position.y += prop.legsHeight;
          part.box_hand_bracket_12_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_12_first, part.box_hand_shell_12_second);

          part.box_hand_shell_12_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_12_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2) + prop.thickness / 4 * 3, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_12_first.position.y += prop.legsHeight;
          part.box_hand_shell_12_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_12 || stock.box_door_one_right_12) && prop.entresol_rack >= 0)) {
          prop.door12_shift = 0;
        }
      }
      // 18 секция
      if (stock.door_no && stock.box_split_12 && (stock.box_door_one_left_18 || stock.box_door_one_right_18) && prop.lower_rack >= 5) {
        prop.door18_shift = prop.thickness;
        group.add(part.box_door_one_18);
        part.box_door_one_18.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxForceLowerX12 / 2 + prop.thickness * 5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_one_18.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket && stock.box_door_one_left_18) {
          group.add(part.box_hand_bracket_17_first);
          part.box_hand_bracket_18_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_18_first.position.y += prop.legsHeight;
        }
        if (stock.hand_bracket && stock.box_door_one_right_18) {
          group.add(part.box_hand_bracket_18_second);
          part.box_hand_bracket_18_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11vvv + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_18_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_left_18) {
          group.add(part.box_hand_shell_18_first);
          part.box_hand_shell_18_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_18_first.position.y += prop.legsHeight;
        }
        if (stock.hand_shell && stock.box_door_one_right_18) {
          group.add(part.box_hand_shell_18_second);
          part.box_hand_shell_18_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_18_second.position.y += prop.legsHeight;
        }
      } else {
        prop.door18_shift = 0;
      }
      if (stock.door_no && stock.box_split_12 && stock.box_door_two_18 && prop.lower_rack >= 5) {
        prop.door18_shift = prop.thickness;
        group.add(part.box_door_two_18_first, part.box_door_two_18_second);

        part.box_door_two_18_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 - prop.boxDoorTwoX12 / 2 - 0.5 + prop.thickness * 5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
        part.box_door_two_18_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 + prop.boxDoorTwoX12 / 2 + 0.5 + prop.thickness * 5,
          -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);

        part.box_door_two_18_first.position.y += prop.legsHeight - prop.halfThickness / 2;
        part.box_door_two_18_second.position.y += prop.legsHeight - prop.halfThickness / 2;

        if (stock.hand_bracket) {
          group.add(part.box_hand_bracket_18_first, part.box_hand_bracket_18_second);

          part.box_hand_bracket_18_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_18_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_bracket_18_first.position.y += prop.legsHeight;
          part.box_hand_bracket_18_second.position.y += prop.legsHeight;
        }
        if (stock.hand_shell) {
          group.add(part.box_hand_shell_18_first, part.box_hand_shell_18_second);

          part.box_hand_shell_18_first.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 - prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_18_second.position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + +prop.box_width_9 + +prop.box_width_10 + +prop.box_width_11 + +prop.box_width_12 / 2 + prop.boxHandShift + prop.thickness * 5,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + prop.thickness * 1.5 + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 - prop.thickness / 2);
          part.box_hand_shell_18_first.position.y += prop.legsHeight;
          part.box_hand_shell_18_second.position.y += prop.legsHeight;
        }
      } else {
        if (!(stock.door_no && stock.entresol && (stock.box_door_one_left_18 || stock.box_door_one_right_18) && prop.entresol_rack >= 0)) {
          prop.door18_shift = 0;
        }
      }

      if(stock.material && stock.door_sliding) {
        for(var i = 0; i <= 90; i++) {
          group.remove(arrBoxesHandBracket[i]);
        }
      }
      // ОТОБРАЖЕНИЕ НОМЕРОВ СЕКЦИЙ
      group.remove(part.textMesh1, part.textMesh2, part.textMesh3, part.textMesh4, part.textMesh5, part.textMesh6, part.textMesh7, part.textMesh8, part.textMesh9, part.textMesh10, part.textMesh11, part.textMesh12, part.textMesh13, part.textMesh14, part.textMesh15, part.textMesh16, part.textMesh17, part.textMesh18);
      var arrNum = [part.textMesh1, part.textMesh2, part.textMesh3, part.textMesh4, part.textMesh5, part.textMesh6, part.textMesh7, part.textMesh8, part.textMesh9, part.textMesh10, part.textMesh11, part.textMesh12, part.textMesh13, part.textMesh14, part.textMesh15, part.textMesh16, part.textMesh17, part.textMesh18];
      // console.log(part.textMesh1);

      for (var i = 0; i < arrBoxes.length; i++) {
        var numberShift = 45;
        // entresol number
        if (arrBoxes[i] == part.entresol_rack_zero) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_1 / 2 + 0.5 * prop.thickness - numberShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2 - numberShift, prop.depth / 2 + numberShift);
        }
        if (arrBoxes[i] == part.entresol_rack_first) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_1 + prop.box_width_2 / 2 + 1.5 * prop.thickness - numberShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2 - numberShift, prop.depth / 2 + numberShift);
        }
        if (arrBoxes[i] == part.entresol_rack_second) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 / 2 + 2.5 * prop.thickness - numberShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2 - numberShift, prop.depth / 2 + numberShift);
        }
        if (arrBoxes[i] == part.entresol_rack_third) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 / 2 + 3.5 * prop.thickness - numberShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2 - numberShift, prop.depth / 2 + numberShift);
        }
        if (arrBoxes[i] == part.entresol_rack_fourth) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 / 2 + 4.5 * prop.thickness - numberShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2 - numberShift, prop.depth / 2 + numberShift);
        }
        if (arrBoxes[i] == part.entresol_rack_fifth) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_1 + +prop.box_width_2 + +prop.box_width_3 + +prop.box_width_4 + +prop.box_width_5 + +prop.box_width_6 / 2 + 5.5 * prop.thickness - numberShift,
            sectionEntresolHeight + prop.entresolRackY / 2 + prop.thickness / 2 - numberShift, prop.depth / 2 + numberShift);
        }
        // lower number
        if (arrBoxes[i] == part.lower_rack_zero) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 / 2 + 0.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_13) / 2), prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_bar_7) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 / 2 + 0.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_13) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_13)) / 2, prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_rack_first) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + 1.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_14) / 2), prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_bar_8) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 / 2 + 1.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_14) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_14)) / 2, prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_rack_second) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 / 2 + 2.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_15) / 2), prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_bar_9) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 / 2 + 2.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_15) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_15)) / 2, prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_rack_third) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 + prop.box_width_10 / 2 + 3.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_16) / 2), prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_bar_10) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 + prop.box_width_10 / 2 + 3.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_16) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_16)) / 2, prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_rack_fourth) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 + prop.box_width_10 + prop.box_width_11 / 2 + 4.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_17) / 2), prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_bar_11) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 + prop.box_width_10 + prop.box_width_11 / 2 + 4.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_17) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_17)) / 2, prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_rack_fifth) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 + prop.box_width_10 + prop.box_width_11 + prop.box_width_12 / 2 + 5.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + ((prop.lowerRackY - prop.box_width_18) / 2), prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrBoxes[i] == part.lower_bar_12) {
          group.add(arrNum[i]);
          arrNum[i].position.set(resetWidth + +prop.box_width_7 + +prop.box_width_8 + prop.box_width_9 + prop.box_width_10 + prop.box_width_11 + prop.box_width_12 / 2 + 5.5 * prop.thickness - numberShift,
            -prop.height / 2 + +prop.floorHeight + +prop.baseFY + (prop.lowerRackY - prop.box_width_18) + (prop.lowerRackY - (prop.lowerRackY - prop.box_width_18)) / 2, prop.depth / 2 + numberShift);
          arrNum[i].position.y += prop.legsHeight;
        }
        if (arrNum[i] == part.textMesh10 || arrNum[i] == part.textMesh11 || arrNum[i] == part.textMesh12 || arrNum[i] == part.textMesh13 || arrNum[i] == part.textMesh14 || arrNum[i] == part.textMesh15 || arrNum[i] == part.textMesh16 || arrNum[i] == part.textMesh17 || arrNum[i] == part.textMesh18) {
          arrNum[i].position.x -= 15;
        }
      }

      // выставляю оригинальные размеры обратно
      prop.box_width_1 = saveWidth.width1;
      prop.box_width_2 = saveWidth.width2;
      prop.box_width_3 = saveWidth.width3;
      prop.box_width_4 = saveWidth.width4;
      prop.box_width_5 = saveWidth.width5;

      prop.box_width_7 = saveWidth.width7;
      prop.box_width_8 = saveWidth.width8;
      prop.box_width_9 = saveWidth.width9;
      prop.box_width_10 = saveWidth.width10;
      prop.box_width_11 = saveWidth.width11;

      prop.box_width_13 = saveWidth.width13;
      prop.box_width_14 = saveWidth.width14;
      prop.box_width_15 = saveWidth.width15;
      prop.box_width_16 = saveWidth.width16;
      prop.box_width_17 = saveWidth.width17;

      // выставляю номера секций в вёрстке
      var arrLayout = [];
      var arrLayoutNumbers = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth',
        'tenth', 'eleventh', 'twelfth', 'thirteen', 'fourteenth', 'fifteenth', 'sixteenth', 'seventeenth', 'eighteenth'];
      // arrLayout[0].addClass('first');

      $('.box__fill--first, .box__fill--second, box__fill--third, .box__fill--fourth, .box__fill--fifth, .box__fill--sixth, .box__fill--seventh, .box__fill--eighth, .box__fill--ninth, .box__fill--tenth, .box__fill--eleventh, .box__fill--twelfth, .box__fill--thirteen, .box__fill--fourteenth, .box__fill--fifteenth, .box__fill--sixteenth, .box__fill--seventeenth, .box__fill--eighteenth').removeClass('first second third fourth fifth sixth seventh eighth ninth tenth eleventh twelfth thirteen fourteenth fifteenth sixteenth seventeenth eighteenth');
      // показ/скрытие блоков секций + заношу в массив активных блоков
      if ((prop.entresol_rack >= 0) && stock.entresol) {
        $('.box__fill--first').removeClass('d-none');
        arrLayout.push($('.box__fill--first'));
      } else {
        $('.box__fill--first').addClass('d-none');
      }
      if ((prop.entresol_rack >= 1) && stock.entresol) {
        $('.box__fill--second').removeClass('d-none');
        arrLayout.push($('.box__fill--second'));
      } else {
        $('.box__fill--second').addClass('d-none');
      }
      if ((prop.entresol_rack >= 2) && stock.entresol) {
        $('.box__fill--third').removeClass('d-none');
        arrLayout.push($('.box__fill--third'));
      } else {
        $('.box__fill--third').addClass('d-none');
      }
      if ((prop.entresol_rack >= 3) && stock.entresol) {
        $('.box__fill--fourth').removeClass('d-none');
        arrLayout.push($('.box__fill--fourth'));
      } else {
        $('.box__fill--fourth').addClass('d-none');
      }
      if ((prop.entresol_rack >= 4) && stock.entresol) {
        $('.box__fill--fifth').removeClass('d-none');
        arrLayout.push($('.box__fill--fifth'));
      } else {
        $('.box__fill--fifth').addClass('d-none');
      }
      if ((prop.entresol_rack >= 5) && stock.entresol) {
        $('.box__fill--sixth').removeClass('d-none');
        arrLayout.push($('.box__fill--sixth'));
      } else {
        $('.box__fill--sixth').addClass('d-none');
      }

      if (prop.lower_rack >= 0) {
        $('.box__fill--seventh').removeClass('d-none');
        arrLayout.push($('.box__fill--seventh'));
        if (stock.box_split_7) {
          $('.box__fill--thirteen').removeClass('d-none');
          arrLayout.push($('.box__fill--thirteen'));
        } else {
          $('.box__fill--thirteen').addClass('d-none');
        }
      } else {
        $('.box__fill--seventh').addClass('d-none');
        $('.box__fill--thirteen').addClass('d-none');
      }

      if (prop.lower_rack >= 1) {
        $('.box__fill--eighth').removeClass('d-none');
        arrLayout.push($('.box__fill--eighth'));
        if (stock.box_split_8) {
          $('.box__fill--fourteenth').removeClass('d-none');
          arrLayout.push($('.box__fill--fourteenth'));
        } else {
          $('.box__fill--fourteenth').addClass('d-none');
        }
      } else {
        $('.box__fill--eighth').addClass('d-none');
        $('.box__fill--fourteenth').addClass('d-none');
      }

      if (prop.lower_rack >= 2) {
        $('.box__fill--ninth').removeClass('d-none');
        arrLayout.push($('.box__fill--ninth'));
        if (stock.box_split_9) {
          $('.box__fill--fifteenth').removeClass('d-none');
          arrLayout.push($('.box__fill--fifteenth'));
        } else {
          $('.box__fill--fifteenth').addClass('d-none');
        }
      } else {
        $('.box__fill--ninth').addClass('d-none');
        $('.box__fill--fifteenth').addClass('d-none');
      }

      if (prop.lower_rack >= 3) {
        $('.box__fill--tenth').removeClass('d-none');
        arrLayout.push($('.box__fill--tenth'));
        if (stock.box_split_10) {
          $('.box__fill--sixteenth').removeClass('d-none');
          arrLayout.push($('.box__fill--sixteenth'));
        } else {
          $('.box__fill--sixteenth').addClass('d-none');
        }
      } else {
        $('.box__fill--tenth').addClass('d-none');
        $('.box__fill--sixteenth').addClass('d-none');
      }

      if (prop.lower_rack >= 4) {
        $('.box__fill--eleventh').removeClass('d-none');
        arrLayout.push($('.box__fill--eleventh'));
        if (stock.box_split_11) {
          $('.box__fill--seventeenth').removeClass('d-none');
          arrLayout.push($('.box__fill--seventeenth'));
        } else {
          $('.box__fill--seventeenth').addClass('d-none');
        }
      } else {
        $('.box__fill--eleventh').addClass('d-none');
        $('.box__fill--seventeenth').addClass('d-none');
      }

      if (prop.lower_rack >= 5) {
        $('.box__fill--twelfth').removeClass('d-none');
        arrLayout.push($('.box__fill--twelfth'));
        if (stock.box_split_12) {
          $('.box__fill--eighteenth').removeClass('d-none');
          arrLayout.push($('.box__fill--eighteenth'));
        } else {
          $('.box__fill--eighteenth').addClass('d-none');
        }
      } else {
        $('.box__fill--twelfth').addClass('d-none');
        $('.box__fill--eighteenth').addClass('d-none');
      }

      // выдаю классы для получения номера секции в вёрстке
      for (var i = 0; i < arrLayout.length; i++) {
        arrLayout[i].addClass(arrLayoutNumbers[i]);
      }

    }

    var priceCalc = function() {
      // объект с расценками
      var rate = {
        material: $('#material_php').html(),
        materialWall: $('#materialWall_php').html(),
        materialWallFull: $('#materialWallFull_php').html(),
        rod: $('#rod_php').html(),
        handBracket: $('#handBracket_php').html(),
        handShell: $('#handShell_php').html(),
        legs_85: $('#legs_85_php').html(),
        legs_100: $('#legs_100_php').html(),
        legs_120: $('#legs_120_php').html(),
        legs_150: $('#legs_150_php').html(),
        legs_rollers: $('#legs_rollers_php').html(),
      };

      rate.rod = rate.rod / rate.material;

      // итоговая цена
      var price = 0;
      price += +rate.material * (prop.height + prop.width + prop.depth) / 25; // расход материала
      price += +rate.rack_l * stock.rack_l; // левая стойка
      price += +rate.rack_r * stock.rack_r; // правая стойка
      price += +rate.roof * stock.roof; // крыша

      var height = prop.height;
      var heightNoLegs = height - prop.legsHeight;
      var width = prop.width;
      var depth = prop.depth;

      price = (stock.rack_l * heightNoLegs * depth
      + stock.rack_r * heightNoLegs * depth
      + stock.roof * !stock.roof_cut * width * depth
      + stock.roof_in * stock.roof_cut * stock.roof_f * width * $('#inputNumber_roof_f').val()
      + stock.roof_in * stock.roof_cut * stock.roof_b * width * $('#inputNumber_roof_b').val()
      + stock.roof_out * stock.visor * width * $('#inputNumber_visor').val()
      + stock.roof_out * stock.visor_side * depth * $('#inputNumber_visor_side').val()
      + stock.entresol * width * depth
      + $('#inputNumber_entresol_amount').val() * prop.entresolHeight * depth
      + $('#inputNumber_lower_amount').val() * prop.lowerRackY * depth
      + stock.bottom * width * depth
      + stock.base_f * width * $('#inputNumber_base_height').val()
      + stock.base_b * width * $('#inputNumber_base_height').val()
      );

      if(stock.roof_out && stock.roof_cut) {
        price += stock.roof * width * depth;
      }

      if($('#inputNumber_entresol_amount').val() >= 0) {
        price += stock.box_fill_shelf_1 * $('#inputNumber_fill_amount_1').val() * $('#inputNumber_width_box_1').val() * depth;
        price += stock.box_fill_boxes_1 * $('#inputNumber_fill_amount_1').val() * $('#inputNumber_width_box_1').val() * depth * 1.6
        + stock.box_fill_boxes_1 * $('#inputNumber_width_box_1').val() * prop.entresolHeight;
        price += stock.box_fill_rod_1 * $('#inputNumber_width_box_1').val() * rate.rod;
        price += stock.box_wall_1 * $('#inputNumber_width_box_1').val() * prop.entresolHeight;
        price += !stock.box_door_no_1 * $('#inputNumber_width_box_1').val() * prop.entresolHeight;
      }

      if($('#inputNumber_entresol_amount').val() >= 1) {
        price += stock.box_fill_shelf_2 * $('#inputNumber_fill_amount_2').val() * $('#inputNumber_width_box_2').val() * depth;
        price += stock.box_fill_boxes_2 * $('#inputNumber_fill_amount_2').val() * $('#inputNumber_width_box_2').val() * depth * 1.6
        + stock.box_fill_boxes_2 * $('#inputNumber_width_box_2').val() * prop.entresolHeight;
        price += stock.box_fill_rod_2 * $('#inputNumber_width_box_2').val() * rate.rod;
        price += stock.box_wall_2 * $('#inputNumber_width_box_2').val() * prop.entresolHeight;
        price += !stock.box_door_no_2 * $('#inputNumber_width_box_2').val() * prop.entresolHeight;
      }

      if($('#inputNumber_entresol_amount').val() >= 2) {
        price += stock.box_fill_shelf_3 * $('#inputNumber_fill_amount_3').val() * $('#inputNumber_width_box_3').val() * depth;
        price += stock.box_fill_boxes_3 * $('#inputNumber_fill_amount_3').val() * $('#inputNumber_width_box_3').val() * depth * 1.6
        + stock.box_fill_boxes_3 * $('#inputNumber_width_box_3').val() * prop.entresolHeight;
        price += stock.box_fill_rod_3 * $('#inputNumber_width_box_3').val() * rate.rod;
        price += stock.box_wall_3 * $('#inputNumber_width_box_3').val() * prop.entresolHeight;
        price += !stock.box_door_no_3 * $('#inputNumber_width_box_3').val() * prop.entresolHeight;
      }

      if($('#inputNumber_entresol_amount').val() >= 3) {
        price += stock.box_fill_shelf_4 * $('#inputNumber_fill_amount_4').val() * $('#inputNumber_width_box_4').val() * depth;
        price += stock.box_fill_boxes_4 * $('#inputNumber_fill_amount_4').val() * $('#inputNumber_width_box_4').val() * depth * 1.6
        + stock.box_fill_boxes_4 * $('#inputNumber_width_box_4').val() * prop.entresolHeight;
        price += stock.box_fill_rod_4 * $('#inputNumber_width_box_4').val() * rate.rod;
        price += stock.box_wall_4 * $('#inputNumber_width_box_4').val() * prop.entresolHeight;
        price += !stock.box_door_no_4 * $('#inputNumber_width_box_4').val() * prop.entresolHeight;
      }

      if($('#inputNumber_entresol_amount').val() >= 4) {
        price += stock.box_fill_shelf_5 * $('#inputNumber_fill_amount_5').val() * $('#inputNumber_width_box_5').val() * depth;
        price += stock.box_fill_boxes_5 * $('#inputNumber_fill_amount_5').val() * $('#inputNumber_width_box_5').val() * depth * 1.6
        + stock.box_fill_boxes_5 * $('#inputNumber_width_box_5').val() * prop.entresolHeight;
        price += stock.box_fill_rod_5 * $('#inputNumber_width_box_5').val() * rate.rod;
        price += stock.box_wall_5 * $('#inputNumber_width_box_5').val() * prop.entresolHeight;
        price += !stock.box_door_no_5 * $('#inputNumber_width_box_5').val() * prop.entresolHeight;
      }

      if($('#inputNumber_entresol_amount').val() >= 5) {
        price += stock.box_fill_shelf_6 * $('#inputNumber_fill_amount_6').val() * $('#inputNumber_width_box_6').val() * depth;
        price += stock.box_fill_boxes_6 * $('#inputNumber_fill_amount_6').val() * $('#inputNumber_width_box_6').val() * depth * 1.6
        + stock.box_fill_boxes_6 * $('#inputNumber_width_box_6').val() * prop.entresolHeight;
        price += stock.box_fill_rod_6 * $('#inputNumber_width_box_6').val() * rate.rod;
        price += stock.box_wall_6 * $('#inputNumber_width_box_6').val() * prop.entresolHeight;
        price += !stock.box_door_no_6 * $('#inputNumber_width_box_6').val() * prop.entresolHeight;
      }

      if($('#inputNumber_lower_amount').val() >= 0) {
        price += stock.box_fill_shelf_7 * $('#inputNumber_fill_amount_7').val() * $('#inputNumber_width_box_7').val() * depth;
        price += stock.box_fill_boxes_7 * $('#inputNumber_fill_amount_7').val() * $('#inputNumber_width_box_7').val() * depth * 1.6
        + stock.box_fill_boxes_7 * $('#inputNumber_width_box_7').val() * prop.lowerRackY - $('#inputNumber_width_box_13').val();
        price += stock.box_fill_rod_7 * $('#inputNumber_width_box_7').val() * rate.rod;
        price += stock.box_wall_7 * $('#inputNumber_width_box_7').val() * prop.lowerRackY - $('#inputNumber_width_box_13').val();
        price += !stock.box_door_no_7 * $('#inputNumber_width_box_7').val() * prop.lowerRackY - $('#inputNumber_width_box_13').val();
      }

      if($('#inputNumber_lower_amount').val() >= 0) {
        price += stock.box_fill_shelf_13 * $('#inputNumber_fill_amount_13').val() * $('#inputNumber_width_box_7').val() * depth;
        price += stock.box_fill_boxes_13 * $('#inputNumber_fill_amount_13').val() * $('#inputNumber_width_box_7').val() * depth * 1.6
        + stock.box_fill_boxes_13 * $('#inputNumber_width_box_7').val() * $('#inputNumber_width_box_13').val();
        price += stock.box_fill_rod_13 * $('#inputNumber_width_box_7').val() * rate.rod;
        price += stock.box_wall_13 * $('#inputNumber_width_box_7').val() * $('#inputNumber_width_box_13').val();
        price += !stock.box_door_no_13 * $('#inputNumber_width_box_7').val() * $('#inputNumber_width_box_13').val();
      }

      if($('#inputNumber_lower_amount').val() >= 1) {
        price += stock.box_fill_shelf_8 * $('#inputNumber_fill_amount_8').val() * $('#inputNumber_width_box_8').val() * depth;
        price += stock.box_fill_boxes_8 * $('#inputNumber_fill_amount_8').val() * $('#inputNumber_width_box_8').val() * depth * 1.6
        + stock.box_fill_boxes_8 * $('#inputNumber_width_box_8').val() * prop.lowerRackY - $('#inputNumber_width_box_14').val();
        price += stock.box_fill_rod_8 * $('#inputNumber_width_box_8').val() * rate.rod;
        price += stock.box_wall_8 * $('#inputNumber_width_box_8').val() * prop.lowerRackY - $('#inputNumber_width_box_14').val();
        price += !stock.box_door_no_8 * $('#inputNumber_width_box_8').val() * prop.lowerRackY - $('#inputNumber_width_box_14').val();
      }

      if($('#inputNumber_lower_amount').val() >= 1) {
        price += stock.box_fill_shelf_14 * $('#inputNumber_fill_amount_14').val() * $('#inputNumber_width_box_8').val() * depth;
        price += stock.box_fill_boxes_14 * $('#inputNumber_fill_amount_14').val() * $('#inputNumber_width_box_8').val() * depth * 1.6
        + stock.box_fill_boxes_14 * $('#inputNumber_width_box_8').val() * $('#inputNumber_width_box_14').val();
        price += stock.box_fill_rod_14 * $('#inputNumber_width_box_8').val() * rate.rod;
        price += stock.box_wall_14 * $('#inputNumber_width_box_8').val() * $('#inputNumber_width_box_14').val();
        price += !stock.box_door_no_14 * $('#inputNumber_width_box_8').val() * $('#inputNumber_width_box_14').val();
      }

      if($('#inputNumber_lower_amount').val() >= 2) {
        price += stock.box_fill_shelf_9 * $('#inputNumber_fill_amount_9').val() * $('#inputNumber_width_box_9').val() * depth;
        price += stock.box_fill_boxes_9 * $('#inputNumber_fill_amount_9').val() * $('#inputNumber_width_box_9').val() * depth * 1.6
        + stock.box_fill_boxes_9 * $('#inputNumber_width_box_9').val() * prop.lowerRackY - $('#inputNumber_width_box_15').val();
        price += stock.box_fill_rod_9 * $('#inputNumber_width_box_9').val() * rate.rod;
        price += stock.box_wall_9 * $('#inputNumber_width_box_9').val() * prop.lowerRackY - $('#inputNumber_width_box_15').val();
        price += !stock.box_door_no_9 * $('#inputNumber_width_box_9').val() * prop.lowerRackY - $('#inputNumber_width_box_15').val();
      }

      if($('#inputNumber_lower_amount').val() >= 2) {
        price += stock.box_fill_shelf_15 * $('#inputNumber_fill_amount_15').val() * $('#inputNumber_width_box_9').val() * depth;
        price += stock.box_fill_boxes_15 * $('#inputNumber_fill_amount_15').val() * $('#inputNumber_width_box_9').val() * depth * 1.6
        + stock.box_fill_boxes_15 * $('#inputNumber_width_box_9').val() * $('#inputNumber_width_box_15').val();
        price += stock.box_fill_rod_15 * $('#inputNumber_width_box_9').val() * rate.rod;
        price += stock.box_wall_15 * $('#inputNumber_width_box_9').val() * $('#inputNumber_width_box_15').val();
        price += !stock.box_door_no_15 * $('#inputNumber_width_box_9').val() * $('#inputNumber_width_box_15').val();
      }

      if($('#inputNumber_lower_amount').val() >= 3) {
        price += stock.box_fill_shelf_10 * $('#inputNumber_fill_amount_10').val() * $('#inputNumber_width_box_10').val() * depth;
        price += stock.box_fill_boxes_10 * $('#inputNumber_fill_amount_10').val() * $('#inputNumber_width_box_10').val() * depth * 1.6
        + stock.box_fill_boxes_10 * $('#inputNumber_width_box_10').val() * prop.lowerRackY - $('#inputNumber_width_box_16').val();
        price += stock.box_fill_rod_10 * $('#inputNumber_width_box_10').val() * rate.rod;
        price += stock.box_wall_10 * $('#inputNumber_width_box_10').val() * prop.lowerRackY - $('#inputNumber_width_box_16').val();
        price += !stock.box_door_no_10 * $('#inputNumber_width_box_10').val() * prop.lowerRackY - $('#inputNumber_width_box_16').val();
      }

      if($('#inputNumber_lower_amount').val() >= 3) {
        price += stock.box_fill_shelf_16 * $('#inputNumber_fill_amount_16').val() * $('#inputNumber_width_box_10').val() * depth;
        price += stock.box_fill_boxes_16 * $('#inputNumber_fill_amount_16').val() * $('#inputNumber_width_box_10').val() * depth * 1.6
        + stock.box_fill_boxes_16 * $('#inputNumber_width_box_10').val() * $('#inputNumber_width_box_16').val();
        price += stock.box_fill_rod_16 * $('#inputNumber_width_box_10').val() * rate.rod;
        price += stock.box_wall_16 * $('#inputNumber_width_box_10').val() * $('#inputNumber_width_box_16').val();
        price += !stock.box_door_no_16 * $('#inputNumber_width_box_10').val() * $('#inputNumber_width_box_16').val();
      }

      if($('#inputNumber_lower_amount').val() >= 4) {
        price += stock.box_fill_shelf_11 * $('#inputNumber_fill_amount_11').val() * $('#inputNumber_width_box_11').val() * depth;
        price += stock.box_fill_boxes_11 * $('#inputNumber_fill_amount_11').val() * $('#inputNumber_width_box_11').val() * depth * 1.6
        + stock.box_fill_boxes_11 * $('#inputNumber_width_box_11').val() * prop.lowerRackY - $('#inputNumber_width_box_17').val();
        price += stock.box_fill_rod_11 * $('#inputNumber_width_box_11').val() * rate.rod;
        price += stock.box_wall_11 * $('#inputNumber_width_box_11').val() * prop.lowerRackY - $('#inputNumber_width_box_17').val();
        price += !stock.box_door_no_11 * $('#inputNumber_width_box_11').val() * prop.lowerRackY - $('#inputNumber_width_box_17').val();
      }

      if($('#inputNumber_lower_amount').val() >= 4) {
        price += stock.box_fill_shelf_17 * $('#inputNumber_fill_amount_17').val() * $('#inputNumber_width_box_11').val() * depth;
        price += stock.box_fill_boxes_17 * $('#inputNumber_fill_amount_17').val() * $('#inputNumber_width_box_11').val() * depth * 1.6
        + stock.box_fill_boxes_17 * $('#inputNumber_width_box_11').val() * $('#inputNumber_width_box_17').val();
        price += stock.box_fill_rod_17 * $('#inputNumber_width_box_11').val() * rate.rod;
        price += stock.box_wall_17 * $('#inputNumber_width_box_11').val() * $('#inputNumber_width_box_17').val();
        price += !stock.box_door_no_17 * $('#inputNumber_width_box_11').val() * $('#inputNumber_width_box_17').val();
      }

      if($('#inputNumber_lower_amount').val() >= 5) {
        price += stock.box_fill_shelf_12 * $('#inputNumber_fill_amount_12').val() * $('#inputNumber_width_box_12').val() * depth;
        price += stock.box_fill_boxes_12 * $('#inputNumber_fill_amount_12').val() * $('#inputNumber_width_box_12').val() * depth * 1.6
        + stock.box_fill_boxes_12 * $('#inputNumber_width_box_12').val() * prop.lowerRackY - $('#inputNumber_width_box_18').val();
        price += stock.box_fill_rod_12 * $('#inputNumber_width_box_12').val() * rate.rod;
        price += stock.box_wall_12 * $('#inputNumber_width_box_12').val() * prop.lowerRackY - $('#inputNumber_width_box_18').val();
        price += !stock.box_door_no_12 * $('#inputNumber_width_box_12').val() * prop.lowerRackY - $('#inputNumber_width_box_18').val();
      }

      if($('#inputNumber_lower_amount').val() >= 5) {
        price += stock.box_fill_shelf_18 * $('#inputNumber_fill_amount_18').val() * $('#inputNumber_width_box_12').val() * depth;
        price += stock.box_fill_boxes_18 * $('#inputNumber_fill_amount_18').val() * $('#inputNumber_width_box_12').val() * depth * 1.6
        + stock.box_fill_boxes_18 * $('#inputNumber_width_box_12').val() * $('#inputNumber_width_box_18').val();
        price += stock.box_fill_rod_18 * $('#inputNumber_width_box_12').val() * rate.rod;
        price += stock.box_wall_18 * $('#inputNumber_width_box_12').val() * $('#inputNumber_width_box_18').val();
        price += !stock.box_door_no_18 * $('#inputNumber_width_box_12').val() * $('#inputNumber_width_box_18').val();
      }

      // добавляю к стоимости box_split
      price += (stock.box_split_7 * $('#inputNumber_width_box_7').val()
      + stock.box_split_8 * $('#inputNumber_width_box_8').val()
      + stock.box_split_9 * $('#inputNumber_width_box_9').val()
      + stock.box_split_10 * $('#inputNumber_width_box_10').val()
      + stock.box_split_11 * $('#inputNumber_width_box_11').val()
      + stock.box_split_12 * $('#inputNumber_width_box_12').val()) * depth;

      // двери
      price += (stock.door_two_sl * 1.1 + stock.door_three_sl * 1.2 + stock.door_four_two_sl * 1.3 + stock.door_four_three_sl * 1.3 + stock.door_one_left_sw + stock.door_one_right_sw + stock.door_two_sw)
      * heightNoLegs * width;

      // ручки
      var priceHand = (stock.box_fill_boxes_1 * $('#inputNumber_fill_amount_1').val()
      + stock.box_fill_boxes_2 * $('#inputNumber_fill_amount_2').val()
      + stock.box_fill_boxes_3 * $('#inputNumber_fill_amount_3').val()
      + stock.box_fill_boxes_4 * $('#inputNumber_fill_amount_4').val()
      + stock.box_fill_boxes_5 * $('#inputNumber_fill_amount_5').val()
      + stock.box_fill_boxes_6 * $('#inputNumber_fill_amount_6').val()
      + stock.box_fill_boxes_7 * $('#inputNumber_fill_amount_7').val()
      + stock.box_fill_boxes_8 * $('#inputNumber_fill_amount_8').val()
      + stock.box_fill_boxes_9 * $('#inputNumber_fill_amount_9').val()
      + stock.box_fill_boxes_10 * $('#inputNumber_fill_amount_10').val()
      + stock.box_fill_boxes_11 * $('#inputNumber_fill_amount_11').val()
      + stock.box_fill_boxes_12 * $('#inputNumber_fill_amount_12').val()
      + stock.box_fill_boxes_13 * $('#inputNumber_fill_amount_13').val()
      + stock.box_fill_boxes_14 * $('#inputNumber_fill_amount_14').val()
      + stock.box_fill_boxes_15 * $('#inputNumber_fill_amount_15').val()
      + stock.box_fill_boxes_16 * $('#inputNumber_fill_amount_16').val()
      + stock.box_fill_boxes_17 * $('#inputNumber_fill_amount_17').val()
      + stock.box_fill_boxes_18 * $('#inputNumber_fill_amount_18').val()
      + stock.box_door_one_left_1 + stock.box_door_one_right_1 + stock.box_door_two_1 * 2
      + stock.box_door_one_left_2 + stock.box_door_one_right_2 + stock.box_door_two_2 * 2
      + stock.box_door_one_left_3 + stock.box_door_one_right_3 + stock.box_door_two_3 * 2
      + stock.box_door_one_left_4 + stock.box_door_one_right_4 + stock.box_door_two_4 * 2
      + stock.box_door_one_left_5 + stock.box_door_one_right_5 + stock.box_door_two_5 * 2
      + stock.box_door_one_left_6 + stock.box_door_one_right_6 + stock.box_door_two_6 * 2
      + stock.box_door_one_left_7 + stock.box_door_one_right_7 + stock.box_door_two_7 * 2
      + stock.box_door_one_left_8 + stock.box_door_one_right_8 + stock.box_door_two_8 * 2
      + stock.box_door_one_left_9 + stock.box_door_one_right_9 + stock.box_door_two_9 * 2
      + stock.box_door_one_left_10 + stock.box_door_one_right_10 + stock.box_door_two_10 * 2
      + stock.box_door_one_left_11 + stock.box_door_one_right_11 + stock.box_door_two_11 * 2
      + stock.box_door_one_left_12 + stock.box_door_one_right_12 + stock.box_door_two_12 * 2
      + stock.box_door_one_left_13 + stock.box_door_one_right_13 + stock.box_door_two_13 * 2
      + stock.box_door_one_left_14 + stock.box_door_one_right_14 + stock.box_door_two_14 * 2
      + stock.box_door_one_left_15 + stock.box_door_one_right_15 + stock.box_door_two_15 * 2
      + stock.box_door_one_left_16 + stock.box_door_one_right_16 + stock.box_door_two_16 * 2
      + stock.box_door_one_left_17 + stock.box_door_one_right_17 + stock.box_door_two_17 * 2
      + stock.box_door_one_left_18 + stock.box_door_one_right_18 + stock.box_door_two_18 * 2);
      if(stock.hand_no || stock.hand_cut) {
        priceHand = 0;
      }
      if(stock.hand_bracket) {
        priceHand = priceHand * rate.handBracket;
      }
      if(stock.hand_shell) {
        priceHand = priceHand * rate.handShell;
      }

      // ножки
      var priceLegs = 0;
      if(stock.legs_85) {
        priceLegs += rate.legs_85;
      }
      if(stock.legs_100) {
        priceLegs += rate.legs_100;
      }
      if(stock.legs_120) {
        priceLegs += rate.legs_120;
      }
      if(stock.legs_150) {
        priceLegs += rate.legs_150;
      }
      if(stock.legs_rollers) {
        priceLegs += rate.legs_rollers;
      }
      // применяю стоимость материала за 1кв.м
      price = price * rate.material;

      var priceWall = (stock.wall * height * width * rate.materialWall + stock.wall_full * height * width* rate.materialWallFull);
      price = price + priceWall;

      price = price / 1000000;
      price = priceHand + price + priceLegs;
      // добавляю услуги
      if(stock.assembly) {
        price = price + price * 0.2;
      }
      if(prop.delivery <= 15) {
        price = price + 500;
      } else {
        price = price + 500 + (prop.delivery - 15) * 5;
      }
      price = price + stock.rise * 200;

      // стоимость сборки, вбивается в badge
      var priceAssembly = Math.floor(price * 0.2);
      price = Math.floor(price);
      // привожу к строке, ставлю пробел каждые 3 символа
      priceAssembly = String(priceAssembly);
      price = String(price);
      priceAssembly = priceAssembly.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');
      price = price.replace(/(\d)(?=(\d{3})+(\D|$))/g, '$1 ');

      var check1 = price.replace(/\s/g, "");
      var check = +check1;
      if(isNaN(check)) {
        price = '';
        // console.log('right u know');
      }
      // отображаю в .price_js
      $('.badge__assembly--span').html(priceAssembly);
      $('.price_js').html(price);
      $('#input__price').val(price);

      console.log(prop.delivery);
    }
    // освещение
    var spotLight_first = new THREE.DirectionalLight(0xffffff);
    spotLight_first.position.set(0, 560, 1000);
    scene.add(spotLight_first);
    // var spotLight_second = new THREE.DirectionalLight(0xffffff);
    // spotLight_second.position.set(0, -560, 1000);
    // scene.add(spotLight_second);
    var spotLight_third = new THREE.DirectionalLight(0xffffff);
    spotLight_third.position.set(0, 0, -1500);
    scene.add(spotLight_third);

    var runningTools = function() {
      tools.shiftX = camera.position.x / 100;
      tools.shiftY = camera.position.y / 100;
      tools.shiftZ = camera.position.z / 100;
      tools.cameraDistance = Math.sqrt(Math.pow(camera.position.x, 2) + Math.pow(camera.position.y, 2) + Math.pow(camera.position.z, 2));

      if (tools.zoomIn && (tools.cameraDistance >= controls.minDistance)) {
        camera.position.x -= tools.shiftX;
        camera.position.y -= tools.shiftY;
        camera.position.z -= tools.shiftZ;
      }
      if (tools.zoomOut && (tools.cameraDistance <= controls.maxDistance)) {
        camera.position.x += tools.shiftX;
        camera.position.y += tools.shiftY;
        camera.position.z += tools.shiftZ;
      }
      if (tools.up) {
        group.rotation.x -= 0.015;
      }
      if (tools.down) {
        group.rotation.x += 0.015;
      }
      if (tools.left) {
        group.rotation.y -= 0.015;
      }
      if (tools.right) {
        group.rotation.y += 0.015;
      }
    }

    var setSizeLayout = function() {
      var panelHeight = $('.panel').height() - $('.panel__header-block').height() + 10;
      $('.panel__design').css({
        'height': panelHeight,
      })
      // console.log($('.panel__header-block').height());
    }

    // параметры камеры
    camera.position.set(settings.cameraX, settings.cameraY, settings.cameraZ);
    camera.lookAt(scene.position);

    function animate() {
      setSizeLayout();
      group.scale.set(0.02, 0.02, 0.02);
      requestAnimationFrame(animate);
      runningTools();
      resize();
      choiceMaterial();
      reconstruct();
      draw();
      drawSize();
      renderer.render(scene, camera);
      // setSizeLayout();
      priceCalc();
    }

    animate();

  </script>

  <?php
    // подключаюсь к бд
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
    
    // Соединяемся с базой, уведомляем об ошибке(если есть):
    $link = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($link->connect_error) {
      die('Ошибка : ('. $link->connect_errno .') '. $link->connect_error);
    }
    mysqli_set_charset($link, "utf8");

    $sql = "SELECT material, materialWall, materialWallFull, rod, handBracket, handShell, legs_85, legs_100, legs_120, legs_150, legs_rollers FROM rate";
    $result = mysqli_query($link, $sql);
    $row_cnt = $result->num_rows; // определение числа рядов в выборке
    $row = mysqli_fetch_array($result);

    $row['rack_l'];

    // code
    echo "<div id='material_php' class='d-none'>".$row['material']."</div>";
    echo "<div id='materialWall_php' class='d-none'>".$row['materialWall']."</div>";
    echo "<div id='materialWallFull_php' class='d-none'>".$row['materialWallFull']."</div>";
    echo "<div id='rod_php' class='d-none'>".$row['rod']."</div>";
    echo "<div id='handBracket_php' class='d-none'>".$row['handBracket']."</div>";
    echo "<div id='handShell_php' class='d-none'>".$row['handShell']."</div>";
    echo "<div id='legs_85_php' class='d-none'>".$row['legs_85']."</div>";
    echo "<div id='legs_100_php' class='d-none'>".$row['legs_100']."</div>";
    echo "<div id='legs_120_php' class='d-none'>".$row['legs_120']."</div>";
    echo "<div id='legs_150_php' class='d-none'>".$row['legs_150']."</div>";
    echo "<div id='legs_rollers_php' class='d-none'>".$row['legs_rollers']."</div>";
  ?>
</body>

</html>

<?php
  include "components/connect-scripts.php";
  // include "components/footer.php";
?>