<?php


class Groups extends Controller
{
    private $groups;
    function __construct()
    {
        $this->groups = $this->model('GroupModel');
    }
    function list()
    {
        $kyw = "";
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        $grps = $this->groups->getGrps($kyw);
        return $this->view(
            'admin',
            [
                'page' => 'groups/list',
                'grps' => $grps,


            ]
        );
    }

    function add()
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];
            $date = date('Y-m-d H:i:s');
            $add = $this->groups->addGrps($name, $date);
            if ($add) {
                $thongbao = "Thêm nhóm người dùng thành công";
            } else {
                $thongbao = "Thêm nhóm người dùng thất bại";
            }
            return $this->view(
                'admin',
                [
                    'page' => 'groups/add',

                    'thongbao' => $thongbao

                ]
            );
        } else {
            return $this->view(
                'admin',
                [
                    'page' => 'groups/add',


                ]
            );
        }
    }

    function edit($id)
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $date = date('Y-m-d H:i:s');

            $name = $_POST['name'];
            $edit = $this->groups->editGrps($id, $name, $date);
            if ($edit) {
                $thongbao = "Sửa nhóm người dùng thành công";
            } else {
                $thongbao = "Sửa nhóm người dùng thất bại";
            }
            $oneGrps = $this->groups->getone_Grps($id);
            return $this->view(
                'admin',
                [
                    'page' => 'groups/edit',

                    'thongbao' => $thongbao,
                    'grps' => $oneGrps,

                ]
            );
        } else {
            $oneGrps = $this->groups->getone_Grps($id);


            return $this->view(
                'admin',
                [
                    'page' => 'groups/edit',
                    'grps' => $oneGrps,

                ]
            );
        }
    }
    function delete($id)
    {

        $del = $this->groups->deleteGrps($id);
        if ($del) {
            $thongbao = "Xóa nhóm người dùng thành công";
        } else {
            $thongbao = "Xóa nhóm người dùng thất bại";
        }
        $grps = $this->groups->getGrps("");
        return $this->view(
            'admin',
            [
                'page' => 'groups/list',
                'grps' => $grps,
                'thongbao' => $thongbao,

            ]
        );
    }
}
