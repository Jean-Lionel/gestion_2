<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlaningConges Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 *
 * @method \App\Model\Entity\PlaningConge get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlaningConge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlaningConge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlaningConge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlaningConge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlaningConge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlaningConge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlaningConge findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlaningCongesTable extends Table
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

        $this->setTable('planing_conges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('nbre_jour_total')
            ->requirePresence('nbre_jour_total', 'create')
            ->notEmptyString('nbre_jour_total');

        $validator
            ->date('debut_conge_1')
            ->requirePresence('debut_conge_1', 'create')
            ->notEmptyDate('debut_conge_1');

        $validator
            ->integer('nbre_jour_1')
            ->requirePresence('nbre_jour_1', 'create')
            ->notEmptyString('nbre_jour_1');

        $validator
            ->date('fin_conge_1')
            ->requirePresence('fin_conge_1', 'create')
            ->notEmptyDate('fin_conge_1');

        $validator
            ->date('debut_conge_2')
            ->requirePresence('debut_conge_2', 'create')
            ->notEmptyDate('debut_conge_2');

        $validator
            ->integer('nbre_jour_2')
            ->requirePresence('nbre_jour_2', 'create')
            ->notEmptyString('nbre_jour_2');

        $validator
            ->date('fin_conge_2')
            ->requirePresence('fin_conge_2', 'create')
            ->notEmptyDate('fin_conge_2');

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
        $rules->add($rules->existsIn(['employe_id'], 'Employes'));

        return $rules;
    }
}
