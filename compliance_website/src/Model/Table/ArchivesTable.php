<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Archives Model
 *
 * @property \App\Model\Table\ArchiveCategoriesTable|\Cake\ORM\Association\BelongsTo $ArchiveCategories
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
class ArchivesTable extends Table
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

        $this->setTable('archives');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ArchiveCategories', [
            'foreignKey' => 'archive_category_id',
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
            ->scalar('historical_revision_number')
            ->maxLength('historical_revision_number', 30)
            ->requirePresence('historical_revision_number', 'create')
            ->notEmpty('historical_revision_number');

        $validator
            ->scalar('doc_number')
            ->maxLength('doc_number', 36)
            ->requirePresence('doc_number', 'create')
            ->notEmpty('doc_number');

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
            ->allowEmpty('revision_date');

        $validator
            ->scalar('support_file')
            ->maxLength('support_file', 255)
            ->allowEmpty('support_file');

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
        $rules->add($rules->existsIn(['archive_category_id'], 'ArchiveCategories'));

        return $rules;
    }
}
