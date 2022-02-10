<?php

namespace Codilar\Brand\Plugin\Model;

use Magento\Catalog\Model\Product as Subject;

class Product
{
    /**
     * @param Subject $subject
     * @param $name
     * @return mixed|string
     */
    public function afterGetName(Subject $subject, $name)
    {
     // $price = $subject->getPrice();
     // if ($price <= 1000) {
         // $name .= ' (on sale)';
       //}
        return $name;
    }
}
