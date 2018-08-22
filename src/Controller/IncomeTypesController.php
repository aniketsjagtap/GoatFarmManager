<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * IncomeTypes Controller
 *
 * @property \App\Model\Table\IncomeTypesTable $IncomeTypes
 *
 * @method \App\Model\Entity\IncomeType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IncomeTypesController extends AppController
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
            'contain' => ['Farms'],
			'conditions' => ['IncomeTypes.farm_id'=>$this->user->farm_id]
        ];
        $incomeTypes = $this->paginate($this->IncomeTypes);

        $this->set(compact('incomeTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Income Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $incomeType = $this->IncomeTypes->get($id, [
            'contain' => ['Farms']
        ]);

        $this->set('incomeType', $incomeType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $incomeType = $this->IncomeTypes->newEntity();
        if ($this->request->is('post')) {
            $incomeType = $this->IncomeTypes->patchEntity($incomeType, $this->request->getData());
            if ($this->IncomeTypes->save($incomeType)) {
                $this->Flash->success(__('The income type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income type could not be saved. Please, try again.'));
        }
        $farms = $this->IncomeTypes->Farms->find('list', ['limit' => 200]);
        $this->set(compact('incomeType', 'farms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Income Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $incomeType = $this->IncomeTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $incomeType = $this->IncomeTypes->patchEntity($incomeType, $this->request->getData());
            if ($this->IncomeTypes->save($incomeType)) {
                $this->Flash->success(__('The income type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income type could not be saved. Please, try again.'));
        }
        $farms = $this->IncomeTypes->Farms->find('list', ['limit' => 200]);
        $this->set(compact('incomeType', 'farms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Income Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $incomeType = $this->IncomeTypes->get($id);
        if ($this->IncomeTypes->delete($incomeType)) {
            $this->Flash->success(__('The income type has been deleted.'));
        } else {
            $this->Flash->error(__('The income type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
