<?php

// get current Site:

$site = Craft::$app->sites->getCurrentSite()->handle

  
// is devMode enabled?
  
$ifDevMode = Craft::$app->config->getGeneral()->devMode,
