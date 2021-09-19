<?php
    $mysql = new mysqli('localhost','root','root','web_prog');

    $email = $_POST["email"];
    $login = $_POST["login"];
    $articles = $_POST["articles"];
    $password = $_POST["password"];

    $user = $mysql->query ("select count(*) as c from users where email = '$email' ")->fetch_assoc();
    if ($user["c"] > 0) {
        echo 'false';
    }

    $mysql->query("insert into users (login, password, articles, email) values (\"$login\", \"$password\", $articles, \"$email\")");

    $user = $mysql->query ("select count(*) as c from users where email = '$email' ")->fetch_assoc();
    if ($user["c"] > 0) {
        session_start();
        $_SESSION['login'] = $_POST["login"];
        session_write_close();
        echo 'true';
    }
?>
