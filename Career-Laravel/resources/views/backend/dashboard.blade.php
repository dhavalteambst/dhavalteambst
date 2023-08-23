<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{url('assets\css\style.css')}}">
</head>
<body>
    <h1>Hey, <span>{{session('user')}}</span>.</h1>

    <a href="/backend/logout">Logout</a>


    <a href="{{url('/')}}/admin/register" class="btn btn-secondary">Register</a>
</body>
</html>