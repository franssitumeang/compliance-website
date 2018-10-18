<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRequestDetails Model
 *
 * @property \App\Model\Table\UserRequestHeadersTable|\Cake\ORM\Association\BelongsTo $UserRequestHeaders
 * @property |\Cake\ORM\Association\HasMany $DiscussionParticipants
 * @property \App\Model\Table\DiscussionsTable|\Cake\ORM\Association\HasMany $Discussions
 *
 * @method \App\Model\Entity\UserRequestDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserRequestDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserRequestDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestDetail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRequestDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserRequestDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserRequestDetailsTable extends Table
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

        $this->setTable('user_request_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'fields' => [
                'dir' => 'photo_dir',
                'size' => 'photo_size',
                'type' => 'photo_type'
            ],
            'attachment' => [
                'path' => 'webroot{DS}files{DS}documents{DS}UserRequestDetails{DS}attachment{DS}',
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return $data['doc_title']. '_versi-'. $data['doc_version'] . '.' . $entity->attachment_type;
                }
            ]
        ]);



        $this->addBehavior('Timestamp');

        $this->belongsTo('UserRequestHeaders', [
            'foreignKey' => 'user_request_header_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DiscussionParticipants', [
            'foreignKey' => 'user_request_detail_id'
        ]);
        $this->hasMany('Discussions', [
            'foreignKey' => 'user_request_detail_id'
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
            ->scalar('approve_m')
            ->maxLength('approve_m', 15)
            ->allowEmpty('approve_m');

        $validator
            ->scalar('approve_c')
            ->maxLength('approve_c', 15)
            ->allowEmpty('approve_c');

        $validator
            ->scalar('request_types')
            ->maxLength('request_types', 50)
            ->allowEmpty('request_types');

        $validator
            ->scalar('descriptions')
            ->maxLength('descriptions', 255)
            ->requirePresence('descriptions', 'create')
            ->notEmpty('descriptions');

        $validator
            ->allowEmpty('attachment');

        $validator
            ->scalar('attachment_dir')
            ->maxLength('attachment_dir', 255)
            ->allowEmpty('attachment_dir');

        $validator
            ->scalar('attachment_type')
            ->maxLength('attachment_type', 5)
            ->allowEmpty('attachment_type');

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
        $rules->add($rules->existsIn(['user_request_header_id'], 'UserRequestHeaders'));

        return $rules;
    }


}
                    