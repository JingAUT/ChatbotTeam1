<!DOCTYPE html>
<html>
  <head>
    <title>Chat bot team 1</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/home/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/prototypePre.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/prototypePost.js"></script>
    <script src="files/home/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u0" class="ax_default heading_1">
        <div id="u0_div" class=""></div>
        <div id="u0_text" class="text ">
          <p><span style="font-family:'Gill Sans Ultra Bold Oblique', 'Gill Sans';font-weight:800;font-style:oblique;color:#FF9933;">Course&nbsp; Query</span><span style="font-family:'Arial Negreta', 'Arial Normal', 'Arial';font-weight:700;font-style:normal;">&nbsp; </span></p>
        </div>
      </div>
    </div>
	    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '889309814582765',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v2.12'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
     <div class="fb-messengermessageus" 
          messenger_app_id="889309814582765" 
          page_id="980748105428133"
          color="white"
          size="large">
        </div>
    
    
	<?php
	require __DIR__ . '/vendor/autoload.php';
	
	use Mpociot\BotMan\BotManFactory;
	use Mpociot\BotMan\BotMan;
	use BotMan\BotMan\Drivers\DriverManager;

	$config = [
		'hipchat_urls'=>[
			'YOUR-INTEGRATION-URL-1',
			'YOUR-INTEGRATION-URL-2',
		],
		'facebook_token' => 'EAAMo0pOX7e0BAMzEG1LrKHRkb1LWPo2pO7wuB4lfyE1mNAKUzWhEMyHwGHCbeBSnaqIMjuxKJKlNGyoWWBcBEmaNqH0TT2PGJVprirJZCfUOSqjPRcHstqml5vS05jRTeFEM0WAp4RmBHJ6NvWVHemarIeGG6PcdMf8iZAjgZDZD',
		'facebook_app_secret' => '48c0417c72d6ff6aa0ea81067b366a9f',	
	];

	// Create an instance
	$botman = BotManFactory::create($config);

	$botman -> verifyServices('skfgliwuehrqw342639o5345');
	
	// Give the bot something to listen for.
	$botman->hears('hello', function (BotMan $bot) {
		$bot->reply('Hello yourself.');
	});

	// Start listening
	$botman->listen();
	
	$botman->hears('call me {name}', function ($bot, $name) {
		$bot->reply('Your name is: '.$name);
	});
	
	$botman->hears('Hello BotMan!', function($bot) {
    $bot->reply('Hello!');
    $bot->ask('Whats your name?', function($answer, $bot) {
			$bot->say('Welcome '.$answer->getText());
		});
	});

	$botman->listen();
	
?>
    
    <iframe
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/f0a15ccf-31f6-4105-9e47-08047a7ce001">
    </iframe>
  </body>
</html>


