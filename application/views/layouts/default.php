<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
    <title><?php echo $template['title'];?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="<?php echo base_url() .'static/'?>css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url() .'static/'?>css/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url() .'static/'?>css/menu.css" type="text/css"/>


    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo base_url() . 'static/'?>images/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() . 'static/'?>images/favicon.ico"/>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/imgpreload.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/initstyle.js"></script>



    <link href="http://fonts.googleapis.com/css?family=Cuprum&subset=latin" rel="stylesheet" type="text/css"/>
    <!-- homepage slider -->
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/jquery.effects.core.js"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/carousel.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() . 'static/'?>css/slider.css" type="text/css"/>
    <?php echo isset($template['partials']['script']) ? $template['partials']['script'] : '';?>
</head>
<body>
<div id="bodyout">
    <div class="container">
        <div id="header">
            <h1><a href="<?php echo base_url()?>">2ndStack</a></h1>
            <?php echo isset($template['partials']['mainnav']) ? $template['partials']['mainnav'] : '';?>
            <?php echo isset($template['partials']['secnav']) ? $template['partials']['secnav'] : '';?>
        </div>
        <div id="wrapper">
            <?php echo $template['body'];?>
        </div>
    </div>
</div>
<div id="footerout">
    <div class="container">
        <div id="footer">
            <div id="footer-nav">
                <ul>
                    <li><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div id="copyright">
                &copy; 2ndStack Studio
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</body>
</html>
