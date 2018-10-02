<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DocTypes Model
 *
 * @method \App\Model\Entity\DocType get($primaryKey, $options = [])
 * @method \App\Model\Entity\DocType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DocType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DocType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DocType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DocType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DocType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DocTypesTable extends Table
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

        $this->setTable('doc_types');
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
            ->scalar('descriptions')
            ->maxLength('descriptions', 255)
            ->requirePresence('descriptions', 'create')
            ->notEmpty('descriptions');

        $validator
            ->scalar('doc_type_name')
            ->maxLength('doc_type_name', 50)
            ->requirePresence('doc_type_name', 'create')
            ->notEmpty('doc_type_name');

        return $validator;
    }
}
