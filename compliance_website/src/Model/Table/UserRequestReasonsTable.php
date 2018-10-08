<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRequestReasons Model
 *
 * @property |\Cake\ORM\Association\HasMany $UserRequestHeaders
 *
 * @method \App\Model\Entity\UserRequestReason get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserRequestReason newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserRequestReason[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestReason|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestReason|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestReason patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestReason[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestReason findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserRequestReasonsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('user_request_reasons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('UserRequestHeaders', [
            'foreignKey' => 'user_request_reason_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('reason_name')
            ->maxLength('reason_name', 100)
            ->requirePresence('reason_name', 'create')
            ->notEmpty('reason_name');

        return $validator;
    }
}
