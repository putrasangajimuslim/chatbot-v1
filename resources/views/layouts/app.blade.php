@extends('layouts.master')

@section('body')
<body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts.inc.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
       @include('layouts.inc.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023  <a href="https://www.bootstrapdash.com/" target="_blank">IT VADS</a>. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  
    <!-- plugins:js -->
    @include('layouts.inc.scripts')
    <!-- End custom js for this page-->
  </body>
  
  </html>
  
@endsection