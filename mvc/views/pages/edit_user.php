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

    .form-control {
        font-size: 18px;
    }
</style>
<div class="main">
    <div class="about-background ">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>edit profile</h2>
            </div>
        </div>
    </div>

    <div class="edit-user w-[70%] mx-[auto] mb-[100px] text-[18px]">
        <div class="border px-5 py-3 rounded">
            <form action="<?php _WEB_ROOT . '/user/edit_user/' . $_SESSION['user']['id'] ?>" class="row g-3" method="post" id="formEditUser" enctype="multipart/form-data">
                <div class="col-md-6 mx-[auto] pb-2">
                    <div class="">

                        <img src="<?php
                                    if (empty($_SESSION['user']['avt'])) {

                                        echo _PATH_UPLOAD_AVT . '/avt.jpg';
                                    } else {
                                        echo _PATH_UPLOAD_AVT . '/' . $_SESSION['user']['avt'];
                                    }

                                    ?>" alt="Avatar" class="img-fluid my-5 mx-[auto] border-2 border-[#98cb50] rounded-full" style="width: 200px;" />
                    </div>
                    <!-- <label for="img" class="form-label">Avt</label> -->
                    <input type="file" class="form-control " name='img' id="img">



                </div>
                <div class="row">


                    <div class="col-md-6">
                        <label for="name" class="form-label">User name</label>
                        <input type="text" class="form-control " name='name' id="name" value="<?php echo $_SESSION['user']['fullname'] ?>">

                        <!-- <div class="valid-feedback">
                        Looks good!
                    </div> -->
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control " id="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                        <!-- <div class="valid-feedback">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" class="form-control " id="phone" name="phone" value="<?php echo $_SESSION['user']['tel'] ?>">
                        <!-- <div class="valid-feedback">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">address</label>
                        <input type="text" class="form-control " id="address" name="address" aria-describedby="addressFeedback" value="<?php echo $_SESSION['user']['address'] ?>">
                        <!-- <div id="addressFeedback" class="valid-feedback">
                        Looks good!
                    </div> -->
                    </div>
                </div>

                <div class="col-12">
                    <button class="hover:bg-[#98cb50] text-[#98cb50] hover:text-[#fff] w-[250px] h-[70px] p2-3 tracking-[4px] text-center text-[21px]" type="submit">Update</button>
                </div>
            </form>
        </div>


    </div>

</div>