<?php

class Getsquare_Selecttaxgrid_Block_Adminhtml_Tax_Rate_Grid extends Mage_Adminhtml_Block_Tax_Rate_Grid
{
	protected function _prepareMassaction()
	{
	$this->setMassactionIdField('tax_calculation_rate_id');
	$this->getMassactionBlock()->setFormFieldName('tax_id');
	$this->getMassactionBlock()->addItem('delete', array(
    	'label'=> Mage::helper('tax')->__('Delete'),
    	'url'  => $this->getUrl('selecttaxgrid/adminhtml_rate/massDelete', array('' => '')),        // public function massDeleteAction() in Mage_Adminhtml_Tax_RateController
    	'confirm' => Mage::helper('tax')->__('Are you sure?')
	));
	return $this;
	}
}