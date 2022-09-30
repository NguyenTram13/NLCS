<div class="main ">
    <div class="main-login">
        <h1>ĐĂNG NHẬP</h1>
        <p class="mess"></p>
        <?php
        if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
            echo  '<div class="alert alert-success">' . $_SESSION['msg'] . '</div>';
            $_SESSION['msg'] = '';
        }
        if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo  '<div class="alert alert-danger">' . $data['thongbao'] . '</div>';
            $data['thongbao'] = '';
        }
        ?>
        <form action="<?php echo _WEB_ROOT . '/user' ?>" method="post" class="form-login" autocomplete="off">
            <div class="main-login-item">
                <div class="main-login-item-content">
                    <span>Email</span>
                    <span>*</span>
                </div>
                <input class="text-black email" type="text" name="email" placeholder="mail@gmail.com" />
                <p class="error error-email"></p>
            </div>
            <div class="main-login-item">
                <div class="main-login-item-content">
                    <span>Mật khẩu</span>
                    <span>*</span>
                </div>
                <input class="text-black pwd" type="password" name="password" placeholder="Password" />
                <p class="error error-pwd"></p>
            </div>
            <input type="hidden" name="login" value="login">

            <button class="main-login-btn" type="submit">Đăng nhập</button>

        </form>

        <p data-url="<?php echo _WEB_ROOT . '/user/loginWithFace' ?>" class=" hover:bg-[#98cb50] text-[#98cb50] hover:text-[#fff] w-[250px] h-[70px] pt-3 tracking-[4px] text-center text-[21px] login_withFace">Face id</p>
        <div class="footer-form">
            <a class="main-login-return tracking-[4px]" href="<?php echo _WEB_ROOT . '/user/register' ?>">
                <p>Đăng ký</p>
            </a>
            <a class="main-login-return" href="<?php echo _WEB_ROOT . '/user/index' ?>">
                <p>Quay về cửa hàng</p>
            </a>
        </div>
    </div>
</div>