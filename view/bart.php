<div class="container-sort-bar__underline"></div>
      <div class="grid">
        <div class="row small-gutters negative-margin">
          <div class="category-wrapper col l-2 m-0 c-0">
            <div class="category">
              <div class="category__heading">
                <i class="fa-solid fa-list-ul"></i>
                <h4 class="category__title">danh mục</h4>
              </div>
              <ul class="category__list">
                <?php
                foreach ($loaddm as $key => $dsdm) {
                  extract($dsdm);
                  $linkdm = "index.php?act=sanpham&iddm=" . $id;
                  echo '<li class="category-item category-item-active" style="--color: #7ca6d5">
                  <a href="' . $linkdm . '" class="category-item__link text-color-link">'. $name .'</a></li>';
                }
                ?>
                <!-- <li class="category-item category-item-active" style="--color: #7ca6d5">
                  <a href="#" class="category-item__link text-color-link">ohui thefirst tái sinh
                  </a>
                </li>
                <li class="category-item" style="--color: #6bc2b5">
                  <a href="#" class="category-item__link text-color-link">ohui dưỡng trắng
                  </a>
                </li>
                <li class="category-item" style="--color: #7ac974">
                  <a href="#" class="category-item__link text-color-link">ohui prime advancer
                  </a>
                </li>
                <li class="category-item" style="--color: #7ca6d5">
                  <a href="#" class="category-item__link text-color-link">ohui dưỡng ẩm
                  </a>
                </li>
                <li class="category-item" style="--color: #6bc2b5">
                  <a href="#" class="category-item__link text-color-link">ohui chống lão hóa
                  </a>
                </li>
                <li class="category-item" style="--color: #7ac974">
                  <a href="#" class="category-item__link text-color-link">ohui chống nắng
                  </a>
                </li>
                <li class="category-item" style="--color: #7ca6d5">
                  <a href="#" class="category-item__link text-color-link">ohui make up
                  </a>
                </li>
                <li class="category-item" style="--color: #6bc2b5">
                  <a href="#" class="category-item__link text-color-link">whoo bichup
                  </a>
                </li>
                <li class="category-item" style="--color: #7ac974">
                  <a href="#" class="category-item__link text-color-link">whoo make up
                  </a>
                </li>
                <li class="category-item" style="--color: #7ca6d5">
                  <a href="#" class="category-item__link text-color-link">whoo chống lão hóa
                  </a>
                </li>
                <li class="category-item" style="--color: #6bc2b5">
                  <a href="#" class="category-item__link text-color-link">who dưỡng ẩm
                  </a>
                </li>
                <li class="category-item" style="--color: #7ac974">
                  <a href="#" class="category-item__link text-color-link">whoo dưỡng trắng
                  </a>
                </li>
                <li class="category-item" style="--color: #7ca6d5">
                  <a href="#" class="category-item__link text-color-link">whoo detox
                  </a>
                </li>
                <li class="category-item" style="--color: #6bc2b5">
                  <a href="#" class="category-item__link text-color-link">whoo trắng hồng rạng rỡ
                  </a>
                </li>
                <li class="category-item" style="--color: #6bc2b5">
                  <a href="#" class="category-item__link text-color-link">whoo Royal trinh nữ hoàng cung - trọn bộ dưỡng
                    da, làm đẹp
                  </a>
                </li> -->
              </ul>
            </div>
          </div>