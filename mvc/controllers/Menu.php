<?php


class Menu extends Controller
{
    private $menu;
    function __construct()
    {
        $this->menu = $this->model('MenuModel');
    }
    function list()
    {
        $kyw = "";
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        $menu = $this->menu->getMenu($kyw);
        return $this->view(
            'admin',
            [
                'page' => 'menu/list',
                'menu' => $menu,


            ]
        );
    }

    function add()
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];
            $date = date('Y-m-d H:i:s');
            $add = $this->menu->addMenu($name, $date);
            if ($add) {
                $thongbao = "Thêm menu thành công";
            } else {
                $thongbao = "Thêm menu thất bại";
            }
            return $this->view(
                'admin',
                [
                    'page' => 'menu/add',

                    'thongbao' => $thongbao

                ]
            );
        } else {
            return $this->view(
                'admin',
                [
                    'page' => 'menu/add',


                ]
            );
        }
    }

    function edit($id)
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $date = date('Y-m-d H:i:s');

            $name = $_POST['name'];
            $edit = $this->menu->editMenu($id, $name, $date);
            if ($edit) {
                $thongbao = "Sửa menu thành công";
            } else {
                $thongbao = "Sửa menu thất bại";
            }
            $oneMenu = $this->menu->getone_Menu($id);
            return $this->view(
                'admin',
                [
                    'page' => 'menu/edit',

                    'thongbao' => $thongbao,
                    'menu' => $oneMenu,

                ]
            );
        } else {
            $oneMenu = $this->menu->getone_Menu($id);


            return $this->view(
                'admin',
                [
                    'page' => 'menu/edit',
                    'menu' => $oneMenu,

                ]
            );
        }
    }
    function delete($id)
    {

        $del = $this->menu->deleteMenu($id);
        if ($del) {
            $_SESSION['msg'] = "Xóa menu thành công!";
            header("Location: " . _WEB_ROOT . "/menu/list");
        } else {
            $_SESSION['msg'] = "Xóa menu thất bại!";
            header("Location: " . _WEB_ROOT . "/menu/list");
        }
    }
}
