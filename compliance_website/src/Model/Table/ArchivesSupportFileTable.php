<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArchivesSupportFile Model
 *
 * @method \App\Model\Entity\ArchivesSupportFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArchivesSupportFile findOrCreate($search, callable $callback = null, $options = [])
 */
class ArchivesSupportFileTable extends Table
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

        $this->setTable('archives_support_file');
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
            ->scalar('file')
            ->maxLength('file', 50)
            ->allowEmpty('file');

        $validator
            ->scalar('path')
            ->maxLength('path', 255)
            ->allowEmpty('path');

        return $validator;
    }
}
