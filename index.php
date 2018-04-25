<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Chat bot team 1</title>
</head>
<body>
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
    
    <h1>Course query system</h1>
    <p>Contact us through Facebook Messenger: </p>
    
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

</body>
</html>



