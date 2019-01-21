<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>manksiv</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header class="nav-container">
		<div class="f-nav">
			<div class="header__logo">
				<p class="logo">manksiv</p>
			</div>
			<nav>
				<div class="topnav" id="myTopnav">
					<a href="#" id="menu" class="icon">&#9776</a>
					<a href="#home">Home</a>
					<a href="#aboutme">About me</a>
					<a href="#portfolio">Portfolio</a>
					<a href="#contact">Contact</a>
				</div>
			</nav>
		</div>
		<div class="clear"></div>
	</header>
	<main>
		<section class="main__home" id="home">
			<div class="wrapper">
				<div class="home__titles">
					<h1>I'll develop for you</h1>
					<p>I am a Front-end developer in Ukraine. I improve my skills from last year and don't stop do it.</p>
					<a href="#contact" class="home__button">Contact me</a>
				</div>
			</div>
		</section>
		<section class="main__about" id="aboutme">
			<div class="about__left"></div>
			<div class="about__right">
					<div class="right__titles">
						<h1>About me</h1>
						<p>I will glad to work with you. We will discuss all the details and nuances. I promise you will be satisfied.</p>
						<p><span>I can develop site for you with help of:</span> HTML/CSS, JavaScript, PHP, SQL, Framework Bootstrap, methodology BEM, CMS WordPress.</p>
						<p><span>Work order:</span> firstly, discussing the project(task, price and deadlines).After this i start working. Before I send you the finished work, you will have to pay for it.</p>
					</div>
			</div>
		</section>
		<section class="main__portfolio" id="portfolio">
			<h1>Some examples of my work</h1>
				<div class="portfolio__examples">
					<div class="example">
						<a href="example1/"><img src="img/example1.png" alt="example"></a>
					</div>
					<div class="example">
						<a href="example2/"><img src="img/example2.png" alt="example"></a>
					</div>
				</div>
		</section>
		<section class="main__contact" id="contact">
			<form name="contact" method="post">
				<h1>Need a project?</h1>
				<p>Let me know what do you want bring to life and i sure to help.</p>
				<div class="contact__inputs">
					<input type="text" name="name" placeholder="Your name" required>
					<input type="text" name="email" placeholder="Your email" required>
				</div>
				<textarea name="comment" placeholder="Your Comment" id="" cols="30" rows="10" required></textarea>
				<input type="submit" value="Send">
			</form>
<?php
	if(isset($_POST['name'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$comment = htmlspecialchars($comment);
	$name = urldecode($name);
	$email = urldecode($email);
	$comment = urldecode($comment);
	$name = trim($name);
	$email = trim($email);
	$comment = trim($comment);
	mail("maneeva.se@gmail.com", "Заявка с сайта", "Имя:".$name.". Текст: ".$comment ,"From: info@manksiv.github.io \r\n");
}
?>
		</section>
	</main>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>