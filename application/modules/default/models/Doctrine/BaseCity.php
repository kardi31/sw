<?php

/**
 * Default_Model_Doctrine_BaseCity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $province_id
 * @property Default_Model_Doctrine_Province $Province
 * 
 * @package    Admi
 * @subpackage Default
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Default_Model_Doctrine_BaseCity extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('default_city');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('province_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Default_Model_Doctrine_Province as Province', array(
             'local' => 'province_id',
             'foreign' => 'id'));
    }
}