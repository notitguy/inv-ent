<!DOCTYPE html>
<html lang="cs">

<head>
  <title>Pizzeria Invitaly - Real Italian Pizza in Prague</title>
  <?php include 'blocks/base-head.php'; ?>
</head>


<body class="body--dark is--home" id="top">

  <?php include 'blocks/header.php'; ?>

    <main>
      <section class="slider">

        <div class="bg-slider">
          <div class="bg-slider__container">
            <div class="swiper-wrapper is--bg-slider">
              <div class="swiper-slide is--bg-slider">
                <div class="bg is--01"></div>
              </div>
              <div class="swiper-slide is--bg-slider">
                <div class="bg is--02"></div>
              </div>
              <!-- <div class="swiper-slide is--bg-slider">
                <div class="bg is--03"></div>
              </div> -->
            </div>
          </div>
        </div>

        <div class="plate-slider">
          <div class="plate-slider__slider">
            <div class="swiper-wrapper is--plate-slider">

              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-pizza-dark.webp" alt="" class="plate-slider__image" />
                </div>
                <a href="#menu" class="link plate-slider__content-block is--plate-slider">
                  <div class="text--mask"><i class="plate-slider__subtitle">Delicious pizzas</i></div>
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Just like<br>in Italy</h2></div>
                  <div class="text--mask">
                    <div class="plate-slider__btn-block">
                      <span class="plate-slider__btn">See menu</span>
                      <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" /></div>
                  </div>
                </a>
              </div>

              <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-pizza.webp" alt="" class="plate-slider__image is--rijks" />
                </div>
                <a href="#about" class="link plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Why<br>Invitaly?</h2>
                  </div>
                  <div class="text--mask">
                    <div class="plate-slider__btn-block">
                      <span class="plate-slider__btn">About us</span>
                      <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" />
                    </div>
                  </div>
                </a>
              </div>

              <!-- <div class="swiper-slide is--plate-slider">
                <div class="plate-slider__image-wrapper">
                  <img src="assets/img/header/plate-seafood.webp" alt="" class="plate-slider__image" />
                </div>
                <a href="contact" class="link plate-slider__content-block is--plate-slider">
                  <div class="text--mask">
                    <h2 class="plate-slider__title is--slider-home">Contact</h2>
                  </div>
                  <div class="text--mask">
                    <div class="plate-slider__btn-block">
                      <span class="plate-slider__btn"></span>
                      <img src="assets/img/icons/arrow--white.svg" alt="icon" class="plate-slider__btn-icon" />
                    </div>
                  </div>
                </a>
              </div> -->

            </div>
          </div>
         
          <div class="slider_buttons_">
             <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>  
          <aside class="plate-slider-pagination">
            <div class="plate-slider-pagination__count-wrapper">
              <div id="numberSlides" class="plate-slider-pagination__number is--active">01</div>
              <div id="totalSlides" class="plate-slider-pagination__number is--secondary">03</div>
            </div>
            <div class="swiper-pagination"></div>
          </aside>
        </div>

      </section>

      <section class="main-wrapper daily-menu parallax is--centered">
        <img src="/assets/img/patterns/pizza1.svg" alt="" width="300" class="pattern pizzas one">
        <img src="/assets/img/patterns/pizza2.svg" alt="" width="300" class="pattern pizzas two">
        <img src="/assets/img/patterns/pizza3.svg" alt="" width="300" class="pattern pizzas three">
          <h2>Today's Lunch Menu</h2>
          <i>11:30 - 15:00</i>
          <ul class="daily-menu__list">
            <?php $menu = json_decode(file_get_contents("https://opensheet.elk.sh/1XW32FBLBLWsKdcg6fK6C0PB5-kNJXbGytTWnSNNaSmA/English"));?>
            <ul class="daily_menu_list">
            <?php if (isset($menu)) {
              foreach ($menu as $item) { ?>
              <li>
                <span><?php if (isset($item->name)) {echo $item->name;} ?></span>
                <span class="price"><?php if (isset($item->price)) {echo $item->price;} ?>,- Kč</span>                
              </li>
            <?php }} ?>
          </ul>
      </section>

      <section id="about" class="main-wrapper">
        <div class="grid three-elements-layout__grid m-b" style="--mb: 6rem">
          <div class="three-elements-heading">
            <h1 class="heading--xlarge">Invitaly Pizzeria - Authentic Italian cuisine in Prague</h1>
          </div>
          <div>
            <div class="small-divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="three-elements-layout__image-wrapper">
            <img src="assets/img/food/about-invitaly.webp" alt="" loading="lazy" />
          </div>
        </div>
        <div class="gallery parallax grid">
          <img src="/assets/img/patterns/pizza4.svg" alt="" width="300" class="pattern pizzas four">
          <img src="/assets/img/patterns/pizza5.svg" alt="" width="300" class="pattern pizzas five">
          <img src="/assets/img/patterns/pizza6.svg" alt="" width="300" class="pattern pizzas six">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe@5.2.7/dist/photoswipe.css">
          <h2>Photos</h2>
          <div class="food" href="#">
            <img src="/assets/img/food/photo_2022-02-19_10-16-17 (2).jpg" class="m-b" alt="Invitaly" loading="lazy">
            <h3>Food</h3>
          </div>
          <div class="vibe" href="#">
            <img src="/assets/img/food/photo_2022-02-19_10-16-18 (2).jpg" class="m-b" alt="Invitaly" loading="lazy">
            <h3>Vibe</h3>
          </div>
        </div>
      </section>

      <!-- <section class="main-wrapper">
        <div class="grid three-elements-layout__grid is--reversed">
          <div class="three-elements-heading">
            <h1 class="heading--xlarge">Lorem ipsum dolor sit 2019 amet, nostrud</h1>
          </div>
          <div class="three-elements-layout__image-wrapper">
            <img src="assets/img/616fcd1ead014f224b85d31b_rijks-diner-champignon-1-1.jpg" loading="lazy" alt="img" />
        </div>
          <div>
            <div class="small-divider"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </section> -->
      <section id="menu" class="main-wrapper two-blocks grid">
      <h2 class="heading--xlarge is--centered">Are you ready to try?</h2>
        <div class="two-blocks__card">
          <img src="/assets/img/food/photo_2022-02-19_10-16-17.jpg" alt="Invitaly" loading="lazy">
          <h3>See our menu</h3>
          <p class="m-b">Come and enjoy food in our restaurant.</p>
          <a href="#" class="primary">See menu</a>
        </div>
        <div class="two-blocks__card">
          <img src="/assets/img/food/photo_2022-02-19_10-16-20.jpg" alt="Invitaly" loading="lazy">
          <h3>Want it at home?</h3>
          <p class="m-b">Get it delivered. While it is hot.</p>
          <a href="#" class="primary">Order now</a>
        </div>
      </section>
    </main>

    <?php include 'blocks/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
<script>
  const patterns = document.querySelectorAll('.pizzas');
  new simpleParallax(patterns, {
    overflow: true,
  });
  const framed = document.querySelectorAll('.three-elements-layout__image-wrapper img');
  new simpleParallax(framed, {
    scale: 1.2
  });
</script>
<script type="module">
import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5.2.7/dist/photoswipe-lightbox.esm.min.js';

const options = {
  dataSource: [
    {
      src: 'assets/img/food/photo_2022-02-19_10-16-16.jpg',
      width: 633,
      height: 875,
      alt: 'Pizzeria Invitaly'
    },
    {
      src: 'assets/img/food/photo_2022-02-19_10-16-17.jpg',
      width: 1280,
      height: 813,
      alt: 'Pizzeria Invitaly'
    },
    {
      src: 'assets/img/food/photo_2022-02-19_10-16-18.jpg',
      width: 635,
      height: 871,
      alt: 'Pizzeria Invitaly',
    }
  ],
  showHideAnimationType: 'fade',
  pswpModule: () => import('https://cdn.jsdelivr.net/npm/photoswipe@5.2.7/dist/photoswipe.esm.min.js'),
};

const lightbox = new PhotoSwipeLightbox(options);
lightbox.init();

document.querySelector('.food').onclick = () => {
  lightbox.loadAndOpen(0); // defines start slide index
};
</script>
</body>

</html>
