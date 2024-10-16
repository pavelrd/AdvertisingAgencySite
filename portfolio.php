<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Рекламное агенство Vendo Vita - портфолио</title>

    <?php
		readfile("../header.html");
	?>
	
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><span>Vendo Vita</span></a>
				<span style="color: black; font-size: 150%; font-weight: bold;" class="navbar-text">8 (906) 741-75-91</span>
			</div>
			<div class="navbar-collapse collapse">							
<div class="menu">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="index.php">Главная</a></li>
		<li role="presentation"  ><a href="services.php"  >Услуги</a></li>
		<li role="presentation"  ><a href="news.php">Новости</a></li>
		<li role="presentation"  class="active" ><a href="portfolio.php">Портфолио</a></li>
		<li role="presentation"><a href="contact.php">Контакты</a></li>						
	</ul>
</div>
			</div>			
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="portfolios">
					<div class="text-center">
						<h2>Наши работы</h2>
						<p> Наши различные работы
						</p>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
	
	<div class="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<a href="img/26.jpg" class="flipLightBox">
						<img src="img/26.jpg" width="230" height="230" alt="Работа 1" />
						<span><b>Первая работа</b><br> Описание первой работы</span>
						
					</a>

					<a href="img/27.jpg" class="flipLightBox">
						<img src="img/27.jpg" width="230" height="230" alt="Работа 2" />
						<span><b>Вторая работа</b><br> Описание второй работы</span>
					</a>

					<a href="img/28.jpg" class="flipLightBox">
						<img src="img/28.jpg" width="230" height="230" alt="Работа 3" />
						<span><b>Третья работа</b><br> Описание третьей работы</span>
					</a>

					<a href="img/29.jpg" class="flipLightBox">
						<img src="img/29.jpg" width="230" height="230" alt="Работа 4" />
						<span><b>Четвертая работа</b><br> Описание четвертой работы</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row">
					<?php
						readfile("../additionalinfo.html");
					?>
					<?php 
						readfile("../latestposts.html");
					?>
					<?php
						readfile("../requisites.html");
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
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
  </body>
</html>