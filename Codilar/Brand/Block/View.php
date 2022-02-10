<?php

namespace Codilar\Brand\Block;

use Magento\Framework\View\Element\Template;
use Codilar\Brand\Model\Brand;
use Codilar\Brand\Model\ResourceModel\Brand\CollectionFactory;

class View extends Template
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return Brand[]
     */
    public function getAllBrands()
    {
        $collection = $this->collectionFactory->create();
        $collection->addFieldToFilter('is_active', ['eq' => 1]);
        return $collection->getItems();
    }

    public function getAddUrl()
    {
        return $this->getUrl('brand/brand/add');
    }
}
