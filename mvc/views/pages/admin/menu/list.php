<a href=""></a>
<div class="container pt-3" data-aos="fade-right">
    <?php
    if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
        echo  '<div class="alert alert-success text-center">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msg']);
    }
    ?>
    <p class="d-block text-end my-4">
        <a href="<?php echo _WEB_ROOT . '/menu/add' ?>" class="px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50] no-underline	">Add</a>
    </p>
    <form method="POST" action="" class="form-menu">
        <div class="d-flex gap-2 mb-3">

            <input type="text" name="kyw" class=" cate-input border-1 w-full outline-[#98cb50] px-2 py-2 rounded" placeholder="Search...">
            <button type="submit" class=" px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]">Search</button>
        </div>
    </form>
    <div class="text-center d-flex justify-content-center">

        <div class="loader"></div>
    </div>
    <table class="table table-hover table-menu w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <thead>
            <tr class="text-[20px]  bg-gray-200 text-[#000] ">

                <td>#</td>
                <td>Name</td>
                <td>Created</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['menu']) && !empty($data['menu'])) {
                foreach ($data['menu'] as $item) {
            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td><?php echo $item['updated_at'] ?></td>
                        <td><a href="<?php echo _WEB_ROOT . '/menu/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="<?php echo _WEB_ROOT . '/menu/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="6" class="text-danger text-center">Kh??ng c?? d??? li???u</td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
</div>