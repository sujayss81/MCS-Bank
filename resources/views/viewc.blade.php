<!DOCTYPE html>
<html>
<head>
	<title>MCS</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/viewm.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/viewm.css')}}">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		function back(){
        window.location.href = '/home';
    }
    function printscreen(){
    	window.print();
    }
	</script>
	<script>
		$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
	<script>
		
	</script>
	<style type="text/css" media="print">
	    button.btn.NonPrintable
	    {
	      display: none;
	    }
 	</style>
</head>
<body>
	<div class="container-fluid col-12">
		<button class="btn btn-warning NonPrintable" onclick="printscreen()">Print</button>
		<!-- <input type="text" id="search" placeholder="Search"> -->
		<!-- <input type="text" id="nameInput" onkeyup="myFunction()" placeholder="Search For Name..."> -->
	</div>
	<div class="container-fluid">
	<table id="myTable" class="table table-bordered table-hover table-striped">
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
		<tbody>
		@foreach($res as $item)

			<tr>
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
			</tr>
		@endforeach

		</tbody>
	</table>
</div>
	<div class="text-center">
    	<button onclick="back()" class="btn btn-primary NonPrintable">Back</button>
    </div>
   
</body>
</html>
