<?php

// get current Site:
$site = Craft::$app->sites->getCurrentSite()->handle
  
// get a site
$site = Craft::$app->sites->getSiteByHandle($siteHandle);

// get environment
$env = Craft::$app->config->env // "dev"
  
// is devMode enabled?
$ifDevMode = Craft::$app->config->getGeneral()->devMode,


