<div id=content>
<?php
	$aut = false;
	global $mysql;
	global $user;
	
	$result = $mysql->query('select count(*) as count_of_titles from titles');
	$article_max = $result->fetch_object()->count_of_titles;
	$result->free();
	

	$buffer=$mysql->query("select articles from users where login = '$user'")->fetch_assoc();
	$art_in_page = $buffer['articles'];
	
	$max_pages = ceil($article_max/$art_in_page);
	$article_start=1+$page; 
	$article_finish=$art_in_page+$page;
	
	$result = $mysql->query("select id, title, short_info, userid from titles order by id desc limit $shown,$art_in_page;");
	
	for($i=$article_start; $i<=$article_finish; $i++)
	{
		$article=$result->fetch_assoc();
		if ($article['title'] == NULL) break;
		
		$userName = $mysql->query('select login from users where id = '.$article['userid'].'')->fetch_assoc();
		
	
		echo'
			<article>
				<header>
					<div class=time>
						<div class=year></div>
					</div>
					<h1>'.$article['title'].'</h1>
				</header>
				<p>'.$article['short_info'].'</p>
				<footer>
					<em>Written by:</em> <strong>'.$userName['login'].'</strong>
					<span class=newLine></span>
					<a class=button href=index.php?postId='.$article['id'].'&body=article&page='.$page.'&shown='.$shown.'&user='.$user.'>Continue Reading</a>
				</footer>
			</article>
		';
		if($i==$article_max) break;
	}
	
	if ($page == 0) {
	echo'<a class=button href=index.php?body=home&page='.($page + 1).'&shown='.($shown + $art_in_page).'&user='.$user.'>Next Page</a>';
	}
	else if ($page > 0 and $page+1 <> $max_pages) {
	echo'<a class=button href=index.php?body=home&page='.($page + 1).'&shown='.($shown + $art_in_page).'&user='.$user.'>Next Page</a>
	<a class=button href=index.php?body=home&page='.($page - 1).'&shown='.($shown - $art_in_page).'&user='.$user.'>Previous Page</a>';
	}
	else {
	echo'<a class=button href=index.php?body=home&page='.($page - 1).'&shown='.($shown - $art_in_page).'&user='.$user.'>Previous Page</a>';
	}
?>
</div>