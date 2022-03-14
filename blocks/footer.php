  <footer class="footer main_wrapper">
      <div class="row">
        <div class="col-md-3">
          <!-- <a href="/">
            <img class="footer_logo_img" src="assets/img/logo.png" alt="Logo">
          </a> -->
          <h3>Invitaly EnoTrattoria</h3>
          <address>
            <ul class="m-b">
              <li>Vězeňská 4, 110 00 Praha, Czechia</li>
              <li>
                <a href="tel:+420222313185">+420 222 313 185</a>
              </li>
              <li>
                <a href="mailto:hello@invitaly.cz">hello@invitaly.cz</a>
              </li>
            </ul>
            <a href="https://www.instagram.com/invitaly_enotrattoria/" target="_blank">
              <img src="assets/img/icons/instagram.svg"> Fresh and tasty updates on our Instagram
            </a>
          </address>
        </div>
        
        <div class="col-md-3">
          <h3>Otevírací doba</h3>
          <p>Útery - Sobota</p>
          <p class="m-b">11:00 - 22:00</p>
          <a href="/reservation" class="primary">Make a reservation</a>
        </div>

        <div class="col-md-3">
          <h3>Pages</h3>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-3 chain">
          <img class="backdrop" src="/assets/img/food/photo_2022-02-19_10-16-20.jpg" alt="Pizzeria">
          <h2>Pizzeria e Cucina Italiana</h2>
          <p class="m-b">Try delicious pizzas just like you are in Italy!</p>
          <a href="#" class="primary">Visit Pizzeria</a>
        </div>
      </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <?php
    if (stripos($_SERVER['PHP_SELF'], 'index.php')) {
        echo '<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>';
    }
    elseif (stripos($_SERVER['PHP_SELF'], 'reservation.php')) {
        echo '<script src="https://cdn.jsdelivr.net/npm/litepicker@2.0.12/dist/nocss/litepicker.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/plugins/mobilefriendly.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/luxon@2.3.1/build/global/luxon.min.js"></script>';
    }
  ?>
  <script src="assets/js/main.js"></script>