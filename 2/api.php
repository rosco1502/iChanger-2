

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Communiate with clients</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
  <link rel="icon" 
      type="image/png" 
      href="https://cdn.retain.cc/static/1.4.0/img/favicon.png">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
  <link href="https://cdn.retain.cc/static/1.4.0/css/main.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <!-- Setting requirejs baseUrl -->
  <script src="https://cdn.retain.cc/static/1.4.0/scripts/require.js"></script>
  <script src="https://cdn.retain.cc/static/1.4.0/scripts/require-config.js"></script>
  <script>
    require.config({
      baseUrl: "https://cdn.retain.cc/static/1.4.0/scripts/",
      paths: {
        'appConfig': 'https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/config',
        'demoConfig': "https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/demo_config"
      }
    });
  </script>
  <script src="https://cdn.retain.cc/static/1.4.0/dist/main.js"></script>

  <script id="RetainSettingsScriptTag">
  window.retainSettings = {
    user_id: 200,
    email: "thelocken@gmail.com",
    name: "Bradley",
    // TODO: The current logged in user's sign-up date as a Unix timestamp.
    created_at: 1412652576.0,
    app_uid: "fd47d3c296fb4f44a0987288177aae66",
    user_hash: "62cafccf534105068184d5c5c810f0c9efd87aa56f752ac52de81674a2adc013",
    custom_data: {
        app_count: 1
    },
    last_app_id: 238,
    company: {
        id: 238,
        name: "iChanger",
        spending: 0,
        created_at: 1412652695.0,
        sent_auto_message: false,
        sent_manual_message: false,
        received_event_count: 0,
    },
    widget: {
        activator: ".widget-activator"
    }
  };
</script>
<script>var retaincc = retaincc || [];(function(){var w=window;var ic=w.Citofono;if(typeof ic==="function"){ic('reattach_activator');ic('update',retainSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Citofono=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://nightly.retain.cc/app.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}};})()</script>

  
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
  <a class="brand" href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a">Retain.cc</a>
  <div id="nav-wrap">
    <ul class="nav">
      <li class=""><a
        href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/users">Users</a></li>
      <li class=""><a
        href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/companies">Companies</a></li>
      <li class=""><a
        href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/messages/auto">Auto Messages</a></li>
      <li class=""><a
        href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/conversations/agent/200"
        >Inbox</a></li>
      <li class=""><a
        href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/messages/manual">Sent</a></li>
        <li class="dropdown active">
          <a href="https://app.retain.cc/app/3bfbff722f1141d6bc9dddaf4e926f5a/install">
            Install <span class="nav-num">(1/4)</span>
          </a>
        </li>
    </ul>
  </div>
   
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
      <a href="#">
        <span class="question">?</span>
        <span class="got-question">Got questions or feedback?</span>
      </a>
    </li>
    </ul>
  </div>
</div>


  <div id="flash-messages">
  </div>
  <!-- *** BEGIN page content *** -->
  <div class="body-wrap">
  



<header class="jumbotron subhead">
  <div class="container-fluid">
    <div class="install-help">
      <img
        class="user-gravatar"
        src="https://www.gravatar.com/avatar/23c052ac6cc00b48c68261a41e12744f?s=48&d=https%3A%2F%2Fretain-cc.s3.amazonaws.com%2Fstatic%2Favatar.png">
      <p>Have further questions?</p>
      <p><a href="#" class="widget-activator">Ask us directly!</a></p>
    </div>
    <h1>Install retain.cc</h1>
  </div>
</header>

<div class="container-fluid">
<div class="row-fluid">
  <div class="span9">
    <!-- 1: code -->
    <div id="step-1" class="row-fluid">
      <div class="install-step">
        <h2><span class="first-step">1</span> Add the CODE</h2>
        <div class="step-todo">
          <ul>
            <li>Paste this code before <code>&lt;/body&gt;</code> on every page where your users are logged in: <br></li>
          </ul>
          <pre class="prettyprint install-code" rows="12">&lt;script id="RetainSettingsScriptTag"&gt;
    window.retainSettings = {
        // TODO: The current logged in user's email address.
        email: "john.doe@example.com",
        // TODO: The current logged in user's sign-up date as a Unix timestamp.
        created_at: 1234567890,
        app_uid: "3bfbff722f1141d6bc9dddaf4e926f5a"
    };
&lt;/script&gt;
&lt;script&gt;var retaincc = retaincc || [];(function(){var w=window;var ic=w.Citofono;if(typeof ic==="function"){ic('reattach_activator');ic('update',retainSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Citofono=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://cdn.retain.cc/app.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}};})()&lt;/script&gt;</pre>
          <ul>
            <li>Review the <span class="text-info">TODO</span> comments and edit the code if necessary.</li>
            <li>Activate your app by <strong>logging into it in your development environment</strong>.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- page 2 -->
    <div id="step-2" class="row-fluid">
      <div class="install-step">
        <h2><span class="second-step">2</span> Send DATA about your USERS</h2>
        <div class="step-todo">
          <ul>
            <li>You can send us anything and then filter, sort and automatically message users by whatever you send. 
            For data unique to an individual user, send it as user data.</li>
          </ul>
          <pre class="prettyprint install-code" rows="10">
window.retainSettings = {
  ...
  // TODO: Add any extra data you want in Retain.cc to your retainSettings
  "avatar_set" : true,
  "friend_count" : 32,
  "app_id": "3bfbff722f1141d6bc9dddaf4e926f5a"
}</pre>
          <ul>
            <li>Once it's done, <strong>enable secure mode</strong>
              to prevent attackers from impersonating your users
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 3: secure -->
    <div id="step-3" class="row-fluid">
      <div class="install-step">
        <h2><span class="third-step">3</span> Turn on secure mode</h2>
        <div class="step-todo">
          <ul>
            <li>Secure mode prevents an attacker from impersonating your users; without secure mode an attacker could send messages to your app as another user.</p>
            <li><strong>Installing secure mode is mandatory once you enabled.</strong></p>
            <li>
              Secure mode is established by sending a <a href="http://en.wikipedia.org/wiki/Hash-based_message_authentication_code">HMAC SHA256</a> hash of a secret key and the user's user id or email with every request, this hash is referred to as the <span class="text-info">user_hash</span>.
            </p>
            <li>
              <strong>Note:</strong> <em>If you are sending <span class="text-info">user_id</span> you must use it for the <span class="text-info">user_hash</span> instead of <span class="text-info">email</span>.</em>
            </li>
          </ul>
          <hr>
          <ul>
            <li>
              Your app's secret key is <span class="text-info">2e3eb78825ce4a69a21ccdf14abcf5b7</span>
            </li>
            <li>Generate the user_hash on every request with the user id or email address of the current user.</li>
          </ul>
          <pre class="prettyprint install-code" rows="10">&lt;script id="RetainSettingsScriptTag"&gt;
  window.retainSettings = {
      // TODO: The current logged in user's email address.
      email: "john.doe@example.com",
      // TODO: The current logged in user's sign-up date as a Unix timestamp.
      created_at: 1234567890,
      app_uid: "3bfbff722f1141d6bc9dddaf4e926f5a",
      user_hash: "<?php echo hash_hmac("sha256", $user->email, "2e3eb78825ce4a69a21ccdf14abcf5b7"); ?>",
  };
&lt;/script&gt;</pre>
        </div>
      </div>
    </div>

    <!-- 4: team -->
    <div id="step-4" class="row-fluid">
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
    font-weight: buld; /* Whatever styles you want */
}</pre>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="span3 steps">
  <ul>
    <li class="first-step"><a href="#step-1">
          <span class="icon-checkmark"></span>
      <span>Add the Code</span>
    </a></li>
    <li class="second-step"><a href="#step-2">
          <span class="icon-close">&nbsp;</span>
      <span>Send Data about</span><br />
      <span class="list-secondline">your Users</span>
    </a></li>
    <li class="third-step"><a href="#step-3">
          <span class="icon-close">&nbsp;</span>
      <span>Turn on Secure Mode</span>
    </a></li>
    <li class="fourth-step"><a href="#step-4">
          <span class="icon-close">&nbsp;</span>
      <span>Let Users contact you</span>
    </a></li>
  </ul>
  </div>
</div>
</div> <!-- container-fluid -->


  </div>
  <!-- *** END page content ***-->
  
  <footer class="footer"><div class="container-fluid">
    <p>Citonofo</p>
  </div></footer>


  


    <script type="text/javascript">
      heap.identify({
        email: "thelocken@gmail.com",
        name: "Bradley"
      });
    </script>
</body>
</html>













