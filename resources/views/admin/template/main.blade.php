<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Holi') | Home</title>
	<link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.css') }}">
	<script src = "{{ asset('plugins/js/bootstrap.css') }}"></script>
	<script src = "{{ asset('plugins/jquery/js/jquery-2.2.4.js') }}"></script>
</body>
</head>
<body>
	@include('admin.template.partials.nav')

	<section>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">@yield('ptitle')</h3>
		  </div>
		  <div class="panel-body">
		    @yield('content')
		  </div>
		</div>
	</section>


  <script src = "{{ asset('plugins/jquery/js/jquery-1.12.4.min.js') }}"></script>
	<script src = "{{ asset('plugins/js/bootstrap.js') }}"></script>

</body>
