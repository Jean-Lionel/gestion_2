<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployesConges Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 * @property \App\Model\Table\CongesTable&\Cake\ORM\Association\BelongsTo $Conges
 *
 * @method \App\Model\Entity\EmployesConge get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployesConge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployesConge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployesConge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployesConge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployesConge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployesConge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployesConge findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployesCongesTable extends Table
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

        $this->setTable('employes_conges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Conges', [
            'foreignKey' => 'conge_id',
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
        ->date('debut_conges')
        ->requirePresence('debut_conges', 'create')
        ->notEmptyDate('debut_conges');

        $validator
        ->date('fin_conge')
        ->requirePresence('fin_conge', 'create')
        ->notEmptyDate('fin_conge');

        $validator
        ->date('date_retour')
        ->requirePresence('date_retour', 'create')
        ->notEmptyDate('date_retour');

        return $validator;
    }


    public function beforeSave($event, $entity, $options) {




        $origin = date_create($entity->debut_conges);
        $target = date_create($entity->fin_conge);
        $interval = date_diff($origin, $target);
        $n_jour = $interval->format('%R%a');

        $entity->nbre_jour = $n_jour;
        return true;

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
        $rules->add($rules->existsIn(['conge_id'], 'Conges'));

        return $rules;
    }
}
