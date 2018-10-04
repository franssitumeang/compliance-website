<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRequestHeader Entity
 *
 * @property string $id
 * @property string $user_doc_category_id
 * @property string $user_doc_type_id
 * @property string $user_id
 * @property string $reasons_id
 * @property string $attachment
 * @property string $approve_m
 * @property string $apprive_c
 * @property string $status
 * @property \Cake\I18n\FrozenTime $request_dates
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserDocCategory $user_doc_category
 * @property \App\Model\Entity\UserDocType $user_doc_type
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Reason $reason
 * @property \App\Model\Entity\UserRequestDetail[] $user_request_details
 */
class UserRequestHeader extends Entity
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
        'user_doc_category_id' => true,
        'user_doc_type_id' => true,
        'user_id' => true,
        'reasons_id' => true,
        'attachment' => true,
        'approve_m' => true,
        'apprive_c' => true,
        'status' => true,
        'request_dates' => true,
        'created' => true,
        'modified' => true,
        'user_doc_category' => true,
        'user_doc_type' => true,
        'user' => true,
        'reason' => true,
        'user_request_details' => true
    ];
}
