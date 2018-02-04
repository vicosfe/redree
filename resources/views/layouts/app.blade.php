<!DOCTYPE html>
<html lang="en">

<head rel="canonical".>
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="hl_lc1XRvtAIpC_uOyGJbXpY4Jlvi34XCRLrF3ca4kk" />
	<meta name="yandex-verification" content="a32999d0823e051f" />
	<title>Разработка сайтов в Дагестане &mdash; агенство RedRee</title>
	<meta name="fragment" content="!">
	<meta name="mailru-domain" content="wvInkBwskHK0GdFS" />
	<meta name="description" content="Разработка и создание сайтов в агенстве «RedRee» - это отличное решение для Вашего бизнеса. Мы создаем сайты любого уровня сложности: от визиток до многофункциональных интернет-магазинов.">
	<meta name="keywords" content="Создание сайтов, создание сайтов в махачкале, разработка сайтов, разработка сайтов махачкала, купить сайт, сделать сайт в махачкале, Редри, RedRee, цена на сайт махачкала, создание мобильного приложения, приложение android махачкала, iphone приложение махачкала, ios приложение">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="copyright" lang="ru" content="Диджитал агенство RedRee" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/public/css/style.css">
	<link rel="stylesheet" href="/public/css/mediaquery.css">
	<link rel="stylesheet" href="/public/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/public/css/animate.css">
	<link rel="stylesheet" href="/public/css/owl.carousel.css">
	<link rel="stylesheet" href="/public/css/jquery.fs.selecter.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script src="/public/js/jquery-ui.min.js"></script>
	<script src="/public/js/SmoothScroll.js"></script>
	<script src="/public/js/owl.carousel.min.js"></script>
	<script src="/public/js/jquery.validate.min.js"></script>
	<script src="/public/js/jquery.fs.selecter.min.js"></script>
	<script type="text/javascript" >
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter47230500 = new Ya.Metrika({
						id:47230500,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/47230500" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<script src="/public/js/main.js"></script>
</head>

<body>
<div class="gradient"></div>
<div class="wrapper_popup mainPopup">
	<div class="wrap_popup mainPopup">
		<div class="popup childPopup">
			<h2>Заполните формы.</h2>
			<p>Мы свяжемся с вами в ближайшее время.</p>
			<i class="material-icons close_popup">&#xE5CD;</i>
			<form action="/sendme" method="post" id="form_formPageIndex">
				{{ csrf_field() }}
				<input type="text" class="inputFocus" placeholder="Имя" required="" name="Sname">
				<input type="text"" class="inputFocus" id="phone3" placeholder="Телефон" required="" name="Sphone">
				<input type="text"" class="inputFocus" placeholder="Email" required="" name="Semail">
				<button class="button">Отправить заявку</button>
			</form>
			<div class="successForm">
				   <p>Успешно отправлено</p>
			</div>
		</div>
	</div>
</div>
<div class="padBlock">

	<!--  Start doc   -->
	<header>
		<div class="header__left">
			<a href="/" class="logoHeader"><img src="/public/images/logoSVG.svg" alt=""></a>
		</div>
		@if(\Illuminate\Support\Facades\Session::get('main'))
		<div class="header__right">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="#ourWorks">Наши работы</a></li>
				<li><a href="#thirdScreen">Услуги</a></li>
				<li><a href="#fifthScreen">Студия</a></li>
				<li><a href="#sixthScreen">Методология</a></li>
				<li><a href="#seventhScreen">Контакты</a></li>
			</ul>
		</div>
		<div class="firstScreen__ICONWRAP">
				<div class="firstScreen__ICONWRAP--icon">
					<div class="socIcons">
						<ul>
							<li><a target="https://www.facebook.com/redreedigital/" href="https://www.facebook.com/redreedigital/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li><a target="https://vk.com/redree_digital"  href="https://vk.com/redree_digital"> <i class="fa fa-vk" aria-hidden="true"></i></a>
							</li>
							<li><a target="https://www.facebook.com/redreedigital/" href="https://www.instagram.com/redree_digital/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
		</div>
		<div class="hamburger" id="hamburger-1">
			  <span class="line"></span>
			  <span class="line"></span>
			  <span class="line"></span>
		</div>
		@else
		<div class="header__right">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/#ourWorks">Наши работы</a></li>
				<li><a href="/#thirdScreen">Услуги</a></li>
				<li><a href="/#fifthScreen">Студия</a></li>
				<li><a href="/#sixthScreen">Методология</a></li>
				<li><a href="/#seventhScreen">Контакты</a></li>
			</ul>
		</div>
		<div class="firstScreen__ICONWRAP">
				<div class="firstScreen__ICONWRAP--icon">
					<div class="socIcons">
						<ul>
							<li><a target="https://www.facebook.com/redreedigital/" href="https://www.facebook.com/redreedigital/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li><a target="https://vk.com/redree_digital"  href="https://vk.com/redree_digital"> <i class="fa fa-vk" aria-hidden="true"></i></a>
							<li><a target="https://www.facebook.com/redreedigital/" href="https://www.instagram.com/redree_digital/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
		</div>
		<div class="hamburger" id="hamburger-1">
			  <span class="line"></span>
			  <span class="line"></span>
			  <span class="line"></span>
		</div>
			@endif
	</header>


	@yield('content')


	<footer class="wrapper__footer">
		<div class="wrap__footer">
			<div class="footer_logo">
				<a href="/"><img src="/public/images/logoSVG.svg" alt=""></a>
			</div>
			<div class="footer_linksPage">
				<div>
					<a href="">Главная</a>
					<a href="">Наши работы</a>
					<a href="">Услуги</a>
				</div>
				<div>
					<a href="">Студия</a>
					<a href="">Методология</a>
					<a href="">Контакты</a>
				</div>
			</div>
			<div class="footer_contact">
				<div>
					<p>Контакты:</p>
					<a href="">+7 963 403 14 05</a>
					<a href="">feedback@redree.ru</a>
				</div>
				<div>
					<p>Мы в соц.сетях:</p>
					<a href="">Вконтакте</a>
					<a href="">Инстаграм</a>
				</div>
			</div>
		</div>
	</footer>
<a href="/mapsite">-</a>


	<!--   End doc-->
</div>

</body>

</html>