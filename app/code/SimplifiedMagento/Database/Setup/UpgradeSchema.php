<?php
namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '0.2.0', '<')) {
			$installer->getConnection()->addColumn(
				$installer->getTable( 'custome_module_book' ),
				'phone_number',
				[
					'type' => Table::TYPE_TEXT,
					'nullable' => false,
					'comment' => 'PHONE NUMBER'
					
				]
			);
		}



		$installer->endSetup();
	}
}