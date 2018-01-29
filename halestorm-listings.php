<?php
	$the_title = 'L.A. Beats - Music Listings';
	$this_Page = "Music_Listings";
    $css_style = "listings";?>

<!doctype html>
<html>
	<head>
        <?php include("includes/head.php"); ?>
	</head>
	<body>
        <?php include("includes/header.php"); ?>
        
		<div class="wrap-main">
            <article class="grid_item item-1">
                <div class="header_wrapper"><h2> Listings </h2></div>
                <div class="information">
                    <ul class="Event"><h2>Event</h2>
                        <li class="menu_item"><p>Title:</p>Halestorm with Stone Sour and the Dead Deads</li>
                        <li class="menu_item"><p>When:</p>Thu, Feb 1</li>
                        <li class="menu_item"><p>Where:</p>Enmax Center - Lethbridge</li>
                        <li class="menu_item"><p>Category:</p>Rock</li>
                        <li class="menu_item"><p>Time:</p>7 p.m.</li>
                    </ul>
                    <ul class="Venue"><h2>Venue</h2>
                        <li class="menu_item"><p>Venue:</p>Enmax Center - Website</li>
                        <li class="menu_item"><p>Street:</p>2510 Scenic Dr S</li>
                        <li class="menu_item"><p>ZIP</p>T1K 1N2</li>
                        <li class="menu_item"><p>City</p>Lethbridge</li>
                        <li class="menu_item"><p>Province:</p>A.B.</li>
                    </ul>
                </div>
                
                <p>Tickets: $58, $68

                    Halestorm <a href="http://www.halestormrocks.com"> http://www.halestormrocks.com</a>
                    <br><br>
                    Halestorm is a Red Lion, Pennsylvania based rock band formed in 198 by lead singer/ guitarist Lizzy Hale, her brother Arjay on drums and Josh and Joe Storm on bass and vocals. they have just eleased an album of covers called ReAniMate.
                    <br><br>
                    Band Members:
                    Lzzy Hale - Vocals, Guitar
                    Arejay - Drums
                    Josh Storm - Bass, Vocals
                    Joe Storm - Guitar, Vocals
                    <br><br>
                    ReAniMate 3.0 featuring covers of Metallica, Soundgarden, twenty one pilots, Joan Jett and the Blackhearts, Whitesnake/David Coverdale, and Sophie B. Hawkins is OUT NOW! 
                    <br> <br>   
                    Stone Sour <a href="http://www.stonesour.com">http://www.stonesour.com</a>
                    <br><br>
                    Stone Sour are a Des Moines Iowa based  rock band. including - Corey Taylor - Vocals
                    - Josh Rand - Guitar
                    - Christian Martucci - Guitar
                    - Johny Chow - Bass
                    - Roy Mayorga - Drums 
                </p>
                
                <div class="bottem_element"></div>

            </article>
            
            <div class="grid_item item-3">
                <?php include("includes/listings.php"); ?> 
            </div>
            
		</div>
        <?php include('includes/footer.php'); ?>
	</body>
</html>