<?php

class Bill extends Controller
{
    private $setting;
    private $menu;
    private $slider;
    private $product;
    private $user;
    private $bill;


    function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->product = $this->model("ProductModel");
        $this->user = $this->model("UserModel");
        $this->bill = $this->model("BillModel");
    }
    function index()
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $products = $this->product->getPros("");
        $bill = $this->bill->getBill();

        return $this->view('client', [
            'page' => 'bill',
            'css' => [
                'home',
                'about',
            ],
            'js' => [
                'main',
                'ajax',
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            "products" => $products,
            "bill" => $bill,


        ]);
    }
    function detail($id)
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $products = $this->product->getPros("");
        $bill = $this->bill->getOneBill($id);

        $billDetail = $this->bill->getBillDetail($id);

        return $this->view('client', [
            'page' => 'bill_detail',
            'css' => [
                'home',
                'about',
            ],
            'js' => [
                'main',
                'ajax',
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            "products" => $products,
            "bill" => $bill,
            "billDetail" => $billDetail,


        ]);
    }

    function list()
    {
        $kyw = "";
        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        $bill = $this->bill->getBill($kyw);


        $user = $this->user->getone_UserID($bill[0]['id_user']);
        return $this->view(
            'admin',
            [
                'page' => 'bill/list',
                'bill' => $bill,
                'user' => $user,



            ]
        );
    }
    function listDetail($id)
    {
        $bill = $this->bill->getOneBill($id);
        $user = $this->user->getone_UserID($bill['id_user']);

        $billDetail = $this->bill->getBillDetail($id);
        return $this->view(
            'admin',
            [
                'page' => 'bill/detail_bill',
                'bill' => $bill,
                'billDetail' => $billDetail,
                'user' => $user,


            ]
        );
    }
    function editStatus($id)
    {
        $bill = $this->bill->getOneBill($id);
        // $user = $this->user->getone_UserID($bill['id_user']);
        // $billDetail = $this->bill->getBillDetail($id);
        if (isset($_POST['status']) && $_POST['status'] != "") {
            $date = date('Y-m-d H:i:s');

            $status = $_POST['status'];
            $edit = $this->bill->editStatus($id, $status, $date);
            if ($edit) {
                $thongbao = "Sửa trạng thái  thành công";
            } else {
                $thongbao = "Sửa trạng thái thất bại";
            }
            return $this->view(
                'admin',
                [
                    'page' => 'bill/edit_status',
                    'bill' => $bill,
                    'thongbao' => $thongbao,

                ]
            );
        } else {

            return $this->view(
                'admin',
                [
                    'page' => 'bill/edit_status',
                    'bill' => $bill,
                    // 'thongbao' => $thongbao,

                ]
            );
        }
    }
}
