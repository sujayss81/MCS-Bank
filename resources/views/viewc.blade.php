<!DOCTYPE html>
<html>
<head>
	<title>MCS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/viewm.css')}}">
</head>
<body>
	<table id="dtBasicExample" class="table table-bordered table-hover table-striped">
		<thead>
			<th>Membership Number</th>
			<th>Name</th>
			<th>Aadhar Number</th>
			<th>Hospital</th>
			<th>Disease Name</th>
			<th>Disease Code</th>
			<th>Admission Date</th>
			<th>Discharge Date</th>
			<th>Claim Amount</th>
			<th>Sanctioned Amount</th>
		</thead>
		@foreach($res as $item)
		<tbody>
			<td>{{$item->mem_no}}</td>
			<td>{{$item->name}}</td>
			<td>{{$item->aadhar}}</td>
			<td>{{$item->hname}}</td>
			<td>{{$item->dname}}</td>
			<td>{{$item->dcode}}</td>
			<td>{{$item->doa}}</td>
			<td>{{$item->dod}}</td>
			<td>{{$item->amt}}</td>
			<td>{{$item->bamt}}</td>
		@endforeach
	</table>
	<div class="text-center">
    	<button onclick="back()" class="btn btn-primary">Back</button>
    </div>
	<script type="text/javascript">
		function back(){
        window.location.href = '/home';
    }
		$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
	</script>
</body>
</html>
