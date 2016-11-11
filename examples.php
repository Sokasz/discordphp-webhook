<?php
  include 'discordphp-webhook.php';
  $xtc = new xTechHooks();

  /* Setup xTechLabs variables. */
  $xtc->BotName = "xTc-cTx";
  $xtc->Avatar = "https://xtclabs.net/img/favicon.png";
  $xtc->HookUrl = "your webhook url";
  $xtc->Message = "Testing";

  // PushImage(int, image_url, height, width)
  /* Add Two Images to your message.
      $img[0] = $xtc->PushImage(0, "https://xtclabs.net/img/RedDawn_preview.png", 800, 600);
      $img[1] = $xtc->PushImage(1, "https://xtclabs.net/img/GreenSkull_preview.png", 800, 600);
      $xtc->DiscordPost($img);
  */

  /* Post link with a thumbnail.
    $thumbnail = array("url" => "https://xtclabs.net/img/favicon.png", "height" => 64, "width" => 64);
    $link[0] = $xtc->PushLink("https://xtclabs.net", "xTech Labs Official", "Free APIs, Webhook scheduler & AutoGo Personal Discord Bot!", $thumbnail);
    $xtc->DiscordPost($link);
  */

  /* Send a plain message
    $xtc->DiscordPost();
  */
?>
