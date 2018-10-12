<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property string $id
 * @property string $title
 * @property \Cake\I18n\FrozenDate $created
 * @property string $content
 * @property string $categories_id
 * @property string $attachment
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ArticleCategory $article_category
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'created' => true,
        'content' => true,
        'categories_id' => true,
        'attachment' => true,
        'modified' => true,
        'article_category' => true
    ];
}
