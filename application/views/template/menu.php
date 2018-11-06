<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


        <!-- Top bar start-->
        <div class="top-bar light-blue visible-md visible-lg">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>info@materialize.com</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i> +01 123 456 78</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div>
        <!-- Top bar end-->
  

        <!--header start-->
        <header id="header" class="tt-nav nav-border-bottom">

            <div class="header-sticky light-header ">

                <div class="container">

                   

                    <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="<?=base_url();?>" class="logo-brand">
                            <img class="retina" src="<?=base_url('template/assets/img/logo.png');?>" alt=""/>
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">

                            <?php if($url=='' OR $url=='home') { ?>
                                <li class="active">
                            <?php } else { ?>
                            <li>
                            <?php } ?>
                            <a href="<?=base_url();?>">Home</a>
                            </li>

                            
                            <li><a href="javascript:void(0)">Information</a>
                                <ul class="dropdown">
                                    <li><a href="<?=base_url('home/how-to-use');?>">How to Use</a></li>
                                    <li><a href="<?=base_url('home/about');?>">About</a></li>
                                    <li><a href="<?=base_url('home/contact');?>">Contact</a></li>
                                    <li><a href="<?=base_url('home/sitemap');?>">Sitemap</a></li>
                                </ul>
                            </li>

                            

                            <?php if($url=='login' OR $url=='register' OR $url=='reset') { ?>
                                <li class="active">
                            <?php } else { ?>
                                <li>
                            <?php } ?>
                                <a href="javascript:void(0)">Log In / Register</a>
                                <ul class="dropdown">
                                    <li><a href="<?=base_url('login');?>">Log In</a></li>
                                    <li><a href="<?=base_url('register');?>">Register</a></li>
                                    <li><a href="<?=base_url('reset');?>">Reset Password</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>
        </header>
        <!--header end-->
        <!--header end-->