<?php

require_once(dirname(__FILE__).'/../../bootstrap/functional.php');


// create a new test browser
$browser = new sfTestBrowser();
$browser->initialize();

$browser->
  get('/sfFLVPlayerTest/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'sfFLVPlayerTest')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/Page Not Found/')
;
