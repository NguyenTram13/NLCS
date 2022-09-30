<a href=""></a>
<div class="container pt-3" data-aos="fade-right">
    <?php
    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <p class="d-block text-end my-4">
        <a href="<?php echo _WEB_ROOT . '/products/add' ?>" class="px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50] no-underline	">Add</a>
    </p>
    <form method="POST" action="" class="form-product">

        <div class="row">
            <div class=" col-3">
                <select class="form-select select-product" name="cate" aria-label="Default select example">
                    <option value="0" <?php echo 0 === $data['idCateSelected'] ? "selected" : "" ?>>Chọn danh mục </option>
                    <?php
                    foreach ($data['Cates'] as $item) {
                        $selected =   $item['id'] == $data['idCateSelected'] ? "selected" : "";
                        echo '<option ' . $selected . ' value="' . $item['id'] . '">' . $item['name'] . '</option> ';
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
    <table class="table table-hover w-100 table-products" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <thead>
            <tr class="text-[20px]  bg-gray-200 text-[#000] ">

                <td>#</td>
                <td>Name</td>
                <td>Img</td>
                <td>Price</td>
                <td width='25%'>Describes</td>
                <td>Views</td>
                <td>Created</td>
                <!-- <td>Cate</td> -->

                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['pros']) && !empty($data['pros'])) {
                foreach ($data['pros'] as $item) {
                    $hinhpath = _PATH_UPLOAD_PRODUCT . $item['img'];

            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo  '<img height="80" src="' . $hinhpath . '"/> ' ?></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['describes'] ?></td>
                        <td><?php echo $item['views'] ?></td>

                        <td><?php echo $item['created_at'] ?></td>
                        <!-- <td><?php echo $item['Cates']['name'] ?></td> -->
                        <td><a href="<?php echo _WEB_ROOT . '/products/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="<?php echo _WEB_ROOT . '/products/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

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