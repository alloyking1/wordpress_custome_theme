<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">

    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
    
    <!-- pull in style for plugins -->
    <?php wp_head(); ?>
    <!-- Favicon -->
    <link href="<?php bloginfo('template_directory') ?>/theme/assets/img/brand/favicon.png" rel="icon" type="image/png">
    
</head>

<body id="particles-js">

    <header class="header-global container">
        <!-- <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="./index.html">
                <img alt="image" src="./assets/img/brand/white.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="./index.html">
                        <img alt="image" src="./assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        </button>
                    </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-ui-04 d-lg-none"></i>
                        <span class="nav-link-inner--text">Components</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl">
                        <div class="dropdown-menu-inner">
                        <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                            <i class="ni ni-spaceship"></i>
                            </div>
                            <div class="media-body ml-3">
                            <h6 class="heading text-primary mb-md-1">Getting started</h6>
                            <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                            </div>
                        </a>
                        <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                            <i class="ni ni-palette"></i>
                            </div>
                            <div class="media-body ml-3">
                            <h6 class="heading text-primary mb-md-1">Foundation</h6>
                            <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for Argon.</p>
                            </div>
                        </a>
                        <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                            <i class="ni ni-ui-04"></i>
                            </div>
                            <div class="media-body ml-3">
                            <h5 class="heading text-warning mb-md-1">Components</h5>
                            <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                            </div>
                        </a>
                        </div>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                        <i class="ni ni-collection d-lg-none"></i>
                        <span class="nav-link-inner--text">Examples</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="./examples/landing.html" class="dropdown-item">Landing</a>
                        <a href="./examples/profile.html" class="dropdown-item">Profile</a>
                        <a href="./examples/login.html" class="dropdown-item">Login</a>
                        <a href="./examples/register.html" class="dropdown-item">Register</a>
                    </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
                        <i class="fa fa-facebook-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Facebook</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                        <span class="nav-link-inner--text d-lg-none">Instagram</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                        <i class="fa fa-twitter-square"></i>
                        <span class="nav-link-inner--text d-lg-none">Twitter</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial/argon-design-system" target="_blank" data-toggle="tooltip" title="Star us on Github">
                        <i class="fa fa-github"></i>
                        <span class="nav-link-inner--text d-lg-none">Github</span>
                    </a>
                    </li>
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                    <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                        <i class="fa fa-cloud-download mr-2"></i>
                        </span>
                        <span class="nav-link-inner--text">Download</span>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light navbar-transparen" style="color:blue !important">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url('/') ?>">Whatsup studio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    
                    <!-- <i class="fa fa-bicycle"></i> -->
                    <i class="fa fa-align-center"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar-default">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="javascript:void(0)">
                                    <!-- <img src="<?php bloginfo('template_directory') ?>/../../assets/img/brand/blue.png"> -->
                                    Whatsup studio 
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>


                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="<?php echo site_url('/') ?>">
                                Home
                                <!-- <i class="ni ni-favourite-28"></i> -->
                                <span class="nav-link-inner--text d-lg-none">Discover</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="<?php echo site_url('/works') ?>">
                                Works
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="<?php echo site_url('/contact') ?>">
                                Contact
                            </a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </nav>


        <!-- <div id="logo">LOGO</div>
        <?php wp_nav_menu('primary'); ?> -->
    </header> 
    <canvas class="background"></canvas>
