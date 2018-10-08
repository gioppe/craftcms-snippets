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

// add lineItem to Cart

// set true on getCart in order to save it and acquire an id
$cart = CraftCommerce::getInstance()->getCarts()->getCart(true);
$lineItem = CraftCommerce::getInstance()->getLineItems()->resolveLineItem($cart->id, $purchasableId, $options, $qty, $notes);
$cart->addLineItem($lineItem);
Craft::$app->getElements()->saveElement($cart);

// Create a new product ———————————————————————————————————————————————————————————

$product = new Product();
$product->typeId = 4;
$product->siteId = 6;
$product->enabled = true;
$product->availableForPurchase = true;
$product->enabledForSite = true;

Craft::$app->getElements()->saveElement($product);
