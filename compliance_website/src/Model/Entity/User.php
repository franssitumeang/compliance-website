<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $position_id
 * @property string $user_name
 * @property string $phone_num
 * @property string $telp_num
 * @property string $password
 * @property string $email
 * @property string $department_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Article[] $articles
 * @property \App\Model\Entity\DiscussionParticipant[] $discussion_participants
 * @property \App\Model\Entity\UserDocApproval[] $user_doc_approvals
 * @property \App\Model\Entity\UserGroup[] $user_groups
 * @property \App\Model\Entity\UserRequestHeader[] $user_request_headers
 */
class User extends Entity
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
        'position_id' => true,
        'user_name' => true,
        'phone_num' => true,
        'telp_num' => true,
        'password' => true,
        'email' => true,
        'department_id' => true,
        'created' => true,
        'modified' => true,
        'department' => true,
        'articles' => true,
        'discussion_participants' => true,
        'user_doc_approvals' => true,
        'user_groups' => true,
        'user_request_headers' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
