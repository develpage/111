<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset')?>">
	<!-- <base href="/"> -->

	<title><?php the_title(); ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
    <?php
     wp_head();
    ?>
	

</head>

<body>

	<!-- Navigation -->

	<div class="nav-wrapper">
		<div class="navigation">
			<div class="logo">
				<a href="#">Neurolyti<span>&bull;</span>x</a>
			</div>
			<nav>
				<ul>
					<li>
						<a href="#service-anchor">О сервисе</a>
					</li>
					<li>
						<a href="#research-anchor">Исследования</a>
					</li>
					<li>
						<a href="#work-anchor">Как работает</a>
					</li>
					<li>
						<a href="#team-anchor">Команда</a>
					</li>
					<li>
						<a href="#contacts-anchor">Контакты</a>
					</li>
				</ul>
			</nav>
			<div class="btn-create">
				<a href="http://survey.neurolytix.ai/">
					<span></span>Создать исследование</a>
					<img src="<?php echo Q_IMG_DIR; ?>/buttons/menu_hover_button.svg" alt="" class="menu-btn-hover">
			</div>
		<!-- Mobile menu -->
			<div class="mobile-menu">
				<div class="mobile-menu-content">
					<div class="language-choose">
						<div class="language active-lang">RUS</div>
						<div>
							<div class="language-line"></div>
						</div>
						<div class="language">ENG</div>
					</div>
					<hr class="mobile-hr full-line">
					<ul>
						<li>
							<a class="mobile-link" href="#service-anchor">
								<img class="mob-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/m-ico1.svg" alt=""> О сервисе</a>
						</li>
						<li>
							<a class="mobile-link" href="#research-anchor">
								<img class="mob-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/m-ico-2.svg" alt=""> Исследования</a>
						</li>
						<li>
							<a class="mobile-link" href="#work-anchor">
								<img class="mob-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/m-ico-3.svg" alt=""> Как работает</a>
						</li>
						<li>
							<a class="mobile-link" href="#team-anchor">
								<img class="mob-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/m-ico-4.svg" alt=""> Команда</a>
						</li>
					</ul>
					<div class="mobile-hr">
					</div>
					<div class="mobile-contacts">
						<ul>
							<li>
								<a onclick="javascript:window.open('tel:+7-499-123-17-26', 'tel'); event.preventDefault()" href="tel:+7-499-123-17-26"
								 class="mob-phone">
									<img class="mob-contcat-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/phone.svg" alt="">+7 499 123-17-26</a>
							</li>
							<li>
								<a onclick="javascript:window.open('mailto:info@Neurolytix.ru', 'mail');event.preventDefault()" href="mailto:info@Neurolytix.ru"
								 class="mob-mail">
									<img class="mob-contcat-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/mail.svg" alt=""> info@Neurolytix.ru</a>
							</li>
							<li>
								<img class="mob-contcat-ico" src="<?php echo Q_IMG_DIR; ?>/mobile_menu_icons/adr.svg" alt="">
								<span class="mob-adr">Россия, Москва, Тверская-Ямская, 12</span>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="burger">
				<span class="burger-item top"></span>
				<span class="burger-item middle"></span>
				<span class="burger-item bottom"></span>
			</div>	
	</div>
	<div class="menu-bottom-line-wrapper">
		<div class="scrollBar"></div>
	</div>
	</div>
	<!-- Head section -->

	<section>
		<div class="wrapper">
			<header>
				<div class="head-discription">
					
					<div class="head-img">
						<img class="circles img-responsive" src="<?php echo Q_IMG_DIR; ?>/pictures/circles.png" alt="">
						<!-- Head SVG  -->

						<svg class="fullscreen" version="1.1" x="0px" y="0px" viewBox="0 0 881.019 596.312" style="enable-background:new 0 0 881.019 596.312;" xml:space="preserve">
							<style type="text/css">
								.st0 {
									fill: none;
									stroke: rgba(255, 255, 255, 0.23);
									stroke-miterlimit: 10;
								}

								.st1 {
									fill: #FFFFFF;
								}
							</style>
							<g>
								<image class="bg-flick" style="overflow:visible; position: relative; z-index: 0;" width="596" height="570" xlink:href="<?php echo Q_IMG_DIR; ?>/pictures/headbg.png" transform="matrix(1 0 0 1 250.516 26.3118)">
							</image>
								<image style="overflow:visible;" width="596" height="570" xlink:href="<?php echo Q_IMG_DIR; ?>/pictures/head.png" transform="matrix(1 0 0 1 250.516 26.3118)">
								</image>
								
								<polyline class="st0" points="711.468,148.935 740.599,239.823 711,351.157 629.934,396.231 	" />
								<line class="st0" x1="580.333" y1="259.49" x2="684.685" y2="365.789" />
								<line class="st0" x1="658.958" y1="466.282" x2="684.685" y2="365.789" />
								<line class="st0" x1="740.599" y1="239.823" x2="876.708" y2="239.823" />
								<polyline class="st0" points="563.208,52.032 705.333,48.157 737.583,100.907 672.333,220.907 	" />
								<polyline class="st0" points="440,155.823 511.667,0.657 737.583,100.907 	" />
								<polyline class="st0" points="408.41,229.339 360.667,111.49 480.531,68.069 	" />
								<polyline class="st0 stw" points="410.333,173.823 6.333,122.157 425.667,109.157 	" />
								<polyline class="st0" points="453.333,495.407 443.083,400.157 410.833,367.657 	" />
								<path class="st1" d="M14.865,99.616c0.002-0.036,0.01-0.07,0.01-0.107c0-0.037-0.008-0.071-0.01-0.107l8.043-3.873l2.04,8.943
								l-10.082-4.855L14.865,99.616z M3.758,95.529l8.043,3.873c-0.002,0.036-0.01,0.07-0.01,0.107c0,0.037,0.008,0.071,0.01,0.107
								l-10.083,4.856C1.718,104.472,3.758,95.529,3.758,95.529z M26.318,105.369l-2.46-10.788c-0.071-0.307-0.378-0.497-0.684-0.426
								c-0.04,0.009-0.079,0.023-0.117,0.041l-8.684,4.181c-0.283-0.263-0.654-0.409-1.04-0.41c-0.403,0-0.766,0.158-1.041,0.41
								l-8.682-4.18c-0.284-0.135-0.624-0.015-0.76,0.269c-0.017,0.037-0.031,0.075-0.04,0.115l-2.464,10.788
								c-0.069,0.307,0.125,0.612,0.432,0.68c0.124,0.028,0.254,0.013,0.369-0.041l11.144-5.367c0.275,0.252,0.638,0.41,1.041,0.41
								c0.386,0,0.758-0.147,1.041-0.41l11.145,5.367c0.197,0.094,0.429,0.067,0.6-0.068C26.289,105.804,26.367,105.582,26.318,105.369
								L26.318,105.369z" />
								<circle class="st1" cx="6.833" cy="122.323" r="6.833" />
								<circle class="st1" cx="360.667" cy="110.657" r="6.833" />
								<circle class="st1" cx="735" cy="101.907" r="6.833" />
								<circle class="st1" cx="411.182" cy="367.657" r="4.266" />
								<circle class="st1" cx="580.174" cy="259.328" r="4.266" />
								<circle class="st1" cx="876.708" cy="239.823" r="4.266" />
								<path class="st1" d="M754.655,105.818l9.179-4.42l9.179,4.42H754.655L754.655,105.818z M775.537,105.87l-10.495-5.054l7.034-3.387
								c0.253,0.233,0.589,0.38,0.96,0.38c0.786,0.001,1.424-0.637,1.425-1.423c0.001-0.786-0.637-1.424-1.423-1.425
								s-1.424,0.637-1.425,1.423c0,0,0,0.001,0,0.001c0,0.033,0.007,0.065,0.01,0.098l-7.79,3.751l-8.057-3.88
								c-0.008-0.786-0.652-1.416-1.438-1.408c-0.786,0.008-1.416,0.652-1.407,1.438c0,0.787,0.638,1.425,1.424,1.425
								c0.418,0,0.79-0.183,1.05-0.47l7.22,3.477l-10.493,5.054c-0.261,0.127-0.369,0.441-0.242,0.702c0.087,0.18,0.269,0.294,0.469,0.295
								h22.952c0.289,0.001,0.525-0.233,0.526-0.522C775.837,106.142,775.721,105.957,775.537,105.87L775.537,105.87z" />
								<path class="st1" d="M872.703,224.811l-6.37-7.988h12.74C879.073,216.823,872.703,224.811,872.703,224.811z M880.957,215.916
								c-0.106-0.219-0.327-0.358-0.57-0.358h-15.064l-8.4-10.534c0.144-0.251,0.233-0.538,0.233-0.848c0-0.949-0.769-1.718-1.718-1.718
								c-0.949,0-1.718,0.769-1.718,1.718s0.769,1.718,1.718,1.718c0.173,0,0.338-0.033,0.496-0.082l7.77,9.746h-9.412
								c-0.345-0.883-1.341-1.318-2.223-0.973c-0.66,0.258-1.093,0.896-1.091,1.605c-0.347,0.882,0.087,1.878,0.969,2.225
								c0.882,0.347,1.878-0.087,2.225-0.969c0.078-0.198,0.118-0.41,0.119-0.623h10.424l7.494,9.397c0.219,0.273,0.618,0.317,0.891,0.098
								c0.036-0.029,0.069-0.062,0.098-0.098l7.684-9.635c0.15-0.19,0.18-0.45,0.075-0.67V215.916z" />
							</g>
						</svg>
						<svg class="smallscreen" version="1.1" x="0px" y="0px" viewBox="200 0 681.019 596.312" style="enable-background:new 0 0 881.019 596.312;" xml:space="preserve">
							<style type="text/css">
								.st0 {
									fill: none;
									stroke: rgba(255, 255, 255, 0.23);
									stroke-miterlimit: 10;
								}

								.st1 {
									fill: #FFFFFF;
								}
							</style>
							<g>
									<image class="bg-flick" style="overflow:visible; position: relative; z-index: 0;" width="596" height="570" xlink:href="<?php echo Q_IMG_DIR; ?>/pictures/headbg.png" transform="matrix(1 0 0 1 250.516 26.3118)">
									</image>
								<image style="overflow:visible;" width="596" height="570" xlink:href="<?php echo Q_IMG_DIR; ?>/pictures/head.png" transform="matrix(1 0 0 1 250.516 26.3118)">
								</image>
								<polyline class="st0" points="711.468,148.935 740.599,239.823 711,351.157 629.934,396.231 	" />
								<line class="st0" x1="580.333" y1="259.49" x2="684.685" y2="365.789" />
								<line class="st0" x1="658.958" y1="466.282" x2="684.685" y2="365.789" />
								<line class="st0" x1="740.599" y1="239.823" x2="820" y2="239.823" />
								<polyline class="st0" points="563.208,52.032 705.333,48.157 737.583,100.907 672.333,220.907 	" />
								<polyline class="st0" points="440,155.823 511.667,0.657 737.583,100.907 	" />
								<polyline class="st0" points="408.41,229.339 360.667,111.49 480.531,68.069 	" />
								<polyline class="st0 stw" points="410.333,173.823 220.333,122.157 425.667,109.157 	" />
								<polyline class="st0" points="453.333,495.407 443.083,400.157 410.833,367.657 	" />
								<path class="st1 st2" d="M14.865,99.616c0.002-0.036,0.01-0.07,0.01-0.107c0-0.037-0.008-0.071-0.01-0.107l8.043-3.873l2.04,8.943
								l-10.082-4.855L14.865,99.616z M3.758,95.529l8.043,3.873c-0.002,0.036-0.01,0.07-0.01,0.107c0,0.037,0.008,0.071,0.01,0.107
								l-10.083,4.856C1.718,104.472,3.758,95.529,3.758,95.529z M26.318,105.369l-2.46-10.788c-0.071-0.307-0.378-0.497-0.684-0.426
								c-0.04,0.009-0.079,0.023-0.117,0.041l-8.684,4.181c-0.283-0.263-0.654-0.409-1.04-0.41c-0.403,0-0.766,0.158-1.041,0.41
								l-8.682-4.18c-0.284-0.135-0.624-0.015-0.76,0.269c-0.017,0.037-0.031,0.075-0.04,0.115l-2.464,10.788
								c-0.069,0.307,0.125,0.612,0.432,0.68c0.124,0.028,0.254,0.013,0.369-0.041l11.144-5.367c0.275,0.252,0.638,0.41,1.041,0.41
								c0.386,0,0.758-0.147,1.041-0.41l11.145,5.367c0.197,0.094,0.429,0.067,0.6-0.068C26.289,105.804,26.367,105.582,26.318,105.369
								L26.318,105.369z" transform='translate(210 0)'/>
								<circle class="st1" cx="220.833" cy="122.323" r="6.833" />
								<circle class="st1" cx="360.667" cy="110.657" r="6.833" />
								<circle class="st1" cx="735" cy="101.907" r="6.833" />
								<circle class="st1" cx="411.182" cy="367.657" r="4.266" />
								<circle class="st1" cx="580.174" cy="259.328" r="4.266" />
								<circle class="st1" cx="820" cy="239.823" r="4.266" />
								<path class="st1" d="M754.655,105.818l9.179-4.42l9.179,4.42H754.655L754.655,105.818z M775.537,105.87l-10.495-5.054l7.034-3.387
								c0.253,0.233,0.589,0.38,0.96,0.38c0.786,0.001,1.424-0.637,1.425-1.423c0.001-0.786-0.637-1.424-1.423-1.425
								s-1.424,0.637-1.425,1.423c0,0,0,0.001,0,0.001c0,0.033,0.007,0.065,0.01,0.098l-7.79,3.751l-8.057-3.88
								c-0.008-0.786-0.652-1.416-1.438-1.408c-0.786,0.008-1.416,0.652-1.407,1.438c0,0.787,0.638,1.425,1.424,1.425
								c0.418,0,0.79-0.183,1.05-0.47l7.22,3.477l-10.493,5.054c-0.261,0.127-0.369,0.441-0.242,0.702c0.087,0.18,0.269,0.294,0.469,0.295
								h22.952c0.289,0.001,0.525-0.233,0.526-0.522C775.837,106.142,775.721,105.957,775.537,105.87L775.537,105.87z" />
								<path class="st1" d="M872.703,224.811l-6.37-7.988h12.74C879.073,216.823,872.703,224.811,872.703,224.811z M880.957,215.916
								c-0.106-0.219-0.327-0.358-0.57-0.358h-15.064l-8.4-10.534c0.144-0.251,0.233-0.538,0.233-0.848c0-0.949-0.769-1.718-1.718-1.718
								c-0.949,0-1.718,0.769-1.718,1.718s0.769,1.718,1.718,1.718c0.173,0,0.338-0.033,0.496-0.082l7.77,9.746h-9.412
								c-0.345-0.883-1.341-1.318-2.223-0.973c-0.66,0.258-1.093,0.896-1.091,1.605c-0.347,0.882,0.087,1.878,0.969,2.225
								c0.882,0.347,1.878-0.087,2.225-0.969c0.078-0.198,0.118-0.41,0.119-0.623h10.424l7.494,9.397c0.219,0.273,0.618,0.317,0.891,0.098
								c0.036-0.029,0.069-0.062,0.098-0.098l7.684-9.635c0.15-0.19,0.18-0.45,0.075-0.67V215.916z" transform="translate(-40 0)"/>
							</g>
						</svg>
						<!-- End Head SVG  -->
						<!--  Head discription  -->
					</div>
					<div class="left-head-discription">
						<span>Мы</span>
						<div>
							<img class="img-responsive" src="<?php echo Q_IMG_DIR; ?>/icons/symbol.svg" alt="">
						</div>
						<p>залезли в голову
							<br>вашим клиентам!</p>
					</div>
					<div class="right-head-discription">
						<span>и</span>
						<p>
							<span class="bull">&bull;</span> c научной точностью
							<br> знаем, что думают о вашем продукте, рекламе, упаковке
							<br> тысячи людей.
						</p>
					</div>
				</div>

			<!-- Separator  -->
			<div class="separator">
					<div class="questions-separator left">
					</div>
					<img class="question-arrow" src="<?php echo Q_IMG_DIR; ?>/icons/separator.svg" alt="">
					<div class="questions-separator rigth">
					</div>
				</div>
			</header>
			<!-- Questions -->
			<div class="questions-content">
				<div class="question-circle">?</div>
				<div class="questions">
					<div class="question-container box">
						<div class="question-wrapper">
							<img class="wow fadeIn" src="<?php echo Q_IMG_DIR; ?>/icons/box.svg" alt="">
							<p class="wow fadeIn" data-wow-delay="0.5s">Как сравнить продукт
								<br>с конкурентами и сделать лучше?</p>
						</div>
					</div>
					<div class="question-container human">
						<div class="question-wrapper">
							<img class="wow fadeIn" data-wow-delay="0.5s" src="<?php echo Q_IMG_DIR; ?>/icons/human.svg" alt="">
							<p class="wow fadeIn" data-wow-delay="1s">Соответствует ли реклама моей ЦА?</p>
						</div>
					</div>
					<div class="question-container lightning">
						<div class="question-wrapper">
							<img class="wow fadeIn" data-wow-delay="0.5s" src="<?php echo Q_IMG_DIR; ?>/icons/lightning.svg" alt="">
							<p class="wow fadeIn" data-wow-delay="1s">Какие чувства вызывает
								<br>у потребителя моя реклама?</p>
						</div>
					</div>
					<div class="question-container heart">
						<div class="question-wrapper">
							<img class="wow fadeIn" data-wow-delay="0.5s" src="<?php echo Q_IMG_DIR; ?>/icons/heart.svg" alt="">
							<p class="wow fadeIn" data-wow-delay="1s">Нравится ли мой продукт потребителю?</p>
						</div>
					</div>
					<div class="question-container cube">
						<div class="question-wrapper">
							<img class="wow fadeIn" data-wow-delay="0.5s" src="<?php echo Q_IMG_DIR; ?>/icons/cube.svg" alt="">
							<p class="wow fadeIn" data-wow-delay="1s">Запомнил ли мой
								<br>логотип потребитель?</p>
						</div>
					</div>
				</div>
				<div class="btn-create-big">
					<a href="http://survey.neurolytix.ai/">
						<span>Создать исследование</span>
						<img class="btn-big" src="<?php echo Q_IMG_DIR; ?>/buttons/btn.svg" alt="">
						<img class="about-btn-hover" src="<?php echo Q_IMG_DIR; ?>/buttons/about_btn_create_hover.svg" alt="">
					</a>
				</div>
			</div>
		</div>
		<div id="service-anchor" class="shapes-background-top" style="margin-top: 50px;">
			<img src="<?php echo Q_IMG_DIR; ?>/backgronds/about-top.svg" alt="">
		</div>
	</section>
	<!-- About section -->
	<section>
		<div class="about-wrapper">
			<div class="wrapper">
				<div class="about-service">
					<h1 class="wow fadeInDown">О сервисе</h1>
					<div class="about-discription">
						<div class="discription wow fadeInUp" data-wow-delay="0">
							<p>Мы помогаем маркетологам создавать качественный продукт, бренд, рекламный контент проще, быстрее и дешевле, используя
								передовые технологии.
							</p>
						</div>
						<div class="discription wow fadeInUp" data-wow-delay="0.5s">
							<h2>Neurolyti<span>&bull;</span>x</h2>
							<p>– это автоматизированный сервис для проведения нейромаркетинговых исследований с многотысячной аудиторией респондентов
								по всей России. Сервис для изучения потребителя и его реакций на ваш рекламный контент путем прямого измерения мозговых
								процессов. Это позволяет определить истинное отношение человека к контенту исследования.
							</p>
						</div>
						<div class="discription wow fadeInUp" data-wow-delay="1s">
							<h2>Нейромаркетинг</h2>
							<p> помогает выявить то, что не могут традиционные маркетинговые исследования, – обратиться к подсознанию потребителя,
								выявить его истинные бессознательные реакции, драйверы и барьеры восприятия.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Research section -->
	<section>
		<div class="shapes-background-bottom">
			<img src="<?php echo Q_IMG_DIR; ?>/backgronds/about-bottom.svg" alt="" class="img-responsive" style="margin-bottom: 50px;">
		</div>
	
		<div id="research-anchor"></div>
		<div class="wrapper">
			<h1 class="h1-white">Исследования</h1>
			<div class="research-content">
				<div class="research-discription">
					<p>Платформа Neurolyti•x предназначена для тестирования любого мултимедийного контента</p>
					<p>Выпуская в свет новый продукт, рекламный ролик или бренд маркетолог должен заранее
						проверить восприятие целевой аудиторией. Не надейтесь на удачу, знайте точно!
					</p>
				</div>
				<div class="research-lists">
					<div class="research-list-content">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/mountin.svg" alt="Рекламные материалы">
						<h2 class="h2-white">Рекламные материалы</h2>
						<ul>
							<li>
								<span>•</span> Видео</li>
							<li>
								<span>•</span> Аудио</li>
							<li>
								<span>•</span> Анимация</li>
							<li>
								<span>•</span> Изображение</li>
							<li>
								<span>•</span> Текстовое сообщение</li>
							<li>
								<span>•</span> Сайт</li>
							<li>
								<span>•</span> Приложение</li>
							<li>
								<span>•</span> Компьютерная игра</li>
						</ul>
					</div>
					<div class="research-list-content">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/box.svg" alt="Упаковка и продукт">
						<h2 class="h2-white">Упаковка и продукт</h2>
						<ul>
							<li>
								<span>•</span> Упаковка</li>
							<li>
								<span>•</span> Цена</li>
							<li>
								<span>•</span> Качество продукта</li>
						</ul>
					</div>
				</div>
				<div class="research-lists">
					<div class="research-list-content">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/heart.svg" alt="Здоровье бренда">
						<h2 class="h2-white">Здоровье бренда</h2>
						<ul>
							<li>
								<span>•</span> Знание</li>
							<li>
								<span>•</span> Восприятие</li>
							<li>
								<span>•</span> Лояльность</li>
							<li>
								<span>•</span> Соответствие позиционированию</li>
						</ul>
					</div>
					<div class="research-list-content">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/star.svg" alt="ТВ-материалы">
						<h2 class="h2-white">ТВ-материалы</h2>
						<ul>
							<li>
								<span>•</span> Ведущий</li>
							<li>
								<span>•</span> Программа / Шоу</li>
							<li>
								<span>•</span> Сериалы / Фильмы</li>
							<li>
								<span>•</span> Трейлер / Анонс</li>
						</ul>
					</div>
				</div>
			</div>
			<hr>
			<h2 class="h2-blue change-pos">Возможность анализа бессознательных реакций</h2>
			<img class="brain" src="<?php echo Q_IMG_DIR; ?>/icons/brain.svg" alt="" style="margin-top: 40px;">
			<div class="clearfix"></div>
			<div class="reaction-content-wrapper">
				<div class="reaction-content">
					<ul>
						<li>
							<span>•</span> Долгосрочная запоминаемость</li>
						<li>
							<span>•</span> Краткосрочная запоминаемость</li>
						<li>
							<span>•</span> Привлечение внимания</li>
						<li>
							<span>•</span> Скорость считывания информации</li>
						<li>
							<span>•</span> Удержание внимания</li>
						<li>
							<span>•</span> Интерес к контенту</li>
						<li>
							<span>•</span> Желание приобрести</li>
					</ul>
				</div>
				<div class="reaction-content emotions">
					<div>
						<ul>
							<li>
								<span>•</span> Напряженность</li>
							<li>
								<span>•</span> Грусть</li>
							<li>
								<span>•</span> Страх</li>
							<li>
								<span>•</span> Отвращение</li>
							<li>
								<span>•</span> Возбуждение</li>
							<li>
								<span>•</span> Тревога</li>
							<li>
								<span>•</span> Злость</li>
						</ul>
					</div>
					<div>
						<ul>
							<li>
								<span>•</span> Счастье</li>
							<li>
								<span>•</span> Радость</li>
							<li>
								<span>•</span> Безопасность</li>
							<li>
								<span>•</span> Доверие</li>
							<li>
								<span>•</span> Либидо</li>
							<li>
								<span>•</span> Расслабленность</li>
							<li>
								<span>•</span> Материнский инстинкт</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="note">
				
				<p><span></span> Исследования могут быть разработаны под индивидуальные нужды заказчика</p>
			</div>

		</div>
		<div id="work-anchor" class="shapes-background-top" style="margin-top: 100px;">
			<img src="<?php echo Q_IMG_DIR; ?>/backgronds/how-work-top.svg" alt="">
		</div>
	</section>

	<!-- How its work -->

	<section>
		<div class="how-work-wrapper">
			<div class="wrapper">
				<h1 class="wow fadeInDown">Как это работает</h1>
				<div class="how-work">
					<div class="how-work-content work-discription wow fadeInLeft">
						<p>
							Neurolyti•x делает нейроманкетинг доступным и понятным для каждого. Для этого достаточно зайти на сайт и в течение 10 минут
							запустить исследование.

						</p>
					</div>
					<div class="how-work-content wow fadeInUp" data-wow-delay="0.1s">
						<span>1 шаг</span>
						<p>
							Создание исследования и настройка целевой аудитории на нашем сайте.
						</p>
					</div>
					<div class="how-work-content wow fadeInUp" data-wow-delay="0.3s">
						<span>2 шаг</span>
						<p>
							Исследования получают проверенные респонденты, подходящие под описание вашей целевой аудитории. Респондент, получивший исследование,
							проходит его удаленно.
						</p>
					</div>
					<div class="how-work-content wow fadeInUp" data-wow-delay="0.6s">
						<span>3 шаг</span>
						<p>
							Уникальная технология Neurolytix, основанная на фиксации идеомоторных действий, позволяет определять подсознательные механизмы
							респондентов.
						</p>
					</div>
					<div class="how-work-content wow fadeInUp" data-wow-delay="0.9s">
						<span>4 шаг</span>
						<p>
							Данные исследований обрабатываются, и из них формируется отчет, который легко конфигурируется под ваши цели исследования.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Technology section -->
	<section>
		<div class="shapes-background-bottom">
			<img src="<?php echo Q_IMG_DIR; ?>/backgronds/how-work-bottom.svg" alt="" style="margin-bottom: 40px;">
		</div>
		<div class="wrapper">
			<h1 class="h1-white">Технологии</h1>
			<div class="technology-content-top">
				<div class="technology-discription">
					Будущее маркетинга – это нейромаркетинг. Технологии Neurolyti•x – это cинергия 3 наук:
				</div>
				<div class="technology-neuro">
					<div class="neuro-content">
						<span>1</span>
						<h2 class="h2-white">Нейропсихология</h2>
					</div>
					<div class="neuro-content">
						<span>2</span>
						<h2 class="h2-white">Нейробиология</h2>
					</div>
					<div class="neuro-content">
						<span>3</span>
						<h2 class="h2-white">Маркетинг</h2>
					</div>
					<div class="neuro-content">
						<p>Мы разработали, протестировали и запантентовали собственные уникальные разработки и гаджеты для проведения нейромаркетинговых
							исследований.
						</p>
					</div>
				</div>
			</div>
			<hr>
			<div class="technology-content-bottom">
				<div>
					<h3>Фиксация идеомоторики</h3>
					<p>Исследование, которое проводится с использованием стандартного мобильного гаджета (планшета, смартфона), на котором
						установлено запатентованное программное обеспечение. Каждый участник исследования оценивает нормативный набор эмоциональных
						стимулов и элементов рекламного сообщения (фрагменты, кадры, сцены), на завершающей стадии осуществляет самооценку
						влияния на него исследуемой рекламы по специальному алгоритму. </p>
				</div>
				<div>
					<h3>Мобильная ЭЭГ</h3>
					<p>Это портативный усилитель биопотенциалов в виде нейрогарнитуры, которая размещается на голове обследуемого. При просмотре
						респондентом рекламных материалов регистрируются биоэлектрическая активность головного мозга.
						<br>
						<br> Автоматизированный анализ активности различных зон мозга показывает степень и направление непроизвольного эмоционального
						реагирования, связанного с предъявляемыми материалами.</p>
				</div>
				<div>
					<h3>Психологическая сегментация</h3>
					<p>Веб-сервис позволяет учитывать психологические характеристики аудитории с целью  организации специализированных 
						опросов маркетингового направления с учетом этих характеристик.</p>
				</div>
			</div>
			<!-- Advantage -->
			<h1 class="h1-white">Преимущества</h1>
			<div class="advantage">
				<div class="advantage-content">
					<img src="<?php echo Q_IMG_DIR; ?>/icons/clock.svg" alt="">
					<p>Возможность быстрого
						<br> проведения исследования</p>
				</div>
				<div class="advantage-content">
					<img src="<?php echo Q_IMG_DIR; ?>/icons/dollar.svg" alt="">
					<p>Стоимость
						<br> исследования</p>
				</div>
				<div class="advantage-content">
					<img src="<?php echo Q_IMG_DIR; ?>/icons/human.svg" alt="">
					<p>Большая
						<br> база респондентов</p>
				</div>
				<div class="advantage-content">
					<img src="<?php echo Q_IMG_DIR; ?>/icons/cloud.svg" alt="">
					<p>Автоматизированный
						<br> облачный сервис</p>
				</div>
				<div class="advantage-content">
					<img src="<?php echo Q_IMG_DIR; ?>/icons/schedule.svg" alt="">
					<p>Объективные
						<br> показатели исследования</p>
				</div>
				<div class="advantage-content">
					<img src="<?php echo Q_IMG_DIR; ?>/icons/fork.svg" alt="">
					<p>Распределенная
						<br> структура</p>
				</div>
			</div>
		</div>
		<div class="shapes-background-top" style="margin-top: 100px;">
			<img src="<?php echo Q_IMG_DIR; ?>/backgronds/how-work-top.svg" alt="">
		</div>
	</section>
	<!-- Team section -->
	<section>
		<div class="team-wrapper">
		<div id="team-anchor"></div>
			<div class="team-content">
				<h1 class="wow fadeInDown">Команда</h1>
				<div class="team">
					<div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/weider-ico.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0">Василий Карагезов</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0">Бизнес</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.1s">CEO, главный вдохновитель и инвестор проекта.</p>
					</div>
					<div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/mol.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0.1s">Александр Игумнов</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0.2s">Разработка</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.3s">Более 12 лет опыта работы в области разработки программного обеспечения, степень в области математики, основатель и
							руководитель цифровой производственной компании.</p>
					</div>
					<!--div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/shturmovik-ico.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0.2s">Анатолий Григорьев</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0.4s">Ментор</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.5s">Вице-президент Российской академии наук.</p>
					</div-->
					<div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/shturmovik-ico.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0.2s">Игорь Сенько</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0.4s">IT-инженерия</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.5s">Pазработка аппаратно-программных систем мониторинга и анализа  физиологических показателей, организация удаленных WEB сервисов.</p>
					</div>
					<div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/grivus-png.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0">Павел Гусев</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0">Маркетинг</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.1s">10-летний опыт работы в области цифрового маркетинга, руководитель отдела цифровых технологий, основатель Marvelous
							Agency.
						</p>
					</div>
					<div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/c3p0.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0.1s">Алексей Иванов</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0.2s">Научная работа</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.3s">Психофизиолог, к.м.н.  Многолетний опыт исследований и разработок в области психофизиологической диагностики и коррекции, изучению взаимодействия сознательных и неосознаваемых психических процессов.</p>
					</div>
					<div class="team-member">
						<img src="<?php echo Q_IMG_DIR; ?>/team/r2d2-ico.png" alt="" class="ico-member wow fadeIn" data-wow-delay="0.2s">
						<p class="name wow fadeInRight" data-wow-delay="0.2s">Сергей Квасовец</p>
						<p class="member-function wow fadeInUp" data-wow-delay="0.4s">Научная работа</p>
						<p class="function-discription wow fadeInUp" data-wow-delay="0.5s">Российский психолог, нейропсихолог, к.пс.н.  Многолетний опыт создания  методов автоматизированной оценки и анализа психофизиологических показателей, системного анализа мозговых механизмов.</p>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Contacts section -->
	<section>
		<div id="contacts-anchor"></div>
		<div class="contacts-wrapper">
			<div class="contacts-background">
				<img class="img-responsive" src="<?php echo Q_IMG_DIR; ?>/backgronds/contacrs-background.svg" alt="">
			</div>
			<div class="contacts-content">
				<h1>Контакты</h1>
				<div class="contacts">
					<div class="phone-num">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/phone.svg" alt="">
						<a onclick="javascript:window.open('tel:+7-499-123-17-26', 'tel'); event.preventDefault()" href="tel:+7-499-123-17-26" class="mob-phone"><span>+7 499 123-17-26</span></a>
					</div>
					<div class="mail-adr">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/mail.svg" alt="">
						<a onclick="javascript:window.open('mailto:info@Neurolytix.ru', 'mail');event.preventDefault()" href="mailto:info@Neurolytix.ru"><span>info@neurolytix.ru</span></a> 
					</div>
					<div class="company-adr">
						<img src="<?php echo Q_IMG_DIR; ?>/icons/adr.svg" alt="">
						<span><span class="russia">Россия, </span>Москва,
							<br> Тверская-Ямская, 12</span>
					</div>
				</div>

				<form id="contact-form">
					
					<div class="form-wrapper">
						<div class="text-form">
							<textarea id="message" name="message" class="text-input input-border" placeholder="Введите текст сообщения"></textarea>
						</div>
						<div class="contacts-form">
							<div class="input-block">
								<label class="input-label" for="name">Имя</label>
								<input id="name" name="name" class="input-border" type="text" required>
							</div>
							<div class="input-block">
								<label class="input-label" for="mail">Эл. почта</label>
								<input id="mail" name="mail" class="input-border" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
							</div>
							<button id="contact-btn" type="submit" form="contact-form">Отправить</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<section>

		<div class="social-wrapper">
			<div class="social">
				<a class="facebook" href="#">
					<img src="<?php echo Q_IMG_DIR; ?>/social/f.svg" alt="facebook">
					<span>Facebook</span>
				</a>
			</div>
			<div class="social">
				<a class="twitter" href="#">
					<img src="<?php echo Q_IMG_DIR; ?>/social/t.svg" alt="twitter">
					<span>Twitter</span>
				</a>
			</div>
			<div class="social">
				<a class="instagram" href="#">
					<img src="<?php echo Q_IMG_DIR; ?>/social/i.svg" alt="instagram">
					<span>Instagram</span>
				</a>
			</div>
		</div>
		<div class="wrapper">
			<div class="footer-info">
				<div class="ur-info">Юридическая информация</div>
				<div class="info-discription">We use performance and tracking cookies to further improve our website in order to always provide you with the best possible
					online experience tailored to your needs. We never store any personal data which might identify you personally (such
					as your IP address) or as a client of UBS.</div>
			</div>
		</div>
	</section>
	
    <?php
        wp_footer();
    ?>
</body>

</html>
