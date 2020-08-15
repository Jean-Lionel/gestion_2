<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ZktecoUser Entity
 *
 * @property int $id
 * @property int|null $uid
 * @property int|null $id_number
 * @property string|null $name
 * @property string|null $privilege
 */
class ZktecoUser extends Entity
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
        'uid' => true,
        'id_number' => true,
        'name' => true,
        'privilege' => true,
    ];
}
