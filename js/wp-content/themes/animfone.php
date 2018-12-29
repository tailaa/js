<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Движение картинки(Анимация фона)</title>
 <style>
   body {
    background: url(/wp-content/themes/wikiwp/images/city.png) repeat-x 0 100% fixed,
                linear-gradient(to top, #5080b1, #667a7d) fixed;
    animation: city 30s linear infinite;
    -webkit-animation: city 30s linear infinite;
   }
   @keyframes city {
    from { background-position: -1000px 100%, 0 0;}
    to { background-position: 0 100%, 0 0; }
   }
   @-webkit-keyframes city {
    from { background-position: -1000px 100%, 0 0;}
    to { background-position: 0 100%, 0 0; }
   }
</style>
</head>
<body>
</body>
</html>