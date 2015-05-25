<?php
    include"php/script.php";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>FreeFly</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    
    <script src="js/modernizr.custom.js"></script>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div class="pseudo">
        <?php
session();
        ?>
    </div>
    <div class="container">
        <header class="clearfix">
            <img id="logo" src="img/logo.png"/>
            <div id="name">
                
                <span style="font-size:50px; text-shadow: 8px 9px 7px rgba(150, 148, 127, 1); ">FreeFly </span>
            </div>
           
            
        </header>
       
        <div class="main">
       
            <nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
                <div class="cbp-hsinner">
                    <ul class="cbp-hsmenu">
                        <?php
                            reaction();
                        ?>
                       
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <script src="js/cbpHorizontalSlideOutMenu.min.js"></script>
    <script>
        var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
    </script>
