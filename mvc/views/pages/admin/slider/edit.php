<div class="container mx-auto">

    <h1 class="text-center py-3">Sửa slider </h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">


        <div class="row mb-3">
            <label for="name" class="col-sm-12  col-form-label">Caption</label>
            <div class="col-sm-12">
                <input type="text" name="caption" class="form-control" id="caption" placeholder="Nhập caption " value="<?php echo $data['slider']['caption'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="img" class="col-sm-12  col-form-label">Img</label>
            <div class="col-sm-12">
                <input type="file" name="img" class="form-control" id="img">
            </div>
            <img src="<?php echo _PATH_UPLOAD_SLIDER . $data['slider']['img'] ?>" class="mt-3 border" style="object-fit:cover;width:200px" alt="">
        </div>

        <div class=" row mb-3">
            <label for="" class="col-sm-12  col-form-label">Title</label>
            <div class="col-sm-12">
                <input type="text" name="title" class="form-control" id="title" placeholder="Nhập title" value="<?php echo $data['slider']['title'] ?>">
            </div>
        </div>


        <input type="hidden" name="slider">
        <button type="submit" class="btn btn-primary" name="updateSlider">Update</button>
    </form>
</div>