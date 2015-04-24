<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version4 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('menu_menu_item', 'menu_menu_item_target_id_page_page_id');
        $this->dropForeignKey('menu_menu_item', 'menu_menu_item_photo_root_id_media_photo_id');
    }

    public function down()
    {
        $this->createForeignKey('menu_menu_item', 'menu_menu_item_target_id_page_page_id', array(
             'name' => 'menu_menu_item_target_id_page_page_id',
             'local' => 'target_id',
             'foreign' => 'id',
             'foreignTable' => 'page_page',
             ));
        $this->createForeignKey('menu_menu_item', 'menu_menu_item_photo_root_id_media_photo_id', array(
             'name' => 'menu_menu_item_photo_root_id_media_photo_id',
             'local' => 'photo_root_id',
             'foreign' => 'id',
             'foreignTable' => 'media_photo',
             ));
    }
}