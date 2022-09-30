<div class="main ">
    <div class="main-register">
        <h1>ĐĂNG KÝ</h1>
        <p class="mess"></p>
        <?php
        if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo  '<div class="alert alert-' . $data['color'] . '">' . $data['thongbao'] . '</div>';
        }

        ?>
        <form action="<?php echo _WEB_ROOT . '/user/register' ?>" method="post" class="form-register" autocomplete="off">
            <div class="main-register-item">
                <div class="main-register-item-content">
                    <span>Họ và tên</span>
                    <span>*</span>
                </div>
                <input class="name" type="text" name="fullname" placeholder="Nguyen Van A" />
                <p class="error error-name"></p>
            </div>
            <div class="main-register-item">
                <div class="main-register-item-content">
                    <span>Email</span>
                    <span>*</span>
                </div>
                <input class="email" type="text" name="email" placeholder="mail@gmail.com" />
                <p class="error error-email"></p>
            </div>
            <div class="main-register-item">
                <div class="main-register-item-content">
                    <span>Mật khẩu</span>
                    <span>*</span>
                </div>
                <input class="pwd" type="password" name="password" placeholder="Password" />
                <p class="error error-pwd"></p>
            </div>
            <div class="main-register-item">
                <div class="main-register-item-content">
                    <span>Nhập lại mật khẩu</span>
                    <span>*</span>
                </div>
                <input class="confirm-password" type="password" name="confirm-password" placeholder="Confirm password" />
                <p class="error error-confirmpwd"></p>
            </div>
            <div class="main-register-item">
                <div class="main-register-item-content">
                    <span>Số điện thoại</span>
                    <span>*</span>
                </div>
                <input class="sdt" type="text" name="sdt" />
                <p class="error error-sdt"></p>
            </div>
            <div class="main-register-item">
                <div class="main-register-item-content">
                    <span>Địa chỉ</span>
                    <span>*</span>
                </div>
                <input class="address" type="text" name="address" placeholder="Số nhà, xã/phường, quận/huyện, tỉnh/thành phố." />
                <p class="error error-address"></p>
            </div>
            <input type="hidden" name="register" value="register">
            <button class="main-register-btn" type="submit">Đăng ký</button>
        </form>
        <div class="footer-form">
            <a class="main-register-return" href="<?php echo _WEB_ROOT . '/user/login' ?>">
                <p>Đăng nhập</p>
            </a>
            <a class="main-register-return" href="<?php echo _WEB_ROOT . '/user/index' ?>">
                <p>Quay về cửa hàng</p>
            </a>
        </div>
    </div>
</div>