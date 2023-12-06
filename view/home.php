<?php include "head.php"; ?>

<body>
  <div class="app">
    <div class="header-mobile__search">
      <div class="select-container header-mobile__search-input-wrap">
        <input type="text" class="select-btn option-content header-mobile__search-input"
          placeholder="Tìm trong shop này">
        <!-- Search history -->
        <div class="item--option-wrapper header-mobile__search-history">
          <h4 class="header-mobile__search-history-item header-mobile__search-history-heading">Lịch sử tìm kiếm</h4>
          <ul class="header-mobile__search-history-list">
            <li class="item--option header-mobile__search-history-item">
              <a class="option-link gray-bgc-hover" href="#">Sữa rửa mặt</a>
            </li>
            <li class="item--option header-mobile__search-history-item">
              <a class="option-link gray-bgc-hover" href="#">Kem dưỡng da</a>
            </li>
          </ul>
        </div>
      </div>
      <span class="header-mobile__search-separate"></span>
      <div class="select-container header-mobile__search-select select-hover-btn">
        <span class="option-content header-mobile__search-select-label">Trong shop</span>
        <i class="header-mobile__search-select-icon fa-solid fa-angle-down"></i>
        <ul class="item--option-wrapper header-mobile__search-option">
          <li class="item--option item--option-with-check header-mobile__search-option-item selected">
            <a href="#" class="option-link gray-bgc-hover">Trong shop</a>
          </li>
          <li class="item--option item--option-with-check header-mobile__search-option-item">
            <a href="#" class="option-link gray-bgc-hover">Tất cả</a>
          </li>
        </ul>
      </div>
      <button class="header-mobile__search-btn btn-hover-opacity">
        <i class="header-search-icon fa-solid fa-magnifying-glass"></i>
      </button>
    </div>
<?php include "header.php" ?>
    <div class="container">
      <ul class="container-sort-bar hide-on-PC">
        <li class="container-sort-bar__item">
          <a href="#" class="container-sort-bar__link container-sort-bar__link-normal item--separate">Liên quan</a>
        </li>
        <li class="container-sort-bar__item">
          <a href="#" class="container-sort-bar__link container-sort-bar__link-normal item--separate">Mới nhất</a>
        </li>
        <li class="container-sort-bar__item">
          <a href="#" class="container-sort-bar__link container-sort-bar__link-normal item--separate">Bán chạy</a>
        </li>
        <li class="container-sort-bar__item">
          <div href="#" class="container-sort-bar__link container-sort-bar__link-select select-container">
            <span class="option-content">Giá</span>
            <span class="option-on-min-display-content">Giá</span>
            <div class="up-down-arrow-icon-wrapper">
              <i class="up-down-arrow-icon fa-solid fa-angle-up"></i>
              <i class="up-down-arrow-icon fa-solid fa-angle-down"></i>
            </div>
            <div class="container-sort-bar__icon-price">
              <i class="fa-solid fa-arrow-up"></i>
            </div>
            <div class="container-sort-bar__icon-price">
              <i class="fa-solid fa-arrow-down"></i>
            </div>
          </div>
        </li>
      </ul>
      <?php include "bart.php" ?>
      <?php include "nav_ngang.php" ?>

        <?php include "product.php" ?>
      </div>
    </div>
  </div>
  <?php include "footer.php" ?>