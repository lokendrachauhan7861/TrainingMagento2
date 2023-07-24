<?php
/**
 * Grid Grid Collection.
 * @category    Webkul
 * @author      Webkul Software Private Limited
 */
namespace Kellton\AdminAssignment13\Model\ResourceModel\Grid;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    public function _construct(){

        $this->_init("Kellton\AdminAssignment13\Model\Grid","Kellton\AdminAssignment13\Model\ResourceModel\Grid");
        
        }

  
}