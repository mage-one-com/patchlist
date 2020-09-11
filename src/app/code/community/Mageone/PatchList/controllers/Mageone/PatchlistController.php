<?php

declare(strict_types=1);

class Mageone_PatchList_Mageone_PatchlistController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
}
