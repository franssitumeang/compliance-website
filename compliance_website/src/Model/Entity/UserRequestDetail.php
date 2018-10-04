<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRequestDetail Entity
 *
 * @property string $id
 * @property string $user_request_header_id
 * @property string $user_document_id
 * @property string $request_types
 * @property string $descriptions
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserRequestHeader $user_request_header
 * @property \App\Model\Entity\UserDocument $user_document
 * @property \App\Model\Entity\Discussion[] $discussions
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
        'user_request_header_id' => true,
        'user_document_id' => true,
        'request_types' => true,
        'descriptions' => true,
        'created' => true,
        'modified' => true,
        'user_request_header' => true,
        'user_document' => true,
        'discussions' => true
    ];
}
