<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArticleComment Entity
 *
 * @property string $id
 * @property string $comment
 * @property string $user_id
 * @property string $article_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Article $article
 */
class ArticleComment extends Entity
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
        'comment' => true,
        'user_id' => true,
        'article_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'article' => true
    ];
}
