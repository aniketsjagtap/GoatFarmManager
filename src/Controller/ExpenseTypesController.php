<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * ExpenseTypes Controller
 *
 * @property \App\Model\Table\ExpenseTypesTable $ExpenseTypes
 *
 * @method \App\Model\Entity\ExpenseType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpenseTypesController extends AppController
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
			'conditions' => ['ExpenseTypes.farm_id'=>$this->user->farm_id]
        ];
        $expenseTypes = $this->paginate($this->ExpenseTypes);

        $this->set(compact('expenseTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Expense Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expenseType = $this->ExpenseTypes->get($id, [
            'contain' => ['Farms']
        ]);

        $this->set('expenseType', $expenseType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expenseType = $this->ExpenseTypes->newEntity();
        if ($this->request->is('post')) {
            $expenseType = $this->ExpenseTypes->patchEntity($expenseType, $this->request->getData());
            if ($this->ExpenseTypes->save($expenseType)) {
                $this->Flash->success(__('The expense type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expense type could not be saved. Please, try again.'));
        }
        $farms = $this->ExpenseTypes->Farms->find('list', ['limit' => 200]);
        $this->set(compact('expenseType', 'farms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expense Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expenseType = $this->ExpenseTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expenseType = $this->ExpenseTypes->patchEntity($expenseType, $this->request->getData());
            if ($this->ExpenseTypes->save($expenseType)) {
                $this->Flash->success(__('The expense type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expense type could not be saved. Please, try again.'));
        }
        $farms = $this->ExpenseTypes->Farms->find('list', ['limit' => 200]);
        $this->set(compact('expenseType', 'farms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expense Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expenseType = $this->ExpenseTypes->get($id);
        if ($this->ExpenseTypes->delete($expenseType)) {
            $this->Flash->success(__('The expense type has been deleted.'));
        } else {
            $this->Flash->error(__('The expense type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
