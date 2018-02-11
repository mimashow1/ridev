<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <!--navbar - строка-->
    <nav role="navigation" class="navbar navbar-default">
    <!-- Логотип и мобильное меню -->
  	<div class="navbar-header">
      <!--collapse - что либо скрывать, navbar-toggle для нормальной работы с бургером-->
  	<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <!--sr-only не даёт отображать текст на сайте-->
  	    <span class="sr-only">Toggle navigation</span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  	</button>
      <!--Вместо navbar-brand можно поставить navbar-left-->
  		<a href="#" class="navbar-brand">SeoBel.ru</a>
  	</div>
    <!-- Навигационное меню -->
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <!--nav небходим для настройки навигации, navbar-nav для найстройки текста под меню-->
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Главная</a></li>
          <li><a href="#">Статьи</a></li>
          <li><a href="#">Новости</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Войти</a></li>
      </ul>
      </div>
  </nav>

  <nav class="navbar navbar-default">
    <div class="navbar-header">
      da
      net
      <button type="button" data-target="#col" data-toggle="collapse" class="navbar-toggle">
    	    <span class="sr-only">Toggle navigation</span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    	</button>

      <div id="col">
        <ul>
          <li>li</li>
        </ul>
      </div>
    </div>

  </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
