<!DOCTYPE html>
<html lang="en">
    <head>
         @include('shared.head')
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to to the body tag
    to get the desired effect
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition sidebar-mini">
        
        @include('shared.sidebar')
        @stack('cssContent')
        @yield('content')
        @include('layout.footer')

    </body>