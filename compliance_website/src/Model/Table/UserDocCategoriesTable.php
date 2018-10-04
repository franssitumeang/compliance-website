<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserDocCategories Model
 *
 * @property |\Cake\ORM\Association\HasMany $UserDocuments
 * @property \App\Model\Table\UserRequestHeadersTable|\Cake\ORM\Association\HasMany $UserRequestHeaders
 *
 * @method \App\Model\Entity\UserDocCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserDocCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserDocCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserDocCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserDocCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserDocCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UserDocCategoriesTable extends Table
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

        $this->setTable('user_doc_categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('UserDocuments', [
            'foreignKey' => 'user_doc_category_id'
        ]);
        $this->hasMany('UserRequestHeaders', [
            'foreignKey' => 'user_doc_category_id'
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
            ->scalar('category_name')
            ->maxLength('category_name', 50)
            ->requirePresence('category_name', 'create')
            ->notEmpty('category_name');

        return $validator;
    }
}
