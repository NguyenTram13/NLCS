<?php
class User extends Controller
{
    private $users;
    private $groups;
    private $setting;
    private $menu;
    private $sliders;

    public function __construct()
    {
        $this->users = $this->model('UserModel');
        $this->groups = $this->model('GroupModel');
        $this->setting = $this->model("SettingModel");
        $this->slider = $this->model("SliderModel");

        $this->menu = $this->model("MenuModel");
    }
    function profile()
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");

        return $this->view('client', [
            'page' => 'user',
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,

            'css' => [
                'home',
                'style',
                'about',

            ],
            'js' => [
                'main',
                'login',
                // 'loginFace'

            ],
        ]);
    }

    function edit_user($id)
    {
        $this->users = $this->model('UserModel');

        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");

        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];

            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel = $_POST['phone'];
            $img = $_FILES['img']['name'];

            $date = date('Y-m-d H:i:s');

            $target_file = _UPLOAD . '/avt/' .  basename($_FILES['img']['name']);
            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            } else {
            }
            $edit = $this->users->editUserClient($id, $name, $img, $email, $address, $date, $tel);
            if ($edit) {
                $thongbao = "Sửa thông tin thành công";
            } else {
                $thongbao = "Sửa thông tin thất bại";
            }
            return $this->view('client', [
                'page' => 'edit_user',
                "settings" => $settings,
                "menus" => $menus,
                "sliders" => $sliders,
                'thongbao' => $thongbao,
                'css' => [
                    'home',
                    'style',
                    'about',
                ],
                'js' => [
                    'main',
                    'login',
                    'checkout',
                    'edit_user'
                    // 'loginFace'

                ],
            ]);
        } else {
            return $this->view('client', [
                'page' => 'edit_user',
                "settings" => $settings,
                "menus" => $menus,
                "sliders" => $sliders,
                // 'thongbao' => $thongbao,
                'css' => [
                    'home',
                    'style',
                    'about',
                ],
                'js' => [
                    'main',
                    'login',
                    'checkout',
                    'edit_user'
                    // 'loginFace'

                ],
            ]);
        }
    }
    //index == login
    public function index()
    {
        if (!empty($_SESSION['user'])) {
            header('Location: ' . _WEB_ROOT . '/home');
        }
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        if (isset($_POST['login']) && $_POST['login'] != "") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->users->getone_User($email);
            if (!empty($user)) {
                if (password_verify($password, $user['password'])) {
                    $color = "success";
                    $_SESSION['check'] = 1;
                    $_SESSION['user'] = $user;
                    $_SESSION['msg'] = 'Đăng nhập thành công. Bạn có thể mua sản phẩm ngay bây giờ!';
                    header('Location: ' . _WEB_ROOT . '/home/index');
                } else {
                    $thongbao = 'Password không đúng';
                    return $this->view('client', [
                        'page' => 'login',
                        "settings" => $settings,
                        "menus" => $menus,
                        'css' => [
                            'home',
                            'style',
                            'login'
                        ],
                        'js' => [
                            'main',
                            'login',
                            'loginFace'

                        ],
                        'thongbao' => $thongbao
                    ]);
                }
            } else {
                $thongbao = 'Email không đúng';
                return $this->view('client', [
                    'page' => 'login',
                    "settings" => $settings,
                    "menus" => $menus,
                    'css' => [
                        'style',
                        'login'
                    ],
                    'js' => [
                        'main',
                        'login',
                        'loginFace'

                    ],
                    'thongbao' => $thongbao
                ]);
            }
        } else {

            return $this->view('client', [
                'page' => 'login',
                "settings" => $settings,
                "menus" => $menus,
                'css' => [
                    'style',
                    'login'
                ],
                'js' => [
                    'main',
                    'login',
                    'loginFace'

                ]
            ]);
        }
    }
    function loginWithFace()
    {
        $email = $_POST['email'];
        $user = $this->users->getone_User($email);
        if ($user) {
            $_SESSION['user'] = $user;
            echo  _WEB_ROOT . '/home/index';
        } else {
            echo 'loi';
        }
    }
    public function register()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . _WEB_ROOT . '/home');
        }
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        if (isset($_POST['register']) && $_POST['register'] != "") {
            $thongbao = "";
            $color = "";

            $name = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cf_password = $_POST['confirm-password'];
            $tel = $_POST['sdt'];
            $address = $_POST['address'];
            if ($password == $cf_password) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $status = $this->user->insertUser($name, $email, $password, $tel, $address);
                if ($status) {
                    $color = "success";

                    $thongbao = 'Đăng ký thành công. Ban có thể đăng nhập ngay bây giờ!';
                    $_SESSION['msg'] = 'Đăng ký thành công. Bạn có thể đăng nhập ngay bây giờ!';
                    header('Location: ' . _WEB_ROOT . '/user/login');
                } else {
                    $color = "danger";

                    $thongbao = 'Đăng ký thất bại';
                    return $this->view('client', [
                        'page' => 'register',
                        "settings" => $settings,
                        "menus" => $menus,
                        'css' => [
                            'register',
                            'style',

                        ],
                        'js' => [
                            'main',
                            'register'
                        ],
                        'thongbao' => $thongbao,
                        'color' => $color

                    ]);
                }
            } else {
                $thongbao = "Nhap lai mat khau sai";
                return $this->view('client', [
                    'page' => 'register',
                    "settings" => $settings,
                    "menus" => $menus,
                    'css' => [
                        'register',
                        'style',

                    ],
                    'js' => [
                        'main',
                        'register'
                    ],
                    'thongbao' => $thongbao
                ]);
            }
        } else {

            return $this->view('client', [
                'page' => 'register',
                "settings" => $settings,
                "menus" => $menus,
                'css' => [
                    'register',
                    'style',

                ],
                'js' => [
                    'main',
                    'register'
                ]
            ]);
        }
    }
    function logout()
    {
        $_SESSION['user'] = null;
        header('Location: ' . _WEB_ROOT . '/user');
    }
    function list()
    {
        $kyw = "";
        $grps = 0;

        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        if (isset($_POST['grps']) && $_POST['grps'] != "") {
            $grps = $_POST['grps'];
        }
        $users = $this->users->getUsers($kyw, $grps);
        $listGrps = $this->groups->getGrps("");

        return $this->view(
            'admin',
            [
                'page' => 'users/list',
                'users' => $users,
                'Grps' => $listGrps,
                'idGrpsSelected' => $grps

            ]
        );
    }

    function add()
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];
            $groups = $_POST['grps'];

            $email = $_POST['email'];
            $password = $_POST['password'];
            $cfpassword = $_POST['cf-password'];

            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $date = date('Y-m-d H:i:s');

            $img = $_FILES['avt']['name'];
            if ($password === $cfpassword) {
                $password = password_hash($password, PASSWORD_DEFAULT);

                $target_file = _UPLOAD . '/avt/' .  basename($_FILES['avt']['name']);
                if (move_uploaded_file($_FILES['avt']['tmp_name'], $target_file)) {
                } else {
                }

                $idUsers = $this->users->addUsers($name, $img, $email, $address, $password, $date, $tel, $groups);

                if ($idUsers) {
                    $thongbao = "Thêm người dùng thành công";
                } else {
                    $thongbao = "Thêm người dùng thất bại";
                }
            } else {
                $thongbao = "Mật khẩu không khớp";
            }
            $listGrps = $this->groups->getGrps("");
            return $this->view(
                'admin',
                [
                    'page' => 'users/add',

                    'thongbao' => $thongbao,
                    'Grps' => $listGrps,

                ],
            );
        } else {
            $listGrps = $this->groups->getGrps("");

            return $this->view(
                'admin',
                [
                    'page' => 'users/add',
                    'Grps' => $listGrps,

                ]
            );
        }
    }

    function edit($id)
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];
            $groups = $_POST['groups'];

            $email = $_POST['email'];
            $password = $_POST['password'];
            $cfpassword = $_POST['cf-password'];

            $address = $_POST['address'];
            $tel = $_POST['tel'];
            $date = date('Y-m-d H:i:s');

            $img = $_FILES['avt']['name'];
            if (!empty($password) && $password === $cfpassword) {
                $password = password_hash($password, PASSWORD_DEFAULT);
            }
            if (!empty($img)) {

                $target_file = _UPLOAD . '/avt/' .  basename($_FILES['avt']['name']);
                if (move_uploaded_file($_FILES['avt']['tmp_name'], $target_file)) {
                } else {
                }
            }
            // $name = $_POST['name'];
            $edit = $this->users->editUser($id, $name, $img, $email, $address, $password, $date, $tel, $groups);
            // echo "<pre>";
            // print_r($edit);
            if ($edit) {
                $thongbao = "Sửa người dùng thành công";
            } else {
                $thongbao = "Sửa người dùng thất bại";
            }
            $oneUsers = $this->users->getone_UserID($id);
            $listGrps = $this->groups->getGrps("");
            // $imgDetail = $this->users->getImgDetail($id);


            return $this->view(
                'admin',
                [
                    'page' => 'users/edit',

                    'thongbao' => $thongbao,
                    'users' => $oneUsers,
                    'Grps' => $listGrps,


                ]
            );
        } else {
            $oneUsers = $this->users->getone_UserID($id);


            $listGrps = $this->groups->getGrps("");

            return $this->view(
                'admin',
                [
                    'page' => 'users/edit',
                    'users' => $oneUsers,

                    'Grps' => $listGrps,

                ]
            );
        }
    }
    function delete($id)
    {

        $del = $this->users->deleteUsers($id);
        // $delImg = $this->users->deleteImgPros($id);
        if ($del) {
            $_SESSION['msg'] = "Xóa người dùng thành công!";
            header("Location: " . _WEB_ROOT . "/users/list");
        } else {
            $_SESSION['msg'] = "Xóa người dùng thất bại!";
            header("Location: " . _WEB_ROOT . "/users/list");
        }
    }
}
