<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="http://localhost/Du_ANONE/#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?= BASE_URL ?>assets/client/assets/img/logo.png" alt=""> -->
        <h1><?= $GLOBALS['settings'] ['logo'] ?? null ?> </h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="http://localhost/Du_ANONE/#">Danh Sách Sản Phẩm</a></li>
          <li><a href="<?= BASE_URL ?>?act=postall">Danh Sách Bài Viết</a></li>
          <li><a href="<?= BASE_URL ?>?act=posttintuc">Tin Tức</a></li>
          <li><a href="<?= BASE_URL ?>?act=postlienhe">Liên Hệ</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="<?= $GLOBALS['settings'] ['link_facebook'] ?? null ?>" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="<?= $GLOBALS['settings'] ['link_twitter'] ?? null ?>" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="<?= $GLOBALS['settings'] ['link_instagram'] ?? null ?>" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header>