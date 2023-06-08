<?php
namespace Company\Module\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'company_module_form';

	protected $_cacheTag = 'company_module_form';

	protected $_eventPrefix = 'company_module_form';

	protected function _construct()
	{
		$this->_init('Company\Module\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}