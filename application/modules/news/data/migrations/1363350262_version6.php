<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version6 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('news_article', 'news_article_author_id_user_user_id');
        $this->dropForeignKey('news_article', 'news_article_last_editor_id_user_user_id');
        $this->dropForeignKey('news_article', 'news_article_photo_root_id_media_photo_id');
    }

    public function down()
    {
        $this->createForeignKey('news_article', 'news_article_author_id_user_user_id', array(
             'name' => 'news_article_author_id_user_user_id',
             'local' => 'author_id',
             'foreign' => 'id',
             'foreignTable' => 'user_user',
             ));
        $this->createForeignKey('news_article', 'news_article_last_editor_id_user_user_id', array(
             'name' => 'news_article_last_editor_id_user_user_id',
             'local' => 'last_editor_id',
             'foreign' => 'id',
             'foreignTable' => 'user_user',
             ));
        $this->createForeignKey('news_article', 'news_article_photo_root_id_media_photo_id', array(
             'name' => 'news_article_photo_root_id_media_photo_id',
             'local' => 'photo_root_id',
             'foreign' => 'id',
             'foreignTable' => 'media_photo',
             ));
    }
}