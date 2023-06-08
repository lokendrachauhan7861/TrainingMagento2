<?php

namespace Company\Module\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\Company\Module\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '0.1.0', '<')) {
			$data = [
                'firstname'         => "Lokendra",
                'lastname' => "Chauhan",
                'email'      => 'lokendra.ideal@gmail.com',
                'dob'         => '09/03/2001'
                
            ];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}