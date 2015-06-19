<?php
class Prod_Like_Model_Like extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('like/like');
    }
}
