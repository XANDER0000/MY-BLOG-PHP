<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- SWIPER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <link rel="shortcut icon" href="assets/images/blog_102889.ico" type="image/x-icon">
</head>
<body>
  <?php
    include("app/include/header.php");
  ?>

 <section class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
     <img src="assets/images/1.jpg" alt="">
    </div>
    <div class="swiper-slide">
     <img src="assets/images/2.jpg" alt="">
    </div>
    <div class="swiper-slide">
     <img src="assets/images/3.jpg" alt="">
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
 </section>

 <section class="blogs">
  <div class="container">
    <div class="section__header">
      Последнии публикации
    </div>
    <div class="blogs__wrapper">
      <div class="blogs__items">
        <div class="blogs__items-item">
          <div class="blogs__items-item_img">
            <img src="assets/images/4.jpg" alt="">
          </div>
          <div class="blogs__items-item_content">
            <a href="" class="blogs__items-item_header">
              Статья на тему динамического сайта
            </a>
            <div class="blogs__items-item_about">
              <div class="blogs__items-item_author">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><g id="about"><path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"/><path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"/></g></svg>
                Имя Автора
              </div>
              <div class="blogs__items-item_date">
                <svg data-name="Livello 1" id="Livello_1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><title/><path d="M121,10.3H107.2V3a3,3,0,0,0-6,0v7.3H80.4V3a3,3,0,0,0-6,0v7.3H53.6V3a3,3,0,0,0-6,0v7.3H26.8V3a3,3,0,0,0-6,0v7.3H7a7,7,0,0,0-7,7V121a7,7,0,0,0,7,7H95a3,3,0,0,0,.59-.06l.26-.08a1.76,1.76,0,0,0,.59-.25l.23-.12a3,3,0,0,0,.46-.38l30-30a3,3,0,0,0,.38-.46c0-.07.07-.14.11-.21a1.78,1.78,0,0,0,.25-.6c0-.09.06-.17.08-.27A3,3,0,0,0,128,95h0V17.3A7,7,0,0,0,121,10.3ZM98,98h19.76L98,117.76ZM7,16.3H20.8v7.3a3,3,0,0,0,6,0V16.3H47.6v7.3a3,3,0,1,0,6,0V16.3H74.4v7.3a3,3,0,1,0,6,0V16.3h20.8v7.3a3,3,0,1,0,6,0V16.3H121a1,1,0,0,1,1,1V31.6H6V17.3A1,1,0,0,1,7,16.3ZM6,121V37.6H122V92H95a3,3,0,0,0-3,3v27H7A1,1,0,0,1,6,121Z"/></svg>
                Mar 11, 2022</div>
            </div>
            <div class="blogs__items-item_text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptatem similique error explicabo quas laudantium reiciendis laboriosam suscipit molestiae! Suscipit consequuntur dolorum obcaecati impedit. Ullam tempora magnam molestias cupiditate laboriosam.
            </div>
          </div>
        </div>
        <div class="blogs__items-item">
          <div class="blogs__items-item_img">
            <img src="assets/images/4.jpg" alt="">
          </div>
          <div class="blogs__items-item_content">
            <a href="" class="blogs__items-item_header">
              Статья на тему динамического сайта
            </a>
            <div class="blogs__items-item_about">
              <div class="blogs__items-item_author">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><g id="about"><path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"/><path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"/></g></svg>
                Имя Автора
              </div>
              <div class="blogs__items-item_date">
                <svg data-name="Livello 1" id="Livello_1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><title/><path d="M121,10.3H107.2V3a3,3,0,0,0-6,0v7.3H80.4V3a3,3,0,0,0-6,0v7.3H53.6V3a3,3,0,0,0-6,0v7.3H26.8V3a3,3,0,0,0-6,0v7.3H7a7,7,0,0,0-7,7V121a7,7,0,0,0,7,7H95a3,3,0,0,0,.59-.06l.26-.08a1.76,1.76,0,0,0,.59-.25l.23-.12a3,3,0,0,0,.46-.38l30-30a3,3,0,0,0,.38-.46c0-.07.07-.14.11-.21a1.78,1.78,0,0,0,.25-.6c0-.09.06-.17.08-.27A3,3,0,0,0,128,95h0V17.3A7,7,0,0,0,121,10.3ZM98,98h19.76L98,117.76ZM7,16.3H20.8v7.3a3,3,0,0,0,6,0V16.3H47.6v7.3a3,3,0,1,0,6,0V16.3H74.4v7.3a3,3,0,1,0,6,0V16.3h20.8v7.3a3,3,0,1,0,6,0V16.3H121a1,1,0,0,1,1,1V31.6H6V17.3A1,1,0,0,1,7,16.3ZM6,121V37.6H122V92H95a3,3,0,0,0-3,3v27H7A1,1,0,0,1,6,121Z"/></svg>
                Mar 11, 2022</div>
            </div>
            <div class="blogs__items-item_text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt voluptatem similique error explicabo quas laudantium reiciendis laboriosam suscipit molestiae! Suscipit consequuntur dolorum obcaecati impedit. Ullam tempora magnam molestias cupiditate laboriosam.
            </div>
          </div>
        </div>
      </div>
      <div class="blogs__options">
        <form class="blogs__options_search">
          <label for="blog-search">Поиск</label>
          <input id="blog-search" placeholder="Введите искомое слово" type="text">
        </form>
        <div class="blogs__options_cat">
          <label for="">Категории</label>
          <ul>
            <li>Программирование</li>
            <li>Дизайн</li>
            <li>Визуализация</li>
            <li>Кейсы</li>
            <li>Мотивация</li>
          </ul>
        </div>
      </div>
    </div><!--BLOGS__WRAPPER ----------------------->
  </div><!--CONTAINER ----------------------->
 </section><!--BLOGS ----------------------->

 <?php
  include("app/include/footer.php")
 ?>


<!-- JS -->
<script defer src="assets/js/main.js"></script>
<!-- SWIPER -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>
</html>