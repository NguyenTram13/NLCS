<?php


class Category extends Controller
{
    private $category;
    function __construct()
    {
        $this->category = $this->model('CategoryModel');
    }
    function list()
    {
        $kyw = "";
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        $cate = $this->category->getCate($kyw);
        return $this->view(
            'admin',
            [
                'page' => 'category/list',
                'cates' => $cate,


            ]
        );
    }

    function add()
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];
            $date = date('Y-m-d H:i:s');
            $add = $this->category->addCate($name, $date);
            if ($add) {
                $thongbao = "Thêm danh mục thành công";
            } else {
                $thongbao = "Thêm danh mục thất bại";
            }
            return $this->view(
                'admin',
                [
                    'page' => 'category/add',

                    'thongbao' => $thongbao

                ]
            );
        } else {
            return $this->view(
                'admin',
                [
                    'page' => 'category/add',


                ]
            );
        }
    }

    function edit($id)
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $date = date('Y-m-d H:i:s');

            $name = $_POST['name'];
            $edit = $this->category->editCate($id, $name, $date);
            if ($edit) {
                $thongbao = "Sửa danh mục thành công";
            } else {
                $thongbao = "Sửa danh mục thất bại";
            }
            $oneCate = $this->category->getone_Cate($id);
            return $this->view(
                'admin',
                [
                    'page' => 'category/edit',

                    'thongbao' => $thongbao,
                    'cate' => $oneCate,

                ]
            );
        } else {
            $oneCate = $this->category->getone_Cate($id);


            return $this->view(
                'admin',
                [
                    'page' => 'category/edit',
                    'cate' => $oneCate,

                ]
            );
        }
    }
    function delete($id)
    {

        $del = $this->category->deleteCate($id);
        if ($del) {
            $thongbao = "Xóa danh mục thành công";
        } else {
            $thongbao = "Xóa danh mục thất bại";
        }
        $cate = $this->category->getCate("");
        return $this->view(
            'admin',
            [
                'page' => 'category/list',
                'cates' => $cate,
                'thongbao' => $thongbao,

            ]
        );
    }
}
