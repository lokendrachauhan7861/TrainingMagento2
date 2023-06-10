<?php

namespace Company\Module\Setup;

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
		$data = [
			'firstname'         => "Lokendra",
			'lastname' => "Chauhan",
			'email'      => 'lokendra.ideal@gmail.com',
			'dob'         => '09/03/2000'
			
		];
		$post = $this->dataExample->create();
		$post->addData($data)->save();
	}
}