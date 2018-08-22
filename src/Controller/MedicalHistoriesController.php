<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * MedicalHistories Controller
 *
 * @property \App\Model\Table\MedicalHistoriesTable $MedicalHistories
 *
 * @method \App\Model\Entity\MedicalHistory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MedicalHistoriesController extends AppController
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
            'contain' => ['Farms', 'Animals', 'VaccinationTypes'],
			'conditions' => ['MedicalHistories.farm_id'=>$this->user->farm_id]
        ];
        $medicalHistories = $this->paginate($this->MedicalHistories);

        $this->set(compact('medicalHistories'));
    }

    /**
     * View method
     *
     * @param string|null $id Medical History id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medicalHistory = $this->MedicalHistories->get($id, [
            'contain' => ['Farms', 'Animals', 'VaccinationTypes']
        ]);

        $this->set('medicalHistory', $medicalHistory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medicalHistory = $this->MedicalHistories->newEntity();
        if ($this->request->is('post')) {
            $medicalHistory = $this->MedicalHistories->patchEntity($medicalHistory, $this->request->getData());
            if ($this->MedicalHistories->save($medicalHistory)) {
                $this->Flash->success(__('The medical history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medical history could not be saved. Please, try again.'));
        }
        $farms = $this->MedicalHistories->Farms->find('list', ['limit' => 200]);
        $animals = $this->MedicalHistories->Animals->find('list', ['limit' => 200]);
        $vaccinationTypes = $this->MedicalHistories->VaccinationTypes->find('list', ['limit' => 200]);
        $this->set(compact('medicalHistory', 'farms', 'animals', 'vaccinationTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Medical History id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medicalHistory = $this->MedicalHistories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medicalHistory = $this->MedicalHistories->patchEntity($medicalHistory, $this->request->getData());
            if ($this->MedicalHistories->save($medicalHistory)) {
                $this->Flash->success(__('The medical history has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medical history could not be saved. Please, try again.'));
        }
        $farms = $this->MedicalHistories->Farms->find('list', ['limit' => 200]);
        $animals = $this->MedicalHistories->Animals->find('list', ['limit' => 200]);
        $vaccinationTypes = $this->MedicalHistories->VaccinationTypes->find('list', ['limit' => 200]);
        $this->set(compact('medicalHistory', 'farms', 'animals', 'vaccinationTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Medical History id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medicalHistory = $this->MedicalHistories->get($id);
        if ($this->MedicalHistories->delete($medicalHistory)) {
            $this->Flash->success(__('The medical history has been deleted.'));
        } else {
            $this->Flash->error(__('The medical history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
