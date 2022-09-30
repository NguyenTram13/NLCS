const login_withFace = document.querySelector(".login_withFace");
login_withFace.addEventListener("click", authenticateUser);
function authenticateUser() {
  // Start the facial authentication process (Identify a previously enrolled user)
  let url = this.dataset.url;
  faceio
    .authenticate({
      locale: "auto", // Default user locale
    })
    .then((userData) => {
      console.log("Success, user recognized");
      // Grab the facial ID linked to this particular user which will be same
      // for each of his successful future authentication. FACEIO recommend
      // that your rely on this Facial ID if you plan to uniquely identify
      // all enrolled users on your backend for example.
      console.log("Linked facial Id: " + userData.facialId);
      // Grab the arbitrary data you have already linked (if any) to this particular user
      // during his enrollment via the payload parameter of the enroll() method.
      console.log("Associated Payload: " + JSON.stringify(userData.payload));
      // {"whoami": 123456, "email": "john.doe@example.com"} set via enroll()
      let email = userData.payload.email;
      $.ajax({
        type: "POST",
        url: url,
        data: { email },
        dataType: "text",
        success: function (data) {
          console.log(data);
          window.location.href = data;
        },
        error: function (e) {
          console.log(e);
        },
      });
    })
    .catch((errCode) => {
      // handle authentication failure. Visit:
      // https://faceio.net/integration-guide#error-codes
      // for the list of all possible error codes
      handleError(errCode);
    });
}
