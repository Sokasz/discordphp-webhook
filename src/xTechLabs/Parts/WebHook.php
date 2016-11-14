<?php

namespace xTechLabs\Hooks\Parts;

use xTechLabs\Hooks\Discord;
use xTechLabs\Hooks\WebHookExceptions;

class WebHook {

	public function checkState() {
		if(! isset($this->HookUrl)) {
			throw new WebHookExceptions("The HookURL parameter is missing or Null.");
		}
	}

	public function Connect($params) {
		if(! isset($params)) {
			throw new WebHookExceptions("function Connect() Argument 1 expected array.");
		}
		if(! isset($this->HookUrl)) {
			throw new WebHookExceptions("The HookURL parameter is missing or Null.");
		}
		// echo var_dump($params);
	    $curl = curl_init($this->HookUrl);
	    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_exec($curl);
	    // echo $res;
	}


	public function initUser() {
		$user = array();
		$user["username"] = $this->BotName;
		$user["avatar_url"] = $this->Avatar;
		$user["content"] = $this->Message;
		return $user;
	}
}