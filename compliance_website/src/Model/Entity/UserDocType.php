<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDocType Entity
 *
 * @property string $id
 * @property string $descriptions
 * @property string $doc_type_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UserRequestHeader[] $user_request_headers
 */
class UserDocType extends Entity
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
        'descriptions' => true,
        'doc_type_name' => true,
        'created' => true,
        'modified' => true,
        'user_request_headers' => true
    ];
}
