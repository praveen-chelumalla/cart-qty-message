<?php

    namespace Endaxis\QtyMessage\ViewModel;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class QtyUpdate
 * @package Endaxis\QtyMessage\ViewModel
 */
class QtyUpdate implements ArgumentInterface
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    const CART_ITEM_QTY = 'checkout/cart/cart_qty';
    const CART_ITEM_QTY_MESSAGE = 'checkout/cart/update_message';

    /**
     * QtyUpdate constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return mixed
     */
    public function getQtyUpdateMessage() {
        return $this->getConfigValue(self::CART_ITEM_QTY_MESSAGE);
    }

    /**
     * @param $items
     * @return int
     */
    public function checkQtyMessageCriteria($items) {
        $isDisplayQtyMessage = 0;
        $itemConfigQty = $this->getConfigValue(self::CART_ITEM_QTY);
        if($items) {
            foreach ($items as $item) {
                if($item->getQty() >= $itemConfigQty) {
                    $isDisplayQtyMessage = 1;
                }
            }
        }
        return $isDisplayQtyMessage;
    }

    /**
     * @param $path
     * @return mixed
     */
    public function getConfigValue($path) {
        return $this->scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE);
    }
}
