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
 * @property \App\Model\Table\UserRequestDetailsTable|\Cake\ORM\Association\BelongsTo $UserRequestDetails
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
            'foreignKey' => 'user_doc_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserDocTypes', [
            'foreignKey' => 'user_doc_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserRequestDetails', [
            'foreignKey' => 'user_doc_detail_id'
        ]);
        $this->hasMany('Versions', [
            'foreignKey' => 'user_document_id'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'attachment' => []
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
            ->dateTime('publisher_date')
            ->requirePresence('publisher_date', 'create')
            ->notEmpty('publisher_date');

        $validator
            ->scalar('attachment')
            ->maxLength('attachment', 255)
            ->requirePresence('attachment', 'create')
            ->notEmpty('attachment');

        $validator
            ->scalar('attachment_dir')
            ->maxLength('attachment_dir', 255)
            ->allowEmpty('attachment_dir');

 

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
        $rules->add($rules->existsIn(['user_doc_detail_id'], 'UserRequestDetails'));

        return $rules;
    }
}
