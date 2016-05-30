<?php get_header(); ?>

<!-- content starts here -->

<div class="content">
	<div class="wrapper">
		<div class="recommended">
			<h2 class="recommended__title title_general">Рекомендуем</h2>
			<div class="line">
				<div class="long"></div>
			</div>
			<div class="wrap__item">
				<?php echo do_shortcode( '[wp_posts_carousel template="compact.css" post_types="post" all_items="10" show_only="id" exclude="" posts="" ordering="asc" categories="" relation="and" tags="" show_title="true" show_created_date="true" show_description="false" allow_shortcodes="false" show_category="true" show_tags="false" show_more_button="true" show_featured_image="true" image_source="thumbnail" image_height="100" image_width="100" items_to_show_mobiles="1" items_to_show_tablets="2" items_to_show="4" slide_by="1" margin="5" loop="true" stop_on_hover="true" auto_play="true" auto_play_timeout="1200" auto_play_speed="800" nav="true" nav_speed="800" dots="true" dots_speed="800" lazy_load="false" mouse_drag="true" mouse_wheel="true" touch_drag="true" easing="linear" auto_height="true" custom_breakpoints=""]' ); ?>
			</div><!-- wrap__item ends -->
		</div><!-- .recommended ends -->

		<div class="popular">
			<h2 class="popular__title title_general">Популярные</h2>
			<div class="line">
				<div class="short"></div>
			</div>
			<div class="wrap__item">
				<div class="item">
					<img src="<?=get_template_directory_uri()?>/images/apartment1.jpg" alt="apartment" />
					<a class="item__name" href="#">1-комнатная квартира на Кирова</a>
					<p>Район: Центральный</p>
					<p>Тип: Улучшеный</p>
					<p>Комнат: 1</p>
					<p>Спальных мест: 2+1</p>
					<div class="item__price">
						<div class="item__price__label"></div>
						<div class="item__price__number">2 300 <span>руб. / сутки</span></div>
					</div>
					<a class="item__book" href="#">забронировать</a>
				</div>

				<div class="item item2">
					<img src="<?=get_template_directory_uri()?>/images/apartment2.jpg" alt="apartment" />
					<a class="item__name" href="#">2-комнатная квартира на Кирова</a>
					<p>Район: Центральный</p>
					<p>Тип: Улучшеный</p>
					<p>Комнат: 1</p>
					<p>Спальных мест: 2+1</p>
					<div class="item__price">
						<div class="item__price__label"></div>
						<div class="item__price__number">1 700 <span>руб. / сутки</span></div>
					</div>
					<a class="item__book" href="#">забронировать</a>
				</div>

				<div class="item item3">
					<img src="<?=get_template_directory_uri()?>/images/apartment3.jpg" alt="apartment" />
					<a class="item__name" href="#">2-комнатная квартира на Кирова</a>
					<p>Район: Центральный</p>
					<p>Тип: Улучшеный</p>
					<p>Комнат: 1</p>
					<p>Спальных мест: 2+1</p>
					<div class="item__price">
						<div class="item__price__label"></div>
						<div class="item__price__number">1 300 <span>руб. / сутки</span></div>
					</div>
					<a class="item__book" href="#">забронировать</a>
				</div>

				<div class="item">
					<img src="<?=get_template_directory_uri()?>/images/apartment4.jpg" alt="apartment" />
					<a class="item__name" href="#">1-комнатная квартира на Кирова</a>
					<p>Район: Центральный</p>
					<p>Тип: Улучшеный</p>
					<p>Комнат: 1</p>
					<p>Спальных мест: 2+1</p>
					<div class="item__price">
						<div class="item__price__label"></div>
						<div class="item__price__number">1 800 <span>руб. / сутки</span></div>
					</div>
					<a class="item__book" href="#">забронировать</a>
				</div>
				<img class="item__arrow3" src="<?=get_template_directory_uri()?>/images/left_arrow.png" alt="left_arrow" />
				<img class="item__arrow4" src="<?=get_template_directory_uri()?>/images/right_arrow.png" alt="right_arrow" />
			</div><!-- wrap__item ends -->
		</div><!-- popular ends -->

		<div class="welcome">
			<h3 class="welcome__title title_general">Добро пожаловать на наш сайт!</h3>

			<img class="welcome__img" src="<?=get_template_directory_uri()?>/images/keys.jpg" alt="keys" />

			<p class="article">
				Ежегодно Республика Хакасия принимает у себя тысячи гостей, которые прибывают в столицу и другие населенные пункты по различным деловым и личным вопросам. Кто-то приезжает надолго, а кому-то нужно остановиться в г. Абакан всего на несколько дней.
			</p>

			<p class="article">
				Традиционное обращение в гостиницу или отели сегодня не единственная возможность расположиться с комфортом за доступные средства. 
			</p>

			<p class="article last_one">
				Самый оптимальный вариант размещения со всеми удобствами – аренда квартир посуточно. Это практичная услуга, используя которую можно в рамках заранее предусмотренного бюджета прожить несколько дней практически в домашней обстановке.
			</p>
		</div><!-- welcome ends -->

		<div class="who_ask">
			<h4 class="who_ask__title title_general">К кому обратиться?</h4>

			<p class="article amn">
				Лучше всего снимать квартиры посуточно в Абакане через специальные агентства, которые предоставляют свои услуги в онлайн режиме, быстро и качественно. В базе интернет портала <a class="link" href="#">mirkvartir19.ru</a>  большой выбор самых разнообразных вариантов квартир, которые можно арендовать на сутки и более, забронировать заранее или снять непосредственно по приезду в Абакан. Cотрудничество с профессиональными специалистами – это большой перечень очевидных преимуществ, которые можно оценить после первого опыта обращения в компанию.
			</p>

			<p class="article amn">
				Очень удобно и практично бронировать квартиры посуточно в Абакане заранее. Дело в том, что Республика Хакасия в определенные периоды года принимает большое количество гостей, приезжающих на различные конференции и форумы. В г. Абакан проводятся самые разнообразные выставки и спортивные состязания. Как раз в период организации различных мероприятий сдача квартиры на сутки становится особенно популярной и широко востребованной услугой, как наилучший вариант размещения в сравнении с гостиницей или отелем.
			</p>
		</div><!-- who_ask ends -->
	</div><!-- wrapper ends -->
</div>

<!-- content ends here -->

<?php get_footer(); ?>