<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AnimalTypes Controller
 *
 * @property \App\Model\Table\AnimalTypesTable $AnimalTypes
 *
 * @method \App\Model\Entity\AnimalType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimalTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $animalTypes = $this->paginate($this->AnimalTypes);

        $this->set(compact('animalTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Animal Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animalType = $this->AnimalTypes->get($id, [
            'contain' => []
        ]);

        $this->set('animalType', $animalType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animalType = $this->AnimalTypes->newEntity();
        if ($this->request->is('post')) {
            $animalType = $this->AnimalTypes->patchEntity($animalType, $this->request->getData());
            if ($this->AnimalTypes->save($animalType)) {
                $this->Flash->success(__('The animal type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal type could not be saved. Please, try again.'));
        }
        $this->set(compact('animalType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animalType = $this->AnimalTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animalType = $this->AnimalTypes->patchEntity($animalType, $this->request->getData());
            if ($this->AnimalTypes->save($animalType)) {
                $this->Flash->success(__('The animal type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animal type could not be saved. Please, try again.'));
        }
        $this->set(compact('animalType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animalType = $this->AnimalTypes->get($id);
        if ($this->AnimalTypes->delete($animalType)) {
            $this->Flash->success(__('The animal type has been deleted.'));
        } else {
            $this->Flash->error(__('The animal type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
