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
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>mail@bernand.tech</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i> +82 896 876 106 39 </a>
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

                            <!-- Home Menu -->

                            <?php if($url=='' OR $url=='home') { ?>
                            <li class="active">
                            <?php } else { ?>
                            <li>
                            <?php } ?>
                            <a href="<?=base_url();?>">Home</a>
                            </li>

                            <!-- Home Menu -->



                            <!-- Organizer and Participant Menu -->

                            <?php if($session['level'] == 'Organizer') { ?>

                            <?php if($url=='event') { ?>
                            <li class="active">
                            <?php } else { ?>
                            <li>
                            <?php } ?>
                            <a href="<?=base_url('publish-event');?>">Publish Event</a>

                            <?php } elseif($session['level'] == 'Participant') { ?>

                            <?php if($url=='event') { ?>
                            <li class="active">
                            <?php } else { ?>
                            <li>
                            <?php } ?>
                            <a href="<?=base_url('join-event');?>">Join Event</a>

                            <?php } ?>

                            <!-- Organizer and Participant Menu -->



                            <!-- Information Menu -->
                            
                            <li><a href="javascript:void(0)">Information</a>
                                <ul class="dropdown">
                                    <li><a href="<?=base_url('home/how-to-use');?>">How to Use</a></li>
                                    <li><a href="<?=base_url('home/about');?>">About</a></li>
                                    <li><a href="<?=base_url('home/contact');?>">Contact</a></li>
                                    <li><a href="<?=base_url('home/sitemap');?>">Sitemap</a></li>
                                </ul>
                            </li>

                            <!-- Information Menu -->

                            

                            <!-- Login Register Logout Profil Menu -->

                            <?php if($url=='login' OR $url=='reset') { ?>
                                <li class="active">
                            <?php } else { ?>
                                <li>
                            <?php } ?>

                            <?php if($session['level'] == ''){ ?>
                                <a href="javascript:void(0)">Log In / Register</a>
                                
                                <ul class="dropdown">
                                    <li><a href="<?=base_url('login');?>">Log In</a></li>
                                    <li><a href="<?=base_url('reset');?>">Reset Password</a></li>
                                </ul>
                              <?php } elseif($session['level'] != 'Admin') { ?>
                                <a href="javascript:void(0)" style="text-transform: none;"><?=$session['username'];?></a>
                                <ul class="dropdown">
                                    <li><a href="<?=base_url('logout');?>">Log Out</a></li>
                                    <li><a href="<?=base_url('profile');?>">Profile</a></li>
                                </ul>
                              <?php } else { ?>
                                <a href="javascript:void(0)" style="text-transform: none;"><?=$session['username'];?></a>
                                <ul class="dropdown">
                                    <li><a href="<?=base_url('admin');?>">Panel Admin</a></li>
                                    <li><a href="<?=base_url('logout');?>">Log Out</a></li>
                                </ul>
                              <?php } ?>
                            </li>

                             <!-- Login Register Logout Profil Menu -->

                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>
        </header>
        <!--header end-->
        <!--header end-->