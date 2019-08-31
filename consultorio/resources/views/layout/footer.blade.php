    <!-- service close -->
    <div class="footer">
        <!-- footer section start -->
        <div class="container">
            <div class="row ft">
                <div class="col-md-9">
                    <p> © Copyright 2014. All Rights Reserved by Wealth.life </p>
                </div>
                <div class="col-md-3">
                    <p> <a href="#"> <i class="fa fa-facebook-square fa-size social-icon"> </i></a>
                        <a href="#"> <i class="fa  fa-twitter-square  fa-size social-icon"> </i> </a>
                        <a href="#"><i class="fa fa-google-plus-square fa-size social-icon"> </i></a>
                        <a href="#"><i class="fa fa-flickr fa-size social-icon"> </i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-size social-icon"> </i> </a></p>
                </div>
            </div>
        </div>
    </div><!-- footer section close -->

    <!-- Core JavaScript Files -->
    <script src="{{ asset('js/jquery-1.10.2.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/scrolling-nav.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.js')}}"></script>

    <script type="text/javascript">
        $('enviar').click(function(e){
            window.location = 'obrigado';
        });
    </script>

    <script type="text/javascript">
        function enviar(){
            window.location = 'obrigado';
        }
        
    </script>
    <script>
        @yield('scripts')

        $("#owl-demo").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]
        });
    </script>

</body>

</html>