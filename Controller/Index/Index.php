<?php

namespace Magerm\Demo\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $location = $this->getRequest()->getParam('location', 'Mainz');

        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $result->setHeader('X-Magerm', 'Stammtisch ' . $location); // not escaped -> only demo
        $result->setData(['magerm' => 'Ist super toll!']);

        return $result;
    }
}