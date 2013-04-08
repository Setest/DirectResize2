<?php
$events = array();

$events['OnWebPagePrerender'] = $modx->newObject('modPluginEvent');
$events['OnWebPagePrerender']->fromArray(array(
    'event' => 'OnWebPagePrerender',
    'priority' => 0,
    'propertyset' => 0
),'',true,true);

return $events;