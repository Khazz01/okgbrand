<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> OKG</title>
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Bootsrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- style -->
  <link rel="stylesheet" href="{{asset('frontend/aos/aos-master/dist/aos.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/aos/aos-master/demo/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  
  <!-- font awesome for icons -->
  <script src="https://kit.fontawesome.com/0a3ad0b72e.js" crossorigin="anonymous"></script>

  <!-- Bootsrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>

<body>
  <div class="page-transition">

<!-- start cssload-loader -->

<!-- end cssload-loader -->
<!-- ================================
         START HEADER AREA
================================= -->
@include('frontend.body.header')
<!-- ================================
          END HEADER AREA
================================= -->



<!-- ================================
         START BODY AREA
================================= -->
@yield('home')
<!-- ================================
          START BODY AREA
================================= -->



<!-- ================================
         START FOOTER AREA
================================= -->
@include('frontend.body.footer')
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/main2.js')}}"></script>
<script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
