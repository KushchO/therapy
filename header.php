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
