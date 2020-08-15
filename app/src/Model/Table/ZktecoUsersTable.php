<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZktecoUsers Model
 *
 * @method \App\Model\Entity\ZktecoUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZktecoUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ZktecoUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZktecoUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZktecoUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZktecoUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZktecoUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZktecoUser findOrCreate($search, callable $callback = null, $options = [])
 */
class ZktecoUsersTable extends Table
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

        $this->setTable('zkteco_users');
        $this->setDisplayField('name');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('uid')
            ->allowEmptyString('uid');

        $validator
            ->integer('id_number')
            ->allowEmptyString('id_number');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('privilege')
            ->maxLength('privilege', 255)
            ->allowEmptyString('privilege');

        return $validator;
    }
}
