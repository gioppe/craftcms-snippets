<?php
// get environment
$env = Craft::$app->config->env // "dev"
  
// is devMode enabled?
$ifDevMode = Craft::$app->config->getGeneral()->devMode,

// get plugin setting
$var = PluginHandle::getInstance()->settings->varName;
