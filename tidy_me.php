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


// $row->enabled = false;


