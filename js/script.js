function submitData() {
  $(document).ready(function () {
    var data = {
      name: $("#name").val(),
      email: $("#email").val(),
      password: $("#password").val(),
      dob: $("#dob").val(),
      phone: $("#phone").val(),
      action: $("#action").val(),
    };

    $.ajax({
      url: "function.php",
      type: "post",
      data: data,
      success: function (response) {
        alert(response);
        if (response == "Login Successful") {
          window.location.reload();
        }
      },
    });
  });
}
