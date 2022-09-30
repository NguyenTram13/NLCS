<div class="container mx-auto pt-3" data-aos="fade-right">
    <?php
    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <?php
    if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
        echo  '<div class="alert alert-success text-center">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msg']);
    }
    ?>
    <p class="d-block text-end my-4">
        <a href="<?php echo _WEB_ROOT . '/users/add' ?>" class="px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50] no-underline	">Add</a>
    </p>
    <form method="POST" action="" class="form-users">

        <div class="row">
            <div class=" col-3 ">
                <select class=" w-full border outline-[#98cb50] rounded select-users py-2" name="grps" aria-label="Default select example">
                    <option class="hover:bg-[#98cb50]" value="0" <?php echo 0 === $data['idGrpsSelected'] ? "selected" : "" ?>>Chọn nhóm người dùng </option>
                    <?php
                    foreach ($data['Grps'] as $item) {
                        $selected =   $item['id'] == $data['idGrpsSelected'] ? "selected" : "";
                        echo '<option class="hover:bg-[#98cb50]" ' . $selected . ' value="' . $item['id'] . '">' . $item['name'] . '</option> ';
                    }

                    ?>


                </select>

            </div>

            <div class="col-9">
                <div class="d-flex gap-2 mb-3">

                    <input type="text" name="kyw" class=" cate-input border-1 w-full outline-[#98cb50] px-2 py-2 rounded" placeholder="Search...">
                    <button type="submit" class=" px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]">Search</button>
                </div>
            </div>
        </div>

    </form>
    <div class="text-center d-flex justify-content-center">

        <div class="loader"></div>

    </div>
    <table class="table table-hover w-100 table-users" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <thead>
            <tr class="text-[20px]  bg-gray-200 text-[#000] ">

                <td>#</td>
                <td>Name</td>
                <td width='20px'>Avt</td>
                <td>Email</td>
                <!-- <td width='25%'>Password</td> -->
                <td>Address</td>
                <td>Tel</td>
                <td>Created</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['users']) && !empty($data['users'])) {
                foreach ($data['users'] as $item) {
                    if (empty($item['avt'])) {

                        $hinhpath = _PATH_UPLOAD_AVT . '/avt.jpg';
                    } else {
                        $hinhpath = _PATH_UPLOAD_AVT . $item['avt'];
                    }

            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><?php echo  '<img height="40" class ="rounded-circle" src="' . $hinhpath . '"/> ' ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['address'] ?></td>
                        <td><?php echo $item['tel'] ?></td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td><a href="<?php echo _WEB_ROOT . '/user/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="<?php echo _WEB_ROOT . '/user/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="10" class="text-danger text-center">Không có dữ liệu</td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
</div>