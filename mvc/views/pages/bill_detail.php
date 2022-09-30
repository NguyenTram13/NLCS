<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Detail Bill</h2>
            </div>
        </div>
    </div>
    <style>
        body {
            /* color: #888888; */
            font-size: 1rem;
            font-family: 'Playfair Display', 'Poppins', sans-serif;

        }

        .check {
            color: #198754;
        }
    </style>
    <div class="detail_bill  w-[70%] mx-[auto] text-[#888888] text-[16px]">
        <div class="flex justify-center gap-2 detail_status mb-5">
            <div data-id="0" class="check text-center ">
                <i class="fa-solid fa-dolly text-[80px] "></i><br />
                <span class="text-[20px] mt-2">Chờ lấy hàng</span>
            </div>
            <?php
            $check_2 = '';
            if (+ ($data['bill']['status']) >= 1) {
                $check_2 = 'check';
            }
            ?>
            <span><i class="fa-solid fa-arrow-right-long text-[80px] <?php echo $check_2 ?>"></i></span>
            <div data-id="1" class="text-center <?php echo $check_2 ?>">

                <i class="fa-solid fa-truck-moving text-[80px]"></i><br />
                <span class="text-[20px] mt-2">Đang vận chuyển</span>
            </div>
            <?php
            $check_3 = '';
            if (+ ($data['bill']['status']) == 2) {
                $check_3 = 'check';
            }
            ?>
            <span><i class="fa-solid fa-arrow-right-long text-[80px] <?php echo $check_3 ?>"></i></span>
            <div class="text-center <?php echo $check_3 ?>" data-id="2"><i class="fa-solid fa-people-carry-box text-[80px]"></i><br />
                <span class="text-[20px] mt-2">Đã nhận</span>
            </div>


        </div>
        <div class="container ">
            <div class="col-md-12 mb-5">
                <div class="invoice">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="border px-3 col-span-4 invoice-header">
                            <div class="pt-3 invoice-from">
                                <small class="text-[24px] font-bold text-[#323334]">FROM</small>
                                <div class="mt-2">
                                    <strong class="text-[16px]  text-inverse">Vtea Shop</strong><br>
                                    <?php
                                    foreach ($data['settings'] as $setting) {


                                        if ($setting['config_key'] === "Address") {

                                            echo  '
                                             <div>Address: ' . $setting['config_value'] . '</div>
                                             ';
                                        };
                                        if ($setting['config_key'] === "Phone") {

                                            echo  '
                                                  <div>Phone: ' . $setting['config_value'] . '</div>
                                                  ';
                                        };
                                    }
                                    ?>
                                </div>
                            </div>
                            <br />
                            <hr>
                            <div class="pt-3 invoice-to">
                                <small class="text-[24px] font-bold text-[#323334]">TO</small>
                                <div class="mt-2">
                                    <strong class="text-[16px]  text-inverse"><?php echo $_SESSION['user']['fullname'] ?></strong><br>
                                    Address: <?php echo $data['bill']['address'] ?><br>
                                    Phone: <?php echo $data['bill']['tell'] ?><br>
                                </div>
                            </div>
                            <br />
                            <hr>
                            <div class="py-3 invoice-date text-start">
                                <small class="text-[24px] font-bold text-[#323334]">INFO</small>
                                <div class="mt-2">


                                    <strong class="invoice-detail text-[16px]  text-inverse">
                                        Mã đơn hàng: #<?php echo $data['bill']['id'] ?><br>
                                    </strong>
                                    <span>
                                        Thanh toán: <?php echo $data['bill']['pttt'] ?><br>
                                    </span>
                                    <span class="date text-inverse m-t-5"> Ngày Đặt hàng: <?php echo $data['bill']['created_at'] ?> <br></span>
                                    <span class="date text-inverse m-t-5"> Dự kiến nhận hàng: từ 3-7 ngày <br></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-8 invoice-content">
                            <!-- begin table-responsive -->
                            <div class="table-responsive">
                                <table class="table table-invoice">
                                    <thead>
                                        <tr class="text-[20px]   bg-gray-200 text-[#000] ">
                                            <th class="border-0">PRODUCT</th>
                                            <th class="text-center border-0" width="15%">Price</th>
                                            <th class="text-center border-0" width="10%">QUANTITY</th>

                                            <th class="text-center border-0" width="15%">TOTAL</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($data['billDetail']) && $data['billDetail'] != "") {
                                            foreach ($data['billDetail'] as $bill) {
                                        ?>
                                                <tr class="text-[#888888] ">
                                                    <td class="border-gray-300 ">
                                                        <div class="flex justify-start gap-2">
                                                            <div class="m-t-5 m-b-5">
                                                                <img class=" w-[100px]" src="<?php echo _PATH_UPLOAD_PRODUCT . $bill['img'] ?>" alt="">

                                                            </div>
                                                            <div>
                                                                <?php echo $bill['name_pro'] ?>
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td class="text-center border-gray-300 my-[auto] text-[#7bdcb5] font-bold text-sm">$<?php echo  number_format($bill['price'], 2) ?></td>
                                                    <td class="text-center border-gray-300 text-[#fcb900]"><?php echo $bill['number'] ?></td>
                                                    <td class="text-center border-gray-300 text-[#8ed1fc] font-semibold">
                                                        $<?php echo  number_format($bill['total'], 2) ?>
                                                    </td>

                                                </tr>
                                        <?php

                                            };
                                        };

                                        ?>
                                        <tr class="text-[20px] font-bold  bg-gray-200 text-[#000]">
                                            <td colspan="2"></td>
                                            <td colspan="" class="text-center">Subtotal:</td>
                                            <td colspan="" class="text-center">$<?php echo number_format($data['bill']['total'], 2) ?> </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->

                            <!-- end invoice-price -->
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>