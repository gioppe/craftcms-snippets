<?php
use craft\elements\MatrixBlock;

// delete a block

Craft::$app->elements->deleteElement($block);


// new block

$matrixField = Craft::$app->fields->getFieldByHandle('matrixFieldHandle');
$blockTypes  = Craft::$app->getMatrix()->getBlockTypesByFieldId( $matrixField->id );

$block = new MatrixBlock;
$block->fieldId = $matrixField->id;
$block->ownerId = $entry->id; 
$block->typeId  = $blockTypes[ $blockIndex ]->id;  // Fix this...
$block->ownerSiteId = $ownerSiteId;
$block->siteId = $siteId;

		$block->setFieldValues([
			'nome'      => 'ciaoFR2',
			'valore'    => 'fooFR',
			'unita'     => 'barFR',
			'normativa' => 'quezFR'
		]);

$success = Craft::$app->getElements()->saveElement( $block, true, false );
