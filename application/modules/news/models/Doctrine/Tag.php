<?php

/**
 * News_Model_Doctrine_Tag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage News
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class News_Model_Doctrine_Tag extends News_Model_Doctrine_BaseTag
{
    public function getId(){
        return $this->get('id');
    }
    
    public function getMetatagId() {
        return $this->_get('metatag_id');    
    }
    
    public function setUp() {
        parent::setUp();
      
        $this->hasOne('Default_Model_Doctrine_Metatag as Metatags', array(
            'local' => 'metatag_id',
            'foregin' => 'id'
        ));
        
        
         
    }
}