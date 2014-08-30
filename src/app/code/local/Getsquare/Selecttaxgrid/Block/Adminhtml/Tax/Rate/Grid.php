<?php
/**
 *
 *
 * @author  Ross Knight (getsquare.co.uk)
 * @copyright  Copyright (c) 2014 GetSquare
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Getsquare_Selecttaxgrid_Block_Adminhtml_Tax_Rate_Grid extends Mage_Adminhtml_Block_Tax_Rate_Grid
{
	protected function _prepareMassaction()
	{
		$this->setMassactionIdField('tax_calculation_rate_id');
		$this->getMassactionBlock()->setFormFieldName('tax_id');
		$this->getMassactionBlock()->addItem('delete', array(
			'label'=> Mage::helper('tax')->__('Delete'),
			'url'  => $this->getUrl('selecttaxgrid/adminhtml_rate/massDelete', array('' => '')),
			));
		return $this;
	}
}