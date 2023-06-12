<?php
namespace Company\Module\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Company\Module\Api\Data\ViewInterface;

class DataExample extends AbstractModel implements ViewInterface, IdentityInterface {

     /**
     * Cache tag
     */
    const CACHE_TAG = 'company_module_dataExample';

    public function _construct(){
        $this->_init("Company\Module\Model\ResourceModel\DataExample");
    }


      /**
     * Get Firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * Get Lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * Get Email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

     /**
     * Get Dob
     *
     * @return string|null
     */
    public function getDob()
    {
        return $this->getData(self::DOB);
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::POST_ID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Set Firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    /**
     * Set Lastname
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

     /**
     * Set Dob
     *
     * @param string $dob
     * @return $this
     */
    public function setDob($dob)
    {
        return $this->setData(self::DOB, $dob);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::POST_ID, $id);
    }


}