<!DOCTYPE html>
<html>
<head>
	<title>MCS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
</head>
<body>
	<a onclick="logout();" class="btn btn-danger">Logout</a>
	<div class="container">
		<!--  -->
		<div class="col-12">
			<button onclick="register();" class="btn btn-info">Member Registration</button>

			<button onclick="clreg();" class="btn btn-secondary">Add Claimants</button>

			<button onclick="viewmem();" class="btn btn-warning">View Members</button>

			<button onclick="viewcl();" class="btn btn-success">View Claimants</button>
		</div>
	</div>

	<script type="text/javascript">
		function register(){
			window.location.href = '/registration';
		}
		function clreg(){
			window.location.href = '/registration/claimants'
		}
		function viewmem(){
			window.location.href = '/view/members'
		}
		function viewcl(){
			window.location.href = '/view/claimants'
		}
		function logout(){
			var res = confirm("Are you Sure??");
			if(res == true){
				window.location.href = '/home/logout';
			}
		}

	</script>
</body>
</html>