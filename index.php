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
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary p-3">

            <!-- Form -->
            <form class="w-100">
                
                <!-- Add Todo Row -->
                <div class="form-row">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <input type="text" class="form-control" placeholder="Add new Todo">
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 mt-2 mt-md-0">
                        <button class="btn btn-main btn-block">Add</button>
                    </div>
                </div>

                <!-- Tags & Options -->
                <div class="form-row pt-3">
                    <!-- Tags -->
                    <!-- mt-2 mt-md-0 -->
                    <div id="tags" class="col-lg-7 col-md-12 col-sm-12">
                        <span class="tag mt-1 bg-dark">Mañana, 15 de Marzo del 2020.</span>
                        <span class="tag mt-1 bg-dark">15Lorem, ipsum.</span>
                        <span class="tag mt-1 bg-dark">15Lorem, ipsum.</span>
                        <span class="tag mt-1 bg-dark">15Lorem, ipsum.</span>
                    </div>
                    <!-- Options -->
                    <div id="options" class="col-lg-5 col-md-12 col-sm-12 mt-2 mt-md-0 text-right">
                        <a tabindex="0" class="btn btn-sm btn-main" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-user"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-user"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-user"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-user"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-user"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>

            </form>
            <!-- End of Form -->

        </nav>
        <!-- End of Navbar -->
   
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