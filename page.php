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
		<main id="main" class="site__main">
      <section class="consultation">
        <div class="consultation__wrapper">
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
              <p class="consultation__text">Анализ индивидуальных особенностей непроизвольной мимики во время консультации</p>
            </li>
            <li class="consultation__item">
              <p class="consultation__text">Осмотр, проведение мимических проб</p>
            </li>
            <li class="consultation__item">
              <p class="consultation__text">Определение мимических паттернов всех эстетических зон, составление мимической карты пациента</p>
            </li>
            <li class="consultation__item">
              <p class="consultation__text">Оценка анатомических особенностей мимических мышц&nbsp;-мишеней</p>
            </li>
            <li class="consultation__item">
              <p class="consultation__text">Инъекции в соответствии с&nbsp;индивидуальной схемой<br class="desktop-br">инъекций</p>
            </li>
            <li class="consultation__item">
              <p class="consultation__text">Работа в концепции Full face — со&nbsp;всеми областями<br class="desktop-br"> лица и шеи</p>
            </li>
          </ul>
        </div>
        <div class ="consultation__appointment appointment">
          <h2 class="appointment__title">Запишитесь <span class="turquoise">на&nbsp;консультацию</span></h2>
        <form id="appointment-form" action="" class="appointment__form">
          <div class="appointment__input-wrapper input__wrapper">
            <input type="text" class="appointment__input" placeholder="Имя">
          </div>
          <div class="appointment__input-wrapper input__wrapper">
            <input type="text" class="appointment__input" placeholder="Телефон">
          </div>
          <input id="appointment-agree1" type="checkbox" class="appointment__input consultation__input--agree visually-hidden" checked>
          <label class="appointment__label checkbox-label" for="appointment-agree1">
          <span>Согласие с условиями <a href="#" class="appointment__link">Политики&nbsp;конфиденциальности</a></span>
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
            <div class="medicine__img-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/botoks.png" alt="" class="product__img" width="130" height="151">
            </div>
            <div class="product__info">
              <h3 class="product__title">Ботокс</h3>
              <p class="product__manufacturer">Страна производитель — США</p>
              <p class="product__price">Стоимость одной единицы — 450 руб. *</p>
            </div>
            <button class="product_calculate button">Рассчитать стоимость омоложения</button>
          </li>
          <li class="medicine__item product">
            <div class="medicine__img-wrapper product__img--dysport">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/dysport.png" alt="" class="product__img" width="173" height="118">
            </div>
            <div class="product__info">
              <h3 class="product__title">Диспорт</h3>
              <p class="product__manufacturer">Страна производитель — Франция</p>
              <p class="product__price">Стоимость одной единицы — 150 руб. *</p>
            </div>
            <button class="product_calculate button">Рассчитать стоимость омоложения</button>
          </li>
          <li class="medicine__item product">
            <div class="medicine__img-wrapper">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/xeomin.png" alt="" class="product__img" width="142" height="156">
            </div>
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
        <div class="indications__wrapper">
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
            <li class="indications__item indications__item--open">
              <h3 class="indications__heading indications__heading--open">Гипергидроз</h3>
              <p class="indications__text indications__text--open">
              Повышенное или избыточное потоотделение врачи называют гипергидрозом.
              Повышенная потливость может как общей, так и локальной (гипергидроз подмышек, ладоней, стоп).
              Врачи нашей компании подберут для Вас препарат и необходимую дозировку,
              в зависимотсти от индивидуальных особенностей. Процедура занимает всего 20 минут.</p>
            </li>
          </ul>
        </div>
      </section>
     <div class="appointment-result-bg">
        <section class="appointment">
          <h2 class="appointment__title">
            Заметили у себя <span class="turquoise">признаки старения</span>?
          </h2>
          <p class="appointment__welcome">
            Записывайтесь к нам на консультацию и мы поможем Вам!
          </p>
          <form id="appointment-form" action="" class="appointment__form">
            <div class="appointment__input-wrapper input__wrapper">
              <input type="text" class="appointment__input" placeholder="Имя">
            </div>
            <div class="appointment__input-wrapper input__wrapper">
              <input type="text" class="appointment__input" placeholder="Телефон">
            </div>
            <input id="appointment-agree1" type="checkbox" class="appointment__input consultation__input--agree visually-hidden" checked>
            <label class="appointment__label checkbox-label" for="appointment-agree1">
            <span>Согласие с условиями <a href="#" class="appointment__link">Политики&nbsp;конфиденциальности</a></span>
            </label>
            <button class="appointment__button button" form="appointment-form">Записаться</button>
            </form>
        </section>
        <section class="result">
          <h2 class="result__title">Естественный <span class="turquoise">результат и сохранение</span> индивидуальности</h2>
          <p class="result__text">Посмотрите возможности применения ботулинотерапии</p>
          <div class="slider__viewport result__slider">
            <ul id="slider1" class="slider1 slider__wrapper">
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
          <div id="controls1" class="result__controls slider__controls">
            <div class="slider__buttons">
                <div class="slider__prev-btn"></div>
                <div class="slider__next-btn"></div>
            </div>
            <ul class="slider__nav-btns">
              <li class="slider__nav-btn"></li>
              <li class="slider__nav-btn"></li>
              <li class="slider__nav-btn"></li>
            </ul>
          </div>
        </section>
     </div>
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
        <picture class="video__img">
          <source media="(min-width: 1440px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/img/video_d.png 1x">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/video.png" alt="">
        </picture>
        </picture>
      </section>
      <section class="medics">
        <h2 class="medics__tittle">Наши <span class="turquoise">врачи</span></h2>
        <p class="medics__about">Средний опыт наших специалистов 10 лет</p>
        <div class="medics__slider slider__viewport result__slider">
          <ul id="slider2" class="slider2 medics__list slider__wrapper">
            <li class="medics__item slider__item">
              <div class="medics__item-wrapper">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/sharova-alisa.png" alt="" class="medics__img" width="250" height="200">
                <h3 class="medics__name">Шарова А.А.</h3>
                <p class="medics__speciality">Врач косметолог</p>
                <p class="medics__experience">Стаж 12 лет</p>
                <button class="medics__button button">Записаться на прием</button>
              </div>
            </li>
            <li class="medics__item slider__item">
              <div class="medics__item-wrapper">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/sharova-alisa.png" alt="" class="medics__img" width="250" height="200">
                <h3 class="medics__name">Шарова А.А.</h3>
                <p class="medics__speciality">Врач косметолог</p>
                <p class="medics__experience">Стаж 12 лет</p>
                <button class="medics__button button">Записаться на прием</button>
              </div>
            </li>
            <li class="medics__item slider__item">
              <div class="medics__item-wrapper">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/sharova-alisa.png" alt="" class="medics__img" width="250" height="200">
                <h3 class="medics__name">Шарова А.А.</h3>
                <p class="medics__speciality">Врач косметолог</p>
                <p class="medics__experience">Стаж 12 лет</p>
                <button class="medics__button button">Записаться на прием</button>
              </div>
            </li>
          </ul>
        </div>
        <div id="controls2" class="slider__controls medics__controls">
          <div class="slider__buttons">
              <div class="slider__prev-btn"></div>
              <div class="slider__next-btn"></div>
          </div>
          <ul class="slider__nav-btns">
            <li class="slider__nav-btn"></li>
            <li class="slider__nav-btn"></li>
            <li class="slider__nav-btn"></li>
          </ul>
        </div>
      </section>
      <section class="comments">
        <h2 class="comments__tittle">
          «ЦЭМ Чистые пруды <span class="turquoise">вернули мне молодость</span>» – Ольга, 37 лет
        </h2>
        <p class="comments__about">Посмотрите отзывы счастливых клиентов</p>
        <div class="comments__slider slider__viewport result__slider">
          <ul id="slider3" class="comments__list slider__wrapper">
            <li class="comments__item slider__item">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/olga.png" alt="" class="comments__avatar" width="100" height="100">
              <h3 class="comments__name">Ольга, 37 лет</h3>
              <p class="comments__comment">
                Сегодня 6 день, смотрю в зеркало и любуюсь, такой кожи у меня не было даже в 13 лет (сейчас мне 30). Кожа ровная, с розоватым оттенком, поры исчезают на глазах, с каждым днем. Но и это еще не всё, косметолог сказал, что эффект будет только через месяц (куда ещё лучше, не понимаю). Вывод: процедура стоит своих денег, всех этих мучений (хотя лучше делать в отпуске), если эффект продержится 2 года, буду просто счастлива.
              </p>
            </li>
            <li class="medics__item slider__item">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/olga.png" alt="" class="comments__avatar" width="100" height="100">
              <h3 class="comments__name">Ольга, 37 лет</h3>
              <p class="comments__comment">
                Сегодня 6 день, смотрю в зеркало и любуюсь, такой кожи у меня не было даже в 13 лет (сейчас мне 30). Кожа ровная, с розоватым оттенком, поры исчезают на глазах, с каждым днем. Но и это еще не всё, косметолог сказал, что эффект будет только через месяц (куда ещё лучше, не понимаю). Вывод: процедура стоит своих денег, всех этих мучений (хотя лучше делать в отпуске), если эффект продержится 2 года, буду просто счастлива.
              </p>
            </li>
            <li class="medics__item slider__item">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/olga.png" alt="" class="comments__avatar" width="100" height="100">
              <h3 class="comments__name">Ольга, 37 лет</h3>
              <p class="comments__comment">
                Сегодня 6 день, смотрю в зеркало и любуюсь, такой кожи у меня не было даже в 13 лет (сейчас мне 30). Кожа ровная, с розоватым оттенком, поры исчезают на глазах, с каждым днем. Но и это еще не всё, косметолог сказал, что эффект будет только через месяц (куда ещё лучше, не понимаю). Вывод: процедура стоит своих денег, всех этих мучений (хотя лучше делать в отпуске), если эффект продержится 2 года, буду просто счастлива.
              </p>
            </li>
          </ul>
        </div>
        <div id="controls3" class="slider__controls comments__controls">
          <div class="slider__buttons">
              <div class="slider__prev-btn"></div>
              <div class="slider__next-btn"></div>
          </div>
          <ul class="slider__nav-btns">
            <li class="slider__nav-btn"></li>
            <li class="slider__nav-btn"></li>
            <li class="slider__nav-btn"></li>
          </ul>
        </div>
      </section>
      <section class="questions">
        <h2 class="questions__title">
          Часто задаваемые <span class="turquoise">вопросы</span>
        </h2>
        <ul class="questions__list">
          <li class="questions__item questions__item--open">
            <div class="questions__head">
              <p class="questions__question">
                Начав делать инъекции нейропротеина, потом от них нельзя будет отказаться?
              </p>
              <div class="questions__marker"></div>
            </div>
            <div class="questions__text">
              <p class="questions__paragraph">Наоборот, мимический покой в течении срока действия нейропротеина приводит к постепенному разглаживанию и уменьшению выраженности уже имеющихся морщин.</p>
              <p class="questions__paragraph">Нейропротеин лишь временно снижает напряжение и сократительную способность мимческих мыщц, да и то лишь частично.
              После прекращения действия нейропротеина мышца полностью восстанавливает свою активность, причем даже при многократных и многолетних инъекциях в нее, что было показано в многочисленных исследованиях не только в косметологии, но и в неврологии.</p>
            </div>
          </li>
          <li class="questions__item">
            <div class="questions__head">
              <p class="questions__question">
                С какого возраста можно&nbsp;начинать колоть нейропротеин?
              </p>
              <div class="questions__marker"></div>
            </div>
            <p class="questions__text"></p>
          </li>
          <li class="questions__item">
            <div class="questions__head">
              <p class="questions__question">
                Может ли нейропротеин влиять на умственные способности?
              </p>
              <div class="questions__marker"></div>
            </div>
            <p class="questions__text"></p>
          </li>
          <li class="questions__item">
            <div class="questions__head">
              <p class="questions__question">
                На сколько инъекции нейропротеина опасны для&nbsp;беременных и кормящих?
              </p>
              <div class="questions__marker"></div>
            </div>
            <p class="questions__text"></p>
          </li>
          <li class="questions__item">
            <div class="questions__head">
              <p class="questions__question">
                Чем отличаются друг от&nbsp;друга разные препараты нейропротеина?
              </p>
              <div class="questions__marker"></div>
            </div>
            <p class="questions__text"></p>
          </li>
        </ul>
      </section>
      <section class="feedback">
        <form action="" class="feedback__form">
        <h2 class="feedback__title">Остались <span class="turquoise">вопросы</span>?</h2>
        <p class="feedback__about">Если у вас остались вопросы, заполните форму ниже и наш специалист свяжется с вами в ближайшее время для консультации бесплатно.</p>
        <p class="feedback__input-wrapper input__wrapper">
            <input type="text" class="feedback__input input" placeholder="Имя">
          </p>
          <p class="feedback__input-wrapper input__wrapper">
            <input type="text" class="feedback__input input" placeholder="Телефон">
          </p>
          <p class="feedback__input-wrapper input__wrapper feedback__textarea-wrapper">
            <textarea name="" id="" cols="30" rows="3" class="feedback__texarea input" placeholder="Введите ваш вопрос"></textarea>
          </p>
          <input id="feedback-agree" type="checkbox" class="feedback__agree visually-hidden" checked>
          <label for="feedback-agree" class="feedback__label checkbox-label">
            <a href="#" class="feedback__policy">
              Соглашение о политике
              конфиденциальности
            </a>
          </label>
          <button class="feedback__button button" type="submit">Оставить заявку</button>
        </form>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
