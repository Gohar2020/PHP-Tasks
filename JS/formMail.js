$("#sendMail").on("click", function () {
  const email = $("#email").val().trim();
  const name = $("#name").val().trim();
  const phone = $("#phone").val().trim();
  const message = $("#message").val().trim();

  if (email === "") {
    $("#errorMess").text("Enter your Email");
    return false;
  } else if (name === "") {
    $("#errorMess").text("Enter your Name");
    return false;
  } else if (phone === "") {
    $("#errorMess").text("Enter your Phone Number");
    return false;
  } else if (message === "") {
    $("#errorMess").text("Enter your Message");
    return false;
  }

  $("#errorMess").text("");

  $.ajax({
    url: "ajax/mail.php",
    type: "POST",
    cache: false,
    data: { name: name, email: email, phone: phone, message: message },
    dataType: "html",
    beforeSend: function () {
      $("#sendMail").prop("disabled", true);
    },
    success: function (data) {
      if (!data) alert("Something went wrong");
      else $("#mailForm").trigger("reset");

      $("#sendMail").prop("disabled", false);
    },
  });
});
