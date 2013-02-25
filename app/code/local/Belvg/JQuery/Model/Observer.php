<?php
/**
 * @package jQuery Library.
 * @author: A.A.Treitjak
 * @copyright: 2012 - 2013 BelVG.com
 */

class Belvg_JQuery_Model_Observer
{
    /**
     * Added jQuery library.
     *
     * @param Varien_Event_Observer $observer
     *
     * @return string
     */
    public function prepareLayoutBefore(Varien_Event_Observer $observer)
    {
        if (!Mage::helper('jquery')->isEnabled()) {
            return $this;
        }

        /* @var $block Mage_Page_Block_Html_Head */
        $block = $observer->getEvent()->getBlock();

        if ("head" == $block->getNameInLayout()) {
            foreach (Mage::helper('jquery')->getFiles() as $file) {
                $block->addJs(Mage::helper('jquery')->getJQueryPath($file));
            }
        }

        return $this;
    }
}
