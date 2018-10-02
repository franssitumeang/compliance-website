<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocType Entity
 *
 * @property string $id
 * @property string $descriptions
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $doc_type_name
 */
class DocType extends Entity
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
        'created' => true,
        'modified' => true,
        'doc_type_name' => true
    ];
}
