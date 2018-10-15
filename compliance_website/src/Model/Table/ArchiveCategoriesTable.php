<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArchiveCategories Model
 *
 * @property |\Cake\ORM\Association\HasMany $Archives
 *
 * @method \App\Model\Entity\ArchiveCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArchiveCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArchiveCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArchiveCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArchiveCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArchiveCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArchiveCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArchiveCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class ArchiveCategoriesTable extends Table
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

        $this->setTable('archive_categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Archives', [
            'foreignKey' => 'archive_category_id'
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
            ->scalar('name_categories')
            ->maxLength('name_categories', 50)
            ->allowEmpty('name_categories');

        $validator
            ->scalar('description')
            ->maxLength('description', 50)
            ->allowEmpty('description');

        return $validator;
    }
}
