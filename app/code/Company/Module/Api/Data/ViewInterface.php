<?php
namespace Company\Module\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID         = 'post_id';
    const FIRSTNAME       = 'firstname';
    const LASTNAME        = 'lastname';
    const EMAIL           = 'email';
    const DOB             = 'dob';
    /**#@-*/


    /**
     * Get Firstname
     *
     * @return string|null
     */
    public function getFirstname();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getLastname();

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getDob();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname);

    /**
     * Set Lastname
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname);

    /**
     * Set Email At
     *
     * @param int $email
     * @return $this
     */
    public function setEmail($email);

     /**
     * Set Dob At
     *
     * @param int $dob
     * @return $this
     */
    public function setDob($dob);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}