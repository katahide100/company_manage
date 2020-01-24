<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompanySituations Controller
 *
 * @property \App\Model\Table\CompanySituationsTable $CompanySituations
 *
 * @method \App\Model\Entity\CompanySituation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompanySituationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users' => function($q){
                return $q->where(['Users.id' => $this->Auth->user('id')]);
            }, 'Companies'],
            'order' => [
                'CompanySituations.start_date' => 'desc'
            ]
        ];
        $companySituations = $this->paginate($this->CompanySituations);

        // 入場中の社員一覧
        $currentCompanyId = '';
        foreach ($companySituations as $companySituation) {
            if (empty($companySituation->end_date)) {
                $currentCompanyId = $companySituation->company->id;
            }
        }

        $this->set(compact('companySituations'));
        $this->set('currentCompanyId', $currentCompanyId);
    }

    /**
     * View method
     *
     * @param string|null $id Company Situation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companySituation = $this->CompanySituations->get($id, [
            'contain' => ['Users', 'Companies'],
        ]);

        $this->set('companySituation', $companySituation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companySituation = $this->CompanySituations->newEntity();
        if ($this->request->is('post')) {
            $companySituation = $this->CompanySituations->patchEntity($companySituation, $this->request->getData());
            if ($this->CompanySituations->save($companySituation)) {
                $this->Flash->success(__('The company situation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company situation could not be saved. Please, try again.'));
        }
        $users = $this->CompanySituations->Users->find('list', ['keyField' => 'id', 'valueField' => 'name', 'limit' => 200]);
        $companies = $this->CompanySituations->Companies->find('list', ['keyField' => 'id', 'valueField' => 'company_name', 'limit' => 200]);
        
        $this->set(compact('companySituation', 'users', 'companies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Situation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companySituation = $this->CompanySituations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companySituation = $this->CompanySituations->patchEntity($companySituation, $this->request->getData());
            if ($this->CompanySituations->save($companySituation)) {
                $this->Flash->success(__('The company situation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company situation could not be saved. Please, try again.'));
        }
        $users = $this->CompanySituations->Users->find('list', ['limit' => 200]);
        $companies = $this->CompanySituations->Companies->find('list', ['limit' => 200]);
        
        $this->set(compact('companySituation', 'users', 'companies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Situation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companySituation = $this->CompanySituations->get($id);
        if ($this->CompanySituations->delete($companySituation)) {
            $this->Flash->success(__('The company situation has been deleted.'));
        } else {
            $this->Flash->error(__('The company situation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
