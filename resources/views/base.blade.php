<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Address Directory</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 text-center">Email Directory</h1>
      <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
    </div>
  </div>
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
