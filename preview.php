<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3D CALC | Предпросмотр</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="panel">

          <!-- Отображение материала -->
          <div class="row mt-2 mb-4">
            <div class="col-12">
              <a a href="index.php" class="link__open-preview d-flex">
                <div class="panel__svg mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  	 viewBox="0 0 512 512" xml:space="preserve">
                    <g>
                    	<g>
                    		<path d="M142.716,293.147l-94-107.602l94-107.602c7.596-8.705,6.71-21.924-1.995-29.527c-8.705-7.596-21.917-6.703-29.527,1.995
                    			L5.169,171.782c-6.892,7.882-6.892,19.65,0,27.532l106.026,121.372c4.143,4.729,9.94,7.157,15.771,7.157
                    			c4.883,0,9.786-1.702,13.755-5.169C149.427,315.071,150.319,301.852,142.716,293.147z"/>
                    	</g>
                    </g>
                    <g>
                    	<g>
                    		<path d="M359.93,164.619H20.926C9.368,164.619,0,173.986,0,185.545c0,11.558,9.368,20.926,20.926,20.926H359.93
                    			c60.776,0,110.218,49.441,110.218,110.211S420.706,426.893,359.93,426.893H48.828c-11.558,0-20.926,9.368-20.926,20.926
                    			c0,11.558,9.368,20.926,20.926,20.926H359.93c83.844,0,152.07-68.219,152.07-152.063S443.781,164.619,359.93,164.619z"/>
                    	</g>
                    </g>
                  </svg>
                </div>
                <span class="mt-1">Вернуться в редактор</span>
              </a>
            </div>
          </div>

        <p style="font-weight: bold;">Выберите материал:</p>

        <!-- Первый блок -->
        <div class="row">
          <div class="col-5 flex-start">
            <label>Первый блок</label>
          </div>
          <div class="col-7">
            <select id="inputSelect_material1" class="flex">
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

        <!-- Второй блок -->
        <div class="row">
          <div class="col-5 flex-start">
            <label>Второй блок</label>
          </div>
          <div class="col-7">
            <select id="inputSelect_material2" class="flex">
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

        <!-- Третий блок -->
        <div class="row">
          <div class="col-5 flex-start">
            <label>Третий блок</label>
          </div>
          <div class="col-7">
            <select id="inputSelect_material3" class="flex">
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
              <option value="дрифтвуд" selected>Дрифтвуд</option>
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

    </div>
    <!-- /.panel -->
  </div>
  <!-- /.calc-wrap -->

  <div class="mobile__warning d-block d-xl-none container">
    <div class="alert alert-warning" role="alert">
      <strong>Ошибка!</strong> Просмотр доступен только для ПК версии
    </div>
  </div>
  <!-- /.mobile__warning -->

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

  <script type="module">
    ///////////////////////////////////////////////////////////////////////////
    // THREE.JS ///////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////

    import * as THREE from './js/three.module.js';
    import { OrbitControls } from './js/OrbitControls.js';

    // MAIN THREE.JS

    var settings = {
      cameraX: -250,
      cameraY: 620,
      cameraZ: 2000,
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
    }

    var wrap = $('#wrap');
    var width = document.getElementById('wrap').offsetWidth;
    var height = document.getElementById('wrap').offsetHeight;

    // THREE.JS
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(40, width / height, 0.1, 300000);
    var renderer = new THREE.WebGLRenderer();

    // устанавливаю серый цвет фона, размеры
    renderer.setClearColor(0xEEEEEE, 1);
    renderer.setSize(width / 1, height / 1);
    wrap.append(renderer.domElement);

    // controls | вращение камеры, зум
    var controls = new OrbitControls(camera, renderer.domElement);
    controls.maxDistance = 310000;
    controls.minDistance = 150;
    controls.rotateSpeed = 0.6;
    controls.zoomSpeed = 1;

    // оси координат
    var axes = new THREE.AxesHelper(150);
    // scene.add(axes);

    // CUSTOME CODE

    // материалы

    // по умолчанию цвета
    prop.textureWord1 = 'баменда_венге_тёмный';
    prop.textureWord2 = 'акация_лэйклэнд';
    prop.textureWord3 = 'дрифтвуд';

    // обработка изменений
    prop.textureMap1 = new THREE.TextureLoader().load('textures/' + prop.textureWord1 + '.jpg');
    $('#inputSelect_material1').change(function () {
      prop.textureWord1 = $('#inputSelect_material1').val();
      prop.textureMap1 = new THREE.TextureLoader().load('textures/' + prop.textureWord1 + '.jpg');
    });

    prop.textureMap2 = new THREE.TextureLoader().load('textures/' + prop.textureWord2 + '.jpg');
    $('#inputSelect_material2').change(function () {
      prop.textureWord2 = $('#inputSelect_material2').val();
      prop.textureMap2 = new THREE.TextureLoader().load('textures/' + prop.textureWord2 + '.jpg');
    });

    prop.textureMap3 = new THREE.TextureLoader().load('textures/' + prop.textureWord3 + '.jpg');
    $('#inputSelect_material3').change(function () {
      prop.textureWord3 = $('#inputSelect_material3').val();
      prop.textureMap3 = new THREE.TextureLoader().load('textures/' + prop.textureWord3 + '.jpg');
    });

    // для отключённых материалов
    var material = {};

    var choiceMaterial = function() {
      var texture1 = new THREE.MeshBasicMaterial({
        map: prop.textureMap1,
      });
      var texture2 = new THREE.MeshBasicMaterial({
        map: prop.textureMap2,
      });
      var texture3 = new THREE.MeshBasicMaterial({
        map: prop.textureMap3,
      });

      material.first = texture1;
      material.second = texture2;
      material.third = texture3;
    }

    var group = new THREE.Group();
    group.position.set(0, 0, 0);
    scene.add(group);

    var draw = function() {
      // var textureWord = 'bamenda';
    // var word = 'textures/' + textureWord + '.jpg';
    // console.log(word);
    // var texture = new THREE.TextureLoader().load(word);
    var geometry = new THREE.BoxGeometry(480, 600, 20);
    // var material = new THREE.MeshBasicMaterial({
    //   map: texture
    // });
    var box1 = new THREE.Mesh(geometry, material.first);
    var box2 = new THREE.Mesh(geometry, material.second);
    var box3 = new THREE.Mesh(geometry, material.third);
    group.add(box1, box2, box3);
    box1.position.x -= 600;
    box3.position.x += 600;
    }

    // освещение
    var spotLight_first = new THREE.DirectionalLight(0xffffff);
    spotLight_first.position.set(0, 560, 1000);
    scene.add(spotLight_first);
    var spotLight_second = new THREE.DirectionalLight(0xffffff);
    spotLight_second.position.set(0, -560, 1000);
    scene.add(spotLight_second);
    var spotLight_third = new THREE.DirectionalLight(0xffffff);
    spotLight_third.position.set(0, 0, -500);
    scene.add(spotLight_third);

    // параметры камеры
    camera.position.set(settings.cameraX, settings.cameraY, settings.cameraZ);
    camera.lookAt(scene.position);

    // инструменты
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
    
    var runningTools = function () {
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

    function animate() {
      requestAnimationFrame(animate);
      renderer.render(scene, camera);
      choiceMaterial();
      runningTools();
      draw();
    }

    animate();

  </script>
</body>

</html>