<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <!--footer 1 start -->
        <footer class="footer footer-one">
            <div class="primary-footer brand-bg">
                <div class="container">
                    <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                      <i class="material-icons">&#xE316;</i>
                    </a>

                    <div class="row">
                        <div class="col-md-3 widget clearfix">
                            <h2 class="white-text">About Connectify</h2>
                            <p>Connectify description.</p>

                            <ul class="social-link tt-animate ltr">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 widget">
                            <h2 class="white-text">Imporant links</h2>

                            <ul class="footer-list">
                                <li><a href="<?=base_url('home/how-to-use');?>">
                                How to Use</a></li>
                                <li><a href="<?=base_url('home/about');?>">About</a></li>
                                <li><a href="<?=base_url('home/contact');?>">Contact</a></li>
                                <li><a href="#">Terms &amp; Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 widget">
                            <h2 class="white-text">Twitter Feed</h2>

                            <div id="twitterfeed" class="twitter-widget-wrapper">
                                <!-- html code injected via javascript -->
                            </div>
                        </div><!-- /.col-md-3 -->


                        <div class="col-md-3 widget">
                            <h2 class="white-text">News Letter Widget</h2>

                            <form>
                              <div class="form-group clearfix">
                                <label class="sr-only" for="subscribe">Email address</label>
                                <input type="email" class="form-control" id="subscribe" placeholder="Email address">
                                <button type="submit" class="tt-animate ltr"><i class="fa fa-long-arrow-right"></i></button>
                              </div>
                            </form>

                            
                            <div class="widget-tags">
                              <h2 class="white-text">Tag Cloud</h2>
                              <a href="#">Material</a>
                              <a href="#">Design</a>
                              <a href="#">Google</a>
                              <a href="#">Gallery</a>
                              <a href="#">Flat Design</a>
                              <a href="#">Clean</a>
                              <a href="#">Portfolio</a>
                            </div><!-- /.widget-tags -->
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer brand-bg darken-2">
                <div class="container">
                    <span class="copy-text">Copyright &copy; <?=date('Y');?> <a href="#">Connectify</a> &nbsp;  | &nbsp;  All Rights Reserved &nbsp;  | &nbsp;  Designed By <a href="#">TrendyTheme</a></span>
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>