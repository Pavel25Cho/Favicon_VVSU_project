$(document).ready(function () {
    $("#submit").click(function () {
       var login = $("#login").val();
       var password = $("#password").val();

       if ((login == '') || (password == '')) {
           $("#message")[0].innerHTML = 'Enter all the fields';
       }
       else {
           $.ajax({
               type: "POST",
               url: "../scripts/Login.php",
               data: "&login=" + login + "&password=" + password,
               success: function (html) {
                   if (html == 'true') { window.location = "../index.php"; } else { $("#message")[0].innerHTML = 'Something went wrong' }
               }
           })
        }
       return false;
    });
});