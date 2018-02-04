@extends('layouts.app')
@section('content')

<section class="firstScreen">
   <div class="titleText_cardtovarPage">
	   <h3>Инвестицинный портал</h3>
		<a href="">Перейти на сайт</a>
  </div>
  <div class="wrapperScroll wrapperScrollCardPage">
	<div class="scroll-downs">
		<div class="mousey">
			<div class="scroller"></div>
		</div>
	</div>
</div>
</section>
		
<section class="taskProject">
	<div class="wrapTaskProjectLeft">
		<h3>Задачи проекта:</h3>
		<p>Инвестиционный портал г.Махачкалы - это портал предоставляющий инвесторам найти проект или предложение города Махачкалы. <br><br>
Перед нашей командой стояла цель разработать “Инвестиционный портал г.Махачкалы” в трендах веб-дизайна, портал должен быть удобен в использовании и понятным для пользователей в навигации по сайту.</p>
	</div>
	<div class="wrapTaskProjectRight">
		<div class="TaskProjectRight_infoProject">
			<div>
				<span>Клиент:</span>
				<p>Администрация<br>г.Махачкалы</p>
			</div>
			<div>
				<span>Вид работы:</span>
				<p>Корпоративный<br>сайт</p>
			</div>
			<div>
				<span>Год:</span>
				<p>2017</p>
			</div>
		</div>
		<div class="TaskProjectRight_worker">
			<span>Над проектом работали:</span>
			<p>Зияудинов Расул &mdash; <span class="shitWorkerSpan">Веб-дизайн</span></p>
			<p>Осипов Виктор &mdash; <span class="shitWorkerSpan">Front-end разработка</span></p>
			<p>Тюрюханова Кристина &mdash; <span class="shitWorkerSpan">Back-end разработка</span></p>
		</div>
	</div>
</section>
		
<section class="screenshotWorks">
	<div class="logoWork_cardtovarPage">
		<img src="images/invest_logo.png" alt="">
	</div>
	<div class="twoScreenshotBlcok">
		<img src="images/investInfo_bg.png" alt="">
		<h3>Заголовок</h3>
		<p>Мы провели полный анализ информационной структуры сайта галереи и реорганизовали ее в простую архитектуру ресурса. Мы создали систему подачи самого разнообразного контента. Функционал раздела «Коллекция» ориентирован на людей с разным уровнем погружения в историю русского искусства. Тут внедрена система фильтров, благодаря которым пользователи легко найдут произведения определенного автора или эпохи, а также узнают, в каком зале выставлена понравившаяся работа. Раздел, охватывающий в данный момент только часть реального объема, подготавливает базу для оцифровки и публикации обширного собрания работ, собранных в Галерее.</p>
	</div>
	<div>
		<img src="images/investForm_bg.png" alt="">
	</div>
</section>
		
<section>
   <div class="wrapper_nextWork">
		<a href="">Предыдущий проект</a>
		<a href="index.html">Выйти</a>
		<a href="">Слудующий проект</a>
	</div>
</section>

@endsection