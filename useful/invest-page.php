<?php
  include "components/head.php";
?>

<title>Инвестиции | Berkshire Investment</title>
</head>

<body>

<?php 
  include "components/header.php";
  include "functions/connect.php";
?>

<!-- проверка на наличие cookie -->
<?php if (isset($_COOKIE['cookie'])): ?>
  <section class="">
    <div class="container">

      <div class="row">
        <div class="col-12">Инвестиционные предложения</div>
      </div>

      <div class="row">

        <aside class="col-4 tool">
          <div class="d-flex flex-column">
            <div class="tool__item"><a href="account.php">Рабочий стол</a></div>
            <div class="tool__item"><a href="invest-page.php">Инвестировать</a></div>
            <div class="tool__item"><a href="settings-page.php">Настройки</a></div>
          </div>
        </aside>
        
        <div class="col-8 flex-column dep__wrap">
          <div class="d-flex">
            <div class="dep__offer">
              <h5><b>10 минут</b></h5>
              <div>Минимальная сумма: 100р</div>
              <div>Размер дивидендов: <b>10%</b></div>
              <div>Доходность в конце срока</div>
              <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal1">
                Инвестировать
              </button>
            </div>
            <div class="dep__offer">
              <h5><b>20 минут</b></h5>
              <div>Минимальная сумма: 100р</div>
              <div>Размер дивидендов: <b>30%</b></div>
              <div>Доходность в конце срока</div>
              <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal2">
                Инвестировать
              </button>
            </div>
          </div>
        </div>
      </div>
      <?php 
        include "components/exit-btn.php";
      ?>
    </div>
    <!-- /.container -->
  </section>
  <!-- /. -->

<?php else: ?>
  <div class="ended-cookie__error">
    <div class="container">
      <?php echo "доступ имеют только авторизованные пользователи"; ?>
    </div>
  </div>
<?php endif; ?>

<!-- Modal1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Пополнение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="new-invest.php" method="POST" enctype="application/x-www-form-urlencoded" class="form-group__wrap m-auto text-right" style="padding: 0;">
          <div class="form-group">
            <div class="input-group mb-4">
              <div class="input-group-addon">
                <span class="input-group-text">Введите сумму</span>
              </div>
              <input type="number" name="amount" class="form-control" placeholder="">
              <input type="hidden" name="type" value="1">
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Инвестировать</button>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Пополнение</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="new-invest.php" method="POST" enctype="application/x-www-form-urlencoded" class="form-group__wrap m-auto text-right" style="padding: 0;">
          <div class="form-group">
            <div class="input-group mb-4">
              <div class="input-group-addon">
                <span class="input-group-text">Введите сумму</span>
              </div>
              <input type="number" name="amount" class="form-control" placeholder="">
              <input type="hidden" name="type" value="2">
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100">Инвестировать</button>
        </form>

      </div>
    </div>
  </div>
</div>

<?php 
  include "components/connect-scripts.php";
  include "components/footer.php";
?>