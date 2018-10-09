<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRequestHeaders Model
 *
 * @property \App\Model\Table\UserDocCategoriesTable|\Cake\ORM\Association\BelongsTo $UserDocCategories
 * @property \App\Model\Table\UserDocTypesTable|\Cake\ORM\Association\BelongsTo $UserDocTypes
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $UserRequestReasons
 * @property \App\Model\Table\UserDocApprovalsTable|\Cake\ORM\Association\HasMany $UserDocApprovals
 * @property \App\Model\Table\UserRequestDetailsTable|\Cake\ORM\Association\HasMany $UserRequestDetails
 *
 * @method \App\Model\Entity\UserRequestHeader get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserRequestHeader newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestHeader|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestHeader patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestHeader findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserDocCategories', [
            'foreignKey' => 'user_doc_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserDocTypes', [
            'foreignKey' => 'user_doc_type_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserRequestReasons', [
            'foreignKey' => 'user_request_reason_id'
        ]);
        $this->hasMany('UserDocApprovals', [
            'foreignKey' => 'user_request_header_id'
        ]);
        $this->hasMany('UserRequestDetails', [
            'foreignKey' => 'user_request_header_id'
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
            ->scalar('doc_title')
            ->maxLength('doc_title', 125)
            ->allowEmpty('doc_title');

        $validator
            ->scalar('doc_no')
            ->maxLength('doc_no', 125)
            ->allowEmpty('doc_no');

        $validator
            ->scalar('status')
            ->maxLength('status', 15)
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->existsIn(['user_doc_category_id'], 'UserDocCategories'));
        $rules->add($rules->existsIn(['user_doc_type_id'], 'UserDocTypes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['user_request_reason_id'], 'UserRequestReasons'));

        return $rules;
    }
}
