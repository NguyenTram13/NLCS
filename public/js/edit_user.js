window.addEventListener("load", function () {
  let from = document.querySelector("#formEditUser");
  $.validator.setDefaults({
    submitHandler: function (e) {
      form.submit();
    },
  });
  //   from.addEventListener("submit", function (e) {
  //     e.preventDefault();
  //   });
  $(document).ready(function () {
    $("#formEditUser").validate({
      rules: {
        // firstname: "required"
        name: {
          required: true,
          minlength: 3,
        },
        address: {
          minlength: 10,
        },
        phone: {
          // required: "true",
          minlength: 10,
        },
        email: {
          // required: true,
          email: true,
        },
      },
      messages: {
        // firstname: "Bạn chưa nhập vào họ của bạn",s
        name: {
          required: "Bạn chưa nhập vào tên",
          minlength: "Tên lớn hơn 3 kí tự",
        },
        addresss: {
          minlength: "Bạn chưa nhập vào địa chỉ của bạn",
        },

        phone: "Số điện thoại phải 10 ký tự",
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
