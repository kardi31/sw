<?php

/**
 * Product_Model_Doctrine_ProducerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Product_Model_Doctrine_ProducerTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Product_Model_Doctrine_ProducerTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Product_Model_Doctrine_Producer');
    }
    
    public function getProducerQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('pr.*');
        $q->addSelect('ph.*');
        $q->addSelect('pt.*');
        $q->leftJoin('pro.Translation pt');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Photos ph');
        $q->addOrderBy('pro.lft ASC');
        return $q;
    }
    
    public function getProducerForMainPageQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.id');
        $q->addSelect('pt.name, pt.slug');
        $q->leftJoin('pro.Translation pt');
        $q->addOrderBy('pro.lft ASC');
        return $q;
    }
    
    public function getProducerForSiteMapQuery() {
        $q = $this->createQuery('prod');
        $q->addSelect('prod.*');
        $q->addSelect('pro.*');
        $q->addSelect('tr.*');
        $q->leftJoin('prod.Translation tr');
        $q->leftJoin('prod.Products pro');
        $q->andWhere('pro.reduced_price = ?', 0);
        $q->andWhere('pro.status = ?', 1);
        $q->andWhere('pro.availability > ?', 0);
        return $q;
    }
}