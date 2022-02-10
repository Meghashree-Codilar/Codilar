<?php

namespace Codilar\Brand\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class OnSaleAppendToProductCollection implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
//        /** @var \Magento\Catalog\Model\ResourceModel\Product\Collection $collection */
//        $collection = $observer->getEvent()->getData('collection');
//        /** @var \Magento\Catalog\Model\Product $product */
//        foreach ($collection as $product) {
//            $name = $product->getName();
//            $price = $product->getPrice();
//            if ($price <= 1000) {
//                $name .= ' (offer!!!)';
//                $product->setName($name);
//            }
//        }
    }
}
