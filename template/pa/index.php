<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Material Design for Bootstrap fonts and icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <!-- Material Design for Bootstrap CSS -->
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link href='../../css/style.css' rel='stylesheet'>  
    </head>
    <body ng-app='app'>
        <nav class='navbar navbar-expand-lg navbar-light bg-light'>
            <a href='' class='navbar-brand'>
                <img src='../../img/banner.png' style='max-height: 3rem;'>
            </a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#MenuNavbar'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <div class='collapse navbar-collapse' id='MenuNavbar'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a href='http://med.tu.ac.th/webmed/' class='nav-link'><i class='fas fa-home'></i> หน้าแรก</a>
                    </li>
                    <li class='nav-item'>
                        <a href='' class='nav-link'><i class='fas fa-pen'></i> ลงทะเบียน</a>
                    </li>
                    <li class='nav-item'>
                        <a href='../../pdf/Binder1.pdf' class='nav-link' target='_blank'><i class='fas fa-calendar-alt'></i> กำหนดการ</a>
                    </li>
                    <li class='nav-item'>
                        <a href='../../pdf/Scan2.pdf' class='nav-link' target='_blank'><i class='fas fa-file-alt'></i> เอกสารอนุมัติขอตัวเข้าร่วมประชุม</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div ng-view></div>



            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
        <script src='../../../js/angular.min.js'></script>
        <script src='../../../js/angular-route.min.js'></script>
        <script src='../../../js/angular-animate.min.js'></script>
        <script src='../../js/appPA.js'></script>
        <script src='../../js/ctrlPA.js'></script>
    </body>
