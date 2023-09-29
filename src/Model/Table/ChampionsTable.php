<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Champions Model
 *
 * @method \App\Model\Entity\Champion newEmptyEntity()
 * @method \App\Model\Entity\Champion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Champion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Champion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Champion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Champion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Champion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Champion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Champion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Champion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Champion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Champion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Champion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ChampionsTable extends Table
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

        $this->setTable('champions');
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
            ->scalar('nom')
            ->maxLength('nom', 100)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('resume')
            ->maxLength('resume', 255)
            ->requirePresence('resume', 'create')
            ->notEmptyString('resume');

        $validator
            ->scalar('lane')
            ->maxLength('lane', 10)
            ->requirePresence('lane', 'create')
            ->notEmptyString('lane');

        $validator
            ->scalar('competences')
            ->requirePresence('competences', 'create')
            ->notEmptyString('competences');

        $validator
            ->scalar('pp')
            ->maxLength('pp', 255)
            ->requirePresence('pp', 'create')
            ->notEmptyString('pp');

        $validator
            ->scalar('titre')
            ->maxLength('titre', 100)
            ->requirePresence('titre', 'create')
            ->notEmptyString('titre');

        $validator
            ->scalar('difficult')
            ->requirePresence('difficult', 'create')
            ->notEmptyString('difficult');

        return $validator;
    }
}
