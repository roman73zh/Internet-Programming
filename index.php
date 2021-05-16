<?php
    session_start();
    
    if ($_SESSION['user']) {
        require_once 'vendor/updatetime.php';
    }
    
    require_once 'header.php';
    echo '
    <div class="owl-carousel slide-one-item">
      
      
      <div class="site-section-cover overlay img-bg-section" style="background-image: url(\'/assets/images/economyPrew.png?v10\'); " >
        <!--<video class="video" loop="loop" autoplay="" muted="">
            <source src="/assets/video/vladick.mp4" type="video/mp4">
        </video>-->
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">У кого какая зарплата</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Вы узнаете, сколько зарабатывают разные слои населения в данную минуту</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="/economy/economy.php" class="btn btn-outline-white border-w-2 btn-md">Посмотреть</a></p>
            </div>
          </div>
        </div>

      </div>
      
      <div class="site-section-cover overlay img-bg-section" style="background-image: url(\'/assets/images/mapPrew.png\'); " >
        <!--<video class="video" loop="loop" autoplay="" muted="">
            <source src="/assets/video/vladick.mp4" type="video/mp4">
        </video>-->
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">История регионов россии</h1>  
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Вы можете узнать историю своего региона, выбрав его на карте</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="/map/map.php" class="btn btn-outline-white border-w-2 btn-md">На карту</a></p>
            </div>
          </div>
        </div>

      </div>
      
    </div>
    ';
    require_once 'footer.php';

?>