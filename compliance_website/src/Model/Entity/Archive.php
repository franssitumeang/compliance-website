<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Archive Entity
 *
 * @property string $id
 * @property string $historical_revision_number
 * @property string $doc_name
 * @property string $process_owner
 * @property \Cake\I18n\FrozenDate $revision_date
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Archive extends Entity
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
        'historical_revision_number' => true,
        'doc_name' => true,
        'process_owner' => true,
        'revision_date' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];
}
