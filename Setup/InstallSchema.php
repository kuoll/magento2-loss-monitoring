<?php
/**
 * @author Kuoll Team
 * @copyright Copyright (c) 2015 Kuoll Inc. (http://www.kuol.com)
 * @package Kuoll_LossMonitoring
 */

namespace Kuoll\LossMonitoring\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        $table  = $installer->getConnection()
            ->newTable($installer->getTable('kuoll_scriptSettings'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Id'
            )
            ->addColumn(
                'apiKey',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['default' => null, 'nullable' => true],
                'API_KEY'
            )
            ;
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
