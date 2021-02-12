<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<!--===============================================================================================-->
<!--===============================================================================================-->
        <link rel="icon" href="images/favicon.ico" type="image/ico" sizes="16x16">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/auth/main.css') }}">
<!--===============================================================================================-->

<style>
    .text-green-600{
        color:#21a52c;
    }
    .text-red-600{
        color:red;
    }
</style>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="http://www.stop-retour.com/images/img-01.png" alt="IMG">
                </div>
                @yield('form')
			</div>
		</div>
	</div>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/auth/select2.min.js') }}"></script>
<script src="{{ asset('js/auth/tilt.jquery.min.js') }}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="{{ asset('js/auth/main.js') }}"></script>
@yield('js')
</body>
</html>
