<div class="container mx-auto">

    <h1 class="text-center py-3">Sửa Setting</h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="" class="col-sm-12  col-form-label">Config Key</label>
            <div class="col-sm-12">
                <input type="text" required name="config_key" class="form-control" id="config_key" value="<?php echo $data['setting']['config_key'] ?>">
            </div>
        </div>
        <div class=" row mb-3">
            <label for="" class="col-sm-12  col-form-label">Config value</label>
            <div class="col-sm-12">
                <input type="file" name="config_value" class="form-control" id="config_value">
            </div>
            <img src="<?php echo _PATH_UPLOAD_SETTING . $data['setting']['config_value'] ?>" class="mt-3 " style="object-fit:cover;width:200px" alt="">

        </div>
        <button type=" submit" class="btn btn-primary" name="updateSetting">Update</button>
    </form>
</div>