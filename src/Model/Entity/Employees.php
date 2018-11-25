<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $emp_id
 * @property string $emp_name
 * @property string $email
 * @property int $phone
 * @property string $dob
 */
 use Cake\Validation\Validator;

class Employees extends Entity
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
        'emp_name' => true,
		'employee_id' => true,
        'email' => true,
        'phone' => true,
        'dob' => true
    ];
	
}
