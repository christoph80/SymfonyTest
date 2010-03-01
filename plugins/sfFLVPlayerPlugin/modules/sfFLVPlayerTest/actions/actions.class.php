<?php

class sfFLVPlayerTestActions extends sfActions {

	public function executeIndex() {
		// getting the movie
		//$this->movie = sfConfig::get('sf_FLVPlayer_web_dir').'KyodaiNoGilga.flv';
		$this->movie = 'http://download.neolao.com/videos/KyodaiNoGilga.flv';
		$this->config_txt = sfConfig::get('sf_FLVPlayer_web_dir').'flv_config_multi.txt';
		$this->config_xml = sfConfig::get('sf_FLVPlayer_web_dir').'flv_config_multi.xml';

	}

}
?>