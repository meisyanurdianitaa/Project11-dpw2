<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Toko Faeyza</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{url('public')}}/images/loading.gif" alt="#" /></div>
    </div>

    <div class="wrapper">

        <!-- end loader -->
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

               <ul class="list-unstyled components">

                    <li class="active">
                        <a href="{{url('home')}}">Home</a>
                    </li>
                    <li class="">
                        <a href="{{url('shop')}}">Produk</a>
                    </li>
                    

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head_top">
                    <div class="header">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-3 logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="index.blade.php">FAEYZA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right_header_info">
                                        <ul>
                                            <li class="menu_iconb active">
                                                <a href="#"><img style="margin-right: 15px;" src="{{url('public')}}/icon/1.png"
                                                        alt="#" />7213456789</a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="{{url('login')}}">Log in <img style="margin-right: 15px;"
                                                        src="{{url('public')}}/icon/5.png" alt="#" /> </a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="{{url('register')}}">Signup<img style="margin-left: 15px;" src="{{url('public')}}/icon/6.png"
                                                        alt="#" /></a>
                                            </li>
                                            <li class="tytyu active">
                                                <a href="{{url('keranjang')}}"> <img style="margin-right: 15px;" src="{{url('public')}}/icon/2.png"
                                                        alt="#" /></a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="search"><img style="margin-right: 15px;" src="{{url('public')}}/icon/3.png"
                                                        alt="#" /></a>
                                            </li>

                                            <li>
                                                <button type="button" id="sidebarCollapse">
                                                    <img src="{{url('public')}}/images/menu_icon.png" alt="#" />
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end header inner -->


                    <!--coursel-->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="height:500px;">
                            <div class="carousel-item active">
                                <img src="{{url('public')}}/images/sale.png" height="300px" class="d-block w-100" alt="..."> </div>
                            <div class="carousel-item">
                                <img src="{{url('public')}}/images/sale5.png" height="300px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('public')}}/images/sale3.png" height="300px" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                   

                            

                            

                <!-- end Categories -->

                <section>
                   
                </section>

                



                


        </div>

        <div class="overlay"></div>

        <!-- Javascript files-->
        <script src="{{url('public')}}/js/jquery.min.js"></script>
        <script src="{{url('public')}}/js/popper.min.js"></script>
        <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>

        <!-- sidebar -->
        <script src="{{url('public')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{url('public')}}/js/custom.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });

        </script>

        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function () {

                    $(this).addClass('transition');
                }, function () {

                    $(this).removeClass('transition');
                });
            });

        </script>
        <script>
            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                });

                var image = 'images/maps-and-flags.png';
                var beachMarker = new google.maps.Marker({
                    position: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                    map: map,
                    icon: image
                });
            }

        </script>
        <!-- google map js -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
        </script>
        <!-- end google map js -->
</body>

</html>
