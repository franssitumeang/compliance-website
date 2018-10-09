<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Discussions Model
 *
 * @property \App\Model\Table\UserRequestDetailsTable|\Cake\ORM\Association\BelongsTo $UserRequestDetails
 * @property \App\Model\Table\DiscussionParticipantsTable|\Cake\ORM\Association\BelongsTo $DiscussionParticipants
 *
 * @method \App\Model\Entity\Discussion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Discussion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Discussion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Discussion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discussion|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discussion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Discussion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Discussion findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiscussionsTable extends Table
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

        $this->setTable('discussions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserRequestDetails', [
            'foreignKey' => 'user_request_detail_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DiscussionParticipants', [
            'foreignKey' => 'discussion_participant_id'
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
            ->scalar('contents')
            ->maxLength('contents', 255)
            ->requirePresence('contents', 'create')
            ->notEmpty('contents');

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
        $rules->add($rules->existsIn(['user_request_detail_id'], 'UserRequestDetails'));
        $rules->add($rules->existsIn(['discussion_participant_id'], 'DiscussionParticipants'));

        return $rules;
    }
}
