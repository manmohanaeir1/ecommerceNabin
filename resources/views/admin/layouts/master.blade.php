<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.includes.head1')
<body>
    <div class="main-wrapper">

        @include('admin.layouts.includes.header')
        @include('admin.layouts.includes.sidebar')
        <div class="page-wrapper">   
            <!-- this div change the dashboard design -->
            @yield('content')

        </div>

    </div>
    <!-- /Main Wrapper -->
@include('admin.layouts.includes.footer')
@include('admin.layouts.includes.script')
</body>
</html>
