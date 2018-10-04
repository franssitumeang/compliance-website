<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRequestHeaders Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\ReasonsTable|\Cake\ORM\Association\BelongsTo $Reasons
 *
 * @method \App\Model\Entity\UserRequestHeader get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserRequestHeader newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestHeader|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestHeader patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader findOrCreate($search, callable $callback = null, $options = [])
 */
class UserRequestHeadersTable extends Table
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

        $this->setTable('user_request_headers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Reasons', [
            'foreignKey' => 'reasons_id',
            'joinType' => 'INNER'
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
            ->scalar('status')
            ->maxLength('status', 15)
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('request_dates')
            ->requirePresence('request_dates', 'create')
            ->notEmpty('request_dates');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['reasons_id'], 'Reasons'));

        return $rules;
    }
}
