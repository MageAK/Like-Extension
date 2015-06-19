<?php
 
class Prod_Like_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $productid = $_GET['prod'];
        if($_GET['prod']){
        $_product = Mage::getModel('catalog/product')->load($productid);
       // print_r($_product);die();
         $inc = $_product->getLike();
         $incnew = $inc + 1;
         
        $_product->setLike($incnew);
        $_product->save();
		echo $incnew;die();
        }
    }
 
   }
?>
