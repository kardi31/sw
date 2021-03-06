<?php

/**
 * League_Model_Doctrine_League
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Admi
 * @subpackage League
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class League_Model_Doctrine_League extends League_Model_Doctrine_BaseLeague
{
    public function setUp()
    {
        parent::setUp();
        $this->hasOne('League_Model_Doctrine_Group as Group', array(
             'local' => 'group_id',
             'foreign' => 'id'));

    }
}