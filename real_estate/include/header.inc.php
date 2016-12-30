<?php include 'title.inc.php';?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Real Estate <?php echo '{$title}';?></title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/slide.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.3.min.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>
    <script src="js/slide.js" type="text/javascript" data-library="jquery" data-version="1.11.3"></script>
    <script src="js/jssor.slider-22.0.15.mini.js" type="text/javascript" data-library="jssor.slider.mini" data-version="22.0.15"></script>

</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <ul id="small-dev">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="faqs.php">FAQs</a></li>
            </ul>
            <img src="../img/logo.png" alt="image logo">
            <h1><span>REAL </span> ESTATE</h1>
            <p>Cheap and nice view</p>
            <p class="login">Login as: <a href="#">Demon Warlock</a></p>
        </div><!--End logo-->
        <div id="banner">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
                    <div data-p="112.50">
                        <img data-u="image" src="../img/002.jpg" />
                        <div data-u="caption" data-t="0" style="position:absolute;top:320px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">mobile ready, touch swipe</div>
                    </div>
                    <div data-p="112.50" style="display:none;">
                        <img data-u="image" src="../img/007.jpg" />
                        <div data-u="caption" data-t="1" data-3d="1" style="position:absolute;top:-50px;left:125px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.5);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">time lined layer animation</div>
                    </div>

<!--                    <div data-p="112.50" style="display:none;">-->
<!--                        <img data-u="image" src="img/010.jpg" />-->
<!--                        <div data-u="caption" data-t="10" data-3d="1" style="position:absolute;top:25px;left:100px;width:250px;height:250px;z-index:0;background-color:rgba(40,177,255,0.6);">-->
<!--                            <div style="margin: 15px; font-size: 20px;">-->
<!--                                <p>This is full customized content layer.<br />-->
<!--                                </p>-->
<!--                                <p>-->
<!--                                    Everything is allowed-->
<!---->
<!--                                </p>-->
<!--                                You can put-->
<!---->
<!--                                <a href="http://wwww.jssor.com">-->
<!--                                    a link-->
<!--                                </a> or an image-->
<!---->
<!--                                <img src="img/icon_chrome.png" /> here.-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider</a>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
                    <div data-u="prototype" style="width:12px;height:12px;"></div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
            </div>
            <!-- #endregion Jssor Slider End -->
        </div><!--End banner-->
        <div id="navBar">
            <?php $currentpage = basename($_SERVER["SCRIPT_NAME"]);?>
            <ul class="mainNar">
                <li><a href="index1.html"<?php if($currentpage =='index1.php'){echo 'id="here"';}?>>Home page</a></li>
                <li><a href="Tutorials.php">Tutorial</a></li>
                <li><a href="css.php">Css &raquo;</a>
                    <ul>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Tips and tricks</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </li>
                <li><a href="html.php">HTML</a></li>
                <li><a href="wordpress.php">Wordpress</a>
                    <ul>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Tips and tricks</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Recent</a></li>
                <li><a href="contact.php">Contact</a>

            </ul>
        </div><!--End navBar-->
    </div><!--End Hear-->