<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sugar Bug Tracker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://bootswatch.com/simplex/bootstrap.min.css">
    {{ HTML::style('css/main.css'); }}
  </head>
  <body>
    <div class="navbar navbar-default">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img class="logo" src={{asset('images/logo.png')}} alt="Logo"></a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>{{ link_to('/bugs/', "All Bugs") }}</li>
          <li>{{ link_to('/bugs/create', "Create New Bug") }}</li>
        </ul>
      </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    {{ HTML::script('js/underscore.js'); }}
    {{ HTML::script('js/backbone.js'); }}
    {{ HTML::script('js/main.js'); }}
  </body>
</html>
