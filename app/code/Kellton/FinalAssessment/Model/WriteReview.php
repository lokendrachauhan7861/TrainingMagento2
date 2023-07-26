<?php 
namespace Kellton\FinalAssessment\Model;

use Kellton\FinalAssessment\Api\Data\GridInterface;

class WriteReview extends \Magento\Framework\Model\AbstractModel implements GridInterface{

	  /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'custom_product_review_form';
    /**
     * @var string
     */
    protected $_cacheTag = 'custom_product_review_form';
    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'custom_product_review_form';
    /**
     * Initialize resource model.
     */
	public function _construct(){
		$this->_init("Kellton\FinalAssessment\Model\ResourceModel\WriteReview");
	}

	public function getId()
    {
        return $this->getData(self::ID);
    }
    /**
     * Set EntityId.
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
    /**
     * Set Title.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
}