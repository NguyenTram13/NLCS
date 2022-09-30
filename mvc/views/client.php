<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="<?php echo  _PATH_ROOT_PUBLIC . '/js/loadingPage.js' ?>" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://css.gg/search.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&family=Roboto&display=swap" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.4/jquery.rateyo.min.css" integrity="sha512-JEUoTOcC35/ovhE1389S9NxeGcVLIqOAEzlpcJujvyUaxvIXJN9VxPX0x1TwSo22jCxz2fHQPS1de8NgUyg+nA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/plant4.png' ?>" />
    <link rel="stylesheet" href="./dist/output.css">
    <script src="https://www.paypal.com/sdk/js?client-id=Aco3m3_VuoyW5N36CxwYZMrvbpCVo7nyw6oXZlpB3dXoIiZpM5JxaCm8BhYGkvIfxEnEj1ywOS-R0s5L&currency=USD"></script>
    <title>VTea</title>
    <?php

    foreach ($data['css'] as $item) {
        echo '<link rel="stylesheet" href="' . _PATH_ROOT_PUBLIC . '/css/' . $item . '.css " />';
    }
    ?>

</head>

<body>
    <div class="coffee  fixed bg-gray-400 z-[999] flex items-center justify-center w-full h-full " style="top:0;bottom:0;right:0;left:0;" role="img" aria-label=" cup spinning and stretching from side to side">
        <div class="coffee__cup ">
            <div class="coffee__cup-part coffee__cup-part--a"></div>
            <div class="coffee__cup-part coffee__cup-part--b"></div>
            <div class="coffee__cup-part coffee__cup-part--c"></div>
            <div class="coffee__cup-part coffee__cup-part--d"></div>
            <div class="coffee__cup-part coffee__cup-part--e"></div>
            <svg class="coffee__cup-part coffee__cup-part--f" width="96px" height="60px" viewBox="0 0 96 60" aria-hidden="true">
                <g fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
                    <path class="coffee__cup-handle" d="M64,4.413s6.64-2.913,11-2.913c11.739,0,19.5,10.759,19.5,22.497,0,23.475-45,22.497-45,22.497" />
                </g>
            </svg>
        </div>
        <svg class="coffee__steam" width="56px" height="56px" viewBox="0 0 56 56" aria-hidden="true">
            <g fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
                <path class="coffee__steam-part coffee__steam-part--a" d="M13.845,54s-5.62-10.115-4.496-16.859,6.83-11.497,8.992-17.983c1.037-3.11,.161-6.937-1.083-10.158" />
                <path class="coffee__steam-part coffee__steam-part--b" d="M27.844,54s-5.652-10.174-4.522-16.957,6.869-11.564,9.043-18.087c2.261-6.783-4.522-16.957-4.522-16.957" />
                <path class="coffee__steam-part coffee__steam-part--c" d="M40.434,50.999c-1.577-3.486-3.818-9.462-3.071-13.944,1.121-6.723,6.809-11.462,8.964-17.928,1.033-3.1,.161-6.916-1.08-10.127" />
            </g>
        </svg>
        <svg class="coffee__steam coffee__steam--right" width="56px" height="56px" viewBox="0 0 56 56" aria-hidden="true">
            <g fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
                <path class="coffee__steam-part coffee__steam-part--d" d="M19.845,54s-5.62-10.115-4.496-16.859,6.83-11.497,8.992-17.983c1.037-3.11,.161-6.937-1.083-10.158" />
                <path class="coffee__steam-part coffee__steam-part--e" d="M34.434,44c-1.577-3.486-3.818-9.462-3.071-13.944,1.121-6.723,6.809-11.462,8.964-17.928,1.033-3.1,.161-6.916-1.08-10.127" />
            </g>
        </svg>
    </div>
    <div class="app">
        <div class="header">
            <div class="header-content">
                <div class="header-logo">
                    <a href="<?php echo _WEB_ROOT ?>">
                        <img src="<?php
                                    foreach ($data['settings'] as $setting)
                                        if ($setting['config_key'] === "Logo")
                                            echo _PATH_UPLOAD_SETTING . $setting['config_value']
                                    ?>
                                " alt="" class="logo" />
                    </a>
                </div>
                <div class="header-link">
                    <ul class="header-link-item">
                        <?php
                        foreach ($data['menus'] as $menu) {
                            echo '
                            <li ><a href="' . _WEB_ROOT . '/' . $menu["name"] . '">' . $menu["name"] . '</a></li>
                            
                            ';
                        }
                        ?>

                    </ul>
                </div>
                <?php
                if (isset($_SESSION['user']) && $_SESSION['user']) {
                ?>
                    <div class="hello text-[#fff]" style="font-family:'Playfair Display', sans-serif;">
                        Chào! <span class=""><?php echo $_SESSION['user']['fullname'] ?></span>
                    </div>
                <?php

                }
                ?>


                <div class="header-icon">
                    <div class="search">
                        <div class="text-[28px]">

                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="top-[40px] search-input">
                            <div class="input-content">
                                <input type="text" placeholder="Search in ..." />
                                <button type="submit" class="search-btn">
                                    <i class="gg-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="user">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']) {
                        ?>
                            <a href=" <?php echo _WEB_ROOT . '/user/profile' ?>">


                                <img src="<?php
                                            if (!empty($_SESSION['user']['avt'])) {

                                                echo _PATH_UPLOAD_AVT . '/' . $_SESSION['user']['avt'];
                                            } else {
                                                echo _PATH_UPLOAD_AVT . '/avt.jpg';
                                            }

                                            ?>" alt="Avatar" class="img-fluid my-0 mx-[auto] border-2 border-[#98cb50] rounded-full" style="width: 35px;" />
                            </a>

                        <?php

                        } else {
                        ?>
                            <a href=" <?php echo _WEB_ROOT . '/user/profile' ?>"> <i class="fa-solid fa-user"></i></a>

                        <?php
                        }
                        ?>
                        <ul class="account">
                            <?php


                            if (!isset($_SESSION['user'])) {
                            ?>

                                <li><a href="<?php echo _WEB_ROOT . '/user/register' ?>">Register</a></li>
                                <li><a href=" <?php echo _WEB_ROOT . '/user/index' ?>">Login</a></li>
                            <?php
                            }
                            ?>
                            <?php


                            if (isset($_SESSION['user']) && $_SESSION['user']['idGroups'] == 1) {
                            ?>
                                <li><a href="<?php echo _WEB_ROOT . '/ user/profile' ?>">Profile</a></li>

                                <li><a href="<?php echo _WEB_ROOT . '/admin/index'
                                                ?>">Admin</a></li>
                                <li><a href="<?php echo _WEB_ROOT . '/bill/index'
                                                ?>">My bill</a></li>
                                <li><a href="<?php echo _WEB_ROOT . '/user/logout' ?>">Logout</a></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <div class="cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <!-- <i class="fa-thin fa-bag-shopping"></i> -->
                        <span class="cart-count"><?php
                                                    if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                                                        $totalLength = 0;
                                                        foreach ($_SESSION['cart'] as $item) {
                                                            $totalLength  += (int)$item['soluong'];
                                                        }

                                                        echo $totalLength;
                                                    } else {
                                                        echo '0';
                                                    }
                                                    ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "./mvc/views/pages/" . $data['page'] . ".php";
        ?>
        <div class="footer">
            <?php

            if (isset($_SESSION['check']) && $_SESSION['check'] == 1) {
            ?>
                <div class="footer-top">
                    <div class="footer-top-content">
                        <div class="footer-img" data-aos="fade-up" data-aos-duration="1000">
                            <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/tea/teapot.png' ?>" alt="" />
                        </div>
                        <div class="footer-text" data-aos="fade-up" data-aos-duration="2000">
                            <span> Subscribe to Newsletter</span>
                        </div>
                        <div class="footer-input" data-aos="fade-up" data-aos-duration="3000">
                            <input type="text" placeholder="Email address here..." />
                            <button type="submit" class="subscribe">
                                subscribe <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

            <div class="footer-bottom">
                <div class="container footer-bottom-content">
                    <div class="row">
                        <div class="col col-sm-12 col-md-4 footer-left">
                            <div class="footer-logo">
                                <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/logo/cropped-site_logo_276x106.png' ?>" alt="" />
                            </div>
                            <div class="footer-left-text">
                                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit,
                                    sed do et olore magna aliqua enenatis</span>
                            </div>
                            <div class="footer-left-time">
                                <span>© 2015 — 2022</span>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-md-4 footer-center">
                            <div class="footer-center-heading">
                                <span>Quick Links</span>
                            </div>
                            <div class="row">
                                <div class="col col-6 footer-center-left">
                                    <ul>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Terms Of Service</a></li>
                                        <li><a href="#">View Cart</a></li>
                                    </ul>
                                </div>
                                <div class="col col-6 footer-center-right">
                                    <ul>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Support Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-12 col-md-4 footer-right">
                            <div class="footer-right-heding">
                                <span>Contact Info</span>
                            </div>
                            <div class="footer-right-contact">
                                <?php
                                foreach ($data['settings'] as $setting) {


                                    if ($setting['config_key'] === "Address") {

                                        echo  '
                                             <span>Address: ' . $setting['config_value'] . '</span>
                                             ';
                                    };
                                    if ($setting['config_key'] === "Phone") {

                                        echo  '
                                                  <span>Phone: ' . $setting['config_value'] . '</span>
                                                  ';
                                    };
                                    if ($setting['config_key'] === "Email") {

                                        echo  '
                                                  <span>Email: ' . $setting['config_value'] . '</span>
                                                  ';
                                    };
                                }
                                ?>
                            </div>
                            <div class="footer-right-link">

                                <div class="row">
                                    <?php
                                    foreach ($data['settings'] as $setting) {
                                        // if ($setting['config_key'] !== 'Logo') {
                                        //     continue;
                                        // }
                                        if ($setting['config_key'] === 'Facebook') {
                                            echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-4 fb"><i class="fa-brands fa-facebook-f"></i></a>
                                            
                                            ';
                                        }
                                        if ($setting['config_key'] === 'Twitter') {
                                            echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-4 tw"><i class="fa-brands fa-twitter"></i></a>
                                            
                                            ';
                                        }
                                        if ($setting['config_key'] === 'Instagram') {
                                            echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-4 in"><i class="fa-brands fa-instagram"></i></a>
                                            
                                            ';
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="footer-border"></span>
                <p>US © 2022. All Rights Reserved</p>
            </div>
        </div>
    </div>

    <div class="model-cart">
        <div class="model-cart-content">
            <div class="model-cart-heading h-[10vh]">
                <div class="text">
                    <span>shopping cart</span>
                </div>
                <div class="model-close">
                    <span>Close </span>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="model-cart-center border-none overflow-auto h-[70vh] max-h-[70vh]">
                <?php
                $sum = 0;
                if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                    foreach ($_SESSION['cart'] as $item) {
                        $sum += (float)$item['total'];
                        if (isset($item['name']) && !empty($item)) {
                ?>
                            <div class="cart-center-item">
                                <div class="cart-center-left">
                                    <p class="title"><?php echo $item['name'] ?></p>
                                    <div class="price-amount">
                                        <span class="cart-center-amount"><?php echo $item['soluong'] ?></span>
                                        X
                                        <span class="cart-center-price">$ <?php echo $item['price'] ?></span>
                                    </div>
                                </div>
                                <div class="cart-center-right">
                                    <img src="<?php echo _PATH_UPLOAD_PRODUCT . $item['img'] ?>" alt="">
                                    <span data-pathimg="<?php echo _PATH_UPLOAD_PRODUCT ?>" data-url="<?php echo _WEB_ROOT . '/ajax' ?>" data-id="<?php echo $item['id'] ?>" class="cart-center-close hover:scale-150">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                </div>
                            </div>
                    <?php
                        }
                    }


                    ?>

                <?php } else {
                ?>
                    <div class="empty-model-cart">
                        <p class="text-[#888888] text-center pt-3">No products in the cart.</p>
                    </div>


                <?php
                } ?>
            </div>

            <div class="model-cart-footer h-[20vh]">
                <div class="cart-footer-total">
                    <span>Total</span>
                    <span>$<?php echo number_format($sum, 2) ?></span>
                </div>
                <div class="cart-footer-btn">
                    <a href="<?php echo _WEB_ROOT . '/Cart/index' ?>"> <button class="view">View Cart</button></a>
                    <a href="<?php echo _WEB_ROOT . '/Checkout/index' ?>"><button class="check">Checkout</button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="faceio-modal"></div>
    <script src="https://cdn.faceio.net/fio.js"></script>
    <script type="text/javascript">
        /* Instantiate fio.js with your application Public ID */
        const faceio = new faceIO("fioa0f67");
        const register_face = document.querySelector('.register_face');

        register_face?.addEventListener('click', enrollNewUser);

        function enrollNewUser() {

            let email = this.dataset.email;
            // Start the facial enrollment process
            faceio.enroll({
                "locale": "auto", // Default user locale
                "userConsent": false, // Set to true if you have already collected user consent
                "payload": {
                    /* The payload we want to associate with this user
                     * which is forwarded back to us upon future
                     * authentication of this particular user.*/
                    // Example of dummy ID linked to this particular user
                    "email": email
                }
            }).then(userInfo => {
                // User Successfully Enrolled!
                alert(
                    `User Successfully Enrolled! Details:
			Unique Facial ID: ${userInfo.facialId}
			Enrollment Date: ${userInfo.timestamp}
			Gender: ${userInfo.details.gender}
			Age Approximation: ${userInfo.details.age}`
                );
                console.log(userInfo);
                // handle success, save the facial ID, redirect to dashboard...
            }).catch(errCode => {
                // handle enrollment failure. Visit:
                // https://faceio.net/integration-guide#error-codes
                // for the list of all possible error codes
                handleError(errCode);
            });
        }



        function handleError(errCode) {
            // Log all possible error codes during user interaction..
            // Refer to: https://faceio.net/integration-guide#error-codes
            // for a detailed overview when these errors are triggered.
            switch (errCode) {
                case fioErrCode.PERMISSION_REFUSED:
                    console.log("Access to the Camera stream was denied by the end user");
                    break;
                case fioErrCode.NO_FACES_DETECTED:
                    console.log("No faces were detected during the enroll or authentication process");
                    break;
                case fioErrCode.UNRECOGNIZED_FACE:
                    console.log("Unrecognized face on this application's Facial Index");
                    break;
                case fioErrCode.MANY_FACES:
                    console.log("Two or more faces were detected during the scan process");
                    break;
                case fioErrCode.PAD_ATTACK:
                    console.log("Presentation (Spoof) Attack (PAD) detected during the scan process");
                    break;
                case fioErrCode.FACE_MISMATCH:
                    console.log("Calculated Facial Vectors of the user being enrolled do not matches");
                    break;
                case fioErrCode.WRONG_PIN_CODE:
                    console.log("Wrong PIN code supplied by the user being authenticated");
                    break;
                case fioErrCode.PROCESSING_ERR:
                    console.log("Server side error");
                    break;
                case fioErrCode.UNAUTHORIZED:
                    console.log("Your application is not allowed to perform the requested operation (eg. Invalid ID, Blocked, Paused, etc.). Refer to the FACEIO Console for additional information");
                    break;
                case fioErrCode.TERMS_NOT_ACCEPTED:
                    console.log("Terms & Conditions set out by FACEIO/host application rejected by the end user");
                    break;
                case fioErrCode.UI_NOT_READY:
                    console.log("The FACEIO Widget code could not be (or is being) injected onto the client DOM");
                    break;
                case fioErrCode.SESSION_EXPIRED:
                    console.log("Client session expired. The first promise was already fulfilled but the host application failed to act accordingly");
                    break;
                case fioErrCode.TIMEOUT:
                    console.log("Ongoing operation timed out (eg, Camera access permission, ToS accept delay, Face not yet detected, Server Reply, etc.)");
                    break;
                case fioErrCode.TOO_MANY_REQUESTS:
                    console.log("Widget instantiation requests exceeded for freemium applications. Does not apply for upgraded applications");
                    break;
                case fioErrCode.EMPTY_ORIGIN:
                    console.log("Origin or Referer HTTP request header is empty or missing");
                    break;
                case fioErrCode.FORBIDDDEN_ORIGIN:
                    console.log("Domain origin is forbidden from instantiating fio.js");
                    break;
                case fioErrCode.FORBIDDDEN_COUNTRY:
                    console.log("Country ISO-3166-1 Code is forbidden from instantiating fio.js");
                    break;
                case fioErrCode.SESSION_IN_PROGRESS:
                    console.log("Another authentication or enrollment session is in progress");
                    break;
                case fioErrCode.NETWORK_IO:
                default:
                    console.log("Error while establishing network connection with the target FACEIO processing node");
                    break;
            }
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?php echo  _PATH_ROOT_PUBLIC . '/js/jquery.validate.js' ?>" type="module"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.4/jquery.rateyo.min.js" integrity="sha512-09bUVOnphTvb854qSgkpY/UGKLW9w7ISXGrN0FR/QdXTkjs0D+EfMFMTB+CGiIYvBoFXexYwGUD5FD8xVU89mw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php

    foreach ($data['js'] as $item) {
        if ($item == "main") {

            echo '<script src="' . _PATH_ROOT_PUBLIC . '/js/' . $item . '.js" type="module"></script>';
        } else {
            echo '<script src="' . _PATH_ROOT_PUBLIC . '/js/' . $item . '.js"></script>';
        }
    }
    ?>
    <script>
        const number_rate = document.querySelector('.number-rate');
        $(function() {

            $("#rateYo").rateYo({
                rating: 1.5,
                halfStar: true,
                starWidth: "25px"
            }).on('rateyo.change', function(e, data) {
                number_rate.textContent = data.rating;
            });

        });
        $(function() {

            $("#rateYoSum").rateYo({
                rating: 3.5,
                readOnly: true,
                starWidth: "20px"
            });

        });
        $(function() {

            $("#rateYo1").rateYo({
                rating: 5,
                readOnly: true,
                starWidth: "18px"
            });

        });
        $(function() {

            $("#rateYo2").rateYo({
                rating: 4,
                readOnly: true,
                starWidth: "18px"
            });

        });
        $(function() {

            $("#rateYo3").rateYo({
                rating: 3,
                readOnly: true,
                starWidth: "18px"
            });

        });
        $(function() {

            $("#rateYo4").rateYo({
                rating: 2,
                readOnly: true,
                starWidth: "18px"
            });

        });
        $(function() {

            $("#rateYo5").rateYo({
                rating: 1,
                readOnly: true,
                starWidth: "18px"
            });

        });
    </script>
</body>

</html>