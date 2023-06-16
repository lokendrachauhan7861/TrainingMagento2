<?php

namespace SimplifiedMagento\FirstModule\Plugin;

use \Magento\Catalog\Model\Product;

class PluginSolution 
{
   // public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
   // {
   //    echo "before executive sort order 10"."<br>";
   // }

   // public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
   // {
   //    echo "after executive sort order 10"."<br>";
   // }

   // public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed)
   // {
   //    echo "before  procced sort order 10"."<br>";
   //    $proceed();
   //    echo "after  procced sort order 10"."<br>";

   // }


  public function beforeSetName(Product $subject, $name)
  {
    return "Before Plugin ". $name; 
  }
  public function afterGetName(Product $subject, $result)
  {
    return " KFC ". $result; 
  }

// public function aroundGetIdBySku(Product $subject, callable $proceed, $sku)
// {
//  echo "before proceed"."</br>";
//  $id = $proceed($sku);
//  echo $id ."</br>";
//  echo "after proceed";
//  return $id;
// }
//    public function aroundGetName(Product $subject, callable $proceed)
//    {
//     echo "before proceed"."</br>";
//     $name = $proceed();
//     echo $name ."</br>";
//     echo "after proceed";
//     return $name;
//    }
}