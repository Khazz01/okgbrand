<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Aduca -  Education HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">
    
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- end inject -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <title>Dashboard</title>
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->


<!--======================================
        START HEADER AREA
    ======================================-->
@include('frontend.dashboard.studentBody.header')
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START SIDEBAR AREA
    ======================================-->
    @include('frontend.dashboard.studentBody.sidebar')
<!--======================================
        END SIDEBAR AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
            <i class="la la-bars mr-1"></i> Dashboard Nav
        </div>
        <div class="container-fluid">
@yield('student')
  <!-- ================================
    END DASHBOARD AREA
================================= -->

<!--======================================
        START FOOTER AREA
    ======================================-->
    @include('frontend.dashboard.studentBody.footer')  
<!--======================================
        END FOOTER AREA
======================================-->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->
</div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- Modal -->
<!-- <div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true"> -->
    


<!-- template js files -->
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/fancybox.js')}}"></script>
<script src="{{asset('frontend/js/chart.js')}}"></script>
<script src="{{asset('frontend/js/doughnut-chart.js')}}"></script>
<script src="{{asset('frontend/js/bar-chart.js')}}"></script>
<script src="{{asset('frontend/js/line-chart.js')}}"></script>
<script src="{{asset('frontend/js/datedropper.min.js')}}"></script>
<script src="{{asset('frontend/js/emojionearea.min.js')}}"></script>
<script src="{{asset('frontend/js/animated-skills.js')}}"></script>
<script src="{{asset('frontend/js/jquery.MultiFile.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
</body>
</html>