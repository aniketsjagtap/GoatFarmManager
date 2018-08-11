<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Farms Controller
 *
 * @property \App\Model\Table\FarmsTable $Farms
 *
 * @method \App\Model\Entity\Farm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FarmsController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		if (!($this->Auth->user())) {
			return $this->redirect($this->Auth->logout());
		}
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		
        $this->paginate = [
            'contain' => ['Statuses', 'Licenses']
        ];
        $farms = $this->paginate($this->Farms);

        $this->set(compact('farms'));
    }

    /**
     * View method
     *
     * @param string|null $id Farm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $farm = $this->Farms->get($id, [
            'contain' => ['Statuses', 'Licenses', 'AnimalItems', 'AnimalWeights', 'Animals', 'Breedings', 'ExpenseTypes', 'Expenses', 'IncomeTypes', 'Incomes', 'Items', 'MedicalHistories', 'MilkCollections', 'Purchases', 'Transactions', 'Users', 'Vaccinations']
        ]);

        $this->set('farm', $farm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $farm = $this->Farms->newEntity();
        if ($this->request->is('post')) {
            $farm = $this->Farms->patchEntity($farm, $this->request->getData());
			$id=0;
			$id = $this->Farms->save($farm);
            if ($id > 0 ) {
                $this->Flash->success(__('The farm has been saved.'));

                //return $this->redirect(['action' => 'index']);
				return $id;
            }
           // $this->Flash->error(__('The farm could not be saved. Please, try again.'));
		   return $id;
        }
      //  $statuses = $this->Farms->Statuses->find('list', ['limit' => 200]);
       // $licenses = $this->Farms->Licenses->find('list', ['limit' => 200]);
       // $this->set(compact('farm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Farm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $farm = $this->Farms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $farm = $this->Farms->patchEntity($farm, $this->request->getData());
            if ($this->Farms->save($farm)) {
                $this->Flash->success(__('The farm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The farm could not be saved. Please, try again.'));
        }
        $statuses = $this->Farms->Statuses->find('list', ['limit' => 200]);
        $licenses = $this->Farms->Licenses->find('list', ['limit' => 200]);
        $this->set(compact('farm', 'statuses', 'licenses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Farm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $farm = $this->Farms->get($id);
        if ($this->Farms->delete($farm)) {
            $this->Flash->success(__('The farm has been deleted.'));
        } else {
            $this->Flash->error(__('The farm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
