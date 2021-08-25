<?php

// get current Site:
$site = Craft::$app->sites->getCurrentSite()->handle;

// set current site
Craft::$app->sites->setCurrentSite('siteHandle');
  
// get a site
$site = Craft::$app->sites->getSiteByHandle($siteHandle);

// get a localized entry
{% set localizedEntry = craft.entries.id(entry.id).site('otherSiteHandle').one() %}
