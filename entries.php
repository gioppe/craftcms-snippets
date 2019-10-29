<?php

use craft\elements\Entry;

// ———————————————————————————
// Get Entries 

$entry = Entry::find();
$entry->section($mySection);
$entry->site($siteHandle);
$entry->customField('foo');
// chain parameters...
$entry->all();

//———————————————————————————————
// Create a new entry

$new = new Entry;
$new->title = 'myTitle';
$new->sectionId = $sectionId;
$new->typeId = $typeId;
$new->newParentId = $parentId // if needed
$success = Craft::$app->getElements()->saveElement( $new ); 

// Duplicate an entry ———————————————————————————————

$oldEntry = Entry::find()->id($oldId)->one();
Craft::$app->elements->duplicateElement($oldEntry, [
  'fieldName' => 'New value for fieldName',
]);

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

// ———————————————————————————
// Save relationships
// also works for Assets

$relatedEntries = []; // array of ids
$field = Craft::$app->fields->getFieldByHandle('fieldHandle');
Craft::$app->relations->saveRelations($field , $entry, $relatedEntries );
