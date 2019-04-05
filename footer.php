<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maximus
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer">
    <ul class="links links1__list">
      <li class="links1__item links__item"><a href="" class="links1__link links__link">Консультация</a></li>
      <li class="links1__item links__item"><a href="" class="links1__link links__link">Препараты</a></li>
      <li class="links1__item links__item"><a href="" class="links1__link links__link">Ботулинотерапия</a></li>
      <li class="links1__item links__item"><a href="" class="links1__link links__link">Естественный результат</a></li>
      <li class="links1__item links__item"><a href="" class="links1__link links__link">Научный руководитель</a></li>
    </ul>
    <ul class="links links2__list">
      <li class="links2__item links__item"><a href="" class="links2__link links__link">Видео-обращение</a></li>
      <li class="links2__item links__item"><a href="" class="links2__link links__link">Наши врачи</a></li>
      <li class="links2__item links__item"><a href="" class="links2__link links__link ">Отзывы</a></li>
      <li class="links2__itemlinks__item"><a href="" class="links2__link links__link">Вопросы</a></li>
    </ul>
    <div class="footer__address address">
      <h3 class="address__title">Наш адрес</h3>
      <span class="address__info address__city">город Москва, </span>
      <span class="address__info address__street">ул. Макаренко, дом 3, строение 2</span>
      <span class="address__info address__metro">Метро "Чистые Пруды",</span>
      <span class="address__info address__enter">вход справа от театра "Современник"</span>
    </div>
    <div class="contacts">
      <h3 class="contacts__title">Контакты</h3>
      <ul class="contacts__list">
        <li class="contacts__item"><span class="contacts__info contacts__tel">+7 (495) 984-41-08</span></li>
        <li class="contacts__item"><span class="contacts__info contacts__email">info@chist-estetic.ru</span></li>
      </ul>
    </div>
    <div class="footer__social social">
      <h3 class="social__tittle">Мы в соцсетях</h3>
      <ul class="social__list">
        <li class="social__item">
          <a href="" class="social__link">
            <picture class="social__icon">
              <source media="(min-width: 1440px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/img/insta-w_d.png 1x">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/insta-w.png" alt="" >
            </picture>
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link">
            <picture class="social__icon">
              <source media="(min-width: 1440px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/img/vk-w_d.png 1x">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/vk-w.png" alt="" >
            </picture>
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link">
            <picture class="social__icon">
              <source media="(min-width: 1440px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/img/facebook-w_d.png 1x">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook-w.png" alt="" >
            </picture>
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link">
            <picture class="social__icon">
              <source media="(min-width: 1440px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/img/youtube-w_d.png 1x">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/youtube-w.png" alt="" >
            </picture>
          </a>
        </li>
      </ul>
    </div>
    <a href="#" class="footer__policy">Политика конфиденциальности</a>
    <p class="footer__copyright">© 2019 ЦЭМ «Чистые Пруды» Все права защищены.</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
