<?php
class Shop extends Controller
{
    private $category;
    private $setting;
    private $menu;
    private $slider;
    private $product;


    public function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->category = $this->model("CategoryModel");
        $this->product = $this->model("ProductModel");
    }
    public function index()
    {


        $cates = $this->category->getCateGroup("");
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $products = $this->product->getPros("");
        return $this->view('client', [
            'page' => 'shop',
            'css' => [
                'home',
                'shop',
                'about',
            ],
            'js' => [
                'main',
                'ajax',
                'sliderPrice'
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            "cates" => $cates,
            "products" => $products,
        ]);
    }
}
