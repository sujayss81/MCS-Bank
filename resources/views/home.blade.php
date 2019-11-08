<!DOCTYPE html>
<html>
<head>
	<title>MCS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
</head>
<body>
	<button onclick="register();">Registration</button>
	<button>View All Registrations</button>
	

	<script type="text/javascript">
		function register(){
			window.location.href = '/registration';
		}
	</script>
</body>
</html>