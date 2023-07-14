<?php

namespace Kellton\Assignment2OR3\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
	
		if (!$installer->tableExists('appointment')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('appointment')
			)
				->addColumn(
					'id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
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
					'firstname',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable => false'],
					'First Name'
				)
				->addColumn(
					'lastname',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					[],
					'Last Name'
				)
				->addColumn(
					'email',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					'255',
					[],
					'Email'
				)
				->addColumn(
					'dob',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					40,
					[],
					'DOB'
				)
				->addColumn(
					'created_at',
					\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
					null,
					['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
					'Created At'
				)->addColumn(
					'updated_at',
					\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
					null,
					['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
					'Updated At')
				->setComment('Form Table');
			$installer->getConnection()->createTable($table);

		
		}
		
		
		$installer->endSetup();
	}
	
}