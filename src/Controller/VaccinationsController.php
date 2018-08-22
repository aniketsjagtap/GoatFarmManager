<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Vaccinations Controller
 *
 * @property \App\Model\Table\VaccinationsTable $Vaccinations
 *
 * @method \App\Model\Entity\Vaccination[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VaccinationsController extends AppController
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
            'contain' => ['Farms', 'VaccinationTypes'],
           'conditions' => ['Vaccinations.farm_id'=>$this->user->farm_id]
		];
        $vaccinations = $this->paginate($this->Vaccinations);

        $this->set(compact('vaccinations'));
    }

    /**
     * View method
     *
     * @param string|null $id Vaccination id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaccination = $this->Vaccinations->get($id, [
            'contain' => ['Farms', 'VaccinationTypes']
        ]);

        $this->set('vaccination', $vaccination);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaccination = $this->Vaccinations->newEntity();
        if ($this->request->is('post')) {
            $vaccination = $this->Vaccinations->patchEntity($vaccination, $this->request->getData());
            if ($this->Vaccinations->save($vaccination)) {
                $this->Flash->success(__('The vaccination has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaccination could not be saved. Please, try again.'));
        }
        $farms = $this->Vaccinations->Farms->find('list', ['limit' => 200]);
        $vaccinationTypes = $this->Vaccinations->VaccinationTypes->find('list', ['limit' => 200]);
        $this->set(compact('vaccination', 'farms', 'vaccinationTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaccination id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaccination = $this->Vaccinations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaccination = $this->Vaccinations->patchEntity($vaccination, $this->request->getData());
            if ($this->Vaccinations->save($vaccination)) {
                $this->Flash->success(__('The vaccination has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaccination could not be saved. Please, try again.'));
        }
        $farms = $this->Vaccinations->Farms->find('list', ['limit' => 200]);
        $vaccinationTypes = $this->Vaccinations->VaccinationTypes->find('list', ['limit' => 200]);
        $this->set(compact('vaccination', 'farms', 'vaccinationTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaccination id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaccination = $this->Vaccinations->get($id);
        if ($this->Vaccinations->delete($vaccination)) {
            $this->Flash->success(__('The vaccination has been deleted.'));
        } else {
            $this->Flash->error(__('The vaccination could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
