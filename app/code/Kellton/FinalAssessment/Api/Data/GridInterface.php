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
     * Get ID.
     *
     * @return int
     */
    public function getId();
    /**
     * Set ID.
     */
    public function setId($id);
    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName();
    /**
     * Set Name.
     */
    public function setName($name);
   
}