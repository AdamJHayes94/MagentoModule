<?php

namespace Adam\Orders\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Order extends AbstractModel implements IdentityInterface
{

    const CACHE_TAG = 'adam_orders_order';

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init('Adam\Orders\Model\ResourceModel\Order');
    }

    /**
     * @return string[]
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
