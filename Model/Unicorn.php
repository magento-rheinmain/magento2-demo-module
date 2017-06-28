<?php
/**
 * @copyright Copyright (c) 1999-2017 netz98 GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */

namespace Magerm\Demo\Model;

use Magento\Framework\Model\AbstractModel;
use Magerm\Demo\Model\ResourceModel\Unicorn as UnicornResource;

class Unicorn extends AbstractModel
{
    protected function _construct()
    {
        parent::_construct();

        $this->_init(UnicornResource::class);
    }

}