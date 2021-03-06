<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}" ng-app="app">
    <head>
        @include($theme.'-pkg::head')
        @yield('app-head')
    </head>
    <body>
        <div class="main-wrap login">
            @yield('content')
        </div><!-- Main Wrap -->
        @include('themes/'.$theme.'/includes/common/footer')
        @include($theme.'-pkg::js')
        @yield('footer_js')
    </body>
</html>