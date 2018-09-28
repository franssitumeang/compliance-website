<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
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
            ->scalar('company_code')
            ->maxLength('company_code', 5)
            ->requirePresence('company_code', 'create')
            ->notEmpty('company_code');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 100)
            ->requirePresence('company_name', 'create')
            ->notEmpty('company_name');

        $validator
            ->scalar('address_1')
            ->maxLength('address_1', 50)
            ->requirePresence('address_1', 'create')
            ->notEmpty('address_1');

        $validator
            ->scalar('address_2')
            ->maxLength('address_2', 50)
            ->allowEmpty('address_2');

        $validator
            ->scalar('phone_num')
            ->maxLength('phone_num', 30)
            ->requirePresence('phone_num', 'create')
            ->notEmpty('phone_num');

        $validator
            ->scalar('fax_num')
            ->maxLength('fax_num', 30)
            ->allowEmpty('fax_num');

        $validator
            ->scalar('url_link')
            ->maxLength('url_link', 100)
            ->allowEmpty('url_link');

        $validator
            ->scalar('website')
            ->maxLength('website', 50)
            ->allowEmpty('website');

        return $validator;
    }
}
