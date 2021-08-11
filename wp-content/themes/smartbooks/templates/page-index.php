<?php
/*
 * Template Name: Index
 */
get_header(); ?>

<section class="banner">
  <div class="container">
    <div class="circul circul-orange circul-0"></div>
    <div class="circul circul-blue circul-20"></div>
    <div class="circul circul-purple circul-40"></div>
    <div class="circul circul-orange circul-60"></div>
    <div class="circul circul-blue circul-80"></div>
    <div class="circul circul-purple circul-100"></div>
    <img src="<?php echo IMG; ?>/home4-slider-layer4.png" alt="" class="banner-layer__4">
    <img src="<?php echo IMG; ?>/home4-slider-layer2.png" alt="" class="banner-layer__2">
    <div class="row">
      <div class="col-md-8">
        <div class="banner-title">
          <img src="<?php echo IMG; ?>/home4-slider-layer1.png" alt="" class="banner-layer__1">
          <h1>Многоразовая тетрадь <br> "SMART BOOK"</h1>
        </div>
        <p>Учится, познавать, рисовать, развиваться - все это легко и просто с нашими фантастическими тетрадями</p>
        <p><b>Новые клиенты - получайте от нас эксклюзивные скидки!</b></p>
        <div class="banner__sales">
          <div class="banner__sales-box">
            <span class="num">-10%</span> 2 <br> книги
          </div>
          <div class="banner__sales-box">
            <span class="num">-15%</span> 3 <br> книги
          </div>
          <div class="banner__sales-box">
            <span class="num">-20%</span> 4 <br> книги
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="products" id="products">
  <div class="container">
    <div class="circul circul-orange circul-0"></div>
    <div class="circul circul-blue circul-20"></div>
    <div class="circul circul-purple circul-40"></div>
    <div class="circul circul-orange circul-60"></div>
    <div class="circul circul-blue circul-80"></div>
    <div class="circul circul-purple circul-100"></div>
    <h2 class="section-title section-title-purple">Наши&nbsp;тетради</h2>
    <?php get_template_part( 'partials/mg', 'products' ); ?>
  </div>
</section>

<section class="gallery">
  <div class="gallery-mini">
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-1.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-2.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-3.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-4.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-5.jpg" alt=""></div>
  </div>
</section>

<section class="reviews">
  <div class="container">
    <h2 class="section-title section-title-blue">Отзывы наших счастливых клиентов</h2>
    <div class="reviews-wrap">
      <div class="reviews-slider">
        <div class="reviews-item">
          <div class="reviews-text">
            Купила для Лизуни развивашки SmartBook, сделал подарок на Николаяю. В коробке с тетрадью дополнительно положили письмо деду Морозу и несколько фломастеров с затирачкой.
            <ul class="star-rating"> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> </ul>
          </div>
          <div class="reviews-info">
            <img src="<?php echo IMG; ?>/rev-1.jpg" alt="">
            <h4>Kudriashka Ksiu</h4>
            <p>SmartBook 2+ <br> SmartBook 3+</p>
          </div>
        </div>
        <div class="reviews-item">
          <div class="reviews-text">
            Приобрела тетрадь 5+ для своей доченьки, ей очень нравится. Помимо заданий так же есть игры и раскраски. Ульяха раскрашивала и разлила воду на тетрадь, вытерла салфеткой и продолжила рисовать дальше. ШИКАРНО!
            <ul class="star-rating"> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> </ul>
          </div>
          <div class="reviews-info">
            <img src="<?php echo IMG; ?>/rev-2.jpg" alt="">
            <h4>Ирина Минчева</h4>
            <p>SmartBook 5+</p>
          </div>
        </div>
        <div class="reviews-item">
          <div class="reviews-text">
            Я считаю что такая тетрадь должна быть у каждого ребенка. А еще нам в подарок прислали рисуй светом и фломастеры. Тетрадь просто не убиваемая, рисуй, рви и тд и тп ничего на нее не повлияет.
            <ul class="star-rating"> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> </ul>
          </div>
          <div class="reviews-info">
            <img src="<?php echo IMG; ?>/rev-3.jpg" alt="">
            <h4>Маша Весна</h4>
            <p>SmartBook 3+ <br> SmartBook 4+</p>
          </div>
        </div>
        <div class="reviews-item">
          <div class="reviews-text">
            Купила тетрадь в подарок своей племяннице. Она очень любит рисовать и поэтому такая тетрадь 100% ей подходит.
            <ul class="star-rating"> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> </ul>
          </div>
          <div class="reviews-info">
            <img src="<?php echo IMG; ?>/rev-4.jpg" alt="">
            <h4>Катерина Москаленко</h4>
            <p>SmartBook 2+</p>
          </div>
        </div>
        <div class="reviews-item">
          <div class="reviews-text">
            Наконец-то я нашла тетрадь, котороя содержит в себе все что нужно для развития моего сыночка!!!
            <ul class="star-rating"> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> <li class="star-f"></li> </ul>
          </div>
          <div class="reviews-info">
            <img src="<?php echo IMG; ?>/rev-5.jpg" alt="">
            <h4>Оксана</h4>
            <p>SmartBook 5+</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery">
  <div class="gallery-mini">
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-6.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-7.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-8.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-9.jpg" alt=""></div>
    <div><img class="gs-open" src="<?php echo IMG; ?>/gal-10.jpg" alt=""></div>
  </div>
</section>

<section class="options">
  <div class="container">
    <h2 class="section-title">Описание тетради SmartBook</h2>
    <div class="options-list">
      <div class="options-item options-item-orange">
        <img src="<?php echo IMG; ?>/home4-service-icon-01.png" alt="">
        <h3>Содержание</h3>
        <p>
          SmartBook предназначена для занятий с детьми в возрасте от 1-6 лет и состоит из большого количества разнообразных упражнений. <br><br>
          Задания направлены на развитие логического мышления, зрительного и слухового внимания, воображения, графомоторных навыков и умений <br><br>
          Структура пособия позволяет развивать ребенка постепенно, Осваивая сначала простые задания и поэтапно переходя к более сложному. Благодаря такому подходу малыш будет выполнять задания с энтузиазмом и радостью.
        </p>
      </div>
      <div class="options-item options-item-blue">
        <img src="<?php echo IMG; ?>/home4-service-icon-02.png" alt="">
        <h3>Функциональность</h3>
        <p>
          - Формат А4 <br><br>
          - Разноцветные рисунки <br><br>
          - Современные иллюстрации <br><br>
          - Каждая страница ламинированна <br><br>
          - Водонепроницаемая <br><br>
          - Практичность <br><br>
          - Разворот на 180° <br><br>
          - Не рвется <br><br>
          - Фломастер стирается: салфеткой, затиркой или даже пальцем
        </p>
      </div>
      <div class="options-item options-item-purple">
        <img src="<?php echo IMG; ?>/home4-service-icon-03.png" alt="">
        <h3>Методичность</h3>
        <p>
          - Во время выполнения заданий ребёнок развивает мелкую моторику. Таким образом, мы готовим его руку к письму. Для этого в каждом задании нужно выполнить определённое действие, которое укрепит руку и улучшит координацию движений. <br><br>
          - Задания, содержащиеся в тетради, помогают развивать у ребёнка внимание, усидчивость, зрительное восприятие, умение ориентироваться в пространстве листа и повышают уровень наглядно-образного мышления. <br><br>
          - Тренируем мышцы кисти рук. <br><br>
          - Учимся рисовать самостоятельно, т. е. осваиваем элементарные графомоторные навыки. <br><br>
          - Развиваем логическое мышление.
        </p>
      </div>
    </div>
  </div>
</section>

<?php $gallery_images = [IMG.'/gal-1.jpg', IMG.'/gal-2.jpg', IMG.'/gal-3.jpg', IMG.'/gal-4.jpg', IMG.'/gal-5.jpg', IMG.'/gal-6.jpg', IMG.'/gal-7.jpg', IMG.'/gal-8.jpg', IMG.'/gal-9.jpg', IMG.'/gal-10.jpg']; ?>
<script>
const gs_images = ['<?php echo implode( "','", $gallery_images); ?>'];
</script>
<div class="gs gs-hide">
  <button class="gs-wclose"></button>
  <button class="gs-prev"><i class="fas fa-caret-left"></i></button>
  <button class="gs-next"><i class="fas fa-caret-right"></i></button>
  <div class="gs-wrap">
    <button class="gs-close"><i class="fas fa-times"></i></button>
    <img class="gs-img" src="<?php echo $gallery_images[0]; ?>" data-index="0">
  </div>
</div>

<?php get_footer();