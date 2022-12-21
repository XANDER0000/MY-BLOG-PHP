<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Blog</title>
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
  include("app/include/header.php")
 ?>


 <div class="enter">
  <div class="container">
   <div class="enter__wrapper">
    <div class="enter__header">Авторизация</div>
    <form action="" class="enter__form">
     <label for="">
      Логин
      <input placeholder="Введите ваш логин" type="text">
     </label>
     <label for="">
      Пароль
      <input placeholder="Введите ваш пароль" type="text">
     </label>
     <div class="enter__form-buttons">
      <button class="enter__btn">Войти</button>
      <a class="enter__link" href="">Зарегестрироваться</a>
     </div>
    </form>
   </div><!--ENTER__WRAPPER ----------------------->
  </div><!--CONTAINER ----------------------->
 </div><!--ENTER ----------------------->


 <?php
  include("app/include/footer.php")
 ?>


<!-- JS -->
<script defer src="assets/js/main.js"></script>
<!-- SWIPER -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>
</html>