<?php

namespace SimplifiedMagento\Database\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $dataExample;

	public function __construct(\Company\Module\Model\DataExample $dataExample)
	{
		$this->dataExample = $dataExample;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
        $installer = $setup;
        $table = $installer->getConnection()->insert(

            $installer->getTable('custome_module_book'),
		[
			'name'         => "Lokendra",
			'address' => "Chauhan",
			'status'      => '1 '
			
        ]);

        $installer->endSetup();
	}

    
}