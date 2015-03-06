<?php
$dev = htmlspecialchars($_GET["dev"]);
$install = htmlspecialchars($_GET["i"]);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

$UserID = substr(md5(microtime()),rand(0,26),10);

if ( strpos($ua,"iphone") || strpos($ua,"ipad") ) {
   if ( strpos($ua,"safari") && $v == "3" ) { // safari on iPhone/iPad with dev perms
      header('Location: http://ichangerapp.com/install.php?v=3', true, 301);
      exit;
   } else if ( strpos($ua,"safari") && $install == "y" ) { // safari on iPhone/iPad with dev perms
      header('Location: http://ichangerapp.com/install.php?id='.$UserID.'', true, 301);
      exit;
   } else if ( substr_count($ua, '/') === 3 ) { //stand alone WebApp on iPhone/iPad
      header('Location: http://ichangerapp.com/mainf7.php', true, 301);
      exit;
   } else if ( substr_count($ua, '/') === 2 ) { //WebView on a iPhone/iPad app
      echo('Unplanned... Contact Devs Please!');
   } else if ( strpos($ua,"safari") ) { // Safari on iPhone/iPad
      header('Location: http://www.thelocken.com/ichangerinfo/?dev=n', true, 301);
      exit;
   } else { //another browser on iPhone/iPad
      echo('<h1>Warning Chrome Dectected, Please Use Safari to Visit or Install iChanger<h1>');
   }
} else { // device other than iPhone/iPad
   header('Location: http://www.thelocken.com/ichangerinfo/', true, 301);
   exit;
}
?>