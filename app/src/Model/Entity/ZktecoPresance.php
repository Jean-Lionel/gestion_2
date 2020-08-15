<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZktecoPresance Entity
 *
 * @property int $id
 * @property int|null $id_number
 * @property int|null $uid
 * @property \Cake\I18n\FrozenDate|null $date_day
 * @property \Cake\I18n\FrozenTime|null $day_time
 * @property string|null $name
 * @property string|null $Status
 * @property string|null $Verification
 */
class ZktecoPresance extends Entity
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
        'id_number' => true,
        'uid' => true,
        'date_day' => true,
        'day_time' => true,
        'name' => true,
        'Status' => true,
        'Verification' => true,
    ];
}
