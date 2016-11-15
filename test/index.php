<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      //font: 400 15px Lato, sans-serif;
      //line-height: 1.8;
      //color: #818181;
  }

  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }

  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
      margin-bottom: 50px;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
img {
    width: 640px;
    height: 640px;
}

  .centered {
      float: none;
      margin: 0 auto;
  }


  .slideanim {visibility: visible}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <div class="col-md-6 text-center slideanim slide centered">
    <div class="row">
      <div class="thumbnail">
         <p>Some text</p>
        <img src="paris.jpg">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="row">
      <div class="thumbnail">
        <img src="green-elephant.jpg">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
  </div>
</div>
    <!--
  <script>
    $(document).ready(function(){

      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    })
  </script>
    -->
</body>