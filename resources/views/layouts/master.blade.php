<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMS</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand  -->
    <div class="navbar-header">
      

      <a class="navbar-brand" href="{{url('/view')}}">CMS</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('/view')}}">View All</a></li>
      <li><a href="{{url('/add')}}">Add New</a></li>
      <li><a href="{{url('/edit')}}">Edit</a></li>
      <li><a href="{{url('/delete')}}">Delete</a></li>
    </ul>
  </div><!-- /.container -->
</nav>
    <div class="container">
      @yield('content')
    </div>
    <footer>
      <div class="text-center small">&copy; <?php echo date('Y'); ?> CMS
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>