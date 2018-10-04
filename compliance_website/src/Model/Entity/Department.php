<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Department Entity
 *
 * @property string $id
 * @property string $dept_code
 * @property string $dept_name
 * @property string $parent_id
 * @property string $company_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Department $parent_department
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Department[] $child_departments
 * @property \App\Model\Entity\User[] $users
 */
class Department extends Entity
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
        'dept_code' => true,
        'dept_name' => true,
        'parent_id' => true,
        'company_id' => true,
        'created' => true,
        'modified' => true,
        'parent_department' => true,
        'company' => true,
        'child_departments' => true,
        'users' => true
    ];
}
