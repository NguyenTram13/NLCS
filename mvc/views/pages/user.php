<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f6d365;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
    }

    html {
        font-family: "Playfair Display", sans-serif;

    }
</style>
<div class="main">
    <div class="about-background m-0">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Profile</h2>
            </div>
        </div>
    </div>

    <div class="main-user w-[70%] mx-[auto]">


        <div class="vh-100 ">
            <div class="container w-full py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class=" mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4  bg-[#7bdcb5] text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="<?php
                                                if (!empty($_SESSION['user']['avt'])) {

                                                    echo _PATH_UPLOAD_AVT . '/' . $_SESSION['user']['avt'];
                                                } else {
                                                    echo _PATH_UPLOAD_AVT . '/avt.jpg';
                                                }

                                                ?>" alt="Avatar" class="img-fluid my-5 mx-[auto] rounded-full" style="width: 200px;" />
                                    <h5 class="text-[24px]"><?php echo $_SESSION['user']['fullname'] ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6 class="pb-4 text-center text-[32px]">Information</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Email</h6>
                                                <p class="text-muted"><?php echo $_SESSION['user']['email'] ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Phone</h6>
                                                <p class="text-muted"><?php echo $_SESSION['user']['tel'] ?></p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Address</h6>
                                                <p class="text-muted"><?php echo $_SESSION['user']['address'] ?></p>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center  gap-3">
                                            <div class="my-bill">
                                                <a class="no-underline text-[#323334] hover:text-[#98cb50]" href="<?php echo _WEB_ROOT . '/bill/index' ?>">
                                                    <img class="w-[70px] mx-[auto]" src="<?php echo _PATH_ROOT_PUBLIC . '/img/bill/bill.png' ?>" alt=""> <br>
                                                    My bill
                                                </a>

                                            </div>
                                            <div class="my-bill">
                                                <a class="no-underline text-[#323334] hover:text-[#98cb50]" href="<?php echo _WEB_ROOT . '/user/edit_user/' . $_SESSION['user']['id'] ?>">
                                                    <img class="w-[70px] mx-[auto]" src="<?php echo _PATH_ROOT_PUBLIC . '/img/bill/edit.png' ?>" alt=""> <br>
                                                    Edit profile
                                                </a>

                                            </div>
                                            <div class="my-bill">

                                                <?php
                                                if (isset($_SESSION['user']) && $_SESSION['user']) {
                                                    echo  '
                                                      
                                                      <button data-email="' . $_SESSION["user"]["email"] . '" class="text-[#323334] hover:text-green-500 register_face">
                                                        <img class="w-[70px] mx-[auto]" src="' . _PATH_ROOT_PUBLIC . '/img/bill/face-id.png' . '" alt=""> <br>
                                                      
                                                      Face id</button>
                                                      ';
                                                } ?>

                                            </div>
                                            <div class="my-bill">

                                                <a class="no-underline text-[#323334] hover:text-[#98cb50]" href="<?php echo _WEB_ROOT . '/user/logout' ?>">
                                                    <img class="w-[70px] mx-[auto]" src="<?php echo _PATH_ROOT_PUBLIC . '/img/bill/exit.png' ?>" alt=""> <br>

                                                    Logout</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>