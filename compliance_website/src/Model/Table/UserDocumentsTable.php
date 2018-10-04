<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserDocuments Model
 *
 * @property \App\Model\Table\UserDocCategoriesTable|\Cake\ORM\Association\BelongsTo $UserDocCategories
 * @property \App\Model\Table\UserDocTypesTable|\Cake\ORM\Association\BelongsTo $UserDocTypes
 * @property \App\Model\Table\UserRequestDetailsTable|\Cake\ORM\Association\HasMany $UserRequestDetails
 * @property \App\Model\Table\VersionsTable|\Cake\ORM\Association\HasMany $Versions
 *
 * @method \App\Model\Entity\UserDocument get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserDocument newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserDocument[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserDocument|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocument|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocument patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocument[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocument findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserDocumentsTable extends Table
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

        $this->setTable('user_documents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('UserDocCategories', [
            'foreignKey' => 'user_doc_categorie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserDocTypes', [
            'foreignKey' => 'doc_types_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('UserRequestDetails', [
            'foreignKey' => 'user_document_id'
        ]);
        $this->hasMany('Versions', [
            'foreignKey' => 'user_document_id'
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->uuid('doc_num')
            ->requirePresence('doc_num', 'create')
            ->notEmpty('doc_num');

        $validator
            ->scalar('status')
            ->maxLength('status', 50)
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('publisher_dates')
            ->requirePresence('publisher_dates', 'create')
            ->notEmpty('publisher_dates');

        $validator
            ->scalar('paths')
            ->maxLength('paths', 255)
            ->requirePresence('paths', 'create')
            ->notEmpty('paths');

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
        $rules->add($rules->existsIn(['user_doc_categorie_id'], 'UserDocCategories'));
        $rules->add($rules->existsIn(['doc_types_id'], 'UserDocTypes'));

        return $rules;
    }
}
