<?php
    $mysql = new mysqli('localhost','root','root','web_prog');

    $title = $_POST["title"];
    $info = $_POST["info"];
    $shortinfo = $_POST["shortinfo"];
    session_start();
    $userid = $mysql->query("select id from users where login = \"". $_SESSION["login"] ."\"")->fetch_assoc();
    session_write_close();

    $mysql->query("insert into titles (title, info, short_info, userId) values (\"$title\", \"$info\", \"$shortinfo\", $userid[id])");

    $titles = $mysql->query ("select count(*) as c from titles where title = \"$title\"")->fetch_assoc();
    if ($titles["c"] > 0) {
        echo 'true';
    }
?>
