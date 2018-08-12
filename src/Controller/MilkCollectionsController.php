<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MilkCollections Controller
 *
 * @property \App\Model\Table\MilkCollectionsTable $MilkCollections
 *
 * @method \App\Model\Entity\MilkCollection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MilkCollectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Farms', 'Animals']
        ];
        $milkCollections = $this->paginate($this->MilkCollections);

        $this->set(compact('milkCollections'));
    }

    /**
     * View method
     *
     * @param string|null $id Milk Collection id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $milkCollection = $this->MilkCollections->get($id, [
            'contain' => ['Farms', 'Animals']
        ]);

        $this->set('milkCollection', $milkCollection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $milkCollection = $this->MilkCollections->newEntity();
        if ($this->request->is('post')) {
            $milkCollection = $this->MilkCollections->patchEntity($milkCollection, $this->request->getData());
            if ($this->MilkCollections->save($milkCollection)) {
                $this->Flash->success(__('The milk collection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milk collection could not be saved. Please, try again.'));
        }
        $farms = $this->MilkCollections->Farms->find('list', ['limit' => 200]);
        $animals = $this->MilkCollections->Animals->find('list', ['limit' => 200]);
        $this->set(compact('milkCollection', 'farms', 'animals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Milk Collection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $milkCollection = $this->MilkCollections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $milkCollection = $this->MilkCollections->patchEntity($milkCollection, $this->request->getData());
            if ($this->MilkCollections->save($milkCollection)) {
                $this->Flash->success(__('The milk collection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milk collection could not be saved. Please, try again.'));
        }
        $farms = $this->MilkCollections->Farms->find('list', ['limit' => 200]);
        $animals = $this->MilkCollections->Animals->find('list', ['limit' => 200]);
        $this->set(compact('milkCollection', 'farms', 'animals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Milk Collection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $milkCollection = $this->MilkCollections->get($id);
        if ($this->MilkCollections->delete($milkCollection)) {
            $this->Flash->success(__('The milk collection has been deleted.'));
        } else {
            $this->Flash->error(__('The milk collection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
