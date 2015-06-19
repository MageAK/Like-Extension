<?php
class Prod_Like_Block_Like extends Mage_Core_Block_Template
{
    public function Test_Method(){

        //on initialize la variable
        $result=”;
        /* we are doing the query to select all elements of the helloworld table. */
        $collection = Mage::getModel('like/like')->getCollection()
                          ->setOrder('id','asc');
        /* then, we check the result of the query and with the function getData() */
        foreach($collection as $data)
        {
            $result .= $data->getData('product_id').' '.$data->getData('like_count').'<br />';
        }
        //here return a success message to the user.
        Mage::getSingleton('adminhtml/session')->addSuccess('Success!!');
        return $result;

    }

}
