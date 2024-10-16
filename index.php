<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Рекламное агенство Vendo Vita - главная страница</title>

  	<?php
		readfile("../header.html");
	?>
	
  </head>
  <body>
  
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" >
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>Vendo Vita</span></a>
				<span style=" color: black; font-size: 150%; font-weight: bold;" class="navbar-text">8 (906) 741-75-91</span>
			</div>
			<div class="navbar-collapse collapse">							
<div class="menu">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"  class="active"  ><a href="index.php">Главная</a></li>
		<li role="presentation"><a href="services.php" >Услуги</a></li>
		<li role="presentation"><a href="news.php">Новости</a></li>
		<li role="presentation"><a href="portfolio.php">Портфолио</a></li>
		<li role="presentation"><a href="contact.php">Контакты</a></li>			
	</ul>
	
</div>
			</div>
			
		</div>

	</nav>
	
	
	<div class="container">
		<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<ul class="bxslider">				
						<li><img src="img/01.jpg" alt=""/></li>								
						<li><img src="img/01.jpg" alt=""/></li>	
						<li><img src="img/01.jpg" alt=""/></li>			
					</ul>
				</div>	
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Рекламное агентство «Vendo Vita»</h2>
					<p>Наше агенство предоставляет услуги рекламы на транспорте, и.т.д</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="services">
		<?php
			require_once("../ourservices.php");
		?>
	</div>
	
	<!--
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Galleries</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br>
					vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
					</p>
				</div>
				<hr>
			</div>
		</div>
	</div>
	-->
	
	<!--
	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="img/25.jpg" alt="img25"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>			
			</figure>
			<figure class="effect-zoe">
				<img src="img/26.jpg" alt="img26"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>			
			</figure>
		</div>
	</div>
	
	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="img/27.jpg" alt="img27"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>			
			</figure>
			<figure class="effect-zoe">
				<img src="img/30.jpg" alt="img30"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>			
			</figure>
		</div>
	</div>
		-->
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<?php
						readfile("additionalinfo.html")
					?>
					<?php 
						readfile("latestposts.html");
					?>
					<?php
						readfile("requisites.html");
					?>
				</div>
			</div>
		</div>
		
		
		<div class="last-div">
			<div class="container">
				<div class="row">
					<div class="copyright">
						© 2017 Рекламное агентство Vendo Vita Реклама - это жизнь
					</div>	
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=eNno
                    -->				
				</div>
			</div>
			<div class="container">
				<div class="row">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
					</ul>
				</div>
			</div>
			
			<a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>	
				
			
		</div>	

	</footer>
	
  	<?php
		readfile("../footer.html");
	?>
	
	<script>
		  $( function() {
			$( "#menu" ).menu();
			
		  } );
	</script>
	
  </body>
</html>