<!DOCTYPE html>
<html lang="cs" data-wf-page="6125d18e93fe65dbd434b43c">

<head>
  <meta charset="utf-8" />
  <title>Menu</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/img/logoicon.ico">
  <style type="text/css">
    .plate-slider__image {
      transform: rotate(0deg);
      position: relative;
    }
    
    .plate-slider__title {
      transform: translateY(200px);
      transition: transform ease-in-out 0.7s;
    }
    
    .title_show {
      transform: translateY(0px);
      transition: transform ease-in-out 0.7s;
    }
    
    .change_right {
      transform: translateX(120px) !important;
      transition: transform ease-in-out 0.7s;
    }
    
    .plate-slider__image-wrapper {
      transition: transform ease-in-out 0.7s;
    }
  </style>
</head>

<body class="body--dark is--home">

  <?php 
    include 'blocks/header.php';
  ?>

    <main>

      <section class="order_ main_wrapper">
        <div class="row" style="width: 100%;">
          <div class="col-xl-6">
            <div class="rigt_img"></div>
          </div>
          <div class="col-xl-6 d_center">
            <form class="order_form" action="#" method="POST">
              <div class="row">

                <div class="col-md-6">

                  <label>Date and time</label>
                  <input type="datetime-local" required>
                </div>
                <div class="col-md-6">
                  <label>Number of people</label>
                  <input type="number" max="20" placeholder="max 20" required />
                </div>

                <div class="col-md-6">
                  <label>Name</label>
                  <input type="text" placeholder="Name.." required/>
                </div>
                <div class="col-md-6">
                  <label>Surname</label>
                  <input type="text" placeholder="Surname.." required />
                </div>

                <div class="col-md-6">
                  <label>Phone</label>
                  <input id="phone" type="text" placeholder="Phone" required />
                </div>

                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" placeholder="Email" required />
                </div>
                <div class="col-md-12">
                  <label>Reason</label>
                  <input class="w-90" type="text" name="reason" placeholder="Reason" required>
                  <label>Сomment</label>
                  <textarea class="w-90" rows="5"></textarea>
                  <button class="send_form" type="submit" name="send_order">Send</button>
                </div>
              </div>

            </form>
          </div>
        </div>

      </section>

    </main>

    <style type="text/css">
      .order_form{
        padding: 50px;
      }
      .rigt_img {
        width: 100%;
        min-height: 100%;
        background: red;
        background-image: url(assets/img/food/about.jpg);
        background-position: bottom;
        background-size: cover;
        background-repeat: no-repeat;
      }
      
      input {
        
        box-sizing: border-box;
        width: 100%;
        height: 45px;
      }

      textarea{
        width: 100%;
        box-sizing: border-box;
      }

      .send_form{
        width: 100%;
      }

      @media only screen and (max-width: 700px) {

        .send_form{
          margin-top: 40px;
        }
}

    </style>

    <?php 
    include 'blocks/footer.php';
  ?>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $("header").addClass("header_down");
          $(".plate-slider__title").addClass("title_show");
          setTimeout(function() {
            $(".plate-slider__image-wrapper").addClass("change_right");
          }, 700);
          $('.link ').click(function(e) {
            $("header").removeClass("header_down");
            $(".plate-slider__title").removeClass("title_show");
            $(".plate-slider__image-wrapper").removeClass("change_right");
            e.preventDefault();
            setTimeout(function(url) {
              window.location = url
            }, 1100, this.href);
          });
          $('#phone').inputmask("+420 (999) 999-999");
        });

      </script>

      <script src="assets/js/animate.js"></script>
</body>

</html>
