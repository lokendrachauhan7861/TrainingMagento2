<?php
/**
 * Webkul_Grid Grid Interface.
 *
 * @category    Webkul
 *
 * @author      Webkul Software Private Limited
 */
namespace Kellton\FinalAssessment\Api\Data;
interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const Name = 'name';
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId();
    /**
     * Set EntityId.
     */
    public function setId($id);
    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName();
    /**
     * Set Title.
     */
    public function setName($name);
   
}