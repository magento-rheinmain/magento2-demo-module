<?php
/**
 * @copyright Copyright (c) 1999-2017 netz98 GmbH (http://www.netz98.de)
 *
 * @see PROJECT_LICENSE.txt
 */

namespace Magerm\Demo\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;

abstract class AbstractSchema
{
    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     */
    protected function installUnicornTable(SchemaSetupInterface $setup)
    {
        $table = $setup->getConnection()
            ->newTable($setup->getTable('magerm_unicorns'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Stock Id'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'The name of the unicorn'
            )
            ->setComment('A bunch of unicorns');

        $setup->getConnection()->createTable($table);
    }
}