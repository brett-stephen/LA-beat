<?php
	$the_title = 'L.A. Beats - About Us';
	$this_Page = "About_us";
    $css_style = "about";?>


<!doctype html>
<html>
	<head>
        <?php include("includes/head.php"); ?>
	</head>
	<body>
        <?php include("includes/header.php"); ?>
        
		<div class="wrap-main">
            <article class="grid_item item-1">
                <div class="header_wrapper"><h2> About Us </h2></div>
                <div class="text_box">
                    <p>
                    L.A. Beat is Lethbridge, Alberta's only online arts and entertainment magazine.
                    It is designed to support music, art, drama and other cultural endeavours in and around the city. <br>

                    It will start out as an online presence and then evolve into a print edition which will be distributed at numerous locations in the city. <br>

                    If you have an event you want L.A. Beat to promote, contact us by e-mail. Look for my Facebook group. Check it for updates about what’s new on L.A. Beat. L.A. Beat is also on Myspace at   myspace.com/labeatlethbridege and on Twitter@LABeatartsmag <br>

                    <br><br> Also, check out L.A. Beat’s Facebook group at https://www.facebook.com/groups/90386746061/
                    
                    <br><br>Myspace page: <a href="www.myspace.com/labeatlethbridge" class="cont_reading"> www.myspace.com/labeatlethbridge </a>

                    <br><br>Flickr: <a href="http://www.flickr.com/photos/labeatlethbridge/" class="cont_reading"> http://www.flickr.com/photos/labeatlethbridge/ </a> 
                    </p>

                    <div class="contact">
                    Contact Editor/Publisher Richard Amery: editor@labeat.ca <br>
                    Submit listings: listings@labeat.ca <br>
                    Reader submissions: submissions@labeat.ca <br>
                    To Advertise:  advertising@labeat.ca <br>
                    Ask Margo: askmargo@labeat.ca 
                    </div>
                </div>
                
            <div class="bottem_element"></div>

            </article>
            
            <div class="grid_item item-3">
                <?php include("includes/listings.php"); ?> 
            </div>
            
		</div>
        <?php include('includes/footer.php'); ?>
	</body>
</html>