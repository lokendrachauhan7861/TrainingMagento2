<?php

namespace SimplifiedMagento\FirstModule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
    
    
            $table = $installer->getConnection()->newTable(
                $installer->getTable('product_review')
            )
                ->addColumn(
                    'id', 
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'nullable' => false,
                        'primary'  => true,
                        'unsigned' => true,
                    ],
                    'ID'
                )
                ->addColumn(
                    'product_id',
                    Table::TYPE_INTEGER,
                    20,
                    ['nullable => false'],
                    'Product Id'
                )
                ->addColumn(
                    'user_id',
                    Table::TYPE_INTEGER,
                    20,
                    [],
                    'User Id'
                )
                ->addColumn(
                    'email_id',
                    Table::TYPE_TEXT,
                    255,
                    [],
                    'Email Id'
                )
                ->addColumn(
                    'status',
                    Table::TYPE_TEXT,
                    '255',
                    [],
                    'Status'
                )
                ->addColumn(
                    'created_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                    'Created At'
                )->addColumn(
                    'updated_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                    'Updated At')
                ->setComment('Product Review');
            $installer->getConnection()->createTable($table);

        
        
        
        $installer->endSetup();
    }
    
}