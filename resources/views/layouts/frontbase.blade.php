<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <link rel="icon" type ="image/x-icon" href="@yield("logo")">
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="Stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
@yield("head")

</head>

<body>
    @include("home.header")
        @section('sidebar')
           
        @show

            @yield('content')

            
        @include("home.footer")
        @yield('foot')
    </body>
</html>