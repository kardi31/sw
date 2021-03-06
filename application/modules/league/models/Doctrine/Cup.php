<?php

/**
 * League_Model_Doctrine_Cup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage League
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class League_Model_Doctrine_Cup extends League_Model_Doctrine_BaseCup
{
     public function setUp() {
        parent::setUp();
        $this->hasOne('Default_Model_Doctrine_Metatag as Metatag', array(
            'local' => 'metatag_id',
            'foreign' => 'id'
        )); 
        
          $this->hasOne('Media_Model_Doctrine_Photo as PhotoRoot', array(
            'local' => 'photo_root_id',
            'foreign' => 'id'
        ));
    }
}