<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRequestHeader Entity
 *
 * @property string $id
 * @property string $users_id
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $request_dates
 * @property string $reasons_id
 *
 * @property \App\Model\Entity\User $user
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
        'users_id' => true,
        'status' => true,
        'request_dates' => true,
        'reasons_id' => true,
        'user' => true
    ];
}
