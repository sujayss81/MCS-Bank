<!DOCTYPE html>
<html>
<head>
	<title>MCS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/claim.css')}}">
</head>
<body>
	<div class="container">
		@if(session('fail'))
			<div class="alert alert-danger">
				{{session('fail')}}
			</div>
		@endif
		@if(session('success'))
			<div class="alert alert-success">
				{{session('success')}}
			</div>
		@endif
		<form method="post" action="/registration/addClaim">
				@csrf
			<div class="col-6 float-left">
				<label>Membership Number</label>
				<input type="number" name="mem_no" class="form-control" required>
				<label>Name</label>
				<input type="text" name="name" class="form-control" required>
				<label>Aadhar Number</label>
				<input type="number" name="aadhar" class="form-control" required>
				<label>Hospital Name</label>
				<input type="text" name="hname" class="form-control" required>
				<label>Disease Name</label>
				<input type="text" name="dname" class="form-control" required>
			</div>
			<div class="col-6 float-left">
				<label>Disease Code</label>
				<input type="number" name="dcode" class="form-control" required>
				<label>Admission Date</label>
				<input type="date" name="doa" class="form-control" required>
				<label>Discharge Date</label>
				<input type="date" name="dod" class="form-control" required>
				<label>Claim Amount</label>
				<input type="number" name="amt" step=".0001" class="form-control" required>
				<label>Sanctioned Amount</label>
				<input type="number" name="bamt" step=".0001" class="form-control" required>
			</div>
			<div class="col-12 float-left text-center">
                <input type="submit" value="Add Record" class="btn btn-primary">
                <a onclick="back()" class="btn btn-primary">Back</a>
            </div>
		</form>
	</div>
<script type="text/javascript">
    function back(){
        window.location.href = '/home';
    }
</script>
</body>
</html>