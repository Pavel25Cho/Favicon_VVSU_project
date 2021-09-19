<!DOCTYPE html>
<html lang="ru">
<div id=content>
<?php
	$post = $_GET[postId];
	global $mysql;
	global $user;

	$head= $mysql->query ("select title from titles where id = $id ");
	$text= $mysql->query ("select info from titles where id = $id");
	
	$result = $mysql->query("select id, title, info, userid from titles where id = $post")->fetch_assoc();
	$PostUser = $mysql->query("select id, login from users where id = ".$result['userid']."")->fetch_assoc();
	$CurrentUser = $mysql->query("select id, admin from users where login = '$user'")->fetch_assoc();

	echo'
	<article>
		<header>
					<div class=time>
						<div class=year></div>
					</div>
					<h1>'.$result['title'].'</h1>
				</header>
				<p>'.$result['info'].'</p>
				<footer>
					<em>Written by:</em> <strong>'.$PostUser['login'].'</strong>
					<span class=newLine></span>
					<a class=button href=index.php?body=home&page='.$page.'&shown='.$shown.'>Back</a>';
					if ($CurrentUser['id'] == $PostUser['id'] or $CurrentUser['admin'] == 1) {
					echo "<button id=\"deletebutton\" type=\"submit\" class=\"button\" onclick=\"cascade(".$result['id'].")\">Delete post</button>";
					}
				echo'</footer>
	</article>
	';
?>
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="../scripts/js/DeletePost.js"></script>
</html>

