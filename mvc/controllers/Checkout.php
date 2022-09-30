<?php
class Checkout extends Controller
{
    private $setting;
    private $menu;
    private $slider;
    private $product;
    private $cate;
    private $user;




    public function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->product = $this->model("ProductModel");
        $this->cate = $this->model("CategoryModel");
        $this->user = $this->model("UserModel");
    }
    public function index()
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        // $product = $this->product->getone_Pros($id);
        // $product_sam = $this->product->getCatePros($id, $product['idCate']);
        // $imageDetail = $this->product->getImageDetail($id);
        // $cate = $this->cate->getone_Cate($product['idCate']);
        return $this->view('client', [
            'page' => 'Checkout',
            'css' => [
                'about',
                'home',
            ],
            'js' => [
                'main',
                'ajax',
                'detail',
                "jquery.validate",
                'checkout',
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            // "product" => $product,
            // 'product_sam' => $product_sam,
            // 'images' => $imageDetail,
            // 'cate' => $cate,
        ]);
    }
}
