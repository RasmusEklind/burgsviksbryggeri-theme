<?php if (! is_home()) {
    ?>
<footer class="footer" role="contentinfo">
    <div class="footer__content">
        <a class="nostylelink" href="/">
            <img class="footer__content--logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-logo.png" alt="Burgsviksbryggeri"/>
            <h3 class="footer__content--title">BURGSVIKS<br>BRYGGERI</h3>
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
</footer>
<?php
} ?>
<script src="<?php echo get_template_directory_uri() . '/assets/dist/js/theme.min.js'; ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>

<script>
  var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
  });

  // Toggle button
  document.querySelector('.toggle-button').addEventListener('click', function() {
    slideout.toggle();
  });

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQKSvb4EDDQlZ3zzS807qeKb44aYWOE8g&callback=initMap"
    async defer></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-82215936-1', 'auto');
      ga('send', 'pageview');
    </script>
    <?php
    wp_footer();
?>
</body>
</html>
