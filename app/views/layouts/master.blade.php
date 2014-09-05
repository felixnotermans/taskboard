<!DOCTYPE html>
<html>
<head>
	<title>@section('title')
		Taskboard
		@show</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- CSS are placed here -->
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}

	</head>

	<body>

		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					

				</div>
				<div id="navbarCollapse" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">Taskboard <b class="caret"></b></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="../users/taskboard">Add task</a></li>
								<li><a href="#">Edit task</a></li>
								<li class="divider"></li>
								<li><a href="#">Trash</a></li>
							</ul>
						</li>
						<li><a href="#">Profile</a></li>
					</ul>
					<form role="search" class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" placeholder="Search" class="form-control">
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Container -->
		<div class="container">
			@if(Session::has('message'))
			<p class="alert">{{ Session::get('message') }}</p>
			@endif
			{{ $content }}
		</div>

		<!-- Scripts are placed here -->
		{{ HTML::script('js/jquery-1.11.1.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		<script type="text/javascript"
		src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
	</script> 
	<script type="text/javascript"
	src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
	</script>
	<script type="text/javascript"
	src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
	</script>
	<script type="text/javascript"
	src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
	</script>
	<script type="text/javascript">
		$('#datetimepicker2').datetimepicker({
			format: 'dd/MM/yyyy hh:mm:ss',
			language: 'nl'
		});
	</script>
	<script type="text/javascript">
		$('#datetimepicker').datetimepicker({
			format: 'dd/MM/yyyy hh:mm:ss',
			language: 'nl'
		});
	</script>
</body>
</html>