<div class="container mx-auto">

    <h1 class="text-center py-3">Thêm người dùng </h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">

                <div class="row mb-3">
                    <label for="name" class="col-sm-12  col-form-label">Nhóm người dùng</label>

                    <select class="form-select" name="grps" aria-label="Default select example">
                        <option selected>Chọn danh mục </option>
                        <?php
                        foreach ($data['Grps'] as $item) {

                            echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option> ';
                        }

                        ?>


                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="row mb-3">
                    <label for="name" class="col-sm-12  col-form-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nhập vào tên người dùng">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="row mb-3">
                    <label for="img" class="col-sm-12  col-form-label">Avt</label>
                    <div class="col-sm-12">
                        <input type="file" name="avt" class="form-control" id="avt">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="row mb-3">
                    <label for="" class="col-sm-12  col-form-label">Email</label>
                    <div class="col-sm-12">
                        <input type="email" name="email" multiple class="form-control" id="email">
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="row mb-3">
                    <label for="" class="col-sm-12  col-form-label">Password</label>
                    <div class="col-sm-12">
                        <input type="password" name="password" multiple class="form-control" id="password" placeholder="Nhập mật khẩu">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="row mb-3">
                    <label for="" class="col-sm-12  col-form-label">Confirm password</label>
                    <div class="col-sm-12">
                        <input type="password" name="cf-password" class="form-control" id="cf-password" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="row mb-3">
                    <label for="" class="col-sm-12  col-form-label">Address</label>
                    <div class="col-sm-12">
                        <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ">
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="row mb-3">
                    <label for="" class="col-sm-12  col-form-label">Tel</label>
                    <div class="col-sm-12">
                        <input type="text" name="tel" class="form-control" id="tel" placeholder="Nhập số điện thoại">
                    </div>
                </div>
            </div>

        </div>

        <input type="hidden" name="users">
        <button type="submit" class="btn btn-primary" name="addUsers">Add</button>
    </form>
</div>