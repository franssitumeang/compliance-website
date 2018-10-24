<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property string $id
 * @property string $company_code
 * @property string $company_name
 * @property string $address_1
 * @property string $address_2
 * @property string $description
 * @property string $phone_num
 * @property string $parent_id
 * @property string $fax_num
 * @property string $url_link
 * @property string $website
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Company $parent_company
 * @property \App\Model\Entity\Company[] $child_companies
 * @property \App\Model\Entity\Department[] $departments
 */
class Company extends Entity
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
        'company_code' => true,
        'company_name' => true,
        'address_1' => true,
        'address_2' => true,
        'description' => true,
        'phone_num' => true,
        'parent_id' => true,
        'url_link' => true,
        'website' => true,
        'created' => true,
        'modified' => true,
        'parent_company' => true,
        'child_companies' => true,
        'departments' => true
    ];
}
