<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/stylesheet.css">


</head>


<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{route('adminlogincheck')}}" method="post">
    <h4 style="text-align: center;">{{Session::get('error')}}</h6> <!-- Session variable -->
        @csrf
        <h3>Login Here</h3>

        <label>Email</label>
        <ion-icon name="person-outline"></ion-icon>
        <input type="email" name="email" class="form-control" placeholder="Email">

        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">

        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </form>
</body>

</html>
