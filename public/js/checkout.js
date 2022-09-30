window.addEventListener("load", function () {
  $.validator.setDefaults({
    submitHandler: function (e) {},
  });
  let fromPay = document.querySelector("#signupForm");
  fromPay?.addEventListener("submit", function (e) {
    e.preventDefault();
    if (this.querySelector("#normal").checked) {
      const pttt = this.querySelector("#normal").value;
      const lastName = this.querySelector('input[name="lastname"]').value;
      const address = this.querySelector('input[name="address"]').value;
      const phone = this.querySelector('input[name="phone"]').value;
      const email = this.querySelector('input[name="email"]').value;
      let redirect = this.dataset.url;
      console.log(redirect);
      let loading = document.querySelector(".coffee");
      loading.classList.remove("hidden");
      setTimeout(() => {
        $.ajax({
          type: "POST",
          url: $(this).attr("action"),
          data: { pttt, lastName, address, phone, email },
          dataType: "text",

          success: function (data) {
            console.log(redirect + "/" + data);
            location.href = redirect + "/" + data;
            loading.classList.add("hidden");
          },
          error: function (e) {
            console.log(e);
            loading.classList.add("hidden");
          },
        });
      }, 2000);
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Vui lòng chọn phương thức thanh toán!",
        footer: '<a href="">Why do I have this issue?</a>',
      });
    }
  });
  $(document).ready(function () {
    $("#signupForm").validate({
      rules: {
        // firstname: "required",
        lastname: "required",
        address: "required",
        phone: {
          required: "true",
          minlength: 10,
        },
        email: {
          required: true,
          email: true,
        },
      },
      messages: {
        // firstname: "Bạn chưa nhập vào họ của bạn",s
        lastname: "Bạn chưa nhập vào tên của bạn",
        addresss: "Bạn chưa nhập vào địa chỉ của bạn",

        phone: {
          required: "Bạn chưa nhập vào số điện thoại đăng nhập",
          minlength: "Số điện thoại phải 10 ký tự",
        },

        email: "Email không hợp lệ",
      },
      errorElement: "div",
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        if (element.prop("type") === "checkbox") {
          error.insertAfter(element.siblings("label"));
        } else {
          error.insertAfter(element);
        }
      },
    });
  });
});
