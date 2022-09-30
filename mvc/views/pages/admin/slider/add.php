<div class="container mx-auto">

    <h1 class="text-center py-3">Thêm slider</h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="" class="col-sm-12  col-form-label">Caption</label>
            <div class="col-sm-12">
                <input type="text" required name="caption" class="form-control" id="caption" placeholder="Nhập vào caption">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-12  col-form-label">Img</label>
            <div class="col-sm-12">
                <input type="file" name="img" class="form-control" id="img">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-12  col-form-label">Title</label>
            <div class="col-sm-12">
                <input type="text" required name="title" class="form-control" id="title" placeholder="Nhập vào title">
            </div>
        </div>
        <input type="hidden" name="slider">
        <button type="submit" class="btn btn-primary" name="addSlider">Add</button>
    </form>
</div>