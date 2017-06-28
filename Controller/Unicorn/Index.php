<?php
/**
 * @copyright Copyright (c) 1999-2017 netz98 GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */

namespace Magerm\Demo\Controller\Unicorn;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magerm\Demo\Model\UnicornFactory;

class Index extends Action
{
    /**
     * @var \Magerm\Demo\Model\UnicornFactory
     */
    private $unicornFactory;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magerm\Demo\Model\UnicornFactory $unicornFactory
     */
    public function __construct(\Magento\Framework\App\Action\Context $context, UnicornFactory $unicornFactory)
    {
        parent::__construct($context);

        $this->unicornFactory = $unicornFactory;
    }


    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        $unicornCollection = $this->unicornFactory->create()->getCollection();

        $data = [];

        foreach ($unicornCollection as $unicorn) {
            $data[] = [
                'name' => $unicorn->getName()
            ];
        }

        $result->setData($data);

        return $result;
    }
}