<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lane Model
 *
 * @method \App\Model\Entity\Lane newEmptyEntity()
 * @method \App\Model\Entity\Lane newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Lane[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lane get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lane findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Lane patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lane[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lane|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lane saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lane[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lane[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lane[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Lane[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LaneTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('lane');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('lane_name')
            ->maxLength('lane_name', 10)
            ->requirePresence('lane_name', 'create')
            ->notEmptyString('lane_name');

        $validator
            ->scalar('lane_description')
            ->maxLength('lane_description', 10)
            ->requirePresence('lane_description', 'create')
            ->notEmptyString('lane_description');

        return $validator;
    }
}
