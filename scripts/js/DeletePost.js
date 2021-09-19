function cascade(PostId){

    $.ajax({
        type:"POST",
        url:"../scripts/DeletePost.php",
        data: "&postId=" + PostId,
        success: function () {
            window.location = "../index.php";
        }
    });
}