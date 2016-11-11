<?php

	Class xTechHooks {
		/* Main variables */
		public $HookUrl = '';
		public $BotName = '';
		public $Message = '';
		public $Avatar = '';

		public function DiscordPost($embeds = null) {
			$user["username"] = $this->BotName;
			$user["avatar_url"] = $this->Avatar;
			$user["content"] = $this->Message;
			$hookURL = $this->HookUrl;
			if(isset($embeds)) {
				$user["embeds"] = $embeds;
			}
		    $curl = curl_init($hookURL);
		    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($user));
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		    return curl_exec($curl);
		}
		public function PushImage($num = 0, $url = null, $height = null, $width = null) {
			$var = array();
			$obj = array("url" => $url, "height" => $height, "width" => $width);
		    $e = array("image" => $obj);
		    $var[$num] = $e;
		    return $var[$num] = $e;
		}
		public function PushLink($url = null, $title = null, $desc = null, $thumb = null) {
			if(!isset($thumb)) {
				$obj = array("url" => $url, "title" => $title, "description" => $desc);
			} else {
				$obj = array("url" => $url, "title" => $title, "description" => $desc, "thumbnail" => $thumb);
			}
		    return $obj;
		}
	} // End of xTechHooks class.
?>
