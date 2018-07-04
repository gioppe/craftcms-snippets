<?php

// load Commerce interface, alias to something not generic as "Plugin"
use craft\commerce\Plugin as CraftCommerce;

CraftCommerce::getInstance()->getCountries()->getAllCountries()
