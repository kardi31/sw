<?php

/**
 * District_Model_Doctrine_Event
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage District
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class District_Model_Doctrine_Event extends District_Model_Doctrine_BaseEvent
{
    public static $eventPhotoDimensions = array(
         '126x126' => 'Photo in admin panel',                  // admin
        '265x260' => 'Gorące newsy(265x260)',
        '74x74' => 'Imprezy w regionie(74x74)',
        '406x250' => 'Kategoria - pierwszy news(406x250)',
        '61x61' => 'Kategoria - pozostałe newsy(61x61)',
        '829x528' => 'Pojedynczy news - główne(829x528)',
        '263x188' => 'Pojedynczy news - galeria(263x188)',
        '173x130' => 'Powiązane artykuły(173x130)',
    );
    
    public static function getEventPhotoDimensions() {
        return self::$eventPhotoDimensions;
    }
    
     public function setId($id) {
        $this->_set('id', $id);
    }
    
    public function getId() {
        return $this->_get('id');
    }
    
    public function setPublish($publish = true) {
        $this->_set('publish', $publish);
    }
    
    public function isPublish() {
        return $this->_get('publish');
    }
    
    public function setPublishDate($publishDate) {
        $this->_set('publish_date', $publishDate);
    }
    public function setCreated($value) {
        $this->_set('created_at', $value);
    }
    
    public function getPublishDate() {
        return $this->_get('publish_date');
    }
    
    public function getMetatagId() {
        return $this->_get('metatag_id');    
    }
    
    
    public function setUp() {
        parent::setUp();
        $this->hasOne('Media_Model_Doctrine_Photo as PhotoRoot', array(
            'local' => 'photo_root_id',
            'foreign' => 'id'
        ));
        
     $this->hasMany('Media_Model_Doctrine_VideoUrl as Videos', array(
            'local' => 'video_root_id',
            'foreign' => 'root_id'
        ));
        
         $this->hasOne('Media_Model_Doctrine_VideoUrl as VideoRoot', array(
            'local' => 'video_root_id',
            'foreign' => 'id'
        ));

        $this->hasMany('Media_Model_Doctrine_Photo as Photos', array(
            'local' => 'photo_root_id',
            'foreign' => 'root_id'
        ));
        $this->hasOne('Default_Model_Doctrine_Metatag as Metatags', array(
            'local' => 'metatag_id',
            'foregin' => 'id'
        ));
        
        
         $this->hasOne('User_Model_Doctrine_User as UserCreated', array(
             'local' => 'user_id',
             'foreign' => 'id'));
        
        $this->hasOne('User_Model_Doctrine_User as UserUpdated', array(
             'local' => 'last_user_id',
             'foreign' => 'id'));
         
    }
}