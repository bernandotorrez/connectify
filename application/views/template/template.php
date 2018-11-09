<!DOCTYPE html>
<html>
<head>
  <title><?=WEB_TITLE.' - '. $title;?></title>

  <!-- Meta tag -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="keywords" content="your web keyword">
  <meta name="description" content="your web description">
  <meta name="author" content="Bernand D H">
  <!-- Meta tag -->

  <!-- Place your css here -->
 
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
  <!-- Material Icons CSS -->
  
  <link href="<?=base_url('template/assets/fonts/iconfont/material-icons.css');?>" rel="stylesheet">
  <!-- FontAwesome CSS -->
  <link href="<?=base_url('template/assets/fonts/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <!-- materialize -->
  <link href="<?=base_url('template/assets/materialize/css/materialize.min.css');?>" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="<?=base_url('template/assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- shortcodes -->
  <link href="<?=base_url('template/assets/css/shortcodes/shortcodes.css');?>" rel="stylesheet">
  <!-- Style CSS -->
  <link href="<?=base_url('template/assets/css/shortcodes/login.css');?>" rel="stylesheet">
  <link href="<?=base_url('template/assets/style.css');?>" rel="stylesheet">
  <!-- Place your css here -->
  <!-- RS5.0 Main Stylesheet -->

  <link rel="stylesheet" type="text/css" href="<?=base_url('template/assets/revolution/css/settings.css');?>">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('template/assets/revolution/css/layers.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('template/assets/revolution/css/navigation.css');?>">

   <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body id="top" class="has-header-search">

    <!-- Tampilkan menu -->
    <?php echo $_menu;?>
    <!-- Tampilkan menu -->
  
    <!-- Tampilkan content web -->

    <div id="content">
    <?php echo $_content;?>
    </div>
    <!-- Tampilkan menu -->
    
    <!-- Tampilkan footer -->
    <?php echo $_footer; ?>
    <!-- Tampilkan footer -->

    <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="template/assets/img/logo-colored.png" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader -->

    <!-- Place your js here -->
    <noscript>Please enable yout javaScript!</noscript>
    <script src="<?=base_url('template/assets/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?=base_url('template/assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('template/assets/materialize/js/materialize.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/jquery.easing.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/jquery.sticky.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/smoothscroll.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/imagesloaded.js');?>"></script>
    <script src="<?=base_url('template/assets/js/jquery.stellar.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/jquery.inview.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/jquery.shuffle.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/menuzord.js');?>"></script>
    <script src="<?=base_url('template/assets/js/bootstrap-tabcollapse.min.js');?>"></script>
    <script src="<?=base_url('template/assets/owl.carousel/owl.carousel.min.js');?>"></script>
    <script src="<?=base_url('template/assets/flexSlider/jquery.flexslider-min.js');?>"></script>
    <script src="<?=base_url('template/assets/magnific-popup/jquery.magnific-popup.min.js');?>"></script>
    <script src="<?=base_url('template/assets/js/scripts.js');?>"></script>

    <!-- RS5.0 Core JS Files -->
    <script src="<?=base_url('template/assets/revolution/js/jquery.themepunch.tools.min.js');?>"></script>
    <script src="<?=base_url('template/assets/revolution/js/jquery.themepunch.revolution.min.js');?>"></script>

    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.actions.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.navigation.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.migration.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('template/assets/revolution/js/extensions/revolution.extension.parallax.min.js');?>"></script>

     

        <script>
            $('.toggle').on('click', function() {
              $('.login-wrapper').stop().addClass('active');
            });

            $('.close').on('click', function() {
              $('.login-wrapper').stop().removeClass('active');
            });

        </script>

        <!-- Jquery validation -->
      <?php if($url == 'login') { ?>
        <script type="text/javascript" src="<?=base_url('template/assets/js/login.js');?>">
          
        </script>

        <script type="text/javascript" src="<?=base_url('template/assets/js/register.js');?>">
          
        </script>
      <?php } ?>
      <!-- Jquery validation -->

    <!-- Place your js here -->

</body>
</html>