<?php

namespace Kellton\FinalAssessment\Setup;

use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
	
		if (!$installer->tableExists('custom_product_review_form')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('custom_product_review_form')
			)->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary'  => true,
                    'unsigned' => true,
                ],
                'Id'
            )->addColumn(
                'product_id',
                Table::TYPE_INTEGER,
                20,
                ['nullable => false'],
                'Product Id'
            )->addColumn(
                'customer_id',
                Table::TYPE_INTEGER,
                20,
                [],
                'Customer Id'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Name'
            )->addColumn(
                'email',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Email'
            )->addColumn(
                'contact_no',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Contact Nomber'
            )->addColumn(
                'product_description',
                Table::TYPE_TEXT,
                '2M',
                ['nullable' => false],
                'Product Description'
            )->addColumn(
                'product_rating',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Product Rating'
            )->addColumn(
                'created_at',
                Table::TYPE_TIMESTAMP,
                null,
                [
                    'nullable' => false,
                    'default' => Table::TIMESTAMP_INIT,
                ],
                'Creation Time'
            )->addColumn(
                'update_time',
                Table::TYPE_TIMESTAMP,
                null,
                [],
                'Modification Time'
            )->setComment(
                'Review Custom Table'
            );
    
            $installer->getConnection()->createTable($table);

		
		}
		
		
		$installer->endSetup();
	}
	
}