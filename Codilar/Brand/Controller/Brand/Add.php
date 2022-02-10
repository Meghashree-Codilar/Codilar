<?php

namespace Codilar\Brand\Controller\Brand;

use Magento\Framework\App\Action\Action;
use Codilar\Brand\Model\BrandFactory as ModelFactory;
use Codilar\Brand\Model\ResourceModel\Brand as ResourceModel;
use Magento\Framework\App\Action\Context;

class Add extends Action
{
    /**
     * @var ModelFactory
     */
    protected $modelFactory;

    /**
     * @var ResourceModel
     */
    protected $resourceModel;

    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    )
    {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    public function execute()
    {
        $emptyBrand = $this->modelFactory->create();
        $data = $this->getRequest()->getParams();
        $emptyBrand->setName($data['name'] ?? null);
        $emptyBrand->setDescription($data['description'] ?? null);
        $emptyBrand->setIsActive($data['is_active'] ?? 0);
        $this->resourceModel->save($emptyBrand);
        $this->messageManager->addSuccessMessage(__('Brand %1 saved successfully', $emptyBrand->getName()));
        return $this->resultRedirectFactory->create()->setPath('brand/brand/view');
    }
}
