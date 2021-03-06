<?php

/**
 * Page_Model_Doctrine_PageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Page_Model_Doctrine_PageTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Page_Model_Doctrine_PageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Page_Model_Doctrine_Page');
    }
    
    public function getFullPageQuery() {
        $q = $this->createQuery('p')
                ->addSelect('p.*')
                ->addSelect('t.*')
                ->addSelect('m.*')
                ->addSelect('mt.*')
                ->leftJoin('p.Translation t')
                ->leftJoin('p.Metatag m')
                ->leftJoin('m.Translation mt')
                ;
        return $q;
    }
}