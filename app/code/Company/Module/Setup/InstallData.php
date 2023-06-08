<?php

namespace Company\Module\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\Company\Module\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'firstname'         => "Lokendra",
			'lastname' => "Chauhan",
			'email'      => 'lokendra.ideal@gmail.com',
			'dob'         => '09/03/2000'
			
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}