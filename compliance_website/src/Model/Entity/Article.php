<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property string $id
 * @property string $title
 * @property \Cake\I18n\FrozenTime $created
 * @property string $description
 * @property string $user_id
 * @property string $categories_id
 * @property string $attachment
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\CategoriesArticle $categories_article
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
        'description' => true,
        'user_id' => true,
        'categories_id' => true,
        'attachment' => true,
        'user' => true,
        'categories_article' => true
    ];
}
