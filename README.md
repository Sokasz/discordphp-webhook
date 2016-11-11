# DiscordPHP-Webhook
> Created by: https://xtclabs.net (Joshua Cleland)  
> Version: 1.0  
  
## Join our Discord  
If you need any help at all feel free to join our discord!  
> https://discord.gg/CMtW45h  
  
## Introduction
Handle Discord web hooks. Send image(s), Embed links with thumbnails and detailed descriptions.
This class is not yet setup for composer.
  
## Alternative
xTech Labs offers a widget that you can post on your website  
[xTech Webhook Widget](https://xtclabs.net/widget/webhook/)  
  
**Soon** You will also be able to set predefined messages and hide the iframe to automate  
And also in time our Webhook Manager will allow for Automated Webhook Execution based on date.  
  

## Using DiscordPHP-Webhook
> Posting Image(s)  
```php
<?php
  include 'discordphp-webhook.php';
  $xtc = new xTechHooks();
  // Setup bot information
  $xtc->BotName = "xTc Bot";
  $xtc->Avatar = "https://xtclabs.net/img/favicon.png";
  $xtc->HookUrl = "https://discordapp.com/api/webhooks/...";
  $img[0] = $xtc->PushImage(0, "https://link.to/img", 800, 600);
  $img[1] = $xtc->PushImage(1, "https://link.to/img", 800, 600);
  $xtc->DiscordPost($img);
?>
```
  
> Posting Link with description & Thumbnail.  
```php
<?php
  include 'discordphp-webhook.php';
  $xtc = new xTechHooks();
  $xtc->BotName = "xTc Bot";
  $xtc->Avatar = "https://xtclabs.net/img/favicon.png";
  $xtc->HookUrl = "https://discordapp.com/api/webhooks/...";
  $xtc->ThumbUrl = "https://xtclabs.net/img/favicon.png";
  $xtc->ThumbHeight = 32;
  $xtc->ThumbWidth = 32;
  $link[0] = $xtc->PushLink("https://xtclabs.net", "xTech Labs Official", "Free APIs, Webhook scheduler & AutoGo Personal Discord Bot!");
  $xtc->DiscordPost($link);
?>
```
  
> Posting a Plain Message  
```php
  include 'discordphp-webhook.php';
  $xtc = new xTechHooks();
  $xtc->BotName = "xTc Bot";
  $xtc->Avatar = "https://xtclabs.net/img/favicon.png";
  $xtc->HookUrl = "https://discordapp.com/api/webhooks/...";
  $xtc->Message = "Your Message Here";
  $xtc->DiscordPost();
?>
```
  
> Posting a Author 
```php
  include 'discordphp-webhook.php';
  $xtc = new xTechHooks();
  $xtc->BotName = "xTc Bot";
  $xtc->Avatar = "https://xtclabs.net/img/favicon.png";
  $xtc->HookUrl = "https://discordapp.com/api/webhooks/...";
  $author[0] = $xtc->PushAuthor(0, "Proxy", "https://xtclabs.net", "https://xtclabs.net/img/favicon.png");
  $xtc->DiscordPost($author);
?>
```
  
> Posting a Footer 
```php
  include 'discordphp-webhook.php';
  $xtc = new xTechHooks();
  $xtc->BotName = "xTc Bot";
  $xtc->Avatar = "https://xtclabs.net/img/favicon.png";
  $xtc->HookUrl = "https://discordapp.com/api/webhooks/...";
  $footer[0] = $xtc->PushFooter(0, "Testing the Footer", "https://xtclabs.net/img/favicon.png");
  $xtc->DiscordPost($footer);
?>
```
