<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ZktecoPresance Model
 *
 * @method \App\Model\Entity\ZktecoPresance get($primaryKey, $options = [])
 * @method \App\Model\Entity\ZktecoPresance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ZktecoPresance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ZktecoPresance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZktecoPresance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ZktecoPresance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ZktecoPresance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ZktecoPresance findOrCreate($search, callable $callback = null, $options = [])
 */
class ZktecoPresanceTable extends Table
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

        $this->setTable('zkteco_presance');
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
            ->integer('id_number')
            ->allowEmptyString('id_number');

        $validator
            ->integer('uid')
            ->allowEmptyString('uid');

        $validator
            ->date('date_day')
            ->allowEmptyDate('date_day');

        $validator
            ->time('day_time')
            ->allowEmptyTime('day_time');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->allowEmptyString('name');

        $validator
            ->scalar('Status')
            ->maxLength('Status', 255)
            ->allowEmptyString('Status');

        $validator
            ->scalar('Verification')
            ->maxLength('Verification', 255)
            ->allowEmptyString('Verification');

        return $validator;
    }
}
