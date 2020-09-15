  <header class="header" style="position: absolute; width: 100%;">
    <div class="container-fluid bg-dark" style="padding: 0">
    <div class="container" style="padding: 0">
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <a class="navbar-brand mr-5" href="index.php">Редактор мебели</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Редактор</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="account-page.php">Личный кабинет</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown ссылки
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">ссылка</a>
                <a class="dropdown-item" href="#">ссылка</a>
                <a class="dropdown-item" href="#">ссылка</a>
              </div>
            </li> -->
          </ul>
        </div>
        <!-- Button trigger modal -->
        <div class="navbar__link">
          <?php if ($_COOKIE['cookie']): ?>
            <?php
              if($_SERVER['REQUEST_URI'] == '/index.php') {
                echo '<div data-toggle="modal" data-target="#saveModal" class="btn btn-secondary mr-3 d-none d-lg-inline-block">
                <svg class="svg__save" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" >
                  <g>
                  	<g>
                  		<g>
                  			<path d="M166,332h180c8.284,0,15-6.716,15-15s-6.716-15-15-15H166c-8.284,0-15,6.716-15,15S157.716,332,166,332z"/>
                  			<path d="M166,392h180c8.284,0,15-6.716,15-15s-6.716-15-15-15H166c-8.284,0-15,6.716-15,15S157.716,392,166,392z"/>
                  			<path d="M507.606,84.394l-80-80C424.793,1.58,420.978,0,417,0H15C6.716,0,0,6.716,0,15v482c0,8.284,6.716,15,15,15
                  				c6.912,0,477.495,0,482,0c8.284,0,15-6.716,15-15V95C512,91.021,510.419,87.206,507.606,84.394z M121,30h210v100H121V30z
                  				 M391,482H121V272h270V482z M482,482h-61V257c0-8.284-6.716-15-15-15H106c-8.284,0-15,6.716-15,15v225H30V30h61v115
                  				c0,8.284,6.716,15,15,15h240c8.284,0,15-6.716,15-15V30h49.787L482,101.213V482z"/>
                  			<path d="M166,452h180c8.284,0,15-6.716,15-15s-6.716-15-15-15H166c-8.284,0-15,6.716-15,15S157.716,452,166,452z"/>
                  		</g>
                  	</g>
                  </g>
                </svg>
                сохранить модель
                </div>';
              } else {
                echo '<a href="index.php" class="btn btn-secondary mr-3 d-none d-lg-inline-block">
                  <svg class="svg__pencil" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m4.996 19.754c-.192 0-.384-.073-.53-.22-.293-.293-.293-.768 0-1.061l13.098-13.098c.293-.293.768-.293 1.061 0s.293.768 0 1.061l-13.099 13.099c-.146.146-.338.219-.53.219z"/><path d="m.75 24c-.197 0-.389-.078-.53-.22-.178-.177-.254-.432-.205-.677l1.415-7.071c.029-.146.101-.279.205-.383l14.569-14.57c1.39-1.391 3.817-1.392 5.211 0l1.506 1.506c1.437 1.437 1.437 3.774 0 5.211l-14.569 14.569c-.104.105-.238.176-.383.205l-7.071 1.415c-.049.01-.099.015-.148.015zm2.105-7.452-1.149 5.746 5.745-1.15 14.409-14.408c.852-.852.852-2.238 0-3.09l-1.506-1.506c-.828-.826-2.268-.825-3.09 0zm4.966 5.287h.01z"/><path d="m7.821 22.585c-.192 0-.384-.073-.53-.22l-5.656-5.656c-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0l5.656 5.656c.293.293.293.768 0 1.061-.147.147-.338.22-.531.22z"/><path d="m20.923 9.483c-.192 0-.384-.073-.53-.22l-5.656-5.656c-.293-.293-.293-.768 0-1.061s.768-.293 1.061 0l5.656 5.656c.293.293.293.768 0 1.061-.147.147-.339.22-.531.22z"/></svg>
                  Редактор
                </a>';
              }
            ?>
            <!-- <span>line</span> -->
            <a href="account-page.php" class="btn btn-secondary">
            <!-- <svg class="svg__profile" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g id="svg__profile"><path d="m426 495.983h-340c-25.364 0-46-20.635-46-46v-242.02c0-8.836 7.163-16 16-16s16 7.164 16 16v242.02c0 7.72 6.28 14 14 14h340c7.72 0 14-6.28 14-14v-242.02c0-8.836 7.163-16 16-16s16 7.164 16 16v242.02c0 25.364-20.635 46-46 46z"/><path d="m496 263.958c-4.095 0-8.189-1.562-11.313-4.687l-198.989-198.987c-16.375-16.376-43.02-16.376-59.396 0l-198.988 198.988c-6.248 6.249-16.379 6.249-22.627 0-6.249-6.248-6.249-16.379 0-22.627l198.988-198.989c28.852-28.852 75.799-28.852 104.65 0l198.988 198.988c6.249 6.249 6.249 16.379 0 22.627-3.123 3.125-7.218 4.687-11.313 4.687z"/><path d="m320 495.983h-128c-8.837 0-16-7.164-16-16v-142c0-27.57 22.43-50 50-50h60c27.57 0 50 22.43 50 50v142c0 8.836-7.163 16-16 16zm-112-32h96v-126c0-9.925-8.075-18-18-18h-60c-9.925 0-18 8.075-18 18z"/></g></svg> -->
            <svg class="svg__profile" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
              <g>
              	<g>
              		<path d="M256,0C115.03,0,0,115.05,0,256c0,142.255,116.376,256,256,256c67.985,0,132.324-26.698,180.812-75.188
              			C485.298,388.327,512,324.113,512,256C512,115.03,396.95,0,256,0z M391,437.141c-9.456,7.065-19.488,13.396-30,18.935V407
              			c0-8.284-6.716-15-15-15s-15,6.716-15,15v62.191C307.519,477.476,282.28,482,256,482c-26.28,0-51.519-4.524-75-12.809V407
              			c0-8.284-6.716-15-15-15s-15,6.716-15,15v49.076c-10.512-5.539-20.544-11.87-30-18.935V407c0-41.907,33.645-76,75-76
              			c2.699,0,116.757,0,120,0c41.355,0,75,34.093,75,76V437.141z M181,226c0-41.355,33.645-75,75-75
              			c40.522,0,73.642,32.304,74.959,72.511c-1.28,40.924-32.594,75.376-70.904,77.382C216.784,303.156,181,268.881,181,226z
              			 M421,410.262c0-61.902-44.063-103.28-93.742-108.651c1.956-1.917,3.855-3.919,5.688-6.008
              			C350.499,275.597,361,249.268,361,220.907c0-1.051-0.108-2.077-0.314-3.067C356.508,163.741,311.151,121,256,121
              			c-57.897,0-105,47.103-105,105c0,28.899,11.477,55.784,32.323,75.775C134.415,307.744,91,348.728,91,410.262
              			C53.188,369.844,30,315.583,30,256C30,131.383,131.383,30,256,30s226,101.383,226,226C482,315.583,458.812,369.844,421,410.262z"
              			/>
              	</g>
              </g>
            </svg>
              <?php
                echo $_COOKIE['login'];
              ?>
            </a>
          <?php else: ?>
            <?php
              if($_SERVER['REQUEST_URI'] == '/index.php') {
                echo '<div class="btn mr-2 d-none d-lg-inline-block" style="color: white; text-decoration: underline;">
                сохранение доступно после регистрации
                </div>';
              } elseif ($_SERVER['REQUEST_URI'] == '/') {
                echo '<div class="btn mr-2 d-none d-lg-inline-block" style="color: white; text-decoration: underline;">
                сохранение доступно после регистрации
                </div>';
              } else {
                
              }
            ?>
            <a href="login-page.php" class="btn btn-secondary mr-3">
              Вход
            </a>
            <a href="reg-page.php" class="btn btn-secondary">
              Регистрация
            </a>
          <?php endif; ?>
        </div>
      </nav>
    </div>
      

    </div>
    <!-- /.container -->
  </header>

  <!-- <div class="save__btn" data-toggle="modal" data-target="#saveModal">Сохранить модель</div> -->

  <!-- /.header -->