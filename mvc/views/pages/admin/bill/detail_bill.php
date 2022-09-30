<div class="detail_bill   text-[#888888] text-[16px]">

    <div class="container ">
        <div class="col-md-12 pt-5">
            <div class="invoice">
                <div class="grid grid-cols-12 gap-">
                    <div class="border px-3 col-span-4 invoice-header">
                        <div class="pt-3 invoice-to">
                            <small class="text-[24px] font-bold text-[#323334]">TO</small>
                            <div class="mt-2">
                                <strong class="text-[16px]  text-inverse"><?php echo $data['user']['fullname'] ?></strong><br>
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
                                        <th class="text-center border-0" width="20%">STATUS</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($data['billDetail']) && $data['billDetail'] != "") {
                                        foreach ($data['billDetail'] as $bill) {
                                    ?>
                                            <tr class="text-[#888888] hover:bg-gray-100">
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
                                                <td class="text-center border-gray-300  font-semibold">
                                                    <?php
                                                    echo   getStatus((int)$data['bill']['status']);
                                                    ?>

                                                </td>

                                            </tr>
                                    <?php

                                        };
                                    };

                                    ?>
                                    <tr class="text-[20px] font-bold h-full pb-2 bg-gray-200 text-[#000]">
                                        <td colspan="3"></td>
                                        <td colspan="" class="text-center  h-full">Subtotal:</td>
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