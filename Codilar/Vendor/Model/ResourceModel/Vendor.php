<?php

namespace Codilar\Vendor\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
/**
 * class Vendor
 *
 * A magento 2 module to have sellers for products
 *
 */
class Vendor extends AbstractDb
{

    const TABLE_NAME = 'codilar_vendor';
    const ID_FIELD_NAME = 'entity_id';

    /**
     *  Here init method takes table, primary key as params
     */
    
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::ID_FIELD_NAME);
    }
}
