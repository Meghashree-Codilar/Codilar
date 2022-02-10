<?php

namespace Codilar\Brand\Model\ResourceModel\Brand;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Codilar\Brand\Model\Brand as Model;
use Codilar\Brand\Model\ResourceModel\Brand as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
