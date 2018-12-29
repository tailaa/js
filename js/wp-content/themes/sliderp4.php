<!DOCTYPE html>
<html lang="ru">
   <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="/wp-content/themes/wikiwp/js/plugin.js"></script>
   <style type="text/css" media="screen">
      .carousel-tabs { clear: both; }
      .carousel-active-tab { color: red; }	
      .carousel-disabled,
      .mr-rotato-disabled { color: #aaa; }  
      .slidewrap .carousel-tabs {
         padding: 0;
         margin: 1em 0;
         clear: both;
      }
      .slidewrap .carousel-tabs li {
         display: inline-block; 
         padding: 0 2px;
      }
      .slidewrap .carousel-tabs a {
         background: #ddd;
         display: inline-block;
         height: 10px;
         text-indent: -9999px;
         width: 10px;
         border-radius: 5px;
      }
      .ie .slidewrap .carousel-tabs li,
      .ie .slidewrap .carousel-tabs a { 
         display: block;
         float: left;
      }
      .slidewrap .carousel-tabs .carousel-active-tab a {
         background: #777;
      }
   </style>	
</head>
<body>
   <div class="slidewrap"> <!--Контейнер слайдера-->
      <ul class="slider" id="sliderName"> <!--Добавим атрибут id="sliderName"-->
         <li class="slide">
            <h2 class="slidehed">Block 1</h2> <!-- добавляем атрибут-->
            Block 1
         </li>
         <li class="slide">
            <h2 class="slidehed">Block 2</h2> <!-- добавляем атрибут-->
            Block 2
         </li>
         <li class="slide">
            <h2 class="slidehed">Block 3</h2> <!-- добавляем атрибут-->
            Block 3
         </li>
      </ul>
   </div>
   <script>
   $(document).ready(function() {
      $('.slidewrap').carousel({
         slider: '.slider',
         slide: '.slide',
         addPagination: true, //включаем генерацию меню
         addNav : false
         speed: 300 // скорость перелистывания слайдов
      });
   });
   </script>
</body>
</html>