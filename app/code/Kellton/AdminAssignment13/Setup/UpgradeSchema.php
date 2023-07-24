<?php
namespace Kellton\AdminAssignment13\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '0.18.0', '<')) {
			$installer->getConnection()->addColumn(
				$installer->getTable( 'kk_grid_records' ),
				'second_title',
				[
					'type' => Table::TYPE_TEXT,
					'nullable' => true,
					'comment' => 'SECOND TITLE'
					
				]
			);
		}



		$installer->endSetup();
	}
}