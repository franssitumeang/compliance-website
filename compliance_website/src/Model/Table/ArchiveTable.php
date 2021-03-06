<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Archive Model
 *
 * @method \App\Model\Entity\Archive get($primaryKey, $options = [])
 * @method \App\Model\Entity\Archive newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Archive[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Archive|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Archive|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Archive patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Archive[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Archive findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArchiveTable extends Table
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

        $this->setTable('archive');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('historical_revision_name')
            ->maxLength('historical_revision_name', 30)
            ->requirePresence('historical_revision_name', 'create')
            ->notEmpty('historical_revision_name');

        $validator
            ->scalar('doc_name')
            ->maxLength('doc_name', 50)
            ->requirePresence('doc_name', 'create')
            ->notEmpty('doc_name');

        $validator
            ->scalar('process_owner')
            ->maxLength('process_owner', 36)
            ->requirePresence('process_owner', 'create')
            ->notEmpty('process_owner');

        $validator
            ->date('revision_date')
            ->requirePresence('revision_date', 'create')
            ->notEmpty('revision_date');

        $validator
            ->scalar('status')
            ->maxLength('status', 36)
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
