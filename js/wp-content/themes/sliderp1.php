<!DOCTYPE html>
<html lang="ru">
   <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
   <script src="/wp-content/themes/wikiwp/js/plugin.js"></script>
</head>
<body>
   <div class="slidewrap">
      <ul class="slider">
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
   </div>
   <script>
      $(document).ready(function() {
         $('.slidewrap').carousel({ 
            namespace: "mr-rotato"
         })
      });
   </script>
</body>
</html>