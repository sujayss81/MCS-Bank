<!DOCTYPE html>
<html>
<head>
    <title>MCS</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb/css/mdb.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Sign In</h1>
            </div>
            <div class="card-body">
                <form method="post" action="/auth">
                    @csrf
                    <div class="md-form">
                        <input type="text" name="username" placeholder="Username" required class="form-control">
                        <input type="password" name="password" placeholder="******" required class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Login" class="btn blue-gradient waves-effect">
                    </div>
                </form>
                @if(session('status'))
                    <div class="alert alert-danger">{{session('status')}}</div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>