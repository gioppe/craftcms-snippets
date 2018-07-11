<?php

// load Commerce interface, alias to something not generic as "Plugin"
use craft\commerce\Plugin as CraftCommerce;

// get current Cart

CraftCommerce::getInstance()->getCarts()->getCart();

// get country list

CraftCommerce::getInstance()->getCountries()->getAllCountries()

// Search variants

use craft\commerce\elements\Variant;

$variants = Variant::find()->myField('myValue')->all();

// get current Customer

$customer = CraftCommerce::getInstance()->getCustomers()->getCustomer();
