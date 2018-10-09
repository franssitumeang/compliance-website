<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserDocTypes Model
 *
 * @property \App\Model\Table\UserDocumentsTable|\Cake\ORM\Association\HasMany $UserDocuments
 * @property \App\Model\Table\UserRequestHeadersTable|\Cake\ORM\Association\HasMany $UserRequestHeaders
 *
 * @method \App\Model\Entity\UserDocType get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserDocType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserDocType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserDocType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserDocTypesTable extends Table
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

        $this->setTable('user_doc_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('UserDocuments', [
            'foreignKey' => 'user_doc_type_id'
        ]);
        $this->hasMany('UserRequestHeaders', [
            'foreignKey' => 'user_doc_type_id'
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
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('doc_type_name')
            ->maxLength('doc_type_name', 50)
            ->requirePresence('doc_type_name', 'create')
            ->notEmpty('doc_type_name');

        return $validator;
    }
}
