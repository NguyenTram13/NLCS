window.addEventListener("load", function () {
  const formRegister = document.querySelector(".form-register");
  console.log();
  const errorName = document.querySelector(".error-name");
  const errorEmail = document.querySelector(".error-email");
  // console.log(errorEmail)
  const errorPwd = document.querySelector(".error-pwd");
  const errorConfirmpwd = document.querySelector(".error-confirmpwd");
  const errorSdt = document.querySelector(".error-sdt");
  const errorAddress = document.querySelector(".error-address");

  let arrayUser = [];

  formRegister.addEventListener("submit", function (e) {
    e.preventDefault();
    arrayUser = JSON.parse(window.localStorage.getItem("user")) || [];
    console.log(arrayUser);
    let valuename = this.querySelector(".name").value;
    let valueemail = this.querySelector(".email").value;
    let valuepwd = this.querySelector(".pwd").value;
    let valueconfirm = this.querySelector(".confirm-password").value;
    let valueSdt = this.querySelector(".sdt").value;
    let valueAddress = this.querySelector(".address").value;

    let isName = false;
    let isEmail = false;
    let isPwd = false;
    let isconfirmpwwd = false;
    let isSdt = false;
    let isAddress = false;

    const regexEmail =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    ///name
    if (valuename == "") {
      errorName.textContent = "Họ tên không được rỗng";
      isName = false;
    } else if (valuename.length < 4) {
      errorName.textContent = "Họ tên phải lớn hơn 4 ký tự";
      isName = false;
    } else {
      errorName.textContent = "";
      isName = true;
    }
    //email
    if (valueemail == "") {
      errorEmail.textContent = "Email không được rỗng";
      isEmail = false;
    } else if (!regexEmail.test(valueemail)) {
      errorEmail.textContent = "Không đúng định dạng email";
      isEmail = false;
    } else if (arrayUser.length > 0) {
      arrayUser.forEach((item) => {
        if (valueemail == item.email) {
          errorEmail.textContent = "Email đã được sử dụng để đằng ký tài khoản";
          isEmail = false;
        } else {
          errorEmail.textContent = "";
          isEmail = true;
        }
      });
    } else {
      errorEmail.textContent = "";
      isEmail = true;
    }
    //passs
    if (valuepwd == "") {
      errorPwd.textContent = "Mật khẩu không được rỗng";
      isPwd = false;
    } else if (valuepwd.length < 8) {
      errorPwd.textContent = "Mật khẩu phải lớn hơn hoặc bằng 8 ký tự";
      isPwd = false;
    } else {
      errorPwd.textContent = "";
      isPwd = true;
    }

    //confirm pass
    if (valueconfirm == "") {
      errorConfirmpwd.textContent = "Mật khẩu không được rỗng";
      isconfirmpwwd = false;
    } else if (valueconfirm != valuepwd) {
      errorConfirmpwd.textContent = "Mật khẩu nhập lại không khớp ";
      isconfirmpwwd = false;
    } else {
      errorConfirmpwd.textContent = "";
      isconfirmpwwd = true;
    }

    //số điện thoại
    if (valueSdt == "") {
      errorSdt.textContent = "Số điện thoại không được rỗng";
      isSdt = false;
    } else if (valueSdt.length != 10) {
      errorSdt.textContent = "Số điện thoại phải 10 số ";
      isSdt = false;
    } else {
      errorSdt.textContent = "";
      isSdt = true;
    }

    //địa chỉ
    if (valueAddress == "") {
      errorAddress.textContent = "Địa chỉ không được rỗng";
      isAddress = false;
    } else if (valueAddress.length < 10) {
      errorAddress.textContent = "Địa chỉ trên 10 ký tự";
      isAddress = false;
    } else {
      errorAddress.textContent = "";
      isAddress = true;
    }

    const mess = document.querySelector(".mess");
    if (isName && isEmail && isPwd && isconfirmpwwd && isAddress && isSdt) {
      let infoUses = {
        name: valuename,
        email: valueemail,
        pwd: valuepwd,
        address: valueAddress,
        sdt: valueSdt,
      };

      this.submit();
      this.reset();
    } else {
    }
  });
});
