<header>
	<hgroup>
		<h1>Red Pixel Games</h1>
		<h2>Games with soul</h2>
	</hgroup>
	<nav id=global>
		<ul>
			<li><a href=index.php?body=home>Home</a></li>
<?php
global $user;
if ($user != 'guest') : ?>
            <li><a href=index.php?body=NewArticle>New article</a></li>
<?php endif;
?>
            <li><a href=index.php?body=about>About</a></li>
			<li><a href=index.php?body=portfolio>Portfolio</a></li>
			<li><a href=index.php?body=contact>Contact</a></li>
			<li><a href=index.php?body=Login>Login</a></li>
			<li><a href=index.php?body=Registration>Registration</a></li>
		</ul>
	</nav>
</header>