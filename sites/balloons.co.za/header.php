<?php
    if (isset($_REQUEST['p']) || isset($_REQUEST['page_id']))
    {
        header("HTTP/1.1 301 Moved Permanently"); 
        header("Location: http://www.balloonsjust4u.co.za/");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="author" content="David Thompson">
    <?php 
        if (isset($pageKeywords))
        {
            //echo '<meta name="keywords" content="'.$pageKeywords.'" />';
            echo '<meta name="description" content="'.$pageKeywords.'" />';
        }
        else
        {   ?>
            <meta name="description" content="Suppliers of printed and plain helium quality latex balloons, related balloon accessories, helium gas & décor nationwide to businesses and the public" />
            <?php
        }
    ?>
    <meta name="keywords" content="Balloon Printing, balloons, printed balloons, advertising blimps, inflatables, plain balloons, New Years, Valentines Day, Easter, Mother's Day, Father's Day, Birthdays, Diwali, Christmas, Weddings, Anniversaries, Holidays, Electric air inflators, Manual inflators, Gasregulators, export, import, trade, advertising balloons, latex balloons, balloon functions, One piece and two piece cups and sticks, Silk ribbon, Balloon weights, Speed clips, Pre-coiled ribbons, Heat sealers, advertising, Durban South Africa" />

    <title><?php 
                $thisPageTitle = $pageTitle;
                if (strlen($thisPageTitle) > 0)
                    $thisPageTitle = $thisPageTitle.' | ';
                echo $thisPageTitle; 
            ?> Balloons Just 4 U</title>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link href="/_inc/css/bootstrap.css" rel="stylesheet">
    <link href="/_inc/css/freelancer.css" rel="stylesheet">
    <link href="/_inc/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/_inc/css/ribbon.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <?php include(dirname(__FILE__).'/_google/analytics.php'); ?>
    <link rel="shortcut icon" href="/_inc/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/_inc/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/_inc/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/_inc/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/_inc/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/_inc/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/_inc/icons/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="/_inc/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/_inc/icons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/_inc/icons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/_inc/icons/browserconfig.xml">
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default xnavbar-fixed-top">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/_inc/custom/logo.png" class="visible-lg visible-md" />
                    <img src="/_inc/custom/logosm.png" class="visible-sm visible-xs" />
                </a> 
            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <div id="bs-example-navbar-collapse-1" class="menu-primary-menu-container">
                    <ul id="menu-primary-menu" class="nav navbar-nav navbar-right">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home <?php echo ($pageTitle=='Home') ? 'active' : '' ;?>">
                            <a title="Home" href="/">Home</a>
                        </li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children dropdown">
                            <a title="Our Products" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Our Products <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Plain Balloons') ? 'active' : '' ;?>">
                                    <a title="Plain Balloons" href="/Plain_Balloons">Plain Balloons</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Printed Balloons') ? 'active' : '' ;?>">
                                    <a title="Printed Balloons" href="/Printed_Balloons">Printed Balloons</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Novelty Balloons') ? 'active' : '' ;?>">
                                    <a title="Novelty Balloons" href="/Novelty_Balloons">Novelty Balloons</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Decorating') ? 'active' : '' ;?>">
                                    <a title="Decorating" href="/Decorating">Decorating</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Accessories') ? 'active' : '' ; //current-menu-item ?>">
                                    <a title="Accessories" href="/Accessories">Accessories</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Blimps & Inflatables') ? 'active' : '' ;?>">
                                    <a title="Blimps &amp; Inflatables" href="/Blimps_&_Inflatables">Blimps &#038; Inflatables</a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom  <?php echo ($pageTitle=='Stressballs & Shakers') ? 'active' : '' ;?>">
                                    <a title="Stressballs &amp; Shakers" href="/Stressballs_&_Shakers">Stressballs &#038; Shakers</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?php echo ($pageTitle=='About Us') ? 'active' : '' ;?>">
                            <a title="About Us" href="/About_Us">About Us</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page <?php echo ($pageTitle=='Contact') ? 'active' : '' ;?>">
                            <a title="Contact" href="/Contact">Contact</a>
                        </li>
                    </ul>
                </div>               



               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    

    <div class="ballooncontent container">

<!-- end of header.php -->