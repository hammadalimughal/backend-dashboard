<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/favicon.png" />
    <!-- <link href="css/bootstrap.css.map" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/bootstrap.min.css.map" rel="stylesheet" type="text/css"> -->
    <!-- <link href="css/animate.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/slick.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/slick-theme.css" /> -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/jqueryscripttop.css" />
    <link rel="stylesheet" href="css/mdtimepicker.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <link rel="stylesheet" href="css/jquery.select.css" />
    <!-- <link rel="stylesheet" href="css/fancybox.css" /> -->
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="header-content">
                <div class="header-left">
                    <a class="nav-toggler collapsed" href="javascript:;"><i class="fa-regular fa-sliders"></i></a>
                    <h4>Dashboard</h4>
                </div>
                <div class="header-right">
                    <ul class="header-right-ul">
                        <!-- <li class="list-item">
                            <a href="javascript:;">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <div class="search-cont">
                                <form action="">
                                    <div class="search-bar">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li> -->
                        <li class="list-item drp-men">
                            <a class="new-not" data-bs-toggle="collapse" href="#notification-container" role="button"
                                aria-expanded="false" aria-controls="notification-container">
                                <i class="fa-sharp fa-solid fa-bell"></i>
                            </a>
                            <div class="collapse not-cont" id="notification-container">
                                <ul>
                                    <li><a href="javascript:;">notification 01</a></li>
                                    <li><a href="javascript:;">notification 02</a></li>
                                    <li><a href="javascript:;">notification 03</a></li>
                                    <li><a href="javascript:;">notification 04</a></li>
                                    <li><a href="javascript:;">notification 05</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-item profile-menu">
                            <a data-bs-toggle="collapse" href="#profile-drp" role="button" aria-expanded="false"
                                aria-controls="profile-drp">
                                <img src="images/profile.jpg" alt="">
                                <i class="fa-solid fa-caret-down"></i>
                            </a>
                            <div class="collapse not-cont" id="profile-drp">
                                <ul>
                                    <li><a href="javascript:;">Profile</a></li>
                                    <li><a href="javascript:;">Setting</a></li>
                                    <li><a href="javascript:;">Log Out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="main-container">
            <nav class="side-nav mini-sidebar">
                <a class="brand-name" href="index.html">
                    <span class="short-content">OST</span>
                    <span class="full-content">One Source Tech</span>
                </a>
                <ul>
                    <li>
                        <a href="index.html">
                            <span class="short-content"><i class="fa-solid fa-chart-pie"></i></span>
                            <span class="full-content">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="timeline.html">
                            <span class="short-content"><i class="fa-solid fa-list-timeline"></i></span>
                            <span class="full-content">Timeline</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms.html">
                            <span class="short-content"><i class="fa-regular fa-memo-pad"></i></span>
                            <span class="full-content">Forms</span>
                        </a>
                    </li>
                </ul>
            </nav>