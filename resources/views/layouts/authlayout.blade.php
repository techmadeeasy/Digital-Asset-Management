


<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Syndication-bazaar</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

      
        <link rel="shortcut icon" href="{{ asset('assets/css/media/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/css/media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/css/media/favicons/apple-touch-icon-180x180.png') }}">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/media/codebase.min.css') }}">

    </head>
    <body>
   
        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url({{ asset('assets/css/media/photos/photo34@2x.jpg') }});">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white">
                                    Get Inspired and Create.
                                </p>
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy">2017</span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div style="text-align: center;" class="px-30 py-10">
                                    <a class="link-effect font-w700" style="text-align: center;" href="index.php">
                                       <!-- <img src="{{ asset('images/logo.svg') }}" width="200" height="106" onerror="this.onerror=null; this.src='assets/images/logo.png'"> -->
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Welcome to SB portal</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Please sign in</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                @yield('form')
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
           
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset ('assets/js/core/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset ('assets/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset ('assets/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset ('assets/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('assets/js/codebase.js') }}"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signin.js"></script>
    </body>
</html>