<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Breedings Controller
 *
 * @property \App\Model\Table\BreedingsTable $Breedings
 *
 * @method \App\Model\Entity\Breeding[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BreedingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Farms'],
			 'conditions' => ['Breedings.farm_id'=>$this->Users->get($this->Auth->user('id'))->farm_id]
        ];
        $breedings = $this->paginate($this->Breedings);

        $this->set(compact('breedings'));
    }

    /**
     * View method
     *
     * @param string|null $id Breeding id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $breeding = $this->Breedings->get($id, [
            'contain' => ['Farms']
        ]);

        $this->set('breeding', $breeding);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $breeding = $this->Breedings->newEntity();
        if ($this->request->is('post')) {
            $breeding = $this->Breedings->patchEntity($breeding, $this->request->getData());
            if ($this->Breedings->save($breeding)) {
                $this->Flash->success(__('The breeding has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breeding could not be saved. Please, try again.'));
        }
        $farms = $this->Breedings->Farms->find('list', ['limit' => 200]);
        $this->set(compact('breeding', 'farms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Breeding id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $breeding = $this->Breedings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $breeding = $this->Breedings->patchEntity($breeding, $this->request->getData());
            if ($this->Breedings->save($breeding)) {
                $this->Flash->success(__('The breeding has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The breeding could not be saved. Please, try again.'));
        }
        $farms = $this->Breedings->Farms->find('list', ['limit' => 200]);
        $this->set(compact('breeding', 'farms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Breeding id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $breeding = $this->Breedings->get($id);
        if ($this->Breedings->delete($breeding)) {
            $this->Flash->success(__('The breeding has been deleted.'));
        } else {
            $this->Flash->error(__('The breeding could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
