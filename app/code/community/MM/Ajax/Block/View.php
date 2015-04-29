<?php
/**
 * MM Ajax 
 * 
 * @category     MM
 * @package      MM_Ajax 
 * @copyright    Copyright (c) 2015 MM (http://blog.meumagento.com.br/)
 * @author       MM (Thiago Caldeira de Lima)  
 * @version      Release: 0.1.0
 * @Class        MM_Ajax_Block_View  
 */
class MM_Ajax_Block_View extends Mage_Core_Block_Template 
{

    public function getFoods()
    {
        $foodType  =  $this->getRequest()->getParam('_type');
        return Mage::helper('ajax')->loadFoodData($foodType);
    }

}

