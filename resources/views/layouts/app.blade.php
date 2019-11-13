<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

	<div class="flex-center position-ref full-height">
		<div class="content">
			@include('layouts.nav')
			<div class="op">
				@yield('content')
			</div>
		</div>
	</div>

	<footer class="footer bg-dark">
		@include('layouts/footer')
	</footer>

</body>
</html>
