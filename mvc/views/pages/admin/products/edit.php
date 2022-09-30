<div class="container mx-auto">

  <h1 class="text-center py-3">Sửa sản phẩm</h1>
  <?php

  if (isset($data['thongbao']) && $data['thongbao'] != "") {
    echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
    unset($data['thongbao']);
  }
  ?>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="row mb-3">
      <label for="name" class="col-sm-12  col-form-label">Danh mục</label>

      <select class="form-select" name="cate" aria-label="Default select example">
        <?php
        $select = '';
        foreach ($data['Cates'] as $item) {
          if ($item['id'] === $data['pros']['idCate']) {
            $select = 'selected';
          } else {
            $select = '';
          }

          echo '<option ' . $select . ' value="' . $item['id'] . '">' . $item['name'] . '</option> ';
        }

        ?>


      </select>
    </div>
    <div class="row mb-3">
      <label for="name" class="col-sm-12  col-form-label">Name</label>
      <div class="col-sm-12">
        <input type="text" name="name" class="form-control" id="name" placeholder="Nhập vào tên sản phẩm" value="<?php echo $data['pros']['name'] ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="img" class="col-sm-12  col-form-label">Img</label>
      <div class="col-sm-12">
        <input type="file" name="img" class="form-control" id="img">
      </div>
      <img src="<?php echo _PATH_UPLOAD_PRODUCT . $data['pros']['img'] ?>" class="mt-3 border" style="object-fit:cover;width:200px" alt="">
    </div>
    <div class=" row mb-3">
      <label for="" class="col-sm-12  col-form-label">Image Detail</label>
      <div class="col-sm-12">
        <input type="file" name="image_detail[]" multiple class="form-control" id="img">
      </div>
      <div class="d-flex gap-3">
        <?php
        foreach ($data['imgDetail'] as $item) {
          echo '
        
        <img src="' . _PATH_UPLOAD_PRODUCT . $item["path_img"] . '" class="mt-3 border " style="object-fit:cover;width:200px" alt="">
        ';
        }
        ?>

      </div>

    </div>
    <div class=" row mb-3">
      <label for="" class="col-sm-12  col-form-label">Price</label>
      <div class="col-sm-12">
        <input type="text" name="price" class="form-control" id="price" placeholder="Nhập giá sản phẩm" value="<?php echo $data['pros']['price'] ?>">
      </div>
    </div>
    <div class=" row mb-3">
      <label for="" class="col-sm-12  col-form-label">Describes</label>
      <div class="col-sm-12">
        <textarea class="form-control" name="describes" id="describes" cols="30" rows="5" placeholder="Nhập mô tả sản phẩm">
        <?php echo $data['pros']['describes'] ?>
        </textarea>
        <!-- <input type=" text"  name="describes" class="form-control" id="describes"> -->
      </div>
    </div>

    <input type="hidden" name="pros">
    <button type="submit" class="btn btn-primary" name="updatePros">Update</button>
  </form>
</div>