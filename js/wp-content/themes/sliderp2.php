<!DOCTYPE html>
<html lang="ru">
   <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="/wp-content/themes/wikiwp/js/plugin.js"></script>
</head>
<body>
   <div class="slidewrap"> <!--Контейнер слайдера-->
      <ul class="slider" id="sliderName"> <!--Добавим атрибут id="sliderName"-->
         <li class="slide">
            Block 1
         </li>
         <li class="slide">
            Block 2
         </li>
         <li class="slide">
            Block 3
         </li>
      </ul>
      <ul class="slidecontrols"> <!--Добавим сами кнопки-->
         <li><a href="#sliderName" class="next">Vpered</a></li>
         <li><a href="#sliderName" class="prev">Nazad</a></li>
      </ul>
   </div>
   <script>
      $(document).ready(function() {
         $('.slidewrap').carousel({ 
            nextSlide : '.next',
            prevSlide : '.prev',
            addNav : false
         })
      });
   </script>
</body>