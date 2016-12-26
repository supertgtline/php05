
<?php include("include/header.inc.php");?>
<?php include("include/siderbar.php");?>
<div id="primary">
    <div id="welcome">
        <img src="../img/welcome.jpg" alt="welcome">
        <h1><span>Welcome </span>to the Masco service joint stock company</h1>
        <p>Do you want to buy a new house ? COntach we right away .
        </p>
        <ul>
            <li><a href="#">Read More</a></li>
            <li><a href="#">Continue Reading</a></li>
            <li><a href="#">Click here</a></li>
        </ul>
    </div><!--End welcome-->
    <form id="feedback" method="post" action="cntact_us.php">
        <fieldset>
            <legend>
                Contact Us
            </legend>
            <p>
                <label for ="name">Name: </label>
                <input name="name" id="name" type="text" value="">
            </p>
            <p><p>
                <label for ="email">Email: </label>
                <input name="email" id="email" type="text" value="">
            </p>
            <label for ="subject">Subject: </label>
            <input name="subject" id="subject" type="text" value="">
            </p>
            <p>
                <label for ="message">Message: </label>
                <textarea id="message" name="message"></textarea>
            </p>
            <input type="submit" name="submit" id="submit" value="Send Message.">
        </fieldset>
</div><!--End primary-->
<div class="clear"></div>
<?php include("include/footer.inc.php");?>