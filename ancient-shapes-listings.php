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
                        <li class="menu_item"><p>Title:</p>Open Mic at the Onion</li>
                        <li class="menu_item"><p>When:</p>Mon, Jan 29</li>
                        <li class="menu_item"><p>Where:</p>Lethbridge </li>
                        <li class="menu_item"><p>Category:</p>Folk </li>
                        <li class="menu_item"><p>Time:</p>9 p.m.</li>
                    </ul>
                    <ul class="Venue"><h2>Venue</h2>
                        <li class="menu_item"><p>Venue:</p>Onion Bar and Grill</li>
                        <li class="menu_item"><p>Street:</p>1702 23 Ave North</li>
                        <li class="menu_item"><p>ZIP</p>T1H 5B3</li>
                        <li class="menu_item"><p>City</p>Lethbridge</li>
                        <li class="menu_item"><p>Province:</p>A.B.</li>
                    </ul>
                </div>
                
                <p>Devin Gergel and Evan Herbst host this new open mic at the Onion. So Come on down and play.</p>
                
                <div class="bottem_element"></div>

            </article>
            
            <div class="grid_item item-3">
                <?php include("includes/listings.php"); ?> 
            </div>
            
		</div>
        <?php include('includes/footer.php'); ?>
	</body>
</html>