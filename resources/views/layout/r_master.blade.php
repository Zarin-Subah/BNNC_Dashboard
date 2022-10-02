<!DOCTYPE html>
<html lang="en">
    <head>
        
        @include('shared.config');
        @include('shared.head');
        
        <link rel="stylesheet" href="redial_progress_chart/css/style.css">
    </head>
    <style> 
        .card-header{
            background-color: #179978;
            color:white;
        }
        .graph-group-heading{
            color:#007bff!important;
            font-size:18px;
            padding:5px 20px;
        }
    </style>
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
        <div class="wrapper">
            @include('shared.sidebar');
            @stack('cssContent')
            @yield('content')
            @include('layout.footer')

    </body>
    </html>
            
            