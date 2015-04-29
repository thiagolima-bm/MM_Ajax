<?php
/**
 * MM Ajax 
 * 
 * @category     MM
 * @package      MM_Ajax 
 * @copyright    Copyright (c) 2015 MM (http://blog.meumagento.com.br/)
 * @author       MM (Thiago Caldeira de Lima)  
 * @version      Release: 0.1.0
 * @Class        MM_Ajax_AjaxController  
 */

class MM_Ajax_AjaxController extends Mage_Core_Controller_Front_Action
{
    /**
     * Main action
     *
     */
    public function indexAction()
    {
        
        $this->loadLayout();
        $this->renderLayout();

    }

    /**
     * Ajax action
     *
     */
    public function viewAction()
    {
        
        $block  = $this->getLayout()
                ->createBlock('ajax/view')
                ->setTemplate('mm/ajax/view.phtml');
        $this->getResponse()->setBody($block->toHtml());
    }

}