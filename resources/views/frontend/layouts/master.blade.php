<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.includes.head')
@yield('addcss')

<body class="home-page home-01 ">
    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>
    
  
        @include('frontend.layouts.includes.header')
        @yield('content')
        
        @include('frontend.layouts.includes.footer')

        
    @include('frontend.includes.script')
</body>

</html>