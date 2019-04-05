<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maximus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site__header">
		<div class="header">
      <div class="header__modal-menu modal">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo298x75_w.png" alt="Центр эстетической медицины" class="header__logo" width="270" height="auto">
        <button class="modal__close"></button>
        <ul class="links links3__list">
          <li class="links1__item links__item"><a href="" class="links1__link links__link">Консультация</a></li>
          <li class="links1__item links__item"><a href="" class="links1__link links__link">Препараты</a></li>
          <li class="links1__item links__item"><a href="" class="links1__link links__link">Ботулинотерапия</a></li>
          <li class="links1__item links__item"><a href="" class="links1__link links__link">Естественный результат</a></li>
          <li class="links1__item links__item"><a href="" class="links1__link links__link">Научный руководитель</a></li>
          <li class="links2__item links__item"><a href="" class="links2__link links__link">Наши врачи</a></li>
          <li class="links2__item links__item"><a href="" class="links2__link links__link ">Отзывы</a></li>
        </ul>
        <div class="header__contacts contacts">
          <h3 class="contacts__title">Наши контакты</h3>
          <ul class="contacts__list">
            <li class="contacts__item"><span class="contacts__info contacts__tel">+7 (495) 984-41-08</span></li>
            <li class="contacts__item"><span class="contacts__info contacts__email">info@chist-estetic.ru</span></li>
          </ul>
        </div>
        <div class="footer__social social">
      <h3 class="social__tittle modal__social-title">Мы в соцсетях</h3>
      <ul class="social__list">
        <li class="social__item">
          <a href="" class="social__link">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/insta-w.png" alt="" class="social__icon">
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/vk-w.png" alt="" class="social__icon">
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook-w.png" alt="" class="social__icon">
          </a>
        </li>
        <li class="social__item">
          <a href="" class="social__link">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/youtube-w.png" alt="" class="social__icon">
          </a>
        </li>
      </ul>
    </div>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo298x75.png" alt="Центр эстетической медицины" class="header__logo" width="270" height="auto">
      <ul class="header__social social social__list">
        <li class="social__item"><a href="" class="social__link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/insta.png" alt="" class="social__icon"></a></li>
        <li class="social__item"><a href="" class="social__link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vk.png" alt="" class="social__icon"></a></li>
        <li class="social__item"><a href="" class="social__link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook.png" alt="" class="social__icon"></a></li>
        <li class="social__item"><a href="" class="social__link"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/youtube.png" alt="" class="social__icon"></a></li>
      </ul>
      <p class="header__address">
        <span class="header__text"><b class="header__bold">Адрес:</b> г. Москва,</span>
        <span class="header__text">ул. Макаренко, дом 3, стр 2</span>
      </p>
      <p class="header__call">
      <span class="header__text header__phone">+7 (495) 984-41-08</span>
        <span class="header__text"><a href="#" class="header__link">заказать обратный звонок</a></span>
      </p>
      <button class="header__burger"></button>
		</div><!-- .header -->
    <section class="head_features">
      <h1 class="head_features__title">Ботулинотерапия —</h1>
      <h2 class="head_features__title2">эффективное избавление от мимических морщин</h2>
      <ul class="head_features__list">
        <li class="head_features__item">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/girl.png" alt="" class="head_features__img" width="57" height="69">
          <p class="head_features__text">Эффект виден уже через&nbsp;несколько суток</p>
        </li>
        <li class="head_features__item">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/timer.png" alt="" class="head_features__img" width="59" height="58">
          <p class="head_features__text">Процедура занимает около&nbsp;20&nbsp;минут</p>
        </li>
        <li class="head_features__item">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/calendar.png" alt="" class="head_features__img" width="61" height="61">
          <p class="head_features__text">Результат сохраняется от&nbsp;3&nbsp;д&nbsp;6&nbsp;месяцев</p>
        </li>
        <li class="head_features__item">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/cosmetics.png" alt="" class="head_features__img" width="61" height="61">
          <p class="head_features__text">Возможность от ультрамягкой до жесткой коррекции</p>
        </li>
      </ul>
    </section>

	</header><!-- #masthead -->

	<div id="content" class="site__content">
