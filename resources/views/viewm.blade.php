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
			<th>Member Since</th>
			<th>Address</th>
			<th>Aadhar Number</th>
			<th>Gender</th>
			<th>Mobile</th>
			<th>Category</th>
			<th>Occupation</th>
			<th>Blood Group</th>
			<th>Medical Certificate</th>
			<th>Age</th>
			<th>SB Account Number</th>
		</thead>
		@foreach($res as $item)
		<tbody>
			<td>{{$item->mem_no}}</td>
			<td>{{$item->name}}</td>
			<td>{{$item->dom}}</td>
			<td>{{$item->address}}</td>
			<td>{{$item->aadhar}}</td>
			<td>{{$item->gender}}</td>
			<td>{{$item->mobile}}</td>
			<td>{{$item->category}}</td>
			<td>{{$item->occupation}}</td>
			<td>{{$item->bgroup}}</td>
			<td>{{$item->mc}}</td>
			<td>{{$item->age}}</td>
			<td>{{$item->acc_no}}</td>
		</tbody>
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
