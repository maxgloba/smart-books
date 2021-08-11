    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 smi">
            <span class="smi-img">
              <img src="<?php echo IMG; ?>/facebook.png" alt="" >
            </span>
            <a href="https://www.facebook.com/smart.books.ua">smart.books.ua</a>
          </div>
          <div class="col-md-4 smi">
            <span class="smi-img">
              <img src="<?php echo IMG; ?>/instagram.webp" alt="">
            </span>
            <a href="https://www.instagram.com/smart_books_ua/">@smart_books_ua</a>
          </div>
          <div class="col-md-4 smi">
            <span class="smi-img">
              <img src="https://telegram.org/img/website_icon.svg" alt="">
            </span>
            <a href="tg://resolve?domain=smart_books_ua">@smart_books_ua</a>
          </div>
          <div class="col-md-4">
            <h4>Контакты</h4>
            <ul class="main-footer__menu">
              <li>
                <a href="tel:0731817786">
                  <i class="far fa-phone"></i>
                  (073) 181-77-86
                </a>
              </li>
              <li>
                <a href="mailto:support@smart-books.org">
                  <i class="far fa-envelope"></i>
                  support@smart-books.org
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>Страницы</h4>
            <ul class="main-footer__menu">
              <li><a href="#" data-popup="usloviya">Условия использования</a></li>
              <li><a href="#" data-popup="oplata">Оплата</a></li>
              <li><a href="#" data-popup="dostavka">Доставка</a></li>
              <li><a href="#" data-popup="vozvrat">Возврат</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="main-footer__logo">
              <img src="<?php echo IMG; ?>/logo-white.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php get_template_part( 'partials/mg', 'popup' ); ?>

    <div id="loader" class="loader loader-hide"></div>

    <?php wp_footer(); ?>
  </body>
</html>