<?php

namespace Codilar\Vendor\Ui\Component;
use Codilar\Vendor\Model\ResourceModel\Vendor\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $collectionFactory
     * @param string $requestFieldName
     * @param array $meta
     * @param array $data
     */

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    )
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
