<?php

/**
 * Admin_Model_Doctrine_Message
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Admin
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Admin_Model_Doctrine_Message extends Admin_Model_Doctrine_BaseMessage
{
    public function setId($id) {
        $this->_set('id', $id);
    }
    
    public function getId() {
        return $this->_get('id');
    }
   
    public function setUserId($userId) {
        $this->_set('user_id', $userId);
    }
    
    public function getUserId() {
        return $this->_get('user_id');
    }
    
    public function setSubject($subject) {
        $this->_set('subject', $subject);
    }
    
    public function getSubject() {
        return $this->_get('subject');
    }
    
    public function setContent($content) {
        $this->_set('content', $content);
    }
    
    public function getContent() {
        return $this->_get('content');
    }
    
    public function setUp() {
        parent::setUp();
        $this->hasOne('User_Model_Doctrine_User as User', array(
            'local' => 'user_id',
            'foreign' => 'id'
        ));
    }
}