<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Animals Controller
 *
 * @property \App\Model\Table\AnimalsTable $Animals
 *
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Farms', 'BreedTypes', 'AnimalTypes', 'Statuses']
        ];
        $animals = $this->paginate($this->Animals);

        $this->set(compact('animals'));
    }

    /**
     * View method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => ['Farms', 'BreedTypes', 'AnimalTypes', 'MaleParentBreedTypes', 'FemaleParentBreedTypes', 'Statuses', 'AnimalWeights', 'AnimalItems', 'MedicalHistories', 'MilkCollections']
        ]);

        $this->set('animal', $animal);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animal = $this->Animals->newEntity();
        if ($this->request->is('post')) {
            $animal = $this->Animals->patchEntity($animal, $this->request->getData());
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal could not be saved. Please, try again.'));
        }
        $farms = $this->Animals->Farms->find('list', ['limit' => 200]);
        $breedTypes = $this->Animals->BreedTypes->find('list', ['limit' => 200]);
        $animalTypes = $this->Animals->AnimalTypes->find('list', ['limit' => 200]);
        
        $statuses = $this->Animals->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('animal', 'farms', 'breedTypes', 'animalTypes', 'statuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animal = $this->Animals->patchEntity($animal, $this->request->getData());
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal could not be saved. Please, try again.'));
        }
        $farms = $this->Animals->Farms->find('list', ['limit' => 200]);
        $breedTypes = $this->Animals->BreedTypes->find('list', ['limit' => 200]);
        $animalTypes = $this->Animals->AnimalTypes->find('list', ['limit' => 200]);
        $maleParentBreedTypes = $this->Animals->MaleParentBreedTypes->find('list', ['limit' => 200]);
        $femaleParentBreedTypes = $this->Animals->FemaleParentBreedTypes->find('list', ['limit' => 200]);
        $statuses = $this->Animals->Statuses->find('list', ['limit' => 200]);
        $this->set(compact('animal', 'farms', 'breedTypes', 'animalTypes', 'maleParentBreedTypes', 'femaleParentBreedTypes', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animal = $this->Animals->get($id);
        if ($this->Animals->delete($animal)) {
            $this->Flash->success(__('The animal has been deleted.'));
        } else {
            $this->Flash->error(__('The animal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
