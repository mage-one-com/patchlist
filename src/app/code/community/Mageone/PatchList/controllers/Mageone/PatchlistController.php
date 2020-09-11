<?php

declare(strict_types=1);

class Mageone_PatchList_Mageone_PatchlistController extends Mage_Adminhtml_Controller_Action
{

    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('admin');
    }

    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
}
