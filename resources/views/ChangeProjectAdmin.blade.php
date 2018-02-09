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

<form action="" class="parametrForm" method="POST">
	<div class="wrapper_popup mainPopup">
		<div class="wrap_popup mainPopup">
			<div class="deleteWorkDB">
				<div  class="childPopup formPop" >
					<h2>Изменение</h2>
					<p>Действительно хотите изменить <br> данный проект?</p>
					<div>
						<a class="button">Отменить</a>
						<button class="button">Изменить</button>
					</div>	
				</div>
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
				<a href="/admin"><i class="material-icons">exit_to_app</i></a>	
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
					<h2>Редактирование проекта "Инвестиционный портал"</h2>
					<div class="addLink__selectProject">
						<div class="button saveChengeButton">Сохранить изменения</div>
					</div>
				</div>
				<div class="wrap_information">
					<div class="information_oneItem">
						<input type="text" class="inputFocus" placeholder="Название проекта">
						<textarea name="" class="inputFocus" placeholder="Задачи проекта"></textarea>
					</div>
					<div class="information_twoItem">
						<input type="text" placeholder="Ссылки на проект" class="inputFocus">
						<input type="text" placeholder="Клиент (чмо тупорылое)" class="inputFocus">					
						<select name="" id="" class="">
							<option value="0">Драгдилер</option>
							<option value="1">Промо-сайт</option>
							<option value="2">Торговля людьми</option>
							<option value="3">Торговля женщинами</option>
						</select>
						<input type="text" placeholder="Год" class="inputFocus">
						<div class="asspain inputFocus">
							<div class="design">
								<p>Зияудинов Расул<i class="material-icons">close</i></p>
							</div>
							<div class="front-end">
								<p>Осипов Виктор<i class="material-icons">close</i></p>
							</div>
							<div class="back-end">
								<p>Тюрюханова Кристина<i class="material-icons">close</i></p>
							</div>
						</div>
					</div>
					<div class="information_threeItem">
						<div class="textareaAdd">
							<input type="text" class="inputFocus" placeholder="Заголовок">
							<textarea class="inputFocus" placeholder="Текст"></textarea>
							<div title="Кликай уже, не беси" class="test">
								<input type="file" size="1" / class="tinput">
							</div>
						</div>
					</div>
					<div class="information_fourItem">
						<div class="button addText">Добавить текст</div>
						<div class="button addImages">Добавить изображение</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



</body>
</html>