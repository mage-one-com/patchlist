<?php

declare(strict_types = 1);

class Mageone_PatchList_Block_Admin_Patchlist extends Mage_Adminhtml_Block_Template
{
    private const PATCHLIST_TEMPLATE = 'mageone/patchlist/patchlist.phtml';

    protected function _construct()
    {
        if (!$this->hasData('template')) {
            $this->setTemplate(self::PATCHLIST_TEMPLATE);
        }

        parent::_construct();
    }

    public function getAllInstalledPatches(): array
    {
        $installedPatches = Mage::getConfig()->getNode('mage-one/patches')->asArray();
        $installedPatches = $this->removeTestPatch($installedPatches);

        return $installedPatches;
    }

    private function removeTestPatch(array $installedPatches): array
    {
        return array_filter(
            $installedPatches,
            static function ($key)
            {
                return !($key === 'test-patch');
            },
            ARRAY_FILTER_USE_KEY);
    }

}
