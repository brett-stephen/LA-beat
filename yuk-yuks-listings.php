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
                        <li class="menu_item">
                            <p>Title:</p>
                            <div class="detail">Yuk Yuks Comedy with Crackerz the Clown, Lori Ferguson-Ford and host Randy Webb</div>
                        </li>
                        <li class="menu_item"><p>When:</p><div class="detail">Fri, Feb 2</div></li>
                        <li class="menu_item"><p>Where:</p><div class="detail">Lethbridge</div></li>
                        <li class="menu_item"><p>Category:</p><div class="detail">Comedy</div></li>
                        <li class="menu_item"><p>Time:</p><div class="detail">8:30 p.m.</div></li>
                    </ul>
                    <ul class="Venue"><h2>Venue</h2>
                        <li class="menu_item"><p>Venue:</p><div class="detail">Average Joe's Sports Bar/ Joe's Garage</div></li>
                        <li class="menu_item"><p>Street:</p><div class="detail">420 - 6 Street South</div></li>
                        <li class="menu_item"><p>ZIP</p><div class="detail">T1J 2B8</div></li>
                        <li class="menu_item"><p>City</p><div class="detail">Lethbridge</div></li>
                        <li class="menu_item"><p>Province:</p><div class="detail">A.B.</div></li>
                    </ul>
                </div>
                
                <p>Cover:$15
                    <br>
                    Lethbridge, AB. - On Friday February 2nd the Yuk Yuk’s Comedy Club Tour takes its regular turn in Joe’s Garage. Host Randy Webb will once again introduce two super comedy acts. Opening is Crackerz The Clown. He dresses like a clown, looks like a clown and acts like a clown in fact you could say he “clowns around”. If you are one of those people who is afraid of clowns this may not be your cup of tea.
                    The evening’s headliner is Lori Ferguson-Ford. Lori is a comedy pro who has been doing stand-up for 20 years. She has appeared on stages all across Canada and the US with Yuk Yuk’s, The Laugh Factory and The Comedy Store. She has also appeared many times on television on CBC, CTV and The Comedy Network. Lori does not disappoint.
                    The entertainment starts at 8:30 P.M. Advance tickets are $15.00 and can be purchased on line at www.thejoe.ca or at Average Joe’s Sports Bar, 420 -6th street south. Tickets the day of the show will be $20.00. For more information or to book a table call Average Joe’s at 403-942-2563. 
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