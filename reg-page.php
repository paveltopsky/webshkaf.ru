<?php
  include "components/head.php";
?>

<title>3D CALC | Регистрация</title>
</head>

<body>

<?php 
  include "components/header.php";
?>

  <section class="form-wrap" style="padding-top: 90px;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-10 col-md-5 col-xl-4 m-auto">
          <form action="functions/registration.php" method="POST" enctype="application/x-www-form-urlencoded"
            class="form-group__wrap m-auto text-right">
            <div class="form__title">Регистрация</div>
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
            <button type="submit" class="btn btn-primary w-100">Зарегистрироваться</button>

          </form>
          <div class="form__under-q">уже есть аккаунт? <a href="login-page.php">Войти</a></div>
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