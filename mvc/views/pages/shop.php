<div class="main ">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>shop</h2>
            </div>
        </div>
    </div>
    <div class="main-shop w-[70%] mx-[auto]">
        <div class="main-shop-content container">
            <div class="row">
                <div class="col-3">

                    <div class="ms-content-left">
                        <div class="msc-left-item">
                            <h3>Product Categories</h3>
                            <ul class="mscl-top-item">
                                <?php
                                // echo '<pre>';
                                // print_r($data['cates']);
                                foreach ($data['cates'] as $cate) {
                                    echo '
                                    <li data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" data-url="' . _WEB_ROOT . '/ajax" data-id=' . $cate['id'] . ' class="cursor-pointer hover:text-[#98cb50] filter_cate" >                                  <span >' . $cate['name'] . '</span>
                                    <span>(</span>
                                    <span>' . $cate['count_pros'] . '</span>
                                    <span>)</span>
                                </li>
                                    ';
                                }
                                ?>



                            </ul>
                        </div>
                        <div class="msc-left-item">
                            <h3>Product Status</h3>
                            <div class="mscl-center-item">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        All
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Featured
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                    <label class="form-check-label" for="defaultCheck3">
                                        On Sale
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="msc-left-item">
                            <h3>Filter by price</h3>
                            <div class="mscl-bottom-filter">
                                <span class="filter-left"></span>
                                <span class="filter-right"></span>
                            </div>
                            <div class="filter-price ">
                                <span>Price:</span>
                                <div class="flex gap-2">

                                    <span>$0</span>
                                    <span>
                                        <input id="small-range" type="range" value="50" class="mb-6 w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer range-sm dark:bg-gray-700">
                                    </span>
                                    <span>$110</span>
                                </div>

                            </div>
                            <button class="btn-filter">
                                filter
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-9">

                    <div class="ms-content-right">
                        <div class="msc-right-nav">
                            <div class="mscr-nav-sort">
                                <span>sort by: </span>
                                <select class="form-select select-sort" aria-label="Default select example">
                                    <option selected>Default sorting</option>
                                    <option value="1">Sort by price: low to high</option>
                                    <option value="2">Sort by price: high to low</option>

                                </select>
                            </div>
                            <div class="mscr-nav-show">
                                <span>show: </span>
                                <select class="form-select select-show" aria-label="Default select example">
                                    <option selected>9</option>
                                    <option value="1">12 </option>


                                </select>
                                <div class="mscrn-show-icon">

                                    <span>
                                        <i class="fa-solid fa-table-cells"></i>
                                    </span>
                                    <span>
                                        <i class="fa-solid fa-list"></i>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="main-product">

                            <div class=" new-arrival-list" data-aos="fade-up" data-aos-duration="3000">
                                <div class="row product-list g-3">
                                    <?php
                                    foreach ($data['products'] as $new) {
                                    ?>
                                        <div class="col-xs-12 col-sm-6 col-lg-3 ">
                                            <div class="item new-arrival-item shadow " data-id=" <?php echo $new['id'] ?>">
                                                <div class="new-arrival-img">
                                                    <img src="<?php echo _PATH_UPLOAD_PRODUCT . $new['img'] ?>">
                                                    <div class="new-arrival-other">
                                                        <div class="other-icon">
                                                            <span class="other-icon-cart" data-url="<?php echo _WEB_ROOT . '/ajax' ?>" data-id="<?php echo $new['id'] ?>" data-pathimg="<?php echo _PATH_UPLOAD_PRODUCT ?>">
                                                                <i class=" fa-solid fa-bag-shopping"></i>
                                                            </span>
                                                            <span>
                                                                <i class="fa-solid fa-heart"></i>
                                                            </span>
                                                            <span>
                                                                <i class="fa-solid fa-scale-balanced"></i>
                                                            </span>
                                                        </div>
                                                        <div class="other-btn">
                                                            <button>Quick View</button>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <span class="sale">12% off</span>
                                                    </div>
                                                </div>
                                                <div class="arrival-product-content">
                                                    <h3><a href="<?php echo _WEB_ROOT . '/Detail/index/' . $new['id'] ?>"><?php echo $new['name'] ?></a></h3>
                                                    <div class="arrival-product-evaluate">
                                                        <span class="raiting">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                        <span class="sold-out"><?php echo $new['views'] ?></span>
                                                    </div>
                                                    <p class="arrival-product-price">
                                                        <span>$</span>
                                                        <span class="product-price "><?php echo $new['price'] ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>