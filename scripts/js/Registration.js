$(document).ready(function () {
    $("#submit").click(function () {
        var login = $("#login").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var repeatedpass = $("#repeatedpass").val();
        var articles = $("#articles").val();

        if ((login == "") || (password == "") || (email == "") || (repeatedpass == "")) {
            $("#message")[0].innerHTML = 'Enter all the fields';
        }
        else if (password != repeatedpass) {
            console.log(password +' '+ repeatedpass);
            $("#message")[0].innerHTML = 'Passwords didn\'t match';
        }
        else if (articles < 1 || articles > 10) {
            $("#message")[0].innerHTML = 'Enter the correct value, between [1;10] ';
        }
        else {
            $.ajax({
                type: "POST",
                url: "../scripts/Registration.php",
                data: "&email=" + email +"&login=" + login + "&password=" + password + "&articles=" + articles,
                success: function (html) {
                    if (html == 'true') { window.location = "../index.php"; } else { $("#message")[0].innerHTML = 'Something went wrong' }
                }
            })
        }
        return false;
    });
});