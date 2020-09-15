<?php
  include "components/head.php";
?>

<title>Настройки | Berkshire Investment</title>
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

<?php 
  include "components/connect-scripts.php";
  include "components/footer.php";
?>