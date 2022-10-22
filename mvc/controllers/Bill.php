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



    //Thanh toán vnpay
    function setSession()
    {
        $data = $_POST;
        print_r($data);
    }
    function vnPay_return()
    {
        return $this->view('vnpay_return', []);
    }
    function vnPay()
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = _WEB_ROOT . "/bill/vnpay_return";
        $vnp_TmnCode = "842I1F04"; //Mã website tại VNPAY 
        $vnp_HashSecret = "UHIRRHCCNSYYHRKBUXAVHBIHEICNEZVX"; //Chuỗi bí mật

        $vnp_TxnRef = rand(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng test';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 100 * 23000 * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        //Billing


        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            // "vnp_ExpireDate" => $vnp_ExpireDate

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }
}
