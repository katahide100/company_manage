<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompanySituation Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property \Cake\I18n\FrozenDate|null $end_date
 * @property string|null $overview
 * @property string|null $language
 * @property string|null $tool
 * @property int|null $number_of_people
 * @property \Cake\I18n\FrozenTime|null $working_hours_from
 * @property \Cake\I18n\FrozenTime|null $working_hours_to
 * @property string|null $other
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Company $company
 */
class CompanySituation extends Entity
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
        'user_id' => true,
        'company_id' => true,
        'start_date' => true,
        'end_date' => true,
        'overview' => true,
        'language' => true,
        'tool' => true,
        'number_of_people' => true,
        'working_hours_from' => true,
        'working_hours_to' => true,
        'other' => true,
        'user' => true,
        'company' => true,
    ];
}
