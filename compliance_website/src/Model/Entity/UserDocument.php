<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDocument Entity
 *
 * @property string $id
 * @property string $name
 * @property string $no_docs
 * @property string $user_doc_categories_id
 * @property string $doc_types_id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $publisher_dates
 * @property string $paths
 *
 * @property \App\Model\Entity\UserDocCategory $user_doc_category
 * @property \App\Model\Entity\DocType $doc_type
 */
class UserDocument extends Entity
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
        'name' => true,
        'no_docs' => true,
        'user_doc_categories_id' => true,
        'doc_types_id' => true,
        'status' => true,
        'publisher_dates' => true,
        'paths' => true,
        'user_doc_category' => true,
        'doc_type' => true
    ];
}
