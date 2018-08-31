<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * AnimalItems Controller
 *
 * @property \App\Model\Table\AnimalItemsTable $AnimalItems
 *
 * @method \App\Model\Entity\AnimalItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimalItemsController extends AppController
{
	  public function initialize()
    {
        parent::initialize();
       if (!($this->Auth->user())) {
            return $this->redirect($this->Auth->logout());
        }
		 $usersTable = TableRegistry::get('Users');

        $usersTable->newEntity();
        $this->user= $usersTable->get($this->Auth->user('id'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Farms', 'Items'],
			 'conditions' => ['AnimalItems.farm_id'=>$this->user->farm_id]
        ];
        $animalItems = $this->paginate($this->AnimalItems);

        $this->set(compact('animalItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Animal Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animalItem = $this->AnimalItems->get($id, [
            'contain' => ['Farms', 'Items'],
			 'conditions' => ['AnimalItems.farm_id'=>$this->user->farm_id]
        ]);

        $this->set('animalItem', $animalItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animalItem = $this->AnimalItems->newEntity();
        if ($this->request->is('post')) {
            $animalItem = $this->AnimalItems->patchEntity($animalItem, $this->request->getData());
			$animalItem->farm_id = $this->user->farm_id;
			$animalItem->date = time();
            if ($this->AnimalItems->save($animalItem)) {
                $this->Flash->success(__('The animal item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
			
            $this->Flash->error(__('The animal item could not be saved. Please, try again.'));
        }
        $farms = $this->AnimalItems->Farms->find('list', ['limit' => 200]);
      //  $animals = $this->AnimalItems->Animals->find('list', ['limit' => 200]);
        $items = $this->AnimalItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('animalItem', 'farms', 'animals', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animalItem = $this->AnimalItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animalItem = $this->AnimalItems->patchEntity($animalItem, $this->request->getData());
            if ($this->AnimalItems->save($animalItem)) {
                $this->Flash->success(__('The animal item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal item could not be saved. Please, try again.'));
        }
        $farms = $this->AnimalItems->Farms->find('list', ['limit' => 200]);
        $animals = $this->AnimalItems->Animals->find('list', ['limit' => 200]);
        $items = $this->AnimalItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('animalItem', 'farms', 'animals', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animalItem = $this->AnimalItems->get($id);
        if ($this->AnimalItems->delete($animalItem)) {
            $this->Flash->success(__('The animal item has been deleted.'));
        } else {
            $this->Flash->error(__('The animal item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
