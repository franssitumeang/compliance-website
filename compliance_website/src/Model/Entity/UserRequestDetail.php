<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRequestDetail Entity
 *
 * @property string $id
 * @property string $user_request_headers_id
 * @property string $user_documents_id
 * @property string $approve_m
 * @property string $approve_c
 * @property string $request_types
 * @property string $descriptions
 * @property string $attachment
 * @property \Cake\I18n\FrozenTime $created
 * @property int $create_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modi_by
 *
 * @property \App\Model\Entity\UserRequestHeader $user_request_header
 * @property \App\Model\Entity\UserDocument $user_document
 */
class UserRequestDetail extends Entity
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
        'user_request_headers_id' => true,
        'user_documents_id' => true,
        'approve_m' => true,
        'approve_c' => true,
        'request_types' => true,
        'descriptions' => true,
        'attachment' => true,
        'created' => true,
        'create_by' => true,
        'modified' => true,
        'modi_by' => true,
        'user_request_header' => true,
        'user_document' => true
    ];
}
