<?php
class Cart extends Controller
{
    private $setting;
    private $menu;
    private $slider;
    private $product;
    private $user;


    public function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->product = $this->model("ProductModel");
        $this->user = $this->model("UserModel");
    }
    public function index()
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $products = $this->product->getPros("");


        return $this->view('client', [
            'page' => 'Cart',
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

        ]);
    }
}
