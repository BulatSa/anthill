<?php include('header.php'); ?>

<div class="header-sec">
	<div class="container">
		<div class="header">
			<div class="header__logo">
				<img src="img/logo-top.svg" alt="">
			</div>
			<div class="header__date">
				<span>25</span>
				<b>Октября в 19:00</b>
				<p>Длительность 1 час</p>
			</div>
			<div class="header__info">
				<span>Бесплатный вебинар </span>
				<p>Для стартапов и инвесторов</p>
			</div>
			<div class="header__soc">
				<a href="#" class="header__soc-viber" target="_blank">
					<img src="img/header/icon-viber.svg" alt="">
				</a>
				<a href="#" class="header__soc-whats" target="_blank">
					<img src="img/header/icon-whats.svg" alt="">
				</a>
				<a href="#" class="header__soc-tele" target="_blank">
					<img src="img/header/icon-tele.svg" alt="">
				</a>
			</div>
			<div class="header__contact">
				<a href="#" class="btn btn--white btn--mini fancy" data-src="#modal-call">Перезвоним</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<form class="ajax-form">
		<label>
			<i class="i-input-name"></i>
			<input type="text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя" class="input-text" >
		</label>
		<label>
			<i class="i-input-mail"></i>
			<input type="email" name="user_email" placeholder="Введите e-mail*" data-label="Email" class="input-text" data-req="true">
		</label>
		<label>
			<i class="i-input-phone"></i>
			<input type="tel" name="user_tel" placeholder="Введите телефон*" data-label="Телефон"  class="input-text" data-req="true">
		</label>
		<input type="hidden" value="Новая заявка" name="form_subject">
		<button type="submit" class="btn">Бесплатная регистрация <i class="i-checked"></i></button>
		<label class="style-checkbox">
			<input type="checkbox" name="user_policy" data-label="Согласен с условиями" value="yes" data-req="true" checked="">
			<span>Даю согласие на обработку персональных данных, рассылку рекламных материалов и согласен с&nbsp;<a href="#">условиями политики конфиденциальности</a></span>
		</label>
	</form>

</div>


<div class="footer-sec">
	<div class="container">
		<div class="footer">
			<div class="row">
				<div class="grid-4">
					<div class="footer__info">
						<p>
							Организатор мероприятий: ООО «АНТХИЛЛ» / LLC «ANTHILL» <br>
							Фактический адрес: 420015, РФ, РТ, г. Казань, ул. Малая Красная, д. 3, пом. 11 <br>
							ИНН: 1655406483, КПП: 165501001 <br>
							ОГРН: 1181690070055 <br>
							e-mail: <a href="mailto:info@anthill.info">info@anthill.info</a>
						</p>
					</div>
				</div>
				<div class="grid-4">
					<div class="footer__info">
						<p>
							Техническая поддержка и служба заботы о клиентах: <br>
							Бесплатный телефон для России <a href="tel:8 (800) 707-06-34">8 (800) 707-06-34</a><br>
							Москва <a href="tel:+7 (499) 288-01-63">+7 (499) 288-01-63</a><br>
							Санкт-Петербург <a href="tel:+7 (812) 317-55-43">+7 (812) 317-55-43</a><br>
							Казань <a href="tel:+7 (843) 203-95-53">+7 (843) 203-95-53</a>
						</p>
					</div>
				</div>
				<div class="grid-4">
					<div class="footer__info">
						<p>
							Не является публичной офертой. Окончательное предложение каждый клиент получает в индивидуальном порядке.<br>
							<a href="#" target="_blank">Политика конфиденциальности, обработка персональных данных, согласие на получение рекламных материалов</a>
						</p>
					</div>
				</div>
			</div>

			<div class="row row--center">
				<div class="grid-4">
					<div class="footer__copy">
						<p>Все права защищены, 2018. ООО «АНТХИЛЛ» </p>
					</div>
				</div>
				<div class="grid-4">
					<div class="footer__soc">
						<a href="#"><i class="i-soc-vk"></i></a>
						<a href="#"><i class="i-soc-fb"></i></a>
						<a href="#"><i class="i-soc-insta"></i></a>
						<a href="#"><i class="i-soc-twi"></i></a>
					</div>
				</div>
				<div class="grid-4">
					<div class="footer__dev">
						<a href="https://penbrain.ru/" target="_blank">Разработано в <span>Pen&Brain</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>
