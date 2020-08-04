<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployesConge Entity
 *
 * @property int $id
 * @property int $employe_id
 * @property int $conge_id
 * @property \Cake\I18n\FrozenDate $debut_conges
 * @property \Cake\I18n\FrozenDate $fin_conge
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employe $employe
 * @property \App\Model\Entity\Conge $conge
 */
class EmployesConge extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'employe_id' => true,
        'conge_id' => true,
        'debut_conges' => true,
        'fin_conge' => true,
        'created' => true,
        'modified' => true,
        'employe' => true,
        'conge' => true,
    ];
}
