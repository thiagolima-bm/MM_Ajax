<?php
/**
 * MM Ajax 
 * 
 * @category     MM
 * @package      MM_Ajax 
 * @copyright    Copyright (c) 2015 MM (http://blog.meumagento.com.br/)
 * @author       MM (Thiago Caldeira de Lima)  
 * @version      Release: 0.1.0
 * @Class        MM_Ajax_Block_Index  
 */
class MM_Ajax_Block_Index extends Mage_Core_Block_Template 
{
    /**
     * Provides ajax url action
     *
     * @return string
     */
    public function getAjaxUrl()
    {
        return Mage::getUrl('*/*/view');
    }

}

