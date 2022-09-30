<a href=""></a>
<div class="container pt-3" data-aos="fade-right">
    <?php
    if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
        echo  '<div class="alert alert-success text-center">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msg']);
    }
    ?>
    <div class="d-flex justify-content-end gap-3 my-3">
        <p class="d-block text-end ">
            <a href="<?php echo _WEB_ROOT . '/setting/add' ?>" class="px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50] no-underline	">Add link</a>
        </p>
        <p class="d-block text-end ">
            <a href="<?php echo _WEB_ROOT . '/setting/addfile' ?>" class="px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50] no-underline	">Add file</a>
        </p>
    </div>
    <form method="POST" action="" class="form-setting">
        <div class="d-flex gap-2 mb-3">

            <input type="text" name="kyw" class=" cate-input border-1 w-full outline-[#98cb50] px-2 py-2 rounded" placeholder="Search...">
            <button type="submit" class=" px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]">Search</button>
        </div>
    </form>
    <div class="text-center d-flex justify-content-center">

        <div class="loader">
            <!-- <div class="inner one"></div>
            <div class="inner two"></div>
            <div class="inner three"></div> -->
        </div>
    </div>
    <table class="table table-hover table-setting w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <thead>
            <tr class="text-[20px]  bg-gray-200 text-[#000] ">

                <td>#</td>
                <td>Config Key</td>
                <td>Config Value</td>

                <td>Created</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['setting']) && !empty($data['setting'])) {
                foreach ($data['setting'] as $item) {
            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['config_key'] ?></td>
                        <?php
                        $arr = ['jpg', 'png', 'jpeg'];
                        $check = 0;
                        foreach ($arr as $item2) {
                            if (str_contains($item['config_value'], $item2)) {
                                $check = 1;

                                break;
                            } else {
                                $check = 0;
                            }
                        }
                        if ($check == 0) {
                            echo '<td> ' . $item['config_value'] . ' </td>';
                        } else {
                            echo '<td> <img src="' . _PATH_UPLOAD_SETTING . '' . $item['config_value'] . '" alt="" height="50px" width="70px"> </td>';
                        }

                        ?>


                        <td><?php echo $item['created_at'] ?></td>
                        <td><?php echo $item['updated_at'] ?></td>
                        <?php

                        if ($check == 0) {
                        ?>
                            <td><a href="<?php echo _WEB_ROOT . '/setting/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <?php
                        } else {
                        ?>
                            <td><a href="<?php echo _WEB_ROOT . '/setting/editFile/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <?php

                        }
                        ?>

                        <td><a href="<?php echo _WEB_ROOT . '/setting/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="7" class="text-danger text-center">Không có dữ liệu</td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
</div>