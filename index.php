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
    <nav id="sidebar" class="sidebar">
        <div class="container-fluid text-center my-3">
            <img class="profile-pic rounded w-50 mb-2" src="icons/1.png" alt="Imagen">
            <h4 class="name-surname">Brayam Valero</h4>
            <p class="licence-type">Licencia Estandar</p>
            <button class="btn btn-sm btn-secondary edit-settings">Editar</button>
        </div>
        <div class="container-fluid border py-3">
            <h6 class="name-surname">Options</h6>
            <a href="#"><i class="fas fa-palette"></i> Lorem, ipsum. </a>
            <a href="#"><i class="fas fa-palette"></i> Lorem, ipsum. </a>
        </div>
    </nav>

    <!-- Content -->
    <div id="content">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary p-3">

            <!-- Form -->
            <form class="w-100">
                
                <!-- Add Todo Row -->
                <div class="form-row mb-3">
                    <div class="col-lg-10 col-md-9 col-sm-12 btn-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-main" type="button">
                                    <i class="fas fa-star "></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 mt-2 mt-md-0">
                        <button class="btn btn-main btn-block">Add</button>
                    </div>
                </div>

                <!-- Tags & Options -->
                <div class="form-row">
                    <!-- Tags -->
                    <!-- mt-2 mt-md-0 -->
                    <div id="tags" class="col-lg-8 col-md-12 col-sm-12">
                        <span class="tag bg-dark">Mañana, 15 de Marzo del 2020.</span>
                        <span class="tag bg-dark">15Lorem, ipsum.</span>
                        <span class="tag bg-dark">15Lorem, ipsum.</span>
                        <span class="tag bg-dark">15Lorem, ipsum.</span>
                    </div>
                    <!-- Options -->
                    <div id="options" class="col-lg-4 col-md-12 col-sm-12 mt-3 mt-md-0 text-right">
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="far fa-calendar-alt"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-list"></i>
                        </a>
                        <a tabindex="0" class="btn btn-sm btn-main ml-1" role="button" data-placement="bottom" data-html="true" data-toggle="popover" data-trigger="focus" data-content="Content">
                            <i class="fas fa-palette"></i>
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