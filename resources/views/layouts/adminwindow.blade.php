<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield("title")</title>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/admin/css/admin.min.css">
  @yield("head")

</head>
<body class="hold-transition sidebar-mini">

  @yield('content')

  @yield('foot')

</body>
</html>