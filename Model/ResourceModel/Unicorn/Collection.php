<?php
/**
 * @copyright Copyright (c) 1999-2017 netz98 GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */

namespace Magerm\Demo\Model\ResourceModel\Unicorn;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magerm\Demo\Model\ResourceModel\Unicorn as UnicornResource;
use Magerm\Demo\Model\Unicorn;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        parent::_construct();

        $this->_init(Unicorn::class, UnicornResource::class);
    }

}