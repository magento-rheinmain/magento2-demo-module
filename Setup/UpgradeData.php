<?php
/**
 * @copyright Copyright (c) 1999-2017 netz98 GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */

namespace Magerm\Demo\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magerm\Demo\Model\ResourceModel\Unicorn as UnicornResource;
use Magerm\Demo\Model\Unicorn;
use Magerm\Demo\Model\UnicornFactory;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * @var \Magerm\Demo\Model\UnicornFactory
     */
    private $unicornFactory;

    /**
     * @var \Magerm\Demo\Model\ResourceModel\Unicorn
     */
    private $unicornResource;

    /**
     * UpgradeData constructor.
     * @param \Magerm\Demo\Model\UnicornFactory $unicornFactory
     * @param \Magerm\Demo\Model\ResourceModel\Unicorn $unicornResource
     */
    public function __construct(UnicornFactory $unicornFactory, UnicornResource $unicornResource)
    {
        $this->unicornFactory = $unicornFactory;
        $this->unicornResource = $unicornResource;
    }

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var \Magerm\Demo\Model\Unicorn $unicorn */
        $unicorn = $this->unicornFactory->create();
        $unicorn->setName('Klaus');

        $this->unicornResource->save($unicorn);

    }
}