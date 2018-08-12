<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VaccinationTypes Controller
 *
 * @property \App\Model\Table\VaccinationTypesTable $VaccinationTypes
 *
 * @method \App\Model\Entity\VaccinationType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VaccinationTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $vaccinationTypes = $this->paginate($this->VaccinationTypes);

        $this->set(compact('vaccinationTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Vaccination Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaccinationType = $this->VaccinationTypes->get($id, [
            'contain' => []
        ]);

        $this->set('vaccinationType', $vaccinationType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaccinationType = $this->VaccinationTypes->newEntity();
        if ($this->request->is('post')) {
            $vaccinationType = $this->VaccinationTypes->patchEntity($vaccinationType, $this->request->getData());
            if ($this->VaccinationTypes->save($vaccinationType)) {
                $this->Flash->success(__('The vaccination type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaccination type could not be saved. Please, try again.'));
        }
        $this->set(compact('vaccinationType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaccination Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaccinationType = $this->VaccinationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaccinationType = $this->VaccinationTypes->patchEntity($vaccinationType, $this->request->getData());
            if ($this->VaccinationTypes->save($vaccinationType)) {
                $this->Flash->success(__('The vaccination type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaccination type could not be saved. Please, try again.'));
        }
        $this->set(compact('vaccinationType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaccination Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaccinationType = $this->VaccinationTypes->get($id);
        if ($this->VaccinationTypes->delete($vaccinationType)) {
            $this->Flash->success(__('The vaccination type has been deleted.'));
        } else {
            $this->Flash->error(__('The vaccination type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
