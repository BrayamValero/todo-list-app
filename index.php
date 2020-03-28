<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS/Plugins: Bootstrap, Fontawesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/dashboard.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Sidebar -->
    <nav id="sidebar" class="">
        <h5>Lorem ipsum dolor sit.</h5>    
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id odit autem pariatur aliquam sed porro asperiores dolores delectus officia aliquid!</p>
    </nav>

    <!-- Content -->
    <div id="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary px-4 pt-4">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Togger Supported Content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="w-100">
                    <div class="form-row">
                        <!-- Create Todo Input -->
                        <div class="form-group col-md-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-main" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                        <!-- Tags & Options -->
                        <div class="form-group col-lg-7 col-md-7 col-sm-12">
                            <span class="badge badge-dark">Lorem, ipsum.</span>
                            <span class="badge badge-dark">Lorem, ipsum.</span>
                            <span class="badge badge-dark">Lorem, ipsum.</span>
                        </div>

                        <div class="form-group col-lg-5 col-md-5 col-sm-12 text-right">

                            <a tabindex="0" class="btn btn-sm btn-main ml-2" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                                <i class="fas fa-user"></i>
                            </a>
                            <a tabindex="0" class="btn btn-sm btn-main ml-2" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                                <i class="fas fa-user"></i>
                            </a>
                            <a tabindex="0" class="btn btn-sm btn-main ml-2" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                                <i class="fas fa-user"></i>
                            </a>
                            <a tabindex="0" class="btn btn-sm btn-main ml-2" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                                <i class="fas fa-user"></i>
                            </a>
                            
                            <a tabindex="0" class="btn btn-sm btn-main ml-2" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                                <i class="fas fa-user"></i>
                            </a>
                            <a tabindex="0" class="btn btn-sm btn-main ml-2" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                                <i class="fas fa-user"></i>
                            </a>

                        </div>
                    </div>
                </form>
            </div>
            
        </nav>
   
        
    </div>

    <!-- Scripts/Plugins: jQuery, Popper, Bootstrap, Sweetalert2 -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>

    <script>

    // Bootstrap: Enable Tooltips & Popovers
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });

    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
    
    </script>

  </body>
</html>