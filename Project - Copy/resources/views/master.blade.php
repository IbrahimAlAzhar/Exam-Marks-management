<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Our Student Management Database</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>

  <body>
    <h1>Student management website</h1>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"> </script>

    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="{{route('index')}}">Products</a></li>
      <li role="presentation"><a href="{{route('index')}}">Home</a></li>
      <li role="presentation"><a href="{{route('create')}}">Create</a></li>
    </ul>



   <div class="container">
    @yield('content')
   </div>

  </body>
</html>
