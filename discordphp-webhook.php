<?php
	Class xTechHooks {
		/* Main variables */
		public $HookUrl = '';
		public $BotName = '';
		public $Message = '';
		public $TTS = false;
		public $Avatar = '';
		public $ThumbUrl = '';
		public $ThumbHeight = '';
		public $ThumbWidth = '';


		public function DiscordPost($embeds = null) {
			$user["username"] = $this->BotName;
			$user["avatar_url"] = $this->Avatar;
			$user["content"] = $this->Message;
			$user["tts"] = $this->TTS;
			$hookURL = $this->HookUrl;
			if(isset($embeds)) {
				$user["embeds"] = $embeds;
			}
			if(!isset($this->HookUrl)) {
				echo "<b><font color='red'>Error: Missing the HookUurl variable or null.";
				exit(0);
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
		    return $var[$num] = $e;
		}
		public function PushAuthor($num = 0, $name = null, $url = null, $icon_url = null) {
			$var = array();
			$obj = array("name" => $name, "url" => $url, "icon_url" => $icon_url);
		    $e = array("author" => $obj);
		    return $var[$num] = $e;
		}
		public function PushFooter($num = 0, $text = null, $icon_url = null) {
			$var = array();
			$obj = array("text" => $text, "icon_url" => $icon_url);
		    $e = array("footer" => $obj);
		    return $var[$num] = $e;
		}
		public function PushLink($url = null, $title = null, $desc = null) {
			if(!isset($this->ThumbUrl)) {
				$obj = array("url" => $url, "title" => $title, "description" => $desc);
			} else {
				$thumb["url"] = $this->ThumbUrl;
				$thumb["height"] = ($this->ThumbHeight != null ? $this->ThumbHeight : 64);
				$thumb["width"] = ($this->ThumbWidth != null ? $this->ThumbWidth : 64);
				$obj = array("url" => $url, "title" => $title, "description" => $desc, "thumbnail" => $thumb);
			}
		    return $obj;
		}
	} // End of xTechHooks class.
?>
