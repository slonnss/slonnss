<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Юлия Юсупова, разработчик Битрикс, Санкт-Петербург</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- 
    Circle Template 
    http://www.templatemo.com/preview/templatemo_410_circle 
    -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- templatemo 410 circle -->
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
<?php
  
  //Если форма отправлена
  if(isset($_POST['submit'])) {
 //Проверка Поля ИМЯ
  if(trim($_POST['contactname']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['contactname']);
  }
 //Проверка поля ТЕМА
  if(trim($_POST['subject']) == '') {
  $hasError = true;
  } else {
  $subject = trim($_POST['subject']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['email']);
  }
 //Проверка наличия ТЕКСТА сообщения
  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $comments = stripslashes(trim($_POST['message']));
  } else {
  $comments = trim($_POST['message']);
  }
  
  ?>
  <!--<script>
	var b="/yusupova/index.php?param=show-4";
	//var param="show-4";
  window.location.href = b;</script-->
  <!--<script src="js/main.js"></script>-->
  <?
  }
 //Если ошибок нет, отправить email
	//if(!isset($hasError)) {
		//$emailTo = 'ros-izolit@yandex.ru'; 
		//$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		//$headers = 'From: My Site <'.$emailTo.'>'.'\r\n'.'Reply-To: '.$email;

		//mail($emailTo, $subject, $body, $headers);
		//$emailSent = true;
		//
//$info1=addslashes($info);

////$mesg='Имя: '.$name.'<br> e-mail: '.$email.'<br>Текст: '.$comments;

////$from='From: zubasta@zubasta.ru \r\n';
////$mail1='ros-izolit@yandex.ru';

////mail('ros-izolit@yandex.ru', "Сообщение персонального сайта", 'ASDFGADFHDGH', 'From: zubasta@zubasta.ru \r\n');
	//}
//$info = 'SDGFASDFHJ ADFGADHTJKfghdfyj sfjfsgjdgki srfudtyityou';
	//$info1=strip_tags($info);

//$info1=addslashes($info);

$mesg='Имя: '.$contactname.' e-mail: '.$email.' Текст: '.$comments;

$from="From: julia@yusupova.com \r\n";

$mail1='ros-izolit@yandex.ru';

mail($mail1, "Сообщение с персонального сайта", $mesg, $from);	
}

  ?>
  
    <div class="bg-overlay"></div>

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a rel="nofollow" href="http://www.templatemo.com/preview/templatemo_410_circle"><img src="images/me.jpg" alt="Circle Template">
                            <span>Юлия Юсупова, разработчик Битрикс, Санкт-Петербург</span></a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="homebutton" href="#">Главная</a></li>
                            <li><a class="show-1" href="#">Резюме</a></li>
                            <li><a class="show-2" href="#">Услуги и цены</a></li>
                            <li><a class="show-3" href="#">Портфолио</a></li>
                            <li><a class="show-4" href="#" onclick="templatemo_map();">Контакты</a></li>
                            <li><a rel="nofollow" href="https://dev.1c-bitrix.ru/learning/resume.php?ID=79368371-4946">Резюме на сайте 1c-bitrix.ru</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">
                
                <div id="menu-container">
					
                    <div id="menu-1" class="about content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab1" class="icon-item">
                                        <i class="fa fa-book"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab2" class="icon-item">
                                        <i class="fa fa-road"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab3" class="icon-item">
                                        <i class="fa fa-pencil"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-left" id="tab1">
                                    <h3>ОБРАЗОВАНИЕ</h3>
									<p>Август-Сентябрь 2018 г. – on-line курс <strong>«Технология Композитный сайт»</strong>. Получен сертификат.  Прослушан курс <strong>«Основные технологии и расширение типовых возможностей системы»</strong>.</p>
                                    <p>Август-Сентябрь 2014 г. – on-line <strong>курс «Разработчик Bitrix FrameWork»</strong>. Получен сертификат.  </p>
									<p>Апрель-май 2010 – on-line курсы по <strong>cms «Bitrix»</strong>. Получены следующие сертификаты:  «Визуальный редактор»,
«Элементы управления», «Компоненты 2_0», «Администрирование системы. Часть 1», «Администрирование системы. Часть 2», «Администрирование системы. Часть 3».
</p>
									<p>Июль 2005 - Факультет переподготовки специалистов Санкт-Петербургского Государственного Технического Университета, центр обучения Microsoft, <strong>курс «Разработка web-приложений с использованием PHP и MySQL»</strong>.</p>
									<p>Сентябрь 2004 - Факультет переподготовки специалистов Санкт-Петербургского Государственного Технического Университета, центр обучения Microsoft, <strong>курс «Администрирование Windows 2000/XP»</strong>. </p>
									<p>Февраль-март 2001 - Факультет переподготовки специалистов Санкт-Петербургского Государственного Технического Университета, центр обучения Microsoft, <strong>курсы «Интернет-технологии: разработка динамических Web-узлов»</strong>. </p>
									<p>1993-1998 - <strong>аспирантура по специальности «Астрофизика и радиоастрономия»</strong> (Институт прикладной астрономии Российской Академии Наук) </p>
									<p>1984-1990 - <strong>Ленинградский Политехнический Институт, радиофизический факультет</strong></p>
									<p>1982-1984 - <strong>физико-математическая школа № 30</strong> </p>
									
                                </div>

                                <div class="toggle-content text-left" id="tab2"><a href="http://"></a>
                                    <h3>ОПЫТ РАБОТЫ</h3>
                                    <p><strong>Январь 2015 по настоящее время – разработчик сайта ООО «Росизолит», программист php-«Bitrix»</strong> (<a href="http://www.rosizolit.com">www.rosizolit.com</a>). Разработка сайта компании на CMS «Bitrix», редакция "Бизнес". Нестандартная интеграция с 1С. Каталог на сайте по сути является справочником по материалам. Созданы специальные модули - подбора материалов по свойствам, по названию (русское, английское, аналоги, сокращения) и по применению. В настоящее время база по материалам находится в процессе заполнения. Проектная работа. 2017 год: участие в создании сайта http://дюростон.рф в качестве менеджера проекта.</p>
									<p></p>
									<p></p>
									<p><strong>Январь - сентябрь 2011 г. – программист в компании «Ideamant» (www.ideamant.ru )</strong>. Программирование сайтов в технологии Microsoft С# (<a href="http://www.rosizolit.com">www.atsstroy.com</a>, <a href="http://www.bagparadise.ru">www.bagparadise.ru</a>,  www.pekop.ru ,  www.realbalans.ru и др. ).</p>
									<p><strong>Сентябрь - декабрь 2010 г.</strong> – web-мастер проекта «Издательский дом «Питер»» (<a href="http://www.piter.com">www.piter.com</a>, cms «Bitrix» - поддержка сайта, доработка функционала). </p>
									<p><strong>С июля 2006 г. по январь 2008 г. – web-менеджер, ведущий специалист отдела рекламы и внешних связей ЗАО «Невский завод»</strong>. </p>
									1) Создание и поддержка корпоративного сайта завода www.nzl.ru. Дизайн главной страницы выполнен в компании «Солайн», сайт построен на cms «Bitrix». <br />
									2) Разработка интранет-портала ЗАО «Невский завод»: техническое задание, дизайн-макет, верстка, интеграция с cms «Bitrix», создание оригинальных программных модулей (электронный телефонный справочник завода с поиском по неполным данным).<br />
									3) Продвижение сайта www.nzl.ru в Интернете (поисковая оптимизация, размещение внешних ссылок и пресс-релизов, статистика посещений сайта и т. п.).<br />
									4) Создание электронного каталога продукции ЗАО «Невский завод».<br />
									5) Подготовка презентаций для отдела продаж.
									<p><strong>С ноября 2004 г. по июнь 2006 года - web-менеджер холдинга «Группа предприятий «СОЮЗ»</strong>. Поддержка сайтов компаний, входящих в состав холдинга (www.souz-spb.ru, www.souzavto.ru, www.souzavto-sts.ru, www.souzavto-sc.ru, www.elba-werk.ru, <a href="http://www.palfinger.ru">www.palfinger.ru</a>, www.deutz-motor.ru, <a href="http://www.donaldson-filters.ru">www.donaldson-filters.ru</a>). Создание сайта www.souzavto-sc.ru - участие в разработке в качестве менеджера проекта (разработчик - компания «Молинос»). Редизайн, развитие и поддержка внутреннего корпоративного сайта холдинга (php-MySQL). Создание системы управления контентом для сайта www.palfinger.ru (в настоящее время в работе). Редизайн основных сайтов Группы «СОЮЗ» (планируется). Редизайн сайта www.deutz-motor.ru. Анализ статистики посещений сайтов, планирование и проведение рекламных кампаний в Интернет. Работа с кодами страниц (html, javascript, php). Ведение договоров (домены, хостинг, рекламные кампании, статистика SpyLog).</p>
									<p><strong>С августа 2003 г. по октябрь 2004 г. - руководитель отдела информации и рекламы в компании ООО «Фирма Сейфы»</strong>. Поддержка сайтов компании www.snu.spb.ru - соавтор сайта, <a href="http://www.ripost.ru">www.ripost.ru</a> - редизайн с применением PHP и базы данных MySQL, проектирование базы данных для сайта. Рекламные кампании в сети Интернет (составление плана рекламных кампаний, проведение кампании, подготовка отчетов по результатам, анализ эффективности рекламных мероприятий). Продвижение сайта www.snu.spb.ru в Интернет, включающее поисковую оптимизацию сайта (SEO). Опыт выведения и удержания сайта на первых двух страницах в ведущих поисковых системах по нескольким ключевым запросам. Анализ статистики посещений сайтов.</p>
									<p><strong>С января 2001 г. по июль 2003 г. - инженер WEB-отдела в компании «ЛЭК ТЕЛЕКОМ»</strong>.<br /> 
1) Поддержка сайтов: html, JavaScript, php, MySQL, PhotoShop. <br />
2) Реклама в сети Internet: планы/отчеты по рекламным кампаниям, подбор ключевых слов и составление аннотации к сайту, в том числе и на английском языке, оптимизация контента (текст, мета-теги, теги title, атрибуты alt в тегах image), регистрация сайтов в поисковых системах и каталогах, подбор тематических каталогов, системы интернет-статистики, счетчики и рейтинги, баннерная реклама, реклама на досках объявлений, программы автоматической регистрации ресурсов. Работа как в Рунете, так и в англоязычном интернете.<br />
3) Администрирование базы данных клиентов (Word, Exel).<br />
4) Техническая поддержка пользователей (телефонные переговоры): настройка почты и т.п. <br />
5) Регистрация доменов. 
</p>
                                </div>

                                <div class="toggle-content text-left" id="tab3">
                                    <h3>ОСНОВНЫЕ НАВЫКИ</h3>
                                    <p><strong>HTML, CSS, PHP, MySQL, Битрикс, jQuery, Ajax, Git/GitHub; также имеется небольшой опыт работы с SASS, Bootstrap, Joomla, Drupal, минимальный - с сайтами на платформе .NET.</strong></p>
									<p><strong>PhotoShop - элементы дизайна</strong></p>
									<p>работа с ПУ хостинга, регистрация и продление доменов и другие смежные задачи</p>
									<p><strong>SEO, реклама и продвижение: Yandex.Метрика, Yandex.Директ, Google Analitics, Google AddSence</strong></p>
									<p>Иностранные языки:
<strong>английский</strong> - деловой и технический разговорный, письменный, опыт перевода научной и технической литературы; 
<strong>немецкий</strong> - перевожу со словарем. 
</p>
									<p>Настольные книги: Якоб Нильсен «Веб-дизайн» (пособие по <strong>usability</strong>), Томпсон, Веллинг «Программирование на PHP», сборники трудов конференций «Стратегия продвижения сайтов в поисковых машинах»</p>
									<p>Личные качества:
склонна к самостоятельной аналитической работе, стараюсь учиться новому, общительна, дисциплинированна, умею работать в команде, ответственно отношусь к любому делу.
</p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->

                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/1s.png" alt="">
                                    </div>
                                    <h4>Интеграция дизайна и настройка платформы</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/4s.png" alt="">
                                    </div>
                                    <h4>Администрирование системы. Часть 1</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/3s.png" alt="">
                                    </div>
                                    <h4>Администрирование системы. Часть 2</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
						<div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/2s.png" alt="">
                                    </div>
                                    <h4>Администрирование системы. Часть 3</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/5s.png" alt="">
                                    </div>
                                    <h4>Битрикс - установка и настройка.</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/6s.png" alt="">
                                    </div>
                                    <h4>Битрикс. Элементы управления.</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
						<div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/7s.png" alt="">
                                    </div>
                                    <h4>Битрикс. Интеграция.</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/8s.png" alt="">
                                    </div>
                                    <h4>Разработчик «Битрикс Framework».</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="member-item">
                                    <div class="thumb">
                                        <img src="images/team/9s.png" alt="">
                                    </div>
                                    <h4>Битрикс. Технология «Композитный сайт».</h4>
                                    <span>Сертификат</span>
                                </div> <!-- /.member-item -->
                            </div> <!-- /.col-md-4 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    <div id="menu-2" class="services content">
                        <div class="row">
                            <ul class="tabs">
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab4" class="icon-item">
                                        <i class="fa fa-cogs"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab5" class="icon-item">
                                        <i class="fa fa-money"></i>
                                    </a> <!-- /.icon-item -->
                                </li>
                                <li class="col-md-4 col-sm-4">
                                    <a href="#tab6" class="icon-item">
                                        <i class="fa fa-user"></i>
										<!--<i class="fa fa-leaf"></i>
										<i class="fa fa-users"></i>-->
                                    </a> <!-- /.icon-item -->
                                </li>
                            </ul> <!-- /.tabs -->
                            <div class="col-md-12 col-sm-12">
                                <div class="toggle-content text-left" id="tab4">
                                    <h3>Услуги</h3>   
                                    <p><ul><li>Создание сайтов и интернет-магазинов на платформе <a href="https://www.1c-bitrix.ru/" target="_blanck"><strong>1С-Битрикс</strong></a> с использованием готового шаблона дизайна. Шаблон для сайта можно подобрать <a href="http://www.bitrixtemplates.ru/" target="_blanck"><strong>здесь</strong></a> и <a href="https://www.templatemonster.com/ru/website-templates-type/" target="_blanck"><strong>здесь</strong></a>.<br /><br /></li>
									<li>Сайты и интернет-магазины на основе готовых решений на платформе 1С-Битрикс. С готовыми решениями на платформе 1С-Битрикс можно ознакомиться <a href="http://marketplace.1c-bitrix.ru/" target="_blanck"><strong>здесь</strong></a>.<br /><br /></li>
									<li>Доработка сайта на платформе 1С-битрикс.<br /><br /></li>
									<li>Перенос сайта с различных cms на 1С-Битрикс.<br /><br /></li>
									<li>Поддержка сайтов на платформе 1С-Битрикс.</li></ul></p>
                                </div>

                                <div class="toggle-content text-left" id="tab5">
                                    <h3>Цены</h3>
                                    <p>
									<table width="100%" cellpadding="5px" cellspacing="0" border="1">
									<tr>
									<td align="center" width="50%"><strong>Вид работ</strong>
									</td>
									<td align="center" width="25%"><strong>Стоимость</strong>
									</td>
									<td align="center" width="25%"><strong>Сроки выполнения</strong>
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Создание сайта на платформе 1С-Битрикс с использованием <br />&nbsp;готового шаблона дизайна
									</td>
									<td align="center">от 16000 руб.
									</td>
									<td align="center">от 2-х дней
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Создание интернет-магазина на платформе 1С-Битрикс с <br />&nbsp;использованием готового шаблона дизайна
									</td>
									<td align="center">от 140000 руб.
									</td>
									<td align="center">от 6-и недель
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Корпоративный или персональный сайт <br />&nbsp;на основе готового решения на платформе 1С-Битрикс
									</td>
									<td align="center">от 20000 руб.
									</td>
									<td align="center">от 2-х дней
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Интернет-магазин на основе готового решения на платформе <br />&nbsp;1С-Битрикс
									</td>
									<td align="center">от 80000 руб.
									</td>
									<td align="center">от 1 недели
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Перенос сайта с различных cms на 1С-Битрикс<br />&nbsp;
									</td>
									<td align="center">от 30000 руб.
									</td>
									<td align="center">от 1 недели
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Перенос интернет-магазина с различных cms на 1С-Битрикс<br />&nbsp;
									</td>
									<td align="center">от 50000 руб.
									</td>
									<td align="center">от 4 недель
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Доработка сайта на платформе 1С-битрикс<br />&nbsp;
									</td>
									<td align="center">600 руб./час
									</td>
									<td align="center">-
									</td>
									</tr>
									
									<tr>
									<td align="left">&nbsp;Поддержка сайтов на платформе 1С-Битрикс<br />&nbsp;
									</td>
									<td align="center">500 руб./час
									</td>
									<td align="center">-
									</td>
									</tr>
									
									</table>
									</p>
                                </div>

                                <div class="toggle-content text-left" id="tab6">
                                    <h3>Порядок выполнения работ</h3>
                                    <p>Я работаю только официально - с заключением договора подряда,
подписанием Акта о выполненных работах, перечислением оплаты (за вычетом налогов) на банковскую карту 

.</p>
									<p>В сфере web-разработки, а также продвижения сайтов работаю с 2001 года, с продуктами компании "1С-

Битрикс" работаю с 2006 года.<br /><br />
<strong>Основные этапы работ</strong><br /><br />
1. Вы оставляете заявку на разработку сайта (на странице "Контакты");<br />
2. Я присылаю Вам бриф для заполнения, мы договариваемся о встрече для обсуждения проекта;<br />
3. Я изучаю бриф, составляю смету и календарный план работ (в некоторых случаях требуется написание полноценного 

Технического задания),
которые мы с Вами обсуждаем;<br />
4. После согласования стоимости и сроков работ я подготавливаю Договор подряда, мы его подписываем;<br />
5. В случае, если требуется подобрать шаблон дизайна, я подбираю варианты дизайна (шаблоны) 
в соответствии с Вашими пожеланиями, Вы рассматриваете их и выбираете шаблон для своего сайта;<br />
6. Далее я выполняю подбор, покупку, установку и настройку платформы "Битрикс";<br />
7. Выполняю интеграцию дизайна;<br />
8. Создаю страницы, наполнение, делаю SEO-настройки;<br />
9. Создаю структуру каталога, загружаю данные в базу данных сайта;<br />
10. Выполняю настройки отображения каталога и, в случае необходимости, дополнительное программирование;<br />
11. Выполняю синхронизацию с 1С: настройку, отладку, тестирование;<br />
12. Провожу все остальные необходимые работы по контенту;<br />
13. Размещаю сайт на хостинге, выполняю необходимые настройки;<br />
14. Выполняю все пункты "Монитора качества" ПУ Битрикс и тестирование проекта в целом;<br />
15. Мы подписываем Акт о выполнении работ, Вы производите оплату, после чего я передаю Вам все необходимые данные для доступа к хостингу и панели управления сайтом;<br />
16. При необходимости проводится обучение пользователей работе с сайтом.<br /><br />
17. После завершения работ по созданию сайта я могу взять Ваш сайт в поддержку.<br /><br />

Оплата возможна поэтапная, в соответствии с указанным в Договоре графиком выполнения работ.<br /><br />
<strong>Почему стоит работать с частным вебмастером?</strong><br /><br />
Отдавая свой будущий сайт в руки частному web-мастеру, Вы прежде всего избегаете общения с 

посредниками
(обычно это менеджеры), имеете возможность быстрее и четче донести свои идеи до разработчика. Тем 

самым
<strong>сокращается</strong> количество ошибок и моментов непонимания и, соответственно, - <strong>время на разработку сайта</strong>.<br /><br />

Как правило работать с частным web-мастером <strong>выгоднее с финансовой точки зрения</strong>, поскольку стоимость
часа специалиста в компании значительно выше (обычно в 2-3 раза).

</p>
									
                                </div>
                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.services -->

                    <div id="menu-3" class="gallery content">
                        <div class="row">
                            
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/durostone.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/durostone.jpg">
                                        <span>дюростон.рф - менеджер проекта: прототип, наполнение, cms Drupal. 2017 г.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/710oil.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/710oil.jpg">
                                        <span>710oil.su - адаптация готового решения «Магазин BITRONIC 2.0» на платформе «Битрикс». 2016-2017 г.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/lsst.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/lsst.jpg">
                                        <span>Доработка сайта lsst.ru на платформе «Битрикс». <br />2017-2018 г.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
							
							
							<div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/forum-media.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/forum-media.jpg">
                                        <span>Создание сайта журнала ot.forum-media.ru на платформе «Битрикс» (интеграция дизайна, настройка функционала, доработки). 2017 г.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/rosizolit.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/rosizolit.jpg">
                                        <span>
Разработка сайта компании "Росизолит" rosizolit.ru, «Bitrix», редакция «Бизнес». Интеграция с 1С. 2015 г.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/atsstroy.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/atsstroy.jpg">
                                        <span>Сайт «ATS stroy» atsstroy.com, 2011 г.
Программирование проекта на C#.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
							
							
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/piter.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/piter.jpg">
                                        <span>Сайт издательского дома «Питер» piter.com: «Bitrix» - поддержка сайта, доработка функционала. 2010 г.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/nzl.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/nzl.jpg">
                                        <span>Сайт ЗАО «Невский завод», 2006&nbsp;г.:
менеджер проекта, разработчик «Битрикс», наполнение,
поддержка, продвижение.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/rep.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/rep.jpg">
                                        <span>Intranet сайт ЗАО «Росэлектропром холдинг», 2007&nbsp;г.
ТЗ, дизайн, разработка - PHP/MySQL, bitrix,
электронный справочник
по персоналу. </span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/deutz.jpg" title="Сайт Deutz, 2005 г. (дизайн, разработка,
наполнение, продвижение)">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/deutz.jpg">
                                        <span>Сайт «Deutz», 2005 г. Дизайн, разработка,
наполнение, продвижение.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/zubasta.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/zubasta.jpg">
                                        <span>Автосайт zubasta.ru, 2007 г. Дизайн, разработка -
PHP/MySQL, проектирование БД, оригинальный
алгоритм, продвижение.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/ripost.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/ripost.jpg">
                                        <span>Сайт «Сейфы Рипост», 2004 г. Дизайн, разработка -
PHP/MySQL, проектирование БД.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
							
							
							
							<div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/bagparadise.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/bagparadise.jpg">
                                        <span>«Сумчатый Рай» bagparadise.ru, 2011 г.
Программирование проекта на C#.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/souz_intra.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/souz_intra.jpg">
                                        <span>Intranet сайт Группы предприятий Союз, 2006 г.
Редизайн, PHP/MySQL, поддержка и развитие,
эксклюзивный функционал.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
                            <div class="col-md-4 col-ms-6">
                                <div class="g-item">
                                    <img src="images/gallery/souz_sc.jpg" title="">
                                    <a data-rel="lightbox" class="overlay" href="images/gallery/souz_sc.jpg">
                                        <span>«Сервисный центр», 2004&nbsp;г.Разработка ТЗ,
менеджер проекта.</span>
                                    </a>
                                </div> <!-- /.g-item -->
                            </div> <!-- /.col-md-4 -->
							
							
							
							

                        </div> <!-- /.row -->
                    </div> <!-- /.gallery -->

                    <div id="menu-4" class="contact content">
                        <div class="row">
                        	
                            <div class="col-md-12">
                                <div class="toggle-content text-center spacing">
                                    <h3>Контакты</h3>
                                    <p>В сфере интернет-технологий работаю с 2001 года. 
Сертифицированный специалист «Битрикс».<br /><br />

Склонна к самостоятельной аналитической работе, стараюсь учиться новому в деле сайтостроения, ответственно отношусь к делу.
<br /><br />
Рассматриваю варианты: «проектная работа» (при почасовой оплате - по ставке 500 р./час), возможно также и постоянное (долговременное) сотрудничество. Возможна работа в офисе (в Санкт-Петербурге). В случае удаленной работы я всегда на связи (телефон, e-mail, QIP, Skype), в офис приезжаю по договоренности, отчет о работе предоставляю еженедельно.
Отдайте ваши сайты в надежные руки!
                                    <br>
                                    <br><strong>Email:</strong> slonnss @ yandex ru (без пробелов)| <strong>Tel:</strong> 8(921)985-17-30
									<br><strong>Skype:</strong> slonnss | <strong>QIP: 639-492-108</strong> | <strong>Telegram: slonnss</strong></p>
                                </div>
                            </div> <!-- /.col-md-12 -->
                            
                            <!--<div class="col-md-12">
                                <div class="google-map">
                                </div> --><!-- /.google-map -->
                            <!--</div> --><!-- /.col-md-12 -->
                            
                            
							
							<?php //echo $_SERVER['PHP_SELF']; ?>
							<div class="col-md-12">
                                <div class="contact-form">
                                    <div class="row">
									<?//if(isset($_POST['submit'])) {
										 //echo '<div class="col-md-12"><div class="toggle-content text-center spacing"><p>Спасибо, Ваше сообщение принято!</p></div></div>';
										 //$_POST['submit'] = '';
									  //}
									  
										?>
								
                                    	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                            <fieldset class="col-md-4">
                                                <input id="name" type="text" name="contactname" placeholder="Ваше имя">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="email" name="email" id="email" placeholder="E-mail">
                                            </fieldset>
                                            <fieldset class="col-md-4">
                                                <input type="text" name="subject" id="subject" placeholder="Тема письма">
                                            </fieldset>
                                            <fieldset class="col-md-12">
                                                <textarea name="message" id="message" placeholder="Ваше сообщение"></textarea>
                                            </fieldset><input type="hidden" name="param" value="1">
                                            <fieldset class="col-md-12">
                                                <input type="submit" name="submit" onclick="alert('Спасибо за Ваше обращение, я постараюсь быстро ответить Вам.')" value="Отправить" id="submit" class="button">
                                            </fieldset>
                                        </form>
                                    </div> <!-- /.row -->
                                </div> <!-- /.contact-form -->
                            </div> <!-- /.col-md-12 -->
							
							
							
							
                        </div> <!-- /.row -->
                    </div> <!-- /.contact -->

                </div> <!-- /#menu-container -->

            </div> <!-- /.col-md-8 -->

        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">Copyright &copy; 2018 <a href="#">Юлия Юсупова</a></p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->
<?php //echo $_POST['param'] ?>
<?//$test = '/yusupova/index.php';?>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
	
	<!--<script>
         var param;
		 param = <?//=$test?>;
    </script>-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
            
			jQuery(function ($) {

                $.supersized({

                    // Functionality
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        {
                            image: 'images/templatemo-slide-1.jpg'
                        }, {
                            image: 'images/templatemo-slide-2.jpg'
                        }, {
                            image: 'images/templatemo-slide-3.jpg'
                        }, {
                            image: 'images/templatemo-slide-4.jpg'
                        }
                    ]

                });
            });
            
    </script>
    
    	<!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
        <script type="text/javascript">
           function templatemo_map() {
                $('.google-map').gmap3({
                    marker:{
                        address: '16.8496189,96.1288854' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            }
        </script>
		<?$_POST['submit']='';?>
</body>
</html>