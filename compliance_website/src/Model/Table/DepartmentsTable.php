<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departments Model
 *
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\BelongsTo $ParentDepartments
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\HasMany $ChildDepartments
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Department get($primaryKey, $options = [])
 * @method \App\Model\Entity\Department newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Department[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Department|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Department|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Department patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Department[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Department findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DepartmentsTable extends Table
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

        $this->setTable('departments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentDepartments', [
            'className' => 'Departments',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ChildDepartments', [
            'className' => 'Departments',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'department_id'
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
            ->scalar('dept_code')
            ->maxLength('dept_code', 15)
            ->requirePresence('dept_code', 'create')
            ->notEmpty('dept_code');

        $validator
            ->scalar('dept_name')
            ->maxLength('dept_name', 50)
            ->requirePresence('dept_name', 'create')
            ->notEmpty('dept_name');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentDepartments'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));

        return $rules;
    }
}
