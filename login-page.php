<?php
  include "components/head.php";
?>

<title>3D CALC | Логин</title>
</head>

<body>

<?php 
  include "components/header.php";
?>

<section class="form-wrap" style="padding-top: 90px;">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-10 col-md-5 col-xl-4 m-auto">
        <form action="functions/login.php" method="POST" enctype="application/x-www-form-urlencoded" class="form-group__wrap m-auto text-right">
         <div class="form__title">Авторизация</div>
         <!-- проверка на наличие cookie -->
        <?php if (isset($_COOKIE["new-user"])): ?>
          <div class="text__success">Вы успешно зарегистрировались</div>
        <?php else: ?>
          <div></div>
        <?php endif; ?>
          <div class="form-group">
            <div class="input-group mb-4">
              <div class="input-group-addon">
                <span class="input-group-text">Логин</span>
              </div>
                <input type="text" name="login" class="form-control" placeholder="">
              </div>
              <div class="input-group">
                <div class="input-group-addon">
                  <span class="input-group-text">Пароль</span>
                </div>
                <input type="text" name="password" class="form-control" placeholder="">
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Войти</button>

          </form>
          <div class="form__under-q">нет аккаунта? <a href="reg-page.php">Создать</a></div>
        </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.form-wrap -->

<?php 
  include "components/connect-scripts.php";
  include "components/footer.php";
?>

