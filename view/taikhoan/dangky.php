<form id="form-register" class="auth-form" action="index.php?act=dangky" method="post">
              <header class="auth-form__header">
                <h3 class="auth-form__header-item auth-form__heading">Đăng ký</h3>
                <span class="auth-form__header-item auth-form__switch-btn">Đăng nhập</span>
              </header>
              <div class="auth-form__form ">
                <div class="auth-form__group">
                  <input type="email" class="auth-form__input" placeholder="Email/Phone number" id="reg-username" name="email">
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                  <input type="text" class="auth-form__input" placeholder="user name" id="reg-password" name="user">
                  <span class="form-message"></span>
                </div>
                <div class="auth-form__group">
                  <input type="password" class="auth-form__input" placeholder="password" id="confirm-password" name="pass">
                  <span class="form-message"></span>
                </div>
                <p class="auth-form__policy-text">
                  Bằng việc đăng ký, bạn đã đồng ý với Shopee về
                  <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                  &
                  <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                </p>
                <div class="gap-90px"></div>
                <div class="auth-form__control right-align">
                  <button class="btn btn--large auth-form__control-back">TRỞ LẠI</button>
                  <button class="btn btn--large btn--primary">ĐĂNG KÝ</button>
                </div>
              </div>
              <div class="auth-form__social">
                <a href="" class="btn--with-icon auth-form__social-facebook text-color-link">
                  <i class="fa-brands fa-square-facebook auth-form__social-icon"></i>
                  <p class="btn--with-icon-desc">Kết nối với Facebook</p>
                </a>
                <a href="" class="btn--with-icon auth-form__social-google text-color-link">
                  <img class="auth-form__social-icon" width="512" alt="Google &quot;G&quot; Logo"
                    src="">
                  <p class="btn--with-icon-desc">Kết nối với Google</p>
                </a>
              </div>
            </form>