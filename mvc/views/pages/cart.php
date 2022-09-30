<div class="mb-5 main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Cart</h2>
            </div>
        </div>
    </div>
    <div class="cart ">
        <style>
            body,
            html {
                font-family: "Playfair Display", sans-serif;

            }
        </style>
        <div class="w-[70%] mx-[auto]">
            <?php
            if (isset($_SESSION['cart']) && $_SESSION['cart']) {
            ?>
                <div class="row body-font font-Poppins">
                    <div class="col-8">
                        <form action="" method="POST" enctype="multipart/form" class="m-0 cart-form">

                            <table class="cf-table text-[#323334] w-full border-spacing-4">
                                <thead>
                                    <tr class="cft-title font-Poppins ">
                                        <th>Product</th>
                                        <th> </th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>

                                </thead>

                                <tbody class="cf-list">
                                    <?php

                                    $sum = 0;
                                    $pay = 0;
                                    foreach ($_SESSION['cart'] as $pro) {
                                        $sum += $pro['total'];

                                        echo '
                            
                            <tr class="cft-content   my-[12px] border-b">
                                <td class="py-2 mx-[auto] relative"><span data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" data-url="' . _WEB_ROOT . '/ajax" data-id="' . $pro['id'] . '" class="remove-item absolute top-[4px] hover:scale-110 right-[12px] p-1 rounded-full shadow-lg bg-slate-600 cursor-pointer text-slate-50 leading-none"><i class="fa-solid fa-xmark"></i></span> <img src="' . _PATH_UPLOAD_PRODUCT . $pro['img'] . '" alt="" class="w-20 center"></td>
                                <td><a href"' . _WEB_ROOT . '/Detail' . '" class="hover:text-[#98cb50]  cursor-pointer">' . $pro['name'] . '</a></td>
                                <td class="text-[#888888]"> $' . number_format($pro['price'], 2)  . '</td>
                                <td > 
                                    <span data-id="' . $pro['id'] . '" data-url="' . _WEB_ROOT . '/ajax' . '" data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" class="down-pro hover:bg-[#98cb50] transition-all  hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">-</span>
                                    <span class="  transition-all hover:text-[#98cb50] font-bold inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">' . $pro['soluong'] . '</span>
                                    <span data-id="' . $pro['id'] . '" data-url="' . _WEB_ROOT . '/ajax' . '" data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" class="up-pro hover:bg-[#98cb50] transition-all hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">+</span>


                                </td>
                                <td class="font-bold">$' . number_format($pro['total'], 2) . '</td>
                                
                            </tr>
                            
                            ';
                                    }
                                    $pay = $sum + 10;

                                    ?>

                                </tbody>
                            </table>
                        </form>
                        <div class="flex justify-between py-5 cart-footer">
                            <div class="continue">
                                <a href="<?php echo _WEB_ROOT . '/Shop' ?>"> <button class="bg-[#323334] cursor-pointer text-[#fff]  hover:bg-[#4b4d4e] px-[32px] py-[12px] "><i class="fa-solid fa-arrow-left-long"></i> CONTINUE SHOPPING</button></a>
                            </div>
                            <div class="btn-right">
                                <button class="bg-[#fff] border border-dark cursor-pointer text-[#000] hover:text-[#000] hover:bg-[#ccc] p-[12px] ">CLEAR CART</button>
                                <span class="bg-[#ccc] cursor-not-allowed text-[#888]  hover:bg-[#ccc] p-[12px] ">UPDATE CART</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="border">
                            <div class="cr-title p-[30px] ">
                                <div class="cr-top ">
                                    <h2 class="font-bold text-[2rem] body-font font-Poppins pb-[20px]">CART TOTALS
                                    </h2>
                                    <P class="flex justify-between font-bold">
                                        <span>Subtotal</span>
                                        <span class="subtotal py-[5px]">$<?php echo number_format($sum, 2) ?></span>
                                    </P>
                                </div>
                                <hr>
                                <div class="cr-center py-[28px] ">
                                    <h3 class="text-base leading-loose">Shipping</h3>
                                    <p class="leading-loose text-[#888888] text-sm  "> Flat rate: <span class="flat_rate"> $10.00</span></p>
                                    <p class="leading-loose text-[#888888] text-sm ">Shipping to <span class="font-bold"><?php echo $_SESSION['user']['address'] ?></span>
                                    </p>

                                    <div class="mb-3 text-[#888888] font-[0.875rem] ">
                                        <label for="" class="form-label">Address:</label>
                                        <textarea class="form-control" id="" rows="3" placeholder="Nhập địa chỉ giao hàng ">
                                        <?php echo $_SESSION['user']['address'] ?>
                                        </textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="cr-bottom">
                                    <P class="flex justify-between font-bold py-[24px]">
                                        <span>Total</span>
                                        <span class="subtotal-final ">$<?php echo number_format($pay, 2) ?></span>
                                    </P>
                                    <a href="<?php echo _WEB_ROOT . '/Checkout/index' ?>"><button class="bg-[#323334] text-[#fff] p-[8px] w-full cursor-pointer transition-all hover:bg-[#4b4d4e]">PROCEED TO CHECKOUT <i class="fa-solid fa-arrow-right-long"></i></button></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            <?php
            } else {
            ?>
                <div class="empty-cart mx-[auto] text-xl text-center mb-5">
                    <h3 class="text-[#888888] text-xl ">Your cart is currently empty.</h3>
                    <p class="text-[#888888] text-9xl p-3">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </p>
                    <a class="mb-5" href="<?php echo _WEB_ROOT . '/Shop/index' ?>"> <button class="bg-[#000] hover:bg-[#4b4d4e] cursor-pointer transition-all p-3 text-[#fff] rounded">Return to shop</button></a>
                </div>
            <?php

            } ?>
        </div>
    </div>
</div>