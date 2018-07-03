<?php


// ———————————————————————————
// Get Entries 

$entry = Entry::find();
$entry->section($mySection);
$entry->site($siteHandle);
// chain parameters...
$entry->all();


// ———————————————————————————
// Modify an entry

$entry = Entry::find()->id( $myId )->one();

// Set title

$entry->title = 'New title';

// Set site
$entry->siteId = $newSiteId;

// Set other fields
$fields = [
  'fieldHandle' => $newFieldValue
];
$entry->setFieldValues( $fields );

Craft::$app->getElements()->saveElement( $entry );