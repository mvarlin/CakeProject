<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Champions Controller
 *
 * @property \App\Model\Table\ChampionsTable $Champions
 * @method \App\Model\Entity\Champion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChampionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $champions = $this->paginate($this->Champions);
        $result = $this->Champions->find()
                                  ->select(['nom', 'resume', 'lane', 'titre'])          
                                  ->where(['id' > 5])
                                  ->all();
        $champTab = [];
        foreach($result as $rs){
            $name = $rs['nom']; 
            $champTab[$name]['Poste'] = $rs['lane'];
            $champTab[$name]['Titre'] = $rs['titre'];
            $champTab[$name]['Resumé'] = $rs['resume'];
        }
        $this->log($champTab);
        $this->set(compact('champions'));
    }

    /**
     * View method
     *
     * @param string|null $id Champion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $champion = $this->Champions->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('champion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $champion = $this->Champions->newEmptyEntity();
        if ($this->request->is('post')) {
            $champion = $this->Champions->patchEntity($champion, $this->request->getData());
            if ($this->Champions->save($champion)) {
                $this->Flash->success(__('The champion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The champion could not be saved. Please, try again.'));
        }
        $this->set(compact('champion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Champion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $champion = $this->Champions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $champion = $this->Champions->patchEntity($champion, $this->request->getData());
            if ($this->Champions->save($champion)) {
                $this->Flash->success(__('The champion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The champion could not be saved. Please, try again.'));
        }
        $this->set(compact('champion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Champion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $champion = $this->Champions->get($id);
        if ($this->Champions->delete($champion)) {
            $this->Flash->success(__('The champion has been deleted.'));
        } else {
            $this->Flash->error(__('The champion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
