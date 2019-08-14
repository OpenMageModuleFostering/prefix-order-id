<?php
/**
 * Neworderid Model Eav Entity Type
 * 
 * @category     OM
 * @package      OM_Neworderid
 * @copyright    Copyright (c) 2016-2017 OM (http://www.orangemantra.com/)
 * @author       OM (Orange Mantra)  
 * @version      Release: 1.0.0
 * @Class        OM_Neworderid_Model_Eav_Entity_Type
 * 
 */
class OM_Neworderid_Model_Eav_Entity_Type extends Mage_Eav_Model_Entity_Type
{
   public function fetchNewIncrementId($storeId = null)
	{
		$incrementId =  parent::fetchNewIncrementId($storeId); 		
		$preFix      =  Mage::getStoreConfig('neworder_id/general/prefix');
		$incrementId =  $preFix . $incrementId;
		return $incrementId;
	}
}
		