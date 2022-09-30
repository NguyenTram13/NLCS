<?php

class Ajax extends Controller
{
    private $product, $bill;
    function __construct()
    {
        $this->product = $this->model('ProductModel');
        $this->bill = $this->model('BillModel');
    }
    function filterPro()
    {
        $id = $_POST["id"];
        if ($id > 0) {

            $products = $this->product->getPros("", $id);
            print_r(json_encode($products));
        } else {
            echo 'asdsasdas';
        }
    }
    function addCard()
    {
        $id = $_POST['id'];
        print_r($this->product->addProductCart($id));
    }
    function addCard2()
    {
        $id = $_POST['id'];
        $number = $_POST['number'];

        print_r($this->product->addProductCart($id, $number));
    }
    function removeItem()
    {
        $id = $_POST['id'];
        print_r($this->product->removeItem($id));
    }

    function create_bill()
    {
        $pttt = $_POST['pttt'];
        $idUser = $_SESSION['user']['id'];

        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $lastName = $_POST['lastName'];
        $date = date('Y-m-d H:i:s');
        $sumCart = 0;
        foreach ($_SESSION['cart'] as $item) {
            if (isset($item['id']) && $item['id']) {
                $sumCart += (float)$item['total'];
            }
        }
        $idBill = $this->bill->create($pttt, $idUser, $address, $phone, $date, $sumCart + 10);
        if ($idBill) {
            foreach ($_SESSION['cart'] as $item) {
                if (isset($item['id']) && $item['id']) {

                    $this->bill->insert_detail_bill($item['id'], $item['img'], $item['name'], $item['price'], $item['soluong'],  $item['total'], $idBill, $date);
                }
            }
            $_SESSION['cart'] = [];
        }
        echo $idBill;
    }
}
