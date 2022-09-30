<div class="container mx-auto">

  <h1 class="text-center py-3">Thêm sản phẩm</h1>
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
        <option selected>Chọn danh mục </option>
        <?php
        foreach ($data['Cates'] as $item) {

          echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option> ';
        }

        ?>


      </select>
    </div>
    <div class="row mb-3">
      <label for="name" class="col-sm-12  col-form-label">Name</label>
      <div class="col-sm-12">
        <input type="text" required name="name" class="form-control" id="name" placeholder="Nhập vào tên sản phẩm">
      </div>
    </div>
    <div class="row mb-3">
      <label for="img" class="col-sm-12  col-form-label">Img</label>
      <div class="col-sm-12">
        <input type="file" required name="img" class="form-control" id="img">
      </div>
    </div>
    <div class="row mb-3">
      <label for="" class="col-sm-12  col-form-label">Image Detail</label>
      <div class="col-sm-12">
        <input type="file" required name="image_detail[]" multiple class="form-control" id="img">
      </div>
    </div>
    <div class="row mb-3">
      <label for="" class="col-sm-12  col-form-label">Price</label>
      <div class="col-sm-12">
        <input type="text" required name="price" class="form-control" id="price" placeholder="Nhập giá sản phẩm">
      </div>
    </div>
    <div class="row mb-3">
      <label for="" class="col-sm-12  col-form-label">Describes</label>
      <div class="col-sm-12">
        <textarea class="form-control" name="describes" id="describes" cols="30" rows="5" placeholder="Nhập mô tả sản phẩm"></textarea>
        <!-- <input type="text" required name="describes" class="form-control" id="describes"> -->
      </div>
    </div>

    <input type="hidden" name="pros">
    <button type="submit" class="btn btn-primary" name="addPros">Add</button>
  </form>
</div>