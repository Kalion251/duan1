<div class="product">
              <div class="grid">
                <div class="product-list row small-gutters">
                  <?php 
                  foreach($spnew as $sp) {
                    extract($sp);
                    $hinh = $URL_UPLOAD.$img;
                    $linksp = "index.php?act=chitiet&idsp=".$idsp;
                    echo '<div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="'.$linksp.'" class="product-item text-color-link">
                      <div class="product-item__img"  style="background-image: url('.$hinh.')">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">'.$name.'</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-current-price">'.$price.'đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">lượt xem '.$luotxem.'</span>
                          </div>
                          <form action="index.php?act=cart" mehtod="post">
                          <input type="hidden" name="id" value="'.$idsp.'">
                          <input type="hidden" name="id" value="'.$name.'"> 
                          <input type="hidden" name="id" value="'.$img.'">
                          <input type="hidden" name="id" value="'.$price.'">
                          <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                          </form>  
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">10%</p>
                        giảm

                      </div>
                    </a>
                  </div>';
                  }
                  ?>
                  <!-- <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://images.pexels.com/photos/8488289/pexels-photo-8488289.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">OHUI Miracle Moisture Special Set Trọn bộ chăm sóc dưỡng ẩm cơ
                          bản 484ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">5,000,000đ</span>
                            <span class="product-main__price-current-price">3,300,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 12,4k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">ohui</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">10%</p>
                        giảm

                      </div>
                    </a>
                  </div> -->
                  <!-- <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://images.pexels.com/photos/13709184/pexels-photo-13709184.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo BICHUP Self-Generating Anti-Aging Essence Tinh chất Tự Sinh
                          cho làn da sức mạnh tự sinh trưởng 20ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">2,000,000đ</span>
                            <span class="product-main__price-current-price">1,500,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 1k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">20%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://images.pexels.com/photos/276923/pexels-photo-276923.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo Vital Hydrating Sun Fluid SPF50+/PA+++ Sữa chống nắng Đông Y
                          dành cho mọi loại da, đặc biệt phù hợp da mụn và nhạy cảm 60ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">1,700,000đ</span>
                            <span class="product-main__price-current-price">1,100,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 4k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">15%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://images.pexels.com/photos/4565780/pexels-photo-4565780.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo Cleansing Oil Dầu tẩy trang chống lão hóa Đông Y làm sạch
                          nhẹ nhàng cung cấp dưỡng chất thảo mộc phong phú cho da 200ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">1,250,000đ</span>
                            <span class="product-main__price-current-price">1,050,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 14k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">10%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://images.pexels.com/photos/4565782/pexels-photo-4565782.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">OHUI Miracle Moisture Special Set Trọn bộ chăm sóc dưỡng ẩm cơ
                          bản 484ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">5,000,000đ</span>
                            <span class="product-main__price-current-price">3,300,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 12k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">ohui</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">30%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://i.pinimg.com/564x/89/d9/84/89d984e0b853221e64bf250d48233339.jpg)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo BICHUP Self-Generating Anti-Aging Essence Tinh chất Tự Sinh
                          cho làn da sức mạnh tự sinh trưởng 20ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">2,000,000đ</span>
                            <span class="product-main__price-current-price">1,500,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 120</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">50%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://i.pinimg.com/564x/49/1c/02/491c02026bd71a67b686bc5012349cf8.jpg)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo Vital Hydrating Sun Fluid SPF50+/PA+++ Sữa chống nắng Đông Y
                          dành cho mọi loại da, đặc biệt phù hợp da mụn và nhạy cảm 60ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">1,700,000đ</span>
                            <span class="product-main__price-current-price">1,100,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 54k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">20%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://i.pinimg.com/564x/c7/36/30/c73630e37f3758849080ccca98e76a48.jpg)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo Cleansing Oil Dầu tẩy trang chống lão hóa Đông Y làm sạch
                          nhẹ nhàng cung cấp dưỡng chất thảo mộc phong phú cho da 200ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">1,250,000đ</span>
                            <span class="product-main__price-current-price">1,050,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 14</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">10%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://i.pinimg.com/564x/0a/23/3e/0a233e32989bb79e528f0b20c63851c2.jpg)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">OHUI Miracle Moisture Special Set Trọn bộ chăm sóc dưỡng ẩm cơ
                          bản 484ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">5,000,000đ</span>
                            <span class="product-main__price-current-price">3,300,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 12,4k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">ohui</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">10%</p>
                        giảm

                      </div>
                    </a>
                  </div>
                  <div class="product-item-wrapper col l-2-4 m-4 c-6">
                    <a href="#" class="product-item text-color-link">
                      <div class="product-item__img"
                        style="background-image: url(https://i.pinimg.com/564x/1f/0a/68/1f0a68fbbae6fef6cdec6bdbcc8e0aea.jpg)">
                      </div>
                      <div class="product-main">
                        _
                        <h4 class="product-main__name">Whoo BICHUP Self-Generating Anti-Aging Essence Tinh chất Tự Sinh
                          cho làn da sức mạnh tự sinh trưởng 20ml</h4>
                        <div class="product__main-body">
                          <h3 class="product-main__price">
                            <span class="product-main__price-old-price">2,000,000đ</span>
                            <span class="product-main__price-current-price">1,500,000đ</span>
                          </h3>
                          <div class="product-main__action">
                            <div class="product-main__action-like hide-on-mobile-tablet">
                              <i class="product-main__action-like--empty fa-regular fa-heart"></i>
                              <i class="product-main__action-like--fill fa-solid fa-heart"></i>
                            </div>
                            <div class="product-main__action-rating">
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                              <i class="product-main__action-star fa-solid fa-star"></i>
                            </div>
                            <span class="product-main__action-sold">Đã bán 1k</span>
                          </div>
                          <div class="product-main__origin hide-on-mobile">
                            <span class="product-main__origin-brand">whoo</span>
                            <span class="product-main__origin-nation">hàn quốc</span>
                          </div>
                        </div>
                      </div>
                      <div class="product-item__favorite">
                        <i class="product-item__favorite-icon fa-solid fa-check"></i>
                        <span>Yêu thích</span>
                      </div>
                      <div class="product-item__discount">
                        <p class="product-item__discount-percent">20%</p>
                        giảm

                      </div>
                    </a>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="pagination">
              <button class="btn btn--small pagination__control-btn prev-btn">
                <i class="fa-solid fa-angle-left"></i>
              </button>
              <div class="pagination__page-wrapper"></div>
              <button class="btn btn--small pagination__control-btn next-btn">
                <i class="fa-solid fa-angle-right"></i>
              </button>
            </div>
          
          </div>