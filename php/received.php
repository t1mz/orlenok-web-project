<?php


$BD_host="localhost";
$BD_login="g9127242_bd1";
$BD_pass="!*Z?!@jt";
$BD_dataBase="g9127242_bd1";


	$mysqli = new mysqli($BD_host, $BD_login, $BD_pass, $BD_dataBase); // Подключаемся к базе данных
	$mysqli->query("SET NAMES 'utf8'"); // Устанавливаем кодировку
	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$text=$_POST['text'];
		
	

$result_4 = $mysqli->query("INSERT INTO `timz`(`name`, `email`, `text`) VALUES ('$name','$email','$text')");



echo
'<HTML>
<HEAD>
<meta charset = "UTF-8" />
<link rel="stylesheet" type="text/css" media="all" href="/css/styles.css">
<TITLE>Конкурсный сайт</TITLE>
</HEAD>
<BODY>
<a name="top"></a>
<header>
  <div class="head-cont">
  <div class="head-name"><p>Вопросы энергоэффективности и энергосбережения<br>при создании и использовании цифровых устройств</p></div>
  </div>
</header>
<nav>
    <a href="/index.html">Главная страница</a>
    <a href="/pages/chapters.html">Оглавление</a>
    <a href="/pages/page1.html">Раздел 1</a>
    <a href="/pages/page2.html">Раздел 2</a>
    <a href="/pages/page3.html">Раздел 3</a>
    <a href="/pages/connect.html">Обратная связь</a>
</nav>
<main>
  <H1>Обратная связь</H1>
  <hr>
   <div class="post">
    <article>
      <h2>Отправлено</h2>
      <div class="post-img-c">
	<img src="/img/system/hz-placeholder.jpg">
      </div>
      <div>
      <p align="center"><b>Спасибо, ваше сообщение было отправлено.</b><br>
      Содержание сообщения:<br>
      <i>Имя</i>: '.$name.'<br><i>Email</i>: '.$email.'<br><i>Сообщение</i>: '.$text.
      '</p>
      </div>
    </article>
  </div>
  <hr>
  </div>
</main>
<footer>
  <div>
    <p style="font-size:90%;">Сайт подготовлен для участия в конкурсе на обучение по тематической дополнительной общеразвивающей программе «Цифровое будущее России» <a href="http://center-orlyonok.ru/" style="color:black;">ФГБОУ ВДЦ «Орлѐнок»</a><br>Для просмотра рекомендуется использовать современный веб-браузер поддерживающий HTML5<br>Используемый материал взят из свободных <a href="/pages/conclusion.html#sources" style="color:black;">источников</a><br>2017</p>
  </div>
</footer>
</BODY>
</HTML>'














?>