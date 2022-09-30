<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Checkout</h2>
            </div>
        </div>
    </div>
    <style>
        .checkout {
            font-family: 'Playfair Display', 'Poppins', sans-serif;
            color: #888888;
        }
    </style>
    <div class="checkout w-[70%] mx-[auto] mb-5">
        <div class="w-full my-3">
            <span>Have a coupon?</span>
            <span class="font-bold text-[#323334]">ENTER YOUR CODE</span>
            <div class="hidden p-4 my-3 border">
                <p>If you have a coupon code, please apply it below.</p>
                <div class="flex flex-row gap-2 pt-2 ">
                    <input class="p-3 border " type="text" placeholder="Coupon code">
                    <button class="border border-[#323334] p-3 w-[200px] hover:bg-[#000] text-[#323334] hover:text-[#fff]" type="submit">Apply Coupon</button>
                </div>
            </div>
        </div>
        <form id="signupForm" method="post" class="my-3 form-horizontal" data-url="<?php echo _WEB_ROOT . '/bill/detail' ?>" action="<?php echo _WEB_ROOT . '/ajax/create_bill' ?>">
            <div class="row">

                <div class="col-7">
                    <div>
                        <h3 class="font-bold text-[#323334] text-[22px]">BILLING DETAILS</h3>
                    </div>
                    <div class="form-row row">
                        <div class="py-2 form-group col-6">
                            <label for="">First name</label>
                            <input type="text" class="form-control" name="firstname" id="" placeholder="First name">
                        </div>
                        <div class="py-2 form-group col-6">
                            <label for="">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="" placeholder="Last name" value="<?php echo $_SESSION['user']['fullname'] ?>">
                        </div>
                    </div>
                    <div class="py-2 form-group ">
                        <label for="">Address *</label>
                        <input type="text" class="py-2 my-2 form-control" id="" name="address" placeholder="số nhà, tên đường, xã/phường, quận/huyện, tỉnh/thành phố." value="<?php echo $_SESSION['user']['address'] ?>">

                    </div>
                    <div class="form-row row">

                        <div class="py-2 form-group col-md-6">
                            <label for="">Zip Code *</label>
                            <input type="text" name="zip" class="form-control" id="">
                        </div>
                        <div class="py-2 form-group col-md-6">
                            <label for="">Phone *</label>
                            <input type="text" name="phone" class="form-control" id="" value="<?php echo $_SESSION['user']['tel'] ?>">
                        </div>
                    </div>
                    <div class="py-2 form-group ">
                        <label for="">Email address *</label>
                        <input type="text" name="email" class="form-control" id="" placeholder="mail@gmail.com" value="<?php echo $_SESSION['user']['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Order notes (optional)</label>
                        <textarea class="form-control" name id="" rows="3" placeholder="Node about your oder, e.g.special notes for delivery."></textarea>
                    </div>


                </div>
                <div class="col-5">
                    <div class="p-3 border-1 border-gray-700">
                        <h2 class="font-bold text-[#323334] text-[22px] mb-[28px]">YOUR ORDER</h2>
                        <div>
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-gray-700">
                                        <th class="pb-3 text-[#323334]">Product</th>
                                        <th></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $sum = 0;
                                    $pay = 0;
                                    if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                                        foreach ($_SESSION['cart'] as $item) {
                                            $sum += $item['total'];
                                    ?>
                                            <tr>
                                                <td class="py-3 text-[14px] "><?php echo $item['name'] . ' x ' . $item['soluong'] ?></td>
                                                <td class="text-end">$<?php echo number_format($item['total'], 2) ?></td>
                                            </tr>
                                        <?php
                                        };
                                        $pay = 10 + $sum;

                                        ?>

                                        <tr class="font-bold border-b   border-gray-700 text-[#323334] ">
                                            <td class="py-3 ">Subtotal</td>
                                            <td class="text-end">$<?php echo number_format($sum, 2) ?></td>
                                        </tr>
                                        <tr>
                                            <td class="pt-3 text-[#323334]">Shipping</td>
                                            <td class="text-end"></td>
                                        </tr>
                                        <tr>
                                            <td class="pb-4 text-[14px]">Flat rate: $10.00</td>
                                            <td class="text-end"></td>
                                        </tr>

                                        <tr class="border-y border-gray-700 p-3 font-bold text-[#323334]">
                                            <td class="py-3 ">Total</td>
                                            <td class="text-end ">$ <span class="summoney">

                                                    <?php echo number_format($pay, 2) ?></td>
                                            </span>
                                        </tr>


                                    <?php

                                    }; ?>

                                    <tr class="font-bold text-[#323334] ">
                                        <td class="py-3 text-[22px]">Payment Methods</td>
                                    </tr>
                                    <tr class="w-full border-b   border-gray-700 text-[14px]">
                                        <td class="w-full" colspan="2">
                                            <div class="w-full accordion accordion-flush" id="accordionFlushExample">
                                                <div class="text-[20px] p-3">
                                                    <input type="checkbox" name="payment" value="Thanh toán khi nhận hàng" id=" normal">
                                                    <label for="normal">Thanh toán khi nhận hàng

                                                    </label>
                                                </div>
                                                <div id="paypal-button-container" class="p-3"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="my-3 ">
                                        <td colspan="2">
                                            <button type="submit " name="placeorder" class="bg-[#000] text-[#fff] hover:bg-[#4b4d4e] w-full p-3 text-[22px]">Place Order</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            let summoney = document.querySelector('.summoney');
            let formPayment = document.querySelector('#signupForm');

            formPayment.addEventListener('submit', function(e) {
                e.preventDefault();


            });


            console.log(summoney.textContent)
            paypal
                .Buttons({
                    // Set up the transaction
                    createOrder: function(data, actions) {
                        console.log(data);
                        return actions.order.create({
                            purchase_units: [{
                                amount: {
                                    value: +summoney.textContent,
                                },
                            }, ],
                        });
                    },

                    // Finalize the transaction
                    onApprove: async function(data, actions) {
                        const order = await actions.order.capture();
                        console.log(order);
                        const pttt = 'Paypal';
                        const lastName = formPayment.querySelector('input[name="lastname"]').value;
                        const address = formPayment.querySelector('input[name="address"]').value;
                        const phone = formPayment.querySelector('input[name="phone"]').value;
                        const email = formPayment.querySelector('input[name="email"]').value;
                        let redirect = formPayment.dataset.url;
                        let loading = document.querySelector(".coffee");
                        console.log(formPayment.getAttribute('action'));
                        loading.classList.remove("hidden");
                        setTimeout(() => {
                            $.ajax({
                                type: "POST",
                                url: formPayment.getAttribute('action'),
                                data: {
                                    pttt,
                                    lastName,
                                    address,
                                    phone,
                                    email
                                },
                                dataType: "text",

                                success: function(data) {
                                    console.log(redirect + "/" + data);
                                    location.href = redirect + "/" + data;
                                    loading.classList.add("hidden");
                                },
                                error: function(e) {
                                    console.log(e);
                                    loading.classList.add("hidden");
                                    Swal.fire({
                                        icon: "error",
                                        title: "Oops...",
                                        text: "Vui lòng chọn phương thức thanh toán!",
                                        footer: '<a href="">Why do I have this issue?</a>',
                                    });
                                },
                            });
                        }, 2000);
                    },
                    onError: (err) => {
                        console.log(err);
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Vui lòng chọn phương thức thanh toán!",
                            footer: '<a href="">Why do I have this issue?</a>',
                        });
                    },
                })
                .render("#paypal-button-container");
        </script>
    </div>
</div>