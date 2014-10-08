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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
	$(".loader").fadeOut("slow");
    })
  </script>
	  <div class="loader"></div>
        <div class="navbar">
          <div class="navbar-inner">
			      <div class="left sliding"><a href="mainf7.php<?php print $uend; ?>" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">iChanger 2 - Instagram</div>
            <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through">
          <div data-page="index-1" class="page">
            <div class="page-content">
		<div class="content-block-title">Instagram Icons</div>
		<div class="list-block media-list">
			<ul>
				<li>
					<a href="" class="already-istalled open-popover link item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/Instagram/InstagramDefault.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Default</div>
								<div class="item-after">Installed</div>
							</div>
							<div class="item-subtitle">Instagram</div>
							<div class="item-text">Instagram's Default Icon. This icon is here to show you the side by side comparison</div>
						</div>
					</a>
				</li>
				
			<!--</ul>
			<ul>-->
				<li>
					<a href="http://ichanger.tk/uriref.php?a=Instagram&p=Flat&pe=.png&n=Instagram&ur=instagram://app" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/Instagram/Flat256.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Flat and Simple</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Instagram</div>
							<div class="item-text">Flat and Simple designed by Unknown</div>
						</div>
					</a>
				</li>
				
			<!--</ul>
          
          
          
          
          
          
          
			<ul>-->
				<li>
					<a href="http://ichanger.tk/uriref.php?a=Instagram&p=FlatGradient2.png&n=Instagram&ur=instagram://app" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/Instagram/FlatGradient.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Flat and Gradient Instagram</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Instagram</div>
							<div class="item-text">Flat Gradient Instagram is part of the Flat Gradient Social Icons pack</div>
						</div>
					</a>
				</li>
				
			<!--</ul>
            <ul>-->
          
				<li>
					<a href="http://ichanger.tk/uriref.php?a=Instagram&p=maximal.png&n=Instagram&ur=instagram://app" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/Instagram/maximal.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Maximal</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Instagram</div>
							<div class="item-text">Like Dislike</div>
						</div>
					</a>
				</li>
              
              
              
              
              
              
              
				<li>
					<a href="http://ichanger.tk/uriref.php?a=Instagram&p=LuminoSquare.png&n=Instagram&ur=instagram://app" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/Instagram/LuminoSquare.png" width="80">
						</div>
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Lumino Square</div>
								<div class="item-after">Install</div>
							</div>
							<div class="item-subtitle">Instagram</div>
							<div class="item-text">Like Dislike</div>
						</div>
					</a>
				</li>
				
              
              
              
              
              
				<li>
					<a href="http://ichanger.tk/uriref.php?a=AppStore&p=light.jpg&n=App%20Store&ur=itms-apps://itunes.apple.com" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/AppStore/lightOLD.png" width="80">
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
					<a href="http://ichanger.tk/uriref.php?a=AppStore&p=lightwinter.JPG&n=App%20Store&ur=itms-apps://itunes.apple.com" class="external item-link item-content">
						<div class="item-media">
							<img src="http://ichanger.tk/AppStore/lightwinter.JPG" width="80">
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


			</ul>

          
		</div>

	</div>
</div>
<script type="text/javascript" src="http://www.ichanger.tk/js/alerts.js?v=2"></script>