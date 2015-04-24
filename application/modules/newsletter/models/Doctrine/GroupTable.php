<?php

/**
 * Newsletter_Model_Doctrine_GroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Newsletter_Model_Doctrine_GroupTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Newsletter_Model_Doctrine_GroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Newsletter_Model_Doctrine_Group');
    }
    
    public function getGroupQuery() {
        $q = $this->createQuery('g');
        $q->addSelect('g.*');
        return $q;
    }
    
    public function getGroupSubscribersQuery($groupId){
        $q = $this->createQuery('g');
        $q->addSelect('g.*');
        $q->addSelect('s.*');
        $q->leftJoin('g.Subscribers s');
        $q->andWhere('g.id = ?', $groupId);
        return $q;
    }
}