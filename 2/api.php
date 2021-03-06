

<!DOCTYPE html>
<html lang="en">
<head>
  <title>iChanger API - Working With iChanger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
  <link href="https://cdn.retain.cc/static/1.4.0/css/main.css" rel="stylesheet">
  <link href="http://www.ichangerapp.com/ui/API/logo.css?v=3" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <!-- Setting requirejs baseUrl -->
  <script src="https://cdn.retain.cc/static/1.4.0/scripts/require.js"></script>
  <script src="https://cdn.retain.cc/static/1.4.0/scripts/require-config.js"></script>
  <script src="https://cdn.retain.cc/static/1.4.0/dist/main.js"></script>
  <script>
  if(navigator.userAgent.match('CriOS')) {
    //document.write('<meta http-equiv="refresh" content="0;URL='http://example.com/'" />');
    window.location.replace("http://www.ichangerapp.com/chrome.php");
  }
  </script>
  
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>

  <script>
    require(['domReady!', 'flash-view'],
      function (doc, flashView) {
        flashView.render();
      }
    );
  </script>
      <link rel="stylesheet" type="text/css" href="https://cdn.retain.cc/static/1.4.0/css/foundation.joyride.css">
    <script type="text/javascript">
      var heap=heap||[];heap.load=function(a){window._heapid=a;var b=document.createElement("script");b.type="text/javascript",b.async=!0,b.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap.js";var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c);var d=function(a){return function(){heap.push([a].concat(Array.prototype.slice.call(arguments,0)))}},e=["identify","track"];for(var f=0;f<e.length;f++)heap[e[f]]=d(e[f])};
      heap.load("2148301338");
    </script>
</head>
<body class="cit white-bg">
  
<div class="navbar">
  <p><center><a href="http://iChangerapp.com/"><img src="/pics/logo.png" alt="iChanger"></a></center></p>
  <div id="nav-wrap">
    <ul class="nav">
      <li class="dropdown active"><a
        href="#">General</a></li>
      <li class=""><a
        href="#">iPeeps</a></li>
    </ul>
  </div>
   <?php /* <!--
  <div id="nav-app-wrap">
    <ul class="nav">

    <li id="app-drop" class="dropdown">
      <a class="dropdown-toggle"
        data-toggle="dropdown"
        href="#">
        <span class="icon icon-office"></span>
          iChanger
      </a>

      <ul class="dropdown-menu" aria-labelledby="app-drop">
        <li>
          <a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a"
          class="active-app"
          >iChanger</a>
        </li>
        <li class="divider">&nbsp;</li>
        <li>
          <a href="https://app.retain.cc/app/new">Add a new app</a>
        </li>
      </ul>
    </li>

    <li id="user-drop"
      class="dropdown ">
      <a class="dropdown-toggle"
         data-toggle="dropdown"
         href="#">
          <span class="icon icon-info"></span>
          Settings
      </a>
      <ul class="dropdown-menu" aria-labelledby="user-drop">
        <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/account">
          Account
        </a></li>
        <li class="divider">&nbsp;</li>

        <li class="dropdown-subhead">App
          <ul class="dropdown-sublist">
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/basic">
            Basic
          </a></li>
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/account/notification">
            Notification
          </a></li>
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/permissions">
            Team
          </a></li>
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/messaging">
            Messaging
          </a></li>
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/apikeys">
          API keys
          </a></li>
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/data">
          Data
          </a></li>
          </ul>
        </li>


        <li class="divider">&nbsp;</li>

        <li class="dropdown-subhead">Install
          <ul class="dropdown-sublist">
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/install/code">
            The code
          </a></li>
          <li><a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/install/how_it_works">
            How it works
          </a></li>
          </ul>
        </li>

        <li class="divider">&nbsp;</li>
        <li><a href="https://app.retain.cc/auth/logout">
        Logout
        </a></li>
        
      </ul>
    </li>
    <li id="question-mark" class="widget-activator">
      <a href="mailto://techsupport@thelocken.com">
        <span class="question">?</span>
        <span class="got-question">Got questions or feedback?</span>
      </a>
    </li>
    </ul>
  </div>--> */ ?>
</div>


  <div id="flash-messages">
  </div>
  <!-- *** BEGIN page content *** -->
  <div class="body-wrap">
  



<header class="jumbotron subhead">
  <div class="container-fluid">
    <div class="install-help">
      <p>Have further questions?</p>
      <p><a href="mailto://techsupport@thelocken.com" class="widget-activator">Ask us directly!</a></p>
    </div>
    <h1>iChanger iOS API</h1>
  </div>
</header>

<div class="container-fluid">
<div class="row-fluid">
  <div class="span9">
    <!-- 1: code -->
    <div id="step-1" class="row-fluid">
      <div class="install-step">
        <h2><span class="first-step">1</span> Add the Configuration Code</h2>
        <div class="step-todo">
          <ul>
            <li>Add this php code before <code>&lt;head&gt;</code> on the page you want your app to be linked: <br></li>
          </ul> <!-- ?a=Google&p=maximal.png&n=Google&ur=googleapp:// -->
          <pre class="prettyprint lang-html install-code" rows="22">
          &lt;?php
          // -----------------
          // iChanger API v1.0
          // Copyright 2014, TheLocken LLC All Rights Reserved
          // -----------------
          // App Name (example: Google+)
          $appname = 'My API Created App';
          // Folder Icon Is Located At (example: Icons)*
          $iconfolder = 'Icons';
          // Icon Name (example: Picture)
          $iconmain = 'Picture';
          // Icon Extension (example: .png)
          $iconext = '.png';
          // iOS App URLScheme (example: gplus://)
          $appurl = 'gplus://';
          // WebSite Icon is hosted on (example: http://www.google.com/) (Only needed during install)**
          $webhost = 'http://google.com/';
          // Link Text (example: Install My App)
          $aname = 'Click Here To Install My App';
          // Conclusion:
          // ----------
          // This would mean the shortcut would be named "My API Created App"
          // with the icon "Picture.png"
          // Located at http://www.google.com/Icons/Picture.png
          // ----------
          ?&gt;
          </pre>
          <ul>
            <li>*Having the Icon loacted in a folder is a requirement</li>
            <li>**Icon is only needed while installing the Shortcut, iOS will save the icon to its storage (no dynamic icons).</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- page 2 -->
    <div id="step-2" class="row-fluid">
      <div class="install-step">
        <h2><span class="second-step">2</span> Link USERS to the Shortcut/App</h2>
        <div class="step-todo">
          <ul>
            <li>Locate this link where you want your users to find it, customize it all you want but remember to keep <code>href=""</code> the same:</li>
          </ul>
          <pre class="prettyprint lang-html install-code" rows="10">
&lt;!-- iChanger API v1.0 --&gt;
&lt;a id="simClickElement" href="http://www.ichangerapp.com/apicore.php?a=&lt;?php print $url; ?&gt;?n=&lt;?php print $appname; ?&gt;&a=&lt;?php print $iconfolder; ?&gt;&p=&lt;?php print $iconmain; ?&gt;&pe=&lt;?php print $iconext; ?&gt;&ur=&lt;?php print $appurl; ?&gt;&v=&lt;?php print $v; ?&gt;&gplus=&lt;?php print $gplus; ?&gt;"&gt;&lt;?php print $aname; ?&gt;&lt;/a&gt;
          </pre>
          <ul>
            <li>Remember to have <a href="#step-1">STEP 1</a> complete for this to work.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 3: secure -->
    <div id="step-3" class="row-fluid">
      <div class="install-step">
        <h2><span class="third-step">3</span> Automaticly Install App (Optional)</h2>
        <div class="step-todo">
          <ul>
            <li>If you want to automaticly go the the Install page once its loaded add this code after the <code>&lt;head&gt;</code> tag and before the <code>&lt;/head&gt;</code> tag:</p>
          </ul>
          <pre class="prettyprint install-code" rows="10">
&lt;script type=text/javascript"&gt; /* iChanger 1.0 API */ function simClickMain(){var e=document.getElementById("simClickElement");if(e.click){e.click()}else if(document.createEvent){var t=document.createEvent("MouseEvent");t.initEvent("click",true,true);e.dispatchEvent(t)}}&lt;/script&gt;
          </pre>
        </div>
      </div>
    </div>
<?php /*
    <!-- 4: team -->
    <!--<div id="step-4" class="row-fluid">
      <div class="install-step">
        <h2><span class="fourth-step">4</span> Let your users contact you</h2>
        <div class="step-todo">
          <ul>
            <li>Retain.cc lets you put a link in your product that lets your users send you messages. You can use our default style, or customize your own.</li>
          </ul>
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#install-inbox-default" data-toggle="tab">Default style</a></li>
            <li><a href="#install-inbox-custom" data-toggle="tab">Custom style</a></li>
          </ul>

          <div class="tab-content">
            <div id="install-inbox-default" class="tab-pane active">
              <ul>
                <li>The default style shows <img src="https://cdn.retain.cc/static/1.4.0/img/icon.png"> in the bottom right corner of every page that Retain.cc is installed on. You can change the culor in your app settings.</li>
              </ul>
              <ul>
                <li>ADD THIS CODE TO YOUR RETAIN SETTINGS</li>
              </ul>
              <pre class="prettyprint install-code" rows="9">
&lt;script id="RetainSettingsScriptTag"&gt;
    window.retainSettings = {
        ...
        widget: {
            activator: "#RetainDefaultButton",
            title: "Have a question?",
            placeholder: "Leave your message here"
        },
        app_uid: "3bfbff722f1141d6bc9dddaf4e926f5a"
    };
&lt;/script&gt;</pre>              
            </div>

            <div id="install-inbox-custom" class="tab-pane">
              <ul>
                <li>You can fully customize the appearance of the message link using CSS.</li>
              </ul>
              <ul>
                <li>ADD A LINK TO YOUR PRODUCT</li>
              </ul>
              <pre class="prettyprint install-code" rows="1">
&lt;a id=&quot;Citofono&quot;&gt;Support&lt;/a&gt;</pre>
              <ul>
                <li>ADD THIS NEW CODE TO YOUR RETAIN SETTINGS</li>
              </ul>
              <pre class="prettyprint install-code" rows="9">
&lt;script id="RetainSettingsScriptTag"&gt;
  window.retainSettings = {
      ...
      widget: {
          activator: "#Citofono",
          title: "Have a question?",
          placeholder: "Leave your message here"
      },
      app_uid: "3bfbff722f1141d6bc9dddaf4e926f5a"
  };
&lt;/script&gt;</pre>
              <ul>
                <li>ADD THIS NEW CODE TO YOUR RETAIN SETTINGS</li>
              </ul>
              <pre class="prettyprint install-code" rows="3">
#Citofono {
    font-weight: buld; /* Whatever styles you want *
  } </pre>
            </div>
          </div>

        </div>
      </div>
    </div>
--> */ ?>
  </div>
  <div class="span3 steps">
  <ul>
    <li class="first-step"><a href="#step-1">
          <span class="icon-checkmark"></span>
      <span>Add the Configuration Code</span>
    </a></li>
    <li class="second-step"><a href="#step-2">
          <span class="icon-close">&nbsp;</span>
      <span>Link USERS to the Shortcut/App</span><br />
      <span class="list-secondline">your Users</span>
    </a></li>
    <li class="third-step"><a href="#step-3">
          <span class="icon-close">&nbsp;</span>
      <span>Automaticly Install App (Optional)</span>
    </a></li>
    <!--<li class="fourth-step"><a href="#step-4">
          <span class="icon-close">&nbsp;</span>
      <span>Enable iPeep Support</span>
    </a></li>-->
  </ul>
  </div>
</div>
</div> <!-- container-fluid -->


  </div>
  <!-- *** END page content ***-->

</body>
</html>














