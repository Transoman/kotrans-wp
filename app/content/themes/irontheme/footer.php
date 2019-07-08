  </div><!-- /.content -->

  <footer class="footer">
    <div class="container">
      <div class="logo footer__logo">
        <?php the_custom_logo(); ?>
        <p class="logo__descr">Внутрироссийские <br>и международные <br>грузоперевозки</p>
      </div>

      <?php if (get_field('policy', 'option')): ?>
        <p class="policy"><a href="<?php echo esc_url(get_field('policy', 'option')); ?>" target="_blank">Политика конфиденциальности</a></p>
      <?php endif; ?>

      <p class="copy">Copyright &copy; 2011 - <?php echo date('Y'); ?> ООО KoTpaнc</p>
    </div>
  </footer><!-- #colophon -->

</div><!-- /.wrapper -->

  <div id="callback" class="modal">
    <button type="button" class="modal__close callback_close"></button>

    <h3 class="modal__title">Обратный звонок</h3>

    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="60" title="Обратный звонок"]'); ?>
      <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
    </div>
  </div>

  <div id="order-delivery" class="modal">
    <button type="button" class="modal__close order-delivery_close"></button>

    <h3 class="modal__title">Заявка на перевозку</h3>

    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="61" title="Заявка на перевозку"]'); ?>
      <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
    </div>
  </div>

  <div id="order-calculation-cost" class="modal">
    <button type="button" class="modal__close order-calculation-cost_close"></button>

    <h3 class="modal__title">Расчет стоимости</h3>

    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="62" title="Форма расчет стоимости"]'); ?>
      <div class="hidden" data-contact-btn="true"><button class="btn "><span class="btn-load"></span><span class="text"></span></button></div>
    </div>
  </div>

<?php wp_footer(); ?>
  <script async src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=init"></script>
  <script>
    <?php $location = get_field('location', 'option'); ?>

    var myMap, myPlacemark,
      coords = [<?php echo esc_js($location['lat']); ?>, <?php echo esc_js($location['lng']); ?>];

    function init() {
      myMap = new ymaps.Map('contact-map', {
        center: coords,
        zoom: 17
      });

      myPlacemark = new ymaps.Placemark(coords, {
        preset: 'islands#circleDotIcon',
        iconColor: '#fe3334'
      });

      myMap.geoObjects.add(myPlacemark);
    }
  </script>

</body>
</html>
