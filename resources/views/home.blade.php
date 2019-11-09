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
	<button onclick="clreg();">Claimants Registration</button>

	<script type="text/javascript">
		function register(){
			window.location.href = '/registration';
		}
		function clreg(){
			window.location.href = '/registration/claimants'
		}
	</script>
</body>
</html>