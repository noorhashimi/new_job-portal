<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>HPL | Find Best Jobs</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body data-instant-intensity="mousedown">
@include('main.body.header');
@yield('content')

@include('main.body.footer');

 
<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.5.1.3.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/instantpages.5.1.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lazyload.17.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/lightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote6({
        height: 150
    });
</script>

</body>
</html>