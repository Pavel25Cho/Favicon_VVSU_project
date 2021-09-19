<?php

    $mysql = new mysqli('localhost','root','root','web_prog');

    $mysql->query ("delete from titles where id = " .$_POST["postId"]. " ");

?>


