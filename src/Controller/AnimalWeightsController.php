<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AnimalWeights Controller
 *
 * @property \App\Model\Table\AnimalWeightsTable $AnimalWeights
 *
 * @method \App\Model\Entity\AnimalWeight[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimalWeightsController extends AppController
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
        $animalWeights = $this->paginate($this->AnimalWeights);

        $this->set(compact('animalWeights'));
    }

    /**
     * View method
     *
     * @param string|null $id Animal Weight id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animalWeight = $this->AnimalWeights->get($id, [
            'contain' => ['Farms', 'Animals']
        ]);

        $this->set('animalWeight', $animalWeight);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animalWeight = $this->AnimalWeights->newEntity();
        if ($this->request->is('post')) {
            $animalWeight = $this->AnimalWeights->patchEntity($animalWeight, $this->request->getData());
            if ($this->AnimalWeights->save($animalWeight)) {
                $this->Flash->success(__('The animal weight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal weight could not be saved. Please, try again.'));
        }
        $farms = $this->AnimalWeights->Farms->find('list', ['limit' => 200]);
        $animals = $this->AnimalWeights->Animals->find('list', ['limit' => 200]);
        $this->set(compact('animalWeight', 'farms', 'animals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal Weight id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animalWeight = $this->AnimalWeights->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animalWeight = $this->AnimalWeights->patchEntity($animalWeight, $this->request->getData());
            if ($this->AnimalWeights->save($animalWeight)) {
                $this->Flash->success(__('The animal weight has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal weight could not be saved. Please, try again.'));
        }
        $farms = $this->AnimalWeights->Farms->find('list', ['limit' => 200]);
        $animals = $this->AnimalWeights->Animals->find('list', ['limit' => 200]);
        $this->set(compact('animalWeight', 'farms', 'animals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal Weight id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animalWeight = $this->AnimalWeights->get($id);
        if ($this->AnimalWeights->delete($animalWeight)) {
            $this->Flash->success(__('The animal weight has been deleted.'));
        } else {
            $this->Flash->error(__('The animal weight could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
