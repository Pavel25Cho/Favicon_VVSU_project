$(document).ready(function () {
    $("#submit").click(function () {
        var title = $("#title").val();
        var info = $("#info").val();
        var shortinfo = $("#shortinfo").val();

        if ((title == '') || (info == '') || (shortinfo == '')) {
            $("#message")[0].innerHTML = 'Enter all the fields';
        }
        else {
            $.ajax({
                type: "POST",
                url: "../scripts/NewArticle.php",
                data: "&title=" + title + "&info=" + info + "&shortinfo=" + shortinfo,
                success: function (html) {
                    if (html == 'true') { window.location = "../index.php"; } else { $("#message")[0].innerHTML = 'Something went wrong' }
                }
            })
        }
        return false;
    });
});