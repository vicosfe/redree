@extends('layouts.app')
@section('content')
	<section class="firstScreen firstScreenCoutnPrice_Page">
		<div class="stepworkPage">
			<h3>Рассчитать стоимость</h3>
			<div class="firstScreenMiddle__wrapp">
				<p>Выберите интересующую вам услугу и ниже выберите пункты которые вам нужны в вашем проекте.</p>
			</div>
		</div>
		<div class="wrapperScroll">
			<div class="scroll-downs">
				<div class="mousey">
					<div class="scroller"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="wrapper_tabs">
		<div class="tabs">

			<ul class="tabs__caption">
				<li @if($id == 1) class="active" @endif>Промо-сайт</li>
				<li @if($id == 2) class="active" @endif>Корпоративный сайт</li>
				<li @if($id == 3) class="active" @endif>Сервис</li>
				<li @if($id == 4) class="active" @endif>Интернет-магазин</li>
				<li @if($id == 5) class="active" @endif>Мобильные приложения</li>
				<li @if($id == 6) class="active" @endif>Брендинг</li>
				<hr>
			</ul>
			<div class="prevTabs"></div>
			<div class="nextTabs"></div>
			<div class="lineTabsCaption"></div>
			<!-- Tab content -->
			<div class="tabs__content @if($id == 1) active @endif">

				<form action="/services/add/1" method="post" class="formWrapper" id="form_PageCountPrice" enctype="multipart/form-data" autocomplete="off">

					{{ csrf_field() }}
					<div class="tabcontent_chekBox">
						<p class="fuckingProblemSuccessForm">Выберите нужные поля и заполните форму.</p>
						<div class="size_checkened">
							<div class="checkenedWrap">
								<div class="checBox_form checkForm">
									<p>Что?</p>
									<label><input type="checkbox" name="who1" class="input--man"><p class="man"><span>Веб-сайт</span></p></label>
									<label><input type="checkbox" name="who2" class="input--woman"><p class="man"><span>Дизайн</span></p></label>
								</div>
								<div class="checBox_form checkForm">
									<p>Сроки на разработку</p>
									<label><input type="checkbox" name="time1" class="input--man"><p class="man"><span>Реальные сроки</span></p></label>
									<label><input type="checkbox" name="time2" class="input--woman"><p class="man"><span>Важен процесс</span></p></label>
									<label><input type="checkbox" name="time3" class="input--woman"><p class="man"><span>Срочно нужен</span></p></label>
								</div>
							</div>
							<div class="checkenedWrap">
								<div class="checBox_form checkForm">
									<p>Планируемый бюджет</p>
									<label name="price"><input type="radio" name="price" class="input--man"><p class="man"><span>10-30 тыс. руб.</span></p></label>
									<label name="price"><input type="radio" name="price" class="input--woman"><p class="man"><span>30-50 тыс. руб.</span></p></label>
									<label name="price"><input type="radio" name="price" class="input--man"><p class="man"><span>50-80 тыс. руб.</span></p></label>
									<label name="price"><input type="radio" name="price" class="input--man"><p class="man"><span>80-100 тыс. руб.</span></p></label>
								</div>
								<div class="checBox_form checkForm">
									<p>Адаптивность</p>
									<label><input type="checkbox" name="adaptive1" class="input--man"><p class="man"><span>Десктопная версия</span></p></label>
									<label><input type="checkbox" name="adaptive2" class="input--woman"><p class="man"><span>Планшетная версия</span></p></label>
									<label><input type="checkbox" name="adaptive3" class="input--man"><p class="man"><span>Телефонная версия</span></p></label>
								</div>
							</div>
							<div class="checkenedWrap">
								<div class="checBox_form checkForm">
									<p>Система управления</p>
									<label name="systemcontrol"><input type="radio" name="systemcontrol" class="input--man"><p class="man"><span>Не нужна</span></p></label>
									<label name="systemcontrol"><input type="radio" name="systemcontrol" class="input--woman"><p class="man"><span>Wordpress</span></p></label>
									<label name="systemcontrol"><input type="radio" name="systemcontrol" class="input--man"><p class="man"><span>Joomla</span></p></label>
									<label name="systemcontrol"><input type="radio" name="systemcontrol" class="input--woman"><p class="man"><span>Индивидуальная</span></p></label>
								</div>
								<div class="checBox_form checkForm">
									<p>Как Вы о нас узнали?</p>
									<label><input type="checkbox" name="know1" class="input--man"><p class="man"><span>Наружная реклама</span></p></label>
									<label><input type="checkbox" name="know2" class="input--woman"><p class="man"><span>Социальные сети</span></p></label>
									<label><input type="checkbox" name="know3" class="input--man"><p class="man"><span>По рекомендации</span></p></label>
									<label><input type="checkbox" name="know4" class="input--woman"><p class="man"><span>От сотридников RedRee</span></p></label>
								</div>
							</div>
							<div class="checkenedWrap">
								<label class="file_upload">
									<span class="file_load">Загрузите ТЗ<br>(если есть)</span>
									<input type="file" name="document">
								</label>
							</div>
						</div>
					</div>
					<div class="tabcontent_form">
						<p>Заполните форму</p>
						<div class="checkForm">
							<div class="form_inputLeft">
								<input type="text" class="inputFocus" placeholder="Введите ваше имя" name="name">
								<input type="text" class="inputFocus" placeholder="Введите название фирмы" name="firma">
								<input type="text" class="inputFocus" placeholder="Введите свою должность" name="post">
								<button class="button">Отправить</button>
							</div>
							<div class="form_inputRight">
								<input type="text" class="inputFocus" placeholder="Введите сайт компании" name="sait">
								<input type="text" class="inputFocus" id="phone5" placeholder="Введите номер телефона" name="phone">
								<input type="email" class="inputFocus" placeholder="Введите email" name="email">
							</div>
						</div>
					</div>
					<div class="successForm">
						<p>Успешно отправлено</p>
					</div>
				</form>
			</div>
			<div class="tabs__content @if($id == 2) active @endif">
				<div class="wrap_noneBlock">
					<h1>
						Страница находится на стадии разработки. <br>Просим у наших многочисленных посетителей прощения.
					</h1>
				</div>
			</div>
			<div class="tabs__content @if($id == 3) active @endif">
				<div class="wrap_noneBlock">
					<h1>
						Страница находится на стадии разработки. <br>Просим у наших многочисленных посетителей прощения.
					</h1>
				</div>
			</div>
			<div class="tabs__content @if($id == 4) active @endif">
				<div class="wrap_noneBlock">
					<h1>
						Страница находится на стадии разработки. <br>Просим у наших многочисленных посетителей прощения.
					</h1>
				</div>
			</div>
			<div class="tabs__content @if($id == 5) active @endif">
				<div class="wrap_noneBlock">
					<h1>
						Страница находится на стадии разработки. <br>Просим у наших многочисленных посетителей прощения.
					</h1>
				</div>
			</div>
			<div class="tabs__content @if($id == 6) active @endif">
				<div class="wrap_noneBlock">
					<h1>
						Страница находится на стадии разработки. <br>Просим у наших многочисленных посетителей прощения.
					</h1>
				</div>
			</div>

		</div>
	</section>
@endsection