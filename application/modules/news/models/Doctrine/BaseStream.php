<?php

/**
 * News_Model_Doctrine_BaseStream
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property integer $last_user_id
 * @property string $url
 * @property string $type
 * @property string $title
 * @property string $slug
 * @property clob $content
 * @property boolean $publish
 * @property integer $metatag_id
 * @property Doctrine_Collection $Translation
 * 
 * @package    Admi
 * @subpackage News
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class News_Model_Doctrine_BaseStream extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('news_stream');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('last_user_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('content', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('publish', 'boolean', null, array(
             'type' => 'boolean',
             'default' => 1,
             ));
        $this->hasColumn('metatag_id', 'integer', 4, array(
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
        $this->hasMany('News_Model_Doctrine_StreamTranslation as Translation', array(
             'local' => 'id',
             'foreign' => 'id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'slug',
              2 => 'content',
             ),
             'tableName' => 'news_stream_translation',
             'className' => 'StreamTranslation',
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($i18n0);
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}