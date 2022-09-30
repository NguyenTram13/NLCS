<div class="container mx-auto">

    <h1 class="text-center py-3">Thêm nhóm người dùng </h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post">
        <div class="row mb-3">
            <label for="" class="col-sm-12  col-form-label">Name</label>
            <div class="col-sm-12">
                <input type="text" required name="name" class="form-control" id="name">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="addGrps">Add</button>
    </form>
</div>