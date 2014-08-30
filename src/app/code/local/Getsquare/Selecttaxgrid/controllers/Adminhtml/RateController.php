<?php

class Getsquare_Selecttaxgrid_Adminhtml_RateController extends Mage_Adminhtml_Controller_Action
{

	public function massDeleteAction()
	    {
	$taxIds = $this->getRequest()->getParam('tax_id');      // $this->getMassactionBlock()->setFormFieldName('tax_id'); from Mage_Adminhtml_Block_Tax_Rate_Grid
	if(!is_array($taxIds)) {
		Mage::getSingleton('adminhtml/session')->addError(Mage::helper('tax')->__('Please select tax(es).'));
	} else {
		try {
			$rateModel = Mage::getModel('tax/calculation_rate');
			foreach ($taxIds as $taxId) {
				$rateModel->load($taxId)->delete();
			}
			Mage::getSingleton('adminhtml/session')->addSuccess(
				Mage::helper('tax')->__(
					'Total of %d record(s) were deleted.', count($taxIds)
					)
				);
		} catch (Exception $e) {
			Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
		}
	}
		$this->_redirectReferer();
	}
}