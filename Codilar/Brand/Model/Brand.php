<?php

namespace Codilar\Brand\Model;

use Magento\Framework\Model\AbstractModel;
use Codilar\Brand\Model\ResourceModel\Brand as ResourceModel;

class Brand extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
