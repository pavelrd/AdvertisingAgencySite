<?php

	$MESSAGE_SENDED = "";
	
	if( isset($_POST["name"] ) && isset($_POST["email"]) && isset($_POST["message"]) ){
		
		// Отправляем письмо на почтовый ящик contact@vendo-vita.ru
		
		$to      = 'pavel3593@yandex.ru';
		
		$subject = "Сообщение от клиента - ".htmlspecialchars($_POST['name']);
		
		$from    = htmlspecialchars($_POST['email']);
		
		$headers = 'From: '.$from." \r\n" .
				   'Reply-To: '.$from."\r\n" .
				   'X-Mailer: PHP/' . phpversion();
	
		$message = htmlspecialchars($_POST['message']);
		$message = str_replace("\n.", "\n..", $message);
		
		// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
		$message = wordwrap($message, 70, "\r\n");
		
		if ( TRUE == mail( $to, $subject, $message, $headers ) ){
			
			$MESSAGE_SENDED  = "Сообщение было принято.";
			
		} else {

			$MESSAGE_SENDED  = "Не удалось отправить сообщение!";

		}
		
	}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Рекламное агенство Vendo Vita - контакты</title>

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
				<span style=" color: black; font-size: 150%; font-weight: bold;" class="navbar-text">8 (906) 741-75-91</span>
			</div>
			<div class="navbar-collapse collapse">					
<div class="menu">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="index.php">Главная</a></li>
		<li role="presentation"  ><a href="services.php"  >Услуги</a></li>
		<li role="presentation"  ><a href="news.php">Новости</a></li>
		<li role="presentation"   ><a href="portfolio.php">Портфолио</a></li>
		<li role="presentation" class="active" ><a href="contact.php">Контакты</a></li>						
	</ul>
</div>
			</div>			
		</div>
	</nav>
	
	<div class="map">
		<iframe src="https://yandex.ru/map-widget/v1/-/CBena4qu0D" width="560" height="400" frameborder="0">
		</iframe>
	</div>
	
	<section id="contact-page">
        <div class="container"  >
			
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="contact.php">

					
					  <div class="form-group" style="text-align:center">	
						<center>					  
						<h2>Оставьте свое сообщение</h2>
						<p></p>
                        <div class="form-group">
                            <label>Ваше имя *</label> <br>
                            <input style="max-width: 70%; border: 1px solid #ccc" class="form-control" size="35"  type="text" name="name"  required="required">
                        </div>
                        <div class="form-group">
                            <label>Адрес электронной почты *</label> <br>
                            <input style="max-width: 70%; border: 1px solid #ccc" class="form-control" size="35" type="email" name="email" required="required">
                        </div>
                        <div class="form-group">
                            <label>Сообщение *</label> <br>
                            <textarea class="form-control" style="max-width: 70%; border: 1px solid #ccc" name="message" id="message" required="required" rows="8"></textarea>
                        </div>  
                        <div class="form-group" style="text-align:center">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Отправить</button>
                        </div>	
						<?php echo $MESSAGE_SENDED ?>
					
                </form> 
				</center>
			</div>
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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
	
	<?php
		readfile("../../footer.html");
	?>
	
	<script type="text/javascript">$('.portfolio').flipLightBox()</script>
  </body>
</html>