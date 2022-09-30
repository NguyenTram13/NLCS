<div class="container mx-auto">

    <h1 class="text-center py-3">Sửa trạng thái bill</h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-12  col-form-label">Status</label>
            <div class="col-sm-12">
                <input type="text" required name="status" class="form-control" id="status" value="<?php echo $data['bill']['status'] ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="Update">Update</button>
    </form>
</div>