<?php

namespace Adam\Orders\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Order extends AbstractDb
{
    /**
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init('custom_orders', 'id');
    }

}
