<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriesArticle Model
 *
 * @method \App\Model\Entity\CategoriesArticle get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriesArticle newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriesArticle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriesArticle|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriesArticle|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriesArticle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriesArticle[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriesArticle findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriesArticleTable extends Table
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

        $this->setTable('categories_article');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('name_categories')
            ->maxLength('name_categories', 50)
            ->requirePresence('name_categories', 'create')
            ->notEmpty('name_categories');

        return $validator;
    }
}
