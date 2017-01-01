<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>T.C. Sağlık Bakanlığı TİG Karar Destek Sistemi</title>

    <link rel="stylesheet" href="{{elixir("css/all.css")}}"/>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>TİG KDS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                @include("partials.menu_profile")
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                @include("partials.sidebar")
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                @include("partials.menu_footer_buttons")
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        @include("partials.top_nav")
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield("content")
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include("partials.footer")
        <!-- /footer content -->
    </div>
</div>

<script src="{{elixir("js/all.js")}}"></script>

</body>
</html>
