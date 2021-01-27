<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link href='../css/style.css' rel='stylesheet'>

    <title></title>
  </head>
  <body ng-app='app'>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-2' style='padding:0;'>
                <nav class='navbar navbar-expand-lg navbar-dark bg-primary sticky-top'>
                    <a class='navbar-brand' href=''>BackOffice</a>
                    <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#navbarBackoffice'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarBackoffice'>
                        <ul class='navbar-nav mr-auto'>
                            <li class='nav-item'>
                                <a href=''></a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <ul class='nav flex-column' style='height: 100vh; background: #fff;'>
                    <li class='nav-item'>
                        <a href='' class='nav-link'>อาหาร</a>
                    </li>
                </ul>
            </div>
            <div class='col-md-10'>
                <div ng-view style='margin-top:10px;'></div>
            </div>

        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src='../../../js/angular.min.js'></script>
    <script src='../../../js/angular-route.min.js'></script>
    <script src='../../../js/angular-animate.min.js'></script>
    <script src='../js/app.js'></script>
    <script src='../js/controller.js'></script>
  </body>
</html>