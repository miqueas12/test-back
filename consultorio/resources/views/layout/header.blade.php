<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
    <meta name="author" content="">
    <title>Wealth.life</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- your favicon icon link -->
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico')}}" type="image/x-icon" />

    <!-- Custom CSS -->
    <style type="text/css">
        @yield('styles')
    </style>
    <script type="text/javascript">
        function enviar(){
            window.location = 'obrigado';
        }
        
    </script>
</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="#page-top">
                        <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
                    </a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden"> <a href="#page-top"></a> </li>
                        <li class=""> <a href="{{ route('site.home') }}#about">APPOINMENT</a> </li>
                        <li class=""> <a href="{{ route('site.home') }}#services">FEATURE</a> </li>
                        <li class=""> <a href="{{ route('site.home') }}#doctor">DOCTOR</a> </li>
                        <li class=""> <a href="{{ route('site.home') }}#contact">CONTACT US</a> </li>
                        <li class="page-scroll social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a> <a href="#"><i class="fa fa-flickr fa-size"> </i> </a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>