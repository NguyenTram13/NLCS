<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Bill</h2>
            </div>
        </div>
    </div>
    <style>
        body {
            font-family: 'Playfair Display', 'Poppins', sans-serif;

        }
    </style>

    <div class="bill text-[#323334]">

        <div class="container">
            <div class="col-md-12">
                <div class="invoice">


                    <div class="invoice-content text-[16px]" style="   font-family:'Poppins',sans-serif;">

                        <div class="table-responsive">
                            <table class="table table-invoice border-0">
                                <thead>
                                    <tr class="text-[20px]  bg-gray-200 text-[#000] ">
                                        <th class="border-0">INFO USER</th>
                                        <th class="text-center border-0" width="10%">TOTAL</th>
                                        <th class="text-center border-0" width="20%">METHOR</th>
                                        <th class="text-center border-0" width="10%">STATUS</th>

                                        <th class="text-center border-0" width="20%">DATE</th>
                                        <th class="text-center border-0" width="10%">VIEWS</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($data['bill']) && $data['bill'] != "") {
                                        foreach ($data['bill'] as $bill) {
                                    ?>
                                            <tr class="text-[#888888]">
                                                <td class="border-gray-300">
                                                    <div class="">
                                                        <div class="m-t-5 m-b-5">
                                                            Address: <?php echo $bill['tell'] ?><br>
                                                            Phone: <?php echo $bill['address'] ?><br>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center border-gray-300 text-[#7bdcb5] font-bold text-sm">$<?php echo  number_format($bill['total'], 2) ?></td>
                                                <td class="text-center border-gray-300 text-[#fcb900]"><?php echo $bill['pttt'] ?></td>
                                                <td class="text-center border-gray-300 text-[#8ed1fc] font-semibold">
                                                    <?php
                                                    echo   getStatus((int)$bill['status']);
                                                    ?>
                                                </td>
                                                <td class="text-center border-gray-300"><?php echo $bill['created_at'] ?></td>
                                                <td class="text-center border-gray-300"><a href="<?php echo _WEB_ROOT . '/bill/detail/' . $bill['id'] ?>" class=" hover:text-[#98cb50] text-[30px] cursor-pointer"><i class="fa-regular fa-eye"></i></a></td>

                                            </tr>
                                    <?php

                                        };
                                    };

                                    ?>


                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
</div>