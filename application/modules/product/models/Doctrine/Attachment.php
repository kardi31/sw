<?php

/**
 * Product_Model_Doctrine_Attachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Product
 * @author     Andrzej Wilczyński <and.wilczynski@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Product_Model_Doctrine_Attachment extends Product_Model_Doctrine_BaseAttachment
{
    public function setId($id) {
        $this->_set('id', $id);
    }
    
    public function getId() {
        return $this->_get('id');
    }
    
    public function setFilename($filename) {
        $this->_set('filename', $filename);
    }
    
    public function getFilename() {
        return $this->_get('filename');
    }
    
    public function setExtension($extension) {
        $this->_set('extension', $extension);
    }
    
    public function getExtension() {
        return $this->_get('extension');
    }
    
    public function getProductId() {
        return $this->_get('product_id');
    }
    
    public function setProductId($productId){
        $this->_set('product_id', $productId);
    } 
}