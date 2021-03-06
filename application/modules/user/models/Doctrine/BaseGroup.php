<?php

/**
 * User_Model_Doctrine_BaseGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property clob $description
 * @property integer $discount_id
 * @property boolean $status
 * @property Doctrine_Collection $Users
 * @property Doctrine_Collection $Translation
 * 
 * @package    Admi
 * @subpackage User
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class User_Model_Doctrine_BaseGroup extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('user_group');
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
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('discount_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('status', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('User_Model_Doctrine_User as Users', array(
             'refClass' => 'User_Model_Doctrine_UserGroup',
             'local' => 'group_id',
             'foreign' => 'user_id'));

        $this->hasMany('User_Model_Doctrine_GroupTranslation as Translation', array(
             'local' => 'id',
             'foreign' => 'id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'slug',
              2 => 'description',
             ),
             'tableName' => 'user_group_translation',
             'className' => 'GroupTranslation',
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($i18n0);
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}