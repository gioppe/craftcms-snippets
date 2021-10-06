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


// copy  blocks
use craft\elements\MatrixBlock;

foreach ($entryA->matrixFieldHandle->all() as $matrixBlockA) {
    $matrixBlockB = new MatrixBlock();
    $matrixBlockB->fieldId = $matrixBlockA->fieldId;
    $matrixBlockB->typeId = $matrixBlockA->typeId;
    $matrixBlockB->ownerId = $entryB->id;
    $matrixBlockB->siteId = $entryB->siteId;
    $matrixBlockB->enabled = $matrixBlockA->enabled;
    $matrixBlockB->sortOrder = $matrixBlockA->sortOrder;
    $matrixBlockB->setFieldValues($matrixBlockA->getFieldValues());

    Craft::$app->getElements()->saveElement($matrixBlockB);
}
