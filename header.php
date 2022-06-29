<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1,usar-scalable=no"/>
  <script type="text/javascript" src="assets/js/*"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" rel="stylesheet">
  <!--<script src="assets/js/arquivo.js"></script>-->
  <script>
    $(document).ready(function () {
      $(".box").mouseenter(function () {
        $(this).animate({
          opacity: '1',
          width: '600px'
        });
      });
      $(".box").mouseleave(function () {
        $(this).animate({
          opacity: '1',
          width: '50px'
        });
      });
      
      $(".carousel2").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 3,
      });
      $(".carousel3").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
      });

    });
  <?php wp_head(); ?>
  
</head>

<body>