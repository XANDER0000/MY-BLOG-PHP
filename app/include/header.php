<?php include("path.php")?>

 <header class="header">
  <div class="container">
   <div class="header__wrapper">
    <div class="header__left">
     <a href="<?php echo BASE_URL ?>"  class="header__logo">
      MY BLOG
     </a>
    </div>
    <div class="header__right">
     <nav class="header__nav" id="nav">
      <a href="<?php echo BASE_URL ?>" class="header__nav-link">Главная</a>
      <a href="" class="header__nav-link">О нас</a>
      <a href="" class="header__nav-link">Услуги</a>
      <div class="header__nav-cabinet">Кабинет
       <ul>
        <li class="header__nav-cabinet_link">Админ панель</li>
        <li class="header__nav-cabinet_link">Выйти</li>
       </ul>
      </div>
     </nav>
    </div><!--HEADER_RIGHT ----------------------->
    <button id="burger">
     <div type="button" class="burger-button" title="Menu">
      <span class="burger-bar burger-bar--1"></span>
      <span class="burger-bar burger-bar--2"></span>
      <span class="burger-bar burger-bar--3"></span>
     </div>
    </button>
   </div><!--HEADER_WRAPPER ----------------------->
  </div><!--CONTAINER ----------------------->
 </header><!--HEADER ----------------------->