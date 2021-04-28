<!DOCTYPE html>
<html lang="en">
<head>

  @include('includes.meta')
  <title>Week 10 Assignment</title>
  <!-- Bootstrap core CSS -->
  @include('includes.css')

</head>
<body>

  <!-- Navigation -->
   @include('includes.menu_nav')
  <!-- Main Content -->
  <div class="container mt-5">
        @yield('content')
  </div>

  <!-- Bootstrap core JavaScript -->
  @include('includes.scripts')

</body>
</html>
