<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rooms and Facilities</title>
    <link rel="stylesheet" href="css/room.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>
  <body>

  <div class="content">
        <h1>ROOMS AND FACILITIES</h1>
       
        
    </div>
    <div class="center">
      <div class="images">
        <div class="slide img1"><img src="images/room1.jpg"></div>
        <div class="slide"><img src="images/classroom2.jpg"></div>
        <div class="slide"><img src="images/classroom3.png"></div>
        <div class="slide"><img src="images/room2.jpg"></div>
        <div class="slide"><img src="images/room3.jpg"></div>
      </div>
      <div class="buttons">
        <a href="#" class="btn1 active"></a>
        <a href="#" class="btn2"></a>
        <a href="#" class="btn3"></a>
        <a href="#" class="btn4"></a>
        <a href="#" class="btn5"></a>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $('.btn1').click(function(){
          $('.img1').css("marginLeft","0");
        });
        $('.btn2').click(function(){
          $('.img1').css("marginLeft","-20%");
        });
        $('.btn3').click(function(){
          $('.img1').css("marginLeft","-40%");
        });
        $('.btn4').click(function(){
          $('.img1').css("marginLeft","-60%");
        });
        $('.btn5').click(function(){
          $('.img1').css("marginLeft","-80%");
        });
        $('a').click(function(){
          $(this).addClass('active').siblings()
                  .removeClass('active');
        })
      });

    </script>

  </body>
</html>
