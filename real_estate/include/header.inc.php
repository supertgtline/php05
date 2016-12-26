<?php include 'title.inc.php';?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Real Estate <?php echo '{$title}';?></title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
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
            <img src="../img/banner.jpg" alt="banner">
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