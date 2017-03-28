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

	function nuovaEntry($arr_dati) // title required
	{
		$entry = new EntryModel();
        	$entry->sectionId  = 1;
        	$entry->typeId     = 1;
        	$entry->enabled    = true;
        	$entry->getContent()->setAttributes($arr_dati);
        	$successo = craft()->entries->saveEntry($entry);

		return $successo;
	}

	function trovaIdBlocco( $nome_blocco, $campo_id )
	{
		$tipi = craft()->matrix->getBlockTypesByFieldId($campo_id);
		$blocktype_id = false;
		foreach($tipi as $tipo)
		{
			if($tipo->handle == $nome_blocco) $blocktype_id = $tipo->id;
		}
		return $blocktype_id;
	}

	function eliminaBlocchi($entry_id, $nome_matrix, $locale)
	{
		// ELIMINA tutte le righe di un matrix

		$entry = craft()->entries->getEntryById( $entry_id, $locale );
		$matrix = $entry->$nome_matrix;

		foreach($matrix as $blocco)
		{
			$blocchi_da_cancellare[] = $blocco->id;
		}

		$esito = craft()->matrix->deleteBlockById($blocchi_da_cancellare);
		return $esito;
	}


// $row->enabled = false;


