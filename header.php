<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>МИРКВАРТИР19</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/style.css" />
</head>
<body>

	<!-- header starts here -->

	<div class="header">
		<div class="wrapper in_header">
			<div class="header__logo">
				<div class="wrap__logo">
					<h2 class="header__logo__title">мирквартир19</h2>
					<p class="header__logo__desc">посуточная аренда квартир</p>
				</div>
				<div class="wrap__description">
					<p class="header__logo__description">
						Посуточная аренда квартир в Абакане,
						документальное оформление аренды,
						а также дополнительные услуги
					</p>
				</div>
			</div><!-- header logo ends -->
			<div class="header__contacts">
				<div class="wrap__phone">
					<p class="header__contacts__phone">
						<span class="phone-icon"></span>
						<span class="number">8-908-326-2772</span>
					</p>
					<p class="header__contacts__phone">
						<span class="phone-icon"></span>
						<span class="number">8-(3902)-26-2772</span>
					</p>
				</div>
				<div class="wrap__callback">
					<a class="contacts__callback" href="#">
						Заказать звонок
					</a>
				</div>
			</div><!-- header__contacts ends -->
			<div class="wrap__menu">
				wp_nav_menu(array(
				  'theme_location' => 'main',
				  'container' => false,
				  'menu_id' => 'nav',
				  'depth' => 1,
				  // This one is the important part:
				  'walker' => new Custom_Walker_Nav_Menu
				));
			</div><!-- wrap__menu ends -->
				<!--
				<div class="header__form">
					<div class="header__form__ask">
						<p class="form_call">заказать обратный звонок</p>
						<a class="close_form" href="#"></a>
					</div>
					<div class="header__data">
						<label>Ваше имя:</label>
						<input type="text" />
						<label>Телефон:</label>
						<input type="text" />
						<label>Время звонка</label>
						<input type="text" placeholder="  с _ _:_ _ до _ _:_ _" />
						<a class="send_form" href="#">Отправить</a>
					</div>
				</div> -->
		</div><!-- wrapper ends -->
	</div>

	<!-- header ends here -->