<?php
/**
 * MM Ajax 
 * 
 * @category     MM
 * @package      MM_Ajax 
 * @copyright    Copyright (c) 2015 MM (http://blog.meumagento.com.br/)
 * @author       MM (Thiago Caldeira de Lima)  
 * @version      Release: 0.1.0
 * @Class        MM_Ajax_Helper_Data  
 */

class MM_Ajax_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Provides an array of string
     *
     * @param string $_type 
     * @return array
     */
    public function loadFoodData($_type)
    {
        $data = array();

        switch ($_type) {
            case 'foods':
                $data = array('beans','rices','potatoes');
                break;
            case 'drinks':
                $data = array('beers','wines','whiskeys');
                break;
            default:
                $data = array('beers','wines','whiskeys');
                break;
        }

        return $data;
        
    }
}