<?php
// TheLocken iChanger 2 Authentication Handler and Carrier

	// Convert ?user=USERNAME to USERNAME
$user_name = '' . htmlspecialchars($_GET["user"]) . '';
$user_display = '' . htmlspecialchars($_GET["user"]) . '';

	// take username ($userraw) and turn it into ?user=USERNAME

$uend = "?user=$userraw&user_display=$user_display";
$userraw = '' . htmlspecialchars($_GET["user"]) . '';
	
	// if userraw = "" (no user) set userraw to NULL

if ( $userraw == "" ) {
	$userraw = "NULL";
	$user_display = "Not Logged In";
}

?>
  <link rel="stylesheet" href="ui/css/load.css">
  <script src="http://www.lockenfiles.tk/cdn/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
    })
    // <a href="#" id="simClickElement" class="beta-warning">BETA WARNING</a>
  </script>
	  <div class="loader"></div>
        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainf7.php<?php print $uend; ?>" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iChanger 2 - Google+</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
		<div class="content-block-title">Google+ Icons</div>
		<div class="list-block media-list">
			<ul>
				<li>
					<a href="" class="already-istalled open-popover link item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/GPlus/GPlus.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Default</div>
								<div class="item-after">Installed</div>
							</div>
							<div class="item-subtitle">Google+</div>
							<div class="item-text">Google's Default Google+ Icon. This icon is here to show you the side by side comparison</div>
						</div>
					</a>
				</li>
				
			<!--</ul>
			<ul> %2B = + | Google%2B = Google+ -->
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=GPlus&p=flatest.png&n=Google&gplus=yes&ur=gplus://" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/GPlus/flatest.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Flatest</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Google+</div>
							<div class="item-text">Like Dislike</div>
						</div>
					</a>
				</li>
				
			<!--</ul>
          
          
          
          
          
          
          
			<ul>-->
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=GPlus&p=LuminoSquare.png&n=Google&gplus=yes&ur=gplus://" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/GPlus/LuminoSquare.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Lumino Square</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Google+</div>
							<div class="item-text">Like Dislike</div>
						</div>
					</a>
				</li>
				
			<!--</ul>
            <ul>-->
          
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=GPlus&p=LuminoSquare2.png&n=Google&gplus=yes&ur=gplus://" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/GPlus/LuminoSquare2.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Lumino Square 2</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Google+</div>
							<div class="item-text">Like Dislike</div>
						</div>
					</a>
				</li>
              
              
              
              
              
              
              
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=GPlus&p=novusfull.png&n=Google&gplus=yes&ur=gplus://" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/GPlus/novus.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Novus</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Google+</div>
							<div class="item-text">Like Dislike</div>
						</div>
					</a>
				</li>
				
              
              
              
              
              
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=AppStore&p=light.jpg&n=App%20Store&ur=itms-apps://itunes.apple.com" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/AppStore/lightOLD.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Light</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">App Store</div>
							<div class="item-text">AppStore Icon in the Light Icons Pack</div>
						</div>
					</a>
				</li>
              
              
				<li>
					<a href="http://ichangerapp.com/uriref.php?a=AppStore&p=lightwinter.JPG&n=App%20Store&ur=itms-apps://itunes.apple.com" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/AppStore/lightwinter.JPG" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Light Winter</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">App Store</div>
							<div class="item-text">A Light Winter Themed App Store</div>
						</div>
					</a>
				</li>

				<li>
					<a href="http://ichangerapp.com/uriref.php?a=AppStore&p=appstore-round1.png&n=App%20Store&ur=itms-apps://itunes.apple.com" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichangerapp.com/AppStore/appstore-round.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Round Edged AppStore</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">App Store</div>
							<div class="item-text">A Round-Edged AppStore</div>
						</div>
					</a>
				</li>

				<!-- </ul> does not seem to need it, good for including user's custom creations with PHP -->
    
				
			
    
          
          
          
          
		</div>

	</div>
</div>
<script type="text/javascript" src="http://www.ichangerapp.com/js/alerts.js?v=2"></script>