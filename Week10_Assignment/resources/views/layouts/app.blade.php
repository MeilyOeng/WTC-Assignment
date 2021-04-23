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
   
  <!-- Page Header -->
  @include('includes.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
        @yield('content')
    </div>
  </div>
  <hr>

  <!-- Footer -->
  @include('includes.footer')
  <!-- Bootstrap core JavaScript -->
  @include('includes.scripts')

</body>
</html>
