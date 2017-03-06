<?php
namespace Craft;


	function saveFields($entry_id, $arr_dati)
	{
		//$arr_dati = array('nomecampo'=> 'valore', ...)

		$entry = craft()->entries->getEntryById( $entry_id );
		$entry->setContent($arr_dati);
		$success = craft()->entries->saveEntry($entry);
		return $success;

	}

	function saveRelationship($entry_id, $campo_id, $arr_id_correlati)
	{
		$entry = craft()->entries->getEntryById( $entry_id );
		$campo = craft()->fields->getFieldById( $campo_id );

		// $arr_id_correlati = array(id, id, etc)
		craft()->relations->saveRelations( $campo , $entry, $arr_id_correlati );
	}

	function saveBlock($entry_id, $nome_campo, $blocktype_nome, $arr_dati)
	{
		$block = new MatrixBlockModel();
		$campo_id = craft()->fields->getFieldByHandle($nome_campo)->id;
		$block->fieldId = $campo_id;
		$block->ownerId = $entry_id;
		$block->typeId  = $this->trovaIdBlocco($blocktype_nome, $campo_id);

		$block->getContent()->setAttributes($arr_dati);

		$successo = craft()->matrix->saveBlock($block);
		return $successo;
	}


// $row->enabled = false;


