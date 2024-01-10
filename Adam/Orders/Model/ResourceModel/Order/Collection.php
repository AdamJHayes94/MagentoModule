<?php

namespace Adam\Orders\Model\ResourceModel\Order;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * @var string
     */
    protected $_eventPrefix = 'adam_orders_order_collection';

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init('Adam\Orders\Model\Order', 'Adam\Orders\Model\ResourceModel\Order');
    }

}
