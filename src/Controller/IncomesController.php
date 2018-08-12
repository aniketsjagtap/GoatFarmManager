<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Incomes Controller
 *
 * @property \App\Model\Table\IncomesTable $Incomes
 *
 * @method \App\Model\Entity\Income[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IncomesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['IncomeTypes', 'Farms']
        ];
        $incomes = $this->paginate($this->Incomes);

        $this->set(compact('incomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Income id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $income = $this->Incomes->get($id, [
            'contain' => ['IncomeTypes', 'Farms']
        ]);

        $this->set('income', $income);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $income = $this->Incomes->newEntity();
        if ($this->request->is('post')) {
            $income = $this->Incomes->patchEntity($income, $this->request->getData());
            if ($this->Incomes->save($income)) {
                $this->Flash->success(__('The income has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income could not be saved. Please, try again.'));
        }
        $incomeTypes = $this->Incomes->IncomeTypes->find('list', ['limit' => 200]);
        $farms = $this->Incomes->Farms->find('list', ['limit' => 200]);
        $this->set(compact('income', 'incomeTypes', 'farms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Income id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $income = $this->Incomes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $income = $this->Incomes->patchEntity($income, $this->request->getData());
            if ($this->Incomes->save($income)) {
                $this->Flash->success(__('The income has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The income could not be saved. Please, try again.'));
        }
        $incomeTypes = $this->Incomes->IncomeTypes->find('list', ['limit' => 200]);
        $farms = $this->Incomes->Farms->find('list', ['limit' => 200]);
        $this->set(compact('income', 'incomeTypes', 'farms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Income id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $income = $this->Incomes->get($id);
        if ($this->Incomes->delete($income)) {
            $this->Flash->success(__('The income has been deleted.'));
        } else {
            $this->Flash->error(__('The income could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
