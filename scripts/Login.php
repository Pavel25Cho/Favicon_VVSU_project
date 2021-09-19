<?php
    $mysql = new mysqli('localhost','root','root','web_prog');

    $user = $mysql->query ("select count(*) as c from users where login = '" .$_POST["login"].
                                                        "' and password = '" .$_POST["password"]. "' ")->fetch_assoc();
    if ($user["c"] > 0) {
        session_start();
        $_SESSION['login'] = $_POST["login"];
        session_write_close();
        echo 'true';
    }
?>
