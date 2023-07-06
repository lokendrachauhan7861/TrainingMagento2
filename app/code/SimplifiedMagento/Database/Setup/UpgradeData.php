<?php

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $dataExample;

	public function __construct(\Company\Module\Model\DataExample $dataExample)
	{
		$this->dataExample = $dataExample;
	}
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
        $installer = $setup;
        $installer->startSetup();
		if (version_compare($context->getVersion(), '0.4.0', '<')) {
            $installer->getConnection()->insert(

                $installer->getTable('custome_module_book'),
            [
                'name'         => "shivam",
                'address' => "noida",
                'status'      => '1',
                'phone_number'  => '8810405336'
                
            ]);
		}
        $installer->endSetup();
	}
}