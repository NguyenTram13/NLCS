<?php


class Setting extends Controller
{
    private $setting;
    function __construct()
    {
        $this->setting = $this->model('SettingModel');
    }
    function list()
    {
        $kyw = "";
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        $setting = $this->setting->getSetting($kyw);
        return $this->view(
            'admin',
            [
                'page' => 'setting/list',
                'setting' => $setting,


            ]
        );
    }

    function add()
    {
        if (isset($_POST['config_key']) && $_POST['config_key'] != "") {
            $confgKey = $_POST['config_key'];
            $configValue = $_POST['config_value'];
            echo $configValue;
            $date = date('Y-m-d H:i:s');
            $add = $this->setting->addSetting($confgKey, $configValue, $date);
            if ($add) {
                $thongbao = "Thêm setting thành công";
            } else {
                $thongbao = "Thêm setting thất bại";
            }
            return $this->view(
                'admin',
                [
                    'page' => 'setting/add',

                    'thongbao' => $thongbao

                ]
            );
        } else {
            return $this->view(
                'admin',
                [
                    'page' => 'setting/add',


                ]
            );
        }
    }
    function addfile()
    {
        if (isset($_POST['config_key']) && $_POST['config_key'] != "") {
            $confgKey = $_POST['config_key'];
            $configValue = $_FILES['config_value']['name'];
            $target_file = _UPLOAD . '/setting/' .  basename($_FILES['config_value']['name']);
            if (move_uploaded_file($_FILES['config_value']['tmp_name'], $target_file)) {
            } else {
            }

            $date = date('Y-m-d H:i:s');
            $addfile = $this->setting->addSetting($confgKey, $configValue, $date);
            if ($addfile) {
                $thongbao = "Thêm setting thành công";
            } else {
                $thongbao = "Thêm setting thất bại";
            }
            return $this->view(
                'admin',
                [
                    'page' => 'setting/addfile',

                    'thongbao' => $thongbao

                ]
            );
        } else {
            return $this->view(
                'admin',
                [
                    'page' => 'setting/addfile',


                ]
            );
        }
    }
    function edit($id)
    {
        if (isset($_POST['config_key']) && $_POST['config_key'] != "") {
            $confgKey = $_POST['config_key'];
            $configValue = $_POST['config_value'];
            echo $configValue;
            $date = date('Y-m-d H:i:s');
            $edit = $this->setting->editSetting($id, $confgKey, $configValue, $date);
            if ($edit) {
                $thongbao = "Sửa setting thành công";
            } else {
                $thongbao = "Sửa setting thất bại";
            }
            $oneSetting = $this->setting->getone_Setting($id);
            return $this->view(
                'admin',
                [
                    'page' => 'setting/edit',

                    'thongbao' => $thongbao,
                    'setting' => $oneSetting,

                ]
            );
        } else {
            $oneSetting = $this->setting->getone_Setting($id);


            return $this->view(
                'admin',
                [
                    'page' => 'setting/edit',
                    'setting' => $oneSetting,

                ]
            );
        }
    }
    function editFile($id)
    {
        if (isset($_POST['config_key']) && $_POST['config_key'] != "") {
            $confgKey = $_POST['config_key'];
            $configValue = $_FILES['config_value']['name'];

            $target_file = _UPLOAD . '/setting/' .  basename($_FILES['config_value']['name']);
            if (move_uploaded_file($_FILES['config_value']['tmp_name'], $target_file)) {
            } else {
            }
            $date = date('Y-m-d H:i:s');

            $edit = $this->setting->editSetting($id, $confgKey, $configValue, $date);
            if ($edit) {
                $thongbao = "Sửa setting thành công";
            } else {
                $thongbao = "Sửa setting thất bại";
            }
            $oneSetting = $this->setting->getone_Setting($id);
            return $this->view(
                'admin',
                [
                    'page' => 'setting/editFile',

                    'thongbao' => $thongbao,
                    'setting' => $oneSetting,

                ]
            );
        } else {
            $oneSetting = $this->setting->getone_Setting($id);


            return $this->view(
                'admin',
                [
                    'page' => 'setting/editFile',
                    'setting' => $oneSetting,

                ]
            );
        }
    }
    function delete($id)
    {

        $del = $this->setting->deleteSetting($id);
        if ($del) {
            $_SESSION['msg'] = "Xóa setting thành công!";
            header("Location: " . _WEB_ROOT . "/setting/list");
        } else {
            $_SESSION['msg'] = "Xóa setting thất bại!";
            header("Location: " . _WEB_ROOT . "/setting/list");
        }
    }
}
