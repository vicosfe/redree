<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Суперпиздатая админка</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500&amp;subset=cyrillic" rel="stylesheet">
	<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/public/admin228/adminStyle.css">
	<link rel="stylesheet" href="/public/css/jquery.fs.selecter.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script src="/public/js/jquery.fs.selecter.min.js"></script>
	<script src="/public/admin228/adminJavaScript.js"></script>
</head>
<body class="adminBody">

<div class="wrapper_popup mainPopup">
	<div class="wrap_popup mainPopup">
		<div class="deleteWorkDB">
			<form action="" method="POST" class="childPopup formPop">
				<h2>Удаление</h2>
				<p>Действительно хотите удалить <br> данный проект?</p>
				<div>
					<a class="button">Отменить</a>
					<button class="button">Удалить</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="padBlock">

	<header>
		<div class="header__left">
			<a href="/" class="logoHeader"><img src="/public/images/logoSVG.svg" alt=""></a>
		</div>
		<div class="wrapper__header__personal">
			<div class="header__comboWork">
				<a href="" class="active">Работа с сайтом</a>
				<a href="">Работа с заявками</a>
				<a href="">Работа с проектами</a>
			</div>
			<div class="header__personal">
				<div class="header__personalBlock">
					<p class="namePersonal">Заур</p>
					<span class="positionPersonal">front-end, основатель.</span>
				</div>

				<a href=""><i class="material-icons">account_circle</i></a>
				<a href=""><i class="material-icons">notifications_none</i></a>
				<a href=""><i class="material-icons">exit_to_app</i></a>	
			</div>
		</div>
	</header>


	<!-- ******************************************************** -->

	
	<div class="wrapper__basicFunctional">
		<div class="head__basicFunctional">
			<a href="" class="active">Проекты</a>
			<a href="">Сотрудники</a>
			<a href="">Настройка</a>
			<div class="back"><a href=""><i class="material-icons">keyboard_backspace</i></a></div>
		</div>
		<hr>

		<div class="wrapper__selectProject">
			<div class="title__selectProject">
				<h2>Выберите проект</h2>
				<div class="addLink__selectProject">
					<a href="/AddProjectAdmin" class="button">Добавить проект</a>
					<select name="" id="" class="">
						<option value="0">Драгдилер</option>
						<option value="1">Промо-сайт</option>
						<option value="2">Торговля людьми</option>
						<option value="3">Торговля женщинами</option>
					</select>
				</div>
			</div>
			<div class="wrapper_ourWorks__selectProject">
				<div class="item" style="background: #fff">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/invest_logo.png" alt="">
					</div>
				</div>
				<div class="item" style="background: #141414">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/logo_republic.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/lvka.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/paradiseShop.png" alt="">
					</div>
				</div>
				<div class="item" style="background: #141414">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/vapeshop.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/EventsPro.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/motoracer.png" alt="">
					</div>
				</div>
				<div class="item">
					<div class="deleteWork"><i class="material-icons">close</i></div>
					<div class="wrap_images">
						<img src="/public/images/dobrobleat.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>
	
</body>
</html>