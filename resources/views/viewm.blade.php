<!DOCTYPE html>
<html>
<head>
	<title>MCS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/viewm.css')}}">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<style type="text/css" media="print">
	    button.btn.NonPrintable
	    {
	      display: none;
	    }
 	</style>
 	<script>
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
</head>
<body>
	<button class="btn btn-warning NonPrintable" onclick="printscreen()">Print</button>
	<div class="container-fluid">
	<table id="myTable" class="table table-bordered table-hover table-striped">
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
		<tbody>
		@foreach($res as $item)

			<tr>
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
			</tr>
			
		@endforeach

		</tbody>
	</table>
</div>
	<div class="text-center">
		<button onclick="back()" class="btn btn-primary NonPrintable">Back</button>
	</div>
	<script type="text/javascript">
		function back(){
        window.location.href = '/home';
    }
    function printscreen(){
    	window.print();
    }
	</script>
</body>
</html>
