<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Version Entity
 *
 * @property string $id
 * @property string $user_documents_id
 * @property int $versions
 * @property \Cake\I18n\FrozenTime $created
 * @property int $create_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $modi_by
 * @property bool $obsolute
 *
 * @property \App\Model\Entity\UserDocument $user_document
 */
class Version extends Entity
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
        'user_documents_id' => true,
        'versions' => true,
        'created' => true,
        'create_by' => true,
        'modified' => true,
        'modi_by' => true,
        'obsolute' => true,
        'user_document' => true
    ];
}
