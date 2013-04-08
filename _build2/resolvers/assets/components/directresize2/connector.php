<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';

//$quipCorePath = $modx->getOption('quip.core_path',null,$modx->getOption('core_path').'components/quip/');
//require_once $quipCorePath.'model/quip/quip.class.php';
//$modx->quip = new Quip($modx);

$modx->lexicon->load('directresize2:default');

