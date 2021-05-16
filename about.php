<?php
    session_start();
    
    if ($_SESSION['user']) {
        require_once 'vendor/updatetime.php';
    }
    
    require_once 'header.php';
    echo '
    <div class="site-section">
<div class="block__73694 mb-2" id="services-section">
<div class="container">
<div class="row d-flex no-gutters align-items-stretch">
<div class="col-12 col-lg-6 block__73422 aos-init aos-animate" style="background-image: url('."'images/gerb.png?v3'".');" data-aos="fade-right" data-aos-delay="">
</div>
<div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
<h2 class="mb-3 text-black">О проекте по истории</h2>
<p>Представляем интерактивную карту истории субъектов Российской Федерации. Узнать историю собственного (или любого другого) региона стало просто, как никогда. Достаточно щелкнуть по нему курсором мыши. А принаведении его на субъект будет выведена основная информация и герб.</p>
<p>Наша интерактивная карта истории субъектов России имеет следующие основные преимущества:</p>
<ul class="ul-check primary list-unstyled mt-5">
<li>Точность</li>
<li>Достоверность</li>
<li>Актуальность</li>
<li>Удобство использования</li>
<li>Приятный дизайн</li>
<li>Кроссплатформенность</li>
</ul>
</div>
</div>
</div>
</div>
<div class="block__73694">
<div class="container">
<div class="row d-flex no-gutters align-items-stretch">
<div class="col-12 col-lg-6 block__73422 order-lg-2 aos-init aos-animate" style="background-image: url('."'images/bigmac.jpg?v2'".');" data-aos="fade-left" data-aos-delay="">
</div>
<div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1 aos-init aos-animate" data-aos="fade-right" data-aos-delay="">
<h2 class="mb-3 text-black">О проекте по экономике</h2>
<p>Главная цель представленного нами проекта по экономике - показать заработок конкретных людей и слоев общества, но не в денежном, а в натуратьном эквиваленте, с которым знаком каждый студент. Речь идет о Биг Маке. Он выбран не просто так, ведь именно это блюдо из Макдональдса - один из самых известных, пусть и неофициальных, способов определения паритета покупательной способности (ППС).</p>
</div>
</div>
</div>
</div>
</div>
<div class="site-section bg-dark" id="about-section">
<div class="container">
<div class="row justify-content-center mb-4 block-img-video-1-wrap">
<div class="col-md-12 mb-5">
<figure class="block-img-video-1 aos-init aos-animate" data-aos="fade">
<a href="#" data-fancybox="" data-ratio="2">
<h1>Статистика в цифрах</h1>
</a>
</figure>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="row">
<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="">
<div class="block-counter-1">
<span class="number"><span data-number="85">85</span></span>
<span class="caption">Субъектов</span>
</div>
</div>
<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="100">
<div class="block-counter-1">
<span class="number"><span data-number="108">108</span>+</span>
<span class="caption">Часов разработки</span>
</div>
</div>
<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="200">
<div class="block-counter-1">
<span class="number">><span data-number="99">99,993</span>%</span>
<span class="caption">Аптайм</span>
</div>
</div>
<div class="col-6 col-md-6 mb-4 col-lg-0 col-lg-3 aos-init" data-aos="fade-up" data-aos-delay="300">
<div class="block-counter-1">
<span class="number"><span data-number="0">0</span></span>
<span class="caption">Ошибок</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="site-section" id="team-section">
<div class="container">
<div class="row mb-5 justify-content-center">
<div class="col-md-7 text-center">
<div class="block-heading-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
<h2>Над проектом работали</h2>
<p>Студенты группы ИВТАСбд-11</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
<div class="block-team-member-1 text-center rounded">
<figure>
<img src="https://sun7-6.userapi.com/s/v1/ig2/yoZY6Ai_ulK0wGp-6GV00_725hOWKeX4swAMOiKA7N27QHcQS7hxhLVG7fNpuGm-W_jVNhNzPen0v7eCM6QcFq96.jpg?size=200x0&quality=96&crop=34,0,425,425&ava=1" height="130" width="130" alt="Image" class="img-fluid rounded-circle">
</figure>
<h3 class="font-size-20 text-black">Абдулганиев Наиль</h3>
<span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Mining Expert</span>
<div class="block-social-1">
<a href="https://ru-ru.facebook.com/" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
<a href="https://twitter.com/?lang=ru" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
<a href="https://www.instagram.com/?hl=ru" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
<div class="block-team-member-1 text-center rounded">
<figure>
<img src="https://sun7-6.userapi.com/s/v1/if1/3KMkINslpxqFG0ffCKMRq-76qtzt-feF2ZYSpPAzTNJJvJHK3ae8Eic8oHeEKNskGYhJehRL.jpg?size=200x0&quality=96&crop=267,0,1200,1200&ava=1" height="130" width="130" alt="Image" class="img-fluid rounded-circle">
</figure>
<h3 class="font-size-20 text-black">Житков Роман</h3>
<span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project Manager</span>
<div class="block-social-1">
<a href="https://ru-ru.facebook.com/" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
<a href="https://twitter.com/?lang=ru" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
<a href="https://www.instagram.com/?hl=ru" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
<div class="block-team-member-1 text-center rounded">
<figure>
<img src="https://sun7-9.userapi.com/s/v1/ig2/WgLLK82WRt3KCYJRIObDCA9rLZ2QwQgqOAzsn2C0HHfuBNA2pjg7B1iQx3x-2eG_Dvh_CwyRRSkh7ZLYuceH1Wjk.jpg?size=200x0&quality=96&crop=0,0,1024,1524&ava=1" style="object-fit: cover; width: 130px; height: 130px;" alt="Image" class="img-fluid rounded-circle">
</figure>
<h3 class="font-size-20 text-black">Михайлов Владислав</h3>
<span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Engineer</span>
<div class="block-social-1">
<a href="https://ru-ru.facebook.com/" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
<a href="https://twitter.com/?lang=ru" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
<a href="https://www.instagram.com/?hl=ru" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
</div>
</div>
</div>

</div>
</div>
</div>
    ';
    require_once 'footer.php';

?>