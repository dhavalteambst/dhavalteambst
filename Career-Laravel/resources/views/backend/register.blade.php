<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{url('assets\css\style.css')}}">
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    
    <div class="sidenav">
        <div class="login-main-text">
           <h2>Career<br> Registration Page</h2>
           <p>Login or register from here to access.</p>
           
        </div>
     </div>
     <div class="main">
      <div class="row ext">      
         <div class="col-md-6 col-sm-12 ">
            <a href="{{url('/')}}/admin/dashboard" class="btn btn-secondary">Back to Dashboard</a>
         </div>
      </div>
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
            <h2>Registration Page</h2>
              <form action="{{url('/admin/register')}}" method="post">
                @csrf
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>   
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                 <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                 </div>
                 <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="User Name" name="username">
                 </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                 </div>
                 <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" id="role" name="role">
                     <option value="1">Subscriber</option>
                     <option value="0">Admin</option>                    
                   </select>                  
               </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                 </div>
                 <button type="submit" class="btn btn-black">Submit</button>  
                 <a href="{{url('/')}}/admin" class="btn btn-secondary">Login</a>
              </form>
             
           </div>
        </div>
     </div>


</body>
</html>