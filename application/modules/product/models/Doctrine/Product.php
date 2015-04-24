<?php

/**
 * Product_Model_Doctrine_Product
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage Product
 * @author     Andrzej Wilczyński <and.wilczynski@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Product_Model_Doctrine_Product extends Product_Model_Doctrine_BaseProduct
{
    public static $productPhotoDimensions = array(
        '126x126' => 'Photo in admin panel', // admin
        '270x300' => 'Lista produktów',                  // admin
        '470x648' => 'Głowne zdjęcie',
	'80x80' => 'Miniaturki',
	'56x60' => 'Mini koszyk'
    );

    public static $productMainPhotoDimensions = array(
        '126x126' => 'Photo in admin panel',                  // admin
        '270x300' => 'Lista produktów',                  // admin
        '470x648' => 'Głowne zdjęcie',
	'80x80' => 'Miniaturki',
	'56x60' => 'Mini koszyk'
    );
    
    public function getId() {
        return $this->_get('id');
    }
    
    public function getPrice() {
        return $this->_get('price');
    }
    
    public function getCode() {
        return $this->_get('code');
    }
    
    public function getAvailability() {
        return $this->_get('availability');
    }
    
    public function setAvailability($availability) {
        $this->_set('availability', $availability);
    }
    
    public function getOrderCounter() {
        return $this->_get('order_counter');
    }
    
    public function setOrderCounter($orderCounter) {
        $this->_set('order_counter', $orderCounter);
    }
    
    public function isDistributor() {
        return $this->_get('distributor');
    }
    
    public function setDistributor($distributor = true) {
        $this->_set('distributor', $distributor);
    }
    
    public static function getProductPhotoDimensions() {
        return self::$productPhotoDimensions;
    } 
    
    public static function getProductMainPhotoDimensions() {
        return self::$productMainPhotoDimensions;
    } 
    
    public function isStatus() {
        return $this->_get('status');
    }
    
    public function setStatus($status = true) {
        $this->_set('status', $status);
    }
    
    public function isPromoted() {
        return $this->_get('promoted');
    }
    
    public function setPromoted($promoted = true) {
        $this->_set('promoted', $promoted);
    }
    
    public function getMetatagId() {
        return $this->_get('metatag_id');    
    }
    
    public function setDiscountId($discountId) {
        $this->_set('discount_id', $discountId);
    }
    
    public function setRate($rate) {
        $this->_set('rate', $rate);
    }
    
    public function getRate() {
        return $this->_get('rate');    
    }
    
    public function isReduced() {
        return $this->_get('reduced_price');
    }
    
    public function setReduced($reduced = true) {
        $this->_set('reduced_price', $reduced);
    }
    
    public function getTypeOfTrade() {
        return $this->_get('type_of_trade');
    }
    
    public function setTypeOfTrade($typeOfTrade = true) {
        $this->_set('type_of_trade', $typeOfTrade);
    }
    
    public function setUp() {
        $this->hasOne('Media_Model_Doctrine_Photo as PhotoRoot', array(
            'local' => 'photo_root_id',
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
        
        $this->hasMany('Newsletter_Model_Doctrine_Message as Messages', array(
             'refClass' => 'Newsletter_Model_Doctrine_MessageProduct',
             'local' => 'product_id',
             'foreign' => 'message_id'
        ));
        parent::setUp();
    }
}