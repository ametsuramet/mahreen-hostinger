<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')
@yield('styles')


<body>

@include('frontend.partials.topbar')
@include('frontend.partials.navbar')

    <div id="all">
        <div id="content">
        @yield('content')
        </div>
        <!-- /#content -->
        @include('frontend.partials.footer')
    </div>
    <!-- /#all -->
        @include('frontend.partials.scripts')
        @yield('scripts')

</body>
</html>