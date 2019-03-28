<div class="section section--contact">
  <span class="a11y-accesskeys-span" tabindex="-1"></span>
  <div class="section__content section__content--contact">

      <div class="section--contact--contact">
           <h2 class="section__heading section__heading--contact">ADRESS</h2>
        <div class="contact--address">
          <span>Burgsvik<br>623 35<br>Skolvägen 10</span>
        </div>
      </div>

      <div class="section--contact--adress">
           <h2 class="section__heading section__heading--contact">KONTAKT</h2>
        <div class="contact--icons">
          <ul class="contact--icons--list">
              <a class="contact--icons--link nostylelink" href="mailto:info@burgsviksbryggeri.se">
                <li class="contact--icons--item icon-email nostylelist">info@burgsviksbryggeri.se</li>
              </a>
              <a class="contact--icons--link nostylelink" href="tel:0703330453">
                  <li class="contact--icons--item icon-phone nostylelist">070 333 04 53</li>
              </a>
          </ul>
        </div>
      </div>
      <div class="contact--map" id="map"></div>
    </div>
    <?php if (is_home()) {
    ?>
        <div class="footer__content">
            <a class="nostylelink" href="/">
                <img class="footer__content--logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-logo.png" alt="Burgsviksbryggeri"/>
            </a>

        <h2 class="footer__heading">FÖLJ OSS</h2>
        <div class="footer--icons">
          <ul>
            <a class="footer--icons--link nostylelink" href="http://facebook.com/burgsviksbryggeri">
            <li class="footer--icons--item icon-facebookkkkkkkkkk nostylelist"></li>
            </a>
            <a class="footer--icons--link nostylelink" href="http://instagram.com/burgsviksbryggeri">
            <li class="footer--icons--item icon-instagrammmmmmmmmm nostylelist"></li>
            </a>
            <a class="footer--icons--link nostylelink" href="https://untappd.com/burgsviksbryggeri">
            <li class="footer--icons--item icon-beer nostylelist"></li>
            </a>
          </ul>
        </div>
      </div>
    <?php
} ?>

</div>
