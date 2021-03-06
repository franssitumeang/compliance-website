<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDocument Entity
 *
 * @property string $id
 * @property string $name
 * @property string $doc_num
 * @property string $user_doc_category_id
 * @property string $user_doc_type_id
 * @property string $user_doc_detail_id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $publisher_date
 * @property string $attachment
 * @property string $attachment_dir
 * @property string $attachment_type
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserDocCategory $user_doc_category
 * @property \App\Model\Entity\UserDocType $user_doc_type
 * @property \App\Model\Entity\UserRequestDetail $user_request_detail
 * @property \App\Model\Entity\Version[] $versions
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
        'doc_num' => true,
        'user_doc_category_id' => true,
        'user_doc_type_id' => true,
        'user_doc_detail_id' => true,
        'status' => true,
        'publisher_date' => true,
        'attachment' => true,
        'attachment_dir' => true,
        'attachment_type' => true,
        'created' => true,
        'modified' => true,
        'user_doc_category' => true,
        'user_doc_type' => true,
        'user_request_detail' => true,
        'versions' => true
    ];
}
