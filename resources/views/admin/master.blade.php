<!DOCTYPE html>
<html lang="en">
  @include('admin.includes.head')
  <body>
    <div class="container-scroller container-fluid">

      <!-- ADMIN DASHBOARD SIDEPANEL -->
      @include('admin.includes.sidebar')


      <!-- HEADER NAV-BAR -->
      @include('admin.includes.navbar')
      
      <!--BODY CONTENTS BELOW HERE-->
        <div class="main-panel">
            <div class="content-wrapper">
            <!-- 
                BODY STUFF GOES HERE
            -->

            @yield('content')
            
            </div>


        <!-- FOOTER STUFF HERE -->
        @include('admin.includes.footer')
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    <!-- SCRIPTS BELOW HERE -->

    @include('admin.includes.scripts')
  </body>
</html>
