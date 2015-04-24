<?php

/**
 * Product_Model_Doctrine_ProductTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Product_Model_Doctrine_ProductTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Product_Model_Doctrine_ProductTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Product_Model_Doctrine_Product');
    }
    
    public function getProductToAdminQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('tr.*');
        $q->addSelect('cat.*');
        $q->addSelect('pr.*');
        $q->addSelect('d.*');
        $q->addSelect('ctr.*');
        $q->addSelect('prod.*');
        $q->addSelect('a.*');
        $q->addSelect('at.*');
        $q->addSelect('dp.*');
        $q->leftJoin('pro.Translation tr');
        $q->leftJoin('pro.Categories cat');
        $q->leftJoin('cat.Translation ctr');
        $q->leftJoin('pro.Discount d');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Producer prod');
        $q->leftJoin('prod.Discount dp');
        $q->leftJoin('pro.Attachments a');
        $q->leftJoin('a.Translation at');
        return $q;
    }
    
    public function getProductQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('tr.*');
        $q->addSelect('cat.*');
        $q->addSelect('pr.*');
        $q->addSelect('d.*');
        $q->addSelect('ctr.*');
        $q->addSelect('prod.*');
        $q->addSelect('a.*');
        $q->addSelect('at.*');
        $q->addSelect('dp.*');
        $q->leftJoin('pro.Translation tr');
        $q->leftJoin('pro.Categories cat');
        $q->leftJoin('cat.Translation ctr');
        $q->leftJoin('pro.Discount d');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Producer prod');
        $q->leftJoin('prod.Discount dp');
        $q->leftJoin('pro.Attachments a');
        $q->leftJoin('a.Translation at');
        $q->andWhere('pro.status = ?', array(1));
        return $q;
    }
    
    public function getNewestProductForMainPageProductQuery(){
        $q = $this->createQuery('pro');
        $q->addSelect('pro.id, pro.price, pro.promotion, pro.promotion_price');
        $q->addSelect('tr.name, tr.slug');
        $q->addSelect('cat.id');
        $q->addSelect('pr.*');
        $q->addSelect('d.*');
        $q->addSelect('ctr.slug, ctr.name');
        $q->addSelect('prod.id');
        $q->addSelect('dp.*');
        $q->leftJoin('pro.Translation tr');
        $q->leftJoin('pro.Categories cat');
        $q->leftJoin('cat.Translation ctr');
        $q->leftJoin('pro.Discount d');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Producer prod');
        $q->leftJoin('prod.Discount dp');
        $q->andWhere('pro.status = ?', array(1));
        return $q;
    }
    
    public function getMostFrequentlyForMainPageProductQuery(){
        $q = $this->createQuery('pro');
        $q->addSelect('pro.id, pro.price, pro.promotion, pro.promotion_price');
        $q->addSelect('tr.name, tr.slug');
        $q->addSelect('cat.id');
        $q->addSelect('pr.*');
        $q->addSelect('d.*');
        $q->addSelect('ctr.slug, ctr.name');
        $q->addSelect('prod.id');
        $q->addSelect('dp.*');
        $q->leftJoin('pro.Translation tr');
        $q->leftJoin('pro.Categories cat');
        $q->leftJoin('cat.Translation ctr');
        $q->leftJoin('pro.Discount d');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Producer prod');
        $q->leftJoin('prod.Discount dp');
        $q->andWhere('pro.status = ?', array(1));
        return $q;
    }
    
    public function getProductPromotionsForMainPageQuery(){
        $q = $this->createQuery('pro');
        $q->addSelect('pro.id, pro.price, pro.promotion, pro.promotion_price, pro.rate');
        $q->addSelect('tr.name, tr.slug');
        $q->addSelect('cat.id');
        $q->addSelect('pr.*');
        $q->addSelect('d.*');
        $q->addSelect('ctr.slug, ctr.name');
        $q->addSelect('prod.id');
        $q->addSelect('dp.*');
        $q->leftJoin('pro.Translation tr');
        $q->leftJoin('pro.Categories cat');
        $q->leftJoin('cat.Translation ctr');
        $q->leftJoin('pro.Discount d');
        $q->leftJoin('pro.PhotoRoot pr');
        $q->leftJoin('pro.Producer prod');
        $q->leftJoin('prod.Discount dp');
        $q->andWhere('pro.status = ?', array(1));
        return $q;
    }
    
//    public function getProductForMainPageQuery() {
//        $q = $this->createQuery('pro');
//        $q->addSelect('pro.id, pro.price, pro.ayurveda_product, pro.most_frequently_purchased, pro.reduced_price, pro.availability');
//        $q->andWhere('pro.reduced_price = ?', 0);
//        $q->andWhere('pro.status = ?', array(1));
//        $q->andWhere('pro.availability > ?', 0);
//        $q->addOrderBy('pro.created_at DESC');
//        $q->addSelect('tr.name, tr.slug');
//        $q->addSelect('cat.id');
//        $q->addSelect('pr.*');
//        $q->addSelect('d.*');
//        $q->addSelect('ctr.slug, ctr.name');
//        $q->addSelect('prod.id');
//        $q->addSelect('dp.*');
//        $q->leftJoin('pro.Translation tr');
//        $q->leftJoin('pro.Categories cat');
//        $q->leftJoin('cat.Translation ctr');
//        $q->leftJoin('pro.Discount d');
//        $q->leftJoin('pro.PhotoRoot pr');
//        $q->leftJoin('pro.Producer prod');
//        $q->leftJoin('prod.Discount dp');
//        $q->andWhere('pro.status = ?', array(1));
//        return $q;
//    }
    
//      public function getProductForCategoriesQuery() {
//        $q = $this->createQuery('pro');
//        $q->addSelect('pro.id, pro.price, pro.ayurveda_product, pro.most_frequently_purchased, pro.reduced_price, pro.availability');
//        $q->andWhere('pro.reduced_price = ?', 0);
//        $q->andWhere('pro.status = ?', array(1));
//        $q->andWhere('pro.availability > ?', 0);
//        $q->addOrderBy('pro.created_at DESC');
//        $q->addSelect('tr.name, tr.slug');
//        $q->addSelect('cat.id');
//        $q->addSelect('pr.*');
//        $q->addSelect('d.*');
//        $q->addSelect('ctr.slug, ctr.name');
//        $q->addSelect('prod.id');
//        $q->addSelect('dp.*');
//        $q->leftJoin('pro.Translation tr');
//        $q->leftJoin('pro.Categories cat');
//        $q->leftJoin('cat.Translation ctr');
//        $q->leftJoin('pro.Discount d');
//        $q->leftJoin('pro.PhotoRoot pr');
//        $q->leftJoin('pro.Producer prod');
//        $q->leftJoin('prod.Discount dp');
//        $q->andWhere('pro.status = ?', array(1));
//        return $q;
//    }
    
    public function getRelatedProductQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('tr.*');
        $q->addSelect('pr.*');
        $q->addSelect('rp.*');
        $q->addSelect('rpt.*');
        $q->addSelect('cat.*');
        $q->addSelect('ct.*');
        $q->leftJoin('pro.Translation tr');
        $q->leftJoin('pro.RelatedProducts rp');
        $q->leftJoin('rp.Translation rpt');
        $q->leftJoin('rp.PhotoRoot pr');
        $q->leftJoin('rp.Categories cat');
        $q->leftJoin('cat.Translation ct');
        $q->where('pro.status = ?', array(1));
        $q->andWhere('pro.availability > ?', 0);
        return $q;
    }

    public function getIdsProductsQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('cat.*');
        $q->addSelect('prod.*');
        $q->leftJoin('pro.Producer prod');
        $q->leftJoin('pro.Categories cat');
        $q->groupBy('pro.id');
        $q->where('pro.status = ?', array(1));
        $q->andWhere('pro.availability > ?', 0);
        return $q;
    }
    
    public function getProducerIdsProductsQuery($producerId) {
        $q = $this->createQuery('pro');
        $q->addSelect('pro.*');
        $q->addSelect('cat.*');
        $q->addSelect('pr.*');
        $q->leftJoin('pro.Categories cat');
        $q->leftJoin('pro.Producer pr');
        $q->where('pro.status = ?', array(1));
        $q->andWhere('pro.availability > ?', 0);
        $q->groupBy('pro.id');
        $q->andWhere('pro.status = ?', array(1));
        $q->andWhere('pr.id = ?', $producerId);
        return $q;
    }
    
    public function getAllProductsQuery() {
        $q = $this->createQuery('pro')
                ->addSelect('pro.*')
                ->addSelect('cat.*')
                ->addSelect('ct.*')
                ->addSelect('pt.*')
                ->addSelect('pr.*')
                ->addSelect('prod.*')
                ->addSelect('d.*')
                ->addSelect('dp.*')
                ->leftJoin('pro.Categories cat')
                ->leftJoin('cat.Translation ct')
                ->leftJoin('pro.PhotoRoot pr')
                ->leftJoin('pro.Translation pt')
                ->leftJoin('pro.Producer prod')
                ->leftJoin('pro.Discount d')
                ->leftJoin('prod.Discount dp')
                ->andWhere('pro.status = ?', array(1))
                ->andWhere('pro.availability > ?', 0);
        return $q;
    }
    
    public function getNumberOfProductForSiteMapQuery() {
        $q = $this->createQuery('pro');
        $q->addSelect('COUNT(DISTINCT pro.id) as number_of_products');
        $q->andWhere('pro.status = ?', array(1));
        return $q;
    }
    
    public function getProductForSiteMapQuery() {
        $q = $this->createQuery('pro')
                ->addSelect('pro.*')
                ->addSelect('cat.*')
                ->addSelect('ct.*')
                ->addSelect('pt.*')
                ->leftJoin('pro.Categories cat')
                ->leftJoin('cat.Translation ct')
                ->leftJoin('pro.Translation pt')
                ->andWhere('pro.status = ?', array(1))
                ->andWhere('pro.availability > ?', 0);
        return $q;
    }
    
    public function getProductForCeneoQuery() {
        $q = $this->createQuery('pro')
                ->addSelect('pro.*')
                ->addSelect('cat.*')
                ->addSelect('ct.*')
                ->addSelect('pt.*')
                ->addSelect('pr.*')
                ->addSelect('prod.*')
                ->addSelect('prodt.*')
                ->addSelect('b.*')
                ->addSelect('s.*')
                ->addSelect('g.*')
                ->addSelect('cc.*')
                ->leftJoin('pro.Categories cat')
                ->leftJoin('cat.Translation ct')
                ->leftJoin('pro.Translation pt')
                ->leftJoin('pro.PhotoRoot pr')
                ->leftJoin('pro.Producer prod')
                ->leftJoin('prod.Translation prodt')
                ->leftJoin('pro.Book b')
                ->leftJoin('pro.Supplement s')
                ->leftJoin('pro.Grocery g')
                ->leftJoin('pro.CategoryCeneo cc')
                ->andWhere('pro.status = ?', 1)
                ->andWhere('pro.availability > ?', 0);
        return $q;
    }
    
    public function getAllProductsForGoogleQuery() {
        $q = $this->createQuery('pro')
                ->addSelect('pro.*')
                ->addSelect('cat.*')
                ->addSelect('ct.*')
                ->addSelect('pt.*')
                ->addSelect('pr.*')
                ->addSelect('prod.*')
                ->addSelect('prodt.*')
                ->addSelect('b.*')
                ->addSelect('s.*')
                ->addSelect('g.*')
                ->addSelect('gc.*')
                ->leftJoin('pro.Categories cat')
                ->leftJoin('cat.Translation ct')
                ->leftJoin('pro.Translation pt')
                ->leftJoin('pro.PhotoRoot pr')
                ->leftJoin('pro.Producer prod')
                ->leftJoin('prod.Translation prodt')
                ->leftJoin('pro.Book b')
                ->leftJoin('pro.Supplement s')
                ->leftJoin('pro.Grocery g')
                ->leftJoin('pro.CategoryGoogle gc')
                ->andWhere('pro.status = ?', 1)
                ->andWhere('pro.availability > ?', 0);
        return $q;
    }
    
    public function getAllProductsForSkapiecQuery() {
        $q = $this->createQuery('pro')
                ->addSelect('pro.*')
                ->addSelect('cat.*')
                ->addSelect('ct.*')
                ->addSelect('pt.*')
                ->addSelect('pr.*')
                ->addSelect('prod.*')
                ->addSelect('prodt.*')
                ->addSelect('b.*')
                ->addSelect('s.*')
                ->addSelect('g.*')
                ->addSelect('gc.*')
                ->leftJoin('pro.Categories cat')
                ->leftJoin('cat.Translation ct')
                ->leftJoin('pro.Translation pt')
                ->leftJoin('pro.PhotoRoot pr')
                ->leftJoin('pro.Producer prod')
                ->leftJoin('prod.Translation prodt')
                ->leftJoin('pro.Book b')
                ->leftJoin('pro.Supplement s')
                ->leftJoin('pro.Grocery g')
                ->leftJoin('pro.CategoryGoogle gc')
                ->andWhere('pro.status = ?', 1)
                ->andWhere('pro.availability > ?', 0);
        return $q;
    }
}