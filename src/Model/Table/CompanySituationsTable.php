<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CompanySituations Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CompaniesTable&\Cake\ORM\Association\BelongsTo $Companies
 *
 * @method \App\Model\Entity\CompanySituation get($primaryKey, $options = [])
 * @method \App\Model\Entity\CompanySituation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CompanySituation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CompanySituation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanySituation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CompanySituation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CompanySituation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CompanySituation findOrCreate($search, callable $callback = null, $options = [])
 */
class CompanySituationsTable extends Table
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

        $this->setTable('company_situations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
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
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->allowEmptyDate('end_date');

        $validator
            ->scalar('overview')
            ->maxLength('overview', 256)
            ->allowEmptyString('overview');

        $validator
            ->scalar('language')
            ->maxLength('language', 256)
            ->allowEmptyString('language');

        $validator
            ->scalar('tool')
            ->maxLength('tool', 256)
            ->allowEmptyString('tool');

        $validator
            ->integer('number_of_people')
            ->allowEmptyString('number_of_people');

        $validator
            ->time('working_hours_from')
            ->allowEmptyTime('working_hours_from');

        $validator
            ->time('working_hours_to')
            ->allowEmptyTime('working_hours_to');

        $validator
            ->scalar('other')
            ->maxLength('other', 256)
            ->allowEmptyString('other');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['company_id'], 'Companies'));

        return $rules;
    }
}
