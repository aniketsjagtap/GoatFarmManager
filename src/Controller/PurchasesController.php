<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Purchases Controller
 *
 * @property \App\Model\Table\PurchasesTable $Purchases
 *
 * @method \App\Model\Entity\Purchase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PurchasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Units', 'Farms']
        ];
        $purchases = $this->paginate($this->Purchases);

        $this->set(compact('purchases'));
    }

    /**
     * View method
     *
     * @param string|null $id Purchase id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $purchase = $this->Purchases->get($id, [
            'contain' => ['Items', 'Units', 'Farms']
        ]);

        $this->set('purchase', $purchase);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $purchase = $this->Purchases->newEntity();
        if ($this->request->is('post')) {
            $purchase = $this->Purchases->patchEntity($purchase, $this->request->getData());
            if ($this->Purchases->save($purchase)) {
                $this->Flash->success(__('The purchase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase could not be saved. Please, try again.'));
        }
        $items = $this->Purchases->Items->find('list', ['limit' => 200]);
        $units = $this->Purchases->Units->find('list', ['limit' => 200]);
        $farms = $this->Purchases->Farms->find('list', ['limit' => 200]);
        $this->set(compact('purchase', 'items', 'units', 'farms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Purchase id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $purchase = $this->Purchases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchase = $this->Purchases->patchEntity($purchase, $this->request->getData());
            if ($this->Purchases->save($purchase)) {
                $this->Flash->success(__('The purchase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchase could not be saved. Please, try again.'));
        }
        $items = $this->Purchases->Items->find('list', ['limit' => 200]);
        $units = $this->Purchases->Units->find('list', ['limit' => 200]);
        $farms = $this->Purchases->Farms->find('list', ['limit' => 200]);
        $this->set(compact('purchase', 'items', 'units', 'farms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Purchase id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchase = $this->Purchases->get($id);
        if ($this->Purchases->delete($purchase)) {
            $this->Flash->success(__('The purchase has been deleted.'));
        } else {
            $this->Flash->error(__('The purchase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
