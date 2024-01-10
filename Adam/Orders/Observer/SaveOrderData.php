<?php

namespace Adam\Orders\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Adam\Orders\Model\OrderFactory;
use Magento\Sales\Model\Order;

class SaveOrderData implements ObserverInterface
{

    /**
     * @var OrderFactory
     */
    protected OrderFactory $orderFactory;

    public function __construct(OrderFactory $orderFactory)
    {
        $this->orderFactory = $orderFactory;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer): void
    {
        /** @var Order $order */
        $order = $observer->getEvent()->getOrder();
        $customTable = $this->orderFactory->create();

        $customTable->setData('increment_id', $order->getIncrementId());
        $customTable->setData('email', $order->getCustomerEmail());
        $customTable->setData('customer_details', $order->getCustomerName() . ' ' . $order->getShippingAddress()->getCity());
        $customTable->save();
    }
}
