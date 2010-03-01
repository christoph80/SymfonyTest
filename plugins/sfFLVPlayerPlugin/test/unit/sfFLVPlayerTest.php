<?php

require_once(dirname(__FILE__).'/../../test/bootstrap/unit.php');


require_once($sf_symfony_lib_dir.'/config/sfConfig.class.php');
require_once($sf_symfony_lib_dir.'/util/sfYaml.class.php');
include(dirname(__FILE__).'/../../config/config.php');

$pluginName = 'sfFLVPlayerPlugin';
$pluginDir = SF_ROOT_DIR.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.$pluginName;

require_once($pluginDir.'/lib/helper/sfFLVPlayerHelper.php');


$sf_FLVPlayer_web_dir = sfConfig::get('sf_FLVPlayer_web_dir');
$web_dir = SF_ROOT_DIR.DIRECTORY_SEPARATOR.'web'.$sf_FLVPlayer_web_dir;



// clearing the cache before checking files existence.
clearstatcache();

$t = new lime_test(6, new lime_output_color());

$t->diag('sfFLVlayer Plugin Unit test');

$t->diag('Checking web dir content');
$t->ok(is_dir($web_dir), 'the sf_FLVPlayer_web_dir directory exists');

$t->ok(is_file($web_dir.sfConfig::get('sf_FLVPlayer_player')), 'the player file exist in sf_FLVPlayer_web_dir directory');
$t->ok(is_file($web_dir.'flv_config_multi.txt'), 'the file flv_config_multi.txt exist in sf_FLVPlayer_web_dir directory');
$t->ok(is_file($web_dir.'flv_config_multi.xml'), 'the file flv_config_multi.xml exist in sf_FLVPlayer_web_dir directory');


$settings = sfYaml::load(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'settings.yml');
$modules = $settings['all']['.settings']['enabled_modules'];

$found = false;

for ($index = 0; $index < sizeof($modules); $index++) {
	if (!strcasecmp($modules[$index],'sfFLVPlayerTest')) {
		$found = true;
		break;
	}
}

$t->is($found,true,'Module sfFLVPlayerTest is enabled in settings.yml');

?>
