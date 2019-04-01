<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maximus
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section class="consultation">
        <h2 class="consultation__title">
          Как проходит
          <span class="consultation__title turquoise">консультация</span>
          в&nbsp;<span class="turquoise">нашей клинике</span>
        </h2>
        <ul class="consultation__list">
          <li class="consultation__item">
            <p class="consultation__text">Выявление показаний&nbsp;и противопоказаний</p>
          </li>
          <li class="consultation__item">
            <p class="onsultation__text">Анализ индивидуальных особенностей непроизвольной мимики во время консультации</p>
          </li>
          <li class="consultation__item">
            <p class="consultation__text">Осмотр, проведение мимических проб</p>
          </li>
          <li class="consultation__item">
            <p class="consultation__text">Определение мимических паттернов всех эстетических зон, составление мимической карты пациента</p>
          </li>
          <li class="consultation__item">
            <p class="consultation__text">Оценка анатомических особенностей мимических мышц-мишеней</p>
          </li>
          <li class="consultation__item">
            <p class="consultation__text">Инъекции в соответствии с&nbsp;индивидуальной схемой инъекций</p>
          </li>
          <li class="consultation__item">
            <p class="consultation__text">Работа в концепции Full face — со&nbsp;всеми областями лица и шеи</p>
          </li>
        </ul>
        <div class ="consultation__appointment appointment">
          <form id="appointment-form" action="" class="appointment__form">
            <input type="text" class="appointment__input">
            <input type="text" class="appointment__input">
            <input id="appointment-agree" type="checkbox" class="appointment__input consultation__input--agree">
            <label for="appointment-agree" class="appointment__label">
            Согласие с условиями <a href="#">Политики конфиденциальности</a>
            </label>
          </form>
          <button class="appointment__button button" form="appointment-form">Записаться</button>
        </div>
      </section>
      <section class="medicine">
        <h2 class="medicine__title">
          Используем <span class="turquoise">только сертифицированный</span> нейропротеин
        </h2>
        <ul class="medicine__list">
          <li class="medicine__item product">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/botoks.png" alt="" class="product__img">
            <div class="product__info">
              <h3 class="product__title">Ботокс</h3>
              <p class="product__manufacturer">Страна производитель — США</p>
              <p class="product__price">Стоимость одной единицы — 450 руб. *</p>
            </div>
            <button class="product_calculate button">Рассчитать стоимость омоложения</button>
          </li>
          <li class="medicine__item product">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/dysport.png" alt="" class="product__img product__img--dysport">
            <div class="product__info">
              <h3 class="product__title">Диспорт</h3>
              <p class="product__manufacturer">Страна производитель — Франция</p>
              <p class="product__price">Стоимость одной единицы — 150 руб. *</p>
            </div>
            <button class="product_calculate button">Рассчитать стоимость омоложения</button>
          </li>
          <li class="medicine__item product">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/xeomin.png" alt="" class="product__img">
            <div class="product__info">
              <h3 class="product__title">Ксеомин</h3>
              <p class="product__manufacturer">Страна производитель — Германия</p>
              <p class="product__price">Стоимость одной единицы — 400 руб. *</p>
            </div>
            <button class="product_calculate button">Рассчитать стоимость омоложения</button>
          </li>
        </ul>
        <p class="medicine__note">
          * Количество единиц рассчитывается индивидуально
        </p>
      </section>
      <section class="indications">
        <h2 class="indications__title">
          Вам <span class="turquoise">поможет бутолинотерапия</span>,
          если у вас:
        </h2>
        <ul class="indications__list">
          <li class="indications__item">
            <h3 class="indications__heading">Мимические морщины лба, межбровья, улов глаз</h3>
            <p class="indications__text"></p>
          </li>
          <li class="indications__item">
            <h3 class="indications__heading">Напряжение подбородка</h3>
            <p class="indications__text"></p>
          </li>
          <li class="indications__item">
            <h3 class="indications__heading">Опущение кончика носа</h3>
            <p class="indications__text"></p>
          </li>
          <li class="indications__item">
            <h3 class="indications__heading">Кисетные» морщины верхней губы</h3>
            <p class="indications__text"></p>
          </li>
          <li class="indications__item">
            <h3 class="indications__heading">Контурация мышечных тяжей на шее</h3>
            <p class="indications__text"></p>
          </li>
          <li class="indications__item">
            <h3 class="indications__heading">Дефигурация овала лица (формирование «брылей»)</h3>
            <p class="indications__text"></p>
          </li>
          <li class="indications__item">
            <h3 class="indications__heading">Опущение уголков рта</h3>
            <p class="indications__text indications__text--closed"></p>
          </li>
          <li class="indications__item--open">
            <h3 class="indications__heading indications__heading--open">Гипергидроз</h3>
            <p class="indications__text indications__text--open">
            Повышенное или избыточное потоотделение врачи называют гипергидрозом.
            Повышенная потливость может как общей, так и локальной (гипергидроз подмышек, ладоней, стоп).
            Врачи нашей компании подберут для Вас препарат и необходимую дозировку,
            в зависимотсти от индивидуальных особенностей. Процедура занимает всего 20 минут.</p>
          </li>
        </ul>
      </section>
      <section class="appointment">
        <h2 class="appointment__title">
          Заметили у себя <span class="turquoise">признаки старения</span>?
        </h2>
        <p class="appointment__welcome">
          Записывайтесь к нам на консультацию и мы поможем Вам!
        </p>
        <form id="appointment-form" action="" class="appointment__form">
          <div class="appointment__input-wrapper">
            <input type="text" class="appointment__input" placeholder="Имя">
          </div>
          <div class="appointment__input-wrapper">
            <input type="text" class="appointment__input" placeholder="Телефон">
          </div>
          <input id="appointment-agree1" type="checkbox" class="appointment__input consultation__input--agree visually-hidden" checked>
          <label class="appointment__label" for="appointment-agree1">
          <span>Согласие с условиями <a href="#" class="appointment__link">Политики&nbsp;конфиденциальности</a></span>
          </label>
          <button class="appointment__button button" form="appointment-form">Записаться</button>
      </section>
      <section class="result">
        <h2 class="result__title">Естественный <span class="turquoise">результат и сохранение</span> индивидуальности</h2>
        <p class="result__text">Посмотрите возможности применения ботулинотерапии</p>
        <div class="slider__viewport result__slider">
          <ul class="slider__wrapper">
            <li class="slider__item result__item">
              <div id="result__container1" class="result__container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/before.jpg" alt="" class="result__img" width="300" height="300">
                <div class="resize">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/after.jpg" alt="" class="result__img" width="300" height="300">
                </div>
                <span class="handle">
                  <span class="result__marker"></span>
                </span>
              </div>
            </li>
            <li class="slider__item result__item">
              <div id="result__container2" class="result__container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/before.jpg" alt="" class="result__img" width="300" height="300">
                <div class="resize">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/after.jpg" alt="" class="result__img" width="300" height="300">
                </div>
                <span class="handle">
                  <span class="result__marker"></span>
                </span>
              </div>
            </li>
            <li class="slider__item result__item">
              <div id="result__container3" class="result__container">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/before.jpg" alt="" class="result__img" width="300" height="300">
                <div class="resize">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/img/after.jpg" alt="" class="result__img" width="300" height="300">
                </div>
                <span class="handle">
                  <span class="result__marker"></span>
                </span>
              </div>
            </li>
          </ul>
        </div>
        <div class="slider__buttons">
            <div id="prev-btn"></div>
            <div id="next-btn"></div>
        </div>
        <ul class="slider__nav-btns">
          <li class="slider__nav-btn"></li>
          <li class="slider__nav-btn"></li>
          <li class="slider__nav-btn"></li>
        </ul>
      </section>
      <section class="sharova">
        <h2 class="sharova__title">
          Шарова А.А. <span class="turquoise">
          входит в ТОП-10</span> специалистов по ботулинотерапии
          <span class="turquoise">в России</span></h2>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/sharova.png" alt="" class="sharova__img" width="253" height="367">
        <h3 class="sharova_name">Шарова Алиса Александровна:</h3>
        <ul class="sharova__list">
          <li class="sharova__archievements">
            <p class="sharova__text">
              24 года стаж врачебной практики, 12 лет работы косметологом
            </p>
          </li>
          <li class="sharova__archievements">
            <p class="sharova__text">
              член экспертногосовета компании Ipsen
            </p>
          </li>
          <li class="sharova__archievements">
            <p class="sharova__text">
              научный консультант компаний Акрихин, Gedeon Richter, Инновация и других
            </p>
          </li>
          <li class="sharova__archievements">
            <p class="sharova__text">
              автор и соавтор более 150 публикаций в различных профессиональных изданиях
            </p>
          </li>
        </ul>
        <button class="sharova__button button">Записаться на прием</button>
      </section>
      <section class="video">
        <h2 class="video__title">
        <span class="turquoise">Всё</span> о ботулинотерапии <span class="turquoise">за 4 минуты</span>
        </h2>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/video.png" alt="" class="video__img" width="300" height="200">
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
