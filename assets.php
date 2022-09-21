<?php
use craft\elements\Asset as AssetElement;

// save a new image

$asset = new AssetElement();
$asset->tempFilePath = $tempPath; // physical path to new image
$asset->filename = $filename;
$asset->newFolderId = $folderId;
$asset->volumeId = $volumeId;
$asset->avoidFilenameConflicts = true;
$asset->setScenario(AssetElement::SCENARIO_CREATE);

$out = Craft::$app->getElements()->saveElement($asset);

// associate to entry
$field = Craft::$app->fields->getFieldByHandle('imageFieldHandle');
Craft::$app->relations->saveRelations($field , $entry, $arrayOfAssetIds );

// find physical path
$fsPath = Craft::getAlias($asset->getVolume()->fs->path);
$src = $fsPath . DIRECTORY_SEPARATOR . $asset->getPath();
