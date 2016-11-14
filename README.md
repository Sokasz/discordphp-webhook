# DiscordPHP-Webhook
> Created by: https://xtclabs.net (Joshua Cleland)  
> Version: 1.0  
  
## Join our Discord  
If you need any help at all feel free to join our discord!  
> https://discord.gg/CMtW45h  
  
## Introduction
Handle Discord web hooks. Send image(s), Embed links with thumbnails and detailed descriptions.
  
## Alternative
xTech Labs offers a widget that you can post on your website  
[xTech Webhook Widget](https://xtclabs.net/widget/webhook/)  
  
**Soon** You will also be able to set predefined messages and hide the iframe to automate  
And also in time our Webhook Manager will allow for Automated Webhook Execution based on date.  
  
## Installing DiscordPHP-Webhook
> composer require xtechlabs/discordphp-webhook  
  
## Using DiscordPHP-Webhook 
```php
<?php
  require 'vendor/autoload.php';
	$xtc = new xTechLabs\Hooks\Discord;
	$xtc->HookUrl = "https://discordapp.com/api/webhooks/....";
	// $xtc->BotName = "xtcLabs-";
	$xtc->Message = "Testing some stuff out";
	// Set a single link. (Multiple links aren't supported in this version)
	$xtc->LinkUrl = "https://xtclabs.net";
	$xtc->LinkTitle = "xTech Labs.net";
	$xtc->LinkDesc = "xTech Labs offers numerous amounts of great features and a bot for Discord!";
	// Set a thumbnail. Even though Discord offers the option to change thumb dimensions. it appears to not work.
	$xtc->ThumbUrl = "https://xtclabs.net/img/favicon.png";
	$xtc->ThumbHeight = 16;
	$xtc->ThumbWidth = 16;
	// $xtc->Images[0] = array("url" => "https://xtclabs.net/img/RedDawn_preview.png", "height" => 800, "width" => 600);
	// $xtc->Images[1] = array("url" => "https://xtclabs.net/img/GreenSkull_preview.png", "height" => 800, "width" => 600);
	// $xtc->Test();
	try {
		$xtc->Post();
	} catch(\Exception $e) {
		echo $e->getMessage();
	}
?>
```
