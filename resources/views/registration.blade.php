<!DOCTYPE html>
<html>
<head>
    <title>MCS</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if(session('fail'))
            <div class="alert alert-danger">{{session('fail')}}</div>
        @endif
        <form method="post" action="/registration/add">
            @csrf
            <div class="col-6 float-left">
                <label for="mem_no">Membership Number</label>
                <input type="number" name="mem_no" class="form-control" required>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
                <label for="dom">Member Since</label>
                <input type="date" name="dom" class="form-control" required>
                <label for="address">Address</label>
                <textarea name="address" class="form-control" rows="6" required></textarea>
                <label>Aadhar Number</label>
                <input type="number" name="aadhar" class="form-control" required>
                <label>Gender</label><br>
                <input type="radio" name="gender" value="male" checked ><span>Male</span>
                <input type="radio" name="gender" value="female"><span>Female</span>
                <input type="radio" name="gender" value="other"><span>Other</span>
            </div>
            <div class="col-6 float-left">
                <label>Mobile</label>
                <input type="number" name="mobile" class="form-control" required>
                <label>Category</label>
                <select name="category" class="form-control" required>
                    <option>APL</option>
                    <option>BPL</option>
                </select>
                <label>Occupation</label>
                <input type="text" name="occupation" class="form-control" required>
                <label>Blood Group</label>
                <select name="bgroup" class="form-control" required>
                    <option>A+</option>
                    <option>A-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                </select>
                <label>Age</label>
                <input type="number" name="age" class="form-control" required>
                <label>SB Account Number</label>
                <input type="text" name="acc_no" class="form-control" required>
                <label>Medical Certificate</label><br>
                <input type="radio" name="mc" value="yes"><span>Yes</span>
                <input type="radio" name="mc" value="no" checked><span>No</span>
            </div>
            <div class="col-12 float-left text-center">
                <input type="submit" value="Add Record" class="btn btn-primary">
                <button onclick="back()" class="btn btn-primary">Back</button>
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